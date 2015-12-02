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
 * Strings for component 'auth_db', language 'af', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdescription'] = 'Die metode gebruik \'n eksterne databasis tabel om \'n gegewe gebruikersnaam en wagwoord te valideer.  As die rekening \'n nuwe rekening is, sal inligting in die ander velde moonlik oor gekopieer word na Moodle.';
$string['auth_dbextrafields'] = 'Die velde is optioneel.  Dit is moontlik om van die Moodle gebruiker velde te <i>pre-fill</i> met die <b>eksterne databasis velde</b> wat jy gespesifiseer het. <p>As jy die velde oop los sal Moodle verstek waardes gebruik word.</p><p>Die gebruiker sal instaat wees om die velde te redigeer sodra die gebruiker aanteken.</p>';
$string['auth_dbfieldpass'] = 'Naam van die veld wat wagwoorde bevat';
$string['auth_dbfielduser'] = 'Naam van die veld wat gebruikersname bevat';
$string['auth_dbfielduser_key'] = 'Gebruikernaam veld';
$string['auth_dbhost'] = 'Die rekenaar wat optree as gasheer vir die databasis bediener.';
$string['auth_dbname'] = 'Naam van die databasis';
$string['auth_dbpass'] = 'Wagwoord vir die bogenoemde gebruikersnaam';
$string['auth_dbpasstype'] = 'Spesifiseer die formaat wat die wagwoord veld gebruik.  MD5 enkripsie is handig om mee konneksies te maak na ander web toepassings soos PostNuke';
$string['auth_dbtable'] = 'Naam van die tabel in die databasis';
$string['auth_dbtype'] = 'Die databasis tipe (Sien <a href="../lib/adodb/readme.htm#drivers">ADOdb documentation</a> vir details)';
$string['auth_dbuser'] = 'Gebruiker met lees toegang tot databasis';
$string['pluginname'] = 'Gebruik \'n eksterne databasis';
