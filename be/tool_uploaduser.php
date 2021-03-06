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
 * Strings for component 'tool_uploaduser', language 'be', branch 'MOODLE_22_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['uploadusers'] = 'Загрузіць карыстальнікаў';
$string['uploadusers_help'] = '<p>Па-першае, май на ўвазе, што <strong>звычайна няма неабходнасці імпартавання ўсіх карыстальнікаў</strong>... Каб зрабіць мінімальным аб\'ём работы, правер, ці можна прымяніць іншыя формы ідэнтыфікацыі карыстальнікаў, якія б не патрабавалі такой нуднай, руціннай працы, як  злучэнне са знешняй базай дадзеных, дазвол на стварэнне  карыстальнікамі ўласных рэгістрацыйных запісаў.</p>
<p>Калі ж Вы ўпэўнены, што аднак трэба  імпартаваць рэгістрацыйныя запісы з тэкставага файла, то вам трэба спачатку  адпаведна сфарматаваць гэты файл:</p>

<ul>
  <li>Адзін запіс на адной лініі</li>
  <li>Кожны запіс уключае дадзеныя, аддзеленыя коскамі</li>
  <li>Першы запіс уключае спіс палёў. Гэты запіс акрэслівае фармат усяго файла.
    <blockquote>
      <p><strong>Абавязковыя палі:</strong> мусяць быць уключаныя ў першы запіс і акрэслены для кожнага карыстальніка</p>
      <p> <font color="#990000" face="Courier New, Courier, mono">карыстальнік, пароль, імя, прозвішча, электронны адрас</font></p>
      <p><strong>Інтуітыўныя палі:</strong> яны ўжо функцыянальныя, калі не ўключаны, то гэтыя функцыі можна атрымаць у галоўнага адміністратара.</p>
      <p><font color="#990000" face="Courier New, Courier, mono">навучальная ўстанова, факультэт, горад, краіна, мова, гадзінная зона</font> </p>
      <p><strong>Функцыянальныя палі: </strong> гэтыя значэнні цалкам функцыянальныя. Назвы прадметаў могуць быць &quot;скарочаны&quot;. Скарочаная назва павінна прэзентаваць карыстальніку сутнасць курсу. Назва групы мусіць асацыявацца з назвай курсу, г. зн. group1 to course1, і д.п..</p>
      <p> <font color="#990000" face="Courier New, Courier, mono">Ідэнтыфікацыйны нумар, іcq, тэлефон, тэлефон 2, адрас, url, апісанне, электронная скрынка, ці паказваць электонны адрас, рэдактар html, аўтаподпіс, курс1, курс2, курс3, курс4, курс5, група1, група2, група3, група4, група5</font></p>
    </blockquote>
    </li>
  <li>Коскі павінны мець код &amp;#44 - спыпт аўтаматычна прачытае гэты знак, як коску. </li>
  <li>Для палёў Так/Не ўжывай 0 для Не і 1 для Так. </li>
  <li>Май на ўвазе: калі карыстальнік ужо запісаны ў базе дадзеных Moodle, скрыпт знойдзе нумар карыстальніка ў заліковай кніжцы базы дадзеных і запіша гэтага студэнта на які-небудзь з пералічаных курсаў без пацверджання ці змены іншых дадзеных.</li>
</ul>
<p>Вось прыклад файла для імпарту:</p>
<p><font size="-1" face="Courier New, Courier, mono">карыстальнік, пароль, імя, прозвішча, электонная скрынка, мова, id-нумар, ці паказваць электонны адрас, курс1, група1<br />
нескажу, вельмісакрэтна, Сяржук, Кручкоў, siarzhuk@someplace.edu, be, 3663737, 1, Intro101, Section 1<br />
здагадайся, тохісакрэтна, Ёнас, Булька, bulka@someplace.edu, en_us, 6736733, 0, Advanced202, Section 3</font></p>';
