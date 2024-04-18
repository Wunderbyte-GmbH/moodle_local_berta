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
 * An overview of all courses the currently logged in user
 * either teacher or has booked.
 *
 * @package local_berta
 * @copyright 2024 Wunderbyte GmbH <info@wunderbyte.at>
 * @author Bernhard Fischer
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_booking\singleton_service;

require_once(__DIR__ . '/../../config.php');

// No guest autologin.
require_login(0, false);

global $DB, $PAGE, $OUTPUT, $USER;

if (!$context = context_system::instance()) {
    throw new moodle_exception('badcontext');
}

$isteacher = false;

// Check if optionid is valid.
$PAGE->set_context($context);

$title = get_string('mycourses', 'local_berta');
$archive = get_string('archive', 'local_berta');

$PAGE->set_url('/local/berta/meinekurse.php');
$PAGE->navbar->add($title);
$PAGE->set_title(format_string($title));
$PAGE->set_pagelayout('base');
$PAGE->add_body_class('local_berta-meinekurse');

// Get archive cmids.
$archivecmids = [];
$archivecmidsstring = get_config('local_berta', 'shortcodesarchivecmids');
if (!empty($archivecmidsstring)) {
    $archivecmidsstring = str_replace(';', ',', $archivecmidsstring);
    $archivecmidsstring = str_replace(' ', '', $archivecmidsstring);
    $archivecmids = explode(',', $archivecmidsstring);
}

echo $OUTPUT->header();

echo "<div class='text-center h1'>$title</div>";
echo "<hr class='w-100 border border-light'/>";

if ($DB->record_exists('booking_teachers', ['userid' => $USER->id])) {
    $isteacher = true;
    echo html_writer::div(get_string('coursesiteach', 'local_berta'), 'h2 mt-2 mb-2 text-center');
    echo format_text("[trainerkursekarten]", FORMAT_HTML);
}

echo html_writer::div(get_string('coursesibooked', 'local_berta'), 'h2 mt-3 mb-2 text-center');
echo format_text("[unifiedmybookingslist cards=1]", FORMAT_HTML);

if (!empty($archivecmids)) {
    echo "<hr class='w-100 border border-light'/>";
    echo "<div class='text-center h1'>$archive</div>";

    // Archive: Courses I taught.
    if ($isteacher) {
        echo html_writer::div(get_string('coursesiteacharchive', 'local_berta'), 'h2 mt-2 mb-2 text-center  text-secondary');

        // Start accordion.
        $archivehtml = '<div class="accordion" id="coursesiteacharchive">';

        // Add a section for each cmid.
        foreach ($archivecmids as $archivecmid) {

            $bookingsettings = singleton_service::get_instance_of_booking_settings_by_cmid($archivecmid);

            if (!empty($bookingsettings)) {
                $archivehtml .=
                    "<div class='card'>
                        <div class='card-header' id='coursesiteacharchive-cmid-$archivecmid'>
                            <h2 class='mb-0'>
                                <button class='btn btn-link btn-block text-left' type='button' data-toggle='collapse'
                                data-target='#collapse-teach-cmid-$archivecmid' aria-expanded='true'
                                aria-controls='collapse-teach-cmid-$archivecmid'>
                                    $bookingsettings->name
                                </button>
                            </h2>
                        </div>
                        <div id='collapse-teach-cmid-$archivecmid' class='collapse'
                            aria-labelledby='coursesiteacharchive-cmid-$archivecmid' data-parent='#coursesiteacharchive'>
                            <div class='card-body'>" .
                                format_text("[trainerkursekarten id=$archivecmid lazy=1]", FORMAT_HTML)
                            . "</div>
                        </div>
                    </div>";
            }
        }
        $archivehtml .= '</div>';
        echo $archivehtml;
    }

    // Archive: Courses I booked.
    echo html_writer::div(get_string('coursesibookedarchive', 'local_berta'), 'h2 mt-3 mb-2 text-center text-secondary');
    // Start accordion.
    $archivehtml = '<div class="accordion" id="coursesibookedarchive">';
    // Add a section for each cmid.
    foreach ($archivecmids as $archivecmid) {

        $bookingsettings = singleton_service::get_instance_of_booking_settings_by_cmid($archivecmid);

        if (!empty($bookingsettings)) {
            $archivehtml .=
                "<div class='card'>
                    <div class='card-header' id='coursesibookedarchive-cmid-$archivecmid'>
                        <h2 class='mb-0'>
                            <button class='btn btn-link btn-block text-left' type='button' data-toggle='collapse'
                            data-target='#collapse-booked-cmid-$archivecmid' aria-expanded='true'
                            aria-controls='collapse-booked-cmid-$archivecmid'>
                                $bookingsettings->name
                            </button>
                        </h2>
                    </div>
                    <div id='collapse-booked-cmid-$archivecmid' class='collapse'
                        aria-labelledby='coursesibookedarchive-cmid-$archivecmid' data-parent='#coursesibookedarchive'>
                        <div class='card-body'>" .
                            format_text("[meinekursekarten id=$archivecmid lazy=1]", FORMAT_HTML)
                        . "</div>
                    </div>
                </div>";
        }
    }
    $archivehtml .= '</div>';
    echo $archivehtml;
}

echo $OUTPUT->footer();
