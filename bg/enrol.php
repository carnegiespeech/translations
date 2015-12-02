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
 * Strings for component 'enrol', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Налични добавки (plugins) за запис в курс';
$string['addinstance'] = 'Добавяне на метод';
$string['ajaxnext25'] = 'Следващите 25...';
$string['ajaxoneuserfound'] = 'намерен е 1 потребител';
$string['ajaxxusersfound'] = 'намерени са {$a} потребители';
$string['assignnotpermitted'] = 'Нямате права или не можете да присвоявате роли в този курс.';
$string['bulkuseroperation'] = 'Масова операция с потребители';
$string['configenrolplugins'] = 'Моля изберете всички желани добавки (plugins) и ги подредете в подходящ ред.';
$string['custominstancename'] = 'Персонализирано име на инстанцията';
$string['defaultenrol'] = 'Добавяне на инстанция към новите курсове';
$string['defaultenrol_desc'] = 'Възможно е да добавите тази добавка за всички нови курсове по подразбиране.';
$string['deleteinstanceconfirm'] = 'Наистина ли желаете да изтриете инстанция на добавка (plugin) за записване "{$a->name}" с {$a->users} записани потребители?';
$string['durationdays'] = '{$a} дена';
$string['enrol'] = 'Записване';
$string['enrolcandidates'] = 'Незаписани потребители';
$string['enrolcandidatesmatching'] = 'Съвпадащи не записани потребители';
$string['enrolcohort'] = 'Записване на кохорта';
$string['enrolcohortusers'] = 'Запиши потребители';
$string['enrollednewusers'] = 'Успешно са записани {$a} нови потребителя';
$string['enrolledusers'] = 'Записани участници';
$string['enrolledusersmatching'] = 'Съвпадащи записани потребители';
$string['enrolme'] = 'Запиши ме в този курс';
$string['enrolmentinstances'] = 'Методи за записване';
$string['enrolmentnew'] = 'Ново записване в {$a}';
$string['enrolmentnewuser'] = '{$a->user} се записа в курс "{$a->course}"';
$string['enrolmentoptions'] = 'Настройки на записването';
$string['enrolments'] = 'Записвания';
$string['enrolnotpermitted'] = 'Нямате права или не ви е позволено да запишете някого в този курс.';
$string['enrolperiod'] = 'Времетраене на записването';
$string['enroltimeend'] = 'Край на записването';
$string['enroltimestart'] = 'Начало на записването';
$string['enrolusage'] = 'Инстанции / записвания';
$string['enrolusers'] = 'Записване на потребители';
$string['errajaxfailedenrol'] = 'Неуспешно записване на потребител';
$string['errajaxsearch'] = 'Грешка при търсене на потребители';
$string['erroreditenrolment'] = 'Възникна грешка при опита за редактиране на записването на потребителя в курс';
$string['errorenrolcohort'] = 'Грешка при създаване на екземпляр от метод за записване в курс чрез синхронизиране с кохорта.';
$string['errorenrolcohortusers'] = 'Грешка при записването на членовете на кохортата в този курс.';
$string['errorwithbulkoperation'] = 'Имаше грешка докато се обработваше Вашата промяна с масово записване.';
$string['extremovedaction'] = 'Външно действие за записване';
$string['extremovedaction_help'] = 'Изберете действие, което да се извърши, когато записването изчезне от външния източник. Забележете, че някои данни и настройки се изчистват от курса при отписването от него.';
$string['extremovedkeep'] = 'Задръж потребителя записан';
$string['extremovedsuspend'] = 'Забраняване записването в курс';
$string['extremovedsuspendnoroles'] = 'Забраняване записването в курс и премахване на ролите';
$string['extremovedunenrol'] = 'Отписване на потребител от курс';
$string['finishenrollingusers'] = 'Край на записването на участници';
$string['invalidenrolinstance'] = 'Невалидна инстанция за записване';
$string['invalidrole'] = 'Невалидан роля';
$string['manageenrols'] = 'Управление на добавки (plugins) за записване';
$string['manageinstance'] = 'Управление';
$string['nochange'] = 'Без промяна';
$string['noexistingparticipants'] = 'Няма участници';
$string['noguestaccess'] = 'Гости не могат да достъпват този курс, моля опитайте се да влезете.';
$string['none'] = 'Няма';
$string['notenrollable'] = 'Не можете сами да се запишете в този курс.';
$string['notenrolledusers'] = 'Други потребители';
$string['otheruserdesc'] = 'Изброените потребители не са записани в този курс, но имат наследени или зададени  роли в него.';
$string['participationactive'] = 'Активен';
$string['participationstatus'] = 'Статус';
$string['participationsuspended'] = 'Временно преустановен';
$string['periodend'] = 'до {$a}';
$string['periodstart'] = 'от {$a}';
$string['periodstartend'] = 'от {$a->start} до {$a->end}';
$string['recovergrades'] = 'Възстановяване на старите оценки на потребителя, ако е възможно';
$string['rolefromcategory'] = '{$a->role} (наследена от категорията курсове)';
$string['rolefrommetacourse'] = '{$a->role} (Наследена от родителния курс)';
$string['rolefromsystem'] = '{$a->role} (Зададена на ниво сайт)';
$string['rolefromthiscourse'] = '{$a->role} (Зададена в този курс)';
$string['startdatetoday'] = 'Днес';
$string['synced'] = 'Включена';
$string['totalenrolledusers'] = '{$a} записани потребители';
$string['totalotherusers'] = '{$a} други потребители';
$string['unassignnotpermitted'] = 'Нямате право да отнемате роли в този курс';
$string['unenrol'] = 'Отписване';
$string['unenrolconfirm'] = 'Наистина и желаете да отпишете потребител "{$a->user}" от курс "{$a->course}"?';
$string['unenrolme'] = 'Отпиши ме от {$a}';
$string['unenrolnotpermitted'] = 'Нямате права или не може да отпишете този потребител от курса.';
$string['unenrolroleusers'] = 'Отпиши потребители';
$string['uninstallconfirm'] = 'Вие се каните за изтриете добавката за записване "{$a}". Това напълно ще изтрие всичко от базата данни, свързано с този вид записване. СИГУРНИ ли сте, че искате да продължите?';
$string['uninstalldeletefiles'] = 'Всички данни свързани с добавка за записване "{$a->plugin}" са изтрити от базата данни. За да довършите изтриването (и да попречите тя да се преинсталира сама), Вие сега трябва и да изтриете от сървъра директория: {$a->directory}';
$string['unknowajaxaction'] = 'Поискано е неизвестно действие';
$string['unlimitedduration'] = 'Неограничено';
$string['usersearch'] = 'Търсене';
$string['withselectedusers'] = 'С избраните потребители';
