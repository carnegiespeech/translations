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
 * Strings for component 'enrol_ldap', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Los cursos puen crease automáticamente si hai
matricules nun cursu qu\'entá nun esiste en Moodle.';
$string['autocreation_settings'] = 'Configuración automática pa la creación de cursos';
$string['bind_dn'] = 'Si quier usar Usuariu como enllaz pa buscar usuarios, especifíquelo equí. Daqué asina como cn=ldapusuariu,o=públicu,o=org';
$string['bind_pw'] = 'Seña pal usuariu d\'enllaz.';
$string['category'] = 'Categoría pa los cursos creaos automáticamente.';
$string['contexts'] = 'Contestos LDAP';
$string['course_fullname'] = 'Opcional: Campu LDAP nel que s\'apaña\'l nome completu.';
$string['course_idnumber'] = 'Mapa pal únicu identificador nel LDAP, normalmente
<em>cn</em> o <em>uid</em>. Recomiéndase
que bloquie\'l valor si ta usando la creación automática de cursu.';
$string['course_settings'] = 'Configuración de matricula nos cursos';
$string['course_shortname'] = 'Opcional: Campu LDAP nel que s\'apaña\'l nome curtiiu.';
$string['course_summary'] = 'Opcional: Campu LDAP nel que s\'apaña\'l resume.';
$string['editlock'] = 'Bloquiar valor';
$string['enrolname'] = 'LDAP';
$string['general_options'] = 'Opciones xenerales';
$string['host_url'] = 'Especificar el servidor LDAP en forma d\'URL como ldap://ldap.myorg.com/ o ldaps://ldap.myorg.com/';
$string['memberattribute'] = 'Atributu de miembru LDAP';
$string['objectclass'] = 'objectClass usáu pa buscar cursos. Normalmente
posixGroup.';
$string['pluginname_desc'] = '<p>Pue usar un servidor LDAP pa controlar les sos matricules. Asúmese que\'l so súa árbol LDAP tien grupos qu\'asignen los cursos, y que caún d\'esos grupos/cursos van tener entraes de miembros p\'asignar estudiantes.</p>
<p>Asúmese que los cursos defínense como grupos en LDAP, y que caún los grupos tien múltiples campos de miembros  (<em>miembru</em> o <em>miembruUid</em>) que tienen una única
identificación d\'usuariu.</p>
<p>Pa usar la matriculación LDAP, los sos usuarios <strong>tienen de</strong> tener un campu de númberu id válidu. Los grupos LDAP tienen de tener esti númberu id nos campos de miembru pa qu\'un usuariu pueda matriculase nel cursu.
Normalmente, esto funciona bien si yá ta usando l\'Autenticación LDAP.</p>
<p>Les matrícules actualizaránse si los usuarios entamen la sesión. Tamién pue executar un script pa caltener les matricules sincronizaes. Vea en <em>inscribir/ldap/inscrición_ldap_sync.php</em>.</p>
<p>Esti plugin tamién se pue definir pa crear automáticamente cursos nuevos de la qu\'apaezan grupos nuevos en LDAP.</p>';
$string['roles'] = 'Asignación de papeles(roles).';
$string['server_settings'] = 'Configuración del servidor LDAP';
$string['template'] = 'Opcional: los cursos creaos automáticamente puen copiar les sos configuracines d\'un modelu de cursu.';
$string['updatelocal'] = 'Actualizar datos llocales';
$string['version'] = 'La versión del protocolu LDAP que ta usando\'l so servidor.';
