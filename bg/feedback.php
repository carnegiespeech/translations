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
 * Strings for component 'feedback', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Добавяне на въпрос';
$string['add_items'] = 'Добавяне на въпроси към анкетата';
$string['add_pagebreak'] = 'Добавяне разделител на страници';
$string['adjustment'] = 'Разполагане';
$string['after_submit'] = 'След попълване';
$string['allowfullanonymous'] = 'Позволяване на пълна анонимност';
$string['analysis'] = 'Анализ';
$string['anonymous'] = 'Анонимна';
$string['anonymous_edit'] = 'Записване имената на потребителите';
$string['anonymous_entries'] = 'Анонимни отговори';
$string['anonymous_user'] = 'Анонимен потребител';
$string['append_new_items'] = 'Добавяне на нови елементи';
$string['autonumbering'] = 'Автоматично номериране';
$string['autonumbering_help'] = 'Позволява или отменя автоматично номериране на всеки въпрос';
$string['average'] = 'Средно';
$string['bold'] = 'Получер';
$string['cancel_moving'] = 'Отказване на преместването';
$string['cannotsavetempl'] = 'записването на шаблони не е разрешено';
$string['cannotunmap'] = 'Проблем с базата данни, невъзможно да се разкартира';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha не е настроена';
$string['check'] = 'Няколко възможности - няколко отговора';
$string['checkbox'] = 'Няколко възможности - няколко отговора (отметки)';
$string['check_values'] = 'Възможни отговори';
$string['choosefile'] = 'Избиране на файл';
$string['chosen_feedback_response'] = 'изберете отговор на анкетата';
$string['completed'] = 'завършена';
$string['completed_feedbacks'] = 'Изпратени отговори';
$string['complete_the_form'] = 'Отговаряне на въпросите...';
$string['completionsubmit'] = 'Показване като изпълнена ако попълването е предадено';
$string['configallowfullanonymous'] = 'Ако тази отметка е сложена, анкета може де се попълва и от потребители, които не са влезли с парола. Отнася се само за анкетите от началната страница на сайта.';
$string['confirmdeleteentry'] = 'Сигурни ли сте, че искате да изтриете това?';
$string['confirmdeleteitem'] = 'Сигурни ли сте, че искате да изтриете този елемент?';
$string['confirmdeletetemplate'] = 'Сигурни ли сте, че искате да изтриете този шаблон?';
$string['confirmusetemplate'] = 'Сигурни ли сте, че искате да използвате този шаблон?';
$string['continue_the_form'] = 'Продължаване на формуляра';
$string['count_of_nums'] = 'Брой на числата';
$string['courseid'] = 'номер на курс';
$string['creating_templates'] = 'Записване на тези въпроси като шаблон';
$string['delete_entry'] = 'Изтриване на записа';
$string['delete_item'] = 'Изтриване на въпрос';
$string['delete_old_items'] = 'Изтриване на стари елементи';
$string['delete_template'] = 'Изтриване на шаблона';
$string['delete_templates'] = 'Изтриване на шаблони';
$string['depending'] = 'Зависимости';
$string['depending_help'] = 'Възможно е един елемент да се покаже само при определена стойност на друг елемент.<br />
<strong>Ето един пример.</strong><br />
<ul>
<li>Първо създайте един елемент, от който ще зависи друг елемент.</li> <li>После вмъкнете разделител за страници.</li> <li>След това добавете елементи, зависещи от стойността на предишния създаден елемент. Изберете елемента от списъка "Елемент за зависимост" и напишете необходимата стойност в полето "Стойност за зависимост".</li> </ul>
<strong>Структурата на елементите трябва да изглежда така.</strong> <ol>
<li>Елемент Q: Имате ли кола? A: Да/Не</li>
<li>Разделител на страници</li> <li>Елемент Q: Какъв цвят е Вашата кола?<br /> (този елемент зависи от елемент 1 със стойност = Да)</li> <li>Елемент Q: Защо нямате кола?<br /> (този елемент зависи от елемент 1 със стойност = Не)</li> <li> ... други елементи</li> </ol>';
$string['dependitem'] = 'Елемент за зависимост';
$string['dependvalue'] = 'Стойност за зависимост';
$string['description'] = 'Описание';
$string['do_not_analyse_empty_submits'] = 'Да не се анализират празните отговори';
$string['dropdown'] = 'Няколко възможности - един отговор (падащ списък)';
$string['dropdownlist'] = 'Няколко възможности - един отговор (падащо меню)';
$string['dropdownrated'] = 'Падащо меню (с рейтинги)';
$string['dropdown_values'] = 'Отговори';
$string['drop_feedback'] = 'Премахване от този курс';
$string['edit_item'] = 'Редактиране на въпрос';
$string['edit_items'] = 'Редактиране на въпроси';
$string['emailnotification'] = 'имейл уведомления';
$string['emailteachermail'] = 'Потребителят {$a->username} е попълнил анкетата: "{$a->feedback}"

Можете да я видите тук: {$a->url}';
$string['emailteachermailhtml'] = 'Потребителят {$a->username} е попълнил анкетата: <i>"{$a->feedback}"</i><br /><br /> Вие можете да я видите <a href="{$a->url}">тук</a>.';
$string['entries_saved'] = 'Вашите отговори бяха запазени. Благодаря.';
$string['export_questions'] = 'Експортиране на въпроси';
$string['export_to_excel'] = 'Експортиране към Excel';
$string['feedbackclose'] = 'Затваряне на анкетата';
$string['feedback:complete'] = 'Попълване на анкета';
$string['feedback:createprivatetemplate'] = 'Създаване на собствен шаблон';
$string['feedback:createpublictemplate'] = 'Създаване на общодостъпен шаблон';
$string['feedback:deletesubmissions'] = 'Изтриване на изпратените попълвания';
$string['feedback:deletetemplate'] = 'Изтриване на шаблона';
$string['feedback:edititems'] = 'Редактиране на елементи';
$string['feedback_is_not_for_anonymous'] = 'анкетата не е анонимна';
$string['feedback_is_not_open'] = 'Анкетата не е отворена';
$string['feedback:mapcourse'] = 'Свързване на курсове с глобални анкети';
$string['feedbackopen'] = 'Отваряне на анкетата';
$string['feedback_options'] = 'Настройки на анкетата';
$string['feedback:receivemail'] = 'Получаване на имейл уведомления';
$string['feedback:view'] = 'Показване на анкета';
$string['feedback:viewanalysepage'] = 'Показване на страницата за анализ след попълване';
$string['feedback:viewreports'] = 'Разглеждане на отчети';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Филтриране по курс';
$string['handling_error'] = 'Възникна грешка при обработката от модул Обратна връзка';
$string['hide_no_select_option'] = 'Скриване възможността "Няма избран"';
$string['horizontal'] = 'Хоризонтално';
$string['importfromthisfile'] = 'Импортиране от този файл';
$string['import_questions'] = 'Импортиране на въпроси';
$string['import_successfully'] = 'Импортирането успешно';
$string['info'] = 'Информация';
$string['infotype'] = 'Вид информация';
$string['insufficient_responses'] = 'Недостатъчно отговори';
$string['insufficient_responses_for_this_group'] = 'Няма достатъчно отговори за тази група';
$string['insufficient_responses_help'] = 'Няма достатъчно отговори за тази група.

За да оставите анкетата анонимна, минимум 2 отговора трябва да бъдат направени.';
$string['item_label'] = 'Етикет';
$string['item_name'] = 'Въпрос';
$string['items_are_required'] = 'Отговарянето на въпросите със звездичка е задължително';
$string['label'] = 'Етикет';
$string['line_values'] = 'Рейтинг';
$string['mapcourse'] = 'Свързване на анкетата с курсова';
$string['mapcourse_help'] = 'По подразбиране формулярите за обратна връзка на Вашата начална страница са достъпни от целия сайт и ще се показват във всички курсове чрез блока за обратна връзка. Можете да накарате формуляра за обратна връзка да се показва принудително, като го направите на прилепен блок, или да ограничите броя на курсовете, в които се показва, като го свържете с определен курс.';
$string['mapcourseinfo'] = 'Тази анкета е достъпна от курсовете на целия сайт чрез блока за обратна връзка. Вие обаче можете да ограничите курсовете, в които се показва, като я свържете с тях. Потърсете курсове и ги свържете с анкетата.';
$string['mapcoursenone'] = 'Не са свързани курсове. Анкетата е достъпно във всички курсове.';
$string['mapcourses'] = 'Свързване на анкетата с курсове';
$string['mapcourses_help'] = 'Щом изберете един курс от намерените, можете да го свържете с тази анкета. Свързаният курс после по всяко време може да се премахне от анкетата.';
$string['mappedcourses'] = 'Свързани курсове';
$string['max_args_exceeded'] = 'Твърде много аргументи. Могат да се обработват максимум до 6 аргумента.';
$string['maximal'] = 'максимално';
$string['messageprovider:message'] = 'Напомняне за обратна връзка';
$string['messageprovider:submission'] = 'Уведомления за обратна връзка';
$string['mode'] = 'Режим';
$string['modulename'] = 'Обратна връзка';
$string['modulenameplural'] = 'Обратни връзки';
$string['movedown_item'] = 'Преместите този въпрос надолу';
$string['move_here'] = 'Преместване тук';
$string['move_item'] = 'Преместване на този въпрос';
$string['moveup_item'] = 'Преместване на този въпрос нагоре';
$string['multichoice'] = 'Множество възможни отговори';
$string['multichoicerated'] = 'Възможни отговори (с рейтинги)';
$string['multichoicetype'] = 'Тип на избора';
$string['multichoice_values'] = 'Възможности за избиране';
$string['multiplesubmit'] = 'Многократно изпълняване';
$string['multiple_submit'] = 'Многократно попълване';
$string['multiplesubmit_help'] = 'Ако е позволено анонимно попълване, потребителите могат да попълват анкетата неопределен брой пъти.';
$string['name'] = 'Име';
$string['name_required'] = 'Името се изисква';
$string['next_page'] = 'Следваща страница';
$string['no_itemlabel'] = 'Няма етикет';
$string['no_itemname'] = 'Няма име на елемента';
$string['no_items_available_yet'] = 'Още не са настроени въпроси';
$string['non_anonymous'] = 'Да - ще се показват с отговорите';
$string['non_anonymous_entries'] = 'няма анонимни отговори';
$string['non_respondents_students'] = 'не отговорили студенти';
$string['notavailable'] = 'тази обратна връзка не е достъпна';
$string['not_completed_yet'] = 'Още не е завършана';
$string['no_templates_available_yet'] = 'Още няма достъпни шаблони';
$string['not_selected'] = 'Няма избран';
$string['not_started'] = 'не започната';
$string['numeric'] = 'Числов отговор';
$string['numeric_range_from'] = 'Интервал от';
$string['numeric_range_to'] = 'Интервал до';
$string['of'] = 'на';
$string['oldvaluespreserved'] = 'Всички стари въпроси и зададени стойности ще бъдат предпазени';
$string['oldvalueswillbedeleted'] = 'Текущите въпроси и всички отговори от Ваши потребители ще бъдат изтрити';
$string['only_one_captcha_allowed'] = 'Само една Captcha е допустима в анкетата';
$string['overview'] = 'Представяне';
$string['page'] = 'Страница';
$string['page_after_submit'] = 'Страница след попълване';
$string['pagebreak'] = 'Разделител на страници';
$string['page-mod-feedback-x'] = 'Всяка страница от модул Обратна връзка';
$string['parameters_missing'] = 'Липсват параметри от';
$string['picture'] = 'Картинка';
$string['picture_file_list'] = 'Списък от картинки';
$string['picture_values'] = 'Изберете един или повече<br />
файлове с картинки от списъка:';
$string['pluginadministration'] = 'Администриране на Обратна връзка';
$string['pluginname'] = 'Обратна връзка';
$string['position'] = 'Позиция';
$string['preview'] = 'Преглед';
$string['preview_help'] = 'При преглед можете да промените реда на въпросите.';
$string['previous_page'] = 'Предишна страница';
$string['public'] = 'Общодостъпен';
$string['question'] = 'Въпрос';
$string['questions'] = 'Въпроси';
$string['radio'] = 'Няколко възможности - един отговор';
$string['radiobutton'] = 'Няколко възможности - един отговор (радио-бутони)';
$string['radiobutton_rated'] = 'Радиобутон (с рейтинг)';
$string['radiorated'] = 'Радиобутон (с рейтинги)';
$string['radio_values'] = 'Отговори';
$string['relateditemsdeleted'] = 'Всички отговори от Ваши потребители на този въпрос също ще бъдат изтрити';
$string['required'] = 'Задължителен';
$string['resetting_data'] = 'Нулиране на отговорите на анкетата';
$string['resetting_feedbacks'] = 'Нулиране на анкетите';
$string['response_nr'] = 'Номер на отговора';
$string['responses'] = 'Отговори';
$string['responsetime'] = 'Време за отговор';
$string['save_as_new_item'] = 'Записване като нов въпрос';
$string['save_as_new_template'] = 'Записване като нов шаблон';
$string['save_entries'] = 'Изпращане на отговорите';
$string['save_item'] = 'Записване на въпроса';
$string['saving_failed'] = 'Запазването пропадна';
$string['saving_failed_because_missing_or_false_values'] = 'Запазването пропадна поради липсващи или неверни стойности';
$string['search_course'] = 'Търсене на курс';
$string['searchcourses'] = 'Търсене на курсове';
$string['searchcourses_help'] = 'Търсене на идентификационен номер или име на курс(ове), които Вие искате да свържете с тази анкета.';
$string['send'] = 'изпращане';
$string['send_message'] = 'изпращане на съобщение';
$string['separator_decimal'] = ',';
$string['show_all'] = 'Показване на всичко';
$string['show_analysepage_after_submit'] = 'Показване аналитична страницата след попълване';
$string['show_entries'] = 'Преглед на отговорите';
$string['show_entry'] = 'Преглед на отговор';
$string['show_nonrespondents'] = 'Показване на не отговорилите';
$string['site_after_submit'] = 'Сайт след изпращане';
$string['sort_by_course'] = 'Подреждане по курс';
$string['start'] = 'Започване';
$string['started'] = 'започната';
$string['stop'] = 'Край';
$string['subject'] = 'Относно';
$string['switch_group'] = 'Превключване на група';
$string['switch_item_to_not_required'] = 'превключване на: НЕзадължителен';
$string['switch_item_to_required'] = 'превключване на: Задължителен';
$string['template'] = 'Шаблон';
$string['templates'] = 'Шаблони';
$string['template_saved'] = 'Шаблонът запазен';
$string['textarea'] = 'Многоредов текст';
$string['textarea_height'] = 'Брой на редовете';
$string['textarea_width'] = 'Ширина';
$string['textfield'] = 'Един ред текст';
$string['textfield_maxlength'] = 'Максимум букви';
$string['textfield_size'] = 'Ширина на текстово поле';
$string['there_are_no_settings_for_recaptcha'] = 'Няма настройки за Captcha';
$string['this_feedback_is_already_submitted'] = 'Вие вече сте изпълнили тази дейност.';
$string['timeclose'] = 'Време на затваряне';
$string['timeclose_help'] = 'Можете да определите време, през което анкетата е достъпна за попълване. Ако отметката не е сложена няма да има ограничение във времето.';
$string['timeopen'] = 'Време на отваряне';
$string['timeopen_help'] = 'Можете да определите време, през което анкетата е достъпна за попълване. Ако отметката не е сложена няма да има ограничение във времето.';
$string['typemissing'] = 'липсваща стойност "тип"';
$string['update_item'] = 'Записване на промените във въпроса';
$string['url_for_continue'] = 'URL за бутон "Продължаване"';
$string['url_for_continue_button'] = 'URL за бутон "Продължаване"';
$string['url_for_continue_help'] = 'По подразбиране, след като анкетата бъде попълнена и изпратена, с бутона "Продължаване" се отива на страницата на курса, но тук можете да определите друг адрес.';
$string['use_one_line_for_each_value'] = '<br />Използвайте по един ред за всеки отговор!';
$string['use_this_template'] = 'Използване на този шаблон';
$string['using_templates'] = 'Използване на шаблон';
$string['vertical'] = 'Вертикално';
$string['viewcompleted'] = 'попълнени анкети';
$string['viewcompleted_help'] = 'Можете да видите попълнените формуляри за обратна връзка, като ги потърсите по курс и/или въпрос. Отговорите от обратните връзки могат да се експортират в Excel файлове.';
