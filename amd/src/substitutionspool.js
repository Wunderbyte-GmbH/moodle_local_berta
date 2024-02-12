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

/*
 * @package    local_berta
 * @author     Bernhard Fischer
 * @copyright  2024 Wunderbyte GmbH <info@wunderbyte.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Substitutions pool modals for sports categories.
 *
 * @module     local_berta/substitutionspool
 * @copyright  2024 Wunderbyte GmbH
 * @author     Bernhard Fischer
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import ModalForm from 'core_form/modalform';

export const init = (sport, linkSelector, modalTitle) => {

    let element = document.querySelector(linkSelector);

    if (element) {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            const form = new ModalForm({
                formClass: "local_berta\\form\\substitutionspool_form",
                // Add as many arguments as you need, they will be passed to the form:
                args: {
                    'sport': sport,
                },
                modalConfig: {title: modalTitle},
                returnFocus: e.currentTarget
            });

            // If necessary extend functionality by overriding class methods, for example:
            form.addEventListener(form.events.FORM_SUBMITTED, (e) => {
                const response = e.detail;
                // eslint-disable-next-line no-console
                console.log("substitutionspool form submitted: " + response);
                window.location.reload();
            });

            form.show();
        });
    }
};
