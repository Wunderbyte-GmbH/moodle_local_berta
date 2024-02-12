<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains the definition for the renderable classes for transactions list
 *
 * @package   local_berta
 * @copyright 2024 Christian Badusch {@link http://www.wunderbyte.at}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_berta\output;

use local_berta\table\berta_transactions_table;
use renderable;
use renderer_base;
use templatable;
use stdClass;
use local_berta\berta_payment_helper;

/**
 * This class prepares to data to render transactionstable in mustache template
 */
class transactionslist implements renderable, templatable {
    private $tabledata = [];

    public function __construct() {
        global $DB;

        // Create instance of transactions wb_table and specify columns and headers.
        $table = new berta_transactions_table('berta_transactions_table');

        // Headers.
        $table->define_headers([
            get_string('id', 'local_berta'),
            get_string('timecreated', 'local_shopping_cart'),
            get_string('timemodified', 'local_shopping_cart'),
            get_string('transactionid', 'local_berta'),
            get_string('itemid', 'local_berta'),
            get_string('username', 'local_berta'),
            get_string('price', 'local_berta'),
            get_string('gateway', 'local_berta'),
            get_string('status', 'local_berta'),
            get_string('names', 'local_berta'),
            get_string('action', 'local_berta'),
        ]);

        // Columns.
        $table->define_columns(['id', 'timecreated', 'timemodified', 'tid', 'itemid',
            'username', 'price', 'gateway', 'status', 'names', 'action']);

        // Pass SQL to table.
        // TODO: Add functionality for other providers.
        list($fields, $from, $where) = self::return_all_sql_transaction();

        $table->set_filter_sql($fields, $from, $where, '');

        $table->sortable(true, 'timecreated', SORT_DESC);

        // Define Filters.
        $table->define_filtercolumns([
            'status' => [
                'localizedname' => get_string('status', 'local_berta'),
                '0' => get_string('openorder', 'local_berta'),
                '3' => get_string('bookedorder', 'local_berta'),
            ]
        ]);

        // Full text search columns.
        $table->define_fulltextsearchcolumns(['id', 'timecreated', 'timemodified', 'tid', 'itemid',
            'username', 'price', 'gateway', 'status', 'names']);

        // Sortable columns.
        $table->define_sortablecolumns(['id', 'timecreated', 'timemodified', 'tid', 'itemid',
            'username', 'price', 'gateway', 'status', 'names']);

        $table->define_cache('local_berta', 'cachedpaymenttable');

        $table->pageable(true);

        // Pass html to render.
        list($idstring, $encodedtable, $html) = $table->lazyouthtml(50, true);
        $this->tabledata = $html;
        // phpcs:ignore Squiz.PHP.CommentedOutCode.Found
        // Not lazy laod : $this->tabledata = $table->outhtml(20, true).

    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output): stdClass {
        $data = new stdClass();
        $data->table = $this->tabledata;
        return $data;
    }

     /**
      * Return SQL Query in correct format for wb_table
      *
      * @return array
      */
    private static function return_all_sql_transaction():array {
        global $DB;

        $concatsql = $DB->sql_group_concat("sch.itemname", "<br>", "sch.itemname");
        $concatusername = $DB->sql_fullname("u.lastname", "u.firstname");

        $gatewaynames = berta_payment_helper::get_supported_payment_gateways();
        $gatewayselectstring = "";

        foreach ($gatewaynames as $gwname) {
            $gwselect = "SELECT " . $DB->sql_concat("'" . "{$gwname} " . "'", "$gwname.id") .
                " AS id, $gwname.tid, $gwname.itemid, $gwname.userid, $gwname.price, $gwname.status,
                $gwname.timecreated, $gwname.timemodified,
                $concatusername AS username, '{$gwname}' as gateway, $concatsql AS names FROM
            {paygw_{$gwname}_openorders} $gwname
            LEFT JOIN {local_shopping_cart_history} sch
            ON $gwname.itemid = sch.identifier AND $gwname.userid=sch.userid
            LEFT JOIN {user} u
            ON u.id = $gwname.userid
            GROUP BY $gwname.id, u.firstname, u.lastname";

            if ($gatewayselectstring === '') {
                $gatewayselectstring = '(' . $gwselect;
            } else {
                $gatewayselectstring = $gatewayselectstring . ' UNION ' . $gwselect;
            }
        }

        $fields = '*';
        $from = $gatewayselectstring . ') as s1';
        $where = "1 = 1";

        return [$fields, $from, $where];
    }
}
