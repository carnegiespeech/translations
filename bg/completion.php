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
 * Strings for component 'completion', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Архивиране на оценка';
$string['activities'] = 'Дейности';
$string['activitycompletion'] = 'Завършване на дейността';
$string['aggregationmethod'] = 'Метод за обобщаване';
$string['all'] = 'Всички';
$string['any'] = 'Всяко';
$string['badautocompletion'] = 'Когато изберете автоматично завършване, трябва също да позволите поне едно от условията (по-долу).';
$string['completed'] = 'Завършено';
$string['completedunlockedtext'] = 'Когато запишете промените, информацията за завършване на всички студенти ще бъде изтрита. Ако промените намерението си относно това, не запазвайте настройката.';
$string['completedwarningtext'] = 'Един или повече студенти ({$a}) са отметнали тази дейност като завършена. Смяната на настройката за завършване ще изтрие информацията им за завършеност и ще ги озадачи. Ето защо настройката е заключена и трябва да не се отключва освен ако не е съвсем наложително.';
$string['completion'] = 'Завършване на дейността';
$string['completion-alt-auto-enabled'] = 'Системата отбелязва това за завършено, съгласно условията: {$a}';
$string['completion-alt-manual-enabled'] = 'Студентът може сам да отбележи като завършена дейността: {$a}';
$string['completion-alt-manual-n'] = 'Не е завършена дейността: {$a}. Изберете я за да я отбележите за завършена.';
$string['completion-alt-manual-y'] = 'Завършена е дейността: {$a}. Изберете я за да я отбележите за незавършена.';
$string['completion_automatic'] = 'Показване на дейността като завършена, когато са изпълнени условията';
$string['completionexpected'] = 'Очаква се до';
$string['completionexpected_help'] = 'Тази настройка задава датата до която се очаква студентът да завърши дейността. Датата не се показва на студентите и се показва само в отчета за завършване на дейности.';
$string['completionicons'] = 'Отметки за проследяване на напредъка';
$string['completion_manual'] = 'Студентите могат ръчно да отметнат дейността като завършена';
$string['completion_none'] = 'Да не се отчита дали дейността е завършена';
$string['completion-title-manual-n'] = 'Отбелязване за завършена: {$a}';
$string['completion-title-manual-y'] = 'Отбелязване за незавършена: {$a}';
$string['completionusegrade'] = 'Изисква оценка';
$string['completionusegrade_desc'] = 'Студентът трябва да получи оценка за да завърши тази дейност';
$string['completionusegrade_help'] = 'Ако е включено, дейността се счита завършена, когато студентът получи оценка. Иконите "Завършена" и "Незавършена" може да се покажат ако е зададена оценка за завършване на дейността.';
$string['completionview'] = 'Изисква преглеждане';
$string['completionview_desc'] = 'Студентът трябва да прегледа дейността, за да се счита завършена';
$string['configenablecompletion'] = 'Когато е включено, това Ви позволява да включвате проследяване на завършването (напредването) на студентите в отделните курсове.';
$string['coursealreadycompleted'] = 'Вие вече сте завършили този курс';
$string['coursecomplete'] = 'Напредване в курса';
$string['coursecompleted'] = 'Курсът е завършен';
$string['coursegrade'] = 'Оценка от курс';
$string['coursesavailable'] = 'Налични курсове';
$string['criteria'] = 'Критерии';
$string['criteriagroup'] = 'Група критерии';
$string['criteriarequiredall'] = 'Всички критерии по-долу са задължителни';
$string['criteriarequiredany'] = 'Някои критерии по-долу са задължителни';
$string['csvdownload'] = 'Сваляне във формат за електронна таблица (UTF-8 .csv)';
$string['datepassed'] = 'Мине дата';
$string['days'] = 'Дена';
$string['daysafterenrolment'] = 'Дни след записването';
$string['deletecoursecompletiondata'] = 'Изтриване на данните за завършване на курса';
$string['editcoursecompletionsettings'] = 'Редактиране на настройките за завършване на курса';
$string['enablecompletion'] = 'Позволяване проследяването на завършването';
$string['enrolmentduration'] = 'Оставащи дни';
$string['err_noactivities'] = 'Настройката за завършване не е активирана за никоя от дейностите и няма какво да се показва. Можете да зададете настройката за завършване редактирайки настройките на някоя дейност.';
$string['err_nocourses'] = 'Настройката за завършване на курс не е зададена за никой друг курс и няма какво да се показва. Можете да зададете настройка за завършване на курс от настройките на курса.';
$string['err_nograde'] = 'За този курс не е зададена оценка за завършване. За да удовлетворите този критерия Вие трябва да зададете оценка за завършване за този курс.';
$string['err_nousers'] = 'В този курс няма студенти или групи, за които да се показва информация за завършване. (По подразбиране, информация за завършване се показва само за студенти, и защото няма студенти, Вие ще виждате това съобщение за грешка. Администратор на сайта може да промени тази настройка.)';
$string['err_system'] = 'Възникна вътрешна грешка в системата за завършване. (Системните администратори могат да разрешат debugging information и да видят повече подробности.)';
$string['excelcsvdownload'] = 'Сваляне във формат, съвместим  Excel (.csv)';
$string['gradexrequired'] = 'Изисква се {$a}';
$string['manualselfcompletion'] = 'Ръчно самоотбелязване на завършването';
$string['moredetails'] = 'Още данни';
$string['notcompleted'] = 'Не е завършен';
$string['remainingenroleduntildate'] = 'Оставащи записани до определената дата';
$string['saved'] = 'Записан';
$string['seedetails'] = 'Вижте подробности';
$string['unenrolment'] = 'Отписване';
$string['unit'] = 'Единица';
$string['viewcoursereport'] = 'Вижте отчет за курса';
$string['xdays'] = '{$a} дена';
$string['yourprogress'] = 'Вашият напредък';
