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
 * Strings for component 'enrol_self', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = '自訂歡迎訊息';
$string['defaultrole'] = '預設的角色指派';
$string['defaultrole_desc'] = '選擇當用戶自行選課時，被指派的角色';
$string['editenrolment'] = '編輯選課';
$string['enrolenddate'] = '結束日期';
$string['enrolenddate_help'] = '如果啟用，用戶只能在此日期前自行加入此課程。';
$string['enrolenddaterror'] = '選課的結束日期不可以早於開始日期。';
$string['enrolme'] = '將我加入';
$string['enrolperiod'] = '選課期間';
$string['enrolperiod_desc'] = '預設的選課期間有效的時間長度(以秒為單位）。如果設定為0，就預設不限制報名時間長度。';
$string['enrolperiod_help'] = '選課有效的時間長度，從用戶自行加入課程的那一刻算起。若停用此項，表示選課期間沒有限制。';
$string['enrolstartdate'] = '開始日期';
$string['enrolstartdate_help'] = '若啟用，用戶只能在此日期之後自行加入此課程。';
$string['groupkey'] = '使用群組選課密碼';
$string['groupkey_desc'] = '預設使用群組選課密碼';
$string['groupkey_help'] = '除了只限制知道密碼的用戶瀏覽課程以外，還可以讓用戶在選課時輸入分組密碼，這樣他就能自動加入到小組中。

要使用分組選課密碼，必須在群組設定中設定群組密碼的同時，在課程中設定選課密碼。';
$string['longtimenosee'] = '超過多久不活動就將他退選';
$string['longtimenosee_help'] = '若用戶有很長的時間沒有存取課程，那麼他們的選課會自動被取消。這一參數用來指定這個時間限制。';
$string['maxenrolled'] = '最大的選課用戶數目';
$string['maxenrolled_help'] = '指定可以自行選課的最大用戶數目。0表示無限制。';
$string['maxenrolledreached'] = '已經達到自行選課用戶數目的上限。';
$string['nopassword'] = '不需要選課密碼';
$string['password'] = '選課密碼';
$string['password_help'] = '只有知道選課密碼的人才能存取課程。

如果此處空白，那麼任何人都可以隨意選課。

如果指定選課密碼後，任何想選課的用戶都必須輸入這個密碼，他們只需要輸入一次就能完成選課。';
$string['passwordinvalid'] = '選課密碼錯誤，請重試';
$string['passwordinvalidhint'] = '所輸入的選課密碼不正確, 請重新輸入<br />(提示 - 以{$a}為開頭)';
$string['pluginname'] = '自行選課';
$string['pluginname_desc'] = '透過自行選課插件，用戶可以自己選擇想參加的課程。可以透過選課密碼保護課程。選課過程是透過人工選課插件完成的，所以必須在課程中啟用這個插件。';
$string['requirepassword'] = '必須設定選課密碼';
$string['requirepassword_desc'] = '新的課程必須設定選課密碼，舊課程不能刪除已經有的選課密碼。';
$string['role'] = '預設的被分配的角色';
$string['self:config'] = '配置自行選課插件到一課程';
$string['self:manage'] = '管理已經選課的用戶';
$string['self:unenrol'] = '將用戶從課程中退選';
$string['self:unenrolself'] = '自己從課程中退選';
$string['sendcoursewelcomemessage'] = '傳送課程的歡迎訊息';
$string['sendcoursewelcomemessage_help'] = '若啟用，當用戶自行選課時，會透過email收到一封歡迎的信。';
$string['showhint'] = '顯示提示';
$string['showhint_desc'] = '顯示訪客密碼的第一個字母';
$string['status'] = '允許自行選課';
$string['status_desc'] = '預設允許用戶自行選課';
$string['status_help'] = '此設定決定用戶是否能自行選課（如果他們有對應的權限，也可以自己退選）。';
$string['unenrol'] = '將用戶退選';
$string['unenrolselfconfirm'] = '您確定要將自己從"{$a}"課程中退選？';
$string['unenroluser'] = '您確定要從課程“{$a->course}”將用戶“{$a->user}”退選嗎？';
$string['usepasswordpolicy'] = '使用密碼規則';
$string['usepasswordpolicy_desc'] = '對選課密碼使用標準的密碼規則。';
$string['welcometocourse'] = '歡迎到 {$a}';
$string['welcometocoursetext'] = '歡迎進入 {$a->coursename}!

您所需處理的第一件事是先修改個人設定 以便他人可以多了解您:

  {$a->profileurl}';
