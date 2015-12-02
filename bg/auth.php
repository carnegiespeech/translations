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
 * Strings for component 'auth', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Налични добавки за удостоверяване';
$string['alternatelogin'] = 'Ако въведете URL адрес в това поле, той ще бъде използван като страница за влизане в този сайт.  Страницата трябва да съдържа html форма, която има свойство action, равно на  "<strong>{$a}</strong>"  и връща полета <strong>username</strong> и <strong>password</strong>.<br /> Внимавайте да не въведете грешен URL адрес, тъй като може да блокирате достъпа си до този сайт.<br />Оставете полето празно, ако искате да ползвате  страницата за влизане в системата по подразбиране.';
$string['alternateloginurl'] = 'Алтернативен URL за влизане';
$string['auth_changepasswordhelp'] = 'Помощ за смяна на паролата';
$string['auth_changepasswordurl'] = 'URL за смяна на паролата';
$string['auth_changingemailaddress'] = 'Вие сте пожелали промяна на имейл адрес, от {$a->oldemail} на {$a->newemail}. От съображения за сигурност Ви изпращаме имейл съобщение на новия адрес, за да потвърдите, че той е Ваш. Имейл адресът Ви ще бъде променен веднага след като отворите URL адреса, изпратен Ви в това съобщение.';
$string['auth_common_settings'] = 'Общи настройки';
$string['auth_data_mapping'] = 'Съответствие на полетата с данни';
$string['auth_fieldlock'] = 'Заключване на стойността';
$string['auth_fieldlock_expl'] = '<p><b>Заключване на стойността:</b> Ако е зададено, ще се отмени възможността потребителите и администраторите пряко да редактират стойността. Използвайте тази възможност ако тези данни се поддържат чрез външна система за удостоверяване.</p>';
$string['auth_fieldlocks'] = 'Заключване на полетата';
$string['auth_fieldlocks_help'] = '<p>Вие можете да заключвате полетата с данни на потребителите. Това е полезно за сайтове, на които данните на потребителите се поддържат ръчно от администраторите, чрез редактиране на записите или чрез качване от файл. Ако заключите задължително изисквани от Moodle полета, осигурете тази данни да се въвеждат при създаване на потребителския профил, иначе профилът ще бъде неизползваем.</p><p>Разгледайте възможността да зададете "Отключено ако е празно", за да избегнете този проблем.</p>';
$string['authinstructions'] = 'Тук можете да добавите инструкции за Вашите потребители, така че те да знаят кое потребителско име и парола те би следвало да използват. Текстът, който ще въведете тук, ще се появи на страницата за влизане в системата. Ако оставите полето непопълнено, няма да се показват инструкции.';
$string['auth_invalidnewemailkey'] = 'Грешка: ако се опитвате да потвърдите промяна на имейл адрес, вероятно сте сгрешили при копирането на URL адреса, който Ви изпратихме чрез съобщение на новата поща. Моля, копирайте адреса и опитайте отново.';
$string['auth_multiplehosts'] = 'Може да се посочат и повече сървъри (например: host1.com;host2.com;host3.com или xxx.xxx.xxx.xxx;yyy.yyy.yyy.yyy)';
$string['auth_outofnewemailupdateattempts'] = 'Вие превишихте позволения брой опити да промените Вашия имейл адрес. Вашата заявка за промяна е отменена.';
$string['auth_passwordisexpired'] = 'Вашата парола е изтекла. Искате ли да промените паролата си сега?';
$string['auth_passwordwillexpire'] = 'Вашата парола ще изтече след {$a} дни. Искате ли да промените паролата си сега?';
$string['auth_remove_delete'] = 'Изтриване напълно на вътрешния';
$string['auth_remove_keep'] = 'Запазване на вътрешния';
$string['auth_remove_suspend'] = 'Блокиране на вътрешния';
$string['auth_remove_user'] = 'Изберете какво да се прави с вътрешните профили на потребителите по време на масово синхронизиране, когато потребителите бъдат изтрити от външната база данни. Само блокираните потребители автоматично се активират, ако се появят отново във външната база данни.';
$string['auth_remove_user_key'] = 'Ако е премахнат потребител от външната база данни';
$string['auth_sync_script'] = 'Cron script за синхронизиране';
$string['auth_updatelocal'] = 'Актуализиране на вътрешния запис';
$string['auth_updatelocal_expl'] = '<p><b>Актуализиране на вътрешния запис:</b> Ако е разрешено, полето във вътрешния запис ще се актуализира при всяко влизане на потребителя или синхронизиране на данните за потребителите с външната база данни. Добре е такова поле да се заключи.</p>';
$string['auth_updateremote'] = 'Актуализиране на външния запис';
$string['auth_updateremote_expl'] = '<p><b>Актуализиране на външния запис:</b> Ако е разрешено, записът във външната база данни ще бъде актуализиран при всяко променяне на полето в профила на потребителя. Полетата трябва да са отключени, за да могат да се редактират.</p>';
$string['auth_user_create'] = 'Позволяване създаване на потребител';
$string['changepassword'] = 'URL за смяна на паролата';
$string['changepasswordhelp'] = 'Тук можете да посочите адрес, на който Вашите потребители биха могли да възстановят или да сменят своите потребителски имена и пароли в случай, че ги забравят. Този адрес ще се покаже като хипервръзка на страницата за влизане и на страницата на потребителя. Ако оставите това поле празно няма да се показва хипервръзка.';
$string['chooseauthmethod'] = 'Избор на метод за удостоверяване';
$string['chooseauthmethod_help'] = 'Тази настройка определя метода за удостоверяване, използван при влизане на потребителя. Могат да се избират само разрешени добавки. В противен случай потребителят няма да е в състояние да влезе в системата. За да блокирате потребителя, изберете "Без достъп"';
$string['createpasswordifneeded'] = 'Създаване на парола ако трябва';
$string['emailchangecancel'] = 'Отмени промяната на e-mail адреса';
$string['emailchangepending'] = 'Промяна в очакване. Отворете имейла, изпратен до Вас на адрес {$a->preference_newemail}';
$string['emailnowexists'] = 'Имейл адресат, който се опитахте да зададете във Вашия профил е зададен от друг потребител през времето от Вашата първоначална заявка. Вашата заявка е анулиране, но можете да направите нова с друг имейл адрес.';
$string['emailupdate'] = 'Промяна на e-mail адрес';
$string['emailupdatemessage'] = 'Уважаема/и {$a->fullname},

Поискали сте промяна на e-mail адреса на Вашата потребителска регистрация в  {$a->site}. Моля отворете във Вашия браузър долния URL адрес, за да потвърдите промяната.

{$a->url}';
$string['emailupdatesuccess'] = 'E-mail адресът на потребител <em>{$a->fullname}</em>  беше успешно променен на <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Потвърждение за промяна на e-mail адрес на {$a->site}';
$string['enterthenumbersyouhear'] = 'Въведете числата, които чувате';
$string['enterthewordsabove'] = 'Въведете думите, изобразени по-горе';
$string['errormaxconsecutiveidentchars'] = 'Паролите трябва да съдържат най-много {$a} последователни идентични символа.';
$string['errorminpassworddigits'] = 'Паролите трябва да имат най-малко {$a} цифри.';
$string['errorminpasswordlength'] = 'Паролите трябва да са дълги най-малко {$a} символа.';
$string['errorminpasswordlower'] = 'Паролите трябва да имат най-малко {$a} малки букви.';
$string['errorminpasswordnonalphanum'] = 'Паролите трябва да имат най-малко {$a} не-буквеноцифрови символа.';
$string['errorminpasswordupper'] = 'Паролите трябва да имат най-малко {$a} главни букви.';
$string['errorpasswordupdate'] = 'Грешка при обновяване на парола, паролата не е променена.';
$string['forcechangepassword'] = 'Наложи смяна на паролата';
$string['forcechangepasswordfirst_help'] = 'Принуждава потребителите да сменят паролата при тяхното първо влизане в Moodle.';
$string['forcechangepassword_help'] = 'Принуждава потребителите да сменят паролата при тяхното следващо влизане в Moodle.';
$string['forgottenpassword'] = 'Ако напишете уеб адрес тук, той ще се използва като страница за възстановяване на изгубена парола за този сайт. Това се прилага за сайтове, при които с паролите се работи изцяло извън Moodle. Оставете полето празно, ако искате да използвате страницата за възстановяване на паролата  по подразбиране.';
$string['forgottenpasswordurl'] = 'URL адрес за възстановяване на забравена парола';
$string['getanaudiocaptcha'] = 'Получаване на аудио CAPTCHA';
$string['getanimagecaptcha'] = 'Получаване на CAPTCHA изображение';
$string['getanothercaptcha'] = 'Получаване на друга CAPTCHA';
$string['guestloginbutton'] = 'Бутон за вход като гост';
$string['incorrectpleasetryagain'] = 'Неправилно. Моля, опитайте отново.';
$string['informminpassworddigits'] = 'най-малко {$a} цифри';
$string['informminpasswordlength'] = 'най-малко {$a} символа';
$string['informminpasswordlower'] = 'най-малко {$a} малки букви';
$string['informminpasswordnonalphanum'] = 'най-малко {$a} не-буквеноцифрови символа';
$string['informminpasswordupper'] = 'най-малко {$a} главни букви';
$string['informpasswordpolicy'] = 'Паролата трябва да съдържа {$a}';
$string['instructions'] = 'Инструкции';
$string['internal'] = 'Вътрешен';
$string['locked'] = 'Заключен';
$string['md5'] = 'MD5 хеш';
$string['nopasswordchange'] = 'Паролата не може да бъде променяна';
$string['nopasswordchangeforced'] = 'Не можете да продължите без да се променили паролата, обаче няма налична страница за промяната и. Моля, свържете се с Вашия Moodle администратор.';
$string['noprofileedit'] = 'Профилът не може да бъде редактиран';
$string['ntlmsso_failed'] = 'Автоматичното влизане в системата е неуспешно, опитайте страницата с нормалното влизане.';
$string['ntlmsso_isdisabled'] = 'NTLM SSO е забранен.';
$string['plaintext'] = 'Обикновен текст';
$string['pluginnotenabled'] = 'Добавка за удостоверяване "{$a}" не е разрешена.';
$string['pluginnotinstalled'] = 'Добавка за  удостоверяване "{$a}" не е инсталирана.';
$string['potentialidps'] = 'Влизане с вашия профил от:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA предпазва от злоупотреби от страна на автоматични програми. Необходимо е само да въведете думите от картинката в същия ред, отделени с интервал.

Ако не сте сигурни кои са думите, щракнете върху "Получаване на нова CAPTCHA", или "Получаване на аудио CAPTCHA" за да чуете какви символи да въведете.';
$string['selfregistration'] = 'Саморегистриране';
$string['selfregistration_help'] = 'Ако е избрана добавка за удостоверение, позволяваща саморегистрация, например по имейл, това позволява на потенциалните потребители да създават потребителски регистрации. Тогава ще има вероятност от регистрация на спамери, които ще използват форуми, блогове и др. за спам. За да се избегне този риск, саморегистрацията трябва да е забранена или ограничена от настройката <em>Разрешени имейл домейни</em>';
$string['showguestlogin'] = 'Можете за скриете или покажете бутона за вход като гост на страницата за вход.';
$string['stdchangepassword'] = 'Използване на стандартната страница за промяна на паролата';
$string['suspended'] = 'Блокиран профил';
$string['suspended_help'] = 'Потребителите с блокирани профили не могат да влизат на сайта и да ползват услуги, всичките им изпратени съобщения се отменят.';
$string['unlocked'] = 'Отключено';
$string['unlockedifempty'] = 'Отключено ако е празно';
$string['update_never'] = 'Никога';
$string['update_oncreate'] = 'При създаване';
$string['update_onlogin'] = 'На всяко влизане в системата';
$string['update_onupdate'] = 'При обновяване';
