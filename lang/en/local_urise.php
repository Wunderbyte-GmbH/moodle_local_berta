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
 * @package     local_urise
 * @category    string
 * @copyright   2024 Wunderbyte Gmbh <info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'urise Plugin';

$string['dashboard'] = 'Dashboard';
$string['messageprovider:sendmessages'] = 'Send messages';
$string['urise:cansendmessages'] = 'Can send messages';
$string['urise:editavailability'] = 'Can change availability and reservations';
$string['urise:editsubstitutionspool'] = 'Can edit the substitutions pool of teachers for different courses';
$string['urise:viewsubstitutionspool'] = 'Can view the substitutions pool of teachers for different courses and send emails to substitution pools';

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
$string['uriseshortcodes:showstart'] = 'Show "Start time of the course"';
$string['uriseshortcodes:showend'] = 'Show "End time of the course"';
$string['uriseshortcodes:showbookablefrom'] = 'Show "Bookable from"';
$string['uriseshortcodes:showbookableuntil'] = 'Show "Bookable until"';
$string['uriseshortcodes:showfiltercoursetime'] = 'Show filter "Course time"';
$string['uriseshortcodes:showfilterbookingtime'] = 'Show filter "Booking time"';

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
$string['settingsandreports_desc'] = 'Various settings and reports relevant for urise.';
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
  <li><strong>SQL query: </strong><code>SELECT botag as id, botag as data FROM {local_urise_botags}</code></li>
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
$string['urise:canedit'] = 'User can edit';
$string['urise:viewdashboard'] = "User can see Dashboard";

// Dashboard Vue.
$string['dashboard_new_bookings'] = 'Bookings';
$string['dashboard_ppl_wl'] = 'People in queue';
$string['dashboard_neue_stornos'] = 'Cancellations';
$string['dashboard_noshows'] = 'No shows';
$string['dashboard_managelocation'] = 'Manage locations';

$string['dashboard_overview'] = 'Overview';
$string['dashboard_bookingfields'] = 'Bookingoptionfields';
$string['dashboard_stats'] = 'Stats';
$string['dashboard_mydashboard'] = 'My Dashboard';

$string['dashboard_zeitraum'] = 'Timespan';
$string['dashboard_organisation'] = 'Organisation';
$string['dashboard_auswertung'] = 'Reporting';

// Vue strings.
$string['vue_dashboard_checked'] = 'Default Checked';
$string['vue_dashboard_name'] = 'Name';
$string['vue_dashboard_course_count'] = 'Course Count';
$string['vue_dashboard_path'] = 'Path';
$string['vue_dashboard_create_oe'] = 'Create new OE';
$string['vue_dashboard_assign_role'] = 'Assign Roles';
$string['vue_dashboard_new_course'] = 'Create new course';
$string['vue_dashboard_booking_instances'] = 'Booking instances';
$string['vue_not_found_route_not_found'] = 'Route not found';
$string['vue_not_found_try_again'] = 'Please try later again';
$string['vue_booking_stats_capability'] = 'Capability';
$string['vue_booking_stats_back'] = 'Back';
$string['vue_booking_stats_save'] = 'Save';
$string['vue_booking_stats_restore'] = 'Restore';
$string['vue_booking_stats_select_all'] = 'Select all';
$string['vue_booking_stats_booking_options'] = 'Booking Options';
$string['vue_booking_stats_booked'] = 'Booked';
$string['vue_booking_stats_waiting'] = 'Waiting List';
$string['vue_booking_stats_reserved'] = 'Reserved';
$string['vue_capability_options_cap_config'] = 'Capability Configuration';
$string['vue_capability_options_necessary'] = 'necessary';
$string['vue_capability_unsaved_changes'] = 'There are unsaved changes';
$string['vue_capability_unsaved_continue'] = 'You really want to reset this configuration?';
$string['vue_booking_stats_restore_confirmation'] = 'You really want to reset this configuration?';
$string['vue_booking_stats_yes'] = 'Yes';
$string['vue_booking_stats_no'] = 'No';
$string['vue_confirm_modal'] = 'Are you sure you want to go back?';
$string['vue_heading_modal'] = 'Confirmation';
$string['vue_notification_title_unsave'] = 'No unsaved changes detected';
$string['vue_notification_text_unsave'] = 'There were no unsaved changes detected.';
$string['vue_notification_title_action_success'] = 'Configuration was {$a}';
$string['vue_notification_text_action_success'] = 'Configuration was {$a} successfully.';
$string['vue_notification_title_action_fail'] = 'Configuration was not  {$a}';
$string['vue_notification_text_action_fail'] = 'Something went wrong while saving. The changes have not been made.';
$string['vue_dashboard_goto_category'] = 'Go to category';

// Access.
$string['mod/booking:expertoptionform'] = 'Bookingoption for experts';
$string['mod/booking:reducedoptionform1'] = 'Reduced booking option 1';
$string['mod/booking:reducedoptionform2'] = 'Reduced booking option 2';
$string['mod/booking:reducedoptionform3'] = 'Reduced booking option 3';
$string['mod/booking:reducedoptionform4'] = 'Reduced booking option 4';
$string['mod/booking:reducedoptionform5'] = 'Reduced booking option 5';
$string['mod/booking:bookanyone'] = 'Book anyone';
$string['mod/booking:seepersonalteacherinformation'] = 'See personal teacher information';

// Optionformconfig.php / optionformconfig_form.php.
$string['optionformconfig'] = 'Configure booking option forms (PRO)';
$string['optionformconfig_infotext'] = 'With this PRO feature, you can create your individual booking option forms by using drag & drop
and the checkboxes. The forms are stored on a specific context level (e.g. booking instance, system-wide...). Users can only access the forms
if they have the appropriate capabilities.';
$string['optionformconfig_getpro'] = ' With Booking <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span> you have the possibility to create individual forms with drag and drop
for specific user roles and contexts (e.g. for a specific booking instance or system wide).';
$string['optionformconfigsaved'] = 'Configuration for the booking option form saved.';
$string['optionformconfigsubtitle'] = '<p>Turn off features you do not need, in order to make the booking option form more compact for your administrators.</p>
<p><strong>BE CAREFUL:</strong> Only deactivate fields if you are completely sure that you won\'t need them!</p>';
$string['optionformconfig:nobooking'] = 'You need to create at least one booking instance before you can use this form!';

$string['optionformconfigsavedsystem'] = 'Your form definition was saved on context level system';
$string['optionformconfigsavedcoursecat'] = 'Your form definition was saved on context level course category';
$string['optionformconfigsavedmodule'] = 'Your form definition was saved on context level module';
$string['optionformconfigsavedcourse'] = 'Your form definition was saved on context level course';
$string['optionformconfigsavedother'] = 'Your form definition was saved on context level {$a}';

$string['optionformconfignotsaved'] = 'No special configuration was saved for your form';

$string['prepare_import'] = "Prepare Import";
$string['id'] = "Id";
$string['json'] = "Stores supplementary information";
$string['returnurl'] = "Url to return to";
$string['youareusingconfig'] = 'Your are using the following form configuration: {$a}';
$string['formconfig'] = 'Show which form is used.';
$string['template'] = 'Templates';
$string['moveoption'] = 'Move booking option';
$string['dontmove'] = 'Nicht verschieben';
$string['moveoption_help'] = 'Move booking option to different booking instance';
$string['text'] = 'Titel';
$string['maxanswers'] = 'Limit for answers';
$string['identifier'] = 'Identification';
$string['easy_text'] = 'Easy, not changeable text';
$string['easy_bookingopeningtime'] = 'Easy booking opening time';
$string['easy_bookingclosingtime'] = 'Easy booking closing time';
$string['easy_availability_selectusers'] = 'Easy selected users condition';
$string['easy_availability_previouslybooked'] = 'Easy already booked condition';
$string['invisible'] = 'Invisible';
$string['annotation'] = 'Internal annotation';
$string['courseid'] = 'Course to subscribe to';
$string['entities'] = 'Choose places with entities plugin';
$string['entitiesfieldname'] = 'Place(s)';
$string['shoppingcart'] = 'Set payment options with shopping cart plugin';
$string['optiondates'] = 'Dates';
$string['actions'] = 'Booking actions';
$string['attachment'] = 'Attachments';
$string['howmanyusers'] = 'Book other users limit';
$string['recurringoptions'] = 'Recurring booking options';
$string['bookusers'] = 'For Import, to book users directly';
$string['timemodified'] = 'Time modified';
$string['waitforconfirmation'] = 'Book only after confirmation';


// Filter.
$string['organisation'] = 'Organisation';
$string['location'] = 'Location';
$string['competency'] = 'Competency';

// Nav.
$string['urise'] = 'u:rise';
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
 that are incompatible with this form. Please contact a urise admin.</div>';
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
$string['urise:create'] = "Create";
$string['urise:view'] = "View";

// Settings.
$string['multibookinginstances'] = "List of default activeted booking instances";
$string['multibookinginstances_desc'] = "Choose which booking instances are activated by default.";

$string['searchheadertext'] = "What would you like to learn?";
$string['myspace'] = "My bookings";

// Descriptionview.
$string['requirements'] = "Requirements";
$string['goals'] = "Goals";
$string['coursecontent'] = "Content";
$string['coursemethods'] = "Methods";
$string['additionalinfo'] = "Additional information";
$string['targetaud'] = "Target audience";
$string['optiondates'] = "Date(s)";
$string['nolocation'] = "No location provided";
$string['showdates'] = "Show dates";
$string['teachers'] = "Teacher";
$string['gotoprofile'] = "Profile";
$string['buchungsbedingungen'] = "Booking requirements";
$string['orgacontact'] = "Contactdetails responsible organisation";
$string['aboutoffer'] = "About the offer";

$string['zgcommunities'] = "Interesting for";
$string['organisationfilter'] = "Hosted by";
$string['fromdate'] = "From ";
