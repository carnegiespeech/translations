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
 * Strings for component 'qtype_randomsamatch', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingrandomsamatch'] = 'Añadiendo una pregunta de relacionar columnas de respuesta corta aleatoria';
$string['editingrandomsamatch'] = 'Añadiendo una pregunta de relacionar columnas de respuesta corta aleatoria';
$string['nosaincategory'] = 'No existen preguntas de respuesta corta en la categoría que Usted eligió \'{$a->catname}\'. Elija una categoría diferente, fabrique algunas preguntas dentro de esta categoría.';
$string['notenoughsaincategory'] = 'Solamente hay {$a->nosaquestions} preguntas de respuesta corta en la categoría que eligió \'{$a->catname}\'. Elija una categoría diferente, haga más preguntas en esta categoría o reduzca la cantidad de preguntas que ha seleccionado.';
$string['randomsamatch'] = 'Concordancia de respuesta corta aleatoria';
$string['randomsamatch_help'] = 'Desde la perspectiva del estudiante, esto se parece a una pregunta de relacionar columnas. La diferencia es que la lista de nombres u oraciones (preguntas) para relacionar se sacaron aleatoriamente a partir de preguntas de respuesta corta en la categoría actual. Deberían de existir suficientes preguntas de respuesta corta no utilizadas en la categoría, pues de lo contrario, se mostrará un mensaje de error.';
$string['randomsamatchsummary'] = 'Como una pregunta de relacionar columnas, pero creada aleatoriamente a partir de preguntas de respuesta corta dentro de una categoría particular.';
