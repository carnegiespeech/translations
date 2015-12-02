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
 * Strings for component 'enrol_flatfile', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = 'El archivo de texto empleado en inscripciones basadas en archivo ({$a}) no puede ser eliminado por el proceso de \'cron\'. Esto generalmente significa que los permisos son erróneos. Por favor, corrija los permisos para que Moodle puede eliminar el archivo, de lo contrario, podría ser procesado en varias ocasiones.';
$string['filelockedmailsubject'] = 'Error importante: Archivo de inscripción';
$string['location'] = 'Localización del archivo';
$string['mailadmin'] = 'Notificar por Email al admin';
$string['mailstudents'] = 'Notificar por Email a los estudiantes';
$string['mailteachers'] = 'Notificar por Email a los profesores';
$string['mapping'] = 'Mapeo de archivo plano';
$string['messageprovider:flatfile_enrolment'] = 'Mensaje de inscripción por archivo plano';
$string['pluginname'] = 'Archivo plano (CSV)';
$string['pluginname_desc'] = 'Este método revisará repetidamente y procesará un archivo de texto especialmente-formateado en la localización que Usted especifique. Este archivo es un archivo separado por comas que se asume que tiene cuatro o seis campos por línea:: <pre class="informationbox"> * operation, role, idnumber(user), idnumber(course) [, starttime, endtime] en donde: * operation = add | del * role = student | teacher | teacheredit * idnumber(user) = idnumber en la tabla de usuarios NB not id * idnumber(course) = idnumber en la tabla del curso NB not id * starttime = hora de inicio (en segundos desde epoch) - optional * endtime = hora de término (en segundos desde epoch) - optional </pre> Podría verse algo parecido a esto: <pre class="informationbox"> add, student, 5, CF101 add, teacher, 6, CF101 add, teacheredit, 7, CF101 del, student, 8, CF101 del, student, 17, CF101 add, student, 21, CF101, 1091115000, 1091215000 </pre>';
