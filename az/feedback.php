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
 * Strings for component 'feedback', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autonumbering_help'] = 'Hər sualın avtomatik nömrələnməsini qoşur və ya ləğv edir';
$string['choosefile'] = 'Faylı seçin';
$string['depending_help'] = 'Asılı elementlər Sizə digər elementlərin qiymətindən asılı olan elementləri göstərməyə  imkan verir.<br />
<strong>Burada onlardan istifadə edilməsinə dair misallar göstərilib:</strong><br />
<ul>
<li>Əvvəlcə elə element yaradın ki, onun qiymətindən digər elementlər asılı olsun.</li>
<li>Sonra Səhifə sonunu əlavə edin</li>
<li>Sonra əvvəlki elementin qiymətindən asılı olan elementi əlavə edin<br />
Yaratma formasında "elementdən asılıdır" siyahısından element seçin və "qiymətdən asılıdır" mətn sahəsinə qoyun.</li>
</ul>
<strong>Struktur aşağıdakı şəkildə görünməlidir:</strong>
<ol>
<li>Elementin sualı 1: Sizin avtomobiliniz var?
Cavab: hə/yox</li>
<li>Səhifə sonu</li>
<li>Elementin sualı  2: Sizin avtomobil nə rəngdədir?<br />
(bu element 1 elementinin =hə qiymətindən asılıdır)</li>
<li>Elementin sualı  3: Niyə Sizin maşınınız yoxdur?<br />
bu element 1 elementinin =yox qiymətindən asılıdır)</li>
<li> ... digər elementlər</li>
</ol>
Bu da son.';
$string['description'] = 'Təsvir';
$string['edit_item'] = 'Sualı redaktə et';
$string['edit_items'] = 'Sualları redaktə et';
$string['email_notification'] = 'e-poçt bildirişlərini göndər';
$string['emailnotification_help'] = 'Parametr söndürülübsə administratorlar Əks əlaqə cavablarının gəlməsi barədə e-poçtun bildirişlərini alırlar';
$string['entries_saved'] = 'Sizin cavablar yadda saxlandı. Çox sağ ölun.';
$string['export_to_excel'] = 'Excel-ə idxal';
$string['insufficient_responses_help'] = 'Bu qrup üçün cavablar kifayət qədər deyil

Anonimlərin cavablarının qəbul olunması üçün ən azı 2 cavab olmalıdır.';
$string['item_label'] = 'İzahat';
$string['label'] = 'İzahat';
$string['mapcourse_help'] = 'Susmaya görə, Sizin saytın əsas səhifəsində yaradılan əks əlaqə formaları "Əks əlaqə" blokundan istifadə edən bütün kurslarda olacaq. Siz, bloku bərkidilmiş etməklə əks əlaqə formasını məcburu göstərə bilərsiniz və ya əks əlaqə formasının göstərilməsini müəyyən kurslar üçün məhdudlaşdıra bilərsiniz.';
$string['mapcourses_help'] = 'Müvafq kursu axtarıb tapdıqdan sonra Siz onu kursların xəritəsindən istifadə edərək bu Əks əlaqə ilə əlaqələndirə bilərsiniz. Bir neçə kursu Ctrl və ya Apple düymələrini tutub saxlamaqla seçə bilərsiniz. Kurs Əks əlaqədən istənilən vaxt ayrıla bilər.';
$string['messageprovider:submission'] = 'Çağırılma haqqında bildiriş';
$string['modulename'] = 'Əks əlaqə';
$string['modulename_help'] = 'Əks əlaqə modulları şəxsi anketlər yaratmağa imkan verir';
$string['modulenameplural'] = 'Əks əlaqə';
$string['multiplesubmit_help'] = 'Anonim anketlər üçün söndürülübsə, istifadəçilər qeyri-müəyyən sayda məlumat göndərə bilərlər';
$string['no_itemlabel'] = 'İzahı yoxdur';
$string['pluginname'] = 'Əks əlaqə';
$string['preview'] = 'Əvvəlcədən baxış';
$string['preview_help'] = 'Əvvəlcədən baxış rejimində Siz sualların ardıcıllığını dəyişə bilərsiniz.';
$string['searchcourses_help'] = 'Bu Əks əlaqə ilə birləşdirmək istədiyiniz kursların (şifrəyə və ya ada görə) axtarılması.';
$string['timeclose_help'] = 'Siz, sualları cavablandırmaq üçün Əks əlaqənin mümkün olduğu zamanı təyin edə bilərsiniz. Əgər seçim xanasında işarə qoyulmayıbsa - məhdudiyyət yoxdur.';
$string['timeopen_help'] = 'Siz, sualları cavablandırmaq üçün Əks əlaqənin mümkün olduğu zamanı təyin edə bilərsiniz. Əgər seçim xanasında işarə qoyulmayıbsa - məhdudiyyət yoxdur.';
$string['url_for_continue_help'] = 'Susmaya görə, Əks əlaqədən sonra "Davam et" düyməsi kursun səhifəsinə keçirir. Siz, burada "Davam et" düyməsini vurduqda keçid üçün digər URL-ünvanı da göstərə bilərsiniz.';
$string['viewcompleted_help'] = 'Siz, Əks əlaqənin doldurulmuş formalarına baxa bilərsiniz, kurs və ya sual üzrə axtarış mümkündür.';
