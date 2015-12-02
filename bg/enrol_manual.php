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
 * Strings for component 'enrol_manual', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'Промяна на статуса';
$string['altertimeend'] = 'Промяна на крайното време';
$string['altertimestart'] = 'Промяна времето на започване';
$string['assignrole'] = 'Задаване на роля';
$string['confirmbulkdeleteenrolment'] = 'Сигурни ли сте, че искате да изтриете тези записвания на потребители?';
$string['defaultperiod'] = 'Продължителност на записването по подразбиране';
$string['defaultperiod_desc'] = 'Дължина по подразбиране на период за записване по подразбиране ( в секунди ).';
$string['defaultperiod_help'] = 'Продължителност по подразбиране на времето на валидност на записването, започващо от момента, в който потребителят е записан. Ако е изключено, продължителността на записването ще бъде по подразбиране неограничена.';
$string['deleteselectedusers'] = 'Изтриване записването на избраните потребители';
$string['editselectedusers'] = 'Редактиране записването на избраните потребители';
$string['enrolledincourserole'] = 'Записан в "{$a->course}" като "{$a->role}"';
$string['enrolusers'] = 'Записване на участници';
$string['manual:config'] = 'Конфигуриране на екземпляр за ръчно записване';
$string['manual:enrol'] = 'Записване на потребители';
$string['manual:manage'] = 'Управление на потребителските записвания';
$string['manual:unenrol'] = 'Отписване на потребители от курс';
$string['manual:unenrolself'] = 'Самоотписване от курс';
$string['pluginname'] = 'Ръчни записвания';
$string['pluginname_desc'] = 'Добавката  за ръчно записване позволява на потребителите да се записват чрез линк в настройките за администрация на курсова и от потребител с подходящите правомощия, като например учител. Тази добавка по принцип трябва да е активна, тъй като определени други добавки, като самозаписване, я използват.';
$string['status'] = 'Позволяване на ръчно записване';
$string['status_desc'] = 'Позволява достъп до курса на вътрешно записани потребители. Тази настройка трябва да е разрешена в повечето случаи.';
$string['statusdisabled'] = 'Забранен';
$string['statusenabled'] = 'Разрешен';
$string['status_help'] = 'Тази настройка позволява на потребителите да бъдат записвани ръчно, чрез линк в настройките за администрация на курса и от  потребител с подходящо разрешение, като например учител.';
$string['unenrol'] = 'Отписване на потребителя';
$string['unenrolselectedusers'] = 'Отписване на избраните потребители';
$string['unenrolselfconfirm'] = 'Наистина ли искате да се отпишете от курс "{$a}"?';
$string['unenroluser'] = 'Наистина и желаете да отпишете потребител "{$a->user}" от курс "{$a->course}"?';
$string['unenrolusers'] = 'Отписване на потребители';
$string['wscannotenrol'] = 'Екземплярът на добавката не може да запише потребителя ръчно в курса с id={$a->courseid}';
$string['wsnoinstance'] = 'Добавката за ръчно записване не съществува или е блокирана за курса  (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Вие нямата право да зададете тази роля  ({$a->roleid}) на потребителя ({$a->userid}) в този курс ({$a->courseid}).';
