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
 * Strings for component 'rating', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Среден рейтинг';
$string['aggregatecount'] = 'Брой рейтинги';
$string['aggregatemax'] = 'Максимален';
$string['aggregatemin'] = 'Минимален';
$string['aggregatenone'] = 'Без рейтинги';
$string['aggregatesum'] = 'Сума от рейтинги';
$string['aggregatetype'] = 'Тип обобщаване';
$string['aggregatetype_help'] = 'Типът обобщаване определя как се комбинират рейтингите за да формират крайна оценка в книгата с оценки.

* Average of ratings - Средна стойност на всички рейтинги
* Count of ratings - Брой на рейтингите. Общият брой рейтинги не трябва да превишава максималната оценка за дейността.
* Maximum - Най-високият рейтинг става крайна оценка по дейността
* Minimum - Най-малкият рейтинг става крайна оценка по дейността
* Sum - Сума на всички рейтинги. Сумата на всички рейтинги не трябва да превишава максималната оценка за дейността.

Ако е избрано "No ratings", дейността няма да се отрази в книгата за оценки.';
$string['capabilitychecknotavailable'] = 'Проверка за правата не е възможна преди дейността да бъде записана.';
$string['noratings'] = 'Не са определени рейтинги';
$string['ratings'] = 'Рейтинги';
$string['ratingtime'] = 'Ограничаване на рейтингите само за записите между дати:';
$string['rolewarning'] = 'Роли с права да определят рейтинг';
$string['rolewarning_help'] = 'За да определят рейтинги потребителите трябва да имат право moodle/rating:rate и специфични за модула права. Потребителите с изброените роли трябва да имат права да определят рейтинги. Списъкът с роли може да се промени чрез бутона за настройки на правата на блока.';
