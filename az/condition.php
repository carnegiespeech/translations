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
 * Strings for component 'condition', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Elementlərin tamamlanma yoxlanmasını əlavə et- {no}';
$string['addgrades'] = 'Qiymətlərin yoxlanmasını əlavə et- {no}';
$string['availabilityconditions'] = 'Məhdud giriş';
$string['availablefrom'] = 'Girişə icazə ver';
$string['availablefrom_help'] = '"...etibarən icazə ver/... qədər girişi qadağan et" verilənləri tələbələrin kurs səhifəsindən link vasitəsilə kurs elementinə girişini nə zaman alacağını təyin edir.

Bu parametrlərlə "Əlyetərlilik" parametri arasındaki fərq ondan ibarətdir ki, qeyd olunmamış məlumat diapazonu xaricində tələbələr elementin təsvirini görə bilər. Bu halda "Əlyetərlilik" parametri isə girişi tam qadağan edir.';
$string['availableuntil'] = '... qədər girişə icazə ver';
$string['badavailabledates'] = 'Səhv tarixlər. Hər iki tarixi seçsəniz, "... etibarən girişə icazə ver" tarixi "...qədər girişə icazə ver" tarixindən əvvəl gəlməlidir.';
$string['completion_complete'] = 'element tamamlanmış kimi qeyd olunmalıdır';
$string['completioncondition'] = 'Elementin tamamlanmasını yoxla';
$string['completioncondition_help'] = 'Bu tənzimləmə bu elementə giriş əldə etmək üçün hansı şərtlərin ödənilməli olduğunu təyin edir. Unutmayın ki, yoxlamanı quraşdırmaq üçün elementlərin tamamlanmasını izləməyi əvvəlcədən işə salmaq lazımdır.

Bir neçə qiymət təyin etmək mümkündür, lakin bu halda elementə giriş yalnız <strong>bütün</strong> şərtlər ödənilməlidir.';
$string['completion_fail'] = 'elemenr keçid balından aşağı qiymətlə tamamlanmalıdır';
$string['completion_incomplete'] = 'element tamamlanmış kimi qeyd edilməlidir';
$string['completion_pass'] = 'elemenr keçid balından yuxarı qiymətlə tamamlanmalıdır';
$string['configenableavailability'] = 'Bu parametr işə salınarsa, Siz digər elementlərin tamamlanma tarixi, qiyməti və səviyyəsinə əsaslanan elementə giriş şərtlərini tənzimləyə bilərsiniz';
$string['enableavailability'] = 'Giriş şərtlərini işə sal';
$string['grade_atleast'] = 'Qiymət ən azı ... olmalıdır';
$string['gradecondition'] = 'Qiymətin yoxlanması';
$string['gradecondition_help'] = 'Bu tənzimləmələr istifadəçinin elementə giriş əldə etməsi üçün onun qiyməti ilə əlaqədar hansı şərtlərin ödənilməli olduğunu təyin edir.

Bir neçə qiymət təyin etmək mümkündür, lakin bu halda elementə giriş yalnız <strong>bütün</strong> şərtlər ödənilməlidir.';
$string['grade_upto'] = '....dən az';
$string['none'] = '(heç biri)';
$string['notavailableyet'] = 'Hələ əlyetərli deyil';
$string['requires_completion_0'] = '<strong>{$a}</strong>  elementi tamamlanmasa əlyetərli deyil.';
$string['requires_completion_1'] = '<strong>{$a}</strong>  elementi tamamlanmış kimi qeyd olmayıbsa əlyetərli deyil';
$string['requires_completion_2'] = '<strong>{$a}</strong>  elementi keçid balı ilə tamamlanmışdırsa əlyetərli deyil.';
$string['requires_completion_3'] = '<strong>{$a}</strong>  elementi keçid balından aşağı qiymətlə tamamlanmışdırsa əlyetərli deyil.';
$string['requires_date'] = '{$a}etibarən əlyetərlidir.';
$string['requires_date_before'] = '{$a} -a qədər əlyetərlidir';
$string['requires_date_both'] = '{$a->from} -etibarən {$a->until}-dək əlyetərlidir.';
$string['requires_grade_any'] = '<strong>{$a}</strong> -də qiymətiniz yoxdursa əlyetərli deyil.';
$string['requires_grade_max'] = '<strong>{$a}</strong>.-də müvafiq qiymət almayanadək əlyetərli deyil.';
$string['requires_grade_min'] = '<strong>{$a}</strong>-də mütləq qiyməti almayanadək əlyetərli deyil.';
$string['requires_grade_range'] = '<strong>{$a}</strong>-də qiymət almayanadək əlyetərli deyil.';
$string['showavailability'] = 'Kurs elementinə giriş əldə etməzdən əvvəl';
$string['showavailability_hide'] = 'Bu elementi tamamilə gizlət';
$string['showavailability_show'] = 'Elementi məhdudiyyət haqqında məlumatı ilə bərabər qaraldımış şəkildə göstər';
$string['userrestriction_hidden'] = 'Məhdud (Tam gizlət, ismarıcsız): &lsquo;{$a}&rsquo;';
$string['userrestriction_visible'] = 'Məhdud:&lsquo;{$a}&rsquo;';
