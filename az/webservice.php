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
 * Strings for component 'webservice', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Əlyetərlilik nəzarətini ləğv et';
$string['actwebserviceshhdr'] = 'Veb-xidmətlərin aktiv protokolları';
$string['addaservice'] = 'Xidmət əlavə edin';
$string['addcapabilitytousers'] = 'İstifadəçilərin hüquqlarını yoxlayın';
$string['addcapabilitytousersdescription'] = 'İstifadəçilərin iki hüququ olmalıdır - "webservice:createtoken" və istifadə edilən protokolla əlaqədar hüquq, məsələn, "webservice/rest:use", "webservice/soap:use". Bu məqsədlə  "web services" rolu yaradın, ona müvafiq hüquqlar verin və onu "web services" istifadəçisinə qlobal rol kimi təyin edin.';
$string['addfunction'] = 'Funksiya əlavə et';
$string['addfunctionhelp'] = 'Xidmətə əlavə ediləcək funksiyanı seçin';
$string['addfunctions'] = 'Funksiyalar əlavə et';
$string['addfunctionsdescription'] = 'Yeni yaradılmış xidmət üçün lazım olan funksiyaları seçin.';
$string['addrequiredcapability'] = 'Lazım olan hüquqların təyin edilməsi (ləğv edilməsi)';
$string['addservice'] = 'Yeni xidmət əlavə et: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = '"{$a}" xidmətinə funksiya əlavə et';
$string['allusers'] = 'Bütün istifadəçilər';
$string['amftestclient'] = 'AMF test klienti';
$string['arguments'] = 'Arqumentlər';
$string['authmethod'] = 'Autentfikasiya üsulu';
$string['checkusercapability'] = 'İstifadəçinin hüquqlarını yoxlayın';
$string['checkusercapabilitydescription'] = 'İstifadəçinin istifadedilən protokollarla əlaqəli, müvafiq hüquqları olmalıdır, məsələn, webservice/rest:use", "webservice/soap:use".Bu məqsədlə  "web services" rolu yaradın, ona müvafiq hüquqlar verin və onu "web services" istifadəçisinə qlobal rol kimi təyin edin.';
$string['configwebserviceplugins'] = 'Təhlükəsizlik nöqteyi-nəzərindən ancaq istifadə edilən protokolları qoşun.';
$string['context'] = 'Kontekst';
$string['createservicedescription'] = 'Veb xidmətin funksiyalar dəstini verin. Bu istifadəçiyə yeni xidmətə müraciət üçün imkan verir.<strong>Xidmət əlavə et</strong> səhifəsində "Qoşulub" və "Ancaq icazə verilmiş istifadəçilər" parametrlərini qeyd edin. "Heç bir əlavə hüquqlar tələb edilmir" variantını seçin.';
$string['createserviceforusersdescription'] = 'Veb xidmətin funksiyalar dəstini verin. Bu istifadəçiyə yeni xidmətə müraciət üçün imkan verir.<strong>Xidmət əlavə et</strong> səhifəsində "Qoşulub" qey edin. Ancaq icazə verilmiş istifadəçilər" parametrini qeyd etməyin. "Heç bir əlavə hüquqlar tələb edilmir" variantını seçin.';
$string['createtoken'] = 'Açar yarat';
$string['createtokenforuser'] = 'İstifadəçi üçün açar yarat';
$string['createtokenforuserdescription'] = 'Veb-xidmət istifadəçisi üçün açar yarat';
$string['createuser'] = 'Xüsusi istifadəçi yarat';
$string['createuserdescription'] = 'Moodle idarə etmək üçün sistemi təmsil etmək üçün xüsusi istifadəçi tələb olunur.';
$string['default'] = 'Susmaya görə - "{$a}"';
$string['deleteaservice'] = 'Xidməti sil';
$string['deleteservice'] = 'Xidməti sil:{$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Xidmətin silinməsi bu xidmətlə əlaqəli bütün açarların silinməsinə gətirəcək. Siz doğrudan da "{$a}" xarici xidmətini silmək istəyirsiniz?';
$string['deletetokenconfirm'] = 'Siz doğrudan da <strong>"{$a->service}"</strong> xidməti üçün <strong>{$a->user}</strong> istifadəçinin açarını silmək istəyirsiniz?';
$string['disabledwarning'] = 'Veb-xidmətin bütün protokolları söndürülüb. "Veb-xidmətləri qoş" parametri "Administrasiya - Genişləndirilmiş imkanlar" səhifəsindədir.';
$string['doc'] = 'Sənədləşmə';
$string['docaccessrefused'] = 'Sizə bu açarla əlaqəli sənədləşməyə baxmağa icazə verilməyib.';
$string['documentation'] = 'veb-xidmətin sənədləşmələri';
$string['editaservice'] = 'Xidməti redaktə et';
$string['editservice'] = 'Xidməti redaktə et: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Qoşulub';
$string['enabledocumentation'] = 'Tərtibatçılar üçün informasiyanı qoş';
$string['enabledocumentationdescription'] = 'Qoşulmuş protokollar üçün veb-xidmətdən istifadə üzrə ətraflı sənədləşmələr əlyetərlidir.';
$string['enableprotocols'] = 'Protokolları qoş';
$string['enableprotocolsdescription'] = 'Ən azı bir protokol qoşulmalıdır. Təhlükəsizlik nöqteyi nəzərindən ancaq istifadə edilən protokolları qoşmaq məsləhət görülür.';
$string['enablews'] = 'Veb-xidməti qoş';
$string['enablewsdescription'] = 'Veb xidməti "Administrasiya- Genişləndirilmiş imkanlar" səhifəsində qoşmaq lazımdır.';
$string['entertoken'] = 'Təhlükəsizlik açarını daxil edin:';
$string['error'] = 'Səhv: {$a}';
$string['errorcatcontextnotvalid'] = 'Siz (kateqoriya kurs id :{$a->catid}) kateqoriyasının kontekstində funksiyaları icra edə biməzsiniz. Kontekstin səhvləri haqqında məlumat: {$a->message}';
$string['errorcodes'] = 'Səhv haqqında məlumat';
$string['errorcoursecontextnotvalid'] = 'Siz (kurs id :{$a->catid}) kursunun kontekstində funksiyaları icra edə biməzsiniz. Kontekstin səhvləri haqqında məlumat: {$a->message}';
$string['errorinvalidparam'] = 'Yolverilməz parametr "{$a}".';
$string['errornotemptydefaultparamarray'] = '"{$a}" adlı parametr veb -xidmətin təsvirindətək və ya çoxsaylı struktur olur. Susmaya görə ancaq boş massivdən istifadə edilə bilər. Veb-xidmətin sənədləşmələri ilə yoxlayın.';
$string['erroroptionalparamarray'] = '"{$a}" adlı parametr veb -xidmətin təsvirindətək və ya çoxsaylı struktur olur. O, VALUE_OPTIONAL şəklində quraşdırıla bilməz. Veb-xidmətini təsvirini oxuyun.';
$string['execute'] = 'İcra et';
$string['executewarnign'] = 'DİQQƏT: Əgər Siz, "İcra et", düyməsini sıxsanız, verilənlər bazası dəyişdiriləcək və dəyişikliklər avtomatik olaraq ləğv edilə bilməz!';
$string['externalservice'] = 'Xarici xidmət';
$string['externalservicefunctions'] = 'Xarici xidmətin funksiyaları';
$string['externalservices'] = 'Xarici xidmətlər';
$string['externalserviceusers'] = 'Xarici xidmətin istifadəçiləri';
$string['failedtolog'] = 'Daxil olmaq mümkün olmadı';
$string['function'] = 'Funksiyalar';
$string['functions'] = 'Funksiyalar';
$string['generalstructure'] = 'Əsas struktur';
$string['information'] = 'İnformasiya';
$string['invalidiptoken'] = 'Açar etibarlı deyil - bu IP ünvana icazə verilməyib.';
$string['invalidtimedtoken'] = 'Açar etibarlı deyil - müddəti bitib';
$string['invalidtoken'] = 'Açar etibarlı deyil - açar tapılmadə.';
$string['invalidtokensession'] = 'Açardan istifadə edilməsinə əsaslanan seans yolverilməzdir - seans tapılmadı və ya müddəti bitib.';
$string['iprestriction'] = 'IP- ünvana məhdudiyyət';
$string['iprestriction_help'] = 'İstifadəçiyə göstərilən IP - ünvanlardan veb-xidmətləri çağırmaq lazım olacaq.';
$string['key'] = 'Açar';
$string['keyshelp'] = 'Açarlardan xarici qoşulmalardan Sizin Moodle istifadəçi qeydiyyatınıza daxil olmaq üçün istifadə edilir.';
$string['manageprotocols'] = 'Protokolların idarə edilməsi';
$string['managetokens'] = 'Açarların idarə edilməsi';
$string['missingcaps'] = 'Hüquqları yoxdur';
$string['missingcaps_help'] = 'Seçilmiş istiffadəçidə olmayan xidmətlərdən istifadə etmək üçün lazım olan hüquqların siyahısı. Çatışmaya hüquqlar istifadəçinin roluna əlavə edilməlidir ki, o xidmətdən istifadə edə bilsin.';
$string['missingpassword'] = 'Parol yoxdur';
$string['missingusername'] = 'İstifadəçi adı yoxdur';
$string['norequiredcapability'] = 'Heç bir əlavə hüquq tələb olunmur';
$string['notoken'] = 'Təhlükəsizlik açarlarının siyahısı boşdur';
$string['onesystemcontrolling'] = 'Bir sistem təhlükəsizlik açarı ilə Moodle saytına nəzarət edir';
$string['print'] = 'Hamısını çap et';
$string['protocol'] = 'Protokol';
$string['requiredcapability'] = 'Hüquq lazımdır';
$string['requiredcapability_help'] = 'Əgər parametr qoşulubsa, ancaq burada göstərilən hüquqları olan istifadəçilər xidmətdən istifadə edə bilər.';
$string['requiredcaps'] = 'Vacib hüquqlar';
$string['restrictedusers'] = 'Ancaq səlahiyət verilmiş istifadəçilər';
$string['restrictedusers_help'] = 'Bu parametr təyin edir ki, təhlükəsizlik açarlarının idarə edilməsi səhifəsində bu xidmət üçün, veb-xidmətin açarını yaratmaq hüququ olan bütün istifadəçilər və ya ancaq səlahiyət verilmiş istifadəçilər açar yarada bilər.';
$string['securitykey'] = 'Təhlükəsizlik açarı';
$string['securitykeys'] = 'Təhlükəsizlik açarları';
$string['selectauthorisedusers'] = 'Səlahiyət verilmiş istifadəçiləri seçin';
$string['selectservice'] = 'Xidməti seçin';
$string['step'] = 'Addım';
$string['validuntil_help'] = 'Əgər parametr qoşulubsa, bu istifadəçi üçün xidmət göstərilən tarixdən sonra aktiv olmayacaq';
$string['webservice'] = 'Veb-xidmət';
$string['webservices'] = 'Veb-xidmətlər';
$string['webservicesoverview'] = 'Xülasə';
$string['webservicetokens'] = 'Veb-xidmətin açarları';
