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
 * Strings for component 'grades', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Дейности';
$string['addcategory'] = 'Добавяне на категория';
$string['addfeedback'] = 'Добавяне на обратна връзка';
$string['addidnumbers'] = 'Добавяне на идентификационни номера';
$string['additem'] = 'Добавяне единица за оценяване';
$string['addscale'] = 'Добавяне на скала';
$string['aggregateextracreditmean'] = 'Средна оценка (с допълнителни кредити)';
$string['aggregatemax'] = 'Най-висока оценка';
$string['aggregatemean'] = 'Средна оценка';
$string['aggregatemedian'] = 'Медиана на оценките';
$string['aggregatemin'] = 'Най-ниска оценка';
$string['aggregatemode'] = 'Мода на оценките';
$string['aggregateonlygraded'] = 'Обобщаване само на непразните оценки';
$string['aggregateonlygraded_help'] = 'Празната оценка е оценка, която липсва в книгата за оценки. Тя може да произтича от отговор на задание, който още не е оценен или от тест, който още не е опитан за бъде изпълнен.

Тази настройка определя дали празните оценки не се включват в обобщаването или участват като минимални оценки, например със стойност 0 за оценки, които могат да бъдат от 0 до 100.';
$string['aggregateoutcomes'] = 'Включване на качества в обобщаването';
$string['aggregateoutcomes_help'] = 'Ако се разреши в обобщаването ще се включат и качествата. Това може да предизвика неочаквани крайни резултати.';
$string['aggregatesubcats'] = 'Включване и на подкатегориите при обобщаване';
$string['aggregatesubcats_help'] = 'Тази настройка определя дали оценките от подкатегориите се включват в обобщаването.';
$string['aggregatesum'] = 'Сума на оценките';
$string['aggregateweightedmean'] = 'Претеглена средна оценка';
$string['aggregateweightedmean2'] = 'Проста претеглена средна оценка';
$string['aggregation'] = 'Обобщаване';
$string['aggregationcoef'] = 'Коефициент за обобщаване';
$string['aggregationcoefextra'] = 'Допълнителен кредит';
$string['aggregationcoefextra_help'] = 'Ако начинът на обобщаване е "Сума от оценките" или "Проста претеглена средна оценка" и отметката "Допълнителен кредит" е сложена, максималната оценка на единицата не се прибавя към максималната оценка за категорията, което дава възможност за достигане на максимална оценка (или оценка над максималната, ако е разрешено от администратора на сайта) в категорията без максимални оценки за всички единици.

Ако обобщаването е "Средна оценка (с допълнителни кредити)" и допълнителният кредит е зададен по-голям от нула, допълнителният кредит е стойност, с която оценката се умножава преди прибавянето и в сумата за пресмятане на средна стойност.';
$string['aggregationcoefextrasum'] = 'Допълнителен кредит';
$string['aggregationcoefextrasum_help'] = 'Ако тази отметка за допълнителен кредит е поставена, максималната оценка за единицата не се добавя към максималната оценка на категорията, давайки възможност за получаване на максимална оценка (или по-голяма от максималната, ако е позволено от администратор на сайта) в категорията без максимални оценки за всяка оценявана единица.';
$string['aggregationcoefextraweight'] = 'Тегло на допълнителния кредит';
$string['aggregationcoefextraweight_help'] = 'Ако на теглото на допълнителния кредит е зададена по-голяма от нула стойност, оценката действа като допълнителен кредит при обобщаване. С тази стойност се умножава оценката преди да бъде сумирана при пресмятане на средна стойност.';
$string['aggregation_help'] = 'Обобщаването определя как се комбинират оценките от дадена категория, като:

* Средна оценка - Сумата на всички оценки, разделена на броя им
* Медиана на оценките - След като оценките се подредят по нарастване - оценката, която попада в средата на списъка
* Най-ниска оценка
* Най-висока оценка
* Мода на оценките - Оценката, която се повтаря най-много пъти
* Сума на оценките - Сума от стойностите на всички оценки, независимо от скалите им';
$string['aggregationposition'] = 'Позиция на обобщената';
$string['aggregationposition_help'] = 'Тази настройка определя дали колоната с обобщената оценка от категория или курс се показва първа или последна в отчетите от книгата с оценки.';
$string['aggregationsvisible'] = 'Достъпни видове обобщаване';
$string['aggregationsvisiblehelp'] = 'Изберете всички видове обобщаване, които трябва да са достъпни. Задръжте натиснат клавиш Ctrl, за да изберете повече от един.';
$string['allstudents'] = 'Всички ученици';
$string['allusers'] = 'Всички потребители';
$string['availableidnumbers'] = 'Налични идентификационни (ID Numbers) номера';
$string['average'] = 'Средно';
$string['averagesdecimalpoints'] = 'Десетични знаци в колоната на средните';
$string['averagesdecimalpoints_help'] = 'Тази настройка определя броя на знаците след десетичната запетая при показване на средната стойност, или да се използва зададеният брой за категорията или оценяваната единица (Наследен).';
$string['averagesdisplaytype'] = 'Вид показване в колоната на средните';
$string['averagesdisplaytype_help'] = 'Тази настройка определя дали средната оценка се показва като реална, в проценти или с букви, или по начина, определен за категорията или единицата за оценяване (Наследен).';
$string['badlyformattedscale'] = 'Моля, въведете списък от разделени със запетаи стойности (поне две стойности се изискват).';
$string['categories'] = 'Категории';
$string['categoriesanditems'] = 'Категории и единици';
$string['categoriesedit'] = 'Редактиране на категории и единици';
$string['category'] = 'Категория';
$string['categoryedit'] = 'Редактиране на категория';
$string['categoryname'] = 'Име на категория';
$string['categorytotal'] = 'Обобщена за категорията';
$string['categorytotalname'] = 'Име на обобщената оценка на категорията';
$string['changedefaults'] = 'Промяна на зададеното по подразбиране';
$string['changereportdefaults'] = 'Промяна на зададеното по подразбиране за отчета';
$string['choosecategory'] = 'Избор на категория';
$string['combo'] = 'Раздели и Падащо меню';
$string['courseavg'] = 'Средно за курса';
$string['coursegradesettings'] = 'Настройки на оценките в курса';
$string['coursename'] = 'Име на курса';
$string['coursescales'] = 'Скали на курса';
$string['coursesettings'] = 'Настройки на курса';
$string['coursesettingsexplanation'] = 'Настройките за курса определят как всички участници в курса виждат дневника с оценките.';
$string['coursetotal'] = 'Обща за курс';
$string['createcategory'] = 'Създаване на категория';
$string['csv'] = 'CSV';
$string['decimalpoints'] = 'Общо знаци след десетичната запетая';
$string['decimalpoints_help'] = 'Тази настройка определя с колко знаци след десетичната запетая се показват оценките. Това не оказва влияние върху точността на изчисляване, която е 5 знака след десетичната запетая.';
$string['default'] = 'По подразбиране';
$string['defaultprev'] = 'По подразбиране ({$a})';
$string['deletecategory'] = 'Изтриване на категория';
$string['dropdown'] = 'Падащо меню';
$string['droplow'] = 'Отхвърляне най-ниските';
$string['droplow_help'] = 'Тази настройка позволява, посочения брой най-ниски оценки да се изключи от agregation.';
$string['edit'] = 'Редактиране';
$string['editcalculation'] = 'Редактиране на калкулация';
$string['editcalculationverbose'] = 'Редактиране на пресмятането за {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Редактиране на забележка';
$string['editgrade'] = 'Редактиране на оценка';
$string['editgradeletters'] = 'Редакция на буквите за оценка';
$string['editoutcome'] = 'Редактиране на качество';
$string['editoutcomes'] = 'Редактиране на качества';
$string['editscale'] = 'Редактиране на скала';
$string['edittree'] = 'Категории и единици';
$string['editverbose'] = 'Редактиране на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Разрешаване на AJAX';
$string['enableajax_help'] = 'Добавя AJAX функционалност на отчетите с оценки, опростявайки и ускорявайки обичайните действия. Зависи от това дали браузърът на потребителя изпълнява Javascript.';
$string['enableoutcomes'] = 'Разрешаване на качества';
$string['enableoutcomes_help'] = 'Поддържане на Качества (също така известни като: Компетенции, Цели, Стандарти, или Критерии) означава, че ще може нещата да се оценяват чрез една или повече скали, които са обвързани с качества. Позволяването на качества прави възможно използването на такова специално оценяване на сайта.';
$string['encoding'] = 'Кодова таблица';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Грешка при обновяване на настройката "Включване на качества в обобщаването" на категория оценки номер (ID) {$a->id}';
$string['export'] = 'Експортиране';
$string['exportalloutcomes'] = 'Експортиране на всички качества';
$string['exportfeedback'] = 'Включване на обратната връзка в експортирането';
$string['exportto'] = 'Експортиране към';
$string['feedback'] = 'Съобщение';
$string['finalgrade'] = 'Крайна оценка';
$string['fixedstudents'] = 'Неподвижни колони на студентите';
$string['fixedstudents_help'] = 'Позволява оценките да се превъртат хоризонтално, а колоните на студентите да остават неподвижни и да се виждат на екрана.';
$string['fullmode'] = 'Пълно показване';
$string['fullview'] = 'Пълно показване';
$string['generalsettings'] = 'Общи настройки';
$string['grade'] = 'Оценка';
$string['gradeadministration'] = 'Администриране на оценки';
$string['gradebook'] = 'Книга за оценки';
$string['gradecategory'] = 'Категория на оценката';
$string['gradecategoryonmodform'] = 'Категория на оценката';
$string['gradecategoryonmodform_help'] = 'Тази настройка определя в коя категория в книгата за оценки ще се покаже оценката от дейността.';
$string['gradecategorysettings'] = 'Настройки на категорията на оценката';
$string['gradedisplaytype'] = 'Тип на показваната стойност';
$string['gradedisplaytype_help'] = 'Тази настройка определя как се показват оценките в отчетите за оценяващите и за потребителите.

* Реална - Фактическата стойност на оценката
* В проценти
* С букви - За обозначаване на интервала, в който попада оценката, се използва буква или дума';
$string['gradeexport'] = 'Експортиране на оценки';
$string['gradeexportdecimalpoints'] = 'Десетични знаци на експортираните оценки';
$string['gradeexportdecimalpoints_desc'] = 'Брой на десетичните знаци, които да се показват в експортираните оценки. Могат да се зададат отново при самия експорт.';
$string['gradeexportdisplaytype'] = 'Тип на показване на оценките при експортиране';
$string['gradeexportdisplaytype_desc'] = 'При експортиране оценките могат да се показват като дробни числа, проценти (спрямо минималната и максимална оценки) или с букви (А, Б, В и т.н.). Това може да се избере отново при самия експорт.';
$string['gradehistorylifetime_help'] = 'Това определя колко време Вие искате да пазите историята на промените в таблиците с оценки. Препоръчва се да се пази история колкото е възможно по-дълго. Ако възникнат проблеми с производителността или има ограничение за обема на базата данни, опитайте да зададете по-малка стойност.';
$string['gradeitem'] = 'Оценка за';
$string['gradeitemadvanced'] = 'Настройки за разширено показване';
$string['gradeitemadvanced_help'] = 'Изберете елементите, които трябва да излизат при "Разширено показване" при редактиране оценката за дадена единица.';
$string['gradeitemislocked'] = 'Тази дейност е заключена в дневника за оценки. Промените в оценките, които са направени в тази дейност, няма да се копират в дневника, докато не бъде отключена.';
$string['gradeitemlocked'] = 'Оценяването е заключено';
$string['gradeitemsettings'] = 'Настройки за оценъчната единица';
$string['gradeitemsinc'] = 'Да се включат оценките за единиците';
$string['gradeletter'] = 'Букви за оценяване';
$string['gradeletter_help'] = 'Буквите за оценка са латински букви, A, B, C ..., или думи, например Отличен, Мн. добър, Добър, ..., използвани да представят диапазона на оценките.';
$string['gradeletters'] = 'Букви за оценяване';
$string['gradelocked'] = 'Оценката е заключена';
$string['grademax'] = 'Максимална оценка';
$string['grademax_help'] = 'Тази настройка определя максималната оценка, когато се използва оценка тип стойност. Максималната оценка за конкретна дейност се задава на страницата с настройките на дейността.';
$string['grademin'] = 'Минимална оценка';
$string['grademin_help'] = 'Тази настройка определя минималната оценка, когато се използва оценка тип стойност.';
$string['gradeoutcomes'] = 'Качества';
$string['gradeoutcomescourses'] = 'Курсови качества';
$string['gradepass'] = 'Оценка за преминаване';
$string['gradepass_help'] = 'Настройката определя минималната оценка за преминаване. Стойността се използва в дейностите и напредването в курса, и в дневника с оценките, където оценките за преминаване се оцветяват в зелено, а оценките, с които не се преминава напред - в червено.';
$string['gradepreferences'] = 'Предпочитания за оценките';
$string['gradepublishing'] = 'Позволяване на публикуване';
$string['gradepublishing_help'] = 'Позволяване на публикуване при експортиране и импортиране. Експортираните оценки ще могат да се видят чрез отваряне на URL, без необходимост от влизане в Moodle сайт. Оценки ще могат също да се импортират от такъв URL (което означава, че един Moodle сайт може да импортира оценки публикувани от друг Moodle сайт). По подразбиране само администраторите могат да използват тази възможност. Моля, обучете потребителите преди да дадете това право на други роли (опасност при размяна на отметки и ускорители за теглене на файлове, ограничения по IP и др.)';
$string['gradereport'] = 'Отчет на оценките';
$string['graderreport'] = 'Отчет за оценяващ';
$string['grades'] = 'Оценки';
$string['gradesforuser'] = 'Оценки на {$a->user}';
$string['gradesonly'] = 'Само оценки';
$string['gradessettings'] = 'Настройки на оценките';
$string['gradetype'] = 'Тип оценка';
$string['gradetype_help'] = 'Има 4 типа оценки:

* Без оценка - Не е възможна оценка
* Стойност - Числова стойност с минимум и максимум
* Скала - Оценка от зададен списък оценки
* Текст - Само забележка

Само оценките от тип стойност и скала се обобщават. Типът на оценката за конкретна дейност се задава в страницата за настройки на дейността.';
$string['hidden'] = 'Скрити';
$string['hiddenasdate'] = 'Показване дата на предаване за скритите оценки';
$string['hiddenasdate_help'] = 'Ако потребителят не може да вижда скритите оценки, да се показва датата на предаване вместо "-".';
$string['hidden_help'] = 'Ако е сложена тази отметка, оценките се скриват от студентите. Ако е желателно може да се зададе дата за "Скрити до", за да се покажат оценките след като оценяването приключи.';
$string['hiddenuntil'] = 'Скрити до';
$string['hiddenuntildate'] = 'Скрити до: {$a}';
$string['hideadvanced'] = 'Скриване на разширените възможности';
$string['hideforcedsettings'] = 'Скриване на принудителните настройки';
$string['hideforcedsettings_help'] = 'Да не се показват принудителните настройки в потребителския интерфейс за оценките.';
$string['hidegroups'] = 'Скриване на групи';
$string['hidenooutcomes'] = 'Показване на качества';
$string['hidetotalifhiddenitems'] = 'Скриване на обощените ако съдържат скрити единици';
$string['hidetotalifhiddenitems_help'] = 'Тази настройка определя дали обобщените оценки, които съдържат оценки за скрити единици, се показват на студентите или се заместват с тире (-). Ако се показват, обобщените оценки се изчисляват с изключване или с включване на оценките от скрити единици.

Ако скритите единици се изключват, обобщената оценка е различна от тази, която вижда преподавателя в отчета, защото той винаги вижда обобщена оценка изчислена от всички единици, скрити или не. Ако скритите оценки се включват, студентите биха могли да пресметнат скритите единици.';
$string['hidetotalshowexhiddenitems'] = 'Показване на обобщените с изключени скрити';
$string['hidetotalshowinchiddenitems'] = 'Показване на обобщените с включени скрити';
$string['hideverbose'] = 'Скриване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['import'] = 'Импортиране';
$string['importcsv'] = 'Импортиране на CSV';
$string['importcustom'] = 'Импортиране като частни качества (само за този курс)';
$string['importfailed'] = 'Неуспешно импортиране';
$string['importfeedback'] = 'Импортиране на обратна връзка';
$string['importfile'] = 'Импортиране на файл';
$string['importfrom'] = 'Импортиране от';
$string['importoutcomes'] = 'Импортиране на качества';
$string['importoutcomes_help'] = 'Качества могат да се импортират от csv файл с формат като на файл за експортиране на качества в csv файл.';
$string['importpreview'] = 'Преглед на импортирането';
$string['importsettings'] = 'Импортиране на настройки';
$string['importskippedoutcome'] = 'Качество с кратко име "{$a}" вече съществува в този контекст, това от импортирания файл беше прескочено.';
$string['importstandard'] = 'Импортиране като стандартни качества';
$string['importxml'] = 'Импортиране на XML';
$string['includescalesinaggregation'] = 'Включване на скалите при обобщаването';
$string['includescalesinaggregation_help'] = 'Можете да определите дали скалите да се включват като числа във всички обобщени оценки, във всички дневници с оценки, във всички курсове. ВНИМАНИЕ: промяната на тази настройка, ще накара всички обобщени оценки да се преизчислят.';
$string['inherit'] = 'Наследен';
$string['iteminfo'] = 'Информация за единицата';
$string['iteminfo_help'] = 'Тази настройка предоставя място за въвеждане на информация относно единицата. Тази информация не се показва никъде другаде.';
$string['itemname'] = 'Име на единица';
$string['itemsedit'] = 'Редактиране на единицата за оценяване';
$string['keephigh'] = 'Пазене на най-високите';
$string['keephigh_help'] = 'Ако е зададена, тази настройка определя да се пазят най-високите Х оценки, където Х е зададена тук стойност.';
$string['letter'] = 'Буква';
$string['letterpercentage'] = 'Буква (проценти)';
$string['letterreal'] = 'Буква (реални)';
$string['letters'] = 'Букви';
$string['linktoactivity'] = 'Връзка към дейност "{$a->name}"';
$string['lock'] = 'Заключване';
$string['locked'] = 'Заключени';
$string['locked_help'] = 'Ако е сложена тази отметка, оценките не могат повече да се актуализират автоматично от съответната дейност.';
$string['locktime'] = 'Заключени след';
$string['locktimedate'] = 'Заключени след: {$a}';
$string['lockverbose'] = 'Заключване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['max'] = 'Максимална';
$string['maxgrade'] = 'Максимална оценка';
$string['meanall'] = 'Всички оценки';
$string['meangraded'] = 'Непразните оценки';
$string['meanselection'] = 'Оценки, включени в средните по колони';
$string['meanselection_help'] = 'Тази настройка означава дали клетките с липсващи оценки трябва да се включат при изчисляване на средните за всяка категория или оценявана единица.';
$string['min'] = 'Най-ниска';
$string['multfactor'] = 'Множител';
$string['multfactor_help'] = 'Множителят е число, с което се умножава всяка оценка за дадената единица, до максимална стойност на максималната оценка. Например, ако множителят е 2 и максималната стойност е 100, тогава всички оценки под 50 се умножават по 2, а всички оценки над 50 се променят на 100.';
$string['mypreferences'] = 'Моите предпочитания';
$string['myreportpreferences'] = 'Мои предпочитания';
$string['navmethod'] = 'Метод за навигация';
$string['newcategory'] = 'Нова категория';
$string['nocourses'] = 'Все още няма курсове';
$string['nogradeletters'] = 'Не са зададени букви за оценяване';
$string['nonunlockableverbose'] = 'Тази оценка не може да бъде отключена преди {$a->itemname} да бъде отключена.';
$string['nopublish'] = 'Не се публикуват';
$string['noscales'] = 'Качествата трябва да бъдат свързани със скала от курса или с глобална скала, но тук не са. Искате ли да добавите скала?';
$string['numberofgrades'] = 'Брой на оценките';
$string['options'] = 'Настройки';
$string['outcomecreate'] = 'Добавяне на ново качество';
$string['outcomefullname'] = 'Пълно наименование';
$string['outcomeitemsedit'] = 'Редактиране на единицата за качество';
$string['outcomes'] = 'Качества';
$string['outcomescourse'] = 'Качества, използвани в курс';
$string['outcomescustom'] = 'Частни качества';
$string['outcomeshortname'] = 'Кратко име';
$string['outcomesstandard'] = 'Стандартни качества';
$string['outcomesstandardavailable'] = 'Налични стандартни качества';
$string['outcomestandard'] = 'Стандартно качество';
$string['outcomestandard_help'] = 'Стандартното качество е достъпно на целия сайт, във всички курсове.';
$string['overallaverage'] = 'Обща средна';
$string['overridden_help'] = 'Ако отметката е сложена, оценката няма да може повече да се променя в рамките на съответната дейност.

Когато една оценка се редактира в отчета с оценките, тази отметка се поставя автоматично. Въпреки това тя може да се премахне за да може оценката да се актуализира чрез съответната дейност.';
$string['parentcategory'] = 'Родителска категория';
$string['percentage'] = 'Проценти';
$string['percentageletter'] = 'Проценти (буква)';
$string['percentagereal'] = 'Проценти (реални)';
$string['plusfactor'] = 'Отместване';
$string['plusfactor_help'] = 'Отместването е число, което се прибавя към всяка оценка за дадена единица, след прилагането на множител.';
$string['points'] = 'точки';
$string['positionfirst'] = 'Първа';
$string['positionlast'] = 'Последна';
$string['preferences'] = 'Предпочитания';
$string['prefgeneral'] = 'Общи настройки';
$string['prefletters'] = 'Букви за оценяване и граници';
$string['prefrows'] = 'Специални редове';
$string['prefshow'] = 'Превключване на видимостта';
$string['previewrows'] = 'Преглеждан брой редове';
$string['profilereport'] = 'Отчет в профила';
$string['profilereport_help'] = 'Отчет за оценките, използван на страницата с профила на потребителя.';
$string['quickfeedback'] = 'Бързи забележки';
$string['quickgrading'] = 'Бързо оценяване';
$string['quickgrading_help'] = 'Ако е разрешено, когато редактирането е включено, на мястото на всяка оценка се показва малко поле за въвеждане и това позволява бързо да се напишат много оценки. Промените се запазват след щракване на бутона за запазване.

Забележете, че когато се редактира една оценка в таблица с оценки, се вдига флаг, който означава, че тази оценка не може да се промени повече в рамките на заданието.';
$string['range'] = 'Диапазон';
$string['rangedecimals'] = 'Десетични знаци на диапазоните';
$string['rangedecimals_help'] = 'Брой на десетичните знаци след запетаята за показване на диапазон.';
$string['rangesdecimalpoints'] = 'Десетични знаци в диапазоните';
$string['rangesdecimalpoints_help'] = 'Тази настройка определя броя на знаците след десетичната запетая при показване на диапазоните, или да се използва зададеният брой за категорията или оценяваната единица (Наследен).';
$string['rangesdisplaytype'] = 'Вид показване на диапазоните';
$string['rangesdisplaytype_help'] = 'Тази настройка определя дали диапазоните се показва като реални, в проценти или с букви, или по начина, определен за категорията или единицата за оценяване (Наследен).';
$string['real'] = 'Реална';
$string['realletter'] = 'Реално (букви)';
$string['realpercentage'] = 'Реално (проценти)';
$string['removeallcoursegrades'] = 'Изтрий всички оценки';
$string['removeallcourseitems'] = 'Изтриване на всички записи и категории';
$string['report'] = 'Отчет';
$string['reportdefault'] = 'По подразбиране за отчета ({$a})';
$string['reportsettings'] = 'Настройки на отчета';
$string['rowpreviewnum'] = 'Преглеждан брой редове';
$string['savechanges'] = 'Запис на промените';
$string['savepreferences'] = 'Запазване на предпочитанията';
$string['scaleconfirmdelete'] = 'Сигурни ли сте, че искате да изтриете скалата "{$a}"?';
$string['seeallcoursegrades'] = 'Виждане на всички оценки в курса';
$string['selectalloroneuser'] = 'Изберете всички или един потребител';
$string['selectauser'] = 'Изберете потребител';
$string['separator'] = 'Разделител';
$string['sepcomma'] = 'Запетая';
$string['septab'] = 'Табулатор';
$string['setgradeletters'] = 'Задай букви за оценяване';
$string['setpreferences'] = 'Запазване на предпочитанията';
$string['settings'] = 'Настройки';
$string['showactivityicons'] = 'Показване икони на дейностите';
$string['showactivityicons_help'] = 'Ако е зададено, до имената на дейностите се показват и икони.';
$string['showallhidden'] = 'Показване на скритите';
$string['showallstudents'] = 'Показване на всички ученици';
$string['showanalysisicon'] = 'Икона за анализ на оценката';
$string['showanalysisicon_desc'] = 'Дали по подразбиране да се показва икона за анализ на оценката. Ако модулът за дейността поддържа това, щракването върху иконата за анализ на оценката отваря страница с подробности, обясняващи как е получена оценката.';
$string['showanalysisicon_help'] = 'Ако модулът за дейността поддържа това, щракването върху иконата за анализ на оценката отваря страница с подробности, обясняващи как е получена оценката.';
$string['showaverage'] = 'Показване на средна';
$string['showaverage_help'] = 'Да се покаже ли колона за средна? Студентите биха могли да изчислят оценките на другите студенти ако средната стойност се изчислява от малък брой оценки. Поради съображения за производителност средната стойност се пресмята приблизително ако зависи от скрити единици.';
$string['showaverages'] = 'Показване на средни по колони';
$string['showaverages_help'] = 'Ако се включи, отчета на оценките ще съдържа допълнителен ред, показващ средната оценка за всяка категория и оценявана единица.';
$string['showcalculations'] = 'Показване на изчисленията';
$string['showcalculations_help'] = 'Ако е зададено, когато е включено редактирането, се показва иконка за всяка оценявана единица и категория, и подсказващ надпис при задържане на курсора над пресметнатите единици, и индикатор, че колоната е изчислена.';
$string['showeyecons'] = 'Икони показване/скриване';
$string['showeyecons_help'] = 'Ако е зададено, когато редактирането е включено, се показва икона "показване/скриване" за всяка оценка, с която се управлява дали студентът вижда или не тази оценка.';
$string['showfeedback'] = 'Показване на забележките';
$string['showfeedback_help'] = 'Да се покаже ли колоната със забележки?';
$string['showgrade'] = 'Показване на оценките';
$string['showgrade_help'] = 'Да се покаже ли колоната с оценки?';
$string['showgroups'] = 'Показване на групи';
$string['showhiddenitems'] = 'Показване на скритите единици';
$string['showhiddenitems_help'] = 'Дали скритите единици за оценяване са напълно скрити или имената на скритите единици са видими за студентите.

* Показване на скритите - Имената на критите единици за оценяване се виждат но оценките на студентите са скрити
* Само скрити до - Единиците за оценяване с настройка "Скрита до" са скрити до зададената дата, след което са напълно видими
* Да не се показват - Скритите единици за оценяване са напълно скрити';
$string['showhiddenuntilonly'] = 'Само скрити до';
$string['showlettergrade'] = 'Показване на буквените оценки';
$string['showlettergrade_help'] = 'Да се показва ли колона за буквени оценки?';
$string['showlocks'] = 'Икони "заключване/отключване"';
$string['showlocks_help'] = 'Ако е зададено, когато е включено редактирането, за всяка оценка се показва икона "заключване/отключване", която определя дали оценката може автоматично да се актуализира от съответната дейност.';
$string['shownohidden'] = 'Да не се показват';
$string['shownooutcomes'] = 'Скриване на качества';
$string['shownumberofgrades'] = 'Показване на броя в средните оценки';
$string['shownumberofgrades_help'] = 'Ако е зададено, броят на оценките, използвани при изчисляване на средните се показва в скоби след всяка средна оценка.';
$string['showpercentage'] = 'Показване процента на такива оценки';
$string['showpercentage_help'] = 'Да се показва ли оценката в проценти за всяка единица?';
$string['showquickfeedback'] = 'Показване на бързи забележки';
$string['showquickfeedback_help'] = 'Ако е включено, когато е включено редактиране, се показва поле за писане срещу всяка оценка, позволявайки забележките за много оценки да бъдат редактирани едновременно. Промените се запазват и оцветяват, когато бъде щракнат бутона за актуализиране.

Обърнете внимание, че забележките се редактират в отчета с оценките, и се вдига флаг, който означава, че забележките не могат повече да се променят в рамките на дейността.';
$string['showrange'] = 'Показване на диапазоните';
$string['showrange_help'] = 'Да се показва ли колона за диапазони?';
$string['showranges'] = 'Показване на диапазоните';
$string['showranges_help'] = 'Ако е включено, отчета на оценките ще съдържа допълнителен ред, показващ диапазона от оценки за всяка категория или единица.';
$string['showrank'] = 'Показване на класация';
$string['showrank_help'] = 'Да се показва ли мястото на студента между останалите студенти по всяка оценка?';
$string['showuserimage'] = 'Показване снимките на потребителите';
$string['showuserimage_help'] = 'Дали да се показват снимките на потребителите до техните имена в отчета с оценките.';
$string['showweight'] = 'Показване на теглата';
$string['showweight_help'] = 'Да се покаже ли колоната с теглата?';
$string['simpleview'] = 'Опростено показване';
$string['sitewide'] = 'За целия сайт';
$string['sortbyfirstname'] = 'Сортиране по име';
$string['stats'] = 'Статистики';
$string['studentsperpage'] = 'Студенти на страница';
$string['studentsperpage_help'] = 'Тази настройка определя броя на студентите показвани на една страница в отчета за оценяващия.';
$string['subcategory'] = 'Нормална категория';
$string['submissions'] = 'Предадени работи';
$string['tabs'] = 'Раздели';
$string['typenone'] = 'Без оценка';
$string['typescale'] = 'Скала';
$string['typescale_help'] = 'Тази настройка определя скалата, използвана при оценка от тип скала. Скалата за оценяване на дейност се настройва на страницата за настройване на дейността.';
$string['typetext'] = 'Текст';
$string['typevalue'] = 'Стойност';
$string['uncategorised'] = 'Некатегоризирана';
$string['unchangedgrade'] = 'Оценката непроменена';
$string['unlimitedgrades'] = 'Неограничени оценки';
$string['unlimitedgrades_help'] = 'По подразбиране оценките са ограничени от максималната и минимална оценки в настройките на заданията. Поставянето на тази отметка, премахва ограниченията и позволява оценки със стойности над 100% директно да се записват в дневника с оценки. Препоръчва се тази отметка да се поставя в часове на слабо използване на сайта, защото всички оценки ще се преизчисляват и това ще натоварва сървъра.';
$string['unlock'] = 'Отключване';
$string['unlockverbose'] = 'Отключване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['uploadgrades'] = 'Качване на оценки';
$string['usenoscale'] = 'Да не се използва сакала';
$string['user'] = 'Потребител';
$string['userpreferences'] = 'Предпочитания на потребителя';
$string['viewgrades'] = 'Разглеждане на оценки';
$string['yes'] = 'Да';
