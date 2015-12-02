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
 * Strings for component 'quiz', language 'be', branch 'MOODLE_22_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eachattemptbuildsonthelast_help'] = '<p>Калі дазволены шматразовыя спробы, а гэта каманда ўстаноўлена на <b>Так</b>, то кожная новая спроба будзе ўключаць адказ, дадзены ў папярэднім разам. Гэта дазваляе ў некалькіх спробах удасканаліць выкананне тэсту.</p>

<p>Каб пасля кожнай спробы рашэння паказаць, што тэст застаўся без змен, усталюй <b>Не</b> у гэтай настройцы.</p>';
$string['grademethod_help'] = '<p>Калі студэнтам дазволена некалькі разоў праходзіць тэст, Вы можаце па рознаму вылічаць выніковую адзнаку за тэст.</p>

<p><b>Лепшая адзнака</b><p>
<ul>
<p>Канчатковай адзнакай лічыцца лепшая адзнака з усіх спробаў.</p>
</ul>

<p><b>Сярэдняя адзнака</b><p>
<ul>
<p>Вылічаецца сярэдняя адзнака ўсіх спробаў.</p>
</ul>

<p><b>Першая спроба</b><p>
<ul>
<p>У разлік прымаецца першая спроба (іншыя спробы - ігнаруюцца).</p>
</ul>

<p><b>Апошняя спроба</b><p>
<ul>
<p>Выніковай адзнакай лічыцца адзнака апошняй спробы.</p>
</ul>';
$string['requirepassword_help'] = '<p>Гэта поле каманднае.</p>

<p>Калі тут запішаш пароль, то студэнты, каб выканаць тэст,  павінны будуць яго запоўніць.</p>';
$string['requiresubnet_help'] = '<p>Гэта поле каманднае.</p>

<p>Можаш абмежаваць доступ да тэсту канкрэтных студэнтаў, якія ўключаюцца з дапамогай сеткі LАN або інтэрнэту,  змяняючы спіс, раздзеленых коскамі поўных або частковых адрасоў ІP.</p>

<p>Прыклад: <b>192.168. , 231.54.211.0/20, 231.3.56.211</b></p>

<p>Даступныя 3 спосабы запісу адрасоў ІP (нельга ўжываць назвы хастоў або даменаў, толькі  адрасы ІP):</p>
<ol>
<li>Поўны адрас ІP, такі як <b>192.168.10.1</b>, які прыпісаны да аднаго камп\'ютэра або да проксі-сэрвера.</li>
<li>Частковы адрас, такі як <b>192.168</b>, які дапусціць усе адрасы, што пачынаюцца ад гэтых лічбаў.</li>
<li>Запіс CІDR, такі як <b>231.54.211.0/20</b>, які дазволіць вам акрэсліць канкрэтныя падсеткі.</li>
</ol>
</p>

<p>Прабелы ігнаруюцца.</p>';
$string['timelimit_help'] = '<p align="center"><strong>Абмежаванні па часу</strong></p>

<p>Узорныя тэсты не маюць абмежавання па часу. Таму студэнт для запаўнення тэсту мае столькі часу, колькі яму патрэбна.</p>

<p>Калі ж устанавіць абмежаванні па часу выканання задання, то Moodle зробіць некалькі дзеянняў, каб забяспечыць іх выкананне:</p>

<ul>
  <li>Актывізуе ў інтэрнэт-браўзэры Java Script – дзякуючы гэтаму дзейнічае секундамер.</li>
  <li>На старонцы з’яўляецца секундамер, які адлічвае час.</li>
  <li>Калі ўстаноўлены час скончыцца, тэст высылаецца аўтаматычна з такімі адказамі, якія здолеў даць дагэтуль студэнт.</li>
  <li>Калі студэнту ўдалося ашукаць праграму і ён прысвяціў тэсту  60 секунд звыш ліміту, ён атрымае адзнаку роўную 0.</li>
</ul>';
