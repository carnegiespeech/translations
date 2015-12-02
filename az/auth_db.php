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
 * Strings for component 'auth_db', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Qeyd edilmiş audentifikasiya verilənlər bazasına qoşulmaq mümkün olmadı...';
$string['auth_dbchangepasswordurl_key'] = 'Parol dəyişilmə səhifəsinin ünvanı';
$string['auth_dbdebugauthdb'] = 'ADOdb tənzimləməsi';
$string['auth_dbdebugauthdbhelp'] = 'Əgər hər dəfə sistemə daxil olarkən boş səhifə alırsınızsa - ADOdb-nın xarici verilənlər bazası ilə əlaqə tənzimləmələrindən istifadə edin. Bu rejim işlək saytlara şamil edilmir.';
$string['auth_dbdeleteuser'] = '"{$a->name}" id {$a->id} istifadəçisi silinsin';
$string['auth_dbdeleteusererror'] = '"{$a}" istifadəçisinin silinməzi samanı səhv baş vermişdir';
$string['auth_dbdescription'] = 'Bu üsul istifadəçi adı və parolun yoxlanılması üçün xarici verilənlər bazasından istifadə edir. Yeni hesab yaradılarkən sahə məlumatları sistemə köçürülə bilər.';
$string['auth_dbextencoding'] = 'Xarici verilənlər bazasının kodlaşması';
$string['auth_dbextencodinghelp'] = 'Xarici verilənlər bazasında istifadə edilən kodlaşma';
$string['auth_dbextrafields'] = '<p>Bu əlavə sahələrdir. Siz burada qeyd edilmiş istifadəçi verilənlər bazasının bəzi sahələrinin əvvəlcədən doldurulmasını seçə bilərsiniz. </p><p>Susma rejimində tənzimləmələrdən istifadə etmək üçün sahəni doldurmayın.</p>
<p>Hər halda istifadəçi sistemə daxil olduqdan sonra bütün sahələri redaktə edə biləcək.</p>';
$string['auth_dbfieldpass'] = 'Paroldan ibarət sahənin adı';
$string['auth_dbfieldpass_key'] = 'Parol sahəsi';
$string['auth_dbfielduser'] = 'Loqindən ibarət sahənin adı';
$string['auth_dbfielduser_key'] = 'Loqin sahəsi';
$string['auth_dbhost'] = 'Verilənlər bazası serverinin yerləşdiyi şəbəkə adı və ya kompyuter ünvanı.';
$string['auth_dbhost_key'] = 'Verilənlər bazası serveri';
$string['auth_dbinsertuser'] = '"{$a->name}" id {$a->id} istifadəçisi əlavə edilib';
$string['auth_dbinsertusererror'] = '"{$a}" istifadəçisi əlavə edilərkən səhv baş vermişdir';
$string['auth_dbname'] = 'Verilənlər bazasının adı';
$string['auth_dbname_key'] = 'Verilənlər bazasının adı';
$string['auth_dbpass'] = 'Qeyd edilmiş loqinə müvafiq parol';
$string['auth_dbpass_key'] = 'Parol';
$string['auth_dbpasstype'] = '<p>İstifadə olunan parol sahəsinin formatını müəyyən edir. MD5 Heşləməsi PostNuke.</p><p>kimi bir sıra veb-proqramları ilə əlaqə yaratmaq üçün həyata keçirilir. Əgər xarici verilənlər bazasında loqinlər və elektron poçt ünvanlarının saxlanılmasını, parolları isə Moodle sisteminin idarə etməsini istəyirsinizsə "daxili" rejimdən istifadə edin. "Daxili" rejimdən istifadə edərkən xarici verilənlər bazasında elektron poçt ünvanı sahəsini doldurmaq və mütəmadi olaraq admin/cron.php и auth/db/cli/sync_users.php  skriptini işə salmaq <i>lazımdır</i>. Moodle yeni istifadəçilərə elektron poçt vasitəsilə müvəqqəti parollu məktublar göndərəcək.</p>';
$string['auth_dbpasstype_key'] = 'Parol formatı';
$string['auth_dbreviveduser'] = '"{$a->name}" id {$a->id} istifadəçisi bərpa olunub';
$string['auth_dbrevivedusererror'] = '"{$a}" istifadəçisinin bərpası zamanı səhv baş vermişdir';
$string['auth_dbsetupsql'] = 'SQL tənzimləmə əmri';
$string['auth_dbsetupsqlhelp'] = 'SQL-verilənlər bazasının əlavə tənzimləməsi üçün əmrdir, o tez-tez müvafiq kodlaşmanın quraşdırılması zamanı istifadə olunur, məsələn, MySQL və PostgreSQL:<em> SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '"{$a->name}" id {$a->id} istifadəçisi dayandırılıb';
$string['auth_dbsuspendusererror'] = '"{$a->name}" id {$a->id} istifadəçisi dayandırılma səhvi';
$string['auth_dbsybasequoting'] = 'Sybase dırnaqlarından istifadə edin';
$string['auth_dbsybasequotinghelp'] = 'Sybase stilində apastrofun göstərilməsi - Oracle, MS SQL digər bəzi verilənlər bazaları üçün vacibdir.  MySQL üçün istifadə etməyin!';
$string['auth_dbtable'] = 'Verilənlər bazasındaki cədvəllərin adı';
$string['auth_dbtable_key'] = 'Cədvəl';
$string['auth_dbtype'] = 'Verilənlər bazasının tipi (bax. <a href="../lib/adodb/readme.htm#drivers"> uşaqlar üçün ADO db</a> üzrə sənədləşmə)';
$string['auth_dbtype_key'] = 'Verilənlər bazası';
$string['auth_dbupdatinguser'] = '"{$a->name}" id {$a->id} istifadəçisinin yenilənməsi';
$string['auth_dbuser'] = 'Oxuma hüququ olan verilənlər bazasının istifadəçisinin adı';
$string['auth_dbuser_key'] = 'Verilənlər bazasının istifadəçisi';
$string['auth_dbusernotexist'] = 'Mövcud olmayan istifadəçini yeniləmək mümkün deyil: {$a}';
$string['auth_dbuserstoadd'] = 'Əlavə etmək üçün istifadəçilərin qeydləri:{$a}';
$string['auth_dbuserstoremove'] = 'Silmək üçün istifadəçilərin qeydləri:{$a}';
$string['pluginname'] = 'Xarici verilənlər bazası';
