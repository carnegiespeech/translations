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
 * Strings for component 'auth_cas', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'CAS istifadəçiləri';
$string['accesNOCAS'] = 'Digər istifadəçilər';
$string['auth_cas_auth_user_create'] = 'Xarici istifadəçilərin yaradılması';
$string['auth_cas_baseuri'] = 'Server URİ (əgər  baseUri yoxdursa)<br /> məsələn, CAS serveri cavab verirsə. domaine.fr/CAS/ then<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URİ bazası';
$string['auth_cas_broken_password'] = 'Siz parolunuzu dəyişmədən davam edə bilməzsiniz. Onu dəyişmək üçün mümkün səhifəniz yoxdur. Zəhmət olmasa, Moodle administratoru ilə əlaqə saxlayın.';
$string['auth_cas_cantconnect'] = 'CAS modulunun LDAP hissəsi {$a} serverinə qoşula bilmir.';
$string['auth_cas_casversion'] = 'Versiya';
$string['auth_cas_certificate_check'] = 'Server sertifikatını təsdiqləmək istəyirsinizsə "Bəli" seçimini edin';
$string['auth_cas_certificate_check_key'] = 'Serverin təsdiqlənməsi';
$string['auth_cas_certificate_path'] = 'Server sertifikatını təsdiqləmək üçün CA faylına gedən yol (PEM Formatı)';
$string['auth_cas_certificate_path_empty'] = 'Serverin təsdiqlənməsini işə salmısınızsa, sertifikat yolunu müəyyənləşdirməlisiniz';
$string['auth_cas_certificate_path_key'] = 'Sertifikat yolu';
$string['auth_cas_changepasswordurl'] = 'Parolun dəyişdirilmə səhifəsinin ünvanı';
$string['auth_cas_create_user'] = 'CAS-audentifikasiya olunmuş istifadəçilərini Moodle verilənlər bazasına daxil etmək istiyirsinizsə u parametri işə salın. Əks təqdirdə, yalnız Moodle verilənlər bazasında mövcud olan istifadəçilər sistemə daxil ola bilər.';
$string['auth_cas_create_user_key'] = 'İstifadəçi yaradılsın';
$string['auth_cas_enabled'] = 'CAS audentifikasiyasını istifadə etmək istəyirsinizsə bu parametri işə salın.';
$string['auth_cas_invalidcaslogin'] = 'Üzr istəyirik, siz sistemə daxil ola bilmədiniz - icazə verilməyib';
$string['auth_cas_language'] = 'Seçilmiş dil';
$string['auth_cas_language_key'] = 'Dil';
$string['auth_cas_logincas'] = 'Təhlükəsiz qoşulma';
$string['auth_cas_logoutcas'] = 'Moodle-la əlaqəniz kəsildikdə CAS-dan çıxmaq isəyirsinizsə "Bəli" seçimini edin';
$string['auth_cas_logoutcas_key'] = 'CAS-dan çıxış';
$string['auth_cas_multiauth'] = 'Çoxsaylı audentifikasiya əldə etmək istəyirsinizsə "Bəli" seçimini edin (CAS + digər audentifikasiya)';
$string['auth_cas_multiauth_key'] = 'Çoxsaylı audentifikasiya';
$string['auth_casnotinstalled'] = 'CAS audentifikasiyasından istifadə olunmur. PHP LDAP modulu quraşdırılmayıb.';
$string['auth_cas_port'] = 'CAS server portu';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'CASin proksi rejimindən istifadə edirsinizsə "Bəli" seçimini edin';
$string['auth_cas_proxycas_key'] = 'Proksi rejimi';
$string['auth_cas_server_settings'] = 'CAS server konfiqurasiyası';
$string['auth_cas_text'] = 'Təhlükəsiz qoşulma';
$string['auth_cas_use_cas'] = 'CAS-dan istifadə edilsin';
$string['auth_cas_version'] = 'CAS versiyası';
$string['CASform'] = 'Audentifikasiya seçimi';
$string['noldapserver'] = 'CAS üçün heç bir LDAP serveri konfiqurasiya edilməyib! Sinxronlaşdırma mümkün olmadı.';
$string['pluginname'] = 'CAS severi (SSO)';
