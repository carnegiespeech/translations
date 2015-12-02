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
 * Strings for component 'enrol_self', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = 'Уведомление "Добре дошли"';
$string['defaultrole'] = 'Задавана по подразбиране роля';
$string['defaultrole_desc'] = 'Изберете роля, която ще бъде дадена на потребителя при самозаписване';
$string['editenrolment'] = 'Редактиране на записването';
$string['enrolenddate'] = 'Крайна дата';
$string['enrolenddate_help'] = 'Ако е позволена, потребителите могат да се самозаписват само преди тази дата.';
$string['enrolenddaterror'] = 'Крайната дата за записване не може да бъде по-ранна от началната дата';
$string['enrolme'] = 'Запиши ме';
$string['enrolperiod'] = 'Период за записване';
$string['enrolperiod_desc'] = 'Продължителност по подразбиране на периода за записване (в секунди).';
$string['enrolperiod_help'] = 'Продължителност във времето, през която записването в курса е валидно, започвайки от момента, в който потребителя се самозапише. Ако не е позволено, записването ще е неограничено във времето.';
$string['enrolstartdate'] = 'Начална дата';
$string['enrolstartdate_help'] = 'Ако е позволена, потребители могат да се самозаписват само след тази дата.';
$string['groupkey'] = 'Ключове за записване по групи';
$string['groupkey_desc'] = 'Ключове за записване по групи по подразбиране';
$string['groupkey_help'] = 'В добавка към ограничаването на достъпа до курса само за хора, които знаят ключа, използването на ключове за записване по групи означава, че потребителите се разпределят в съставените групи при записването си в курса.

За използване на ключове за записване по групи трябва в настройките на курса да е зададен ключ за записване, а също така и в настройките на групите да са зададени ключове за записване в групите.';
$string['longtimenosee'] = 'Отписване за неактивност след';
$string['longtimenosee_help'] = 'Ако потребителят не е влизал в курса дълго време, той автоматично се отписва. Този параметър определя след колко време да става това.';
$string['maxenrolled'] = 'Максимум записани потребители';
$string['maxenrolled_help'] = 'Определя максималния брой на потребителите, които могат да се самозапишат. 0 означава, че няма ограничение.';
$string['maxenrolledreached'] = 'Вече е достигнат максималния брой на потребителите, които е разрешено да се самозаписват.';
$string['nopassword'] = 'Не се изисква ключ за записване.';
$string['password'] = 'Ключ за записване';
$string['password_help'] = 'Кодът за записване позволява достъпът до курса да се ограничи само до тези, които знаят кода.

Ако полето е оставено празно, всеки потребител ще може да се впише в курса.

Ако е определен код за записване, всеки потребител, желаещ да се запише в курса ще трябва да представи кода. Забележете, че потребителят трябва да въведе  кода само веднъж, когато се записва в курса.';
$string['passwordinvalid'] = 'Грешен код за записване! Моля опитайте отново';
$string['passwordinvalidhint'] = 'Ключът за записване е грешен, моля опитайте отново <br />
(Съвет: ключът започва със "{$a}")';
$string['pluginname'] = 'Самозаписване';
$string['pluginname_desc'] = 'Добавката за самозаписване позволява потребителите сами да изберат курсовете, в които да участват. Курсовете може да са защитени с ключ за записване. Технически записването става през добавката за ръчно записване, която трябва да е актива за същия курс.';
$string['requirepassword'] = 'Изискване ключ за записване';
$string['requirepassword_desc'] = 'Изисква кодове за записване в новите курсове и предпазва премахването на кодове за записване от съществуващи курсове.';
$string['role'] = 'Задавана роля по подразбиране';
$string['self:config'] = 'Конфигуриране на екземплярите на добавката за самозаписване';
$string['self:manage'] = 'Управление на записаните потребители';
$string['self:unenrol'] = 'Отписване на потребители от курс';
$string['self:unenrolself'] = 'Самоотписване от курс';
$string['sendcoursewelcomemessage'] = 'Изпращане на съобщение "Добре дошли"';
$string['sendcoursewelcomemessage_help'] = 'Ако е включено, потребителите получават по имейл съобщение "Добре дошли", когато се запишат сами в курса.';
$string['showhint'] = 'Показване на подсказка';
$string['showhint_desc'] = 'Показване на първата буква от ключа за достъп като гост.';
$string['status'] = 'Позволява самостоятелно записване';
$string['status_desc'] = 'Позволява на потребителите да се записват в курса сами по подразбиране.';
$string['status_help'] = 'Тази настройка определя дали потребител може сам да се запише (а също и да се отпише, ако има съответното право) от курса.';
$string['unenrol'] = 'Записване на потребител';
$string['unenrolselfconfirm'] = 'Наистина ли искате да се отпишете от курс "{$a}" ?';
$string['unenroluser'] = 'Наистина и желаете да отпишете потребител "{$a->user}" от курс "{$a->course}"?';
$string['usepasswordpolicy'] = 'Изисквания за сигурност като за паролите';
$string['usepasswordpolicy_desc'] = 'Използване на стандартните изисквания за сигурност на паролите и върху ключовете.';
$string['welcometocourse'] = 'Добре дошли в {$a}';
$string['welcometocoursetext'] = 'Добре дошли в {$a->coursename}!

Ако все още не сте го направили, препоръчваме Ви да редактирате страницата с личния Ви профил, така че да научим нещо повече за Вас:


{$a->profileurl}';
