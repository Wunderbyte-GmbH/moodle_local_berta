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
 * This class contains a list of webservice functions related to the Shopping Cart Module by Wunderbyte.
 *
 * @package    local_berta
 * @copyright  2024 Georg Maißer <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

declare(strict_types=1);

namespace local_berta\external;

use context_system;
use external_api;
use external_function_parameters;
use external_multiple_structure;
use external_value;
use external_single_structure;
use moodle_exception;
use context_coursecat;
use local_berta\dashboard;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/externallib.php');

/**
 * External Service for shopping cart.
 *
 * @package   local_berta
 * @copyright 2024 Wunderbyte GmbH {@link http://www.wunderbyte.at}
 * @author    Georg Maißer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_parent_categories extends external_api {

    /**
     * Describes the paramters for add_item_to_cart.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters(): external_function_parameters {
        return new external_function_parameters([]);
    }

    /**
     * Webservice for shopping_cart class to add a new item to the cart.
     *
     * @param string $component
     * @param string $area
     *
     * @return array
     */
    public static function execute(): array {
        global $DB;

        require_login();

        $returnarray = [[
            'id' => 0,
            'name' => 'General',
            'coursecount' => 0,
        ]];

        $records = dashboard::return_all_parents();

        foreach ($records as $record) {

          $context = context_coursecat::instance($record->id);

            if (!has_capability('local/berta:view', $context)) {
                continue;
            }
            $returnarray[0]['coursecount'] += $record->coursecount;
            $returnarray[] = (array)$record;
        }
        return $returnarray;
    }

    /**
     * Returns array of items.
     *
     * @return external_multiple_structure
     */
    public static function execute_returns(): external_multiple_structure {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'Item id'),
                    'name' => new external_value(PARAM_TEXT, 'Item name'),
                    'coursecount' => new external_value(PARAM_TEXT, 'Coursecount'),
                )
            )
        );
    }
}
