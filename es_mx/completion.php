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
 * Strings for component 'completion', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Alcanzando calificación';
$string['activities'] = 'Actividades';
$string['activitiescompleted'] = 'Actividades completadas';
$string['activitycompletion'] = 'Finalización de actividad';
$string['addcourseprerequisite'] = 'Agregar prerrequisito de curso';
$string['afterspecifieddate'] = 'Después de una fecha especificada';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['any'] = 'Cualquiera';
$string['approval'] = 'Aprobación';
$string['badautocompletion'] = 'Cuando selecciona finalización automática, debe también activar al menos un requisito (vea más abajo)';
$string['completed'] = 'Completado';
$string['completedunlocked'] = 'Opciones de finalización desbloqueadas';
$string['completedunlockedtext'] = 'Cuando guarda los cambios, se borrará el estado de finalización de todos los estudiantes. Si cambia de parecer sobre este asunto, no guarde el formato.';
$string['completedwarning'] = 'Opciones de finalización bloqueadas';
$string['completedwarningtext'] = 'Uno o más estudiantes ({$a}) ya ha(n) marcado esta actividad como finalizada. Cambiar las opciones de finalización borrará su estado de finalización y puede ocasionar confusión. Por tanto, estas opciones han sido bloqueadas y no se deberían desbloquear salvo que fuera absolutamente necesario.';
$string['completion'] = 'Seguimiento de finalización';
$string['completion-alt-auto-enabled'] = 'El sistema marca este ítem como completo de acuerdo con las condiciones: {$a}';
$string['completion-alt-auto-fail'] = 'Finalizado {$a} (no obtuvo calificación de aprobado)';
$string['completion-alt-auto-n'] = 'Sin finalizar: {$a}';
$string['completion-alt-auto-pass'] = 'Finalizado: {$a} (obtuvo calificación de aprobado)';
$string['completion-alt-auto-y'] = 'Finalizado: {$a}';
$string['completion-alt-manual-enabled'] = 'Los estudiantes pueden marcar manualmente este ítem como completado: {$a}';
$string['completion-alt-manual-n'] = 'No finalizado; {$a}. Seleccione para marcar como finalizado';
$string['completion-alt-manual-y'] = 'Finalizado; {$a} seleccione para marcar como no finalizado';
$string['completion_automatic'] = 'Mostrar la actividad como completada cuando se cumplan las condiciones';
$string['completiondisabled'] = 'Deshabilitado, no se muestra en los ajustes de la actividad';
$string['completionenabled'] = 'Habilitado, control por medio de los ajustes de finalización y de actividad';
$string['completionexpected'] = 'Se espera finalizar en';
$string['completionexpected_help'] = 'Esta opción especifica la fecha en que se espera que la actividad esté finalizada. La fecha no se muestra a los estudiantes y aparece únicamente en el reporte de progreso.';
$string['completion-fail'] = 'Finalizado (no obtuvo calificación de aprobado)';
$string['completion_help'] = 'Si se activa esta opción, se rastrea el grado de finalización de cualquier actividad, bien manual, bien automáticamente, basándose en determinadas condiciones. Si se desea, se pueden fijar múltiples condiciones. Si se hace así, la actividad únicamente se considerará completa si se cumplen TODAS las condiciones.

Una marca (paloma) al lado del nombre de la actividad en la página del curso indica cuándo la actividad está completa.';
$string['completionicons'] = 'Casillas para marcar la finalización';
$string['completionicons_help'] = 'Una marca (paloma) junto al nombre de la actividad puede utilizarse para indicar que una actividad se completó.

Si se muestra una casilla punteada, entonces será posible hacer clic sobre ella para activarla e indicar que la actividad se ha realizado. Si se vuelve a hacer clic sobre ella, la marca (paloma) desaparece. Esta marca es opcional y se utiliza para llevar un seguimiento personal sencillo de su propio progreso a través del curso.

Si se muestra una casilla en blanco, la marca aparecerá cuando se haya completado la actividad de acuerdo con las condiciones establecidas por el profesor.';
$string['completion_manual'] = 'Los estudiantes pueden marcar manualmente la actividad como completada';
$string['completionmenuitem'] = 'Finalización';
$string['completion-n'] = 'No finalizado';
$string['completion_none'] = 'No indicar finalización de la actividad';
$string['completionnotenabled'] = 'Finalización no está habilitada';
$string['completionnotenabledforcourse'] = 'Finalización no está habilitada para este curso';
$string['completionnotenabledforsite'] = 'Finalización no está habilitado para este sitio. Vaya a \'Administración del sitio > Características avanzadas > Habilitar seguimiento del grado de finalización \'.';
$string['completiononunenrolment'] = 'Finalización al des-inscribirse';
$string['completion-pass'] = 'Finalizado (alcanzó calificación de aprobado)';
$string['completionsettingslocked'] = 'Ajustes de finalización bloqueados';
$string['completionstartonenrol'] = 'El rastreo de la finalización comienza en la inscripción';
$string['completionstartonenrolhelp'] = 'Comenzar el seguimiento del progreso de un estudiante respecto a la finalización al momento que se haya inscrito en el curso.';
$string['completion-title-manual-n'] = 'Marcar como completo: {$a}';
$string['completion-title-manual-y'] = 'Marcar como no finalizado: {$a}';
$string['completionusegrade'] = 'Requerir calificación';
$string['completionusegrade_desc'] = 'El estudiante debe recibir una calificación para completar esta actividad';
$string['completionusegrade_help'] = 'Si se activa, la actividad se considera finalizada cuando un estudiante recibe una calificación. Los iconos Aprobar y Suspender se muestran si se ha establecido una calificación de aprobado para la actividad.';
$string['completionview'] = 'Requerir ver';
$string['completionview_desc'] = 'El estudiante debe ver esta actividad para completarla';
$string['completion-y'] = 'Finalizado';
$string['configenablecompletion'] = 'Cuando se habilita, le permite activar las características de seguimiento de la finalización (seguimiento del  progreso) a nivel del curso.';
$string['confirmselfcompletion'] = 'Confirmar finalización por si mismo';
$string['coursealreadycompleted'] = 'Usted ya ha finalizado este curso';
$string['coursecomplete'] = 'Curso finalizado';
$string['coursecompleted'] = 'Curso finalizado';
$string['coursegrade'] = 'Calificación del curso';
$string['courseprerequisites'] = 'Prerrequisitos del curso';
$string['coursesavailable'] = 'Cursos disponibles';
$string['coursesavailableexplaination'] = '<i>Los criterios del grado de finalización del curso deben ajustarse para que el curso aparezca en esta lista</i>';
$string['criteria'] = 'Criterios';
$string['criteriagradenote'] = 'Por favor observe que al actualizar aquí la calificación requerida, no se actualizará la calificación aprobatoria para el curso actual.';
$string['criteriagroup'] = 'Grupo de criterios';
$string['criteriarequiredall'] = 'Son necesarios todos los criterios que aparecen más abajo';
$string['criteriarequiredany'] = 'Es necesario cualquiera de los criterios que aparecen más abajo';
$string['csvdownload'] = 'Descargar en formato de hoja de cálculo (UTF-8 .csv)';
$string['datepassed'] = 'Fecha pasada';
$string['days'] = 'Días';
$string['daysafterenrolment'] = 'Días después de la inscripción';
$string['deletecompletiondata'] = 'Borrar datos de finalización';
$string['deletecoursecompletiondata'] = 'Eliminar los datos de finalización del curso';
$string['durationafterenrolment'] = 'Duración después de la inscripción';
$string['editcoursecompletionsettings'] = 'Editar ajustes de grado de finalización del curso';
$string['enablecompletion'] = 'Habilitar seguimiento del grado de finalización';
$string['enrolmentduration'] = 'Días restantes';
$string['err_noactivities'] = 'No está habilitada la información sobre la finalización de ninguna actividad. Puede activar la información sobre la finalización de una actividad editando la configuración para la actividad.';
$string['err_nocourses'] = 'La finalización del curso no está habilitada para ningú otro curso, por lo que no se puede mostrar ninguno. Puede activar la finalización de cursos dentro de las configuraciones del curso.';
$string['err_nograde'] = 'En este curso no se ha establecido una calificación para pasar el curso. Para activar este tipo de criterio, debe crear una calificación para pasar el curso.';
$string['err_noroles'] = 'No hay roles con los permisos \'moodle/course:markcomplete\' en este curso. Puede activar este tipo de criterio añadiendo este permiso a los roles.';
$string['err_nousers'] = 'No hay estudiantes ni grupos en este curso para los que se muestre la información sobre finalización. (Por defecto, la información sobre finalización se muestra solo para estudiantes, por lo que si no hay estudiantes verá este error. Los administradores pueden modificar esta opción mediante las pantallas de administración)';
$string['err_settingslocked'] = 'Uno o más estudiantes han finalizado ya  un criterio, por lo que los parámetros han sido bloqueados. Desbloquer los parámetros de los criterios de finalización borrará cualquier dato de usuario, lo que podría causar confusión.';
$string['err_system'] = 'Se ha producido un error interno en el sistema de finalización. (Los administradores del sistema pueden habilitar la información (debugging) para ver más detalles)';
$string['excelcsvdownload'] = 'Descargar en formato compatible con Excel (.csv)';
$string['fraction'] = 'Fracción';
$string['graderequired'] = 'Calificación requerida';
$string['gradexrequired'] = '{$a} requerido';
$string['inprogress'] = 'En curso';
$string['manualcompletionby'] = 'Grado de finalización manual por';
$string['manualselfcompletion'] = 'Auto-finalizar manualmente';
$string['markcomplete'] = 'Marcar completo';
$string['markedcompleteby'] = 'Marcado completo por {$a}';
$string['markingyourselfcomplete'] = 'Marcando Usted mismo como completado';
$string['moredetails'] = 'Más detalles';
$string['nocriteriaset'] = 'No hay criterios establecidos para la finalización de este curso';
$string['notcompleted'] = 'No finalizado';
$string['notenroled'] = 'Usted no está inscrito en este curso';
$string['notyetstarted'] = 'Aún no ha comenzado';
$string['overallcriteriaaggregation'] = 'Criterio global de agregación';
$string['pending'] = 'Pendiente';
$string['periodpostenrolment'] = 'Período después de la inscripción';
$string['prerequisites'] = 'Prerrequisitos';
$string['prerequisitescompleted'] = 'Prerrequisitos cumplidos';
$string['progress'] = 'Progreso del estudiante';
$string['progress-title'] = '{$a->user},
{$a->activity}:
{$a->state} {$a->date}';
$string['recognitionofpriorlearning'] = 'Reconocimiento de aprendizaje previo';
$string['remainingenroledfortime'] = 'Permanecer inscrito durante un período de tiempo especificado';
$string['remainingenroleduntildate'] = 'Permanecer inscrito hasta una fecha especificada';
$string['reportpage'] = 'Mostrando usuarios {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criterios necesarios';
$string['restoringcompletiondata'] = 'Escribiendo datos de grado de finalización';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalles';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto finalización';
$string['showinguser'] = 'Mostrando usuario';
$string['unenrolingfromcourse'] = 'Dando de baja (des-inscribiendo) del curso';
$string['unenrolment'] = 'Dar de baja (des-inscribir)';
$string['unit'] = 'Unidad';
$string['unlockcompletion'] = 'Desbloquear opciones de grado de finalización';
$string['unlockcompletiondelete'] = 'Desbloquear opciones de grado de finalización y eliminar los datos de grado de finalización del usuario';
$string['usealternateselector'] = 'Usar el selector de curso alternativo';
$string['usernotenroled'] = 'El usuario no está inscrito en este curso';
$string['viewcoursereport'] = 'Ver reporte del curso';
$string['viewingactivity'] = 'Viendo el/la/los {$a}';
$string['writingcompletiondata'] = 'Escribiendo los datos del grado de finalización';
$string['xdays'] = '{$a} días';
$string['yourprogress'] = 'Su progreso';
