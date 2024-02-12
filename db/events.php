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
 * Event observers.
 *
 * @package local_berta
 * @category event
 * @copyright 2024 Wunderbyte GmbH <info@wunderbyte.at>
 * @author Bernhard Fischer
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = [

    // Currently, we add all payment gateways separately.
    // TODO: We should do this in a more generic way.
    // For example, we could use a base class or wildcards.

    // Payunity payment plugin.
    [
        'eventname' => '\paygw_payunity\event\payment_added',
        'callback' => '\local_berta\observer::payment_added',
    ],
    [
        'eventname' => '\paygw_payunity\event\payment_completed',
        'callback' => '\local_berta\observer::payment_completed',
    ],
    [
        'eventname' => '\paygw_payunity\event\payment_successful',
        'callback' => '\local_berta\observer::payment_successful',
    ],

    // Mpay24 payment plugin.
    [
        'eventname' => '\paygw_mpay24\event\payment_added',
        'callback' => '\local_berta\observer::payment_added',
    ],
    [
        'eventname' => '\paygw_mpay24\event\payment_completed',
        'callback' => '\local_berta\observer::payment_completed',
    ],
    [
        'eventname' => '\paygw_mpay24\event\payment_successful',
        'callback' => '\local_berta\observer::payment_successful',
    ],

    // Unigraz payment plugin.
    [
        'eventname' => '\paygw_unigraz\event\payment_added',
        'callback' => '\local_berta\observer::payment_added',
    ],
    [
        'eventname' => '\paygw_unigraz\event\payment_completed',
        'callback' => '\local_berta\observer::payment_completed',
    ],
    [
        'eventname' => '\paygw_unigraz\event\payment_successful',
        'callback' => '\local_berta\observer::payment_successful',
    ],
];
