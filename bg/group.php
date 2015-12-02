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
 * Strings for component 'group', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Добавяне на потребител в група';
$string['addgroupstogroupings'] = 'Добавяне/премахване на групи';
$string['adduserstogroup'] = 'Добавяне/премахване на потребители';
$string['allocateby'] = 'Разпределяне  на членове';
$string['autocreategroups'] = 'Автоматично създаване на групи';
$string['backtogroupings'] = 'Обратно към групиране';
$string['backtogroups'] = 'Обратно към групи';
$string['badnamingscheme'] = 'Трябва да съдържа точно  един \'@\' или един \'#\' символ';
$string['byfirstname'] = 'Азбучно подреждане по собствено име, фамилия';
$string['byidnumber'] = 'Азбучно по идентификационен номер
';
$string['bylastname'] = 'Азбучно по фамилия,собствено име';
$string['creategroup'] = 'Създаване на група';
$string['creategrouping'] = 'Създаване на групиране';
$string['createingrouping'] = 'Създаване в групиране';
$string['databaseupgradegroups'] = 'Версията на групите сега е {$a}';
$string['defaultgrouping'] = 'Групиране по подразбиране';
$string['deleteallgroupings'] = 'Изтриване на всички групирания';
$string['deleteallgroups'] = 'Изтриване на всички групи';
$string['deletegroupconfirm'] = 'Сигурни ли сте, че искате да изтриете група "{$a}"?';
$string['deletegrouping'] = 'Изтриване на групиране';
$string['deletegroupingconfirm'] = 'Сигурни ли сте, че искате да изтриете групиране "{$a}"? (Групите в групирането не са изтрити.)';
$string['deletegroupsconfirm'] = 'Сигурни ли сте, че искате да изтриете следните групи?';
$string['deleteselectedgroup'] = 'Изтрий избраната група';
$string['editgroupingsettings'] = 'Редактиране настройки на групиране
';
$string['editgroupsettings'] = 'Редактиране настройки на група';
$string['enrolmentkey'] = 'Код за записване';
$string['enrolmentkey_help'] = 'Кодът за записване позволява достъпа до курса да бъде ограничен само до тези, които знаят кода. Ако е определен код за вписване в група, тогава с въвеждането му, потребителят влиза в курса и автоматично става член на тази група.';
$string['erroraddremoveuser'] = 'Грешка при добавяне/премахване на потребител {$a} към група';
$string['erroreditgroup'] = 'Грешка при създаване/обновяване на група  {$a} ';
$string['erroreditgrouping'] = 'Грешка при създаване/обновяване на групиране {$a} ';
$string['errorinvalidgroup'] = 'Грешка, невалидна група  {$a} ';
$string['errorselectone'] = 'Моля маркирайте група,преди да изберете тази опция';
$string['errorselectsome'] = 'Моля маркирайте една или повече групи, преди да изберете тази опция';
$string['existingmembers'] = 'Съществуващи членове: {$a}';
$string['filtergroups'] = 'Филтрирай групите по:';
$string['group'] = 'Група';
$string['groupaddedsuccesfully'] = 'Група  {$a} е добавена успешно';
$string['groupdescription'] = 'Описание на групата';
$string['groupinfo'] = 'Информация за избраната група';
$string['groupinfomembers'] = 'Информация за избраните членове';
$string['groupinfopeople'] = 'Информация за избраните хора';
$string['grouping'] = 'Групиране';
$string['groupingdescription'] = 'Описание на групирането';
$string['grouping_help'] = 'Групирането е събиране на  групи в рамките на един курс.Ако е избрано групиране, учениците записани в съответните групи, ще имат възможност да работят заедно.';
$string['groupingname'] = 'Име на групирането';
$string['groupingnameexists'] = 'Избраното име на групиране "{$a}" вече съществува в този курс, моля изберете друго.';
$string['groupings'] = 'Групирания';
$string['groupmember'] = 'Член на група';
$string['groupmembers'] = 'Членове на група';
$string['groupmembersonly'] = 'Достъпно само за членове на групата';
$string['groupmembersonlyerror'] = 'Съжалявам, трябва да сте член на поне една група включена в тази дейност.';
$string['groupmembersonly_help'] = 'Ако е поставена отметка в това поле, дейността (или средствата) ще бъдат налични само за ученици , записани в групите в рамките на избраното групиране.';
$string['groupmemberssee'] = 'Виж членовете на групата';
$string['groupmembersselected'] = 'Членове на маркираната група';
$string['groupmode'] = 'Групов режим';
$string['groupmodeforce'] = 'Налагане на групов режим';
$string['groupmodeforce_help'] = 'Ако груповият режим е наложен, то курсовият групов режим се отнася за всяка дейност в курса. Настройките за групов режим за всяка дейност се игнорират.';
$string['groupmode_help'] = 'Тази настройка има 3 възможности:

*Без групи - Няма подгрупи,всеки е част от една голяма общност.

*Отделни групи - Всеки член на група може да вижда само собствената си група, останалите са невидими.

*Видими групи - Всеки член на група работи в своята група, но може да вижда и други групи.


Груповият режим, зададен на курсово ниво, е режима по подразбиране за всички дейности в курса. Всяка дейност, която поддържа групи, може също така да си определи собствен групов режим, въпреки че ако груповият режим е наложен на курсово ниво, настройките за групов режим за всяка дейност се игнорират.';
$string['groupmy'] = 'Моята група';
$string['groupname'] = 'Име на група';
$string['groupnameexists'] = 'Избраното име на група "{$a}" вече съществува в този курс,моля изберете друго.';
$string['groupnotamember'] = 'Съжалявам, Вие не сте член на тази група';
$string['groups'] = 'Групи';
$string['groupscount'] = 'Групи ({$a})';
$string['groupsnone'] = 'Няма групи';
$string['groupsonly'] = 'Само за групи';
$string['groupspreview'] = 'Преглед на групи';
$string['groupsseparate'] = 'Отделни групи';
$string['groupsvisible'] = 'Видими групи';
$string['grouptemplate'] = 'Група @';
$string['hidepicture'] = 'Скриване на изображението';
$string['importgroups'] = 'Импортиране на групи';
$string['members'] = 'Членове за група';
$string['membersofselectedgroup'] = 'Членове на:';
$string['namingscheme_help'] = 'Символът (@) може да се използва за създаване на групи с имена, съдържащи букви. Например Група @ ще генерира групи, именовани Група A, Група B, Група C, ...

Символът (#) може да се използва за създаване на групи с имена, съдържащи цифри. Например Група # ще генерира групи, именовани Група 1, Група 2, Група 3, ...';
$string['newgrouping'] = 'Ново групиране';
$string['newpicture'] = 'Нова снимка';
$string['newpicture_help'] = 'Избира изображение във JPG or PNG формат. Изображението ще бъде изрязано до квадрат с размери 100x100 пиксела.';
$string['nogroups'] = 'Няма създадени групи за този курс';
$string['nopermissionforcreation'] = 'Не можете да създадете група "{$a}" тъй като нямате необходимите права';
$string['notingrouping'] = '[Не е в групиране]';
$string['numgroups'] = 'Брой групи';
$string['nummembers'] = 'Членове за група';
$string['overview'] = ' Общ преглед';
$string['potentialmembers'] = 'Потенциални членове: {$a}';
$string['potentialmembs'] = 'Потенциални членове';
$string['printerfriendly'] = 'Оптимизиран за отпечатване вид';
$string['random'] = 'Произволно';
$string['removefromgroup'] = 'Премахни потребител от група  {$a}';
$string['removefromgroupconfirm'] = 'Наистина ли искате да премахнете потребител "{$a->user}" от група "{$a->group}"?';
$string['removegroupingsmembers'] = 'Изтриване на всички групи';
$string['removegroupsmembers'] = 'Премахване на всички членове на групата';
$string['removeselectedusers'] = 'Премахване на избраните потребители';
$string['showgroupsingrouping'] = 'Показване на групи в групиране';
$string['showmembersforgroup'] = 'Показване на членове на група';
$string['usercount'] = 'Брой потребители';
$string['usercounttotal'] = 'Брой потребители ({$a})';
$string['usergroupmembership'] = 'Членство на избрания потребител:';
