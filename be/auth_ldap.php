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
 * Strings for component 'auth_ldap', language 'be', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Калі Вы жадаеце звязанага карыстальніка для пошуку карыстальнікаў, азначце гэта тут. Напрыклад, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Пароль для звязвання карыстальніка.';
$string['auth_ldap_bind_settings'] = 'Настройкі Bind';
$string['auth_ldap_contexts'] = 'Спіс кантэкстаў, дзе размешчаныя карыстальнікі . Аддзеліце розныя кантэксты \';\'. Напрыклад: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Калі Вы дазволілі стварэнне карыстальнікаў пры пацверджанні праз пошту, вызначыце кантэкст, у які будуць заводзіцца карыстальнікі. Гэты кантэкст павінен адрознівацца ад іншых, каб прадухіліць праблемы з бяспекай. Няма неабходнасці дадаваць, назву кантэксту да ldap_context-пераменным, сістэма будзе шукаць карыстальнікаў ад гэтага кантэксту аўтаматычна.';
$string['auth_ldap_creators'] = 'Спіс групаў, сябрам якіх дазваляецца ствараць новыя курсы. Спіс групаў падзяляйце з дапамогай \';\'. Напрыклад,\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldapdescription'] = 'Гэты метад забяспечвае аўтэнтыфікацыю з дапамогай LDAP-сэрвера. Калі дадзены лагін і пароль маюць моц, ствараецца новы карыстальніцкі ўліковы запіс у базе дадзеных сістэмы. Гэты модуль можа чытаць палі ад LDAP-сэрвера і запаўняць неабходныя палі ў сістэме. У далейшым правяраюцца толькі лагін і пароль';
$string['auth_ldap_expiration_desc'] = 'Выбярыце Не, каб не праводзіць праверку пароля на пратэрмінаваны ён ці не, альбо LDAP, каб правяраць пратэрмінаваны пароль ці не непасрэдна ў LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Колькасць дзён, за якія павінен пароль быць зменены да сканчэння тэрміну сапраўднасці пароля.';
$string['auth_ldapextrafields'] = 'Гэтыя палі дадатковыя. Вы можаце выбіраць папярэдняе запаўненне некаторых палёў карыстальніцкіх дадзеных ад палёў LDAP, паказанага тут. <p>Не запаўняйце гэтае поле, для таго, каб не пераносіць дадзеныя з LDAP.</p><p>У любым выпадку, карыстальнік зможа рэдагаваць усе палі пасля таго, як ён зойдзе ў сістэму.</p>';
$string['auth_ldap_host_url'] = 'Азначце LDAP-хост у выглядзе URL\'а, напрыклад \'ldap://ldap.myorg.com/\' або \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Настройкі ўліковага запісу';
$string['auth_ldap_memberattribute'] = 'Вызначыце карыстальніцкі атрыбут, які вызначае прыналежнасць карыстальніка да групы. Звычайна \'удзельнік\'';
$string['auth_ldap_passwdexpire_settings'] = 'Настройкі тэрміна дзейнасці пароля ў LDAP';
$string['auth_ldap_search_sub'] = 'Азначце значэнні <> 0 калі Вам падабаецца шукаць карыстальнікаў па субкантэкстам.';
$string['auth_ldap_server_settings'] = 'Настройкі LDAP-сервера';
$string['auth_ldap_update_userinfo'] = 'Абнаўляйце карыстальніцкую інфармацыю (Імя, Прозвішча, адрас ..) ад LDAP да сістэмы. Глядзіце /auth/ldap/attr_mappings.php для таго, каб адлюстраваць інфармацыю.';
$string['auth_ldap_user_attribute'] = 'Атрыбут, выкарыстаны для імя/пошук. Звычайна, \'cn\'.';
$string['auth_ldap_user_settings'] = 'Прагляд дадзеных карыстальніка';
$string['auth_ldap_user_type'] = 'Выбраць, каб карыстальнікі захоўваліся ў LDAP. Гэтыя настройкі таксама пазначаюць як дадзеныя пратэрмінаванага ўліковага запісу, стварэння карыстальніка будць працаваць.';
$string['auth_ldap_version'] = 'Версія LDAP пратаколу, якую выкарыстае Вашы сэрвер.';
$string['pluginname'] = 'Выкарыстаць LDAP-сэрвер';
