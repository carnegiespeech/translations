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
 * Strings for component 'backup', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = '選擇是否使用自動備份。若選用手動備份，自動備份將僅能透過 CLI script 的方式執行，如：透過命令列或是 cron 來執行。';
$string['autoactivedisabled'] = '停用';
$string['autoactiveenabled'] = '啟用';
$string['autoactivemanual'] = '手動';
$string['automatedbackupschedule'] = '時程';
$string['automatedbackupschedulehelp'] = '選擇每一週的那幾天執行自動備份工作。';
$string['automatedbackupsinactive'] = '網站管理員沒有啟動備份排程';
$string['automatedbackupstatus'] = '備份時程狀態';
$string['automatedsettings'] = '自動備份設定';
$string['automatedsetup'] = '自動備份設定';
$string['automatedstorage'] = '自動備份儲存';
$string['automatedstoragehelp'] = '選擇自動備份存放的路徑';
$string['backupactivity'] = '備份活動：{$a}';
$string['backupcourse'] = '備份課程：{$a}';
$string['backupcoursedetails'] = '課程細節';
$string['backupcoursesection'] = '章節：{$a}';
$string['backupcoursesections'] = '課程章節';
$string['backupdate'] = '備份時間';
$string['backupdetails'] = '備份細節';
$string['backupdetailsnonstandardinfo'] = '所選的檔案不是標準的 Moodle 備份檔案。還原程序會試著將其換為標準格式後再進行還原。';
$string['backupformat'] = '格式';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = '未知的格式';
$string['backupmode'] = '模式';
$string['backupmode10'] = '一般';
$string['backupmode20'] = '匯入';
$string['backupmode30'] = '中心（Hub）';
$string['backupmode40'] = '相同的網站';
$string['backupmode50'] = '自動';
$string['backupmode60'] = '轉換';
$string['backupsection'] = '備份課程章節：{$a}';
$string['backupsettings'] = '備份設定';
$string['backupsitedetails'] = '站台細節';
$string['backupstage16action'] = '繼續';
$string['backupstage1action'] = '下一步';
$string['backupstage2action'] = '下一步';
$string['backupstage4action'] = '開始備份';
$string['backupstage8action'] = '繼續';
$string['backuptype'] = '類型';
$string['backuptypeactivity'] = '活動';
$string['backuptypecourse'] = '課程';
$string['backuptypesection'] = '學習單元';
$string['backupversion'] = '備份版本';
$string['cannotfindassignablerole'] = '備份檔案中的角色 {$a} 無法對應到任何你可以指定的角色。';
$string['choosefilefromactivitybackup'] = '活動備份區';
$string['choosefilefromactivitybackup_help'] = '當備份活動使用預設設定時，備份檔案將存放於此';
$string['choosefilefromautomatedbackup'] = '自動備份';
$string['choosefilefromautomatedbackup_help'] = '包含自動產生的備份。';
$string['choosefilefromcoursebackup'] = '課程備份區';
$string['choosefilefromcoursebackup_help'] = '當備份課程使用預設設定時，備份檔案將存放於此';
$string['choosefilefromuserbackup'] = '使用者私人備份區';
$string['choosefilefromuserbackup_help'] = '若是備份課程時選擇了「使用者資訊匿名化」，備份檔案就存放於此';
$string['configgeneralactivities'] = '設定預設情形下，備份是否包含活動';
$string['configgeneralanonymize'] = '若是選擇此選項，預設將使用者的資訊匿名化。';
$string['configgeneralblocks'] = '設定預設情形下，備份是否包含區塊';
$string['configgeneralcomments'] = '設定預設情形下，備份是否包含評論';
$string['configgeneralfilters'] = '設定預設情形下，備份是否包含過濾器';
$string['configgeneralhistories'] = '設定預設情形下，備份是否包含使用者歷史記錄';
$string['configgenerallogs'] = '若是選擇此選項，預設情況下備份檔案將包含記錄（Log）。';
$string['configgeneralroleassignments'] = '若是選擇此選項，預設情形下將備份角色分派。';
$string['configgeneralusers'] = '設定預設情形下，備份是否包含使用者。';
$string['configgeneraluserscompletion'] = '若是選擇此選項，預設情形下將備份使用者的學習進度。';
$string['configloglifetime'] = '請指定一個備份日誌要保留的時間。超過此時間的舊日誌將會被自動刪除。

建議你將此時間縮短，因為備份日誌所紀錄的訊息非常多。';
$string['confirmcancel'] = '取消備份';
$string['confirmcancelno'] = '不放棄';
$string['confirmcancelquestion'] = '您確定要放棄嗎？您將遺失所有輸入的資訊。';
$string['confirmcancelyes'] = '取消';
$string['confirmnewcoursecontinue'] = '新課程警告';
$string['confirmnewcoursecontinuequestion'] = '課程還原過程中將會新增一個暫時（隱藏）的課程。若要中斷還原，請點擊放棄按鈕。在還原過程中，請不要關閉您的瀏覽器。';
$string['coursecategory'] = '此課程要恢復到的分類';
$string['courseid'] = '原始的 ID';
$string['coursesettings'] = '課程設定';
$string['coursetitle'] = '標題';
$string['currentstage1'] = '初始設定';
$string['currentstage16'] = '完成';
$string['currentstage2'] = '架構（Schema）設定';
$string['currentstage4'] = '確認及再檢查';
$string['currentstage8'] = '執行備份';
$string['dependenciesenforced'] = '由於未能滿足相依關係，您的設定已被修改了。';
$string['enterasearch'] = '輸入並搜尋';
$string['error_block_for_module_not_found'] = '在課程模組(id: {$a->mid})找到孤兒區塊 (id: {$a->bid})實例。

這一區塊將不會包含在備份檔中。';
$string['error_course_module_not_found'] = '找到孤兒課程模組(編號:{$a})，這模組不會加入備份檔。';
$string['errorfilenamemustbezip'] = '您所輸入的檔案必須是一個 ZIP 檔案，且其附檔名為 .mbz';
$string['errorfilenamerequired'] = '對於此次備份，您必須輸入一個合法的檔名';
$string['errorinvalidformat'] = '未知的備份格式';
$string['errorinvalidformatinfo'] = '所選的檔案並不是合法的 Moodle 備份，無法還原。';
$string['errorminbackup20version'] = '此備份是由開發版本的 Moodle Backup ({$a->backup} 所建立的。最低的版本需求為 {$a->min}。無法還原。';
$string['errorrestorefrontpage'] = '不允許還原至首頁。';
$string['executionsuccess'] = '建立備份成功。';
$string['filename'] = '檔案名稱';
$string['generalactivities'] = '包含活動';
$string['generalanonymize'] = '匿名化的資訊';
$string['generalbackdefaults'] = '一般備份的預設';
$string['generalblocks'] = '包含區塊';
$string['generalcomments'] = '包含評論';
$string['generalfilters'] = '包含過濾器';
$string['generalgradehistories'] = '包含歷史記錄';
$string['generalhistories'] = '包含歷史記錄';
$string['generallogs'] = '包含記錄（Log）';
$string['generalroleassignments'] = '包含角色分派';
$string['generalsettings'] = '一般備份設定';
$string['generalusers'] = '包含使用者';
$string['generaluserscompletion'] = '包含使用者的完整資訊';
$string['importbackupstage16action'] = '繼續';
$string['importbackupstage1action'] = '下一步';
$string['importbackupstage2action'] = '下一步';
$string['importbackupstage4action'] = '執行匯入';
$string['importbackupstage8action'] = '繼續';
$string['importcurrentstage0'] = '課程選擇';
$string['importcurrentstage1'] = '初始設定';
$string['importcurrentstage16'] = '完成';
$string['importcurrentstage2'] = '架構（Schema）設定';
$string['importcurrentstage4'] = '確認及再檢查';
$string['importcurrentstage8'] = '執行匯入';
$string['importfile'] = '匯入備份檔案';
$string['importsuccess'] = '匯入完成。請點擊繼續以回到課程。';
$string['includeactivities'] = '包含：';
$string['includeditems'] = '包含項目：';
$string['includesection'] = '章節 {$a}';
$string['includeuserinfo'] = '使用者資料';
$string['locked'] = '鎖定';
$string['lockedbyconfig'] = '此設定已被預設設定鎖定';
$string['lockedbyhierarchy'] = '由於相依關係而鎖定';
$string['lockedbypermission'] = '您沒有更改此設定的權限';
$string['loglifetime'] = '保持日誌檔';
$string['managefiles'] = '管理備份檔案';
$string['missingfilesinpool'] = '在備份過程中，有些檔案無法被儲存，備份檔將無法回存它們。';
$string['moodleversion'] = 'Moodle 版本';
$string['moreresults'] = '搜尋結果太多，請輸入更明確的搜尋條件';
$string['nomatchingcourses'] = '沒有可顯示的課程';
$string['norestoreoptions'] = '沒有您可以還原到的課程類別或是既有課程。';
$string['originalwwwroot'] = '備份的 URL';
$string['previousstage'] = '上一步';
$string['qcategory2coursefallback'] = '備份文件中的試題類別 "{$a->name}" 原來是位於系統/課程類別中，還原後將建立在課程類別中';
$string['qcategorycannotberestored'] = '無法還原試題類別 "{$a->name}"';
$string['question2coursefallback'] = '備份文件中的試題類別 "{$a->name}" 原來是位於系統/課程類別中，還原後將建立在課程類別中';
$string['questionegorycannotberestored'] = '這試題"{$a->name}" 無法經由還原建立。';
$string['restoreactivity'] = '還原活動';
$string['restorecourse'] = '還原課程';
$string['restorecoursesettings'] = '課程設定';
$string['restoreexecutionsuccess'] = '課程還原成功，請點擊繼續按鈕來檢視您還原的課程';
$string['restorefileweremissing'] = '某些檔案無法被回存，因為它們在備份檔中找不到。';
$string['restorenewcoursefullname'] = '新課程名稱';
$string['restorenewcourseshortname'] = '新課程簡稱';
$string['restorenewcoursestartdate'] = '新開始日期';
$string['restorerolemappings'] = '還原角色對應';
$string['restorerootsettings'] = '還原設定';
$string['restoresection'] = '還原章節';
$string['restorestage1'] = '確認';
$string['restorestage16'] = '復審';
$string['restorestage16action'] = '開始還原';
$string['restorestage1action'] = '下一步';
$string['restorestage2'] = '目的地';
$string['restorestage2action'] = '下一步';
$string['restorestage32'] = '處理';
$string['restorestage32action'] = '繼續';
$string['restorestage4'] = '設定';
$string['restorestage4action'] = '下一步';
$string['restorestage64'] = '完成';
$string['restorestage64action'] = '繼續';
$string['restorestage8'] = '結構（Schema）';
$string['restorestage8action'] = '下一步';
$string['restoretarget'] = '還原目標';
$string['restoretocourse'] = '還原到課程：';
$string['restoretocurrentcourse'] = '還原到此課程';
$string['restoretocurrentcourseadding'] = '合併備份的課程到此課程中';
$string['restoretocurrentcoursedeleting'] = '移除此課程的內容再進行還原';
$string['restoretoexistingcourse'] = '還原到已存在的課程';
$string['restoretoexistingcourseadding'] = '合併備份的課份到已存在的課程中';
$string['restoretoexistingcoursedeleting'] = '移除已存在的課程內容再進行還原';
$string['restoretonewcourse'] = '還原到一個新課程';
$string['restoringcourse'] = '課程還原中';
$string['restoringcourseshortname'] = '還原中';
$string['rootsettingactivities'] = '包含各種活動';
$string['rootsettinganonymize'] = '匿名化使用者資訊';
$string['rootsettingblocks'] = '包含各種區塊';
$string['rootsettingcalendarevents'] = '包含行事曆事件';
$string['rootsettingcomments'] = '包含評論';
$string['rootsettingfilters'] = '包含過濾器';
$string['rootsettinggradehistories'] = '包含成績記錄';
$string['rootsettingimscc1'] = '轉換成 IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = '轉換成 IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = '包含課程記錄（log）';
$string['rootsettingroleassignments'] = '包含使用者角色分派';
$string['rootsettings'] = '備份設定';
$string['rootsettingusers'] = '包含修課的使用者';
$string['rootsettinguserscompletion'] = '包含使用者學習進度細節';
$string['sectionactivities'] = '活動';
$string['sectioninc'] = '包含在備份中（無用戶資訊）';
$string['sectionincanduser'] = '包含在備份中並包含用戶資訊';
$string['selectacategory'] = '選擇一個類別';
$string['selectacourse'] = '選擇一門課程';
$string['setting_course_fullname'] = '課程名稱';
$string['setting_course_shortname'] = '課程簡稱';
$string['setting_course_startdate'] = '課程開始時間';
$string['setting_keep_groups_and_groupings'] = '保留目前的群組及分組設定';
$string['setting_keep_roles_and_enrolments'] = '保留目前的角色及選課狀況';
$string['setting_overwriteconf'] = '覆蓋課程設定';
$string['storagecourseandexternal'] = '課程備份文件區及指定的目錄';
$string['storagecourseonly'] = '課程備份區';
$string['storageexternalonly'] = '指定自動備份的目錄';
$string['totalcategorysearchresults'] = '分類總數：{$a}';
$string['totalcoursesearchresults'] = '課程總數：{$a}';
