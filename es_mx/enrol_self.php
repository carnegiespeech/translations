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
 * Strings for component 'enrol_self', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debe asignarse a los usuarios con auto-inscripción';
$string['editenrolment'] = 'Editar inscripción';
$string['enrolenddate'] = 'Fecha límite';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios se pueden inscribir ellos mismos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de la inscripción no puede ser anterior a la fecha inicial';
$string['enrolme'] = 'Inscribirme';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Duración por defecto de la vigencia de la inscripción (en segundos). Si se pone cero, la inscripción será ilimitada (para siempre).';
$string['enrolperiod_help'] = 'Duración de la vigencia de la inscripción, empezando en el momento que el usuario se inscribe a si mismo. Si se desabilita, la inscripción será ilimitada (para siempre).';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios podrán inscribirse ellos mismo a partir de esta fecha en adelante exclusivamente.';
$string['groupkey'] = 'Usar claves de inscripción de grupo';
$string['groupkey_desc'] = 'Por defecto, utilice claves de inscripción de grupo.';
$string['groupkey_help'] = '<p>Además de restringir el acceso al curso a sólo aquellos que conocen la clave, el uso de una clave de acceso de grupo significa que los usuarios se agregan automáticamente al grupo cuando se inscriben en el curso. </p> <p>Para utilizar una clave de acceso de grupo, se debe especificar que se precisa clave en la configuración de los cursos, y también en la configuración del grupo.</p>';
$string['longtimenosee'] = 'Dar de baja los usuarios inactivos después de';
$string['longtimenosee_help'] = 'Si los usuarios no acceden a un curso durante mucho tiempo, entonces se les da de baja automáticamente. Este parámetro especifica este plazo de tiempo.';
$string['maxenrolled'] = 'Número máximo de usuarios inscritos';
$string['maxenrolled_help'] = 'Especifique el número máximo de usuarios que pueden auto-inscribirse. El 0 significa sin límite.';
$string['maxenrolledreached'] = 'Se alcanzó el número máximo de usuarios permitidos para auto-inscripción.';
$string['nopassword'] = 'No se necesita clave para inscribirse';
$string['password'] = 'Clave de inscripción (¿# de grupo?)';
$string['password_help'] = '<p>Una clave de acceso permite que el acceso al curso esté limitado sólo a aquellos que conocen dicha clave. </p> <p>Si el campo se deja en blanco, cualquier usuario puede inscribirse en el curso.</p> <p>Si se especifica una clave de acceso, cualquier usuario que intenta inscribirse en el curso deberá proporcionar la clave. Tenga en cuenta que un usuario sólo tiene que proporcionar la clave de acceso UNA VEZ, cuando se inscribe en el curso.</p>';
$string['passwordinvalid'] = 'Contraseña de inscripción incorrecta, pruebe de nuevo';
$string['passwordinvalidhint'] = 'La contraseña de inscripción es incorrecta. Por favor, inténtelo de nuevo<br /> (Una pista: comienza con \'{$a}\')';
$string['pluginname'] = 'Auto-inscripción';
$string['pluginname_desc'] = '<p>El plugin para auto-inscripción permite a los usuarios elegir los cursos en los que quieren participar.</p> <p>Los cursos pueden estar protegidos por una contraseña de acceso.</p> <p> Internamente, la inscripción se realiza a través del plugin para la inscripción manual, que debe estar habilitado en el mismo curso.</p>';
$string['requirepassword'] = 'Se necesita una clave de inscripción';
$string['requirepassword_desc'] = 'Se necesita clave de inscripción en nuevos cursos y se evita la eliminación de la clave de inscripción de los cursos existentes.';
$string['role'] = 'Rol asignado por defecto';
$string['self:config'] = 'Configurar instancias de auto-inscripción';
$string['self:manage'] = 'Gestionar usuarios inscritos';
$string['self:unenrol'] = 'Dar de baja usuarios del curso';
$string['self:unenrolself'] = 'Darse de baja del curso';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de bienvenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si esta opción está activada, los usuarios recibirán un mensaje de bienvenida por email cuando se inscriban ellos mismos en un curso.';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar la primera letra de la contraseña de acceso de invitados.';
$string['status'] = 'Permitir la auto-inscripción';
$string['status_desc'] = 'Permitir, por defecto, que los usuarios puedan auto-inscribirse en un curso.';
$string['status_help'] = 'Esta opción determina si un usuario puede inscribirse a un curso (y también darse de baja si tienen el permiso adecuado) por si mismo.';
$string['unenrol'] = 'Des-inscribir usuario';
$string['unenrolselfconfirm'] = '¿Está seguro que quiere darse de baja del curso "{$a}"?';
$string['unenroluser'] = 'Realmente quiere dar de baja a "{$a->user}" del curso "{$a->course}"?';
$string['usepasswordpolicy'] = 'Utilice la directiva de contraseñas';
$string['usepasswordpolicy_desc'] = 'Utilice la directiva de contraseñas estándar para las claves de inscripción.';
$string['welcometocourse'] = 'Bienvenido a {$a}';
$string['welcometocoursetext'] = 'Bienvenido a {$a->coursename} Lo primero que debe hacer es actualizar su información personal: así podremos saber algo más sobre usted: {$a->profileurl}';
