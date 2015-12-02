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
 * Strings for component 'auth_saml', language 'en_us', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_saml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_courses_not_found'] = 'IdP returned a set of data that no contain the SAML courses mapping field ({$a}). This field is required to enroll the user';
$string['auth_saml_disable_debugdisplay'] = '* Disable debugdisplay in order to hide errors in the login/enrollment process';
$string['auth_saml_error_role_not_found'] = 'Error when enrolling. Role {$a} does not exist in Moodle';
$string['auth_saml_supportcourses_description'] = 'Select Internal or External to have Moodle auto enroll users in courses (Use External if your course/role mapping is in an external DB)';
