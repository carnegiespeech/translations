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
 * Strings for component 'enrol_ldap', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = '<p>Курсове могат да бъдат създадени автоматично ако има записани потребители в курсове, които още не съществуват в Moodle.</p>

<p>Ако използвате автоматично създаване на курсове, е препоръчително да премахнете следните права: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname и moodle/course:changesummary, от съответните роли за да предотвратите промяната на четирите полета от данните за курса (Номер ID, Кратко име, Пълно име и Резюме).</p>';
$string['bind_pw_key'] = 'Парола';
$string['category'] = 'Категорията за автоматично създадени курсове.';
$string['category_key'] = 'Категория';
$string['course_idnumber_key'] = 'Идентификационен номер (ID Number)';
$string['course_summary_key'] = 'Резюме';
$string['version_key'] = 'Версия';
