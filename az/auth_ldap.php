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
 * Strings for component 'auth_ldap', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_attrcreators_key'] = 'Atribut yaradıcıları';
$string['auth_ldap_auth_user_create_key'] = 'Xarici istifadəçiləri yaradın';
$string['auth_ldap_bind_dn'] = 'İstifadəçi axtarışı üçün birləşmiş-istifadəçini istəyirsinizsə burada qeyd edin. məsələn, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Ayrılmış ad';
$string['auth_ldap_bind_pw'] = 'İstifadəçilərin birləşməsi üçün parolu';
$string['auth_ldap_bind_pw_key'] = 'Parol';
$string['auth_ldap_bind_settings'] = 'Birləşdirici tənzimləmələr';
$string['auth_ldap_changepasswordurl_key'] = 'Parolun dəyişinlə linki';
$string['auth_ldap_contexts'] = 'İstifadəçilərin yerləşdiyi məzmun siyahısı. Məzmunları \';\' ilə ayırın. Məsələn, \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Məzmunlar';
$string['auth_ldap_create_context'] = 'Əgər Siz poçt vasitəsilə təsdiqlənmiş istifadəçilərin yaradılmasına icazə verirsinizsə, istifadəçilərin yaradılacaqları məzmunları müəyyənləşdirin. Təhlükəsizlik problemlərinin qarşısın almaq üçün bu məzmun digərlərindən fərqlənməlidir. Məzmunun adını ldap_context-  dəyişənlərinə yazmaq vacib deyil. Sismet avtomatik olaraq istifadəçiləri bu məzmundan axtaracaq.';
$string['auth_ldap_create_context_key'] = 'Yeni istifadəçilər üçün məzmun';
$string['auth_ldap_create_error'] = 'LDAP -də yeni istifadəçi yaradılarkən səhv baş vermişdir.';
$string['auth_ldap_creators'] = 'Qrup siyahısı. Bu qrupun üzvlərinə yeni kurslar yaratmaq icazə verilir. Qrup siyahısını \';\' ilə ayırın. Məsələn,\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Yaradıcılar';
$string['auth_ldapdescription'] = 'Bu üsul LDAP serverinin köməyi ilə audentifikasiyanı təmin edir. Əgər verilmiş loqin və parol qüvvədədirsə, sistemin verilənlər bazasında yeni istifadəçi hesabı yaradılır. Bu modul LDAP-serverinin sahələrini oxuya və sistemədə tələb edilən oblastları (sahələri) doldura bilir. Gələcəkdə isə yalnız loqin və parol yoxlanılır.';
$string['auth_ldap_expiration_desc'] = 'Vaxtı keçmiş parolları ləğv etmək və ya birbaşa LDAP serverindən parolun son istifadə tarixini oxumaq üçün "Xeyr" seçimini edin.';
$string['auth_ldap_expiration_key'] = 'Son istifadə tarixi';
$string['auth_ldap_expiration_warning_desc'] = 'Son istifadə tarixindən neçə gün əvvəl xəbərdarlığın göndəriləcəyi təyin olunur';
$string['auth_ldap_expiration_warning_key'] = 'Son istifadə tarixi barəsində xəbərdarlıq';
$string['auth_ldap_expireattr_desc'] = 'Qeyri-məcburi: parolun son istifadə tarini bildirən ldap atributu';
$string['auth_ldap_expireattr_key'] = 'Son istifadə tarinin atributu';
$string['auth_ldapextrafields'] = 'Bu sahələr köməkçidir. Siz burada qeyd edilmiş LDAP sahələrindəki bəzi istifadəçi məlumatları sahələrini əvvəlcədən doldura bilərsiniz. <p>LDAP-dən məlumatları köçürməmək üçün bu sahəni doldurmayın.</p><p>Hər halda, istifadəçi sistemə daxil olduqdan sonra bütün sahələri redaktə edə biləcək.</p>';
$string['auth_ldap_graceattr_desc'] = 'Qeyri-məcburi: gracelogin atributu';
$string['auth_ldap_gracelogin_key'] = 'gracelogin atributu';
$string['auth_ldap_gracelogins_key'] = 'gracelogin-lər';
$string['auth_ldap_groupecreators'] = 'Qrup və ya məzmun siyahısı. Bunların üzvlərinə qrup yaratmaq icazə verilir. Qrupları  \';\' vasitəsi ilə ayırın. məsələn, \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Qrup yaradıcıları';
$string['auth_ldap_host_url'] = 'LDAP serverini URL formatında qeyd edin, məsələn \'ldap://ldap.myorg.com/\' və ya \'ldaps://ldap.myorg.com/\'. Təhlükəsizlik məqsədilə ";" vasitəsilə ayrılmış bir neçə serveri qeyd etmək olar.';
$string['auth_ldap_host_url_key'] = 'Host URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP serverinin istifadə etdiyi kodlaşmanı müəyyən edin. Adətən utf-8, MS AD v2 susma rejimilə cp1252, cp1250 və s. kimi kodlaşma platformasından istifadə edir.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodlaşması';
$string['auth_ldap_login_settings'] = 'Loqin tənzimləmələri';
$string['auth_ldap_memberattribute'] = 'İstifadəçinin hansı qrupa aid olduğunu müəyyənləşdirən İstifadəçi atributunu təyin edin. Adətən "iştirakçı"';
$string['auth_ldap_memberattribute_isdn'] = 'Üzvlük atributlarının qiyməti ya 0, ya da o təyin olunur.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Üzvlük atributu dn istifadə edir';
$string['auth_ldap_memberattribute_key'] = 'Üzvlük atributu';
$string['auth_ldap_noconnect'] = 'LDAP modulu serverə qoşula bilmir: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP modulu heç bir serverə qoşula bilmir: {$a}';
$string['auth_ldap_noextension'] = '<em>PHP LDAP modulu yoxdur. Zəhmət olmasa, bu audentifikasiya plugin-indən istifadə etmək istıyirsinizsə əmin olun ki, o quraşdırılıb və işə salınıb.';
$string['auth_ldap_no_mbstring'] = 'Aktiv kataloqda istifadəçilər yaratmaq istəyirsinizsə Sizə mbstring genişlənməsi lazımdır.';
$string['auth_ldapnotinstalled'] = 'LDAP audentifikasiyasını istifadə etmək mümkün deyil. PHP LDAP modulu quraşdırılmayıb.';
$string['auth_ldap_objectclass'] = 'objectClass-dan ldap_user_type-da istifadəçiləri adlandırmaq və axtarmaq üçün istifadə olunur. Siz bunu dəyişməməlisiniz.';
$string['auth_ldap_objectclass_key'] = 'Obyekt sinfi';
$string['auth_ldap_opt_deref'] = 'Bu parametr axtarış zamanı ləqəblərdən necə istifadə etməyi müəyyənləşdirir. Aşağıdaki qiymətlərdən birini seçin: "Xeyr"(LDAP_DEREF_NEVER) və ya "Bəli" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Fərqli ləqəblər';
$string['auth_ldap_passtype'] = 'LDAP serverindəki yeni və ya dəyişdirilmiş parol formatlarını müəyyənləşdirin.';
$string['auth_ldap_passtype_key'] = 'Parol formatı';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP parolunun son istifadə tarixi tənzimləmələri';
$string['auth_ldap_preventpassindb'] = 'Moodle verilənlər bazasında parolların saxlanılmasının qarşısın almaq üçün "Bəli" seçimini edin.';
$string['auth_ldap_preventpassindb_key'] = 'Parollar gizlədilsin';
$string['auth_ldap_search_sub'] = 'Alt məzmunlardan istifadəçinin axtarışı.';
$string['auth_ldap_search_sub_key'] = 'Alt məzmun axtarışı.';
$string['auth_ldap_server_settings'] = 'LDAP server tənzimləməsi';
$string['auth_ldap_unsupportedusertype'] = 'ldap user_create()  seçilmiş istifadəçi növünü dəstəkləmir: {$a}';
$string['auth_ldap_update_userinfo'] = 'LDAP-dan sistemədək istifadəçi məlumatlarını yeniləyin (Ad, Soyad, ünvan ..) . Məlumatın əks olunması üçün /auth/ldap/attr_mappings.php -ə baxın.';
$string['auth_ldap_user_attribute'] = 'ad/axtarış üçün istifadə olunan atribut. Adətən \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'İstifadəçi atributu';
$string['auth_ldap_user_exists'] = 'LDAP istifadəçi adı artıq mövcuddur.';
$string['auth_ldap_user_settings'] = 'İstifadəçi axtarışı tənzimləmələri';
$string['auth_ldap_user_type'] = 'İstifadəçilərin LDAP-də necə saxlanılacağını seçin. Bu parametr həm də, loqinin son istifadə tarixinin, istifadəçilərin yaradılma işinin necə aparılacağını müəyyən edir.';
$string['auth_ldap_user_type_key'] = 'İstifadəçi növü';
$string['auth_ldap_usertypeundefined'] = 'config.user_type müəyyən edilməyib və ya ldap_expirationtime2unix funksiyası seçilmiş növü dəstəkləmir!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type müəyyən edilməyib və ya ldap_unixi2expirationtime  funksiyası seçilmiş növü dəstəkləmir!';
$string['auth_ldap_version'] = 'Sizin serverinizin istifadə etdiyi LDAP protokol versiyası';
$string['auth_ldap_version_key'] = 'Vesiya';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM domeni ilə sistemə birdəfəlik girişi işə salmaq üçün "Bəli" seçimini edin. <strong>Qeyd:</strong>  bu parametr veb-serverdə işləmək üçün əlavə setup tələb edir. Bunun üçün bax:<a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'İşə salınsın';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO sürətli yolu işə salmaq üçün "bəli" seçimini edin.';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE sürətli yoldur?';
$string['auth_ntlmsso_subnet'] = 'Bu parametr quraşdırılsa, o yalnız bu alt-şəbəkədəki müştərilərlə  SSO işləyəcək. Format: xxx.xxx.xxx.xxx/bitmask. alt-şəbəkələri ","  - vergüllə ayırın.';
$string['auth_ntlmsso_subnet_key'] = 'Alt-şəbəkə';
$string['auth_ntlmsso_type'] = 'Veb-serverdə quraşdırılmış audentifikasiya üsulu istifadəçiləri audentifikasiya edir. (əmin deyilsinizsə NTLM seçin)';
$string['auth_ntlmsso_type_key'] = 'Audentifikasiya növü';
$string['connectingldap'] = 'LDAP sevrerinə qoşulma';
$string['creatingtemptable'] = 'Müvəqqəti cədvəl yaradılsın {$a}';
$string['didntfindexpiretime'] = 'password_expire() heç bir son istifadə tarixi aşkarlamadı.';
$string['didntgetusersfromldap'] = 'LDAP-dən heç bir istifadəçi aşkarlanmadı - səhv?';
$string['gotcountrecordsfromldap'] = 'LDAP-dən  {$a}  qeydləri alındı';
$string['morethanoneuser'] = 'Düzgün deyil! ldap-də birdən artıq istifadəçi qeydi aşkarlanmışdır. Yalnız birinci istifadə olunur.';
$string['needbcmath'] = 'Aktiv kataloqlu loqinləri istifadə etmək üçün sizə BCMath genişlənməsi lazımdır.';
$string['needmbstring'] = 'Aktiv Kataloqdaki parolları dəyişmək üçün Sziə mbstring genişlənməsi lazımdır.';
$string['nodnforusername'] = 'user_update_password() səhvi. {$a->username} üçün DN yoxdur.';
$string['notcalledfromserver'] = 'Veb-serverdən çağırıla bilmir!';
$string['noupdatestobedone'] = 'Ediləcək heç bir yenilənmə yoxdur';
$string['nouserentriestoremove'] = 'Silinəcək heç bir istifadəçi girişi yoxdur';
$string['nouserentriestorevive'] = 'Bərpa ediləcək heç bir istifadəçi girişi yoxdur';
$string['nouserstobeadded'] = 'Əlavə edilkəcək heç bir istifadəçi yoxdur';
$string['ntlmsso_attempting'] = 'NTLM vasitəsilə Birdəfəlik Girişə cəhd etmək';
$string['ntlmsso_failed'] = 'Avto-loqin mümkün olmadı, standart loqin səhifəsi ilə cəhd edin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO söndürülüb.';
$string['ntlmsso_unknowntype'] = 'Naməlum ntlmsso  növü!';
$string['pluginname'] = 'LDAP serveri';
$string['pluginnotenabled'] = 'Plugin işə salınmayıb!';
$string['renamingnotallowed'] = 'LDAP-də istifadəçinin yenidən adlandırılması icazə verilmir.';
$string['rootdseerror'] = 'Aktiv Kataloq üçün rootDSE tələbinin səhvi';
$string['updatepasserror'] = 'user_update_password() səhvi. Səhv kodu:{$a->errno}; Səhv sətiri: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Parolun son istifadə tarixi oxunarkən səhv baş vermişdir user_update_password() . Səhv kodu: {$a->errno}; Səhv sətiri: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Son istifadə tarixinin dəyişdirilməsi zamanı səhv baş vermişdir user_update_password(). Səhv kodu: {$a->errno}; Səhv sətiri: {$a->errstring}';
$string['updateremfail'] = 'LDAP qyedlərini yeniləyərkə səhv baş vermişdir. Səhv kodu: {$a->errno}; Səhv sətiri: {$a->errstring}<br/>Açar ({$a->key}) - əvvəlki moodle qiyməti:\'{$a->ouvalue}\' yeni qiymət: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'LDAP-nin {$a->key} ikili sahə ilə yenilənməsi mümkün olmadı; əvvəlki moodle qiyməti:\'{$a->ouvalue}\'';
$string['updateusernotfound'] = 'Xarici yenilənmə zamanı istifadəçi aşkarlanmadı. Ətraflı məlumat üçün: axtarış bazası:\'{$a->userdn}\'; axtarış filtiri: \'(objectClass=*)\'; axtarış atributu: {$a->attribs}';
$string['useracctctrlerror'] = '{$a} üçün istifadəçi hesabının idarəetməsi səhvi';
$string['user_activatenotsupportusertype'] = 'ldap user_activate() seçilmiş istifadəçi növünü dəstəkləmir: {$a}';
$string['user_disablenotsupportusertype'] = 'ldap user_disable() seçilmiş istifadəçi növünü dəstəkləmir: {$a}';
$string['userentriestoadd'] = 'Əlavə ediləcək istifadəçi qyedləri:{$a}';
$string['userentriestoremove'] = 'Silinəcək istifadəçi qeydləri:{$a}';
$string['userentriestorevive'] = 'Bərpa ediləcək istifadəçi qeydləri:{$a}';
$string['userentriestoupdate'] = 'Yenilənəcək istifadəçi qeydləri: {$a}';
$string['usernotfound'] = 'LDAP-də istifadəçi aşkarlanmadı';
