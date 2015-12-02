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
 * Strings for component 'rating', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Orta qiymət';
$string['aggregatecount'] = 'Qiymətlərin sayı';
$string['aggregatemax'] = 'Maksimal qiymət';
$string['aggregatemin'] = 'Minimal qiymət';
$string['aggregatenone'] = 'Qiymətləndirilmir';
$string['aggregatesum'] = 'Qiymətlərin cəmi';
$string['aggregatetype'] = 'Nəticənin hesablanması metodu';
$string['aggregatetype_help'] = 'Bu parametr təyin edir ki, kursda qiymət jurnalına qoyulan qiymətin necə alındığını təyin edir.

* Orta qiymət - Bütün qiymətlərin orta qiyməti
* Qiymətlərin sayı - Kursun elementinə görə qiymət qiymətləndirilən elementlərin ümumi sayı olur. Nəzərə alın ki, yekun qiymət kursun bu elementinə görə maksimal qiyməti keçməməlidir.
* Maksimal qiymət - Qiymət kimi qoyulan qiymətlərdən maksimum olanı götürülür.
* Minimal qiymət - Qiymət kimi qoyulan qiymətlərdən minimum olanı götürülür.
* Qiymətlərin cəmi - Bütün qiymətlər toplanır. Nəzərə alın ki, yekun qiymət kursun bu elementinə görə maksimal qiyməti keçməməlidir.

Əgər "Qiymətləndirilmir" variantı seçilibsə kursun elementi qiymət jurnalında görünməyəcək.';
$string['allratingsforitem'] = 'Bütün qoyulmuş qiymətlər';
$string['capabilitychecknotavailable'] = 'Kursun elementini yadda saxlayanadək imkanları yoxlamaq mümkün deyil';
$string['noratings'] = 'Qiymətlər qoyulmayıb';
$string['rate'] = 'Qiymətləndir';
$string['ratepermissiondenied'] = 'Sizin bu elementi qiymətləndirmək üçün icazəniz yoxdur';
$string['rating'] = 'Qiymət';
$string['ratinginvalid'] = 'Səhv qiymət';
$string['ratings'] = 'Qiymətlər';
$string['rolewarning'] = 'Qiymətləndirmək hüququ verilmiş rollar';
$string['rolewarning_help'] = 'Qiymət qoymaq üçün istifadəçilərə "moodle/rating:rate" hüququ və konkret modul daxilində lazımi hüquqlar verilməlidir. Aşğıdakı rollar verilmiş istifadəçilər, elementləri qiymətləndirmək imkanı olmalıdır. Rolların siyahısını "Administrasiya" blokunda "İstifadəçilər" - "Hüquqları" keçidi ilə dəyişmək olar.';
