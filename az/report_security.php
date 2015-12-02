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
 * Strings for component 'report_security', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Məsləhət görülür ki, configşphp faylı üçün icazələr quraşdırmadan sonra elə dəyişdirilsin ki, veb - server faylı dəyişdirə bilməsin. Xahiş edirik, nəzərə alın ki, bu serverin təhlükəsizliyini əhəmiyyətli dərəcədə artırmır, ancaq ümumi xarakterli zəiflikləri azalda və ya məhdudlaşdıra bilər.</p>';
$string['check_configrw_name'] = 'config.php faylı yazı üçün əlyetərlidir';
$string['check_configrw_ok'] = 'config.php  PHP skriptləri ilə dəyişdirilə bilməz';
$string['check_configrw_warning'] = 'PHP skriptləri config.php faylını dəyişdirə bilər';
$string['check_cookiesecure_details'] = '<p> əgər Siz, https protokolu ilə qoşulmaya icazə verirsinizsə secure cookies də icazə vermək məsləhət görülür. Siz həm də hhtp dən https-ə yönəltmə də əlavə etməlisiniz.</p>';
$string['check_defaultuserrole_details'] = '<p>Sistemə daxil olan bütün istifadəçilər susmaya görə rol üçün hüquqlar alırlar. Xahiş edirik, əmin olun ki, bu rol üçün heç bir təhlükəli hüquq verilməyib</p> <p>Susmaya görə rol üçün yeganə dəstəklənən köhnəlmiş tip<em>Autentifikasiya edilmiş istifadəçidir</em>. Kursa baxış imkanları qoşulmalı deyil.</p>';
$string['check_defaultuserrole_error'] = 'İstifadəçinin susmaya görə rolu "{$a}" düzgün verilməyib!';
$string['check_defaultuserrole_name'] = 'Bütün istifadəçilər üçün susmaya görə rol';
$string['check_defaultuserrole_notset'] = 'Susmaya görə rol verilməyib';
$string['check_defaultuserrole_ok'] = 'Bütün istifadəçilər üçün susmaya görə rol düzgün verilib.';
$string['check_displayerrors_details'] = '<p>İşçi saytlarda PHP <code> display_errors</code> (səhvləri göstər) sazlama parametrlərini qoşmaq məsləhət görülmür, çünki səhvlər haqqında məlumatlar Sizin server haqqında məxfi informasiyanı aça bilər. </p>';
$string['check_displayerrors_error'] = 'Səhvlərin göstərilməsi üçün PHP parametrləri qoşulub. Onu söndürmək məsləhət görülür.';
$string['check_displayerrors_name'] = 'PHP səhvlərini göstər';
$string['check_displayerrors_ok'] = 'PHP səhvlərinin göstərilməsi söndürülüb';
$string['check_emailchangeconfirmation_details'] = '<p> İstifadəçilərin öz profilində elektron poçt ünvanını dəyişərkən elektron poçt ünvanının təsdiqlənməsi addımı məsləhət görülür. Əgər parametr qoşulmayıbsa spamerlər serverdən spamlar göndərmək üçün istifadə edə bilərlər. </p> <p>Elektron poçt sahəsi autentfikasiya plaginində bağlanmış ola bilər, bu imkana burada baxılmır. </p>';
$string['check_emailchangeconfirmation_error'] = 'İstifadəçilər istənilən elektron poçt ünvünlarını daxil edə bilərlər.';
$string['check_emailchangeconfirmation_info'] = 'istifadəçilər elektron poçt ünvanlarını ancaq icazə verilən domenlərdən daxil edə bilərlər.';
$string['check_emailchangeconfirmation_name'] = 'Elektron poçtun dəyişdirilməsinin təsdiqlənməsi';
$string['check_emailchangeconfirmation_ok'] = 'İstifadəçinin profilində elektron poçt ünvanının dəyişdirilməsinin təsdiqlənməsi';
$string['check_embed_details'] = '<p>Obyektlərin məhdudiyyət olmadan əlavə edilməsi çox təhlükəlidir -  istənilən qeydiyyatdan keçmiş istifadəçi digər istifadəçilərə qarşı XSS - hücumlar edə bilər. İşçi serverlərdə bu parametr qoşulmamalıdır. </p>';
$string['check_embed_error'] = 'Obyektlərin məhdudiyyətsiz əlavə edilməsinə icazə verilib - bu əksər serverlər üçün çox təhlükəlidir';
$string['check_embed_name'] = 'EMBED və OBJECTteqlərinə icazə ver';
$string['check_embed_ok'] = 'Obyektlərin məhdudiyyətsiz əlavə edilməsinə icazə verilmir.';
$string['check_frontpagerole_details'] = 'p> Все вошедшие в систему пользователя получают во всех элементах главной странице права роли для главной страницы. Пожалуйста, удостоверьтесь, что для этой роли  не разрешены никакие опасные права. </p> <p> Рекомендуется, чтобы для этой цели была создана специальная роль, и устаревшие типы ролей не использовалось. </p>';
$string['check_frontpagerole_error'] = 'Düzgün verilməmiş baş səhifə rolu "{$a}" tapıldı!';
$string['check_frontpagerole_name'] = 'Baş səhifə üçün rol';
$string['check_frontpagerole_notset'] = 'Baş səhifə üçün rol verilməyib.';
$string['check_frontpagerole_ok'] = 'Baş səhifə üçün rol düzgün verilməyib.';
$string['check_globals_details'] = '<p>PHP register_globals parametrinin qoşulması PHP çox təhlükəli sazlama parametri sayılır. </p> <p> PHP konfiqurasuyasında <code> register_globals=off> </code> qoşulmuş olmalıdır. Bu parametr Apache/IIS konfiqurasiyasının <code> php.ini </code> faylını və ya <code>.htaccess </code>faylını redaktə etməklə qoşula bilər. </p>';
$string['check_globals_error'] = 'Register globals parametri qoşulmalı DEYİL. Xahiş edirik, dərhal PHP serverin sazlama parametrlərini düzəldin.';
$string['check_globals_name'] = 'Register globals parametri';
$string['check_globals_ok'] = 'Register globals parametri qoşulmayıb';
$string['check_google_details'] = '<p>Google üçün Aç parametri axtarış sistemlərinə qonaq səlahiyyəti olan kurslara daxil olmağa imkan verir. Əgər qonağın daxil olması qadağan edilibsə bu parametrin heç bir əhəmiyyəti yoxdur.</p>';
$string['check_google_error'] = 'Axtarış sisteminə daxil olmaq üçün icazə verilib, ancaq qonağa icazə verilməyib.';
$string['check_google_info'] = 'Axtarış sistemləri qonaq kimi daxil ola bilər';
$string['check_google_name'] = 'Google üçün aç';
$string['check_google_ok'] = 'Axtarış sisteminin daxil olmasına iccazə verilmir.';
$string['check_guestrole_details'] = '<p> Qonaq rolundan sistemə daxil olmamış istifadəçilər və kurslara müvəqqəti daxil olmaq üçün istifadə edilir. Xahiş edirik əmin olun ki, bu rol üçün heç bir təhlükəli hüquq verilməyib. </p> <p> Qonaq üçün yeganə köhnəlmiş rol - <em>Qonaq</em> olur. </p>';
$string['check_guestrole_error'] = 'Qonaq rolu "{$a}" düzgün təyin edilməyib!';
$string['check_guestrole_name'] = 'Qonaq rolu';
$string['check_guestrole_notset'] = 'Qonaq rolu quraşdırılmayıb.';
$string['check_guestrole_ok'] = 'Qonaq rolu düzgün təyin edilib.';
$string['check_mediafilterswf_details'] = '<p> swf-faylların avtomatik olaraq yerləşdirilməsi çox təhlükəlidir - istənilən qeydiyyatdan keçmiş istifadəçi servrin digər istifadəçilərinə qarşı XSS hücumlar həyata keçirə bilər. Xahiş edirik işçi serverlərdə bunu qoşmayın. </p>';
$string['check_mediafilterswf_error'] = 'Flash filtri qoşulub - bu əksər serverlər üçün çox təhlükəlidir.';
$string['check_mediafilterswf_name'] = '.swf media filtri qoşulub';
$string['check_mediafilterswf_ok'] = '.swf media filtri qoşulmayıb';
$string['check_noauth_details'] = '<p><em>Autentfikasiyadan istifadə etmə</em> plagini işçi saytlar üçün nəzərdə tutulmayıb. Əgər bu test saytı deyilsə, xahiş edirik, onu qoşmayın.</p>';
$string['check_noauth_error'] = '<em>Autentfikasiyadan istifadə etmə</em> plagini işçi saytlarda istifadə edilə bilməz.';
$string['check_noauth_name'] = 'Autentfikasiyadan istifadə etmə';
$string['check_noauth_ok'] = '<em>Autentfikasiyadan istifadə etmə</em> plagini qoşulmayıb';
$string['check_openprofiles_details'] = '<p> İstifadəçilərin açıq profillərindən spamerlər sui-istifadə edə bilərlər. Ya <code>Profillərə baxmaq üçün sistemə daxil olmaq lazımdır</code>,  ya da <code>İstifadəçiləri sistemə daxil olmağa məcbur et</code> parametrləri qoşulmuş olmalıdır. </p>';
$string['check_openprofiles_error'] = 'istənilən şəxs sistemə daxil olmadan istifadəçilərin profillərinə baxa bilər.';
$string['check_openprofiles_name'] = 'İstifadəçilərin açıq profilləri';
$string['check_openprofiles_ok'] = 'İstifadəçilərin profilinə baxmazdan əvvəl sistemə daxil olmaq lazımdır';
$string['check_passwordpolicy_details'] = '<p>Məsləhət görülür ki, parollar siyasəti qoşulsun, belə ki, parolun tapılması adətən qeyri qanuni daxil olmaq üçün ən asan üsul ola bilər.Tələbləri çox da artırmayın, bu istifadəçilərin öz parollarını unutmasına və ya yazmasına səbəb ola bilər. </p>';
$string['check_passwordpolicy_error'] = 'Prollar siyasəti verilməyib';
$string['check_passwordpolicy_name'] = 'Parollar siyasəti';
$string['check_passwordpolicy_ok'] = 'Parollar siyasəti qoşulub';
$string['check_passwordsaltmain_details'] = '<p>Parolların çevikliyinin qurqşdırılması onların oğurlanması riskini azaldır.</p>

<p>Parolların çevikliyinin qurqşdırılması üçün aşağıdakı sətri config.php faylına əlavə edin:</p>
<code>$CFG->passwordsaltmain = \'təsadüfi simvolların çoxlu sayından təşkil olunmuş hər hansı çox uzun sətir\';</code>
<p>Təsadüfi simvollar sətri hərflərdən, rəqəmlərdən və digər simvollardan ibarət olmalıdır. Uzunluğu 40-dan az olmayan sətir məsləhət görülür.</p>
<p>xahiş edirik, <a href="{$a}" target="_blank">parolların çevikliyi haqqında sənədləri</a> öyrənin, əgər $CFG->passwordsaltmain parametrini dəyişmək istəyirsinizsə. Quraşdırmadan sonra $CFG->passwordsaltmain parametrini silməyin, əks halda Siz sayta bir daha daxil ola bilməyəcəksiniz!</p>';
$string['check_passwordsaltmain_name'] = 'Parolun çevikliyi';
$string['check_passwordsaltmain_ok'] = 'Parolun çevikliyi quraşdırılıb';
$string['check_passwordsaltmain_warning'] = 'Parolun çevikliyi quraşdırılmayıb';
$string['check_passwordsaltmain_weak'] = 'Parolun çevikliyi  üçün ardıcıllıq etibarlı deyil';
$string['check_riskadmin_detailsok'] = '<p>Xahiş edirik, administratoprların aşağıdakı siyahısını təsdiq edin:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p> Пожалуйста, подтвердите следующий список администраторов системы: </p>{$a->admins}. <p>Administrator rolun sistemin kontekstində təyin etmək məsləhət görülür. Aşağıdakı istifadəçilərə digər kontekstlərdə əsassız administrator rolları verilib:</p> {$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratorlar';
$string['check_riskadmin_ok'] = 'Serverin {$a} administratoru tapıldı';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) rolun təyinatına baxış</a>';
$string['check_riskadmin_warning'] = '{$a->admincount}  server administratoru və {$a->unsupcount} əsaslandırılmamış administrator rolları tapıldı.';
$string['check_riskbackup_detailsok'] = 'İstifadəçi verilənlərinin rezerv kopiyasının yaradılması üçün icazəsi olan rollar yoxdur. Lakin,"moodle/site:doanything" hüququ olan administratorlar bunu edə bilərlər';
$string['check_riskbackup_details_overriddenroles'] = '<p> Bu aktiv yenidən təyin etmələr istifadəçilərə istifadəçi verilənlərini rezerv kopiyaya daxil etmək imkanı verir. Əmin olun ki, bu hüquq vacibdir. </p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p> Sistemin aşağıdakı rolları hal-hazırda istifadəçilərə istifadəçi verilənlərinin rezerv kopiyaya göndərilməsinə imkan verir. Əmin olun ki, bu hüquq vacibdir. </p> {$a}';
$string['check_riskbackup_details_users'] = '<p> Aşağıdakı istifadəçilərin (yuxarıda təyin edilmiş rollara və ya lokal yenidən təyin etmələrə görə) hal-hazırda onların kursunda qeydiyyatdan keçmiş istifadəçilərin şəxsi verilənlərinin rezerv kopiyalarının yaradılması üçün icazəsi var. Əmin olun ki: а) Siz onlara inanırsınz və b) onların qeydiyyat yazıları etibarlı parolla qorunur: </p> {$a}';
$string['check_riskbackup_editoverride'] = '{$a->contextname} kontekstində <a href="{$a->url}">{$a->name}  {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'İstifadəçinin verilənlərinin rezerv kopiyasının yaradılması';
$string['check_riskbackup_ok'] = 'İstifadəçinin verilənlərinin rezerv kopiyasının yaradılmasına icazəsi olan rollar yoxdur';
$string['check_riskbackup_unassign'] = '{$a->contextname} kontekstində <a href="{$a->url}">{$a->fullname} ({$a->email}</a>';
$string['check_riskbackup_warning'] = 'İstifadəçi verilənlərin rezerv kopiyasını yaratmaq üçün icazəsi olan {$a->rolecount} rol, {$a->overridecount} yenidən təyin etmə və {$a->usercount}  istifadəçi tapıldı.';
$string['check_riskxss_details'] = '<p> RISK_XSS ancaq inanılmış istifadəçilərin istifadə edə biləcəyi bütün təhlükəli imkanları göstərir. </p> <p> Xahiş edirik, istifadəçilərin siyahısını təsdiq edin və bir daha əmin olun ki, Siz onlara bu serverdə inanırsınız: </p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS etibarlı istifadəçilər';
$string['check_riskxss_warning'] = 'RISK_XSS - inanılmış istifadəçilər tapıldı - {$a}.';
$string['check_unsecuredataroot_details'] = '<p>dataroot kataloquna şəbəkədən əlyetərlilik olmamalıdır. Kataloqun əlyetərli olmaması üçün ən yaxşı üsul - katoloqdan ümumi veb-kataloqdan kənarda istifadə etməkdir. </p> <p>Kataloqun yerinin dəyişdirilməsi zamanı Siz, müvafiq şəkildə aşağıdakı parametrləri yeniləməlisiniz: <code>$CFG->dataroot</code> в файле <code>config.php</code>. </p>';
$string['check_unsecuredataroot_error'] = 'Sizin dataroot<code>{$a}</code> kataloqunuz düzgün yerləşdirilməyib və şəbəkədən daxil olmaq mümkündür!';
$string['check_unsecuredataroot_name'] = 'Təhlükəli dataroot kataloqu';
$string['check_unsecuredataroot_ok'] = 'dataroot kataloquna şəbəkədən əlyetərlilik olmamalıdır.';
$string['check_unsecuredataroot_warning'] = 'Sizin dataroot<code>{$a}</code> kataloqunuz düzgün yerləşdirilməyib və şəbəkədən daxil olmaq mümkündür!';
$string['configuration'] = 'Konfiqurasiya';
$string['description'] = 'Təsvir';
$string['details'] = 'Ətraflı';
$string['issue'] = 'Mümkün problem';
$string['pluginname'] = 'Təhlükəsizlik haqqında məlumatlar';
$string['security:view'] = 'Təhlükəsizlik hesabatına baxış';
$string['status'] = 'Vəziyyəti';
$string['statuscritical'] = 'Kritik';
$string['statusinfo'] = 'İnformasiya';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Ciddi';
$string['statuswarning'] = 'Xəbərdarlıq';
$string['timewarning'] = 'Verilənlərin emalı bir neçə dəqiqə vaxt apara bilər, xahiş edirik, səbirli olun...';
