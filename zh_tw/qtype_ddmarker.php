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
 * Strings for component 'qtype_ddmarker', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = '新增{no}個空白項目';
$string['alttext'] = '替代文字';
$string['answer'] = '答案';
$string['bgimage'] = '背景圖像';
$string['clearwrongparts'] = '把放置錯誤的項目移回到圖像下方的預設起點位置';
$string['confirmimagetargetconversion'] = '你即將把以上的圖像目標試題轉換成拖放標示題型';
$string['convertingimagetargetquestion'] = '已轉換的試題 "{$a->name}"';
$string['coords'] = '座標';
$string['correctansweris'] = '正確答案是：{$a}';
$string['draggableimage'] = '可拖拉圖像';
$string['draggableitem'] = '可拖拉項目';
$string['draggableitemheader'] = '可拖拉項目{$a}';
$string['draggableitemtype'] = '類型';
$string['draggableword'] = '可拖拉的文字';
$string['dropbackground'] = '讓拖拉項目放在上面的背景圖像';
$string['dropzone'] = '放置區 {$a}';
$string['dropzoneheader'] = '放置區';
$string['followingarewrong'] = '下列的標誌被放在錯誤的區域：{$a}';
$string['followingarewrongandhighlighted'] = '下列的標誌放置錯誤：{$a}。被醒目提示的標誌現在已顯示在正確位置。
點選這標誌可以提示這允許的區域。';
$string['formerror_nobgimage'] = '你需要選擇一個圖像作為這一拖拉區域的背景。';
$string['formerror_noitemselected'] = '你已經選擇一個放置區，但沒有選擇一個必須拖放到這區域的標誌。';
$string['formerror_nosemicolons'] = '你的座標字串中沒有分號。 {$a->shape}的座標應該寫成{$a->coordsstring}。';
$string['formerror_onlysometagsallowed'] = '在一個標誌的標籤中只能有"{$a}"個分類用詞';
$string['formerror_onlyusewholepositivenumbers'] = '請只使用"正整數"來指定形狀的x,y座標和/或寬與高。 {$a->shape}的座標應該寫成{$a->coordsstring}。';
$string['formerror_polygonmusthaveatleastthreepoints'] = '對於多角形，你至少需要指定三個端點。 {$a->shape}的座標應該寫成{$a->coordsstring}。';
$string['formerror_shapeoutsideboundsofbgimage'] = '你所定義的形狀超出了這背景圖像的界線';
$string['formerror_toomanysemicolons'] = '你所指定的座標中有太多以分號分隔的部分。 {$a->shape}的座標應該寫成{$a->coordsstring}。';
$string['formerror_unrecognisedwidthheightpart'] = '我們無法辨識你所指定的寬與高。 {$a->shape}的座標應該寫成
{$a->coordsstring}。';
$string['formerror_unrecognisedxypart'] = '我們無法辨識你所指定的x,y座標。 {$a->shape}的座標應該寫成
{$a->coordsstring}。';
$string['imagetargetconverter'] = '轉換"圖像配對題"成為"拖放標誌題"';
$string['infinite'] = '無限制的';
$string['listitemconfirmcategory'] = '即將在類別 "{$a->name}"中 (包含 {$a->qcount} 個圖像配對題)轉換所有的圖像配合題。';
$string['listitemconfirmcontext'] = '即將在 "{$a->name}"情境中 (包含 {$a->qcount} 個圖像配對題)轉換所有的圖像配合題。';
$string['listitemconfirmquestion'] = '即將轉換試題 "{$a->name}"';
$string['listitemlistallcategory'] = '從類別"{$a->name}" (包含{$a->qcount}個圖像配對題)選出所有的圖像配對題。';
$string['listitemlistallcontext'] = '從情境"{$a->name}" (包含{$a->qcount}個圖像配對題)選出所有的圖像配對題。';
$string['listitemlistallquestion'] = '選擇試題 "{$a->name}"';
$string['listitemprocessingcategory'] = '在類別 "{$a->name}"中 (包含 {$a->qcount} 個圖像配對題)轉換所有的圖像配合題。';
$string['listitemprocessingcontext'] = '在 "{$a->name}"情境中 (包含 {$a->qcount} 個圖像配對題)轉換所有的圖像配合題。';
$string['listitemprocessingquestion'] = '已轉換的試題 "{$a->name}"';
$string['marker'] = '標誌';
$string['marker_n'] = '標誌{no}';
$string['markers'] = '標誌';
$string['nolabel'] = '沒有標籤文字';
$string['noquestionsfound'] = '這裡找不到試題可以轉換';
$string['pleasedragatleastonemarker'] = '你的答案還沒完成，你必須至少放一個標誌到這圖像上';
$string['pluginname'] = '拖放標誌題';
$string['pluginnameadding'] = '新增拖放標誌題';
$string['pluginnameediting'] = '編輯拖放標誌題';
$string['pluginname_help'] = '選擇一背景圖像檔案，為標誌輸入文字標籤，並在背景圖像上界定放置區。';
$string['pluginnamesummary'] = '標誌是被拖放到一個背景圖像上';
$string['previewareaheader'] = '預覽';
$string['previewareamessage'] = '選擇一個背景圖檔，輸入各種標誌的文字標籤，並在背景圖像上界定放置區，最後界定各個標誌與放置區的對應關係。';
$string['refresh'] = '刷新預覽';
$string['shape'] = '形狀';
$string['shape_circle'] = '圓圈';
$string['shape_circle_coords'] = 'x,y;r (在此 x,y 圓心的xy座標，而 r 是半徑)';
$string['shape_circle_lowercase'] = '圓圈';
$string['shape_polygon'] = '多邊形';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(在此 x1, y1是第一個頂點的x,y座標， x2,y2是第二個頂點的x,y座標，等等 。你不需要重複第一個頂點的座標來關閉這個多邊形)';
$string['shape_polygon_lowercase'] = '多邊形';
$string['shape_rectangle'] = '長方形';
$string['shape_rectangle_coords'] = 'x,y; w,h（其中x,y是長方形左上角的XY坐標，w和h是長方形的寬度和高度）';
$string['shape_rectangle_lowercase'] = '長方形';
$string['showmisplaced'] = '若有放置區沒有正確標誌放進裡面，就做醒目提示';
$string['shuffleimages'] = '每次試題被作答之後，拖拉項目就重新隨機排列';
$string['stateincorrectlyplaced'] = '說明哪些個標誌是放置錯誤';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = '放置區{$a}';
$string['ytop'] = '頂';
