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
 * Strings for component 'scorm', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = '啟動';
$string['activityloading'] = '你將會被自動重新導向到這活動，在';
$string['activitypleasewait'] = '活動載入中，請等待.....';
$string['adminsettings'] = '管理員設定';
$string['advanced'] = '進階';
$string['aicchacpkeepsessiondata'] = 'AICC HACP工作階段資料';
$string['aicchacpkeepsessiondata_desc'] = '要保存AICC HACP對話資料的天數(設定較高天數將使資料表塞滿舊資料，但隊除厝很有幫助)';
$string['aicchacptimeout_desc'] = '外部AICC HACP工作階段可以保持開放的時間也多長';
$string['allowapidebug'] = '啟用API除錯和追蹤()';
$string['allowtypeaicchacp'] = '開啟外部AICC HACP';
$string['allowtypeaicchacp_desc'] = '若啟用，將會允許AICC HACP外部溝通，而不需要用戶登入之後向外部的AICC包裹提出請求。';
$string['allowtypeexternal'] = '啟用外部包裹類型';
$string['allowtypeexternalaicc_desc'] = '若啟用，將允許使用一直接網址到一簡單AICC課程包';
$string['allowtypeimsrepository'] = '啟用IMS課程包裹類型';
$string['allowtypelocalsync'] = '啟用可以下載的課程包裹類型';
$string['apidebugmask'] = 'API除錯抓取遮罩 --使用簡單正規表達式
<username>:<activityname>
例如 admin:.* 將只用於管理員的除錯';
$string['areacontent'] = '內容檔案';
$string['areapackage'] = '課程包檔案';
$string['asset'] = '資源';
$string['assetlaunched'] = '已閱讀的資源';
$string['attempt'] = '使用';
$string['attempt1'] = '使用1次';
$string['attempts'] = '次使用';
$string['attemptsx'] = '使用{$a}次';
$string['attr_error'] = '在{$a->tag}標籤中，({$a->attr})的屬性值錯誤';
$string['autocontinue'] = '自動繼續';
$string['autocontinue_help'] = '<p><b>Auto-Continue</b></p>

<p>If Auto-continue is set to Yes, when a SCO calls the "close communication" method, automatically the next available SCO will launched.</p>

<p>If it is set to No, the users must use the "Continue" button to go on.</p>';
$string['averageattempt'] = '平均使用次數';
$string['badmanifest'] = '某些裝載清單錯誤:請看錯誤記錄';
$string['badpackage'] = '包裹/清單中有一些問題。請檢查後重試。';
$string['browse'] = '預覽';
$string['browsed'] = '已瀏覽';
$string['browsemode'] = '瀏覽模式';
$string['browserepository'] = '瀏覽儲藏庫';
$string['cannotfindsco'] = '無法找到SCO';
$string['chooseapacket'] = '選取或更新scorm包裏';
$string['completed'] = '已完成';
$string['confirmloosetracks'] = '警告：此課程包可能發生了改變或者被修改過了。如果改變了課程包的結構，那麼在更新過程中一些使用追蹤紀錄可能會遺失。';
$string['contents'] = '目錄';
$string['coursepacket'] = '課程包裹';
$string['coursestruct'] = '課程結構';
$string['currentwindow'] = '當前視窗';
$string['datadir'] = '檔案系統錯誤：無法建立課程資料目錄';
$string['defaultdisplaysettings'] = '預設的顯示設定';
$string['defaultgradesettings'] = '預設的計分設定';
$string['defaultothersettings'] = '其他的預設設定';
$string['deleteallattempts'] = '刪除所有SCORM使用紀錄';
$string['deleteattemptcheck'] = '您確定您要完全刪除這些作答紀錄嗎？';
$string['deleteuserattemptcheck'] = '您確定您要完全刪除您的作答紀錄嗎？';
$string['details'] = 'SCO 追蹤細節';
$string['directories'] = '顯示目錄連結';
$string['disabled'] = '關閉';
$string['display'] = '顯示';
$string['displayattemptstatus'] = '顯示作答狀態';
$string['displayattemptstatus_help'] = '若啟用，各個作答次的分數和成績會顯示在SCORM綱要頁面';
$string['displaycoursestructure'] = '在條目頁顯示課程結構';
$string['displaycoursestructure_help'] = '若啟用，內容目錄會顯示在SCORM綱要頁面';
$string['domxml'] = 'DOMXML外部程式庫';
$string['duedate'] = '到期日';
$string['element'] = '元素';
$string['enter'] = '進入';
$string['entercourse'] = '進入SCORM課程';
$string['errorlogs'] = '錯誤記錄';
$string['everyday'] = '每一天';
$string['everytime'] = '每次使用時';
$string['exceededmaxattempts'] = '你已經達到最大的作答次數';
$string['exit'] = '離開課程';
$string['exitactivity'] = '離開活動';
$string['expired'] = '抱歉，這活動已經在{$a}關閉，已經無法使用';
$string['external'] = '更新外來課程包的時間';
$string['failed'] = '失敗';
$string['finishscorm'] = '如果你已經看完這一資源，{$a}';
$string['finishscormlinkname'] = '點選這裡回到課程頁面';
$string['firstaccess'] = '第一次存取';
$string['firstattempt'] = '第一次使用';
$string['forcecompleted'] = '強迫完成';
$string['forcecompleteddesc'] = '預設強制完成的設定';
$string['forcejavascript'] = '強迫用戶去啟動JavaScript';
$string['forcejavascriptmessage'] = '要看到這一物件，需要有JavaScript。請在您的瀏覽器上啟用JavaScrip，並再試一次。';
$string['forcenewattempt'] = '強迫新的作答';
$string['forcenewattempt_help'] = '若啟用，每一次SCORM被存取時，將被算為一次新作答。';
$string['found'] = '找到裝載清單檔';
$string['frameheight'] = 'SCO架框的預設高度';
$string['framewidth'] = 'SCO架框的預設寬度';
$string['fullscreen'] = '填滿整個畫面';
$string['general'] = '一般資料';
$string['gradeaverage'] = '平均成績';
$string['gradeforattempt'] = '作答次的分數';
$string['gradehighest'] = '最高成績';
$string['grademethod'] = '評分方式';
$string['grademethod_help'] = '<p><b>Grade methods</b></p>

<p>The results of a SCORM/AICC activity shown in Grades pages can be rated in several modes:
    <ul>
	<li><b>SCO situation</b><br />This mode shows the number of completed/passed SCOes for the activity. The max value is the number of SCO.</li>
	<li><b>Highest grade</b><br />The grade page will display the highest score obtained by users in all passed SCOes.</li>
	<li><b>Average grade</b><br />If you choose this mode Moodle will calculate the average of all scores.</li>
	<li><b>Sum grade</b><br />With this mode all the scores will be added.</li>
</p>';
$string['gradereported'] = '成績報告';
$string['gradescoes'] = '分數狀況';
$string['gradesettings'] = '評分設定';
$string['gradesum'] = '加總';
$string['height'] = '高度';
$string['hidden'] = '隱藏';
$string['hidebrowse'] = '停用預覽模式';
$string['hidebrowse_help'] = '預覽模式允許學生在正式使用活動之前瀏覽它們。若預覽模式被關閉，預覽按鈕會被隱藏。';
$string['hideexit'] = '隱藏退出的超連結';
$string['hidenav'] = '隱藏導覽按鈕';
$string['hidereview'] = '隱藏回顧的按鈕';
$string['hidetoc'] = '課程結構顯示(TOC)';
$string['highestattempt'] = '最高使用次數';
$string['identifier'] = '題目識別碼';
$string['incomplete'] = '不完整';
$string['info'] = '訊息';
$string['interactions'] = '互動';
$string['interactionscorrectcount'] = '這一試題的答對次數';
$string['interactionsid'] = '元件的編號';
$string['interactionspattern'] = '正確反應的組型';
$string['interactionsscoremax'] = '原始分數的全距中的最大值';
$string['interactionsscoremin'] = '原始分數的全距中的最小值';
$string['interactionstype'] = '試題類型';
$string['interactionsweight'] = '指派到這元件的權重';
$string['invalidmanifestresource'] = '警告：在您的裝載清單檔案上有參照到下列資源，但是找不到它們：';
$string['invalidurl'] = '無效的網址';
$string['last'] = '最後瀏覽於';
$string['lastaccess'] = '最後瀏覽';
$string['lastattempt'] = '最後使用';
$string['lastattemptlock'] = '最後一次作答之後加以鎖定';
$string['lastattemptlock_help'] = '若啟用，學生在用完他所分配的作答次術後，將無法發動SCORM撥放器。';
$string['location'] = '顯示位址列';
$string['max'] = '最高分';
$string['maximumattempts'] = '使用次數';
$string['maximumattemptsdesc'] = '設定一個活動預設的最高做答次數';
$string['maximumattempts_help'] = '設設定啟用了作答次數的限制。他只限用於SCORM1.2和AICC課程包';
$string['maximumgradedesc'] = '設定一個活動的預設最高分數(配分)';
$string['menubar'] = '顯示選單列';
$string['min'] = '最低分';
$string['missing_attribute'] = '{$a->tag}標籤遺漏{$a->attr}屬性';
$string['missingparam'] = '必備的遺失了或發生錯誤';
$string['missing_tag'] = '遺漏{$a->tag}標籤';
$string['mode'] = '模式';
$string['modulename'] = 'SCORM/AICC 課程包';
$string['modulenameplural'] = 'SCORMs/AICCs 課程包';
$string['navigation'] = '導覽';
$string['newattempt'] = '開始新的使用';
$string['next'] = '繼續';
$string['noactivity'] = '沒有報告';
$string['noattemptsallowed'] = '允許作答的次數';
$string['noattemptsmade'] = '你已經作答的次數';
$string['no_attributes'] = '標籤{$a->tag} 必須有屬性';
$string['no_children'] = '標籤{$a->tag} 必須有子類';
$string['nolimit'] = '無限制的使用';
$string['nomanifest'] = '無法找到Manifest清單';
$string['noprerequisites'] = '抱歉，您還沒有達到存取這個學習物件的條件';
$string['noreports'] = '沒有報告';
$string['normal'] = '一般';
$string['noscriptnoscorm'] = '您的瀏覽器不支援 javascript 或是被停用，無法記錄追蹤資料。';
$string['notattempted'] = '未嘗試';
$string['not_corr_type'] = '標籤{$a->tag} 型態不正確';
$string['notopenyet'] = '抱歉，這一活動要到{$a}才可以使用';
$string['objectives'] = '目標';
$string['onchanges'] = '當它改變時';
$string['optallstudents'] = '全部用戶';
$string['optattemptsonly'] = '只限有作答的用戶';
$string['options'] = '選項';
$string['optionsadv'] = '選項(進階)';
$string['optnoattemptsonly'] = '只限於沒有作答過的用戶';
$string['organization'] = '組織';
$string['organizations'] = '組織';
$string['othersettings'] = '額外的設定';
$string['othertracks'] = '其他追蹤項目';
$string['package'] = '包裹的檔案';
$string['packagedir'] = '檔案系統錯誤：無法建立包裝目錄';
$string['packagefile'] = '沒有指定包裹檔案';
$string['package_help'] = '<p><b>Packages file</b></p>

<p>The package is a particular file with <b>zip</b> (or pif) extension that contains
   valid AICC or SCORM course definition files.</p>

<p>A <b>SCORM</b> package must contains in the root of zip a file named <b>imsmanifest.xml</b>
   that define SCORM course structure, resource location and many other things.</p>

<p>An <b>AICC</b> package is defined by several files (from 4 to 7) with defined extensions.
   Here you find the extensions meaning:</p>
   <ul>
	<li>CRS - Course Description file (mandatory)</li>
	<li>AU  - Assignable Unit file (mandatory)</li>
	<li>DES - Descriptor file (mandatory)</li>
	<li>CST - Course Structure file (mandatory)</li>
	<li>ORE - Objective Relationship file (optional)</li>
	<li>PRE - Prerequisites file (optional)</li>
	<li>CMP - Completition Requirements file (optional)</li>
   </ul>';
$string['packageurl'] = '網址';
$string['packageurl_help'] = '這一設定可以指定SCORM課程包的網址，
而不是經由檔案挑選器選擇一個檔案。';
$string['page-mod-scorm-x'] = '任何SCORM模組頁面';
$string['pagesize'] = '頁面大小';
$string['passed'] = '通過';
$string['php5'] = 'PHP 5 (DOMXML原始函式庫)';
$string['pluginname'] = 'SCORM包裹';
$string['popup'] = '在新視窗中開啟學習物件檔';
$string['popupmenu'] = '在下拉式選單中';
$string['popupopen'] = '在新視窗開啟包裝';
$string['position_error'] = '標籤{$a->tag} 不是{$a->parent}標籤的子標籤';
$string['preferencespage'] = '只適用於這一頁面的偏好';
$string['preferencesuser'] = '適用於這一報告的偏好';
$string['prev'] = '前一頁';
$string['raw'] = '原始分數';
$string['regular'] = '有規則的Manifest';
$string['report'] = '結果';
$string['reportcountallattempts'] = '{$a->nbusers} 位用户的 {$a->nbattempts} 次作答，共 {$a->nbresults} 個結果';
$string['reportcountattempts'] = '{$a->nbresults} 個結果（{$a->nbusers} 名用户）';
$string['reports'] = '報告';
$string['resizable'] = '允許調整視窗大小';
$string['result'] = '結果';
$string['results'] = '結果';
$string['review'] = '複習';
$string['reviewmode'] = '複習模式';
$string['scoes'] = '分數';
$string['score'] = '分數';
$string['scormclose'] = '直到';
$string['scormcourse'] = '學習課程';
$string['scorm:deleteownresponses'] = '刪除自己的作答';
$string['scorm:deleteresponses'] = '刪除SCORM的作答';
$string['scormloggingoff'] = 'API日誌紀錄是關閉的';
$string['scormloggingon'] = 'API日誌紀錄是開啟的';
$string['scormopen'] = '開啟';
$string['scormresponsedeleted'] = '刪除用戶作答';
$string['scorm:savetrack'] = '保存路徑';
$string['scorm:skipview'] = '跳過';
$string['scormtype'] = '類型';
$string['scormtype_help'] = '此設定決定課程包如何包含課程。這兒有 四種選項：

* 上傳的課程包裹 - 通過檔案選取器選擇 SCORM 課程包。<br />
* 外部 SCORM manifest - 指定一個 imsmanifest.xml 網址。注意：如果此網址 與您的網站功能變數名稱不同，那麼最好用“下載的課程包裹”，否則不能保存成績。<br />
* 下載的課程包裹 - 指定一個課程包裹的網址。課承包會被解壓縮並保存在本地端，並隨著外部 SCORM 課程包裹更新而更新。<br />
* 本地 IMS 內容倉儲 - 可以選擇在 IMS 倉儲裡的一個課程包裹<br />
* 外部 AICC 網址 - 這網址是單一 AICC 活動的啟動網址。會根據它建立一個虛擬的課程包裹。';
$string['scorm:viewreport'] = '檢視報告';
$string['scorm:viewscores'] = '檢視分數';
$string['scrollbars'] = '允許捲動視窗';
$string['selectall'] = '選擇全部';
$string['selectnone'] = '刪除全部';
$string['show'] = '顯示';
$string['sided'] = '在左邊';
$string['skipview'] = '學生跳過內容結構頁面';
$string['skipviewdesc'] = '預設何時要跳過內容結構頁面';
$string['skipview_help'] = '此設定決定是否內容結構(目錄)頁面應該被跳過（不顯示）。如果課程包裹只包含一個學習物件，內容結構頁面就總是被跳過。';
$string['slashargs'] = '警告：這一網站已經關閉了斜線參數物件可能無法如預期的運作。';
$string['stagesize'] = '頁框/視窗大小';
$string['stagesize_help'] = '這兩個設定用來指定這學習物件的框架/視窗的寬度或高度。';
$string['started'] = '開始';
$string['status'] = '狀態';
$string['statusbar'] = '顯示狀態列';
$string['student_response'] = '回答';
$string['subplugintype_scormreport'] = '報告';
$string['subplugintype_scormreport_plural'] = '報告';
$string['suspended'] = '中止';
$string['syntax'] = '語法錯誤';
$string['tag_error'] = '內容為{$a->value}的({$a->tag})是不知名的標籤';
$string['time'] = '時間';
$string['timerestrict'] = '限制在這一時間範圍回答';
$string['title'] = '標題';
$string['toc'] = '目錄';
$string['toolbar'] = '顯示工具列';
$string['too_many_attributes'] = '標籤{$a->tag} 太多屬性了';
$string['too_many_children'] = '標籤{$a->tag} 太多子標籤';
$string['totaltime'] = '時間';
$string['trackingloose'] = '注意：這個課程包的學習追蹤資料將會遺失。';
$string['type'] = '類型';
$string['typeaiccurl'] = '外部AICC網址';
$string['typeexternal'] = '外部SCORM裝載清單';
$string['typeimsrepository'] = '本地IMS內容倉儲';
$string['typelocal'] = '上傳的課程包裹';
$string['typelocalsync'] = '下載的課程包裹';
$string['unziperror'] = '課程包解壓縮時發現一個錯誤';
$string['updatefreq'] = '自動更新頻率';
$string['updatefreqdesc'] = '預設一個活動的自動更新的頻率';
$string['updatefreq_help'] = '這設定允許外部課程包可以自動下載並更新';
$string['validateascorm'] = '合法的SCORM包裹';
$string['validation'] = '檢驗結果';
$string['validationtype'] = '此偏好在設定正式版的SCORM所使用的DOMXML函式庫。如果您不清楚，就保留原來的選項。';
$string['value'] = '值';
$string['versionwarning'] = '{$a->tag}標籤出現警告:現存版本比1.3還舊，';
$string['viewallreports'] = '檢視{$a}次的使用報告';
$string['viewalluserreports'] = '檢視{$a}位用戶的報告';
$string['whatgrade'] = '使用評分';
$string['width'] = '寬度';
$string['window'] = '視窗';
