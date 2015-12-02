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
 * Strings for component 'blog', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Добавяне на нова статия';
$string['addnewexternalblog'] = 'Регистриране на външен блог';
$string['assocdescription'] = 'Ако пишете за курс и/или модул за дейност, изберете ги от тук.';
$string['associated'] = 'Асоцииран {$a}';
$string['associatewithcourse'] = 'Блог за курс {$a->coursename}';
$string['associatewithmodule'] = 'Блог за {$a->modtype}: {$a->modname}';
$string['association'] = 'Асоциация';
$string['associations'] = 'Асоциации';
$string['associationunviewable'] = 'Тази статия няма да се вижда от другите докато някой курс не бъде асоцииран с нея или не бъде променено полето "Публикувано за".';
$string['autotags'] = 'добави тези етикети';
$string['autotags_help'] = 'Въведете един или повече локални етикети (отделени със запетая), които искате да се добавят автоматично към всяка статия в блога, която е копирана от външен блог във Вашия локален блог.';
$string['backupblogshelp'] = 'Ако тази опция бъде разрешена, блоговете ще бъдат включени в автоматичните резервни копия на сайта.';
$string['blockexternalstitle'] = 'Външни блогове';
$string['blocktitle'] = 'Заглавие на блок с етикети за блог';
$string['blog'] = 'Блог';
$string['blogaboutthis'] = 'Блог относно този тип {$a->type}';
$string['blogaboutthiscourse'] = 'Добавяне на запис за този курс';
$string['blogaboutthismodule'] = 'Въведете публикация относно {$a}';
$string['blogadministration'] = 'Администриране на блог';
$string['blogdeleteconfirm'] = 'Изтриване на този блог?';
$string['blogdisable'] = 'Блогването е забранено!';
$string['blogentries'] = 'Публикации в блога';
$string['blogentriesabout'] = 'Публикации в блога за {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Публикации в блога за {$a->course} от {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Статии в блог относно {$a->mod} от {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Статии в блог относно {$a->course} от {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Статии в блог относно {$a->mod} от {$a->user}';
$string['blogentrybyuser'] = 'Статия в блог от: {$a}';
$string['blogpreferences'] = 'Предпочитания за блога';
$string['blogs'] = 'Блогове';
$string['blogscourse'] = 'Курсови блогове';
$string['blogssite'] = 'Блогове на сайта';
$string['blogtags'] = 'Етикети за блогове';
$string['cannotviewcourseblog'] = 'Нямате необходимите права да преглеждате блоговете в този курс';
$string['cannotviewcourseorgroupblog'] = 'Нямате необходимите права да преглеждате блоговете в този курс/група';
$string['cannotviewsiteblog'] = 'Нямате необходимите права за да преглеждате всички блогове на сайта';
$string['cannotviewuserblog'] = 'Нямате необходимите права да четете потребителските блогове';
$string['configexternalblogcrontime'] = 'Колко често Moodle проверява външните блогове за нови статии.';
$string['configmaxexternalblogsperuser'] = 'Броят на външни блогове, които един потребител може да свързва към техния Moodle блог.';
$string['configuseblogassociations'] = 'Разрешаване асоциирането на статии в блог с курсове и модули на курсове.';
$string['configuseexternalblogs'] = 'Позволяване на потребителите да посочват емисии от външни блогове. Moodle периодично проверява за тези емисии и копира новите статии в локалния блок на потребителя.';
$string['courseblog'] = 'Блог на курс: {$a}';
$string['courseblogdisable'] = 'Блоговете в курса не са разрешени';
$string['courseblogs'] = 'Потребител може а вижда само блогове на потребителите, с които е записан в един курс';
$string['deleteblogassociations'] = 'Изтриване на връзките с блогове';
$string['deleteblogassociations_help'] = 'Ако е избрано, записите в блоговете няма да бъдат свързани повече с този курс или с дейностите и ресурсите в него. Самите записи в блоговете няма да бъдат изтрити.';
$string['deleteexternalblog'] = 'Премахване на регистрацията на този външен блог';
$string['deleteotagswarn'] = 'Сигурни ли сте че, искате да изтриете тези етикети от всички мнения в блога и да се премахнат от системата?';
$string['description'] = 'Описание';
$string['description_help'] = 'Въведете едно или две изречения, които обобщават съдържанието на Вашия външен блог. (Ако не въведете описание, ще се използва описанието, написано във Вашия външен блог).';
$string['disableblogs'] = 'Цялостно забраняване на системата за блогове';
$string['donothaveblog'] = 'За съжаление Вие нямате собствен блог.';
$string['editentry'] = 'Редактиране на публикация в блог';
$string['editexternalblog'] = 'Редактиране на външен блог';
$string['emptybody'] = 'Текстът на статията не може да е празен';
$string['emptyrssfeed'] = 'URL-ът, който сте въвели не сочи към валидна RSS емисия';
$string['emptytitle'] = 'Заглавието на статията в блога не може да е празно';
$string['emptyurl'] = 'Трябва да зададете валиден URL на RSS емисия';
$string['entrybody'] = 'Текст на статията';
$string['entrybodyonlydesc'] = 'Описание на статията';
$string['entryerrornotyours'] = 'Тази статия не е ваша';
$string['entrysaved'] = 'Вашата статия беше записана';
$string['entrytitle'] = 'Заглавие на статията';
$string['entryupdated'] = 'Статията е актуализирана';
$string['externalblogcrontime'] = 'Cron график за външен блог';
$string['externalblogdeleteconfirm'] = 'За се премахне ли регистрацията на този външен блог?';
$string['externalblogdeleted'] = 'Регистрацията на външен блог е премахната';
$string['externalblogs'] = 'Външни блогове';
$string['feedisinvalid'] = 'Тази емисия е невалидна';
$string['feedisvalid'] = 'Тази емисия е валидна';
$string['filterblogsby'] = 'Филтриране на статиите по...';
$string['filtertags'] = 'Филтриране на етикети';
$string['filtertags_help'] = 'Можете да използвате тази функционалност за да филтрирате статиите, които искате да използвате. Ако посочите тук етикети (отделени със запетая), тогава само статии с тези етикети ще се копират от външния блог.';
$string['groupblog'] = 'Блог на група: {$a}';
$string['groupblogdisable'] = 'Групов блог не е разрешен';
$string['groupblogentries'] = 'Статии в блог, асоциирани с курс  {$a->coursename}, група {$a->groupname}';
$string['groupblogs'] = 'Потребител може а вижда само блогове на потребителите, с които е в една група';
$string['incorrectblogfilter'] = 'Зададен е некоректен тип на филтър на блог';
$string['intro'] = 'Тази RSS емисия беше генерирана автоматично от един или повече блогове.';
$string['invalidgroupid'] = 'Невалиден номер (ID) на група';
$string['invalidurl'] = 'Този URL е недостъпен';
$string['linktooriginalentry'] = 'Хипервръзка към оригиналната статия';
$string['maxexternalblogsperuser'] = 'Максимален брой външни блогове за потребител';
$string['name'] = 'Име';
$string['name_help'] = 'Въведете описателно име за Вашия външен блог. (Ако не баде зададено име, ще се използва заглавието на външния блог).';
$string['noentriesyet'] = 'Тук няма видими статии';
$string['noguestpost'] = 'Гостите не могат да постват във блоговете!';
$string['nopermissionstodeleteentry'] = 'Вие нямате необходимото право за да изтриете тази статия в блог';
$string['norighttodeletetag'] = 'Вие нямате право да изтриете този етикет - {$a}';
$string['nosuchentry'] = 'Няма такава статия в блог';
$string['notallowedtoedit'] = 'Вие нямате право да редактирате тази статия';
$string['numberofentries'] = 'Статии: {$a}';
$string['numberoftags'] = 'Брой етикети, които да се показват';
$string['page-blog-edit'] = 'Страници за редактиране на болг';
$string['page-blog-index'] = 'Страници за изреждане на блог';
$string['page-blog-x'] = 'Всички страници от блог';
$string['pagesize'] = 'Публикации на страница';
$string['permalink'] = 'Постоянна хипервръзка';
$string['personalblogs'] = 'Потребителите могат да виждат само собствените си блогове';
$string['preferences'] = 'Предпочитания';
$string['publishto'] = 'Публикувано за';
$string['publishtocourse'] = 'Потребители, с които Вие сте записани в един курс';
$string['publishtocourseassoc'] = 'Членове на асоциирания курс';
$string['publishtocourseassocparam'] = 'Членове на {$a}';
$string['publishtogroup'] = 'Потребители, с които Вие сте в една група';
$string['publishtogroupassoc'] = 'Членове на Вашата група от асоциирания курс';
$string['publishtogroupassocparam'] = 'Членове на Вашата група в {$a}';
$string['publishto_help'] = 'Има 3 възможности:

* Само за Вас (чернова) - Само Вие и администраторите може да видят тази статия
* Всеки регистриран - Всеки, който е регистриран на този сайт, може да прочете статия
* Всички по света - Всички, включително гостите, могат да прочетат тази статия';
$string['publishtonoone'] = 'Само за Вас (чернова)';
$string['publishtosite'] = 'Всеки регистриран';
$string['publishtoworld'] = 'Всички посетители';
$string['readfirst'] = 'Първо прочетете това';
$string['relatedblogentries'] = 'Свързани блог статии';
$string['retrievedfrom'] = 'Извлечено от';
$string['rssfeed'] = 'RSS емисия на блог';
$string['searchterm'] = 'Търсене:{$a}';
$string['settingsupdatederror'] = 'Възникна грешка и предпочитаните настройки на блог не можаха да се обновят';
$string['siteblog'] = 'Блог на сайта: {$a}';
$string['siteblogdisable'] = 'Блогът на сайта е забранен';
$string['siteblogs'] = 'Всички потребители на сайта могат да виждат всички блог статии';
$string['tagdatelastused'] = 'Последно използване на етикета';
$string['tagparam'] = 'Етикет: {$a}';
$string['tags'] = 'Етикети';
$string['tagsort'] = 'Нареждане на етикетите по';
$string['tagtext'] = 'Текст на етикета';
$string['timefetched'] = 'Време на последната синхронизация';
$string['timewithin'] = 'Показване на етикетите, използвани през тези дни';
$string['updateentrywithid'] = 'Обновяване на статия';
$string['url_help'] = 'Въведете URL-а на RSS емисията за Вашия външен блог.';
$string['useblogassociations'] = 'Разрешаване асоциирането на блог';
$string['useexternalblogs'] = 'Разрешаване на външните блогове';
$string['userblog'] = 'Блог на потребител: {$a}';
$string['userblogentries'] = 'Статии в блог от {$a}';
$string['valid'] = 'Валидна';
$string['viewallblogentries'] = 'Всички статии за {$a}';
$string['viewallmodentries'] = 'Преглед на всички статии относно този {$a-type}';
$string['viewallmyentries'] = 'Преглед на всички мои статии';
$string['viewblogentries'] = 'Статии относно този {$a-type}';
$string['viewblogsfor'] = 'Преглед на всички статии за...';
$string['viewcourseblogs'] = 'Преглед на всички статии относно този курс';
$string['viewentriesbyuseraboutcourse'] = 'Преглед на статиите относно този курс от {$a}';
$string['viewgroupblogs'] = 'Преглед на статиите на група...';
$string['viewgroupentries'] = 'Статии от група';
$string['viewmodblogs'] = 'Преглед на статиите за модул...';
$string['viewmodentries'] = 'Статии на модул';
$string['viewmyentries'] = 'Моите статии';
$string['viewmyentriesaboutcourse'] = 'Преглед на моите статии относно този курс';
$string['viewmyentriesaboutmodule'] = 'Преглед на моите статии относно този {$a}';
$string['viewsiteentries'] = 'Преглед на всички статии';
$string['viewuserentries'] = 'Преглед на всички статии от {$a}';
$string['worldblogs'] = 'Всички посетители могат да виждат статиите, зададени да се виждат от всички посетители';
$string['wrongpostid'] = 'Невалиден номер на статия в блог';
