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
 * Strings for component 'condition', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availabilityconditions'] = 'Ограничаване на достъпа';
$string['availablefrom'] = 'Разрешаване на достъпа от';
$string['availableuntil'] = 'Разрешаване на достъпа до';
$string['badavailabledates'] = 'Невалидни дати. Ако въведете и двете дати, то "Разрешаване на достъпа от" трябва да съдържа дата, предхождаща датата в "Разрешаване на достъпа до"';
$string['completion_complete'] = 'трябва да е маркиран като приключен';
$string['completioncondition'] = 'Условие за завършване на дейността';
$string['completion_fail'] = 'трябва да е завършен със слаба оценка';
$string['completion_incomplete'] = 'Трябва да не е маркиран като приключен';
$string['configenableavailability'] = 'Поставянето на отметката Ви позволява да зададете условия (основани на дата, оценка, или завършване), които да определят дали дейност или ресурс да са достъпни.';
$string['enableavailability'] = 'Разрешаване на условен достъп';
$string['grade_atleast'] = 'трябва да е поне';
$string['gradecondition'] = 'Условие за оценка';
$string['grade_upto'] = 'и по-малко от';
$string['none'] = '(няма)';
$string['notavailableyet'] = 'Не е достъпно все още';
$string['requires_completion_1'] = 'Не е достъпно, докато дейност <strong>{$a}</strong> не е маркирана като завършена.';
$string['requires_date'] = 'Достъпно от {$a}.';
$string['requires_date_before'] = 'Достъпно до {$a}.';
$string['requires_date_both'] = 'Достъпно от {$a->from} до {$a->until}.';
$string['requires_grade_any'] = 'Не е достъпно докато нямате оценка по <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Недостъпен докато не постигнете изисквания резултат в <strong>{$a}</strong>.';
$string['showavailability'] = 'Преди дейността да бъде достъпена';
$string['showavailability_hide'] = 'Пълно скриване на дейността';
$string['showavailability_show'] = 'Показване на дейността засивена,  информация за ограниченията';
$string['userrestriction_hidden'] = 'Ограничен (напълно скрит, без съобщение): &lsquo;{$a}&rsquo;';
$string['userrestriction_visible'] = 'Ограничен: &lsquo;{$a}&rsquo;';
