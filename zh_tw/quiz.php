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
 * Strings for component 'quiz', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessnoticesheader'] = '您可以預覽本測驗，但如果這是一個實際作答，你會被封鎖，因為：';
$string['action'] = '動作';
$string['adaptive'] = '適性模式';
$string['adaptive_help'] = '若啟用，在同一作答次中，對於同一試題可以嘗試多次回答。

舉例來說，若學生在某一試題上，第一次答錯了，系統會提示他錯了，因此他可以立即答第二次，然而若有設定"使用扣分規則"，則他嘗試愈多次該題得分就愈低。

例如，四選一的單選題，配分為3分，所以第一次就答對可得3分，第二次才答對可得2分，第三次才答對可得1分，第三次若沒答對則得0分(只剩一個選項沒選)。扣分規則是該題有3次選擇的機會，所以每錯一次，即扣配分的0.33333比例。';
$string['addaquestion'] = '增加一試題';
$string['addarandomquestion'] = '增加一隨機試題';
$string['addarandomquestion_help'] = '當試卷中有添加"隨機試題"時，這些試題會從指定的類別中隨機抽選(但不會與試卷上原有試題重複)。

這表示不同的學生會做到不同的試題；如果允許學生多次作答時，同一學生在不同的作答次中也會做到不同的試題。

"隨機試題"常會因為抽選到的試題"難易度的差異"而造成爭議，因此比較適用於練習性測驗，或在學期成績中佔分比例低的測驗上。';
$string['adddescriptionlabel'] = '增加描述/標籤';
$string['addingquestion'] = '新增一題';
$string['addingquestions'] = '頁面的這一邊用來管理題庫。試題分門別類，以便管理。類別中的試題可用於您的課程中的任何測驗。如果您選擇“公佈”它們，則其他課程也可以使用。<br/><br/>您在選擇或建立類別後才能新增或編輯試題。您可以選擇任何試題加入到左側的試卷中。';
$string['addmoreoverallfeedbacks'] = '再增加 {no} 個回饋欄';
$string['addnewgroupoverride'] = '增加群組覆蓋';
$string['addnewpagesafterselected'] = '在選定的試題後增加新頁';
$string['addnewquestionsqbank'] = '新增試題到類別{$a->catname}: {$a->link}';
$string['addnewuseroverride'] = '新增用戶覆蓋';
$string['addpagehere'] = '增加新頁到此';
$string['addquestion'] = '增加試題';
$string['addquestions'] = '增加試題';
$string['addquestionstoquiz'] = '增加試題到測驗中';
$string['addrandom'] = '加入{$a}道隨機題';
$string['addrandom1'] = '&#x25C4; 新增';
$string['addrandom2'] = '隨機試題';
$string['addrandomfromcategory'] = '從類別中新增隨機試題';
$string['addrandomquestion'] = '新增隨機試題';
$string['addrandomquestiontoquiz'] = '新增隨機試題到{$a}測驗卷';
$string['addselectedtoquiz'] = '將選擇的試題加到測驗卷';
$string['addtoquiz'] = '新增到測驗卷';
$string['affectedstudents'] = '影響了{$a}個';
$string['aftereachquestion'] = '在新增每一試題之後';
$string['afternquestions'] = '在新增{$a}試題之後';
$string['age'] = '多久';
$string['allattempts'] = '所有的作答紀錄';
$string['allinone'] = '無限制';
$string['allowreview'] = '允許重新檢閱';
$string['alreadysubmitted'] = '您已經送出這次作答的答案了';
$string['alternativeunits'] = '可替換的單位';
$string['alwaysavailable'] = '永遠可作答';
$string['analysisoptions'] = '分析選項';
$string['analysistitle'] = '項目分析表';
$string['answer'] = '回答';
$string['answered'] = '已經回答';
$string['answerhowmany'] = '單選或多選？';
$string['answers'] = '答案';
$string['answersingleno'] = '允許選取多個答案';
$string['answersingleyes'] = '僅可挑選一個答案';
$string['answerswithacceptederrormarginmustbenumeric'] = '允許誤差的答案，必須是數值';
$string['answertoolong'] = '答案太長(最多255個英文字元)，超過第{$a}行後的應刪除';
$string['aon'] = 'AON 格式';
$string['areyousureremoveselected'] = '你確定要刪除所有選出的試題嗎？';
$string['asshownoneditscreen'] = '顯示在編輯螢幕';
$string['attempt'] = '作答次數';
$string['attemptalreadyclosed'] = '這一作答次己經完成';
$string['attemptclosed'] = '作答次尚未關閉';
$string['attemptduration'] = '花費時間';
$string['attemptedon'] = '作答';
$string['attempterror'] = '你不能在這一時間做這一測驗，因為：{$a}';
$string['attemptfirst'] = '第一次作答';
$string['attemptincomplete'] = '此次作答(由 {$a}) 尚未完成';
$string['attemptlast'] = '最後一次作答';
$string['attemptnumber'] = '作答數';
$string['attemptquiznow'] = '開始作答';
$string['attempts'] = '作答次數';
$string['attemptsallowed'] = '允許作答次數';
$string['attemptsdeleted'] = '測驗作答紀錄已刪除';
$string['attemptselection'] = '選擇那些次作答來分析每一使用者:';
$string['attemptsexist'] = '這份測驗已經有人作答了，您不能再增加或刪除題目了。';
$string['attemptsnum'] = '作答：{$a}';
$string['attemptsnumthisgroup'] = '作答：{$a->total}次 ({$a->group})';
$string['attemptsnumyourgroups'] = '作答：{$a->total}次 ({$a->group})';
$string['attemptsonly'] = '只顯示有作答的學生';
$string['attemptstillinprogress'] = '作答持續中';
$string['attemptsunlimited'] = '不限制作答次數';
$string['back'] = '返回預覽試題';
$string['backtocourse'] = '回到課程';
$string['backtoquestionlist'] = '返回試題列表';
$string['backtoquiz'] = '返回編輯測驗';
$string['basicideasofquiz'] = '測驗卷製作基本概念';
$string['bestgrade'] = '最高得分';
$string['bothattempts'] = '顯示已作答和未作答的學生';
$string['browsersecurity'] = '瀏覽器安全性';
$string['browsersecurity_help'] = '若選擇了"全螢幕彈出式視窗加上一些JavaScript" 。
* 只有在學生用的網頁瀏覽器有啟用JavaScript時，這測驗才會開始。
* 這測驗會出現在全螢幕的彈出式視窗，遮蓋了所有其他視窗，且沒有導覽控制。
*盡可能防止學生使用複製和貼上功能。';
$string['calculated'] = '計算題';
$string['calculatedquestion'] = '第{$a}行，不支援計算題型，這課題目將被忽略。';
$string['cannotcreatepath'] = '無法建立路徑 ({$a})';
$string['cannoteditafterattempts'] = '無法增加或移除題目，因為已經作答過。';
$string['cannotfindprevattempt'] = '無法找到前次作答';
$string['cannotfindquestionregard'] = '無法取得改編問題！';
$string['cannotinsert'] = '無法插入題目';
$string['cannotinsertrandomquestion'] = '無法插入隨機試題';
$string['cannotloadquestion'] = '無法載入試題選項';
$string['cannotloadtypeinfo'] = '無法載入試題型態資訊';
$string['cannotopen'] = '無法開啟匯出的檔案({$a})';
$string['cannotrestore'] = '無法回存試題';
$string['cannotreviewopen'] = '你無法檢視這次作答，它仍在開放作答中';
$string['cannotsavelayout'] = '無法儲存版面設計';
$string['cannotsavenumberofquestion'] = '無法儲存每一頁顯示的試題數';
$string['cannotsavequestion'] = '無法儲存試題清單';
$string['cannotsetgrade'] = '無法為這測驗卷設定一新的最高分數';
$string['cannotsetsumgrades'] = '無法設定總成績';
$string['cannotstartgradesmismatch'] = '這一測驗無法開始作答。這一測驗卷設定總分為 {$a->grade}，但是裡面沒有一個題目有配分。你需要在"編輯測驗"頁面上修正錯誤。';
$string['cannotstartmissingquestion'] = '無法在此測驗上開始作答。這測驗的定義包含了一個不存在的試題。';
$string['cannotstartnoquestions'] = '無法在此測驗上開始作答。這測驗還沒有設定好，沒有試題在裡面。';
$string['cannotwrite'] = '無法寫入匯出檔案 ({$a})';
$string['caseno'] = '不，字母大小寫無所謂';
$string['casesensitive'] = '區分字母的大小寫';
$string['caseyes'] = '是的，字母大小寫必須符合';
$string['categories'] = '題目分類';
$string['category'] = '類別';
$string['categoryadded'] = '已經新增\'{$a}\'類別';
$string['categorydeleted'] = '已經刪除\'{$a}\'類別';
$string['categorynoedit'] = '您沒有修改\'{$a}\'類別的權限';
$string['categoryupdated'] = '此類別已經更新成功';
$string['close'] = '關閉視窗';
$string['closebeforeopen'] = '無法更新測驗。您指定的(結束日期)在(開始日期)前面。';
$string['closed'] = '已關閉';
$string['closepreview'] = '關閉預覽';
$string['closereview'] = '關閉檢視';
$string['comment'] = '評論';
$string['commentorgrade'] = '發表評論或者修改分數';
$string['comments'] = '評論';
$string['completedon'] = '完成於';
$string['configadaptive'] = '若選"是"，學生在這測驗的同一作答次中，可以對同一試題多次作答，直到答對為止。';
$string['configattemptsallowed'] = '限制學生在這一測驗上的作答次數。';
$string['configdecimaldigits'] = '顯示分數時，小數點後面要有幾位小數';
$string['configdecimalplaces'] = '顯示這測驗總分數時，小數點後面要有幾位小數';
$string['configdecimalplacesquestion'] = '顯示個別試題分數時，小數點後面要有幾位小數';
$string['configdelay1'] = '若你在此設一間隔時間，那學生在第一次做答結束之後，要經過這麼長時間才可做第二次。';
$string['configdelay1st2nd'] = '若你在此設一間隔時間，那學生在第一次做答結束之後，要經過這麼長時間才可做第二次。';
$string['configdelay2'] = '你在此設一間隔時間，那麼學生要做第三次或以上次數時，每次都需要等待那麼久的時間。';
$string['configdelaylater'] = '若你在此設一間隔時間，那麼學生要做第三次、第四次....時，每次都需要等待那麼久的時間才可做下一次。';
$string['configeachattemptbuildsonthelast'] = '如果允許多次作答，那麼每次重新作答時都會包含前一次作答的結果。';
$string['configgrademethod'] = '如果允許多次作答，那麼要以什麼方式計算學生在此測驗上的最後分數？';
$string['configintro'] = '你現在在此所設定的值，將成為日後你要建立新測驗時的預設值。你也可以指定哪一個測驗設定是屬於進階設定(會被隱藏，點選後才會開啟)。';
$string['configmaximumgrade'] = '原始分數會依照比例調整為最高多少分(與其他活動合併時用的分數)？';
$string['confignewpageevery'] = '當新增試題到測驗卷時，系統將會依據你所設定的每一頁題數，自動插入分頁符號。';
$string['configpenaltyscheme'] = '在"直到答對"的作答方式中，每一次錯誤的反應都會被扣分。';
$string['configpopup'] = '在測驗作答時，強迫開啟一彈出式視窗，並使用 JavaScript 技術來限制學生做複製與黏貼動作等等。';
$string['configrequirepassword'] = '學生必須在輸入這一密碼之後才能作測驗。';
$string['configrequiresubnet'] = '學生只能夠從這些電腦上作測驗。';
$string['configreviewoptions'] = '這些選項控制當用戶檢視測驗作答或看測驗報告時，他們可以看到什麼樣的訊息。';
$string['configshowblocks'] = '在測驗作答時顯示區塊';
$string['configshowuserpicture'] = '在作答時，將用戶的照片顯示在螢幕上。';
$string['configshufflequestions'] = '如果啟用此選項，則每一個學生在做此測驗時，此測驗的試題的順序將重新隨機排列。';
$string['configshufflewithin'] = '如果您啟用此選項，則每一學生開始做此測驗，試題之內的選項(答案)順序也會隨機排列。
這功能要將試題的設定上也啟用才能重新排列。';
$string['configtimelimit'] = '預設的時間限制(分)。0代表不設時間限制。';
$string['configtimelimitsec'] = '預設的時間限制(秒)。0代表不設時間限制。';
$string['configurerandomquestion'] = '配置隨機試題';
$string['confirmclose'] = '一旦您提交此次作答，您將無法再更改您這一次的答案。';
$string['confirmserverdelete'] = '確定要從清單中移除<b>{$a}</b>伺服器嗎?';
$string['confirmstartattemptlimit'] = '此測驗只能作答{$a}次。您將開始一次新的作答，您想要繼續進行嗎？';
$string['confirmstartattempttimelimit'] = '此測驗有時間限制並且只能作答 {$a} 次。您將開始一次新的作答，您想要繼續進行嗎？';
$string['confirmstarttimelimit'] = '本測驗有時間限制，您確認要開始了嗎？';
$string['containercategorycreated'] = '由於下列原因，此類別已經建立來儲存所有移至網站層級的原始類別中。';
$string['continueattemptquiz'] = '繼續上一次作答';
$string['continuepreview'] = '繼續上一次的預覽';
$string['copyingfrom'] = '複製題目 \'{$a}\'';
$string['copyingquestion'] = '複製題目';
$string['correct'] = '正確';
$string['correctanswer'] = '正確答案';
$string['correctanswerformula'] = '正確答案公式';
$string['correctansweris'] = '正確的答案：{$a}';
$string['correctanswerlength'] = '有效數字長度';
$string['correctanswers'] = '正確答案';
$string['correctanswershows'] = '正確答案顯示';
$string['corrresp'] = '正確回答';
$string['countdown'] = '倒數計時';
$string['countdownfinished'] = '考試已結束，現在您可以公佈答案了';
$string['countdowntenminutes'] = '測驗將於10分鐘後結束';
$string['coursetestmanager'] = '課程測驗管理(CTM)格式';
$string['createcategoryandaddrandomquestion'] = '添加類目並新增隨機試題';
$string['createfirst'] = '您必須先建立簡答題目。';
$string['createmultiple'] = '建立多個題目';
$string['createnewquestion'] = '產生新題目';
$string['createquestionandadd'] = '您必須先建立一些簡答題。';
$string['custom'] = '自定義格式';
$string['dataitemneed'] = '您需要至少增加一個資料項目集，才能得到一個有效的題目';
$string['datasetdefinitions'] = '類別{$a}可重複使用的資料集定義';
$string['datasetnumber'] = '數目';
$string['daysavailable'] = '可用天數';
$string['decimaldigits'] = '成績中保留幾位小數';
$string['decimalplaces'] = '成績中保留幾位小數';
$string['decimalplaces_help'] = '通過設定這個選項，您可以設定在顯示分數時，小數點後謬要保留幾位小數。

它只會影響分數的顯示。而不是資料庫內的數值，更不會影響到內部的計算。';
$string['decimalplacesquestion'] = '試題分數的小數位數';
$string['decimalplacesquestion_help'] = '這設定指定在顯示個別試題的分數時，小數點之後要出現幾位小數。';
$string['decimalpoints'] = '小數點';
$string['default'] = '預設';
$string['defaultgrade'] = '預設題目得分';
$string['defaultinfo'] = '題目的預設類別。';
$string['delay1'] = '第一次與第二次作答間隔多久？';
$string['delay1st2nd'] = '在第一次與第二次作答之間，是否強制設間隔時間？';
$string['delay1st2nd_help'] = '若啟用，學生必須等到指定時間過去之後，才能做第二次測驗';
$string['delay2'] = '需要間隔多久才能考最後一次？';
$string['delaylater'] = '在後續的作答次之間，是否強制設間隔時間？';
$string['delaylater_help'] = '若啟用，學生必須等到指定時間過去之後，才能做第三次和後續次數的測驗。';
$string['deleteattemptcheck'] = '您確定要完全刪除這些作答嗎?';
$string['deleteselected'] = '刪除所選擇的';
$string['deletingquestionattempts'] = '刪除試題作答記錄';
$string['description'] = '試卷說明';
$string['disabled'] = '已關閉';
$string['displayoptions'] = '顯示選項';
$string['download'] = '點選可下載匯出的類別檔案';
$string['downloadextra'] = '(檔案同時儲存於課程檔案的/backupdata/quiz目錄中)';
$string['duplicateresponse'] = '您之前已經交過相同的答案，因此本次交卷已被忽略。';
$string['eachattemptbuildsonthelast'] = '顯示前一次答題的結果於試卷上';
$string['eachattemptbuildsonthelast_help'] = '<p>如果允許多次參加測驗並將此選項設定為<b>是</b>，則每次參加測驗時都會是用上一次回答的答案作為缺省答案。這允許通過多次參加測驗來徹底完成它。</p>
　　
　　<p>如果希望每次參加測驗時都顯示新的問題，請選擇<b>否</b>。</p>';
$string['editcategories'] = '編輯類別';
$string['editcategory'] = '編輯類別';
$string['editcatquestions'] = '編輯分類試題';
$string['editingquestion'] = '編輯試題';
$string['editingquiz'] = '編輯測驗';
$string['editingquiz_help'] = '建立一測驗時的主要概念有：

*一份測驗，可以包含許多題目，可以排成一頁或數頁。測驗卷內可以包含多種題型夾雜出現(但不建議這樣做)。
*試題題庫是用來儲存所有試題，它以類別(指學科或年級)歸類存放。
*隨機試題---只從指定的類別中隨機抽選試題到測驗卷上，因此每個學生會看到不同的題目。
*隨機排列---包含"試題順序隨機排列"，(比較適於用在同一題型的測驗卷上)，"選項隨機排列"(與能用於選擇題和配合題)';
$string['editoverride'] = '編輯覆蓋';
$string['editqcats'] = '編輯題目分類';
$string['editquestions'] = '編輯試題';
$string['editquiz'] = '編輯測驗';
$string['editquizquestions'] = '編輯測驗試題';
$string['emailconfirmbody'] = '{$a->username},您好

感謝您在{$a->submissiontime} 將\'{$a->quizname}\'測驗的答案繳交到{$a->coursename}\' 課程\'中。

這封郵件確認我們已經接收到您的作答。

您可以連線至 {$a->quizurl} 檢閱測驗。';
$string['emailconfirmsmall'] = '謝謝你提交你的答案到 \'{$a->quizname}\'';
$string['emailconfirmsubject'] = '測驗繳交確認：{$a->quizname}';
$string['emailnotifybody'] = '{$a->username},您好

{$a->studentname} 已經完成了課程\'{$a->coursename}\'中的\'{$a->quizname}\'測驗。

您可以 在{$a->quizreviewurl} 檢閱這次作答記錄。';
$string['emailnotifysmall'] = '{$a->studentname} 已經完成 {$a->quizname}。請見 {$a->quizreviewurl}';
$string['emailnotifysubject'] = '{$a->studentname}已經完成測驗{$a->quizname}';
$string['empty'] = '空白';
$string['enabled'] = '啟用';
$string['endtest'] = '完成作答...';
$string['erroraccessingreport'] = '你不能存取這一報告';
$string['errorinquestion'] = '試題有錯誤';
$string['errormissingquestion'] = '錯誤:系統缺少編號為{$a}的試題';
$string['errornotnumbers'] = '錯誤: 答案必須是數值';
$string['errorunexpectedevent'] = '在作答次{$a->attemptid}的試題{$a->questionid}中，發現未預期的事件{$a->event} 。';
$string['essay'] = '申論題';
$string['essayquestions'] = '申論題目';
$string['everynquestions'] = '每{$a}個試題';
$string['everyquestion'] = '每個試題';
$string['everythingon'] = '全部開啟';
$string['export'] = '匯出';
$string['exportcategory'] = '匯出類別';
$string['exporterror'] = '匯出的過程發生錯誤';
$string['exportingquestions'] = '試題已經匯出到檔案中';
$string['exportname'] = '檔案名稱';
$string['exportquestions'] = '將試題匯出到檔案';
$string['extraattemptrestrictions'] = '作答時的額外限制';
$string['false'] = '錯誤';
$string['feedback'] = '回饋';
$string['feedbackerrorboundaryformat'] = '回饋的分數界限必須是百分比或者數字。您輸入的界限值{$a}無法識別。';
$string['feedbackerrorboundaryoutofrange'] = '回饋的分數界限必須在0%和100%之間。您輸入的界限值超出範圍。';
$string['feedbackerrorjunkinboundary'] = '您必須填寫在回饋分數界限框中，不能留空白。';
$string['feedbackerrorjunkinfeedback'] = '您必須填寫在回饋框中，不能留空白。';
$string['feedbackerrororder'] = '回饋分數界限必須按從高往低的順序。您輸入的值{$a}是沒有順序的。';
$string['file'] = '檔案';
$string['fileformat'] = '檔案格式';
$string['fillcorrect'] = '修正檔案';
$string['filloutnumericalanswer'] = '您至少要提供一個可能的答案和容許誤差。第一個符合的答案將用來決定成績和回饋。如果您在最後提供無答案的回饋，它們將會顯示給與答案都不符合的學生。';
$string['filloutoneanswer'] = '您必須提供至少一個可能的答案。答案欄留空白將會被忽略。可以使用 \'*\' 為萬用字元去搭配任何字元。第一個符合的答案將用來決定分數與回饋。';
$string['filloutthreequestions'] = '您必須至少填寫三個問題。留空不填的問題將作廢。';
$string['fillouttwochoices'] = '您至少必須填寫一個選項。選項留空的將作廢。';
$string['finishattemptdots'] = '完成作答....';
$string['finishreview'] = '完成檢閱';
$string['forceregeneration'] = '強制重新產生';
$string['formatnotfound'] = '找不到{$a}匯入 / 匯出格式';
$string['formatnotimplemented'] = '這個格式還沒支援，請回報這個問題。';
$string['formulaerror'] = '計算公式錯誤!';
$string['fractionsaddwrong'] = '您選的分數總和不等於100%<br/>而是等於{$a}%<br/>您想回去修正這個問題嗎？';
$string['fractionsnomax'] = '至少一個答案應該得分是 100%, 才有可能拿到本題的滿分.
<BR>想回去修正此題的錯誤分配嗎 ?';
$string['fromfile'] = '類別名稱從檔案來：';
$string['functiondisabledbysecuremode'] = '這一功能現在關閉中';
$string['generalfeedback'] = '一般的回饋';
$string['generalfeedback_help'] = '一般回饋是學生做完該題目後所顯示的文字。它不像是"選項回饋"要看學生是選了哪一個選項而顯示的回饋。

一般回饋是不管答對答錯都會顯示一樣的文字，通常用來說明該題目的更周延、完整的答案及給答錯者的補充教材(含網址)。';
$string['grade'] = '分數';
$string['gradeall'] = '評閱所有題目';
$string['gradeaverage'] = '平均分數';
$string['gradeboundary'] = '成績範圍';
$string['gradeessays'] = '評閱申論題';
$string['gradehighest'] = '最高分數';
$string['grademethod'] = '評分方式';
$string['grademethod_help'] = '<p align="center"><b>最後成績核計方法</b></p>
<p>當您允許學生對同一測驗多次作答時，可以有多種方法來計算學生在此測驗中的最後成績。</p>
<dl>
<dt><b>最高分數</b></dt>
<dd><p>最後成績是採用多次作答中的最高(好)的分數。</p></dd>
　　
<dt><b>平均分數</b></dt>
<dd><p>最後成績是採用多次作答所取得分數的平均數(每次分數都列入計算)。</p></dd>
　
<dt><b>首次分數</b></dt>
<dd><p>最後成績是採第一次作答時所得到的分數(後續幾次分數都被忽略)。</p></dd>
　　
<dt><b>末次分數</b></dt>
<dd><p>最後成績是採最後一次作答時所得到的分數(不考慮前面幾次分數的高低)。</p></dd>
</dt>';
$string['gradesdeleted'] = '測驗成績已經刪除';
$string['gradesofar'] = '{$a->method}：{$a->mygrade} / {$a->quizgrade}。';
$string['gradingdetails'] = '注意本次得分：{$a->raw} / {$a->max} 。';
$string['gradingdetailsadjustment'] = '本題總分<strong>{$a->max}</strong>分，加上先前的倒扣，本題得到<strong>{$a->cur}</strong>分。';
$string['gradingdetailspenalty'] = '本題倒扣了 {$a} 分。';
$string['gradingdetailszeropenalty'] = '沒有被倒扣分數。';
$string['gradingmethod'] = '評分方式：{$a}';
$string['groupoverrides'] = '群體覆蓋';
$string['groupsnone'] = '在這課程中沒有群體';
$string['guestsno'] = '抱歉, 訪客身分無法閱覽或作測驗';
$string['hidebreaks'] = '隱藏分頁符號';
$string['hidereordertool'] = '隱藏重新排序的工具';
$string['history'] = '回答記錄：';
$string['howquestionsbehave_desc'] = '試題在一測驗中的預設作答與計分方式';
$string['imagedisplay'] = '顯示的圖片';
$string['import'] = '匯入';
$string['importcategory'] = '匯入類別';
$string['importerror'] = '匯入時發生錯誤';
$string['importfilearea'] = '由課程檔案庫中匯入題目';
$string['importfileupload'] = '由上傳的檔案匯入題目';
$string['importfromthisfile'] = '由這個檔案匯入';
$string['import_help'] = '這功能讓你能夠以外部文字檔案來匯入試題。

若你的檔案包含非ASCII字元，就必須使用UTF-8編碼格式(包含所有東方語言)。

要特別注意，Microsoft Office 應用程式所產生的檔案不能直接匯入，它們必須放在純文字編輯器(如notepad++)檢查後，才能變成純文字檔。

匯入和匯出是一種插件式的資源。其他可用的格式可以在模組或插件資料庫中找到。';
$string['importingquestions'] = '從檔案匯入{$a}個問題';
$string['importmax10error'] = '題目出現錯誤。答案不該超過十個。';
$string['importmaxerror'] = '這個題目有一個錯誤，這裡有太多答案了！';
$string['importquestions'] = '從檔案匯入題目';
$string['inactiveoverridehelp'] = '學生沒有正確的群組或角色，因此不能做這測驗。';
$string['incorrect'] = '不正確';
$string['indivresp'] = '個人對每一試題的回答';
$string['info'] = '說明';
$string['infoshort'] = '訊';
$string['inprogress'] = '進行中';
$string['introduction'] = '介紹';
$string['invalidattemptid'] = '沒有這個作答編號存在';
$string['invalidcategory'] = '類別編號是無效的';
$string['invalidnumericanswer'] = '您輸入的答案之一不是有效的數字。';
$string['invalidnumerictolerance'] = '您輸入的容錯誤差之一不是有效的數字。';
$string['invalidoverrideid'] = '無效的覆蓋編號';
$string['invalidquestionid'] = '無效的試題編號';
$string['invalidquizid'] = '無效的測驗編號';
$string['invalidsource'] = '來源視為無效。';
$string['invalidsourcetype'] = '無效的來源型態。';
$string['invalidstateid'] = '無效的狀態編號';
$string['lastanswer'] = '您前次答案是';
$string['layout'] = '版面設計';
$string['layoutasshown'] = '測驗卷版面設計如同顯示';
$string['layoutasshownwithpages'] = '測驗卷版面設計如同顯示。<small>(每{$a}題自動產生新頁面)</small>';
$string['layoutshuffledandpaged'] = '試題隨機排列，每一頁{$a}個試題';
$string['layoutshuffledsinglepage'] = '試題隨機排列，全部在同一頁上。';
$string['link'] = '連結';
$string['listitems'] = '列出測驗項目';
$string['literal'] = '逐字';
$string['loadingquestionsfailed'] = '裝載試題失敗：{$a}';
$string['makecopy'] = '另存為一個新題目';
$string['managetypes'] = '管理試題類型和伺服器';
$string['manualgrading'] = '評審';
$string['mark'] = '送出';
$string['markall'] = '送出此頁';
$string['marks'] = '得分';
$string['match'] = '配合題';
$string['matchanswer'] = '配合的答案';
$string['matchanswerno'] = '配合的答案 {$a}';
$string['max'] = '最大';
$string['messageprovider:confirmation'] = '確認你自己的測驗提交';
$string['messageprovider:submission'] = '通知測驗提交';
$string['min'] = '最小';
$string['minutes'] = '分';
$string['missingcorrectanswer'] = '必須指定正確答案';
$string['missingitemtypename'] = '缺少名稱';
$string['missingquestion'] = '這試題可能已經不存在';
$string['modulename'] = '測驗卷';
$string['modulename_help'] = '測驗模組可以讓教師以各種試題類型。如選擇題、簡答題、配合題、數字題、克漏字、申論題等建立線上測驗。

教師可以允許同一測驗作答多次，並使用從題庫隨機抽選試題，試題順序隨機排列、選擇題或配合題選項隨機排列等方式，以減少作弊的可能性。

他也可以設定測驗開放予關閉的日期，或每次做答的時間限制(會有倒數的計時器)。

除了申論題外，每次作答都會自動計分，而分數會轉到成績簿上。

教師可以提供三種回饋，答題時的提示(依選項而不同)，做完該題後的一般回饋(都相同)，以及做完測驗之後的整體回饋(分成數個等級)。

此測驗可以用於：

*課程的正式考試
*每一單元的精熟測驗
*使用以往的舊題目做練習性測驗
*提供學習表現立即回饋
*讓學生自我評量';
$string['modulenameplural'] = '測驗卷';
$string['moveselectedonpage'] = '移動選出的試題到頁面：{$a}';
$string['multichoice'] = '選擇題';
$string['multipleanswers'] = '至少選擇一個答案';
$string['multiplier'] = '多選題';
$string['name'] = '名稱';
$string['navnojswarning'] = '警告：這些鏈結無法儲存你的答案，請使用此頁底下的"下一個"按鈕。';
$string['neverallononepage'] = '絕不，所有試題放在一頁。';
$string['newattemptfail'] = '錯誤：無法在這測驗上開始新的作答';
$string['newpage'] = '新頁面';
$string['newpageevery'] = '自動開始一新頁面';
$string['newpage_help'] = '<p align="center"><b>Questions per page</b></p>

<p>For longer quizzes it makes sense to stretch the quiz over several pages by limiting the number of questions per page. When adding questions to the quiz page breaks will automatically be inserted according to the setting you choose here. However you will also be able to move page breaks around by hand later on the editing page.
</p>';
$string['noanswers'] = '並未選擇答案！';
$string['noattempts'] = '尚未有人回答過此試題';
$string['noattemptsfound'] = '沒找到作答紀錄';
$string['noattemptstoshow'] = '沒有作答結果可顯示';
$string['nocategory'] = '錯誤或是沒有指定類別';
$string['noclose'] = '沒有關閉日期';
$string['nocommentsyet'] = '還沒有評論';
$string['noconnection'] = '現在無法連接到網頁伺服器上，以處理這一題目。請聯絡網站管理員。';
$string['nodataset'] = '沒有任何東西-它不是萬用字元';
$string['nodatasubmitted'] = '沒有資料被提交';
$string['noessayquestionsfound'] = '找不到人工評分的題目';
$string['nogradewarning'] = '這測驗是不計分的，因此你不能設定以分數區分的整體回饋。';
$string['nomoreattempts'] = '不可以再作答了';
$string['none'] = '沒有';
$string['noopen'] = '沒有開放日期';
$string['nooverridedata'] = '你必須至少覆蓋一個測驗設定';
$string['nopossibledatasets'] = '沒有可能的資料集';
$string['noquestionintext'] = '這試題文字沒有包含嵌入的試題';
$string['noquestions'] = '尚未加入題目';
$string['noquestionsfound'] = '沒有找到題目';
$string['noquestionsinquiz'] = '這測驗中沒有試題';
$string['noquestionsnotinuse'] = '隨機試題無法使用，因為它所對應的類別是空的';
$string['noquestionsonpage'] = '空白頁面';
$string['noresponse'] = '無回覆';
$string['noreview'] = '本試題不允許重新檢視作答結果';
$string['noreviewattempt'] = '你不被允許重新檢視作答結果';
$string['noreviewshort'] = '沒被授權';
$string['noreviewuntil'] = '本試題 {$a}　以後才可以檢視作答結果';
$string['noreviewuntilshort'] = '可用的{$a}';
$string['noscript'] = 'JavaScript 必須要啟動才能繼續!';
$string['notavailabletostudents'] = '注意：這個測驗未開放給您的學生';
$string['notenoughrandomquestions'] = '在這類別中 {$a->category}沒有足夠的試題來建立這試題 {$a->name} ({$a->id})。';
$string['notenoughsubquestions'] = '沒有定義足夠的小題!<br>您要退回去修改嗎？';
$string['notimedependentitems'] = '這測驗模組目前不支援計時給分的題目。您只能設定整個測驗的時間限制。您是否希望使用不同的試題(或仍使用現在題目)';
$string['notyetgraded'] = '還沒被計分過';
$string['notyetviewed'] = '還沒被檢視過';
$string['notyourattempt'] = '這不是你的作答次！';
$string['noview'] = '沒有選修此課程，不允許看到這一測驗';
$string['numattempts'] = '{$a->studentnum} {$a->studentstring} 已經作答 {$a->attemptnum} 次';
$string['numattemptsmade'] = '此測驗已被作答{$a}次';
$string['numberabbr'] = '#';
$string['numerical'] = '數字題';
$string['numquestionsx'] = '試題：{$a}';
$string['onlyteachersexport'] = '只有教師可以匯出題目';
$string['onlyteachersimport'] = '只有被授權的教師可以匯入題目';
$string['onthispage'] = '這一頁面';
$string['open'] = '沒被回答過';
$string['openclosedatesupdated'] = '已更新測驗開放和關閉的日期';
$string['optional'] = '選項';
$string['orderandpaging'] = '排序與分頁';
$string['orderandpaging_help'] = '你可以在試題前面填上10, 20, 30, 40...來作為試題排序的依據，以10為間距，是為了方便插入額外的試題。要重排問題順序時，只要更改數字然後點選"重排試題"按鈕。

要在某一特定試題之後，添加分頁符號，勾選試題旁邊的方格，然後點選"再選出的試題之後添加新頁面"按鈕。

試題多，要排成好幾頁，請點選"重新分頁"按鈕，並指名每一頁要放幾個試題。';
$string['orderingquiz'] = '排序與分頁';
$string['outof'] = '{$a->grade}分（滿分為{$a->maxgrade}分）';
$string['outofpercent'] = '{$a->grade}分（滿分為{$a->maxgrade}分，百分比{$a->percent}%）';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = '總回饋';
$string['overallfeedback_help'] = '整體回饋是當測驗做完之後，依據學生得分高低而顯示的不同文字。
教師可以用指定分數界線方式(用百分比或數值)方式將學生切割成幾個等級之後，每一等級給予不同的讚美或鼓勵。';
$string['overdue'] = '過期';
$string['override'] = '覆蓋';
$string['overridedeletegroupsure'] = '你確定你要為群組{$a}刪除覆蓋？';
$string['overridedeleteusersure'] = '你確定你要為用戶{$a}刪除覆蓋？';
$string['overridegroup'] = '覆蓋群體';
$string['overridegroupeventname'] = '{$a->quiz} - {$a->group}';
$string['overrides'] = '覆蓋';
$string['overrideuser'] = '覆蓋用戶';
$string['overrideusereventname'] = '{$a->quiz}-覆蓋';
$string['page-mod-quiz-edit'] = '編輯測驗頁面';
$string['page-mod-quiz-x'] = '任何測驗模組頁面';
$string['pagesize'] = '每頁顯示的作答次數：';
$string['parent'] = '父類別';
$string['parentcategory'] = '上層類別';
$string['parsingquestions'] = '由匯入的檔案來解析題目資料';
$string['partiallycorrect'] = '部分正確';
$string['penalty'] = '倒扣';
$string['penaltyscheme'] = '使用倒扣';
$string['penaltyscheme_help'] = '<p align="center"><b>使用扣分規則</b></p>

<p>如果測驗是以適性(adaptive)模式實施，那就會允許學生在答錯之後繼續嘗試作答，直到答對。在這種情況下，你可能考慮針對每個錯誤反應採取扣分，這使得嘗試愈多次的才答對的人，分數就會愈低。在設定或編輯試題的時候，每一個誘答的扣分比例，是個別決定的。</p>

<p>除非這測驗採用適性模式執行，否則這一設定不會有效果。</p>';
$string['percentcorrect'] = '正確率';
$string['pleaseclose'] = '您的請求已經被處理，現在可以關閉這個視窗了';
$string['pluginadministration'] = '測驗管理';
$string['pluginname'] = '測驗卷';
$string['popup'] = '在安全加密連線的視窗顯示測驗題';
$string['popupblockerwarning'] = '此測驗會在安全模式下執行，這意味著您需要在一個安全連線(SSL)的視窗中答題。請關閉瀏覽器阻擋彈出視窗的設定，謝謝。';
$string['popupnotice'] = '學生將在安全連線(SSL)下的視窗看到這題目';
$string['preprocesserror'] = '在預先處理時發生錯誤';
$string['preview'] = '預覽';
$string['previewquestion'] = '問題預覽';
$string['previewquiz'] = '預覽 {$a}';
$string['previewquiznow'] = '立刻預覽測驗';
$string['previous'] = '先前的狀態';
$string['publish'] = '公佈';
$string['publishedit'] = '您必須要有這個類別中公開課程的編輯或增加問題的權限';
$string['qbrief'] = '題號: {$a}';
$string['qname'] = '名稱';
$string['qti'] = 'IMS QTI 格式';
$string['qtypename'] = '題型，名稱';
$string['question'] = '試題';
$string['questionbankcontents'] = '題庫內容';
$string['questionbankmanagement'] = '題庫管理';
$string['questionbehaviour'] = '試題動作';
$string['questioncats'] = '試題類別';
$string['questiondeleted'] = '這題已經被刪除了，請聯絡您的教師';
$string['questioninuse'] = '這題\'{$a->questionname}\'正被下列測驗使用中：<br />{$a->quiznames}<br />，因此只能從類別中刪除此題，而不能從測驗中刪除。';
$string['questionmissing'] = '這一工作階段的試題不見了';
$string['questionname'] = '試題名稱';
$string['questionnonav'] = '<span class="accesshide">試題 </span>{$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnonavinfo'] = '<span class="accesshide">訊息 </span>{$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnotloaded'] = '試題{$a}已經從資料庫被裝載';
$string['questionorder'] = '試題順序';
$string['questions'] = '試題';
$string['questionsinclhidden'] = '試題（包括隱藏的）';
$string['questionsinthisquiz'] = '測驗卷中的試題';
$string['questionsperpage'] = '每頁題數';
$string['questionsperpageselected'] = '因為每一頁試題數已經被設定，所以頁面現在是固定的。其結果是分頁控制功能被關閉。你可以在{$a}更改這一點。';
$string['questionsperpagex'] = '每一頁幾題：($a)';
$string['questiontext'] = '試題內容';
$string['questiontextisempty'] = '空白試題文字]';
$string['questiontype'] = '題型 {$a}';
$string['questiontypesetupoptions'] = '設定選項給題型：';
$string['quiz:attempt'] = '測驗作答';
$string['quizavailable'] = '截止作答日期: {$a}';
$string['quizclose'] = '關閉測驗';
$string['quizclosed'] = '測驗終止作答時間 {$a}';
$string['quizcloses'] = '關閉測驗';
$string['quizcloseson'] = '測驗將於{$a}關閉';
$string['quiz:deleteattempts'] = '刪除作答';
$string['quiz:emailconfirmsubmission'] = '繳交後的有電子郵件確認';
$string['quiz:emailnotifysubmission'] = '繳交後的有電子郵件通知';
$string['quiz:grade'] = '人工閱卷';
$string['quiz:ignoretimelimits'] = '忽略測驗的時間限制';
$string['quizisclosed'] = '這測驗已經關閉';
$string['quizisclosedwillopen'] = '測驗關閉 (開啟 {$a})';
$string['quizisopen'] = '這測驗開啟中';
$string['quizisopenwillclose'] = '測驗開啟(關閉 {$a})';
$string['quiz:manage'] = '管理測驗';
$string['quiz:manageoverrides'] = '管理測驗覆蓋';
$string['quiznavigation'] = '測驗導覽';
$string['quizopen'] = '開放測驗';
$string['quizopenclose'] = '開啟和關閉日期';
$string['quizopenclose_help'] = '學生只能在開始時間之後開始作答，並且在關閉時間之前完成此測驗。';
$string['quizopened'] = '測驗是開啟的';
$string['quizopenedon'] = '測驗在{$a}被開啟';
$string['quizopens'] = '測驗開放';
$string['quizopenwillclose'] = '測驗是開啟的，將會在{$a}關閉';
$string['quizordernotrandom'] = '測驗題目順序不是隨機排列的';
$string['quizorderrandom'] = '*測驗題目順序是隨機排列';
$string['quiz:preview'] = '預覽測驗';
$string['quiz:regrade'] = '測驗作答次重新計分';
$string['quiz:reviewmyattempts'] = '回顧您自己的作答紀錄';
$string['quizsettings'] = '測驗設定';
$string['quiztimer'] = '測驗計時器';
$string['quiz:view'] = '檢視測驗資訊';
$string['quiz:viewreports'] = '檢視測驗報告';
$string['quizwillopen'] = '這一測驗將開啟於{$a}';
$string['random'] = '隨機選題';
$string['randomcreate'] = '建立隨機題';
$string['randomfromcategory'] = '機試題，從類別：';
$string['randomfromexistingcategory'] = '隨機試題，從一現有的類別';
$string['randomnosubcat'] = '隨機試題，只從這一類別，不用下層類別';
$string['randomquestionusinganewcategory'] = '隨機試題，使用一新類別';
$string['randomwithsubcat'] = '試題來自這一類別和它的子類別';
$string['readytosend'] = '您正要送交整份測驗去評分。您確定要繼續嗎？';
$string['reattemptquiz'] = '再測驗一次';
$string['recentlyaddedquestion'] = '最新增加的題目！';
$string['recurse'] = '也顯示子類別中的題目';
$string['regrade'] = '重新評分所有回答中';
$string['regradecomplete'] = '重新評分完畢所有回答結果';
$string['regradecount'] = '{$a->attempt} 得分的 {$a->changed} 次已經更新';
$string['regradedisplayexplanation'] = '在重新評分時改變的作答，會以超連結顯示在試題回顧視窗中';
$string['regradenotallowed'] = '您沒有重新評分測驗的權限。';
$string['regradingquestion'] = '將"{$a}"重新評分';
$string['regradingquiz'] = '將測驗"{$a}"重新評分';
$string['remove'] = '移除';
$string['removeallquizattempts'] = '刪除全部測驗記錄';
$string['removeemptypage'] = '移除空白頁';
$string['removeselected'] = '移除被選出的';
$string['rename'] = '改名';
$string['renderingserverconnectfailed'] = '伺服器 {$a} 處理RQP請求失敗，請檢查URL.';
$string['reorderquestions'] = '重排試題順序';
$string['reordertool'] = '顯示計分工具';
$string['repaginate'] = '每頁有 {$a} 個問題';
$string['repaginatecommand'] = '重新分頁';
$string['repaginatenow'] = '現在重新分頁';
$string['replace'] = '替換';
$string['replacementoptions'] = '替換選項';
$string['report'] = '報告';
$string['reportanalysis'] = '項目分析';
$string['reportfullstat'] = '詳細統計';
$string['reportmulti_percent'] = '多百分比';
$string['reportmulti_q_x_student'] = '多學生選擇';
$string['reportmulti_resp'] = '個人的回答';
$string['reportnotfound'] = '沒找到報告({$a})';
$string['reportoverview'] = '總結';
$string['reportregrade'] = '個人評語';
$string['reportresponses'] = '答題細節';
$string['reports'] = '報表';
$string['reportsimplestat'] = '小結';
$string['requirepassword'] = '需要密碼';
$string['requirepassword_help'] = '如果您指定了一個密碼，則所有學生必須輸入此一密碼才能參加測驗。';
$string['requiresubnet'] = '需要網路位址';
$string['requiresubnet_help'] = '<p>您可以通過給定一系列以都好分割的完整IP位址，對局域網或Internet上可以訪問此測驗的子網進行限制。</p>
　　
　　<p>這只對於需要保護的測驗(需要確定只有一個房間裏的人才可以訪問測驗)來說是非常有用的。</p>
　　
　　<p>例如：<b>192.168. , 231.54.211.0/20, 231.3.56.211</b></p>
　　
　　<p>您可以使用三種類型的數位(不能是用功能變數名稱)：
　　<ol>
　　<li>完整IP位址如<b>192.168.10.1</b>，它與一台電腦(或代理)對應。</li>
　　<li>部分位元址如<b>192.168</b>，它匹配所有以此數字開始的位址。</li>
　　<li>CIDR格式，如<b>231.54.211.0/20</b>，它允許您指定子網。</li>
　　</ol>
　　</p>
　　
　　<p>地址間的空格會被忽略。</p>';
$string['response'] = '回答';
$string['responses'] = '回答';
$string['results'] = '結果';
$string['reuseifpossible'] = '使用先前移除的';
$string['reverttodefaults'] = '回復到測驗預設值';
$string['review'] = '復習';
$string['reviewafter'] = '當測驗結束時允許重新檢視';
$string['reviewalways'] = '任何時間都可重新檢視';
$string['reviewattempt'] = '回顧作答次';
$string['reviewbefore'] = '在測驗進行中允許重新檢視';
$string['reviewclosed'] = '測驗結束後';
$string['reviewduring'] = '在作答過程中';
$string['reviewimmediately'] = '作答結束當時';
$string['reviewnever'] = '不允許重新檢視';
$string['reviewofattempt'] = '回顧第 {$a} 次作答';
$string['reviewofpreview'] = '預覽檢閱';
$string['reviewopen'] = '晚一些，但測驗仍然開放';
$string['reviewoptions'] = '學生可以覆閱';
$string['reviewoptionsheading'] = '檢閱選項';
$string['reviewoptionsheading_help'] = '這些選項控制什麼時候，學生可以檢視自己的作答結果或看測驗報告。

**在作答的過程**這設定只有在某種作答方式上有用，如，"直到答對法"在每次作答時都會顯示回饋。

**在作答之後，立即可看**這設定在學生按下"全部提交並完成測驗"按鈕之後，前兩分鐘之內可以看到。

**稍後，但測驗仍然開啟**在測驗提交之後。測驗關閉之前，都可以看到。

**在測驗關閉之後**在測驗關閉之後可以看到，但是如果該測驗沒有設定關閉日期，這些結果學生永遠看不到。';
$string['reviewresponse'] = '覆閱回應';
$string['reviewresponsetoq'] = '回頭檢查答案(試題{$a})';
$string['reviewthisattempt'] = '回頭檢查你在這一作答次上的答案';
$string['rqp'] = '遠端試題(RQ)';
$string['rqps'] = '遠端試題(RQ)';
$string['sameasoverall'] = '與整體分數一樣';
$string['save'] = '儲存';
$string['saveandedit'] = '儲存更改並編輯試題';
$string['saveattemptfailed'] = '無法儲存當前的測驗作答次';
$string['savedfromdeletedcourse'] = '儲存自刪除的課程 "{$a}"';
$string['savegrades'] = '計算試卷總分';
$string['savemyanswers'] = '儲存我的解答';
$string['savenosubmit'] = '儲存但還不交卷';
$string['saveoverrideandstay'] = '儲存並輸入另一個覆蓋';
$string['savequiz'] = '儲存這份測驗';
$string['saving'] = '儲存中';
$string['savingnewgradeforquestion'] = '為試題編號 {$a}儲存新的配分';
$string['savingnewmaximumgrade'] = '儲存新的最高分數';
$string['score'] = '原始分數';
$string['scores'] = '分數';
$string['select'] = '選擇';
$string['selectall'] = '全選';
$string['selectcategory'] = '選擇類別';
$string['selectedattempts'] = '選出的作答...';
$string['selectnone'] = '取消選取';
$string['selectquestiontype'] = '--選擇試題類型--';
$string['serveradded'] = '已加入的伺服器';
$string['serveridentifier'] = 'Identifier';
$string['serverinfo'] = '伺服器資訊';
$string['servers'] = '伺服器';
$string['serverurl'] = '伺服器的URL';
$string['settingsoverrides'] = '設定覆蓋';
$string['shortanswer'] = '簡答題';
$string['show'] = '顯示';
$string['showall'] = '在一頁中顯示所有題目';
$string['showblocks'] = '在測驗作答時顯示區塊';
$string['showblocks_help'] = '若設為"是"，在測驗作答時，正常的區塊將會顯示出來。';
$string['showbreaks'] = '顯示分頁符號';
$string['showcategorycontents'] = '顯示類別內容{$a->arrow}';
$string['showcorrectanswer'] = '回饋訊息中同時顯示正確答案';
$string['showdetailedmarks'] = '顯示成績細節';
$string['showeachpage'] = '一次顯示一頁';
$string['showfeedback'] = '答題後，顯示回饋訊息嗎？';
$string['showinsecurepopup'] = '作答時使用"安全"彈出視窗';
$string['shownoattempts'] = '顯示未作答的學生';
$string['shownoattemptsonly'] = '只顯示未作答的學生';
$string['showteacherattempts'] = '顯示有作答的老師';
$string['showuserpicture'] = '顯示用戶的照片';
$string['showuserpicture_help'] = '若啟用，在作答時或回顧時，學生的姓名和照片會顯示在螢幕上。這可方便監考老師確認是否有人冒名代考。';
$string['shuffle'] = '隨機排列';
$string['shuffleanswers'] = '隨機排列答案';
$string['shuffledrandomly'] = '隨機排列';
$string['shufflequestions'] = '隨機排列題目';
$string['shufflequestionsselected'] = '已經設定讓試題隨機排列，因此有關試題的某些動作無法使用，要變更隨機排列選項， {$a}';
$string['shufflewithin'] = '隨機排列內容';
$string['shufflewithin_help'] = '若啟動，每次學生作答時，都會隨機排列。
這一設定只適用於有多個選項的題目，比如選擇題或配合題。';
$string['singleanswer'] = '選擇一個答案';
$string['sortage'] = '依建立時間排序';
$string['sortalpha'] = '依字母順序排序';
$string['sortquestionsbyx'] = '排列試題依據：{$a}';
$string['sortsubmit'] = '排序問題';
$string['sorttypealpha'] = '依題型、字母排序';
$string['specificapathnotonquestion'] = '指定的檔案路徑沒有在指定的試題上';
$string['specificquestionnotonquiz'] = '指定的試題沒有在指定的測驗卷上';
$string['startagain'] = '重新開始';
$string['startattempt'] = '開始作答';
$string['startedon'] = '開始於';
$string['startnewpreview'] = '開始新的預覽';
$string['statenotloaded'] = '試題{$a}的狀態沒有從資料庫中裝載上來';
$string['status'] = '狀態';
$string['stoponerror'] = '發生錯誤就停止';
$string['submitallandfinish'] = '全部送出並結束';
$string['subneterror'] = '抱歉，這個小考已經被鎖住，它只能從特定的地方開啟。目前您的電腦不是可以開啟此小考的電腦之一。';
$string['subnetnotice'] = '抱歉，本測驗被鎖定為只能從特定位置登入。現在，您的電腦不在允許的網域範圍內。但身為教師的您，還是可以預覽。';
$string['subplugintype_quiz'] = '報告';
$string['subplugintype_quizaccess'] = '存取規則';
$string['subplugintype_quizaccess_plural'] = '存取規則';
$string['subplugintype_quiz_plural'] = '報告';
$string['substitutedby'] = '將取代為';
$string['summaryofattempt'] = '作答紀錄摘要';
$string['summaryofattempts'] = '作答記錄摘要';
$string['temporaryblocked'] = '您暫時無法再做測驗 <br /> 下一次可以使用的時間為：';
$string['theattempt'] = '作答次';
$string['time'] = '時間';
$string['timecompleted'] = '完成時間';
$string['timedelay'] = '您現在無法做測驗，因為在上次測驗之後需要等候一段時間。';
$string['timeleft'] = '剩餘時間';
$string['timelimit'] = '時間限制';
$string['timelimitexeeded'] = '抱歉! 測驗時限到了!';
$string['timelimit_help'] = '　<p>預設的情況下，測驗並沒有時間限制，學生花多少時間來完成它都沒有問題。</p>
　　
　　<p>如果您指定了時間限制，系統會做以下工作以儘量保證測驗是在規定時內完成的：</p>
　　
　　<ul>
　　  <li>流覽器必須有JavaScript支援——這允許計時器正確工作。</li>
　　  <li>顯示一個浮動的的計時器視窗進行倒計時。</li>
　　  <li>當時間用完，測驗將會自動結束，無論此時學生在答案中寫了什麼。</li>
　　  <li>如果學生欺騙了系統並比在規定時間的60秒之後才提交，則其測驗成績會自動計為零分。</li>
　　</ul>';
$string['timelimitmin'] = '時間限制（分鐘）';
$string['timelimitsec'] = '時間限制(秒)';
$string['timestr'] = '%H:%M:%S on %d/%m/%y';
$string['timesup'] = '時間到';
$string['timetaken'] = '所用時間';
$string['tofile'] = '類別名稱寫到檔案中：';
$string['tolerance'] = '容許誤差';
$string['toomanyrandom'] = '所要求的隨機題的數量大於該類別現有題量';
$string['top'] = '最上層';
$string['totalpointsx'] = '總分：{$a}';
$string['totalquestionsinrandomqcategory'] = '在類別中共有{$a} 個試題。';
$string['true'] = '對';
$string['truefalse'] = '是非題';
$string['type'] = '題型';
$string['unfinished'] = '開放中';
$string['ungraded'] = '未評分';
$string['unit'] = '單位';
$string['unknowntype'] = '題型不支援在{$a} 。這個題目將被忽略';
$string['unusedcategorydeleted'] = '此類別已經刪除。由於刪除此課程後，在此伺服器上，不會再使用這些問題。';
$string['updatesettings'] = '更新測驗設定';
$string['updatingatttemptgrades'] = '更新作答次分數';
$string['updatingfinalgrades'] = '更新最後分數';
$string['updatingthegradebook'] = '更新成績簿';
$string['upgradesure'] = '<div style="color: red;">測驗模組將執行測驗表格的重大變更，此更新尚未有足夠的測試。在處理過程進行前，您需緊急備份您的資料庫表格。';
$string['upgradingquizattempts'] = '升級測驗作答次： {$a->done}/{$a->outof} (測驗識別碼 {$a->info})';
$string['upgradingveryoldquizattempts'] = '升級每一舊的測驗作答次： {$a->done}/{$a->outof}';
$string['url'] = '網址';
$string['usedcategorymoved'] = '此類別已經搬移至網站層次。由於刪除此課程後，此伺服器上的其他測驗使用這些問題。';
$string['useroverrides'] = '用戶覆蓋';
$string['usersnone'] = '還沒有學生存取過這一測驗卷';
$string['validate'] = '有效日期';
$string['viewallanswers'] = '檢視 {$a} 人的測驗結果';
$string['viewallreports'] = '查看 {$a} 評語回覆';
$string['viewed'] = '已檢視過';
$string['warningmissingtype'] = '<b>這個題目類型還沒安裝，請提醒您的 Moodle 管理員。</b>';
$string['wheregrade'] = '我的成績在哪裡？';
$string['wildcard'] = '萬用字元';
$string['windowclosing'] = '這一視窗很快就關閉。';
$string['withsummary'] = '與摘要統計';
$string['wronguse'] = '您無法如此使用此網頁';
$string['xhtml'] = 'XHTML格式';
$string['youneedtoenrol'] = '需要選修這門課程才能參加測驗。';
$string['yourfinalgradeis'] = '這個測驗您的最後得分是{$a}';
