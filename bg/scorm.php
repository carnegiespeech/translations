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
 * Strings for component 'scorm', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areapackage'] = 'Файл на пакета';
$string['attempt'] = 'Опит';
$string['attempt1'] = '1 опит';
$string['attempts'] = 'Опити';
$string['attemptsx'] = '{$a} опита';
$string['averageattempt'] = 'Средна оценка';
$string['browse'] = 'Преглед';
$string['browsemode'] = 'Режим на преглеждане';
$string['completed'] = 'Приключен';
$string['contents'] = 'Съдържание';
$string['currentwindow'] = 'В същия прозорец';
$string['deleteallattempts'] = 'Изтриване на всички опити със SCORM пакета';
$string['deleteattemptcheck'] = 'Абсолютно сигурни ли сте, че искате да изтриете напълно тези опити?';
$string['deleteuserattemptcheck'] = 'Абсолютно сигурни ли сте, че искате напълно да изтриете всички Ваши опити?';
$string['directories'] = 'Показване на връзки към директориите';
$string['disabled'] = 'Забранено';
$string['display'] = 'Показване на пакета';
$string['displayattemptstatus'] = 'Показване състоянието на опита';
$string['displayattemptstatus_help'] = 'Ако е "Да", резултатите и оценките от опитите се показват върху страницата на SCORM пакета.';
$string['displaycoursestructure'] = 'Показване структурата на пакета на входната страница';
$string['displaycoursestructure_help'] = 'Ако е "Да", съдържанието на курса се показва на страницата на SCORM пакета.';
$string['displaysettings'] = 'Настройки на показването';
$string['duedate'] = 'Краен срок';
$string['enter'] = 'Влизане';
$string['entercourse'] = 'Влизане в курса';
$string['everyday'] = 'Всеки ден';
$string['everytime'] = 'При всяко използване';
$string['exit'] = 'Излизане от курса';
$string['exitactivity'] = 'Излизане от дейността';
$string['finishscormlinkname'] = 'щракнете тук за да се върнете на страницата на курса';
$string['firstaccess'] = 'Първи достъп';
$string['firstattempt'] = 'Първи опит';
$string['forcecompleted'] = 'Принудително завършване';
$string['forcecompleted_help'] = 'Ако е "Да", състоянието на текущия опит автоматично се променя на "Завършен". Тази настройка е приложима само за SCORM 1.2 пакети. Полезна е ако SCORM пакета не обработва правилния опит при обзор или в режим на преглеждане, или изобщо неправилно открива състоянието на завършеност.';
$string['gradeaverage'] = 'Средна оценка';
$string['gradeforattempt'] = 'Оценка за опит';
$string['gradehighest'] = 'Най-висока оценка';
$string['grademethod'] = 'Метод за оценяване';
$string['gradereported'] = 'Отчетена оценка';
$string['gradesettings'] = 'Настройки за оценяване';
$string['height'] = 'Височина';
$string['hidden'] = 'Скрито';
$string['hidebrowse'] = 'Забраняване режима за преглеждане';
$string['hidebrowse_help'] = 'Режимът на преглеждане позволява на студента да прегледа дейността преди да се опита да я изпълни. Ако режимът за преглеждане е забранен бутонът за преглеждане е скрит.';
$string['hideexit'] = 'Скриване на хипервръзката за излизане';
$string['hidenav'] = 'Скриване на бутоните за навигация';
$string['hidetoc'] = 'Показване структурата на курса в плейър.';
$string['hidetoc_help'] = 'Тези настройки определят как да се показва съдържанието на пакета в SCORM плейъра.';
$string['highestattempt'] = 'Най-висока оценка';
$string['info'] = 'Информация';
$string['last'] = 'Последен достъп';
$string['lastaccess'] = 'Последен достъп';
$string['lastattempt'] = 'Последен завършен опит';
$string['location'] = 'Показване на лентата за адрес';
$string['maximumattempts'] = 'Брой опити';
$string['maximumattempts_help'] = 'Тази настройка позволява да се ограничи броя на опитите за отговаряне. Прилага се само при SCORM 2.1 и AICC пакети.';
$string['menubar'] = 'Показване на лента с меню';
$string['mode'] = 'Режим';
$string['modulename'] = 'SCORM пакет';
$string['modulename_help'] = 'SCORM пакетът е колекция от файлове, която е съставена съгласно съответния стандарт. Модулът за дейност SCORM пакет позволява в курса да се качи и добави zip файл със SCORM или AICC пакет .

Съдържанието на пакета обикновено се показва на няколко страници, свързани с хипервръзки помежду си. Има различни настройки за показване на съдържанието в изскачащ прозорец, със съдържание, бутони за навигация и др. Пакетът основно съдържа въпроси с оценки, които се записват в дневника за оценки.

SCORM пакет може да се използва за:

* Представяне на мултимедийно съдържание и анимация.
* Като инструмент за оценяване';
$string['navigation'] = 'Навигация';
$string['newattempt'] = 'Започване нов опит';
$string['next'] = 'Продължаване';
$string['noactivity'] = 'Няма нищо за отчитане';
$string['noattemptsallowed'] = 'Брой на разрешените последователни опити';
$string['noattemptsmade'] = 'Брой на опитите, които Вие сте направили';
$string['nolimit'] = 'Неограничен';
$string['normal'] = 'Нормален';
$string['options'] = 'Настройки (Забранявани от някои браузъри)';
$string['othersettings'] = 'Допълнителни настройки';
$string['package'] = 'Файл на пакета';
$string['packagedir'] = 'Грешка на файловата система: Не може да се създаде директория за пакета';
$string['packagefile'] = 'Не е посочен файл на пакета';
$string['package_help'] = 'Файлът на пакета е zip (или pif) файл, съдържащ дефиниция на SCORM/AICC курс.';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Тази настройка позволява да се посочи URL на SCORM пакета вместо да се избира той чрез диалога за избиране на файл.';
$string['pagesize'] = 'Размер на страницата';
$string['pluginname'] = 'SCORM пакет';
$string['popup'] = 'В нов прозорец';
$string['popupmenu'] = 'В падащо меню';
$string['preferencespage'] = 'Предпочитания само за тази страница';
$string['prev'] = 'Предишен';
$string['report'] = 'Отчет';
$string['reports'] = 'Отчети';
$string['resizable'] = 'Позволено променяне на размера на прозореца';
$string['results'] = 'Резултати';
$string['review'] = 'Преглед';
$string['reviewmode'] = 'Режим на преглеждане';
$string['scormclose'] = 'До';
$string['scorm:deleteownresponses'] = 'Изтриване на собствените опити';
$string['scorm:deleteresponses'] = 'Изтриване на опитите със SCORM пакета';
$string['scormopen'] = 'От';
$string['scormresponsedeleted'] = 'Изтриване опитите на потребителя';
$string['scorm:viewreport'] = 'Разглеждане на отчети';
$string['scrollbars'] = 'Позволяване показваното в прозореца да се превърта';
$string['selectall'] = 'Маркиране на всички';
$string['selectnone'] = 'Размаркиране на всички';
$string['sided'] = 'Отстрани';
$string['skipview'] = 'Пропускане на страницата със съдържанието';
$string['skipview_help'] = 'Тази настройка определя дали страницата, показваща съдържанието на курса, може да се прескача (да не се показва). Ако пакетът съдържа само един обект за изучаване, страницата със съдържанието може винаги да се пропуска.';
$string['started'] = 'Започнат на';
$string['status'] = 'Статус';
$string['subplugintype_scormreport'] = 'Отчет';
$string['subplugintype_scormreport_plural'] = 'Отчети';
$string['time'] = 'Време';
$string['timerestrict'] = 'Ограничаване на отговарянето през периода';
$string['toolbar'] = 'Показване на лента с инструменти';
$string['totaltime'] = 'Време';
$string['typelocal'] = 'Качени пакети';
$string['updatefreq'] = 'Честота на автоматичното обновяване';
$string['updatefreqdesc'] = 'Тази настройка определя честотата по подразбиране за автоматично обновяване на дайността';
$string['updatefreq_help'] = 'Това позволява пакетът автоматично да се изтегля и обновява';
$string['whatgrade'] = 'Оценяване на опитите';
$string['whatgrade_help'] = 'Ако са позволени повече опити, настройката определя дали най-високата, средната, първата или последната оценка от опитите да се запише в дневника с оценки.

Обработка на многократни опити

* За започване на нов опит се показва отметка над бутона за въвеждане в страницата със съдържанието, така че осигурете тази страница да се показва, ако разрешите многократни опити.
* Някои SCORM пакети имат интелигентно поведение за многократни опити, но други нямат. Това означава, че ако логиката на пакета не предпазва от презапис върху предишни опити, тези опити може да бъдат презаписани дори и ако са отбелязани като завършени или затворени.
* Настройките "Принудително затваряне", "Принудителен нов опит" и "Затваряне след окончателен опит" също осигуряват контрол върху многократните опити.';
$string['width'] = 'Ширина';
