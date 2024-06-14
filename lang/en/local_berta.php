<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_berta
 * @category    string
 * @copyright   2024 Wunderbyte Gmbh <info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'BERTA Plugin';

$string['dashboard'] = 'Dashboard';
$string['messageprovider:sendmessages'] = 'Send messages';
$string['berta:cansendmessages'] = 'Can send messages';
$string['berta:editavailability'] = 'Can change availability and reservations';
$string['berta:editsubstitutionspool'] = 'Can edit the substitutions pool of teachers for different courses';
$string['berta:viewsubstitutionspool'] = 'Can view the substitutions pool of teachers for different courses and send emails to substitution pools';

// Caches.
$string['cachedef_cachedpaymenttable'] = 'Cached payment table (transaction list).';

// Shortcodes.
$string['shortcodelists'] = 'Shortcode lists';
$string['shortcodelists_desc'] = 'Configure lists generated by shortcodes (e.g. [allekurseliste]).';
$string['shortcodelists_showdescriptions'] = 'Show descriptions of booking options';
$string['shortcodeslistofbookingoptions'] = 'All courses as list';
$string['shortcodeslistofbookingoptionsascards'] = 'All courses as cards';
$string['shortcodeslistofmybookingoptionsascards'] = 'My courses as cards';
$string['shortcodeslistofmybookingoptionsaslist'] = 'My courses as list';
$string['shortcodeslistofteachersascards'] = 'List of teachers as cards';
$string['shortcodeslistofmytaughtbookingoptionsascards'] = 'Courses I teach as cards';
$string['shortcodesshowallsports'] = "List of all courses";
$string['bertashortcodes:showstart'] = 'Show "Start time of the course"';
$string['bertashortcodes:showend'] = 'Show "End time of the course"';
$string['bertashortcodes:showbookablefrom'] = 'Show "Bookable from"';
$string['bertashortcodes:showbookableuntil'] = 'Show "Bookable until"';
$string['bertashortcodes:showfiltercoursetime'] = 'Show filter "Course time"';
$string['bertashortcodes:showfilterbookingtime'] = 'Show filter "Booking time"';

$string['nobookinginstancesselected'] = "Currently, no booking instances are selected to provide booking options.";

// General strings.
$string['campaigns'] = 'Campaigns';
$string['collapsedescriptionoff'] = 'Do not collapse descriptions';
$string['collapsedescriptionmaxlength'] = 'Collapse descriptions (max. length)';
$string['collapsedescriptionmaxlength_desc'] = 'Enter the maximum length of characters of a description. Descriptions having more characters will be collapsed.';
$string['dayofweek'] = 'Weekday';
$string['editavailabilityanddescription'] = 'Edit availability & description';
$string['editavailability'] = 'Edit availability';
$string['editdescription'] = 'Edit description';
$string['substitutionspool'] = 'Substitutions pool for {$a}';
$string['editsubstitutionspool'] = 'Edit substitutions pool';
$string['viewsubstitutionspool'] = 'View substitutions pool';
$string['mailtosubstitutionspool'] = 'Send email to substitutions pool';
$string['substitutionspool:infotext'] = 'Teachers allowed to substitute <b>{$a}</b>:';
$string['substitutionspool:mailproblems'] = 'Click here if you have problems with sending emails...';
$string['substitutionspool:copypastemails'] = 'You can copy the emails manually and paste them into the BCC of your mail client:';
$string['gateway'] = 'Gateway';
$string['invisibleoption'] = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
$string['showmore'] = 'Show more';
$string['sportsdivision'] = 'Type of courses';
$string['sportsdivisions'] = 'Types of courses';
$string['titleprefix'] = 'Course number';
$string['unknown'] = 'Unknown';

// Errors.
$string['error:starttime'] = 'Start has to be before end.';
$string['error:endtime'] = 'End has to be after start.';

// List of all courses.
$string['allcourses'] = 'All courses';

// Cards.
$string['listofsports'] = 'Types of courses';
$string['listofsports_desc'] = 'View and edit the list of courses on this system';

$string['numberofcourses'] = 'Courses';
$string['numberofcourses_desc'] = 'Information about courses and bookings on this platform.';

$string['numberofentities'] = 'Number of entities';
$string['numberofentities_desc'] = 'Information about the entities on the platform.';

$string['coursesavailable'] = 'Courses available';
$string['coursesbooked'] = 'Courses booked';
$string['coursesincart'] = 'Courses in shopping cart';
$string['coursesdeleted'] = 'Deleted courses';
$string['coursesboughtcard'] = 'Courses bought online';
$string['coursespending'] = 'Courses pending';
$string['coursesboughtcashier'] = 'Courses bought at cashier';
$string['paymentsaborted'] = 'Aborted payments';
$string['bookinganswersdeleted'] = "Deleted booking answers";

$string['settingsandreports'] = 'Settings & Reports';
$string['settingsandreports_desc'] = 'Various settings and reports relevant for BERTA.';
$string['editentities'] = 'Edit entities';
$string['editentitiescategories'] = 'Edit categories of entities';
$string['importentities'] = 'Import entities';
$string['editbookinginstance'] = 'Edit semester instance';
$string['editbookings'] = 'Overview of courses';
$string['viewteachers'] = 'Teacher overview';
$string['teachersinstancereport'] = 'Teachers instance report (courses, missing hours, substitutions)';
$string['sapdailysums'] = 'SAP booking files';

$string['addbookinginstance'] = '<span class="bg-danger font-weight-bold">No semester instance! Click here to choose one.</span>';
$string['editpricecategories'] = 'Edit price categories';
$string['editsemesters'] = 'Edit semesters';
$string['changebookinginstance'] = 'Set default semester instance';
$string['editbotags'] = 'Edit tags';
$string['createbotag'] = 'Create new tag...';
$string['createbotag:helptext'] = '<p>
<a data-toggle="collapse" href="#collapseTagsHelptext" role="button" aria-expanded="false" aria-controls="collapseTagsHelptext">
  <i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;Help: How to configure tags...</span>
</a>
</p>
<div class="collapse" id="collapseTagsHelptext">
<div class="card card-body">
  <p>In order to use tags, you have to create a Booking customfield for booking options of the type "Dynamic Dropdown menu" which has the following settings:</p>
  <ul>
  <li><strong>Category: </strong>Tags</li>
  <li><strong>Name: </strong>Tags</li>
  <li><strong>Short name: </strong>botags</li>
  <li><strong>SQL query: </strong><code>SELECT botag as id, botag as data FROM {local_berta_botags}</code></li>
  <li><strong>Auto-complete: </strong><span class="text-success">active</span></li>
  <li><strong>Multi select: </strong><span class="text-success">active</span></li>
  </ul>
  <p>Now you can apply the tags you have created here to your booking options.<br>You need to have created at least one tag, in order to be able to use tagging.</p>
</div>
</div>';

// Edit sports.
$string['youneedcustomfieldsport'] = 'The customfield with the shortname "organisation" is not set for this booking option.';

// Shortcodes.
$string['shortcodeslistofbookingoptions'] = 'List of booking options';
$string['shortcodeslistofbookingoptionsascards'] = 'List of booking options as cards';
$string['shortcodeslistofmybookingoptionsascards'] = 'List of my booked booking options as cards';
$string['shortcodessetdefaultinstance'] = 'Set default instance for shortcodes implementation';
$string['shortcodessetdefaultinstancedesc'] = 'This allows you to change instances quickly when you want to change
a lot of them at once. One example would be that you have a lot of teaching categories and they are listed on different
pages, but you need to change the booking options form one semester to the next.';
$string['shortcodessetinstance'] = 'Set the booking instance which should be used by default';
$string['shortcodessetinstancedesc'] = 'If you use this setting, you can use the shortcode like this: [allekurseliste category="philosophy"]
So no need to specify the ID';
$string['shortcodesnobookinginstance'] = '<div class="text-danger font-weight-bold">No booking instance created yet!</div>';
$string['shortcodesnobookinginstancedesc'] = 'You need to create at least one booking instance within a moodle course before you can choose one.';
$string['shortcodesuserinformation'] = 'Display user information';
$string['shortcodesarchivecmids'] = 'List of IDs for "My courses"-archive';
$string['shortcodesarchivecmids_desc'] = 'Enter a comma-separated list of course module ids (cmids) of booking instances you want to show in the "My courses"-archive.';

$string['archive'] = '<i class="fa fa-archive" aria-hidden="true"></i> Archive';
$string['mycourses'] = 'My courses';
$string['coursesibooked'] = '<i class="fa fa-ticket" aria-hidden="true"></i> Courses I booked in the current semester:';
$string['coursesibookedarchive'] = 'Courses I booked in previous semesters:';
$string['coursesiteach'] = '<i class="fa fa-graduation-cap" aria-hidden="true"></i> Courses I teach in the current semester:';
$string['coursesiteacharchive'] = 'Courses I taught in previous semesters:';

// Access.php.
$string['berta:canedit'] = 'User can edit';

// Filter.
$string['organisation'] = 'Organisation';
$string['location'] = 'Location';

// Nav.
$string['berta'] = 'u:Skills';
$string['entities'] = 'Manage locations';
$string['coursename'] = "Coursename";

// Contract management.
$string['contractmanagementsettings'] = 'Contract management settings';
$string['contractmanagementsettings_desc'] = 'Configure how contracts affect staff invoices and define special cases.';
$string['contractformula'] = 'Contract formula';
$string['contractformula_desc'] = 'Configure how contracts affect staff invoices and define special cases using a JSON formula.';
$string['contractformulatest'] = 'Test the contract formula';
$string['editcontractformula'] = 'Edit contract formula';

// Userinformation.mustache.
$string['userinformation'] = 'User Information';

// My Courses List.
$string['tocoursecontent'] = 'Course content';

// Shortlist section information.
$string['dayofweekalt'] = 'Day of week and the time slot, when a course will take place';
$string['locationalt'] = 'Location of the course';
$string['bookingsalt'] = 'Available course slots and maximum capacity';
$string['teacheralt'] = 'Teacher';
$string['imagealt'] = 'Course cover image';

// Transactions List.
$string['status'] = 'Status';
$string['openorder'] = 'Open';
$string['bookedorder'] = 'Complete';
$string['transactionslist'] = 'Payment transactions';
$string['checkstatus'] = 'Check status';
$string['statuschanged'] = 'Status changed';
$string['statusnotchanged'] = 'Status not changed';

$string['id'] = 'Entry';
$string['transactionid'] = 'Internal ID';
$string['itemid'] = 'ItemID';
$string['username'] = 'User';
$string['price'] = 'Amount';
$string['names'] = 'Purchases';
$string['action'] = 'Action';

// Easy availability feature.
$string['easyavailability:overbook'] = 'Even if the course is fully booked';
$string['easyavailability:previouslybooked'] = 'Users who already booked a specific course are always allowed to book';
$string['easyavailability:selectusers'] = 'Selected users are allowed to book outside this timespan';
$string['easyavailability:formincompatible'] = '<div class="alert alert-warning">This form uses availability conditions
 that are incompatible with this form. Please contact a BERTA admin.</div>';
 $string['easyavailability:openingtime'] = 'Can be booked from';
$string['easyavailability:closingtime'] = 'Can be booked until';
$string['easyavailability:heading'] = '<div class="alert alert-info">You are editing the availability of "<b>{$a}</b>"</div>';

// Task.
$string['create_sap_files'] = 'Create the daily SAP files';
$string['add_sports_division'] = 'Add course type';

// Sports division.
$string['nosportsdivision'] = 'No course types set on this site';

$string['shortcodes::unifiedlist'] = "Shortcode unified list";

$string['summary'] = 'General';
$string['summary_desc'] = 'Contains the settings and stats for the whole Moodle site';

// Rolls.
$string['berta:create'] = "Create";
$string['berta:view'] = "View";

// Settings.
$string['multibookinginstances'] = "List of default activeted booking instances";
$string['multibookinginstances_desc'] = "Choose which booking instances are activated by default.";
