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
 * Strings for component 'checklist', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   checklist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = '新增評論';
$string['additem'] = '新增';
$string['additemalt'] = '於清單新增一項目';
$string['additemhere'] = '於之後插入一新項目';
$string['addownitems'] = '新增您自己的項目';
$string['addownitems-stop'] = '不要再新增您自己的項目';
$string['allowmodulelinks'] = '接受模組連結';
$string['anygrade'] = '所有';
$string['autopopulate'] = '在勾選單中顯示課程模組';
$string['autoupdate'] = '模組完成後勾選關閉離開';
$string['autoupdatewarning_student'] = '此清單有些項目在學生完成相關活動後即自動更新。';
$string['autoupdatewarning_teacher'] = '此清單的自動更新已設為開啟，但是這些记號不會顯示出來，只有"教師"的記號會顯示出來。';
$string['calendardescription'] = '此事件由清單{$a}新增';
$string['canceledititem'] = '取消';
$string['changetextcolour'] = '下個文字顏色';
$string['checkeditemsdeleted'] = '打勾之項目已被刪除';
$string['checklist'] = '勾選單';
$string['checklist:addinstance'] = '新增一勾選清單';
$string['checklistautoupdate'] = '同意勾選清單自動更新';
$string['checklist:edit'] = '新增並編輯勾選單';
$string['checklist:emailoncomplete'] = '接受完成之電郵';
$string['checklistfor'] = '檢查表：';
$string['checklistintro'] = '介紹';
$string['checklist:preview'] = '預覽勾選單';
$string['checklistsettings'] = '設定';
$string['checklist:updatelocked'] = '更新鎖定之勾選清單的標示';
$string['checklist:updateother'] = '更新學生的檢查表的分數';
$string['checklist:updateown'] = '更新你的檢查表的分數';
$string['checklist:viewmenteereports'] = '只查看受指導者的進度';
$string['checklist:viewreports'] = '查看學生的進度';
$string['comments'] = '意見';
$string['completionpercent'] = '應被勾選掉的項目之百分比';
$string['completionpercentgroup'] = '要求勾選掉';
$string['configchecklistautoupdate'] = '在允許使用這一功能之前，你必須對於Moodle的核心程式碼做一些更改，請參見 mod/checklist/README.txt 以了解詳情。';
$string['configshowcompletemymoodle'] = '若這被取消勾選，那麼已完成的檢查表將不會出現在\'儀表板\'頁面上';
$string['configshowmymoodle'] = '若這被取消勾選，那麼檢查表活動(含進度列)將不再出現在\'儀表板\'頁面上';
$string['configshowupdateablemymoodle'] = '若勾選，那麼只有可更新的檢查表會被顯示在\'儀表板\'頁面上';
$string['confirmdeleteitem'] = '您確定要永遠刪除勾選單之項目嗎?';
$string['deleteitem'] = '刪除此項目';
$string['duedatesoncalendar'] = '於日曆新增到期日';
$string['edit'] = '編輯檢查表';
$string['editchecks'] = '編輯檢查';
$string['editdatesstart'] = '編輯日期';
$string['editdatesstop'] = '停止編輯日期';
$string['edititem'] = '編輯這一項目';
$string['emailoncomplete'] = '當檢查表已經完成，用email通知';
$string['emailoncompletebody'] = '用戶 {$a->user}已經完成了在 \'{$a->coursename}\'課程裡的檢查表 \'{$a->checklist}\' 。
在此查看這檢查表：';
$string['emailoncompletebodyown'] = '您已經完成了在 \'{$a->coursename}\'課程裡的檢查表 \'{$a->checklist}\' 。
在此查看這檢查表：';
$string['emailoncomplete_help'] = '當檢查表已經完成，系統會以email通知：(1)這位已完成的學生，(2)這一課程上的所有教師，(3)或兩者都通知。

管理員可以用權限 \'mod:checklist/emailoncomplete\' 來控制誰會收到通知，預設上，所有教師和非編輯教師有這一權限。';
$string['emailoncompletesubject'] = '用戶 {$a->user}已經完成了檢查表 \'{$a->checklist}\' 。';
$string['emailoncompletesubjectown'] = '您已經完成了檢查表 \'{$a->checklist}\'';
$string['eventchecklistcomplete'] = '檢查表已完成';
$string['eventeditpageviewed'] = '編輯頁面已檢視';
$string['eventreportviewed'] = '報告已檢視';
$string['eventstudentchecksupdated'] = '學生檢查已更新';
$string['eventteacherchecksupdated'] = '教師檢查已更新';
$string['export'] = '匯出項目';
$string['forceupdate'] = '更新所有會自動檢查的項目';
$string['gradetocomplete'] = '完成的分數：';
$string['guestsno'] = '您沒有權限去檢視這一檢查表';
$string['headingitem'] = '這一項目是標題---它旁邊不會有勾選方格';
$string['import'] = '匯入項目';
$string['importfile'] = '選擇檔案來匯入';
$string['importfromcourse'] = '整個課程';
$string['importfromsection'] = '當前單元';
$string['indentitem'] = '縮進項目';
$string['itemcomplete'] = '已完成';
$string['items'] = '檢查表項目';
$string['linktomodule'] = '連結到這一模組';
$string['lockteachermarks'] = '鎖定教師分數';
$string['lockteachermarks_help'] = '若啟用，一旦教師儲存一個"是"的檢查結果，他們將無法更改它。只有具有\'mod/checklist:updatelocked\' 權限的用戶可以更改這檢查結果。';
$string['lockteachermarkswarning'] = '注意：一旦您已經儲存這些檢查結果，你將無法更改任何"是"的檢查結果。';
$string['modulename'] = '檢查表';
$string['modulename_help'] = '這檢查表模組可讓教師建立一個檢查表/應做事項清單/任務清單，以供他們的學生來執行';
$string['modulenameplural'] = '檢查表';
$string['moveitemdown'] = '項目往下移';
$string['moveitemup'] = '項目往上移';
$string['noitems'] = '檢查表中沒有項目';
$string['optionalhide'] = '隱藏可任選的項目';
$string['optionalitem'] = '這一項目是可以任意選擇的';
$string['optionalshow'] = '顯示可任選的項目';
$string['percentcomplete'] = '必要的項目';
$string['percentcompleteall'] = '所有項目';
$string['pluginadministration'] = '檢查表管理';
$string['pluginname'] = '檢查表';
$string['preview'] = '預覽';
$string['progress'] = '進度';
$string['removeauto'] = '移除課程模組項目';
$string['report'] = '檢視進度';
$string['reporttablesummary'] = '表格會顯示每一位學生在檢查表上已經完成的項目';
$string['requireditem'] = '這一項目是必要的--它必須被完成';
$string['resetchecklistprogress'] = '重設檢查表進度和用戶項目';
$string['savechecks'] = '儲存';
$string['showcompletemymoodle'] = '在儀表板頁面上顯示已完成的檢查表';
$string['showfulldetails'] = '顯示全部細節';
$string['view'] = '檢視檢查表';
$string['viewall'] = '檢視所有學生';
$string['viewallcancel'] = '取消';
$string['viewallsave'] = '儲存';
$string['viewsinglereport'] = '檢視這一用戶的進度';
