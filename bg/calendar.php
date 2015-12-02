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
 * Strings for component 'calendar', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   calendar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedoptions'] = 'Разширени настройки';
$string['allday'] = 'Цял ден';
$string['calendar'] = 'Календар';
$string['calendarheading'] = '{$a} календар';
$string['calendarpreferences'] = 'Предпочитания за календара';
$string['calendarurl'] = 'URL на календара: {$a}';
$string['clickhide'] = 'щракнете за скриване';
$string['clickshow'] = 'щракнете за показване';
$string['commontasks'] = 'Възможности';
$string['confirmeventdelete'] = 'Сигурни ли сте, че искате да изтриете това събитие?';
$string['course'] = 'Курсови';
$string['courseevent'] = 'Курсово събитие';
$string['courseevents'] = 'Курсови събития';
$string['courses'] = 'Курсове';
$string['dayview'] = 'Дневен изглед';
$string['daywithnoevents'] = 'Няма събития през този ден.';
$string['default'] = 'По подразбиране';
$string['deleteevent'] = 'Изтриване на събитие';
$string['deleteevents'] = 'Изтриване на събития';
$string['detailedmonthview'] = 'Подробен месечен изглед';
$string['durationminutes'] = 'Продължителност в минути';
$string['durationnone'] = 'Без продължителност';
$string['durationuntil'] = 'До';
$string['editevent'] = 'Редактиране на събитие';
$string['errorbeforecoursestart'] = 'Не може да назначите събитие преди началната дата на курса.';
$string['errorinvaliddate'] = 'Невалидна дата';
$string['errorinvalidminutes'] = 'Задайте продължителност в минути - число от 1 до 999.';
$string['errorinvalidrepeats'] = 'Задайте брой на събитията - число от 1 до 99.';
$string['errornodescription'] = 'Изисква се описание';
$string['errornoeventname'] = 'Изисква се име';
$string['eventdate'] = 'Дата';
$string['eventdescription'] = 'Описание';
$string['eventduration'] = 'Продължителност';
$string['eventendtime'] = 'Крайно време';
$string['eventinstanttime'] = 'Време';
$string['eventkind'] = 'Тип на събитието';
$string['eventname'] = 'Име';
$string['eventnone'] = 'Няма събития';
$string['eventsall'] = 'Всички събития';
$string['eventsfor'] = '{$a} събития';
$string['eventskey'] = 'Включени/изключени събития';
$string['eventsrelatedtocourses'] = 'Събития, отнасящи се за курсове';
$string['eventstarttime'] = 'Начално време';
$string['eventtime'] = 'Време';
$string['explain_site_timeformat'] = 'Можете де изберете на целия сайт времето да се показва в 12 или 24 часов формат. Ако изберете "По подразбиране" форматът ще се определя автоматично по езика, който се използва на сайта. Тази настройка се променя и от предпочитанията на потребителя.';
$string['export'] = 'Експортиране';
$string['exportbutton'] = 'Експортиране';
$string['exportcalendar'] = 'Експортиране на календар';
$string['for'] = 'за';
$string['fri'] = 'Пет';
$string['friday'] = 'Петък';
$string['generateurlbutton'] = 'Показване на URL';
$string['global'] = 'Глоб.';
$string['globalevent'] = 'Глобално събитие';
$string['globalevents'] = 'Глобални събития';
$string['gotocalendar'] = 'Отиди на календар';
$string['group'] = 'Груп.';
$string['groupevent'] = 'Групово събитие';
$string['groupevents'] = 'Групови събития';
$string['hidden'] = 'скрити';
$string['invalidtimedurationminutes'] = 'Продължителността в минути, която въведохте е невалидно. Моля, въведете продължителността в минути да е по-голяма от 0 или изберете без продължителност.';
$string['iwanttoexport'] = 'Експортиране на';
$string['manyevents'] = '{$a} събития';
$string['mon'] = 'Пон';
$string['monday'] = 'Понеделник';
$string['monthlyview'] = 'Месечен изглед';
$string['monthnext'] = 'Следващ месец';
$string['monththis'] = 'Този месец';
$string['newevent'] = 'Ново събитие';
$string['noupcomingevents'] = 'Няма предстоящи събития';
$string['oneevent'] = '1 събитие';
$string['preferences'] = 'Предпочитания';
$string['pref_lookahead'] = 'Предстоящи събития след';
$string['pref_lookahead_help'] = 'Това определя до след колко дни (максимум) в бъдещето трябва да е началната дата на събитията за да се показват като предстоящи. Събитията с начална дата извън тези дни никога няма да се показват като предстоящи. Моля забележете, че <strong>няма гаранция</strong>, че всички събития стартиращи в тази времева рамка ще се покажат; ако има много събития (повече от "Максимален брой предстоящи събития") най-отдалечените във времето събития няма да се покажат.';
$string['pref_maxevents'] = 'Максимален брой предстоящи събития';
$string['pref_maxevents_help'] = 'Това задава максималния брой предстоящи събития, които могат да се показват. Ако изберете голям номер тук е възможно при показване, предстоящите събития да заемат много от пространството на Вашия екран.';
$string['pref_persistflt'] = 'Запомняне настройките на филтъра';
$string['pref_persistflt_help'] = 'Ако това е включено, Moodle ще запомни вашите последни настройки на филтъра на събитията и автоматично ще ги възстановява при всяко ваше влизане.';
$string['pref_startwday'] = 'Първи ден от седмицата';
$string['pref_startwday_help'] = 'Седмиците в календара ще се показват с начало в деня, който изберете тук.';
$string['pref_timeformat'] = 'Формат на показване на времето';
$string['pref_timeformat_help'] = 'Можете де изберете времето да се показва в 12 или 24 часов формат. Ако изберете "По подразбиране" форматът ще се определя автоматично по езика, който се използва на сайта. ';
$string['recentupcoming'] = 'Днес и следващите 60 дни';
$string['repeatedevents'] = 'Повтарящи се събития';
$string['repeateditall'] = 'Промените да се приложат също и за другите {$a} събития от тази серия';
$string['repeatevent'] = 'Повтаряне на това събитие';
$string['repeatnone'] = 'Без повтаряния';
$string['repeatweeksl'] = 'Седмично, за общ брой пъти';
$string['sat'] = 'Съб';
$string['saturday'] = 'Събота';
$string['shown'] = 'показани';
$string['sun'] = 'Нед';
$string['sunday'] = 'Неделя';
$string['thu'] = 'Чет';
$string['thursday'] = 'Четвъртък';
$string['timeformat_12'] = '12-часа (am/pm)';
$string['timeformat_24'] = '24-часа';
$string['today'] = 'Днес';
$string['tomorrow'] = 'Утре';
$string['tt_deleteevent'] = 'Изтриване на събитие';
$string['tt_editevent'] = 'Редактиране на събитие';
$string['tt_hidecourse'] = 'Курсовите събития са показани (щракнете за скриване)';
$string['tt_hideglobal'] = 'Глобалните събития са показани (щракнете за скриване)';
$string['tt_hidegroups'] = 'Груповите събития са показани (щракнете за скриване)';
$string['tt_hideuser'] = 'Потребителските събития са показани (щракнете за скриване)';
$string['tt_showcourse'] = 'Курсовите събития са скрити (щракнете за показване)';
$string['tt_showglobal'] = 'Глобалните събития са скрити (щракнете за показване)';
$string['tt_showgroups'] = 'Груповите събития са скрити (щракнете за показване)';
$string['tt_showuser'] = 'Потребителските събития са скрити (щракнете за показване)';
$string['tue'] = 'Вто';
$string['tuesday'] = 'Вторник';
$string['typecourse'] = 'Курсово събитие';
$string['typegroup'] = 'Групово събитие';
$string['typesite'] = 'Събитие на сайта';
$string['typeuser'] = 'Потребителско събитие';
$string['upcomingevents'] = 'Предстоящи събития';
$string['user'] = 'Потреб.';
$string['userevent'] = 'Потребителско събитие';
$string['userevents'] = 'Потребителски събития';
$string['wed'] = 'Сря';
$string['wednesday'] = 'Сряда';
$string['weeknext'] = 'Следваща седмица';
$string['weekthis'] = 'Тази седмица';
$string['yesterday'] = 'Вчера';
$string['youcandeleteallrepeats'] = 'Това събитие е част от серия повтарящи се събития. Можете да изтриете само това събитие, или всички {$a} събития от серията наведнъж.';
