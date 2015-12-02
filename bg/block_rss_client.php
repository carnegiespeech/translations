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
 * Strings for component 'block_rss_client', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   block_rss_client
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewfeed'] = 'Добавяне на нова емисия';
$string['choosefeedlabel'] = 'Изберете емисиите, които искате да станат достъпни в този блок:';
$string['clientchannellink'] = 'Сайт източник...';
$string['clientnumentries'] = 'Брой на елементите, които да се показват в една емисия.';
$string['clientshowchannellinklabel'] = 'Трябва ли да се показва хипервръзка към оригиналния сайт (връзка към канала)? (Забележете, че ако не е доставена хипервръзка, няма да се покаже такава):';
$string['clientshowimagelabel'] = 'Показване на изображение за канала, ако е налично:';
$string['customtitlelabel'] = 'Потребителско заглавие (оставете празно, за де се покаже заглавието, доставено с емисията):';
$string['deletefeedconfirm'] = 'Сигурни ли сте, че искате да изтриете тази емисия?';
$string['disabledrssfeeds'] = 'RSS емисиите са блокирани';
$string['displaydescriptionlabel'] = 'Показване описанието на всяка хипервръзка?';
$string['editafeed'] = 'Редактиране на емисия';
$string['enableautodiscovery'] = 'Разрешаване автоматично показване на емисии?';
$string['enableautodiscovery_help'] = 'Ако е включено, емисиите от страниците се откриват автоматично. Например, ако е въведено http://docs.moodle.org ще се открие: http://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss';
$string['errorloadingfeed'] = 'Грешка при зареждане на RSS ({$a})';
$string['feed'] = 'Емисия';
$string['feeddeleted'] = 'Емисията за новини изтрита';
$string['feeds'] = 'Емисия за новини';
$string['feedsaddedit'] = 'Добавяне/редактиране на емисии';
$string['feedsconfigurenewinstance2'] = 'Щракнете иконката за редактиране отгоре за да конфигурирате този блок за RSS емисии.';
$string['feedurl'] = 'URL на емисията';
$string['managefeeds'] = 'Управление на всички мои емисии';
$string['nofeeds'] = 'Няма дефинирани RSS емисии за този сайт.';
$string['numentries'] = 'Елементи в емисия';
$string['remotenewsfeed'] = 'Далечни емисии за новини';
$string['rss_client:manageanyfeeds'] = 'Управления на всички RSS емисии';
$string['rss_client:manageownfeeds'] = 'Управление на собствените RSS емисии';
$string['sharedfeed'] = 'Споделена емисия';
$string['shownumentrieslabel'] = 'Максимален брой елементи, които да се показват в един блок.';
$string['submitters'] = 'На кого е позволено да дефинира RSS емисии? Дефинираните емисии са достъпни на всяка страница на Вашия сайт.';
$string['timeout'] = 'Време в минути преди RSS емисията да се опресни в кеша. Забележете, че определеното време е минималното време до следващото опресняване; емисията ще бъде опреснена в кеша при следващото изпълнение на cron след минути. Препоръчваното време е 30 минути или повече.';
$string['timeout2'] = 'Таймаут';
$string['viewfeed'] = 'Преглед на емисия';
