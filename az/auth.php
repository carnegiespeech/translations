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
 * Strings for component 'auth', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Mümkün Audentifikasiya plugin-ləri';
$string['alternatelogin'] = 'Əgər siz burada URL veb-səhifəsini daxil etsəniz, o, sayta giriş kimi istifadə olunacaqdır. Bu səhifə <strong>\'{$a}\'</strong>-ya istiqamətlənən və <strong>username</strong> və <strong>password</strong> sahəsinə geri qaytaran ormadan təşkil olmalıdır.<br />Diqqətli olun, əgər buraya səhv URL daxil etsəniz özünüzə sayta daxil olmağa qadağan edə bilərsiniz.<br />Sistemə daxil olmaq üçün standart giriş səhifəsindən istifadə etmək üçün sahəni boş buraxın.';
$string['alternateloginurl'] = 'Alternativ URL';
$string['auth_changepasswordhelp'] = 'Parolun dəyişilməsi barəsində ipucu';
$string['auth_changepasswordhelp_expl'] = '{$a} parolunu unutmuş bütün istifadəçilərə parolun dəyişilməsi barəsində ipucu göstərilsin. O,  <strong>Parolun dəyişilmə səhifəsinin ünvanı</strong>əvəzinə və ya bu linklə bilikdə, ya da ki, Moodle sisteminin parol dəyişilməsinin daxili səhifəsində əks olunacaqdır.';
$string['auth_changepasswordurl'] = 'Parolun dəyişilmə sıhifəsnin ünvanı';
$string['auth_changepasswordurl_expl'] = '{$a} parolunu unutmuş bütün istifadəçilərin göndəriləcəyi URL səhifəsini qeyd edin. <strong> Parolun dəyişilməsi üçün standart giriş səhifəsindən istifadə etmək</strong> parametrini və <strong>Xeyr</strong> qiymətini tənzimləyin';
$string['auth_changingemailaddress'] = 'Szi elektron poçt ünvanının {$a->oldemail} -dan  {$a->newemail} -ə dəyişdirilməsini tələb etmişsiniz. Təhlükəsizlik məqsədilə, onun məhz sizə məxsus olduöuna əmin olmaq üçün biz ismarıcı yeni ünvana gpndəririk. Bu məktubdaki linki açdıqdan dərhal sonra Sizin elektron poçt ünvanınız yenilənəcək.';
$string['auth_common_settings'] = 'Əsas tənzimləmələr';
$string['auth_data_mapping'] = 'Məlumatların istiqamətləndirilməsi';
$string['authenticationoptions'] = 'audentifikasiya tənzimləmələri';
$string['auth_fieldlock'] = 'Qiymətin bloklanması';
$string['auth_fieldlock_expl'] = '<p><b>Qiymətin bloklanması:</b> Bu parametr işə salınarsa, Moodle istifadəçiləri və administratorları bu sahəni bilavasitə redaktə edə bilməyəcəklər. Daxili audentifikasiya sistemindəki məlumatlara nəzarət edirsinizsə bu parametrdən istifadə edin. </p>';
$string['auth_fieldlocks'] = 'İstifadəçi sahələrinin bloklanması';
$string['authinstructions'] = 'Burada hansı istifadəçi adı və paroldan istifadə etmək lazım gəldiyini bilmək üçün Siz bütün istifadəçiləriniz üçün təlimat yaza bilərsiniz Sizin buraya daxil etdiyiniz mətn sistemin giriş səhifəsində görünəcəkdir. Həmin sahəni boş saxlasanız heç bir təlimat görünməyəcəkdir.';
$string['auth_invalidnewemailkey'] = 'Səhv: Əgər siz elektron poçt ünvanının dəyişdirildiyini təsdiqləmək istəyirsinizsə, elektron poçt vasitəsilə sizə göndərilən linki kopyalayarkən səhv etmisiniz. Zəhmət olmasa, ünvanı kopyalayın və yenidən cəhd edin.';
$string['auth_multiplehosts'] = 'Bir neçə kompyuter adlarını və ya İP ünvanlarını qeyd etmək olar. məsələn, host1.com;host2.com;host3.com və ya xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx';
$string['auth_outofnewemailupdateattempts'] = 'Siz elektron poçt ünvanınızı dəyişmək üçün verilən icazə cəhdlərinizi sərf etdiniz. Sizin tələbiniz rədd edilib.';
$string['auth_passwordisexpired'] = 'Sizin parol köhnəlib. Siz parolunuzu indi dəyişmək istəyirsiniz?';
$string['auth_passwordwillexpire'] = 'Parolun istifadə müddəti {$a} gündən sonra bitir. Siz parolunuzu indi dəyişmək istəyirsiniz?';
$string['auth_remove_delete'] = 'Daxili hesab tamamilə silinsin';
$string['auth_remove_keep'] = 'Daxili hesab yadda saxlanılsın';
$string['auth_remove_suspend'] = 'Daxili hesab dayandırılsın';
$string['auth_remove_user'] = 'İstifadəçi daxili mənbədən silindiyi halda, kütləvi sinxronlaşma zamanı istifadəçinin daxili hesab qeydl
ri ilə necə davranılacağını qeyd edin. Əgər onlar yenidən daxili mənbədə görünərlərsə, yalnız dayandırılan istifadəçilər avtomatik olaraq bərpa olunacaq.';
$string['auth_remove_user_key'] = 'Daxili istifadəçi silinmişdir';
$string['auth_sync_script'] = 'Corn skript sinxronlaşması';
$string['auth_updatelocal'] = 'Lokal hesabın yenilənməsi';
$string['auth_updatelocal_expl'] = '<p><b>Lokal hesabın yenilənməsi:</b>Bu parametri işə salsanız, sahələr istifadəçi hər dəfə sistemə daxil olarkən, həm də istifadəçilər sinxronlaşdırılarkən  (daxili audentifikasiya mənbəyi ilə) yenilənəcək. Lokal yenilənmə üçün sahə dəsti bloklanmalıdır.</p>';
$string['auth_updateremote'] = 'Daxili yenilənmə';
$string['auth_updateremote_expl'] = '<p><b>Daxili yenilənmə:</b> Əgər bu parametr işə salınıbsa, dxili audentifikasiya mənbəyindəki məlumat istifadəçi hesabının yenilənməsi zamanı yenilənəcəkdir. Dəyişikliklərə icazə vermək üçün sahələr bloklanmalıdır.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Qeyd:</b>LDAP-dəki daxili məlumatların yenilənməsi üçün bütün istifadəçilərin qeydlərini redaktə etmə hüququna malik istifadəçilər üçün binddn və bindpw quraşırmağınız tələb olunur. Hal-hazırda yenilənmə zamanı çoxmənalı atributlar yadda saxlanılmırç əlavə qiymətlər isə silinir.</p>';
$string['auth_user_create'] = 'İsitfadəçilərin yaradılmasına icazə verilsin';
$string['auth_user_creation'] = 'Yeni (anonim) istifadəçilər daxili audentifikasiya mənbəyində hesab yarada və onları elektron poçt vasitəsilə təsdiqləyə bilərlər. Szi buna icazə versəniz, istifadəçinin yaradılması üçün vacib olan konkret modul parametrini tənzimləməyi də unutmayın.';
$string['auth_usernameexists'] = 'Seçilmiş istifadəçi adı artıq mövcuddur. Başqa birini seçin.';
$string['auto_add_remote_users'] = 'Xarici istifadəçilərin avtomatik əlavə olunması';
$string['changepassword'] = 'Parolun dəyişdirilmə səhifəsinin ünvanı';
$string['changepasswordhelp'] = 'Burada Siz istifadəçi adı və ya parolunu unutmuş istifadəçilərin onları dəyişdirmək və ya bərpa etmək üçün daxil olacaqları linkləri qeyd edə bilərsiniz. Sistemə giriş səhifəsində və şəxsi profil səhifələrində istifadəçilər müvafiq düyməni görəcəklər.  Bu sahəni doldurmasanız həmin düymə görünməyəcəkdir.';
$string['chooseauthmethod'] = 'Audentifikasiya üsulunu seçin';
$string['chooseauthmethod_help'] = 'Bu parametr istifadəçi sistemə daxil olarkən istifadə etdiyi audentifikasiya metodunu təyin edir. Bunun üçün audentifikasiyanın yalnız işə salınmış plugin-lərini seçmək lazımdır. Əks halda, istifadəçi daha sistemə daxil ola bilməyəcəkdir. Bu istifadəçiyə sistemə girişi qadağan etmək üçün "Giriş qadağandır" seçimini edin.';
$string['createpasswordifneeded'] = 'Lazım gələrsə parol yaratmaq';
$string['enterthenumbersyouhear'] = 'Eşitdiyiniz rəqəmləri yazın';
$string['enterthewordsabove'] = 'Yuxarıda gördüyünüz sözləri daxil edin';
$string['errormaxconsecutiveidentchars'] = 'Parol {$a}-dən artıq eyni simvollardan ibarət olmamalıdır.';
$string['errorminpassworddigits'] = 'Parol ən azı {$a} ədəd rəqəmdən ibarət olmalıdır.';
$string['errorminpasswordlength'] = 'Prol ən azı {$a} ədəd simvoldan ibarət olmalıdır.';
$string['errorminpasswordlower'] = 'Parol ən azı {$a} ədəd sətir hərfindən ibarət olmalıdır.';
$string['errorminpasswordnonalphanum'] = 'Parol ən azı {$a} ədəd  qeyri-hərf-rəqəm  simvollarından ibarət olmalıdır.';
$string['errorminpasswordupper'] = 'Parol ən azı {$a} ədəd  böyük hərfdən ibarət olmalıdır.';
$string['errorpasswordupdate'] = 'Parolun yenilənməsi zamanı səhv baş vermişdir; parol dəyişdirilməyib';
$string['forcechangepassword'] = 'Parolun məcburi dəyişdirilməsi';
$string['forcechangepasswordfirst_help'] = 'İstifadəçiləri Moodle-da ilk daxil olarkən parolu dəyişdirməyə məcbur edin.';
$string['forcechangepassword_help'] = 'İstifadəçiləri Moodle-da növbəti dəfə daxil olarkən parolu dəyişdirməyə məcbur edin.';
$string['forgottenpassword'] = 'Əgər siz burada URL veb-səhifəsini daxil itsəniz, ondan unudulmuş sayt parolunun bərpaedilməsi zamanı istifadə ediləcəkdir. Bu tənzimləmə parolların idarəetməsi Moodle xaricində həyata keçirilən saytlar üçün nəzərdə tutulub. Parolun bərpa edilməsinin standart prosedurundan istifadə etmək üçün bu sahıni boş saxlayın.';
$string['forgottenpasswordurl'] = 'Parolun bərpa edilmə səhifəsi';
$string['getanaudiocaptcha'] = 'Audio CAPTCHA əldə edin';
$string['getanimagecaptcha'] = 'CAPTCHA rəsmini əldə etmək';
$string['getanothercaptcha'] = 'Digər CAPTCHA əldə etmək';
$string['guestloginbutton'] = 'Qonaq girişi düyməsi';
$string['incorrectpleasetryagain'] = 'Düzgün deyil. Zəhmət olmasa, bir daha cəhd edin.';
$string['infilefield'] = 'Faylın vacib sahəsi';
$string['informminpassworddigits'] = 'ən azı {$a} rəqəm';
$string['informminpasswordlength'] = 'ən azı {$a} simvol';
$string['informminpasswordlower'] = 'ən azı {$a} kiçik hərf';
$string['informminpasswordnonalphanum'] = 'ən azı {$a} qeyri-hərf-rəqəm simvolları';
$string['informminpasswordupper'] = 'ən azı {$a} böyük hərf';
$string['informpasswordpolicy'] = 'Parol {$a} -dən ibarət olmalıdır';
$string['instructions'] = 'Təlimat';
$string['internal'] = 'Daxili';
$string['locked'] = 'Bloklanmış';
$string['md5'] = 'MD5-şifri';
$string['nopasswordchange'] = 'Parolu dəyişmək olmaz';
$string['nopasswordchangeforced'] = 'Prolu dəyişmədən işinizi davam edə bilməzsiniz, lakin bu dəyişikliyi etmək üçün səhifə əlyetərli deyil. Zəhmət olmasa, sayt administratoru ilə əlaqə saxlayın.';
$string['noprofileedit'] = 'Profil dəyişdirilə bilməz';
$string['ntlmsso_attempting'] = 'NTLM vasitəsilə Single Sign On audentifikasiya cəhdi...';
$string['ntlmsso_failed'] = 'Avtomatik giriş mümkün olmadı, giriş üçün adi səhifədən istifadə edin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO söndürülüb.';
$string['passwordhandling'] = 'Parol emalı sahəsi';
$string['plaintext'] = 'Mətn';
$string['pluginnotenabled'] = '"{$a}" audentifikasiyası plugin-i işə düşməyib.';
$string['pluginnotinstalled'] = '"{$a}" audentifikasiyası plugin-i quraşdırılmayıb.';
$string['potentialidps'] = 'Siz buraya daxil olanadək adətən hansısa digər sistemə daxil olursunuzmu? <br /> Adi yolla daxil olmaq üçün aşağıdaki siyahıdan linki seçin:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA avtomatlaşdırılmış proqramların sui istifadəsinin qarşısını almaq məqsədi daşıyır. Sadəcə olaraq sözləri eyni ardıcıllıqla və boşluqlarla ayrılmış şəkildə daxil edin.

Sözləri ayırd edə bilmirsinizsə, digər CAPTCHA və ya audio-CAPTCHA seçə bilərsiniz .';
$string['selfregistration'] = 'Sərbəst qeydiyyat';
$string['sha1'] = 'SHA-1 şifri';
$string['showguestlogin'] = 'Siz qonağın sistemə  giriş düyməsini ya göstərə bilər ya da gizlədə bilərsiniz';
$string['stdchangepassword'] = 'Parolun dəyişilməsi üçün standart səhifədən istifadə edilsin';
$string['stdchangepassword_expl'] = 'Əgər daxili audentifikasiya sistemi Moodle vasitəsilə parolun dəyişilməsinə imkan verirsə Bəli seçimini edin. Bu parametr "Parolun dəyişilmə səhifəsinin ünvanı" parametrindən üstündür.';
$string['stdchangepassword_explldap'] = 'Qeyd:Əgər LDAP serveri xarici kompyuterdə quraşdırılıbsa şifrələnmiş SSL-tunel (ldaps://) vasitəsilə LDAP-dən istifadə etməyiniz məsləhət görülür.';
$string['unlocked'] = 'Parol açılmışdır';
$string['unlockedifempty'] = 'Əgər boşdursa, parol açılmışdır';
$string['update_never'] = 'Heç zaman';
$string['update_oncreate'] = 'Yaradılarkən';
$string['update_onlogin'] = 'Hər giriş zamanı';
$string['update_onupdate'] = 'Yenilənmə zamanı';
$string['user_activatenotsupportusertype'] = 'audentifikasiya: ldap user_activate() seçilmiş tip istifadəçini dəstəkləmir: {$a}';
$string['user_disablenotsupportusertype'] = 'audentifikasiya: ldap user_disable() seçilmiş tip istifadəçini dəstəkləmir: (...hələ)';
