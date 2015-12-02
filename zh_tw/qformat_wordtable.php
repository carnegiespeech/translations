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
 * Strings for component 'qformat_wordtable', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   qformat_wordtable
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = '無法開啟臨時檔案<b>{$a}</b>';
$string['cannotreadzippedfile'] = '無法閱讀壓縮檔案<b>{$a}</b>';
$string['cannotwritetotempfile'] = '無法寫入臨時檔案<b>{$a}</b>';
$string['cloze_distractor_column_label'] = '誘答';
$string['cloze_feedback_column_label'] = '誘答的回饋';
$string['cloze_instructions'] = '使用 <strong>粗體字</strong>作為下拉選單的項目，而<em>斜體字</em>作為文字欄位的項目。';
$string['cloze_mcformat_label'] = '方向（D =下拉選單； V =垂直，H =水平單選按鈕）';
$string['description_instructions'] = '這實際上不是一個試題，它只是用來在測驗中加上作答說明、評分規程或其他閱讀材料的方法。它類似標籤可以用來添加內容到課程頁面上。';
$string['docnotsupported'] = '不支援 Word 2003格式的檔案：<b>{$a}</b>，請改用Moodle2Word 3.x 。';
$string['essay_instructions'] = '允許以幾個句子或幾段文字作為答案。這必須在考試後以手工計分。';
$string['export_type_set'] = '這試題匯出類型已經被設定為';
$string['htmldocnotsupported'] = '不正確的Word格式：請使用<i>檔案>另存檔案...</i> 來儲存<b>{$a}</b>來儲存成原有的Word 2010 (.docx)格式，然後再匯入一次。';
$string['htmlnotsupported'] = '不支援HTML格式的檔案：<b>{$a}</b>';
$string['interface_language_mismatch'] = '沒有試題被匯入，因為在這Word檔案上的標籤所用的語言，與你當前的Moodle介面語言不相符。';
$string['multichoice_instructions'] = '允許從一個事先界定的清單中選擇單一或多個選項。';
$string['noquestions'] = '沒有試題可以匯出';
$string['pluginname'] = '微軟的Word 2010表格格式（wordtable）';
$string['pluginname_help'] = '這是用來將 Microsoft Word 2010檔案轉換成Moodle試題XML格式，以便匯入題庫。而且它可以把Moodle試題XML轉換成適合在Microsoft Word上編輯的格式。';
$string['preview_question_not_found'] = '沒有找到可預覽的試題，名稱/課程編號：{$a}';
$string['stylesheetunavailable'] = 'XSLT 的樣式表<b>{$a}</b> 無法使用';
$string['tempfile'] = '臨時的 XML 檔案：<b>{$a}</b>';
$string['templateunavailable'] = '無法使用 可兼容文字的 XHTML 模板 <b>{$a}</b>';
$string['transformationfailed'] = 'XSLT 轉換失敗(<b>{$a} </b>)';
$string['truefalse_instructions'] = '把正確答案設為\'100\'';
$string['unsupported_instructions'] = '不支援正在匯入的這一題型';
$string['word_about_moodle2word'] = '關於Moodle2Word';
$string['word_conversionfailed'] = '試題匯入失敗';
$string['word_conversionsucceeded'] = '試題匯入<b>成功</b>，<br>點選 <b>\'關閉\'</b> 按鈕來繼續。';
$string['word_conversionsucceeded2'] = '試題匯入<b>成功</b>，<br>點選 <b>\'關閉\'</b> 按鈕來繼續。';
$string['word_multiple_answer'] = '複選題';
$string['word_new_question_file'] = '新試題檔案';
$string['word_setunset_assessment_view'] = '設定/取消設定評量檢視';
$string['word_showhide_assessment_view'] = '顯示/隱藏評量檢視';
$string['wordtable'] = '微軟 Word 2010 表格格式 (wordtable)';
$string['wordtable_help'] = '這是一個前端工具，用來把 Microsoft Word 2010 檔案轉換成為Moodle Question XML格式，以便匯入Moodle的測驗模組中。它也可將Moodle Question XML格式轉換成一個增強的XHTML格式，以便匯出供Microsoft Word編輯。';
$string['xmlnotsupported'] = '不支援XML格式的檔案：<b>{$a}</b>';
$string['xsltunavailable'] = '你需要在 PHP 安裝 XSLT 程式庫，才可以儲存這一Word檔案';
