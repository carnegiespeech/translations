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
 * Strings for component 'question', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Informe de probables problemes na so base de datos d\'entrugues.';
$string['broken'] = 'Esti ye un "enllaz rotu", apunta a un ficheru que nun esiste.';
$string['byandon'] = 'por <em>{$a->user}</em> en <em>{$a->time}</em>';
$string['cannotread'] = 'Nun se pue ller el ficheru d\'importación (o ta vacíu)';
$string['categorycurrent'] = 'Categoría actual';
$string['categorycurrentuse'] = 'Usar esta categoría';
$string['categorydoesnotexist'] = 'Esta categoría nun esiste';
$string['categorymove'] = 'La categoría \'{$a->name}\' contién {$a->count} entrugues (delles igual son yá vieyes, tán ocultes o usándose n\'otros esamenes).<br />Escueya otra categoría a ónde moveles.';
$string['categorymoveto'] = 'Guardar esta categoría';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">La categoría "{$a->name}"</a> nel cursu "{$a->coursename}" va cambiar el so estatus d\'intercambiu <strong>{$a->changefrom} a {$a->changeto}</strong>.';
$string['copy'] = 'Copiar de {$a} y cambiar enllaces';
$string['created'] = 'Creáu';
$string['createdmodifiedheader'] = 'Creáu / Guardáu por última vez';
$string['cwrqpfs'] = 'Entrugues aleatories escoyendo entrugues de socategoríes.';
$string['cwrqpfsinfo'] = '<p>Na actualización a Moodle 1.9 vamos separar les categoríes d\'entruga en diferentes contestos. Delles categoríes y entrugues del so sitiu van ver el so estatus d\'intercambiu modificáu. Esto ye necesario nos raros casos nos que una o más entrugues aleatories se seleicionen dende una mestura de categoríes compartíes y non compartíes (como asocede nel casu d\'esti sitiu). Esto pasa si una entruga aleatoria s\'axusta pa escoyer dende les socategoríes, y una o más socategoríes tien(en) distintu estatus d\'intercambiu cola categoría padre na que se crea la entruga aleatoria.</p>
<p>Les siguientes categoríes, de les que les entrugues aleatorias de les categoríes superiores escueyen les entrugues, van tener -na actualización a Moodle 1.9- el so estatus d\'intercambiu modificáu al mesmu estatus que la categoría que contién la entruga aleatoria. Les categoríes qu\'apaecen darréu van tener el so estatus d\'intercambiu modificáu. Les entrugues afeutaes van siguir funcionando en tolos cuestionarios esistentes hasta qu\'usté les esborre d\'esos cuestionarios.';
$string['cwrqpfsnoprob'] = 'Nun esisten categoríes nel so sitiu que tean afeutaes pola opción \'Entrugues aleatories escoyendo entrugues de socategoríes\'.';
$string['defaultfor'] = 'Por defeutu pa {$a}';
$string['defaultinfofor'] = 'La categoría por defeutu pa entrugues compartíes nel contestu \'{$a}\'';
$string['deletecoursecategorywithquestions'] = 'Hai entrugues nel bancu d\'entrugues asociaes a esta categoría de cursu. Si sigue, van esborrase. Igual prefier moveles a otru llau primerp, usando la interface del bancu d\'entrugues.';
$string['donothing'] = 'Nun copiar nin mover ficheros o cambiar enllaces.';
$string['editingcategory'] = 'Editando una categoría';
$string['editingquestion'] = 'Editando una entruga';
$string['erroraccessingcontext'] = 'Nun se pue entrar nel contestu';
$string['errordeletingquestionsfromcategory'] = 'Erru de la que s\'esborraben entrugues de la categoría {$a}';
$string['errorfilecannotbecopied'] = 'Erru, nun se pue copiar el ficheru {$a}';
$string['errorfilecannotbemoved'] = 'Erru, nun se pue mover el ficheru {$a}';
$string['errorfileschanged'] = 'Erru, los ficheros enllazaos a/dende este entrugues cambiaren dende que\'l formulariu apaeció en pantalla';
$string['errormanualgradeoutofrange'] = 'La nota {$a->grade} nun ta ente 0 y {$a->maxgrade} na entruga {$a->name}. La puntuación y el comentariu nun se guardaren.';
$string['errormovingquestions'] = 'Erru de la que se movíen entrugues con id {$a}';
$string['errorprocessingresponses'] = 'Hubo un erru de la que se procesaben les sos respuestes.';
$string['errorsavingcomment'] = 'Erru de la que se guardaba el comentariu pa la entruga {$a->name} na base de datos.';
$string['errorupdatingattempt'] = 'Erru de la que s\'actualizaba l\'intentu {$a->id} na base de datos.';
$string['exportcategory'] = 'Esportar categoría.';
$string['exportfilename'] = 'Cuestionariu';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['filesareacourse'] = 'l\'area de ficheros del cursu.';
$string['filesareasite'] = 'l\'area de ficheros del sitiu.';
$string['filestomove'] = '¿Mover / copiar ficheros a {$a}?';
$string['fractionsnomax'] = 'Ún de los retruques tendría de tener una puntuación de 100% pa que se puediera consiguir la nota máxima nesta entruga.';
$string['getcategoryfromfile'] = 'Saber la categoría po la información del ficheru';
$string['getcontextfromfile'] = 'Saber el contextu po la información del ficheru';
$string['ignorebroken'] = 'Ignorar enllaces rotos';
$string['invalidcontextinhasanyquestions'] = 'Contestu inválidu treslladáu a question_context_has_any_questions';
$string['linkedfiledoesntexist'] = 'Ficheru enllazáu {$a} nun esiste';
$string['makechildof'] = 'Facer fíu de \'{$a}\'';
$string['maketoplevelitem'] = 'Mover al nivel d\'enriba';
$string['missingimportantcode'] = 'A esti tipu d\'entruga fálta-y el códigu: {$a}.';
$string['modified'] = 'Últimu guardáu';
$string['move'] = 'Mover de {$a} y cambiar enllaz';
$string['movecategory'] = 'Mover Categoría';
$string['movedquestionsandcategories'] = 'Mover entrugues y categoríes d\'entruga de {$a->oldplace} a {$a->newplace}.';
$string['movelinksonly'] = 'Cambie a ónde apunta esti enllaz, nun mueva nin copie los ficheros.';
$string['moveq'] = 'Mover entruga(es)';
$string['moveqtoanothercontext'] = 'Mover entruga a otru contestu';
$string['movingcategory'] = 'Mover categoría';
$string['movingcategoryandfiles'] = '¿Ta seguru/a de que quier mover la categoria {$a->name} y toles sos categoríes fíes al contestu "{$a->contextto}"? <br/> Atopárense {$a->urlcount} ficheros enllazaos dende les entrugues en {$a->fromareaname}, ¿Quier copiar o mover estos ficheros a {$a->toareaname}?';
$string['movingcategorynofiles'] = '¿Ta seguru de que quier mover la categoría "{$a->name}" y toles categoríes fíes al contestu "{$a->contextto}"?';
$string['movingquestions'] = 'Moviendo entrugues y dellos ficheros';
$string['movingquestionsandfiles'] = '¿Ta seguru/a de que quier mover les entrugues {$a->questions} al contestu <strong>"{$a->tocontext}"</strong>?<br /> Atopárense <strong>{$a->urlcount} ficheros</strong> enllazaos dende eses entrugues en {$a->fromareaname}, ¿quier copiar o mover esos ficheros a {$a->toareaname}?';
$string['movingquestionsnofiles'] = '¿Ta seguru/a de que quier mover les entrugues {$a->questions} al contestu <strong>"{$a->tocontext}"</strong>?<br /> Nun hai <strong>ficheros</strong> enllazaos dende eses entrugues en {$a->fromareaname}.';
$string['needtochoosecat'] = 'Tien d\'escoyer una categoría a la que mover esta entruga o cancal \'cancelar\'.';
$string['nopermissionadd'] = 'Nun tien permisu p\'amestar entrugues nesti llugar.';
$string['nopermissionmove'] = 'Nun tien permisu pa mover entrugues a otru sitiu. Tien de guardar la entruga nesta categoría o salvala como entruga nueva.';
$string['noprobs'] = 'Nun s\'atoparen problemes na so base de datos d\'entrugues.';
$string['noquestionsinfile'] = 'Nel ficheru importáu nun hai entrugues';
$string['notenoughdatatoeditaquestion'] = 'Nun s\'especificó id pa la entruga o pa la categoría nin el tipu d\'entruga.';
$string['notenoughdatatomovequestions'] = 'Necesita escribir la id d\'entruga de les preguntes que quier facer';
$string['penaltyfactor'] = 'Factor de penalización';
$string['permissionedit'] = 'Editar esta entruga';
$string['permissionmove'] = 'Mover esta entruga';
$string['permissionsaveasnew'] = 'Guardar esta entruga como entruga nueva';
$string['permissionto'] = 'Tien permisu pa:';
$string['published'] = 'espublizáu';
$string['questionaffected'] = '<a href="{$a->qurl}">Entruga "{$a->name}" ({$a->qtype})</a> ta nesta categoría d\'entruga pero ta tamién usándose nel <a href="{$a->qurl}">cuestionariu "{$a->quizname}"</a> d\'otru cursu "{$a->coursename}"';
$string['questionbank'] = 'Bancu d\'entrugues';
$string['questioncategory'] = 'Categoría d\'entruga';
$string['questioncatsfor'] = 'Categoríes d\'entruga pa \'{$a}\'';
$string['questiondoesnotexist'] = 'Esta entruga nun esiste';
$string['questionsmovedto'] = 'Entrugues que tán tovía usándose movíes a \'{$a}\' na categoría padre del cursu';
$string['questionsrescuedfrom'] = 'Entrugues guardaes del contestu {$a}.';
$string['questionsrescuedfrominfo'] = 'Estes entrugues (delles pue ser qu\'escondíes) guardárense de la que\'l contestu {$a} s\'esborró porque tovía taben usándose en dellos cuestionarios y otres actividaes.';
$string['questionuse'] = 'Usar entruga nesta actividá.';
$string['selectcategoryabove'] = 'Escoyer una de les categoríes indicaes';
$string['shareincontext'] = 'Compartir nel contestu pa {$a}';
$string['tofilecategory'] = 'Escribir categoría del ficheru';
$string['tofilecontext'] = 'Escribir contestu del ficheru';
$string['unknown'] = 'Desconocíu';
$string['unknownquestiontype'] = 'Tipu d\'entruga desconocíu: {$a}.';
$string['unpublished'] = 'ensin espublizar';
$string['upgradeproblemcategoryloop'] = 'Atopóse un problema de la que s\'actualizaben les categoríes d\'entruga. Hai un bucle nel árbol de categoríes. Les ids de categoría perxudicaes son {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Nun su pudo actualizar la categoría d\'entruga {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Atopóse un problema de la que s\'actualizaben les categoríes d\'entruga. La categoría {$a->id} refierse a la padre {$a->parent}, que nun esiste. La categoría padre cambió pa iguar el problema.';
$string['yourfileshoulddownload'] = 'La so esportación de ficheru debería entamar en seguida. Si nun ye así, por favor<a href="{$a}">calque equí</a>. La categoría padre cambió pa iguar el problema.';
