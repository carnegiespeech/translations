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
 * Strings for component 'qtype_regexp', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   qtype_regexp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingregexp'] = 'Añadiendo pregunta de expresión regular';
$string['answer'] = 'Respuesta:';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si hay una calificación o retroalimentación.';
$string['answerno'] = 'Respuesta: {$a}';
$string['bestcorrectansweris'] = '<strong>La mejor respuesta correcta es:</strong><br />{$a}';
$string['caseno'] = 'No, MAY/minúsculas no importa';
$string['casesensitive'] = 'Sensibilidad a MAY/minúsculas';
$string['caseyes'] = 'Si, MAYÚSCULAS/minúsculas si deben coincidir';
$string['clicktosubmit'] = 'Elija el botón <strong>Revisar (Check)</strong> para enviar esta respuesta <strong>completa</strong>.';
$string['correctansweris'] = '<strong>La respuesta correcta es:</strong><br />{$a}';
$string['correctanswersare'] = '<strong>Las otras respuestas aceptadas son:</strong>';
$string['editingregexp'] = 'Editando pregunta de expresión regular';
$string['filloutoneanswer'] = '<em>Respuesta 1</em> debe ser una respuesta correcta (calificación = 100%) y no será analizada como una expresión regular.';
$string['fractionsnomax'] = 'La calificación para la Respuesta # 1 debe ser de 100%.';
$string['hidealternate'] = 'Ocultar respuestas alternas';
$string['illegalcharacters'] = '<strong>¡ERROR!</strong> En respuestas con una calificación > 0 estos metacaracteres <em>no-escapados (unescaped)</em> no están permitidos: <strong>{$a}</strong>';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere al menos una respuesta';
$string['penaltyforeachincorrecttry'] = 'Castigo por intentos incorrectos y Ayuda';
$string['penaltyforeachincorrecttry_help'] = 'Cuando Usted corra sus preguntas empleando el comportamiento de  \'Interactivo con intentos múltiples\' o \'modo Adaptativo\', de forma tal que sus estudiantes tendrán varios intentos para tener correcta la pregunta, entonces esta opción controla que tanto son penalizados por cada intento incorrecto.

El castigo es proporcional al puntaje total de la pregunta; así, si la pregunta vale tres puntos, y el castigo es de 0.3333333, entonces el estudiante obtendrá 3 puntos si la tiene correcta al primer intento, 2 si acierta al segundo intento y 1 si acierta al tercer intento

Si Usted ha configurado el <strong>Botón de Ayuda</strong> a <strong>Si</strong>  para esta pregunta, el mismo castigo aplica cada vez que el estudiante elige el Botón de <strong>Mostrar Ayuda</strong>.';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta';
$string['pluginname'] = 'Respuesta corta de expresión regular';
$string['regexp'] = 'Respuesta corta expresión regular';
$string['regexperror'] = 'Error en expresión regular:<strong>{$a}</strong>';
$string['regexperrorclose'] = 'cerrado: <strong>{$a}</strong>';
$string['regexperroropen'] = 'abierto: <strong>{$a}</strong>';
$string['regexperrorparen'] = '<strong>ERROR!</strong> ¡Revise sus paréntesis o paréntesis cuadrados!';
$string['regexperrorsqbrack'] = 'Paréntesis cuadrados';
$string['regexp_help'] = 'Hacer click derecho en la liga inferior sobre  <em>Más Ayuda</em> para abrir la página de Ayuda en una nueva pestaña/ventana.';
$string['regexpsensitive'] = 'Usar expresiones regulares para revisar respuestas';
$string['regexpsummary'] = 'Similar a respuesta corta, pero el análisis de las respuestas del estudiante se basa en expresiones regulares';
$string['showalternate'] = 'Mostrar respuestas alternas';
$string['usehint'] = 'Mostrar Botón de Ayuda';
$string['usehint_help'] = 'Al seleccionar <strong>Mostrar Botón de Ayuda</strong> -> <strong>Si</strong>, se mostrará un botón de <strong>Ayúdame</strong> que le permite al estudiante "comprar" una letra.

Por defecto, el Botón de Ayuda está configurado a  <b>No</b>';
