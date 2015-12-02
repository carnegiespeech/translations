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
 * Strings for component 'qtype_pmatch', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   qtype_pmatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espacios vacíos para {no} Respuestas Más';
$string['addmoresynonymblanks'] = 'Espacios vacíos para {no} sinónimos más';
$string['allowsubscript'] = 'Permitir uso de subíndice';
$string['allowsuperscript'] = 'Permitir uso de superíndice';
$string['answer'] = 'Respuesta: {$a}';
$string['answeringoptions'] = 'Opciones Para Escribir Respuestas';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si existe una calificación o retroalimentación';
$string['answerno'] = 'Respuesta {$a}';
$string['anyotheranswer'] = 'Cualquier otra respuesta';
$string['applydictionarycheck'] = 'Revisar ortografía del estudiante';
$string['caseno'] = 'No, MAY/minúsculas no importan';
$string['casesensitive'] = 'Sensibilidad a MAY/minúsculas';
$string['caseyes'] = 'MAY/minúsculas deben coincidir';
$string['converttospace'] = 'Convertir los siguientes caracteres a un espacio';
$string['correctanswers'] = 'Respuestas correctas';
$string['env_dictmissing'] = 'Paquete de idioma \'{$a->humanfriendlylang}\' ({$a->lang}) instalado, pero no pudo encontrarse el diccionario para deletrear (pspell) ({$a->langforspellchecker}).';
$string['env_dictmissing2'] = 'El estudiante intentó una revisión ortográfica en el idioma \'{$a}\'. Pero el diccionario para deletrear (aspell) para este idioma no está instalado.';
$string['env_dictok'] = 'El paquete de idioma \'{$a->humanfriendlylang}\' ({$a->lang}) está instalado y el diccionario para deletrear (pspell) para este idioma  ({$a->langforspellchecker}) también está correctamente instalado.';
$string['environmentcheck'] = 'Revisiones del entorno para el tipo de pregunta pmatch (pcoincidir)';
$string['env_peclnormalisationmissing'] = 'El Normalizador del Paquete PECL para Unicode parece NO estar correctamente instalado';
$string['env_peclnormalisationok'] = 'El Normalizador del Paquete PECL para Unicode parece estar correctamente instalado';
$string['env_pspellmissing'] = 'La biblioteca pspell (pdeletrear) parece NO estar correctamente instalada';
$string['env_pspellok'] = 'La biblioteca pspell (pdeletrear) parece estar correctamente instalada';
$string['extenddictionary'] = 'Añadir estas palabras al diccionario';
$string['filloutoneanswer'] = 'Usar sintaxis de coincidencia (concordancia ) de patrón para describir respuestas correctas. Usted debe proporcionar al menos una respuesta posible. Las respuestas que se dejan vacías no se usarán. La primera respuesta que coincida se usará para determinar la calificación y retroalimentación.';
$string['forcelength'] = 'Si la respuesta tiene más de 20 palabras';
$string['forcelengthno'] = 'no emitir advertencia';
$string['forcelengthyes'] = 'advertir que la respuesta es demasiado larga e invitar al alumno para que la acorte';
$string['ie_illegaloptions'] = 'Opciones ilegales en la expresión "match<strong><em>{$a}</em></strong>()".';
$string['ie_lastsubcontenttypeorcharacter'] = 'El caracter OR no debe terminar subcontenido en "{$a}".';
$string['ie_lastsubcontenttypeworddelimiter'] = 'El caracter delimitador de palabra no debe terminar sub contenido  "{$a}".';
$string['ie_missingclosingbracket'] = 'Falta paréntesis de cierre en fragmento de código "{$a}".';
$string['ie_nomatchfound'] = 'Error en código de concordancia de patrón.';
$string['ie_unrecognisedexpression'] = 'Expresión no reconocida.';
$string['ie_unrecognisedsubcontents'] = 'Sub contenido no reconocido en fragmento de código "{$a}".';
$string['inputareatoobig'] = 'El área de entrada definida por "{$a}" es demasiado grande. El tamaño del área de entrada está limitado a un ancho de 150 caracteres y una altura de  100 caracteres.';
$string['nomatchingsynonymforword'] = 'No se escribieron sinónimos para la palabra. Elimine la palabra o escriba sinónimo(s) para ella.';
$string['nomatchingwordforsynonym'] = 'Usted no ha escrito una palabra que sea equivalente al sinónimo. Elimine el/los sinónimo(s) o escriba una palabra equivalente a ella.';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere cuando menos {$a} respuestas';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta.';
$string['pluginname'] = 'Coincidencia de patrón';
$string['pluginnameadding'] = 'Añadiendo una pregunta de coincidencia de patrón';
$string['pluginnameediting'] = 'Editando una pregunta de coincidencia de patrón';
$string['pluginname_help'] = 'En respuesta a una pregunta (que puede incluir una imagen) el alumno escribe una frase corta. Puede haber varias respuestas correctas posibles, cada una con una calificación diferente. Si está seleccionada la opción de "MAYÚSCULAS/minúsculas diferentes" entonces puede tener diferente calificaciones para "Palabra" o "palabra".';
$string['pluginnamesummary'] = 'Permite una respuesta corta de una o varias oraciones, que se califica al compararla contra varias respuestas modelo, que se describen usando la sintaxis de concordancia de patrones (\'\'pmatch\'\') de Open University.';
$string['repeatedword'] = 'Esta palabra aparece más de una vez en la lista de sinónimos.';
$string['spellingmistakes'] = 'Las siguientes palabras no están en nuestro diccionario : {$a}. Por favor corrija su deletreado.';
$string['subsuponelineonly'] = 'El editor de sub / super índices no puede usarse con una caja de entrada de una línea de alto.';
$string['synonym'] = 'Sinónimos';
$string['synonymcontainsillegalcharacters'] = 'El sinónimo contiene caracteres ilegales.';
$string['synonymsheader'] = 'Definir Sinónimos Para Palabras en Respuestas';
$string['toomanywords'] = 'Su respuesta es demasiado larga. Por favor edítela para que no sea mayor de 20 palabras.';
$string['unparseable'] = 'No entendemos los caracteres o la puntuación aquí "{$a}"';
$string['wordcontainsillegalcharacters'] = 'La palabra contiene caracteres ilegales.';
$string['wordwithsynonym'] = 'Palabra';
