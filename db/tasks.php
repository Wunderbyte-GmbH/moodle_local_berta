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

defined('MOODLE_INTERNAL') || die();

$tasks = [
        ['classname' => '\local_berta\task\create_sap_files',
            'blocking' => 0,
            'minute' => '30',
            'hour' => '4',
            'day' => '*',
            'dayofweek' => '*',
            'month' => '*'
        ],
        ['classname' => '\local_berta\task\add_sports_division',
            'blocking' => 0,
            'minute' => 'R',
            'hour' => '2',
            'day' => '*',
            'dayofweek' => '*',
            'month' => '*'
        ],
];
