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
 * Strings for component 'chat', language 'az', branch 'MOODLE_22_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = 'Ajax-versiya';
$string['autoscroll'] = 'Avtomatik diyirlənmə';
$string['beep'] = 'siqnal';
$string['cantlogin'] = 'Çata daxil olmaq mümkün deyil!';
$string['chat:chat'] = 'Çata giriş';
$string['chat:deletelog'] = 'Çat ismarıcları olan jurnalı təmizləyin';
$string['chat:exportparticipatedsession'] = 'İstifadəçinin iştirak etdiyi çat sessiyalarını eksportlaşdırın';
$string['chat:exportsession'] = 'İstənilən çat sessiyalarını eksportlaşdırın';
$string['chatintro'] = 'Giriş mətn';
$string['chatname'] = 'Çatın adı';
$string['chat:readlog'] = 'Çat ismarıcları jurnalını oxuyun';
$string['chatreport'] = 'Çat sessiyası';
$string['chat:talk'] = 'Çatda söhbət edin';
$string['chattime'] = 'Növbəti çaat saatı';
$string['configmethod'] = 'Ajax rejimində ismarıcları yeniləmək üçün serverlə avtomatik əlaqə quran interfeysdən istifadə olunur. Adətən bu rejimdə istifadəçilər yenilənmə üçün serverlə sərbəst əlaqə qurmaq məcburiyyətində olurlar. Adi rejimdə isə tənzimləmələrə ehtiyac qalmır, o, hər yerdə işləyir, lakin içtirakçılar çox olduqda serveri həddən artıq. Çat-server rejimində isə Unix shell-ə girişi təmin olunmalıdır, lakin  bu daha sürətli çat əldə etməyə imkan verir.';
$string['confignormalupdatemode'] = 'Çat səhifəsi adətən <em>Keep-Alive</em> rejimində HTTP 1.1parametrini işə saldıqda yenilənir, lakin o serveri yükləyə bilər. Bunun üçün daha səmərəli üsul <em>Sətir</em> rejimini istifadə etməkdir ki, istifadəçilər üçün lentlər yenilənsin.  <em>Sətir</em> rejimini istifadə edərkən (çat rejimində olduğu kimi) sürət arta bilər, lakin sizin serveriniz onu dəstəkləməyə bilər.';
$string['configoldping'] = 'Uzun müddət istifadəçidən bir xəbər eşitmədikdə onu bizi tərk etdiyini hesab etmək olarmı?';
$string['configrefreshroom'] = 'Çat səhifəsi hansı müddətdə yenilənməlidir? (neçə saniyə). Kiçik qiymət təyin edildiyi halda çatın sürəti artmış kimi görünə bilər, lakin çata çox insan daxil olarsa veb-serveri yükləyə bilər. <em>Sətir</em> rejimində isə daha tez-tez yenilənmə aparmaq mümkündür, məsələn 2.';
$string['configrefreshuserlist'] = 'İstifadəçi siyahısı hansı müddətdə yenilənməlidir? (neçə saniyə)';
$string['configserverhost'] = 'Serverin işə salındığı şəbəkənin adı';
$string['configserverip'] = 'Yuxarıda qeyd edilmiş şəbəkə adına uyğun gələn İP ünvanı';
$string['configservermax'] = 'Müştərilərin maksimal mümkün sayı';
$string['configserverport'] = 'Server portu';
$string['currentchats'] = 'Hal-hazırda fəaliyyət göstərən çatlar';
$string['currentusers'] = 'Cari istifadəçilər';
$string['deletesession'] = 'Bu sessiyanı silin';
$string['deletesessionsure'] = 'Siz bu sessiyanı silməkdə əminsiniz?';
$string['donotusechattime'] = 'Çat saatları göstərilməsin';
$string['enterchat'] = 'Çata daxil olun';
$string['errornousers'] = 'Heç bir istifadəçi aşkarlanmadı!';
$string['explaingeneralconfig'] = 'Bu parametrlər <strong>hər zaman</strong> istifadə olunacaq';
$string['explainmethoddaemon'] = 'Bu parametrlər <strong>yalnız</strong> "Çat-server rejim"-ni seçsəniz istifadə olunacaq';
$string['explainmethodnormal'] = 'Bu parametrlər <strong>yalnız</strong> "Adi rejim"-ni seçsəniz istifadə olunacaq';
$string['generalconfig'] = 'Əsas konfiqurasiya';
$string['idle'] = 'Fon';
$string['inputarea'] = 'Daxil edilmə oblastı';
$string['invalidid'] = 'Bu çatı aşkarlamaq  mümkün deyil!';
$string['list_all_sessions'] = 'Bütün sessiyaların siyahısı';
$string['list_complete_sessions'] = 'Yalnız tamamlanmış sessiyaların siyahısı';
$string['listing_all_sessions'] = 'Bütün sessiyaların siyahısı.';
$string['messagebeepseveryone'] = '{$a} hamıya siqnal göndərmişdir!';
$string['messagebeepsyou'] = '{$a} Sizə siqnal göndərmişdir';
$string['messageenter'] = '{$a} çata daxil olmuşdur';
$string['messageexit'] = '{$a} çatdan çıxmışdır';
$string['messages'] = 'İsmarıclar';
$string['messageyoubeep'] = 'Siz {$a} siqnalı göndərmisiniz';
$string['method'] = 'Çat rejimi';
$string['methodajax'] = 'Ajax rejimi';
$string['methoddaemon'] = 'Çat-server rejimi';
$string['methodnormal'] = 'Adi rejim';
$string['modulename'] = 'Çat';
$string['modulename_help'] = 'Çat rejimi iştirakçılara veb vasitəsilə müzakirələr aparmağa imkan verir. Bu onların bir-birini daha yaxşı anlaması üçün faydalıdır.';
$string['modulenameplural'] = 'Çatlar';
$string['neverdeletemessages'] = 'Heç zaman ismarıclar silinməsin';
$string['nextsession'] = 'Növbəti planlaşdırılmış sessiya';
$string['nochat'] = 'Heç bir çat aşkarlanmadı';
$string['no_complete_sessions_found'] = 'Heç bir tamamlanmış sessiya aşkarlanmadı';
$string['noguests'] = 'Bu çat qonaqlar üçün əlyetərli deyil';
$string['nomessages'] = 'Heç bir ismarıc yoxdur';
$string['nopermissiontoseethechatlog'] = 'Sizin çat tarixçəsinə baxmaq hüququnuz yoxdur';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Sətir';
$string['noscheduledsession'] = 'Planlaşdırılmış sessiya yoxdur';
$string['notallowenter'] = 'Sizə çata daxil olmağa icazə verilmir';
$string['notlogged'] = 'Siz sistemə daxil olmamısınız!';
$string['oldping'] = 'Timeout söndürülsün';
$string['pastchats'] = 'Keçmiş çat-sessiyaları';
$string['pluginadministration'] = 'Çat administrasiyası';
$string['pluginname'] = 'Çat';
$string['refreshroom'] = 'Çat səhifəsini yeniləyin';
$string['refreshuserlist'] = 'İstifadəçi siyahısını yeniləyin';
$string['removemessages'] = 'Bütün ismarıcları silin';
$string['repeatdaily'] = 'Hər gün bu vaxt';
$string['repeatnone'] = 'Sessiyalar təkrarlanmasın';
$string['repeattimes'] = 'Sessiyalar təkrarlansın';
$string['repeatweekly'] = 'Hər həftə bu vaxt';
$string['saidto'] = 'tapşırılıb';
$string['savemessages'] = 'Yaddaşda qalan ismarıcların sayı';
$string['seesession'] = 'Bu sessiya göstərilsin';
$string['send'] = 'Göndər';
$string['sending'] = 'Göndərilmə';
$string['serverhost'] = 'Server adı';
$string['serverip'] = 'Server İP';
$string['servermax'] = 'Maksimum istifadəçi';
$string['serverport'] = 'Server portu';
$string['sessions'] = 'Çat-sessiyaları';
$string['sessionstart'] = 'Çat sessiyası başlayır: {$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Hamı keçmiş sessiyalara baxaa bilər';
$string['studentseereports_help'] = 'Əgər "Xeyr" seçimi edilmişdirsə, yalnız "mod/chat:readlog"  hüququna malik istifadəçilər çat loqlarını görə bilərlər';
$string['talk'] = 'Söhbət';
$string['updatemethod'] = 'Yenilənmə üsulu';
$string['updaterate'] = 'Yenilənmə müddəti:';
$string['userlist'] = 'istifadəçi siyahısı';
$string['usingchat'] = 'Çat istifadəsi';
$string['usingchat_help'] = 'Çat moduluna ünsiyyətin qəbul edilməsi üçün bəzi imkanlar daxildir.

*Smile -Bildiyiniz istənilən smile-dan Moodle-da istifadə etmək olar. Onlar konkret əks olunacaqdır, məsələn  :-)


*Linklər - Vebsayt ünvanları avtomatik olaraq linklərə çevriləcəkdir

*Emosiya - Siz emosiyalarını göstərmək üçün sətiri "/me" və ya ":" üçün başlaya bilərsiniz. məsələn, sizin adınız Kimdir və ":gülür!" və ya "/me gülür!" yazsanız hamı bunu "Kim gülür!" kimi görəcəkdir.

*Siqnallar - Siz istifadəçi adından sonra "beep" düyməsini sıxaraq digər istifadəçilərə səs siqnalları göndərə bilərsiniz. Siqnalın bütün istifadəçilərə göndərilməsi üçün "beep all" əmrini verin.

*HTML - əgər siz HTML kodunu bilirsinizsə, onda ismarıc mətninə rəsm, səsli ismarıc  əlavə edə və rəngləyə bilərsiniz.';
$string['viewreport'] = 'Keçmiş çat-sessiyalarına bax';
