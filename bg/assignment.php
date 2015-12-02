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
 * Strings for component 'assignment', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Добавяне на работа';
$string['allowdeleting'] = 'Разрешено изтриване';
$string['allowdeleting_help'] = 'Ако се разреши студентите ще могат да изтриват качените файлове по всяко време преди предаването им за оценяване.';
$string['allowmaxfiles'] = 'Максимален брой файлове за качване';
$string['allowmaxfiles_help'] = 'Понеже този брой не се показва никъде, трябва да се спомене в описанието на заданието.';
$string['allownotes'] = 'Позволени бележки';
$string['allownotes_help'] = 'Ако е позволено, студентите могат да напишат бележки в едно текстово поле, както при онлайн заданията.';
$string['allowresubmit'] = 'Повторно качване';
$string['allowresubmit_help'] = 'Ако е разрешено, студентите ще могат да предадат повторно работата си след като е оценена, за да бъде оценена наново.';
$string['alreadygraded'] = 'Вашата работа вече е оценена и повторно предаване не е разрешено.';
$string['assignment:exportownsubmission'] = 'Експортиране на собствената работа';
$string['assignment:grade'] = 'Оценяване на задание';
$string['assignmentmail'] = '{$a->teacher} е изпратил/а обратна информация за Вашата предадена работа по задание "{$a->assignment}".

Можете да я видите прикачена към предадената работа:

{$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} е изпратил/а обратна информация за Вашата предадена работа по задание "<i>{$a->assignment}</i>".<br />
<br />
Можете да я видите прикачена към <a href="{$a->url}">предадената работа</a>.';
$string['assignmentmailsmall'] = '{$a->teacher} е изпратил/а обратна информация за Вашата предадена работа по задание "{$a->assignment}".

Можете да я видите прикачена към предадената работа.';
$string['assignmentname'] = 'Име на заданието';
$string['assignmentsubmission'] = 'Предадена работа по задание';
$string['assignmenttype'] = 'Тип задание';
$string['availabledate'] = 'Достъпно от';
$string['comment'] = 'Коментар';
$string['commentinline_help'] = 'Ако се разреши, изпратеният текст автоматично ще бъде копиран в полето за обратен коментар при поставянето на оценка, което ще направи по-лесно писането на забележки вътре в текста (може би с различен цвят) или редактирането на самия текст.';
$string['currentgrade'] = 'Оценка в дневника за оценки';
$string['deleteallsubmissions'] = 'Изтриване на всички изпълнения';
$string['description'] = 'Описание';
$string['downloadall'] = 'Изтегляне на всички задания като zip';
$string['draft'] = 'Чернова';
$string['due'] = 'Краен срок на заданието';
$string['duedate'] = 'Краен срок';
$string['duedateno'] = 'Няма краен срок';
$string['early'] = '{$a} по-рано';
$string['editmysubmission'] = 'Редактиране на моята предадена работа';
$string['editthesefiles'] = 'Редактиране на тези файлове';
$string['editthisfile'] = 'Обновяване на този файл';
$string['emailteachermail'] = '{$a->username} е подновил/а предадената си работа по  "{$a->assignment}" на  {$a->timeupdated}

Работата се намира тук:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->username} е подновил/а предадената си работа по  "<i>{$a->assignment}" на  {$a->timeupdated}</i>
<br /><br />
Работата се намира <a href="{$a->url}">тук на сайта</a>.';
$string['emailteachers'] = 'Уведомяване на преподавателите с имейл';
$string['emailteachers_help'] = 'Ако е зададено, преподавателите получават имейл уведомления, когато някой студент добави или обнови предаваната си работа.

Само преподавателите с право да оценяват получават уведомления. Например, ако участниците в курса са разделени на групи и преподавателите са разпределени да оценяват различни групи, те не получават съобщения за работите на участници, за които не са определени да оценят.';
$string['emptysubmission'] = 'Все още нищо не сте предали';
$string['enablenotification'] = 'Изпращане на уведомление';
$string['enablenotification_help'] = 'Ако е сложена отметка, студентите ще получават съобщения, когато работите им бъдат оценявани.';
$string['errornosubmissions'] = 'Няма предадени работи за изтегляне';
$string['existingfiledeleted'] = 'Съществуващият файл беше изтрит: {$a}';
$string['feedback'] = 'Съобщение';
$string['feedbackfromteacher'] = 'Бележка от {$a}';
$string['graded'] = 'Оценено';
$string['guestnoupload'] = 'Съжаляваме, на гостите не е позволена да качват';
$string['helpupload'] = '<p>Този тип задание позволява на всеки участник да качи един или повече файлове в произволен формат. Това могат да бъдат документи от Уърд, изображения, зип-компресирани сайтове, или нещо друго, което се изисква от тях да качат.</p>
<p>This type also allows you to upload multiple response files. Response files can be also uploaded before submission which can be used to give each participant different file to work with.</p>
<p>Участникът в курс може също да напише бележка, която описва качените файлове, напредъка му по заданието, или съдържа друга текстова информация.</p> <p>Предаването на работата по този тип задание трябва ръчно да бъде завършено от участника. Преподавателите виждат текущото положение във всеки момент, като  незавършените работи са отбелязани като чернови. Всяка неоценена работа може да бъде върната от преподавател до състояние на чернова.</p>';
$string['helpuploadsingle'] = '<p>Този тип задание позволява на всеки участник да качи един файл от  произволен формат. Това може да бъде документ от Уърд, изображение, зип-компресиран сайт, или нещо друго, което се изисква от тях да качат.</p>';
$string['hideintro'] = 'Скриване на описанието преди времето на заданието.';
$string['hideintro_help'] = 'Ако е разрешено, описанието на заданието ще бъде скрито преди датата и часа, зададени в "Достъпно от". Показва се само името на заданието.';
$string['maximumgrade'] = 'Максимална оценка';
$string['maximumsize'] = 'Максимален размер';
$string['messageprovider:assignment_updates'] = 'Уведомления за задания';
$string['modulename'] = 'Задание';
$string['modulename_help'] = 'Заданията позволяват на учителя да зададе задача (онлайн или офлайн), която след това може да бъде оценявана';
$string['modulenameplural'] = 'Задания';
$string['newsubmissions'] = 'Предадени задания';
$string['noassignments'] = 'Все още няма задания';
$string['noattempts'] = 'Няма опити за изпълнение на това задание';
$string['nofiles'] = 'Не са предадени файлове';
$string['nofilesyet'] = 'Още не са качени файлове';
$string['nomoresubmissions'] = 'На са разрешени повече предавания';
$string['norequiregrading'] = 'Няма задания изискващи оценяване';
$string['notes'] = 'Бележки';
$string['notesempty'] = 'Няма налични';
$string['notesupdateerror'] = 'Грешка при обновяването на бележките';
$string['optionalsettings'] = 'Незадължителни настройки';
$string['pagesize'] = 'Работи, показвани на страница';
$string['pluginadministration'] = 'Администриране на задание';
$string['pluginname'] = 'Задание (2.2)';
$string['popupinnewwindow'] = 'Отвори в изкачащ прозорец';
$string['preventlate'] = 'Отказване на закъснели задания';
$string['quickgrade'] = 'Разреши бързото оценяване';
$string['quickgrade_help'] = 'Ако е включено, на една страница могат да се пишат оценки на много задания. След като се напишат оценките и коментарите, се щраква бутона "Запис на въведеното от мен", за да бъдат записани всички промени за тази страница.';
$string['requiregrading'] = 'Изисква оценяване';
$string['responsefiles'] = 'Файл отговор';
$string['reviewed'] = 'Прегледано';
$string['saveallfeedback'] = 'Запис на въведеното от мен';
$string['sendformarking'] = 'Изпращане за оценка';
$string['submission'] = 'Предадена работа';
$string['submissiondraft'] = 'Чернова по заданието';
$string['submissions'] = 'Предадени работи';
$string['submissionsnotgraded'] = '{$a} работи не са оценени';
$string['submitformarking'] = 'Окончателно предаване за оценяване';
$string['submitted'] = 'Изпълнено в';
$string['submittedfiles'] = 'Качени файлове';
$string['subplugintype_assignment'] = 'Тип задание';
$string['subplugintype_assignment_plural'] = 'Типове задания';
$string['trackdrafts'] = 'Показване на бутон "Изпращане за оценка"';
$string['trackdrafts_help'] = 'Бутонът "Изпращане за оценка" позволява на студентите да покажат на преподавателя, че са завършили заданието. Преподавателят може да избере заданието да се върне в състояние на чернова (ако се нуждае от преработване, например).';
$string['typeonline'] = 'Онлайн текст';
$string['typeupload'] = 'Разширено качване на файлове';
$string['typeuploadsingle'] = 'Качване на единичен файл';
$string['uploadafile'] = 'Качване на файл';
$string['uploadedfiles'] = 'качени файлове';
$string['uploadfiles'] = 'Качване на файлове';
$string['uploadnofilefound'] = 'Не бяха намерени файлове. Сигурни ли сте, че избрахте файл за качване?';
$string['viewmysubmission'] = 'Моето изпълнение';
$string['viewsubmissions'] = 'Разглеждане на {$a} предадени задания';
