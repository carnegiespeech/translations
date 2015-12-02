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
 * Strings for component 'qformat_wordtable', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   qformat_wordtable
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'No puede abrirse el archivo temporal <b>{$a}</b>';
$string['cannotreadzippedfile'] = 'No puede lerrse el archivo comprimido ZIP <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'No se puede escribir al archivo temporal <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Distractores';
$string['cloze_feedback_column_label'] = 'Retroalimentación de distractor';
$string['cloze_instructions'] = 'Use <strong>negritas</strong> para los ítems del menú desplegable, y use <em>cursivas</em> para los ítems de campo de texto.';
$string['cloze_mcformat_label'] = 'Orientación (D = desplegable; V = vertical, H = horizontal botones seleccionables)';
$string['description_instructions'] = 'Esta no es realmente una pregunta. En realidad, es una manera de añadir instrucciones, rúbrica u otro contenido a la actividad. Es similar a la forma en que se emplean las etiquetas para añadirle contenido a una página de curso.';
$string['docnotsupported'] = 'Los archivos con formato de Word 2003 no están soportados: <b>{$a}</b>, use Moodle2Word 3.x en su lugar';
$string['essay_instructions'] = 'Permite una respuesta de unas cuantas oraciones o párrafos. Esto debe calificarse manualmente.';
$string['export_type_set'] = 'El tipo de pregunta a exportar ha sido configurado a';
$string['htmldocnotsupported'] = 'Formato de Word incorrecto; por favor use la opción de <i> Archivo > Guardar como...</i> para guardar <b>{$a}</b> en formato (.doc) nativo de Word 2010 (docx9) y volver a importar';
$string['htmlnotsupported'] = 'Archivos en formato HTML no están soportados: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'No se importaron preguntas porque el idioma de las etiquetas en el archivo de Word no coincide con el idioma actual de su interfaz de Moodle.';
$string['multichoice_instructions'] = 'Permite la selección de respuesta única o múltiple de una lista pre-definida.';
$string['noquestions'] = 'No hay preguntas para exportar';
$string['pluginname'] = 'Formato de tabla de Microsoft Word 2010 (wordtable)';
$string['pluginname_help'] = 'Este es un programa para convertir el formato binario de Microsoft Word 2010 hacia formato de pregunta de Moodle XML para importar; y para convertir el formato de pregunta de Moodle XML hacia un formato mejorado XHTML para exportar las preguntas de Moodle en un formato apropiado para editarlas empleando  Microsoft Word.';
$string['preview_question_not_found'] = 'Previsualizar pregunta no encontrada, nombre / ID del curso: {$a}';
$string['stylesheetunavailable'] = 'La hoja de estilo de XSLT <b>{$a}</b> no está disponible';
$string['tempfile'] = 'Archivo temporal XML: <b>{$a}</b>';
$string['templateunavailable'] = 'La plantilla XHTML compatible con Word <b>{$a}</b> no está disponible';
$string['transformationfailed'] = 'La transformación con XSLT falló  (XSLT/XML <b>{$a}</b>)';
$string['truefalse_instructions'] = 'XConfigurar alificación de \'100\' para la respuesta correcta.';
$string['unsupported_instructions'] = 'El importar este tipo de pregunta no está soportado.';
$string['word_about_moodle2word'] = 'Acerca de Moodle2Word';
$string['word_conversionfailed'] = 'Falló la importación de preguntas';
$string['word_conversionsucceeded'] = 'Importación de Pregunta <b>exitosa</b>, <br>haga click en el botón de <b>\'Cerrar\'</b> para continuar.';
$string['word_conversionsucceeded2'] = 'Importación de Pregunta <b>exitosa</b>, <br>haga click en el botón de <b>\'Continuar\'</b> para continuar.';
$string['word_multiple_answer'] = 'repuesta Múltiple';
$string['word_new_question_file'] = 'Archivo de Pregunta Nueva';
$string['word_setunset_assessment_view'] = 'Activar/Desactivar Vista de Evaluación';
$string['word_showhide_assessment_view'] = 'Mostrar/Ocultar Vista de Evaluación';
$string['wordtable'] = 'Formato de tabla de Microsoft Word 2010 (wordtable)';
$string['wordtable_help'] = 'Este es un programa para convertir el formato binario de Microsoft Word 2010 hacia el formato de Pregunta de Moodle XML para importar, y para convertir el formato de pregunta de Moodle XML hacia un formato mejorado XHTML para exportarse en un formato adecuado para editarse en Microsoft Word.';
$string['xmlnotsupported'] = 'Los archivos en formato XML no están soportados: <b>{$a}</b>';
$string['xsltunavailable'] = 'Usted necesita la librería XSLT instalada enPHP para guardar este archivo de Word';
