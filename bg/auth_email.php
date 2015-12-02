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
 * Strings for component 'auth_email', language 'bg', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'Потвърждаването по електронна поща е методът за регистриране по подразбиране. Когато потребителят се регистрира, той избира свое потребителско име и парола и до електронния му адрес се изпраща писмо за потвърждение. В писмото се съдържа защитена връзка към страница, на която потребителят може да потвърди своята регистрация. При следващи влизания в системата, потребителското име и паролата се сравняват със стойностите, съхранени в базата данни на Moodle.';
$string['auth_emailnoemail'] = 'Неуспех при изпращането на e-mail до Вас!';
$string['auth_emailrecaptcha'] = 'Добавя видим или звуков елемент за потвърждаване, че формата за саморегистриране се попълва от човек, а не автоматично от компютър. Предпазва сайта от спам. Вижте http://www.google.com/recaptcha/learnmore за повече подробности.</br>
<em>Изисква PHP разширението cURL</em>';
$string['auth_emailrecaptcha_key'] = 'Включване на reCAPTCHA елемент';
$string['auth_emailsettings'] = 'Настройки';
$string['pluginname'] = 'Саморегистриране по е-поща';
