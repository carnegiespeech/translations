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
 * Strings for component 'error', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   error
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alreadyloggedin'] = 'Вие вече сте влезли в сайта като {$a}, трябва да излезете преди да влезете отново като друг потребител.';
$string['cannotcreatecategory'] = 'Категорията не беше вмъкната';
$string['cannotcreatetempdir'] = 'Не може да създаде временна директория';
$string['cannotdeletecategorycourse'] = 'Неуспех при изтриването на курс "{$a}".';
$string['cannotdeletecategoryquestions'] = 'Не можа да изтрие въпроси от категория "{$a}"';
$string['cannotdeletecourse'] = 'Нямате разрешение за изтриване на този курс';
$string['cannotdeletefile'] = 'Не можа да изтрие този файл';
$string['cannotdeleterolewithid'] = 'Не можа да изтрие роля със ID {$a}';
$string['cannoteditpostorblog'] = 'Вие не можете да създавате или редактирате блогове.';
$string['cannotfindcomponent'] = 'Не можа да намери компонент';
$string['cannotfindcourse'] = 'Не можа да намери курс';
$string['cannotfindteacher'] = 'Не можа да намери учител';
$string['cannotfinduser'] = 'Не може да намери потребител с име "{$a}"';
$string['cannotmailconfirm'] = 'Грешка при изпращане на имейл за потвърждение промяна на парола';
$string['cannotmanualctrack'] = 'Дейността не позволява ръчно проследяване на напредването';
$string['cannotopencsv'] = 'Не мога да отворя CSV файла';
$string['cannotopenfile'] = 'Не можа да отвори файл ({$a})';
$string['cannotusepage2'] = 'Съжаляваме, не можете да използвате тази страница';
$string['cannotviewprofile'] = 'Не можете да видите профила на този потребител';
$string['cannotviewreport'] = 'Не можете да видите този отчет';
$string['countriesphpempty'] = 'Грешка. Файлът countries.php в езиковия пакет {$a} е празен или липсва';
$string['coursedoesnotbelongtocategory'] = 'Курсът не принадлежи към тази категория';
$string['courseidnotfound'] = 'Идентификаторът на курс не съществува';
$string['courserequestdisabled'] = 'Съжаляваме,но търсенето на  курсове е забранено от администратора.';
$string['csvcolumnduplicates'] = 'Открити дублирани колони';
$string['csvemptyfile'] = 'CSV файлът е празен';
$string['csvinvalidcolsnum'] = 'Невалиден CSV файл - всеки ред трябва да включва 49 до 70 полета';
$string['csvloaderror'] = 'Настъпи грешка при зареждането на CSV файла!';
$string['csvweirdcolumns'] = 'Невалиден формат на CSV файла - броят на колоните не е еднакъв~';
$string['dbconnectionfailed'] = '<p>Грешка: Връзката с базата данни пропадна</p> <p>Възможно е базата данни да е претоварена или да не работи правилно.</p> <p>Администраторът трябва също да провери дали в config.php са зададени правилни стойности за базата данни.</p>';
$string['dbupdatefailed'] = 'Неуспешно обновяване на база данни';
$string['duplicateroleshortname'] = 'Вече има роля с това кратко име!';
$string['fieldrequired'] = '{$a} е задължително поле';
$string['fileexists'] = 'Файлът съществува';
$string['filenotreadable'] = 'Файлът не е разрешен за четене';
$string['guestnocomment'] = 'Не е разрешено гостите да публикуват коментари!';
$string['guestnoeditprofile'] = 'Гостите не могат да редактират профила си';
$string['guestnoeditprofileother'] = 'Профилът на потребителя - гост не може да се редактира';
$string['idnumbertaken'] = 'Този идентификационен номер (ID Number) вече се използва от друг курс';
$string['invalidcategory'] = 'Некоректна категория';
$string['invalidcourseid'] = 'Правите опит да използвате невалиден номер (ID) на курс';
$string['invalidfunction'] = 'Некоректна функция';
$string['invalidkey'] = 'Некоректен ключ';
$string['invalidpagesize'] = 'Невалиден размер на страницата';
$string['invalidrecord'] = 'Не може да се намери запис в таблица {$a} на базата данни';
$string['invalidsesskey'] = 'Некоректен ключ за сесия (sesskey), формуляра не е приет!';
$string['invaliduser'] = 'Невалиден потребител';
$string['logfilenotavailable'] = 'Няма налични журнали';
$string['maxbytes'] = 'Този файл е по - голям от максималния размер';
$string['messagingdisable'] = 'Системата за съобщения е забранена на този сайт';
$string['missingparam'] = 'Изискван параметър ({$a}) липсва';
$string['moduledoesnotexist'] = 'Този модул не съществува';
$string['mustbeloggedin'] = 'Трябва да сте влезли в системата за да направите това';
$string['needcopy'] = 'Първо трябва да копирате нещо!';
$string['nocapabilitytousethisservice'] = 'Потребителят няма необходимите възможности за да използва тази услуга';
$string['nologinas'] = 'Нямате разрешение за вписване като този потребител';
$string['noparticipants'] = 'Няма намерени участници за този курс';
$string['nopermissions'] = 'За съжаление Вие нямате право да правите това  ({$a})';
$string['nopermissiontocomment'] = 'Не можете да добавяте коментари';
$string['nopermissiontomanagegroup'] = 'Нямате необходимите права за да управлявате групи';
$string['nopermissiontoupdatecalendar'] = 'За съжаление Вие нямате право да актуализирате календарно събитие';
$string['nostatstodisplay'] = 'За съжаление няма данни за показване';
$string['notavailable'] = 'Тава в момента не е достъпно';
$string['remotedownloaderror'] = 'Изтеглянето на компонента към вашия сървър пропадна, проверете настройките на proxy, препоръчително е PHP разширението cURL.<br /><br />Вие трябва ръчно да изтеглите файла <a href="{$a->url}">{$a->url}</a>, да го копирате в директория {$a->dest} на вашия сървър и да го разархивирате там.';
$string['requireloginerror'] = 'Курс или дейност не са достъпни.';
$string['secretalreadyused'] = 'Хипервръзката за потвърждаване искането за смяна на паролата вече е използвана, паролата не е сменена';
$string['sendmessage'] = 'Изпращане на съобщение';
$string['sessionerroruser'] = 'Вашата сесия е изтекла. Моля, влезте отново.';
$string['shortnametaken'] = 'Краткото име вече е използвано за друг курс';
$string['tagdisabled'] = 'Етикетите са забранени!';
$string['unknowncourse'] = 'Непознат курс, именован "{$a}"';
$string['unknowncourseidnumber'] = 'Непознат идентификатор на курс (course ID) "{$a}"';
$string['useradminodelete'] = 'Администраторските потребителски регистрации не могат да бъдат изтривани';
$string['usernotavailable'] = 'Подробната информация за този потребител не е достъпна за вас';
