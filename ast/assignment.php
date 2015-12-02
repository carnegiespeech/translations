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
 * Strings for component 'assignment', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeleting'] = 'Permitir esborrar';
$string['allowmaxfiles'] = 'Cantidá máxima de ficheros cargaos';
$string['allownotes'] = 'Permitir notes';
$string['allowresubmit'] = 'Permitir unviar otra vez.';
$string['allowresubmit_help'] = '<P ALIGN=CENTER><B>Reenvío de tarefas</B></P>

<P>Normalmente os estudantes non poden reenviar as tarefas despois de que sexan
cualificadas.</P>
<P>Se vostede activa esta opción permitiráselle aos estudantes reenviar as
tarefas despois de que sexan cualificadas (co obxecto de volver a cualificalas).
Isto pode ser útil se o profesor/a quere animar aos estudantes a facer un mellor
traballo nun proceso reiterativo.</P>

<P>Obviamente, esta opción non é aplicable para as tarefas &quot;Fóra de liña&quot;.</P>';
$string['alreadygraded'] = 'El so trabayu yá ta calificáu, nun pue volver unvialu.';
$string['assignmentdetails'] = 'Detalles del trabayu.';
$string['assignment:grade'] = 'Nota del trabayu.';
$string['assignmentmail'] = '{$a->teacher} unvió dellos comentarios al so trabayu unviáu  \'{$a->assignment}\'

Pue velos pegaos al so unvíu:

{$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} comentó\'l so trabayu <i>{$a->assignment} </i><br /><br /> Pue ver los comentarios pegaos nel so <a href="{$a->url}">trabayu</a>';
$string['assignmentname'] = 'Nome del trabayu.';
$string['assignment:submit'] = 'Unviar trabayu.';
$string['assignmenttype'] = 'Tipu de trabayu.';
$string['assignment:view'] = 'Ver trabayu.';
$string['availabledate'] = 'Disponible pa';
$string['cannotdeletefiles'] = 'Hubo un erru y nun se pudo esborrar los ficheros.';
$string['comment'] = 'Comentariu';
$string['commentinline'] = 'Comentarios sobre la marcha.';
$string['configitemstocount'] = 'Tipu de los elementos que l\'alumnu tien de tener en cuenta nos unvíos online (sobre la marcha) de los trabayos.';
$string['configmaxbytes'] = 'El tamañu máximu por defeutu de tolos trabayos del sitiu (según la llende del propiu cursu o d\'otra configuración llocal)';
$string['configshowrecentsubmissions'] = 'Tol mundu pue ver les notes de los trabayos nos informes d\'actividá recién.';
$string['confirmdeletefile'] = '¿Ta ciertu de que quier esborrar esti ficheiri?<br /><strong>{$a}</strong>';
$string['deleteallsubmissions'] = 'Esborrar tolos unvíos.';
$string['deletefilefailed'] = 'Falló\'l procesu d\'esborrar el ficheru.';
$string['description'] = 'Descripción';
$string['draft'] = 'Anteproyeutu';
$string['duedate'] = 'Fecha de vencimientu';
$string['duedateno'] = 'Ensin fecha de vencimientu';
$string['early'] = '{$a} ceu';
$string['editmysubmission'] = 'Editar el mio unvíu';
$string['emailstudents'] = 'Alertes de corréu ellectrónicu pa estudiantes';
$string['emailteachermail'] = '{$a->username} actualizó\'l trabayu qu\'unvió pa \'{$a->assignment}\' Pue velu equí: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} actualizó los sos unvíos de trabayos pa <i>\'{$a->assignment}\'</i><br /><br />
Pue <a href="{$a->url}">velos nel sitiu Web </a>.';
$string['emailteachers'] = 'Alertes de corréu ellectrónicu pa mayestros.';
$string['emptysubmission'] = 'Entá nun unvió nada';
$string['enablenotification'] = 'Unviar correos ellectrónicos de notificación.';
$string['existingfiledeleted'] = 'Esti ficheru esborróse: {$a}';
$string['failedupdatefeedback'] = 'Erru de la que s\'actualizaba l\'unvíu de comentarios al usuariu {$a}';
$string['feedback'] = 'Comentarios';
$string['feedbackfromteacher'] = 'Comentariu de {$a}';
$string['feedbackupdated'] = 'Unvíu de comentarios a los usuarios {$a} actualizaos.';
$string['finalize'] = 'Nun s\'almiten más unvíos';
$string['finalizeerror'] = 'Hubo un erru y l\'unvíu nun se fizo bien';
$string['graded'] = 'Aprobáu/ada';
$string['guestnosubmit'] = 'Los convidados nun puen unviar trabayos. Tien d\'entrar/rexistrase primero y dempués va poder unviar la so rempuesta';
$string['guestnoupload'] = 'Los convidaos nun puen cargar.';
$string['helpoffline'] = '<p>Esto ye útil si\'l trabayu se fae fuera de Moodle. Pue ser n\'otru llugar de la Web o cara a cara.</p><p>Los estudiantes puen ver la descripción del trabayu, pero non cargar ficheros. Los trabayos califícanse y los estudiantes van recibir anuncia de les sos notes.</p>';
$string['helponline'] = '<p>Esti tipu de trabayu implica que los usuarios editen un testu usando les ferramientes d\'edición normales. Los profesores puen calificalos on line, y hasta puen amestar comentarios o modificaciones on line.</p> <p>(Si tien familiaridá con versiones más antigües de Moodle, esti tipu de trabayu fai lo mesmo que l\'antiguu módulu Periódicu.)</p>';
$string['helpupload'] = '<p>Esti tipu de trabayu permite cargar ún o más ficheros en cualquier formatu pa caún los participantes.
   Estos ficheros puen ser documentos de testu, imaxes, un sitio Web comprimíu, o cualquier cosa qu\'unvíe.</p>
   <p>Esti tipu tamién permite cargar varios ficheros retruque. Los ficheros retruque tamién puen cargase enantes del unvíu; d\'esta miente puen usase pa dalos a caún los participanetes ficheros con actividaes distintes.</p>
   <p>Los participantes tamién puen escribir notes pa describir los ficheros unviaos, el progresu o cualquier otra información.</p>
   <p>L\'unvíu d\'esti tipu de trabayu tien d\'acabalu manualmente\'l participante. Pue revisar l\'estáu actual
cuando-y pete, los trabayos incompletos márquense como Anteproyeutu. Pue devolver cualquier trabayu desclasificáu al estáu d\'anteproyeutu.</p>';
$string['helpuploadsingle'] = '<p>Esti tipu de trabayu permite que caún los participantes pueda cargar namás un ficheru
de cualquier tipu.</p> <p>Pue ser un documentu de testu, una imaxe, un sitiu Web comprimíu, o cualquiea cosa qu\'unvíe.</p>';
$string['hideintro'] = 'esconder descripción enantes de la fecha disponible.';
$string['itemstocount'] = 'Contar';
$string['late'] = '{$a} tarde';
$string['maximumgrade'] = 'Nota máxima';
$string['maximumsize'] = 'Tamañu máximu';
$string['modulename'] = 'Trabayu';
$string['modulename_help'] = '<p><P><IMG VALIGN=absmiddle SRC="<?php echo $CFG->wwwroot?>/mod/assignment/icon.gif" /> <b>Tarefas</b></p>


<p>O módulo de tarefas permite que o profesor/a asigne un traballo ao alumnado,

incluso deberán preparalo nalgún medio dixital (calquera formato) e presentalo

subíndoo ao servidor. As tarefas típicas inclúen ensaios, proxectos, fotografías, etc. Este módulo

conta con

capacidade de cualificación.</p>';
$string['modulenameplural'] = 'Trabayos';
$string['newsubmissions'] = 'Trabayos unviaos.';
$string['noassignments'] = 'Entá nun hai trabayos.';
$string['noattempts'] = 'Nun se fizo nengún intentu de resolver esti trabayu.';
$string['nofiles'] = 'Los ficheros nun s\'unviaren.';
$string['nofilesyet'] = 'Los ficheros entá nun s\'unviaren.';
$string['nomoresubmissions'] = 'Nun se permiten más unvíos';
$string['notavailableyet'] = 'Esti trabayu entá nun ta disponible.<br />Les instruciones de los trabayos van apaecer equí na fecha qu\'apaez embaxo.';
$string['notes'] = 'Notes';
$string['notesempty'] = 'Nun entrar';
$string['notesupdateerror'] = 'Erru de la que s\'actualizaben les notes';
$string['notgradedyet'] = 'Entá ensin puntuar.';
$string['notsubmittedyet'] = 'Entá ensin unviar.';
$string['onceassignmentsent'] = 'En entregando\'l trabayu pa que seya correxíu ya nun va poder esborrar o amestar ficheru(os). ¿Quier continuar?';
$string['overwritewarning'] = 'Avisu: si fai la carga otra vez va SUSTITUYIR el so unvíu actual';
$string['pagesize'] = 'Unvíos amosaos per páxina';
$string['pluginname'] = 'Trabayu';
$string['preventlate'] = 'Prevenir unvíos tardíos';
$string['quickgrade'] = 'Permitir correición rápida';
$string['responsefiles'] = 'Ficheros rempuesta';
$string['reviewed'] = 'Revisaos';
$string['saveallfeedback'] = 'Guardar tolos mios comentarios.';
$string['sendformarking'] = 'Unviar pa correxir.';
$string['showrecentsubmissions'] = 'Amosar trabayos recientes.';
$string['submission'] = 'Unvíu';
$string['submissiondraft'] = 'Previsualización del unvíu';
$string['submissionfeedback'] = 'Comentariu del unvíu';
$string['submissions'] = 'Unvíos';
$string['submissionsaved'] = 'Les sos modificaciones guradárense.';
$string['submissionsnotgraded'] = '{$a} unvíos non correxíos.';
$string['submitassignment'] = 'Unvíe\'l so trabayu usando esti formati';
$string['submitedformarking'] = 'El trabayu ta yá unviada pa correxir y nun pue actualizase.';
$string['submitformarking'] = 'Trabayu final unviáu pa nota final.';
$string['submitted'] = 'Unviáu';
$string['submittedfiles'] = 'Ficheros unviaos';
$string['subplugintype_assignment'] = 'Tipu de trabayu.';
$string['trackdrafts'] = 'Activar unviar pa calificar.';
$string['typeoffline'] = 'Actividá fuera de linia';
$string['typeonline'] = 'Testu en llinia';
$string['typeupload'] = 'Actualización avanzada de ficheros';
$string['typeuploadsingle'] = 'Actualización de namás un ficheru';
$string['unfinalize'] = 'Retornar al anteproyeytu';
$string['unfinalizeerror'] = 'Hubo un erru y l\'unvíu nun pudo devolvese al anteproyeutu.';
$string['uploadbadname'] = 'Esti nome de ficheru tien carauteres estraños y nun se pudo cargar.';
$string['uploadedfiles'] = 'ficheros cargaos';
$string['uploaderror'] = 'Hubo un erru de la que se guardaba\'l ficheru nel servidor.';
$string['uploadfailnoupdate'] = 'El ficheru cargóse correutamente, pero nun pudo actualizar el so unvíu!';
$string['uploadfiletoobig'] = 'El ficheru ye más grande de la cuenta (la llende ye {$a} bytes)';
$string['uploadnofilefound'] = 'Nun s\'atopó nengún ficheru. ¿Ta ciertu de qu\'escoyó dalgún pa cargar?';
$string['uploadnotregistered'] = '\'{$a}\' cargóse correutamente, pero l\'unvíu nun se rexistró.';
$string['uploadsuccess'] = '\'{$a}\' cargáu bien.';
$string['viewfeedback'] = 'Ver notes de los trabayos y comentarios';
$string['viewsubmissions'] = 'Ver {$a} trabayos unviaos';
$string['yoursubmission'] = 'El so unvíu';
