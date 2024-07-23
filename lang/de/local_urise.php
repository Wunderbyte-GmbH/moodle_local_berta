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
$string['messageprovider:sendmessages'] = 'Verschicke Nachrichten';
$string['urise:cansendmessages'] = 'Kann Nachrichten schicken.';
$string['urise:editavailability'] = 'Kann die Verfügbarkeit von Buchungsoptionen ändern und Vorreservierungen anlegen';
$string['urise:editsubstitutionspool'] = 'Kann den Vertretungspool für einzelne Kursarten bearbeiten';
$string['urise:viewsubstitutionspool'] = 'Kann den Vertretungspool für einzelne Kursarten sehen und E-Mails an den Vertretungspool senden';

// Caches.
$string['cachedef_cachedpaymenttable'] = 'Zahlungstransaktionen (Cache)';

// Shortcodes.
$string['shortcodelists'] = 'Shortcode-Listen';
$string['shortcodelists_desc'] = 'Hier können Sie Listen konfigurieren, die durch Shortcodes (z.B. [allekurseliste]) generiert werden.';
$string['shortcodelists_showdescriptions'] = 'Beschreibungen von Buchungsoptionen anzeigen';
$string['shortcodeslistofbookingoptions'] = 'Alle Kurse als Liste';
$string['shortcodeslistofbookingoptionsascards'] = 'Alle Kurse als Karten';
$string['shortcodeslistofmybookingoptionsascards'] = 'Meine Kurse als Karten';
$string['shortcodeslistofmybookingoptionsaslist'] = 'Meine Kurse als Liste';
$string['shortcodeslistofteachersascards'] = 'Liste aller Trainer als Karten';
$string['shortcodeslistofmytaughtbookingoptionsascards'] = 'Kurse, die ich unterrichte, als Karten';
$string['shortcodesshowallsports'] = "Liste aller sportarten";
$string['uriseshortcodes:showstart'] = 'Kursbeginn anzeigen';
$string['uriseshortcodes:showend'] = 'Kursende anzeigen';
$string['uriseshortcodes:showbookablefrom'] = '"Buchbar ab" anzeigen';
$string['uriseshortcodes:showbookableuntil'] = '"Buchbar bis" anzeigen';
$string['uriseshortcodes:showfiltercoursetime'] = 'Filter "Kurszeiten" anzeigen';
$string['uriseshortcodes:showfilterbookingtime'] = 'Filter "Anmeldezeiten" anzeigen';

$string['nobookinginstancesselected'] = "Aktuell sind keine Buchungsinstanzen ausgewählt, um Buchungsoptionen anzuzeigen";

// General strings.
$string['campaigns'] = 'Kampagnen';
$string['collapsedescriptionoff'] = 'Beschreibungen nicht einklappen';
$string['collapsedescriptionmaxlength'] = 'Beschreibungen einklappen (Zeichenanzahl)';
$string['collapsedescriptionmaxlength_desc'] = 'Geben Sie die maximale Anzahl an Zeichen, die eine Beschreibung haben darf, ein.
Beschreibungen, die länger sind werden eingeklappt.';
$string['dayofweek'] = 'Wochentag';
$string['editavailabilityanddescription'] = 'Verfügbarkeit & Beschreibung bearbeiten';
$string['editavailability'] = 'Verfügbarkeit bearbeiten';
$string['editdescription'] = 'Beschreibung bearbeiten';
$string['substitutionspool'] = 'Vertretungspool für {$a}';
$string['editsubstitutionspool'] = 'Vertretungspool bearbeiten';
$string['viewsubstitutionspool'] = 'Vertretungspool ansehen';
$string['mailtosubstitutionspool'] = 'E-Mail an Vertretungspool senden';
$string['substitutionspool:infotext'] = 'Trainer:innen, die <b>{$a}</b> vertreten dürfen:';
$string['substitutionspool:mailproblems'] = 'Hier klicken, wenn Sie Probleme beim Versenden der E-Mails haben...';
$string['substitutionspool:copypastemails'] = 'Kopieren Sie die folgenden E-Mail-Adressen in das BCC-Feld Ihres E-Mail-Programms:';
$string['gateway'] = 'Gateway';
$string['invisibleoption'] = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
$string['showmore'] = 'Zeige mehr';
$string['sportsdivision'] = 'Sparte';
$string['sportsdivisions'] = 'Sparten';
$string['titleprefix'] = 'Kursnummer';
$string['unknown'] = 'Unbekannt';

// Errors.
$string['error:starttime'] = 'Start muss vor dem Ende sein.';
$string['error:endtime'] = 'Ende muss nach dem Start sein.';

// List of all courses.
$string['allcourses'] = 'Alle Kurse';

// Cards.
$string['listofsports'] = 'Kursarten';
$string['listofsports_desc'] = 'Zeige und editiere die Liste der Kursarten auf diesem System.';

$string['numberofcourses'] = 'Kurse';
$string['numberofcourses_desc'] = 'Informationen über die Kurse und Buchungen auf der Plattform.';

$string['numberofentities'] = 'Anzahl der Organisations-Einheiten';
$string['numberofentities_desc'] = 'Informationen über die Organisations-Einheiten auf der Plattform.';

$string['coursesavailable'] = "Buchbare Kurse";
$string['coursesbooked'] = 'Gebuchte Kurse';
$string['coursesincart'] = 'Im Warenkorb';
$string['coursesdeleted'] = 'Gelöschte Kurse';
$string['coursesboughtcard'] = 'Gekaufte Kurse (Online)';
$string['coursespending'] = 'Noch unbestätigte Kurse';
$string['coursesboughtcashier'] = 'Gekaufte Kurse (Kassa)';
$string['paymentsaborted'] = 'Abgebrochene Zahlungen';
$string['bookinganswersdeleted'] = "Gelöschte Buchungen";

$string['settingsandreports'] = 'Einstellungen & Berichte';
$string['settingsandreports_desc'] = 'Verschiedene Einstellungen und Berichte, die für urise relevant sind.';
$string['editentities'] = 'Organisations-Einheiten bearbeiten';
$string['editentitiescategories'] = 'Kategorien der Organisations-Einheiten bearbeiten';
$string['importentities'] = 'Organisations-Einheiten importieren';
$string['editbookinginstance'] = 'Buchungs-Instanz bearbeiten';
$string['editbookings'] = 'Kurs-Übersicht';
$string['viewteachers'] = 'Trainer:innen-Übersicht';
$string['teachersinstancereport'] = 'Trainer:innen-Gesamtbericht (Kurse, Fehlstunden, Vertretungen)';
$string['sapdailysums'] = 'SAP-Buchungsdateien';

$string['addbookinginstance'] = '<span class="bg-danger font-weight-bold">Keine Buchungs-Instanz! Hier klicken, um eine einzustellen.</span>';
$string['editpricecategories'] = 'Preiskategorien bearbeiten';
$string['editsemesters'] = 'Semester bearbeiten';
$string['changebookinginstance'] = 'Standard-Semester-Instanz setzen';
$string['editbotags'] = 'Tags verwalten';
$string['createbotag'] = 'Neuen Tag anlegen...';
$string['createbotag:helptext'] = '<p>
<a data-toggle="collapse" href="#collapseTagsHelptext" role="button" aria-expanded="false" aria-controls="collapseTagsHelptext">
  <i class="fa fa-question-circle" aria-hidden="true"></i><span>&nbsp;Hilfe: So können Sie Tags konfigurieren...</span>
</a>
</p>
<div class="collapse" id="collapseTagsHelptext">
<div class="card card-body">
  <p>Damit Sie Tags verwenden können, müssen Sie ein Benutzerdefiniertes Buchungsoptionsfeld vom Typ "Dynamic Dropdown menu" mit folgenden Einstellungen anlegen:</p>
  <ul>
  <li><strong>Kategorie: </strong>Tags</li>
  <li><strong>Name: </strong>Tags</li>
  <li><strong>Kurzname: </strong>botags</li>
  <li><strong>SQL query: </strong><code>SELECT botag as id, botag as data FROM {local_urise_botags}</code></li>
  <li><strong>Auto-complete: </strong><span class="text-success">aktiviert</span></li>
  <li><strong>Multi select: </strong><span class="text-success">aktiviert</span></li>
  </ul>
  <p>Nun können Sie die hier angelegten Tags den Buchungsoptionen zuordnen.<br>Sie müssen hier mindestens einen Tag angelegt haben, damit Sie Tagging verwenden können.</p>
</div>
</div>';

// Edit sports.
$string['youneedcustomfieldsport'] = 'Diese Veranstaltung ist keiner Organisation zugeordnet';

// Shortcodes.
$string['shortcodeslistofbookingoptions'] = 'Liste der buchbaren Kurse';
$string['shortcodeslistofbookingoptionsascards'] = 'Liste der buchbaren Kurse als Karten';
$string['shortcodeslistofmybookingoptionsascards'] = 'Liste meiner gebuchte Kurse als Karten';
$string['shortcodessetdefaultinstance'] = 'Setze eine Standard-Instanz für Shortcodes';
$string['shortcodessetdefaultinstancedesc'] = 'Damit kann eine Standard-Buchungsinstanz definiert werden, die dann verwendet wird,
wenn keine ID definiert wurde. Dies erlaubt den schnellen Wechsel (zum Beispiel von einem Semster zum nächsten), wenn es Überblicks-
Seiten für unterschiedliche Kategorien gibt.';
$string['shortcodessetinstance'] = 'Definiere die Buchungsinstanz, die standardmäßig verwendet werden soll.';
$string['shortcodessetinstancedesc'] = 'Wenn Du hier einen Wert setzt, kann der Shortcode so verwendet werden: [allekurseliste category="philosophy"]
Es ist also nicht mehr nötig, eine ID zu übergeben.';
$string['shortcodesnobookinginstance'] = '<div class="text-danger font-weight-bold">Noch keine Buchungsinstanz erstellt!</div>';
$string['shortcodesnobookinginstancedesc'] = 'Sie müssen mindestens eine Buchungsinstanz in einem Moodle-Kurs erstellen, bevor Sie hier eine auswählen können.';
$string['shortcodesuserinformation'] = 'Zeige Informationen von NutzerInnen';
$string['shortcodesarchivecmids'] = 'Liste von IDs für das "Meine Kurse"-Archiv';
$string['shortcodesarchivecmids_desc'] = 'Geben Sie eine Komma-getrennte Liste von Kursmodul-IDs (cmids) der Semester-Instanzen (Buchungsinstanzen) an,
die im "Meine Kurse"-Archiv aufscheinen sollen.';

$string['archive'] = '<i class="fa fa-archive" aria-hidden="true"></i> Archiv';
$string['mycourses'] = 'Meine Kurse';
$string['coursesibooked'] = '<i class="fa fa-ticket" aria-hidden="true"></i> Kurse, die ich im aktuellen Semester gebucht habe:';
$string['coursesibookedarchive'] = 'Kurse, die ich in vergangenen Semestern gebucht habe:';
$string['coursesiteach'] = '<i class="fa fa-graduation-cap" aria-hidden="true"></i> Kurse, die ich im aktuellen Semester unterrichte:';
$string['coursesiteacharchive'] = 'Kurse, die ich in vergangenen Semestern unterrichtet habe:';

// Access.php.
$string['urise:canedit'] = 'Nutzer:in darf verwalten';
$string['urise:viewdashboard'] = "User kann Dashboard sehen";


// Dashboard Vue.
$string['dashboard_new_bookings'] = 'Buchungen';
$string['dashboard_ppl_wl'] = 'Personen in Wartelisten';
$string['dashboard_neue_stornos'] = 'Neue Stornos';
$string['dashboard_noshows'] = 'Nicht erschienen';
$string['dashboard_managelocation'] = 'Standorte verwalten';

$string['dashboard_overview'] = 'Übersicht';
$string['dashboard_bookingfields'] = 'Buchungsoptionsfelder';
$string['dashboard_stats'] = 'Auswertung';
$string['dashboard_mydashboard'] = 'Mein Dashboard';

$string['dashboard_zeitraum'] = 'Zeitraum';
$string['dashboard_organisation'] = 'Organisation';
$string['dashboard_auswertung'] = 'Auswertung';

// Vue strings.
$string['vue_dashboard_checked'] = 'Default Ausgewählt';
$string['vue_dashboard_name'] = 'Name';
$string['vue_dashboard_course_count'] = 'Anzahl der Kurse';
$string['vue_dashboard_path'] = 'Pfad';
$string['vue_dashboard_create_oe'] = 'Neue OE erstellen';
$string['vue_dashboard_assign_role'] = 'Rollen zuweisen';
$string['vue_dashboard_new_course'] = 'Neuen Kurs erstellen';
$string['vue_not_found_route_not_found'] = 'Route nicht gefunden';
$string['vue_not_found_try_again'] = 'Bitte versuchen Sie es später erneut';
$string['vue_booking_stats_capability'] = 'Berechtigung';
$string['vue_booking_stats_back'] = 'Zurück';
$string['vue_booking_stats_save'] = 'Speichern';
$string['vue_booking_stats_restore'] = 'Zurücksetzten';
$string['vue_booking_stats_select_all'] = 'Alle auswählen';
$string['vue_booking_stats_booking_options'] = 'Buchungsoptionen';
$string['vue_booking_stats_booked'] = 'Gebucht';
$string['vue_booking_stats_waiting'] = 'Warteliste';
$string['vue_booking_stats_reserved'] = 'Reserviert';
$string['vue_capability_options_cap_config'] = 'Berechtigungskonfiguration';
$string['vue_capability_options_necessary'] = 'notwendig';
$string['vue_capability_unsaved_changes'] = 'Es gibt ungespeicherte Änderungen';
$string['vue_capability_unsaved_continue'] = 'Möchten Sie diese Konfiguration wirklich zurücksetzen?';
$string['vue_booking_stats_restore_confirmation'] = 'Möchten Sie diese Konfiguration wirklich zurücksetzen?';
$string['vue_booking_stats_yes'] = 'Ja';
$string['vue_booking_stats_no'] = 'Nein';
$string['vue_confirm_modal'] = 'Sind Sie sicher, dass Sie zurückgehen möchten?';
$string['vue_heading_modal'] = 'Bestätigung';
$string['vue_notification_title_unsave'] = 'Keine ungespeicherten Änderungen erkannt';
$string['vue_notification_text_unsave'] = 'Es wurden keine ungespeicherten Änderungen erkannt.';
$string['vue_notification_title_action_success'] = 'Die Konfiguration wurde erfolgreich {$a}';
$string['vue_notification_text_action_success'] = 'Die Konfiguration wurde erfolgreich {$a}.';
$string['vue_notification_title_action_fail'] = 'Die Konfiguration wurde nicht erfolgreich {$a}';
$string['vue_notification_text_action_fail'] = 'Beim Speichern ist ein Fehler aufgetreten. Die Änderungen wurden nicht vorgenommen.';
$string['vue_dashboard_goto_category'] = 'Zur Kategorie';
$string['vue_dashboard_booking_instances'] = 'Booking instances';

$string['booking:expertoptionform'] = "Expert option form";
$string['booking:reducedoptionform1'] = "1. Reduced option form for course category";
$string['booking:reducedoptionform2'] = "2. Reduced option form for course category";
$string['booking:reducedoptionform3'] = "3. Reduced option form for course category";
$string['booking:reducedoptionform4'] = "4. Reduced option form for course category";
$string['booking:reducedoptionform5'] = "5. Reduced option form for course category";

// Access.
$string['mod/booking:expertoptionform'] = 'Buchungsoption für ExpertInnen';
$string['mod/booking:reducedoptionform1'] = 'Buchungsoption reduziert 1';
$string['mod/booking:reducedoptionform2'] = 'Buchungsoption reduziert 2';
$string['mod/booking:reducedoptionform3'] = 'Buchungsoption reduziert 3';
$string['mod/booking:reducedoptionform4'] = 'Buchungsoption reduziert 4';
$string['mod/booking:reducedoptionform5'] = 'Buchungsoption reduziert 5';
$string['booking:editoptionformconfig'] = 'Buchungsoptionsfelder bearbeiten';
$string['booking:bookanyone'] = 'Darf alle Nutzer:innen buchen';
$string['mod/booking:bookanyone'] = 'JedeN buchen';
$string['mod/booking:seepersonalteacherinformation'] = 'Detailinfos über Lehrende anzeigen';

// Optionformconfig.php / optionformconfig_form.php.
$string['optionformconfig'] = 'Formulare für Buchungsoptionen anpassen (PRO)';
$string['optionformconfig_infotext'] = 'Mit diesem PRO-Feature können Sie sich mit Drag & Drop und den Checkboxen beliebige Buchungsoptionsformulare zusammenstellen.
Die einzelnen Formulare werden auf bestimmten Kontext-Ebenen (z.B. pro Buchungsinstanz, Systemweit...) definiert. Den jeweiligen Nutzer:innen sind die Formulare nur zugänglich,
wenn Sie die jeweils entsprechende Berechtigung haben.';
$string['optionformconfig_getpro'] = 'Mit Booking <span class="badge bg-success text-light"><i class="fa fa-cogs" aria-hidden="true"></i> PRO</span> haben Sie die Möglichkeit, mit Drag & Drop individuelle Formulare für bestimmte Nutzer:innen-Gruppen und Kontexte
(z.B. nur für eine bestimmte Buchungsinstanz) anzulegen.';
$string['optionformconfigsaved'] = 'Konfiguration für das Buchungsoptionsformular gespeichert.';
$string['optionformconfigsubtitle'] = '<p>Hier können Sie nicht benötigte Funktionalitäten entfernen, um das Formular für die Erstellung von Buchungsoptionen übersichtlicher zu gestalten.</p>
<p><strong>ACHTUNG:</strong> Deaktivieren Sie nur Felder, von denen Sie sicher sind, dass Sie sie nicht benötigen!</p>';
$string['optionformconfig:nobooking'] = 'Sie müssen zumindest eine Buchungsinstanz anlegen, bevor Sie dieses Formular nutzen können!';

$string['optionformconfigsavedsystem'] = 'Ihre Formular-Definition wurde auf dem Kontextlevel System gespeichert';
$string['optionformconfigsavedcoursecat'] = 'Ihre Formular-Definition wurde auf dem Kontextlevel Kurskategorie gespeichert';
$string['optionformconfigsavedmodule'] = 'Ihre Formular-Definition wurde auf dem Kontextlevel Modul gespeichert';
$string['optionformconfigsavedcourse'] = 'Ihre Formular-Definition wurde auf dem Kontextlevel Kurs gespeichert';
$string['optionformconfigsavedother'] = 'Ihre Formular-Definition wurde auf Kontextlevel {$a} gespeichert';

$string['optionformconfignotsaved'] = 'Es wurde keine besondere Formular-Definition gespeichert';

$string['prepare_import'] = "Bereite den Import vor";
$string['id'] = "Id";
$string['json'] = "Sammelfeld für zum Speichern von Informationen";
$string['returnurl'] = "Adresse für Rückkehr";
$string['youareusingconfig'] = 'Sie verwenden folgende Formular-Konfiguration: {$a}';
$string['formconfig'] = 'Anzeige, welches Formular verwendet wird';
$string['template'] = 'Vorlagen';
$string['moveoption'] = 'Option verschieben';
$string['dontmove'] = 'Don\' move';
$string['moveoption_help'] = 'Option in eine andere Buchungsaktivität verschieben';
$string['text'] = 'Titel';
$string['maxanswers'] = 'Limit für Antworten';
$string['identifier'] = 'Identifikator';
$string['easy_text'] = 'Einfacher, nicht veränderbarer Text';
$string['easy_bookingopeningtime'] = 'Einfache Buchungsstartzeit';
$string['easy_bookingclosingtime'] = 'Einfache Buchungsendzeit';
$string['easy_availability_selectusers'] = 'Einfache NutzerInnen Voraussetzung';
$string['easy_availability_previouslybooked'] = 'Einfache bereits gebuchte Voraussetzung';
$string['invisible'] = 'Unsichtbar';
$string['annotation'] = 'Interne Anmerkung';
$string['courseid'] = 'Kurs, in den eingeschrieben wird';
$string['entitiesfieldname'] = 'Ort(e)';
$string['entities'] = 'Orte mit Entities Plugin auswählen';
$string['shoppingcart'] = 'Zahlungsoptionen mit Shopping Cart Plugin definieren';
$string['optiondates'] = 'Termine';
$string['actions'] = 'Buchungsaktionen';
$string['attachment'] = 'Angehängte Dateien';
$string['howmanyusers'] = 'Beschränkungen';
$string['recurringoptions'] = 'Wiederkehrende Optionen';
$string['bookusers'] = 'Feld für den Import, um NutzerInnen zu buchen';
$string['timemodified'] = 'Bearbeitungszeit';
$string['waitforconfirmation'] = 'Buchen nur nach Bestätigung';

// Filter.
$string['organisation'] = 'Organisationseinheit';
$string['location'] = 'Ort';
$string['competency'] = 'Kompetenzen';

// Nav.
$string['urise'] = 'u:rise';
$string['entities'] = 'Raum-Management';
$string['coursename'] = 'Kursname';

// Contract management.
$string['contractmanagementsettings'] = 'Vertragsmanagement-Einstellungen';
$string['contractmanagementsettings_desc'] = 'Konfigurieren Sie hier, wie sich Verträge auf Abrechnungen
 auswirken und welche Sonderfälle es gibt.';
$string['contractformula'] = 'Vertragsformel';
$string['contractformula_desc'] = 'Hier können Sie eine JSON-Formel angeben, die festlegt, wie sich Verträge auf Abrechnungen
 auswirken und welche Sonderfälle es gibt.';
$string['contractformulatest'] = 'Vertragsformel testen';
$string['editcontractformula'] = 'Vertragsformel bearbeiten';

// Userinformation.mustache.
$string['userinformation'] = 'Benutzer-Information';

// My Courses List.
$string['tocoursecontent'] = 'Zu den Kursmaterialien';

// Shortlist section information.
$string['dayofweekalt'] = 'Wochentag und Termin, an dem eine Kurseinheit stattfindet';
$string['locationalt'] = 'Abhaltungsort des Kurses';
$string['bookingsalt'] = 'Anzahl der freien und maximal verfügbaren Kursplätze';
$string['teacheralt'] = 'Leiter des Kurses';
$string['imagealt'] = 'Titelbild des Kurses';


// Transactions List.
$string['status'] = 'Status';
$string['openorder'] = 'Offen';
$string['bookedorder'] = 'Bezahlt';
$string['transactionslist'] = 'Zahlungstransaktionen';
$string['checkstatus'] = 'Überprüfe Status';
$string['statuschanged'] = 'Status geändert';
$string['statusnotchanged'] = 'Status nicht geändert';

$string['id'] = 'Eintrag';
$string['transactionid'] = 'Interne ID';
$string['itemid'] = 'ItemID';
$string['username'] = 'Nutzer';
$string['price'] = 'Betrag';
$string['names'] = 'Buchungen';
$string['action'] = 'Aktion';

// Easy availability feature.
$string['easyavailability:overbook'] = 'Sogar dann, wenn der Kurs <b>ausgebucht</b> ist';
$string['easyavailability:previouslybooked'] = 'Nutzer:innen, die bereits einen bestimmten USI-Kurs gebucht haben, dürfen immer buchen';
$string['easyavailability:selectusers'] = 'Ausgewählte Nutzer:innen dürfen außerhalb der Buchungszeiten buchen';
$string['easyavailability:formincompatible'] = '<div class="alert alert-warning">Diese Buchungsoption verwendet Einschränkungen,
 die mit diesem Formular nicht kompatibel sind. Bitte wenden Sie sich an einen urise-Admin.</div>';
$string['easyavailability:openingtime'] = 'Kann gebucht werden ab';
$string['easyavailability:closingtime'] = 'Kann gebucht werden bis';
$string['easyavailability:heading'] = '<div class="alert alert-info">Sie bearbeiten die Verfügbarkeit von "<b>{$a}</b>"</div>';

// Task.
$string['create_sap_files'] = 'Die täglichen SAP Dateien erstellen.';
$string['add_sports_division'] = 'Die Sparten zu den Sportarten automatisch hinzufügen';

// Sports division.
$string['nosportsdivision'] = 'Keine Sparten auf dieser Website verfügbar';

$string['shortcodes::unifiedlist'] = "Shortcode unified list";

$string['summary'] = 'Allgemein';
$string['summary_desc'] = 'Enthält die Einstellungsmöglichkeiten und Statistiken der gesamten Plattform';

// Rolls.
$string['urise:create'] = "Erstelle";
$string['urise:view'] = "Ansehen";

$string['searchheadertext'] = "Was möchten Sie lernen?";
$string['myspace'] = "Mein Bereich";

// Descriptionview.
$string['requirements'] = "Vorraussetzungen";
$string['goals'] = "Ziele";
$string['coursecontent'] = "Inhalte";
$string['coursemethods'] = "Methoden";
$string['additionalinfo'] = "Sonstige Informationen";
$string['targetaud'] = "Zielgruppe";
$string['optiondates'] = "Termin(e)";
$string['nolocation'] = "Kein Ort angegeben";
$string['showdates'] = "Termine anzeigen";
$string['teachers'] = "Trainer*in";
$string['gotoprofile'] = "Zum Profil";
$string['buchungsbedingungen'] = "Buchungsbedingungen";
$string['orgacontact'] = "Kontakt der verantwortlichen Organisationseinheit";
$string['aboutoffer'] = "Über das Angebot";

$string['zgcommunities'] = "Interessant für";
$string['organisationfilter'] = "Angeboten von";
$string['fromdate'] = "Ab ";
