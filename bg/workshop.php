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
 * Strings for component 'workshop', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Управление на достъпа';
$string['aggregategrades'] = 'Преизчисляване на оценките';
$string['areainstructauthors'] = 'Инструкции за предаване';
$string['areainstructreviewers'] = 'Инструкции за оценяване';
$string['assessment'] = 'Оценяване';
$string['assessmentby'] = 'според <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Оценка от {$a}';
$string['assessmentbyyourself'] = 'Вашата оценка';
$string['assessmentend'] = 'Краен срок за оценяване';
$string['assessmentenddatetime'] = 'Краен срок за оценяване: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (краен срок за оценяване)';
$string['assessmentform'] = 'Формуляр за оценяване';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Оценка</a> на <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentsettings'] = 'Настройки на оценяването';
$string['assessmentstart'] = 'Отворено за оценяване от';
$string['assessmentstartdatetime'] = 'Отворена за оценяване от {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (отворена за оценяване)';
$string['assessmentweight'] = 'Тегло на иценката';
$string['clearaggregatedgradesconfirm'] = 'Сигурни ли сте, че искате да изтриете пресметнатите оценки върху предадените работи и оценките върху дейността?';
$string['clearassessmentsconfirm'] = 'Сигурни ли сте, че искате да изтриете всички оценки от оценяването? Вие няма да можете сами да ги възстановите, ще трябва оценяващите пак да оценяват предадените работи.';
$string['configgradedecimals'] = 'Брой на цифрите по подразбиране, които трябва да се показват след десетичната запетая, когато се показват оценки.';
$string['daysago'] = 'преди {$a} дена';
$string['daysleft'] = '{$a} оставащи дни';
$string['daystoday'] = 'днес';
$string['daystomorrow'] = 'утре';
$string['daysyesterday'] = 'вчера';
$string['err_multiplesubmissions'] = 'Докато се редактираше тази форма, беше запазена друга версия на работата. Многократно изпълняване от един и същи потребител не е позволено.';
$string['exampledeleteconfirm'] = 'Сигурни ли сте, че искате да изтриете примерната предадена работа? Щракнете бутон "Продължаване" за да я изтриете.';
$string['examplesmode'] = 'Метод за оценяване на примерните оценки';
$string['gradedecimals'] = 'Брой цифри след десетичната запетая в оценките';
$string['gradinggrade'] = 'Оценка за оценяването';
$string['gradinggrade_help'] = 'Тази настройка определя, максималната оценка, която може да се получи за оценяването на работите на другите.';
$string['gradingsettings'] = 'Настройки на оценяването';
$string['iamsure'] = 'Да, сигурен съм';
$string['instructauthors'] = 'Инструкции за предаване на работата';
$string['introduction'] = 'Въведение';
$string['latesubmissions'] = 'Закъснели предавания';
$string['latesubmissionsallowed'] = 'Позволени са закъснели предавания';
$string['latesubmissions_desc'] = 'Позволява се предаване след срока';
$string['latesubmissions_help'] = 'Ако е позволено, автор може да изпрати работата си след срока за предаване или през фазата на оценяване. Обаче закъснелите работи не могат да се редактират.';
$string['maxbytes'] = 'Максимален размер на файл';
$string['modulename'] = 'Работилница';
$string['nattachments'] = 'Максимален брой на опитите за предаване';
$string['pluginadministration'] = 'Администриране на Работилница';
$string['pluginname'] = 'Работилница';
$string['previewassessmentform'] = 'Преглед';
$string['receivedgrades'] = 'Получени оценки';
$string['strategy'] = 'Стратегия за оценяване';
$string['strategy_help'] = 'Стратегията за оценяване определя какъв формуляр и метод за оценяване се използва. Има 4 възможности:

* Съвкупно оценяване - Пишат се коментари и оценки по посочени аспекти
* Коментари - Пишат се коментари в посочени аспекти, но без оценки
* Брой грешки - Пишат се коментари и оценки Да/Не за посочени твърдения
* Критерии с нива - Определят се нива на оценки по определени критерии';
$string['submissionattachment'] = 'Прикрепен файл';
$string['submissionend'] = 'Краен срок за предаване';
$string['submissiongrade'] = 'Оценка за работата';
$string['submissiongrade_help'] = 'Тази настройка определя максималната оценка, която може да бъде получена за предадената работа.';
$string['submissionsettings'] = 'Настройки за предаване';
$string['submissionstart'] = 'Приемане на работи от';
$string['subplugintype_workshopform'] = 'Стратегия за оценяване';
$string['subplugintype_workshopform_plural'] = 'Стратегии за оценяване';
$string['useexamples'] = 'Използване на примери';
$string['useexamples_desc'] = 'Предоставят се примери за практикуване в поставянето на оценки';
$string['useexamples_help'] = 'Ако е поставена отметка, потребителят може да опита оценяването на един или повече примери и да сравни своята оценка с оценката на примера. Поставената оценка не се регистрира в системата.';
$string['usepeerassessment'] = 'Използване на взаимно оценяване';
$string['usepeerassessment_help'] = 'Ако е сложена отметка, потребителят може да оценява работите на други съкурсници и да получи оценка за начина по който оценява в допълнение към оценката за работата си.';
$string['useselfassessment'] = 'Самооценяване';
$string['useselfassessment_help'] = 'Ако отметката е сложена, потребителят може да оцени собствената си работа и да получи оценка за самооценката си наред с оценката за работата си.';
$string['workshopfeatures'] = 'Настройки на работилницата';
$string['workshopname'] = 'Име на работилницата';
