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
 * Strings for component 'auth_db', language 'be', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdescription'] = 'Гэты метад выкарыстае знешнюю базу дадзеных для праверкі пары лагін/пароль. Пры стварэнні новага ўліковага запісу, інфармацыя з палёў можа быць скапіяваная ў сістэму.';
$string['auth_dbextrafields'] = 'Гэтыя палі дадатковыя. Вы можаце выбраць папярэдняе запаўненне некаторых палёў карыстальніцкіх дадзеных ад палёў знешняй базы дадзеных, паказанай тут. <p>Не запаўняйце поле, для выкарыстання настроек па-змаўчанні.</p>
<p>У любым выпадку, карыстальнік зможа рэдагаваць усе палі пасля таго, як ён зойдзе ў сістэму.</p>';
$string['auth_dbfieldpass'] = 'Назва поля, якое змяшчае пароль';
$string['auth_dbfielduser'] = 'Назва поля, якое змяшчае лагін';
$string['auth_dbhost'] = 'Камп\'ютэр, на якім запушчаны сэрвер базы дадзеных.';
$string['auth_dbname'] = 'Назва базы дадзеных';
$string['auth_dbpass'] = 'Пароль, адпаведны паказанаму лагіну';
$string['auth_dbpasstype'] = 'Вызначае фармат выкарыстаных пароляў.  MD5-кадаванне найбольш прыдатнае пры злучэнні да іншых web-дадаткаў, напрыклад, PostNuke';
$string['auth_dbtable'] = 'Назва табліцы ў базе дадзеных';
$string['auth_dbtype'] = 'Тып базы дадзеных (Гл. <A HREF="../lib/adodb/readme.htm#drivers">Дакументацыю па ADO db</A>)';
$string['auth_dbuser'] = 'Лагін карыстальніка з правамі толькі на чытанне для базы дадзеных';
$string['pluginname'] = 'Выкарыстаць знешнюю базу дадзеных';
