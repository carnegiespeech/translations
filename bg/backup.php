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
 * Strings for component 'backup', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Изберете дали да се правят или не автоматични архивирания. Ако се избере ръчно, автоматичните архивирания ще са възможни само чрез CLI скриптове за автоматични архивирания. Те може да се изпълняват ръчно от команден терминал или чрез cron.';
$string['autoactivedisabled'] = 'Изключен';
$string['autoactiveenabled'] = 'Включен';
$string['autoactivemanual'] = 'Ръчно';
$string['automatedbackupschedule'] = 'График';
$string['automatedbackupschedulehelp'] = 'Избиране на ден от седмицата за автоматично архивиране';
$string['automatedbackupsinactive'] = 'Автоматично архивиране не е разрешено от администратора на сайта';
$string['automatedbackupstatus'] = 'Състояние на автоматичното архивиране';
$string['automatedsettings'] = 'Настройки за автоматично архивиране';
$string['automatedsetup'] = 'Автоматично настройване на архивирането';
$string['automatedstorage'] = 'Съхранение на автоматичните архиви';
$string['automatedstoragehelp'] = 'Изберете място, където искате да се съхраняват архивите, когато бъдат създадени автоматично.';
$string['backupactivity'] = 'Архивиране на дейност: {$a}';
$string['backupcourse'] = 'Архивиране на курс: {$a}';
$string['backupcoursedetails'] = 'Детайли на курса';
$string['backupcoursesection'] = 'Секция: {$a}';
$string['backupcoursesections'] = 'Секции на курса';
$string['backupdate'] = 'Дата на архивиране';
$string['backupdetails'] = 'Подробности за архива';
$string['backupdetailsnonstandardinfo'] = 'Избрания файл не е стандартен архивен Moodle файл. Програмата за възстановяване ще се опита да го конвертира в стандартния формат и тогава ще го възстанови.';
$string['backupformat'] = 'Формат';
$string['backupformatunknown'] = 'Неизвестен формат';
$string['backupmode10'] = 'Общо';
$string['backupmode20'] = 'Импортиране';
$string['backupmode30'] = 'Център';
$string['backupmode40'] = 'Същия сайт';
$string['backupmode50'] = 'Автоматично';
$string['backupmode60'] = 'Конвертиран';
$string['backupsection'] = 'Архивиране на курсова секция: {$a}';
$string['backupsettings'] = 'Настройки на архивирането';
$string['backupstage16action'] = 'Продължаване';
$string['backupstage1action'] = 'Напред';
$string['backupstage2action'] = 'Напред';
$string['backupstage4action'] = 'Извършване на архивирането';
$string['backupstage8action'] = 'Продължаване';
$string['backuptype'] = 'Тип';
$string['backuptypeactivity'] = 'Дейност';
$string['backuptypecourse'] = 'Курс';
$string['backuptypesection'] = 'Секция';
$string['backupversion'] = 'Версия на архива';
$string['cannotfindassignablerole'] = 'Ролята {$a} в архивния файл не може да бъде съотнесена до никоя от ролите, които Вие имате право да задавате.';
$string['choosefilefromactivitybackup'] = 'Зона за архиви на дейности';
$string['choosefilefromactivitybackup_help'] = 'Тук ще се съхраняват архивните файлове, когато се архивират дейности с използване на настройки по подразбиране';
$string['choosefilefromautomatedbackup'] = 'Автоматични архиви';
$string['choosefilefromautomatedbackup_help'] = 'Съдържа автоматично генерирани архиви.';
$string['choosefilefromcoursebackup'] = 'Зона с архиви на курса';
$string['choosefilefromcoursebackup_help'] = 'Когато архивирате курсове с настройки на архивирането по подразбиране, архивните файлове ще се съхраняват в тази зона.';
$string['choosefilefromuserbackup'] = 'Лична зона за архиви на потребителя';
$string['choosefilefromuserbackup_help'] = 'Когато се архивират курсове с зададена опция "Анонимизиране на потребителската информация", архивите ще бъдат съхранени тук';
$string['configgeneralactivities'] = 'Задава подразбиращата се стойност за настройката, която определя дали да се включват дейностите в архивите.';
$string['configgeneralanonymize'] = 'Ако е включено, цялата лична информация на потребителите по подразбиране ще се анонимизира.';
$string['configgeneralblocks'] = 'Задава подразбиращата се стойност на настройката, която определя дали блоковете да бъдат включвани в архивите.';
$string['configgeneralcomments'] = 'Задава подразбиращата се стойност на настройката, която определя дали коментарите да бъдат включвани в архивите.';
$string['configgeneralfilters'] = 'Задава подразбиращата се стойност на настройката, която определя дали филтрите да бъдат включвани в архивите.';
$string['configgeneralhistories'] = 'Задава подразбиращата се стойност за настройката дали потребителската история да бъде включена в архивите.';
$string['configgenerallogs'] = 'Ако тази опция е разрешена, журналите ще бъдат включвани в архивите по подразбиране.';
$string['configgeneralroleassignments'] = 'Ако е включено, задаването на роли също ще бъде архивирано по подразбиране.';
$string['configgeneralusers'] = 'Задава подразбиращата се стойност на настройката, която определя дали потребителите да бъдат включени в архивите.';
$string['configgeneraluserscompletion'] = 'Ако е включено информацията за завършването на потребителите ще бъде включена в архивите по подразбиране.';
$string['configloglifetime'] = 'Това определя колко дълго време искате да пазите информация за архивиранията в журнали. Журнали, които са по стари от това време, автоматично се изтриват. Препоръчва се тази стойност да е малка, защото информацията за архивиранията може да бъде огромна.';
$string['confirmcancel'] = 'Отказване на архивирането';
$string['confirmcancelno'] = 'Не';
$string['confirmcancelquestion'] = 'Сигурни ли сте, че искате да се откажете? Информацията, която въведохте ще се изгуби.';
$string['confirmcancelyes'] = 'Отказване';
$string['confirmnewcoursecontinue'] = 'Обръщане на внимание за нов курс';
$string['confirmnewcoursecontinuequestion'] = 'Ще бъде създаден временен (скрит) курс от програмата за възстановяване на курсове. За да прекратите възстановяването щракнете "Отказване". Не затваряйте браузъра по време на възстановяването.';
$string['coursecategory'] = 'Категория курсове, в която ще бъде възстановен курса';
$string['courseid'] = 'Оригинален идентификатор';
$string['coursesettings'] = 'Настройки на курса';
$string['coursetitle'] = 'Заглавие';
$string['currentstage1'] = 'Начални настройки';
$string['currentstage16'] = 'Изпълнено';
$string['currentstage2'] = 'Настройки на схема';
$string['currentstage4'] = 'Преглед и потвърждаване';
$string['currentstage8'] = 'Извършване на архивирането';
$string['dependenciesenforced'] = 'Вашите настройки са променени поради неудовлетворени зависимости';
$string['enterasearch'] = 'Въведете текст за търсене';
$string['error_block_for_module_not_found'] = 'Екземпляр сирак от блок (id: {$a->bid}) за курсов модул (id: {$a->mid}). Този блок няма да бъде архивиран.';
$string['error_course_module_not_found'] = 'Намерен е курсов модул сирак (id: {$a}). Този модул няма да бъде архивиран.';
$string['errorminbackup20version'] = 'Този архивен файл е създаден с версия на Moodle, която е още в стадий на разработка ({$a->backup}). Минималната изисквана е {$a->min}. Не може да се възстанови.';
$string['executionsuccess'] = 'Архивният файл беше създаден.';
$string['filename'] = 'Име на файл';
$string['generalactivities'] = 'Включване на дейностите';
$string['generalblocks'] = 'Включване на блоковете';
$string['generalcomments'] = 'Включване на коментарите';
$string['generalfilters'] = 'Включване на филтрите';
$string['generalhistories'] = 'Включване на историите';
$string['generallogs'] = 'Включване на журнали';
$string['generalroleassignments'] = 'Включване на зададените роли';
$string['generalusers'] = 'Включи потребители';
$string['generaluserscompletion'] = 'Включване данните за завършването на потребителите';
$string['importbackupstage1action'] = 'Напред';
$string['importbackupstage2action'] = 'Напред';
$string['importbackupstage4action'] = 'Извършване на импортирането';
$string['importcurrentstage0'] = 'Избиране на курс';
$string['importcurrentstage1'] = 'Начални настройки';
$string['importcurrentstage16'] = 'Изпълнено';
$string['importcurrentstage2'] = 'Настройки на схема';
$string['importcurrentstage4'] = 'Преглед и потвърждаване';
$string['importcurrentstage8'] = 'Извършване на импортирането';
$string['importfile'] = 'Импортиране на архивен файл';
$string['importsuccess'] = 'Импортирането завърши. Щракнете бутон "Продължаване" за да се върнете в курса.';
$string['includeactivities'] = 'Включва:';
$string['includeditems'] = 'Включени елементи:';
$string['includesection'] = 'Секция {$a}';
$string['includeuserinfo'] = 'Данни на потребителите';
$string['managefiles'] = 'Управление на архивните файлове';
$string['moodleversion'] = 'Версия на Moodle';
$string['moreresults'] = 'Има твърде много резултати, въведете по-специфичен критерий за търсене.';
$string['nomatchingcourses'] = 'Няма курсове, които да бъдат показани';
$string['originalwwwroot'] = 'URL на архив';
$string['previousstage'] = 'Назад';
$string['restoreexecutionsuccess'] = 'Курсът беше възстановен успешно. Щракването върху бутона "Продължаване" ще отвори страницата на курса.';
$string['restorerolemappings'] = 'Възстановяване картирането на роли';
$string['restorerootsettings'] = 'Настройки на възстановяването';
$string['restorestage1'] = 'Потвърждаване';
$string['restorestage16'] = 'Преглед';
$string['restorestage16action'] = 'Извършване на възстановяването';
$string['restorestage1action'] = 'Напред';
$string['restorestage2'] = 'Назначение';
$string['restorestage2action'] = 'Напред';
$string['restorestage32'] = 'Напредване';
$string['restorestage32action'] = 'Продължаване';
$string['restorestage4'] = 'Настройки';
$string['restorestage4action'] = 'Напред';
$string['restorestage64'] = 'Изпълнено';
$string['restorestage64action'] = 'Продължаване';
$string['restorestage8'] = 'Схема';
$string['restorestage8action'] = 'Напред';
$string['restoretocourse'] = 'Възстановяване в курс:';
$string['restoretocurrentcourse'] = 'Възстановяване в този курс';
$string['restoretocurrentcourseadding'] = 'Вмъкване на архивния курс в този курс';
$string['restoretocurrentcoursedeleting'] = 'Изтриване на този курс и възстановяване с архивния';
$string['restoretoexistingcourse'] = 'Възстановяване в съществуващ курс';
$string['restoretoexistingcourseadding'] = 'Вмъкване на архивния курс в избрания курс';
$string['restoretoexistingcoursedeleting'] = 'Изтриване на избрания курс и възстановяване с архивния';
$string['restoretonewcourse'] = 'Възстановяване като нов курс';
$string['restoringcourse'] = 'Възстановяване в процес';
$string['rootsettingactivities'] = 'Включване на дейностите';
$string['rootsettinganonymize'] = 'Анонимизиране на потребителската информация';
$string['rootsettingblocks'] = 'Включване на блоковете';
$string['rootsettingcalendarevents'] = 'Включване на събитията от календара';
$string['rootsettingcomments'] = 'Включване на коментарите';
$string['rootsettingfilters'] = 'Включване на филтрите';
$string['rootsettinggradehistories'] = 'Включване историята на оценките';
$string['rootsettinglogs'] = 'Включване на журналите на отделните курсове';
$string['rootsettingroleassignments'] = 'Включване на зададените роли';
$string['rootsettings'] = 'Настройки на архивирането';
$string['rootsettingusers'] = 'Включване на записаните потребители';
$string['rootsettinguserscompletion'] = 'Включване данните за завършването на потребителите';
$string['sectionactivities'] = 'Дейности';
$string['sectioninc'] = 'Включено в архива (без информация за потребителя)';
$string['sectionincanduser'] = 'Включено в архива заедно с информацията за потребителя';
$string['selectacategory'] = 'Избор на категория';
$string['selectacourse'] = 'Избор на курс';
$string['setting_course_fullname'] = 'Име на курс';
$string['setting_course_shortname'] = 'Кратко име на курса';
$string['setting_course_startdate'] = 'Начална дата на курса';
$string['setting_keep_groups_and_groupings'] = 'Запазване на текущите групи и групиране';
$string['setting_keep_roles_and_enrolments'] = 'Запазване на текущите роли и записвания';
$string['totalcategorysearchresults'] = 'Общо категории: {$a}';
$string['totalcoursesearchresults'] = 'Общо курсове: {$a}';
