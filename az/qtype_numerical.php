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
 * Strings for component 'qtype_numerical', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Sualın (sualların) {no} variantını (variantlarını) əlavə et';
$string['addmoreunitblanks'] = '{no} ölçü vahidi (vahidləri) əlavə et';
$string['answermustbenumberorstar'] = 'cavab ədəd və ya "*" olmalıdır.';
$string['answerno'] = 'Cavab  {$a}';
$string['decfractionofquestiongrade'] = 'suala görə qiymətin onluq kəsr şəklində (0-dan 1-dək)';
$string['decfractionofresponsegrade'] = 'cavaba görə qiymətin onluq kəsr şəklində (0-dan 1-dək)';
$string['editableunittext'] = 'Daxil etmə sahəsi';
$string['errornomultiplier'] = 'Siz bu ölçü vahidi üçün vuran göstərməlisiniz';
$string['errorrepeatedunit'] = 'Eyni adlı iki ölşü vahidi ola bilməz';
$string['leftexample'] = 'SOLDAN $1.00 kimi';
$string['manynumerical'] = 'Ancaq vacib olmayan ölşü vahidini nəzərə almaqla ƏDƏDİ CAVAB qiymətləndirilir';
$string['noneditableunittext'] = '1 Vahidi üçün mətn yoxdur';
$string['nonvalidcharactersinnumber'] = 'Ədəddə yolverilməz simvollar var';
$string['notenoughanswers'] = 'Siz ən azı bir cavab variantı daxil etməlisiniz';
$string['nounitdisplay'] = 'Ölşü vahidini qiymətləndirmə';
$string['numericalmultiplier'] = 'Vuran';
$string['numericalmultiplier_help'] = 'Vuran - düzgün ədədi cavabın vurulacağı əmsaldır.

Susmaya görə birinci ölçü vahidinin vuranı 1-dir. Beləliklə, əgər birinci ədədi cavab - "5500" olarsa birinci ölçü vahidi qismində susmaya görə vuranı 1 olan "Vt" götürülür, onda düzgün cavab "5500 Vt" olacaq.

Əgər 0,001 vuranı olan "kVt" ölçü vahidini əlavə etsək, düzgün cavb "5,5 kVt" olacaq. Bu o deməkdir ki, hər iki cavab ""5500 Vt və ya "5,5 kVt" düzgün sayılacaq.

Fikir verin ki, Mümkün xəta da vurulur yəni, 100 Vt xəta 0,1 kVt olacaq.';
$string['oneunitshown'] = 'Ancaq ƏDƏDİ CAVAB qiymətləndirilir, birinci ölçü vahidi görünür';
$string['onlynumerical'] = 'Ancaq ƏDƏDİ CAVAB qiymətləndirilir, ölçü vahidi yol verilmir';
$string['rightexample'] = 'SAĞDAN 1,00 sm kimi';
$string['selectunit'] = 'Ölçü vahidini seçin';
$string['selectunits'] = 'Ölçü vahidlərini seçin';
$string['studentunitanswer'] = 'kimi ÖLÇÜ VAHİDİNİ göstər';
$string['unitappliedpenalty'] = 'Bu qiymətə düzgün olmayan ölçü vahidi üçün {$a} qədər cərimə də daxildir.';
$string['unitchoice'] = 'Çeviricilər yığımı';
$string['unitedit'] = 'Ölçü vahidini redaktə et';
$string['unitgraded'] = 'ƏDƏDİ CAVAB və ÖLÇÜ VAHİDİ qiymətləndirilir';
$string['unithdr'] = 'Ölçü vahidi {$a}';
$string['unitmandatory'] = 'Vacib';
$string['unitmandatory_help'] = '* Cavab daxil edilən vahidi nəzərə almaqla qiymətləndiriləcək.

* Ölçü vahidi sahəsi boş olarsa cərimə tətbiq ediləcək';
$string['unitnotselected'] = 'Ölçü vahidi seçilməyib';
$string['unitoptional'] = 'Vacib olmayan ölçü vahidi';
$string['unitoptional_help'] = '* Əgər ölçü vahidi sahəsi boş deyilsə, cavab bu ölçü vahidini nəzərə almaqla qiymətləndiriləcək.

* Əgər düzgün olmayan və ya məlum olmayan ölçü vahidi göstəriləcəksə, cavab səhv sayılacaq.';
$string['unitpenalty'] = 'Ölçü vahidinə görə cərimə';
$string['unitpenalty_help'] = 'Cərimə tətbiq edilir, əgər:

- Ölçü vahidi sahəsində təyin olunmamış vahid göstərilibsə
- Ölçü vahidi ədədi cavab üçün sahəyə yazılıb';
$string['unitposition'] = 'Ölçü vahidinin mövqeyi';
$string['validnumberformats'] = 'ədədlərin yolverilən formatı';
$string['validnumberformats_help'] = '* Adi ədədlər: 13500.67; 13 500.67; 13500,67  və ya   13 500,67

* Əgər vergül (,) minliklərin fərqləndirilməsi üçün istifadə edilirsə, onda mütləq onluq nöqtə (.) göstərilməlidir: 13,500.67; 13,500.0

Ədədlərin eksponensial yazılışı üçün E işarəsindən istifadə edin, məsələn, 1.350067 * 10<sup>4</sup> 1.350067 Е4  və ya  1.350067 E04 kimi göstərilə bilər';
$string['validnumbers'] = '13500.67 : 13 500.67 : 13,500.67 : 13500,67: 13 500,67 : 1.350067 E4 : 1.350067 E04';
