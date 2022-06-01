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
 * This file contains the definition for the renderable classes for the booking instance
 *
 * @package   local_musi
 * @copyright 2021 Georg Maißer {@link http://www.wunderbyte.at}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_musi\output;

use html_writer;
use mod_booking\singleton_service;
use moodle_url;
use renderer_base;
use renderable;
use stdClass;
use templatable;

/**
 * This class prepares data for displaying a booking option instance
 *
 * @package local_musi
 * @copyright 2021 Georg Maißer {@link http://www.wunderbyte.at}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class card_content_settings implements renderable, templatable {

    /** @var stdClass $title */
    public $data = null;

    /**
     * In the Constructor, we gather all the data we need ans store it in the data property.
     */
    public function __construct() {

        $this->data = self::return_content();
    }

    /**
     * Generate the stats for this website
     *
     * @return stdClass
     */
    private static function return_content() {
        global $DB;

        $data = new stdClass();

        $optionid = get_config('local_musi', 'shortcodessetinstance');
        if ($optionid) {
            $url = new moodle_url('/mod/booking/view.php', ['id' => $optionid]);
            $data->editbookinginstance = html_writer::link($url->out(false), '=>');
        } else {
            $url = new moodle_url('/admin/category.php?category=local_musi');
            $data->editbookinginstance = html_writer::link($url->out(false), '=>');
        }

        $url = new moodle_url('/mod/booking/pricecategories.php');
        $data->editpricecategories = html_writer::link($url->out(false), '=>');

        $url = new moodle_url('/mod/booking/semesters.php');
        $data->editsemesters = html_writer::link($url->out(false), '=>');

        return $data;
    }

    /**
     * @param renderer_base $output
     * @return array
     */
    public function export_for_template(renderer_base $output) {

        // We transform the data object to an array where we can read key & value.
        foreach ($this->data as $key => $value) {
            $returnarray['item'][] = [
                'key' => get_string($key, 'local_musi'),
                'value' => $value
            ];
        }

        return $returnarray;
    }
}
