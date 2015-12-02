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
 * Strings for component 'question', language 'be', branch 'MOODLE_22_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['exportquestions_help'] = '<p>Гэта функцыя экспартуе цэлую катэгорыю ў тэкставы файл.</p>

<p>Звярніце ўвагу, што многія фарматы не экспартуюць усёй інфармацыі і гэта інфармацыя будзе страчана. Не трэба спадзявацца, што экспарт катэгорый, а затым  іх імпарт дасць склад такіх самых пытанняў. Больш таго, некаторыя пытанні ўвогуле не ўдасца  экспартаваць, калі яны не абслугоўваюцца ў дадзеным фармаце.</p>

<p>Зараз падтрымліваюцца наступныя фарматы:</p>

<p><b>Фармат GІFT</b></p>
<ul>
<p>Фармат GІFT гэта найбольш шматбаковы фармат. Ён быў створаны, як  просты метад для  настаўнікаў, якія ствараюць пытанні, як звычайны тэкставы файл.GІFT абслугоўвае пытанні "Множны выбар", “Дакладна/Недакладна”, “Кароткія адказы”, “Дапасуй адказ”, “Лічбавыя”, а таксама заданні тыпу "устаўце слова, якога бракуе".</p>

<p>У адным тэкставым файле можа быць некалькі розных пытанняў. Акрамя таго, гэты фармат дазваляе змяшчаць каментары, назвы пытанняў, зваротную інфармацыю і ўзважванне адзнак.</p>

<p>Вось некалькі прыкладаў:</p>

<pre>
БелаПАН гэта? {~штодзённая газета ~кніжка =інфармацыйнае агенцтва і інтэрнэт-газета}

БелаПАН гэта {~штодзённая газета ~кніжка =інфармацыйнае агенцтва} пра палітыку і бізнес.

БелаПАН гэта штодзённая газета.{FALSE}

БелаПАН гэта?{=інфармацыйнае агенцтва =інтэрнэт-газета}

Калі быў створаны БелаПАН?{#1991}
</pre>

<p align="right"><a href="help.php?file=formatgift.html&module=quiz">Больш пра фармат GІFT</a></p>
</ul>

<p>Ужо ствараем новыя фарматы: WebCT, ІMS QTІ і штосці, што пажадалі сябры супольнасці Moodle!</p>';
