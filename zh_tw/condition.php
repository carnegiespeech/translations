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
 * Strings for component 'condition', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = '加入 {no} 個活動條件到表單中';
$string['addgrades'] = '加入 {no} 個成績條件到表單中';
$string['availabilityconditions'] = '限制存取';
$string['availablefrom'] = '可以存取時間從';
$string['availablefrom_help'] = '可以存取的開始結束時間，決定了在什麼時間學生可以通過課程頁面的鏈結存取此活動。

活動的存取時間和開放時間是不同的。在開放時間之外，學生仍然可以查看活動描述。而在可存取時間之外，對活動的存取完全禁止。';
$string['availableuntil'] = '可存取直到';
$string['badavailabledates'] = '無效的日期。如果您兩個日期都設定了，那麼"可存取從"日期應該在"可存取直到"日期之前。';
$string['badgradelimits'] = '如果您同時設定了成績上限和下限，那麼上限必須高於下限。';
$string['completion_complete'] = '必須標記為"完成"';
$string['completioncondition'] = '活動完成條件';
$string['completioncondition_help'] = '此設定決定在參加本活動之前，必須先達到那些活動的完成條件。注意，在設定完成條件之前，必須先設定好進度追蹤。

如果需要，也可以設定多條活動完成條件。那麼必須先滿足所有的活動條件，才能參加本活動。';
$string['completion_fail'] = '完成時必須是"不及格"';
$string['completion_incomplete'] = '必須未標記為"完成"';
$string['completion_pass'] = '必須完成，而且"及格"';
$string['configenableavailability'] = '啟用後，可以讓你設定條件(日期、成績或完成狀態)，以控制一個活動或資源能否被存取。';
$string['enableavailability'] = '啟用條件式的存取';
$string['grade_atleast'] = '至少要';
$string['gradecondition'] = '成績條件';
$string['gradecondition_help'] = '此設定決定在參加活動之前，必須先滿足那些成績條件。

根據需要，可以設定多個成績條件。所有條件都滿足後才能參加此活動。';
$string['gradeitembutnolimits'] = '您至少要輸入一個上限或下限。';
$string['gradelimitsbutnoitem'] = '您必需選擇一個計分項目。';
$string['gradesmustbenumeric'] = '最高和最低分必須是數字(或留空)。';
$string['grade_upto'] = '且少於';
$string['none'] = '（無）';
$string['notavailableyet'] = '這還無法使用';
$string['requires_completion_0'] = '無法使用，除非活動<strong>{$a}</strong>尚未完成。';
$string['requires_completion_1'] = '無法使用，直到標記活動<strong>{$a}</strong>完成。';
$string['requires_completion_2'] = '無法使用，直到標記活動<strong>{$a}</strong>完成且及格。';
$string['requires_completion_3'] = '無法使用，直到標記活動<strong>{$a}</strong>完成且不及格。';
$string['requires_date'] = '從 {$a}才可開始使用。';
$string['requires_date_before'] = '可以使用到 {$a}。';
$string['requires_date_both'] = '從{$a->from}到{$a->until}之間可使用';
$string['requires_date_both_single_day'] = '在 {$a} 上可使用。';
$string['requires_grade_any'] = '不可使用，直到您在<strong>{$a}</strong>取得成績。';
$string['requires_grade_max'] = '不可使用，除非您在<strong>{$a}</strong>取得合適的成績。';
$string['requires_grade_min'] = '不可使用，除非您在<strong>{$a}</strong>取得了要求的成績。';
$string['requires_grade_range'] = '不可使用，除非您在<strong>{$a}</strong>取得了指定的成績。';
$string['showavailability'] = '活動可瀏覽之前';
$string['showavailability_hide'] = '完全隱藏活動';
$string['showavailability_show'] = '活動已用灰色顯示，並顯示受到限制的訊息';
$string['userrestriction_hidden'] = '限制（完全隱藏，無消息）：“{$a}”';
$string['userrestriction_visible'] = '限制：“{$a}”';
