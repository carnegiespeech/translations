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
 * Strings for component 'quiz', language 'zh_cn', branch 'MOODLE_22_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessnoticesheader'] = '您可以预览此测验，但如果想开始答题，您会被阻止，因为：';
$string['action'] = '动作';
$string['adaptive'] = '适应模式';
$string['adaptive_help'] = '如果启用，在本测验的一次答题中，可以多次回答同一道题。例如，如果一次回答被评为错误，学生可以马上再次尝试。不过，如果“使用罚分”设置开启，那么每次错误的尝试都会导致丢分。';
$string['addaquestion'] = '添加一道试题…';
$string['addarandomquestion'] = '添加一道随机题…';
$string['addarandomquestion_help'] = '添加随机题后，会从类别中随机选出一道题，插入到测验中。也就是说，不同学生会得到不同的题。如果测验允许多次答题，那么每次答题都会看到不同的题。';
$string['adddescriptionlabel'] = '添加描述/标签';
$string['addingquestion'] = '添加一道试题';
$string['addingquestions'] = '页面的这一边用来管理题库。试题分门别类，以便管理。题库中的试题可用于您课程中的任何一次测验。如果您选择“共享”它们，则任何课程都可以使用这些题目。<br /><br />您在选择或创建类别后才能创建或编辑试题。您可以选择任何题目加入到另一边的测验中。';
$string['addmoreoverallfeedbacks'] = '再添加{no}个反馈域';
$string['addnewgroupoverride'] = '添加组覆盖';
$string['addnewpagesafterselected'] = '在所选题目后添加新页面';
$string['addnewquestionsqbank'] = '添加试题到此类别 {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = '添加用户覆盖';
$string['addpagehere'] = '在这里添加新页面';
$string['addquestion'] = '添加试题';
$string['addquestions'] = '添加试题';
$string['addquestionstoquiz'] = '向当前测验添加试题';
$string['addrandom'] = '添加 {$a} 道随机题';
$string['addrandom1'] = '<< 添加';
$string['addrandom2'] = '随机试题';
$string['addrandomfromcategory'] = '从以下类别随机添加试题：';
$string['addrandomquestion'] = '随机添加试题';
$string['addrandomquestiontoquiz'] = '向测验{$a}添加一道随机题';
$string['addselectedtoquiz'] = '把选中的试题添加到测验中';
$string['addtoquiz'] = '添加到测验';
$string['affectedstudents'] = '影响了 {$a} 个';
$string['aftereachquestion'] = '添加每道试题后';
$string['afternquestions'] = '添加 {$a} 试题后';
$string['age'] = '年龄';
$string['allattempts'] = '所有试卷';
$string['allinone'] = '无限制';
$string['allowreview'] = '允许回顾';
$string['alreadysubmitted'] = '好像您已经提交了本次答题的答案';
$string['alternativeunits'] = '可选单位';
$string['alwaysavailable'] = '总是可见';
$string['analysisoptions'] = '分析选项';
$string['analysistitle'] = '单项分析表';
$string['answer'] = '答案';
$string['answered'] = '已作答';
$string['answerhowmany'] = '一个或多个正确答案？';
$string['answers'] = '答案';
$string['answersingleno'] = '允许多个答案';
$string['answersingleyes'] = '只有一个正确答案';
$string['answerswithacceptederrormarginmustbenumeric'] = '允许误差的答案必须是数字';
$string['answertoolong'] = '行 {$a} 后的答案过长(最多 255 个英文字符)';
$string['aon'] = 'AON 格式';
$string['areyousureremoveselected'] = '您确定要删除所有已选择的试题？';
$string['asshownoneditscreen'] = '与编辑屏幕相同';
$string['attempt'] = '试卷 {$a}';
$string['attemptalreadyclosed'] = '此次答题已经结束。';
$string['attemptclosed'] = '还未结束答题';
$string['attemptduration'] = '用时';
$string['attemptedon'] = '答题';
$string['attempterror'] = '您现在还不能参加此测验，因为：{$a}';
$string['attemptfirst'] = '第一次答题';
$string['attemptincomplete'] = '{$a} 的答题尚未完成。';
$string['attemptlast'] = '最后一次答题';
$string['attemptnumber'] = '试卷';
$string['attemptquiznow'] = '现在参加测验';
$string['attempts'] = '试卷';
$string['attemptsallowed'] = '允许答题次数';
$string['attemptsdeleted'] = '已删除测验试卷';
$string['attemptselection'] = '选择对每个用户分析哪次答题：';
$string['attemptsexist'] = '已经有人参加了此测验，不能再增加或删除试题。';
$string['attemptsnum'] = '试卷：{$a}';
$string['attemptsnumthisgroup'] = '答题：{$a->total}次(组内{$a->group}次)';
$string['attemptsnumyourgroups'] = '答题：{$a->total}次（您同组内{$a->group}次）';
$string['attemptsonly'] = '只显示答过题的学生';
$string['attemptstillinprogress'] = '仍在答题中';
$string['attemptsunlimited'] = '不限答题次数';
$string['back'] = '返回预览试题';
$string['backtocourse'] = '回到课程';
$string['backtoquestionlist'] = '返回试题列表';
$string['backtoquiz'] = '返回编辑测验';
$string['basicideasofquiz'] = '设计测验的基本思路';
$string['bestgrade'] = '最好成绩';
$string['bothattempts'] = '显示已答题和未答题的学生';
$string['browsersecurity'] = '浏览器安全';
$string['browsersecurity_help'] = '如果选择了“全屏幕弹出窗口（JavaScript保障安全）”，

* 只有学生使用启用了JavaScript的web浏览器时，测验才会启动
* 测验显示在一个全屏幕的弹出窗口中，覆盖所有其它窗口，没有导航控件
* 会尽可能地阻止学生使用拷贝/粘贴之类的功能';
$string['calculated'] = '计算题';
$string['calculatedquestion'] = '系统不支持位于行 {$a} 处的计算题。该题目将被忽略';
$string['cannotcreatepath'] = '无法创建路径({$a})';
$string['cannoteditafterattempts'] = '已经有人参加了此测验，所以您不能增加或删除题目。（{$a}）';
$string['cannotfindprevattempt'] = '找不到之前的答题，无法在其基础上开始。';
$string['cannotfindquestionregard'] = '获取重评分的题目失败！';
$string['cannotinsert'] = '无法插入试题';
$string['cannotinsertrandomquestion'] = '无法随机插入新试题！';
$string['cannotloadquestion'] = '无法载入试题选项';
$string['cannotloadtypeinfo'] = '无法加载题目类型指定的题目信息';
$string['cannotopen'] = '无法打开导出文件({$a})';
$string['cannotrestore'] = '无法恢复试题会话';
$string['cannotreviewopen'] = '此次答题还未关闭，您不能回顾它。';
$string['cannotsavelayout'] = '不能保存布局';
$string['cannotsavenumberofquestion'] = '不能保存每页题目数';
$string['cannotsavequestion'] = '不能保存题目列表';
$string['cannotsetgrade'] = '不能设置此测验的新最高分';
$string['cannotsetsumgrades'] = '设置总分失败';
$string['cannotstartgradesmismatch'] = '此测验还不能参加。它的最高分被设为 {$a->grade}，但是其中所有题目都没有分数。在“编辑测验”页面可以修正此问题。';
$string['cannotstartmissingquestion'] = '此测验还不能参加。它使用了一道不存在的题。';
$string['cannotstartnoquestions'] = '此测验还不能参加。它还没有配置好。一道题都还没有呢。';
$string['cannotwrite'] = '无法写入导出文件({$a})';
$string['caseno'] = '不，字母大小写无所谓';
$string['casesensitive'] = '区分大小写字母';
$string['caseyes'] = '是的，字母大小写必须正确';
$string['categories'] = '类别';
$string['category'] = '类别';
$string['categoryadded'] = '已经添加类别“{$a}”';
$string['categorydeleted'] = '已经删除类别“{$a}”';
$string['categorynoedit'] = '您没有编辑类别“{$a}”的权限。';
$string['categoryupdated'] = '更新类别成功';
$string['close'] = '关闭窗口';
$string['closebeforeopen'] = '不能更新测验。您要在开始日期之前先指定结束时间。';
$string['closed'] = '关闭的';
$string['closepreview'] = '关闭预览';
$string['closereview'] = '关闭回顾';
$string['comment'] = '评论';
$string['commentorgrade'] = '发表评论或者修改分数';
$string['comments'] = '评论';
$string['completedon'] = '完成于';
$string['configadaptive'] = '如果此选项设为是，那么学生在此测验的一次答题中也可以多次回答同一道题。';
$string['configattemptsallowed'] = '允许在测验中限制学生答题的次数。';
$string['configdecimaldigits'] = '成绩显示的小数位数';
$string['configdecimalplaces'] = '显示测验成绩时小数点后的数字位数。';
$string['configdecimalplacesquestion'] = '显示每道题目成绩时小数点后的数字位数。';
$string['configdelay1'] = '如果您设置了一个时延，那么学生在第一次答题之后必须等待这段时间。';
$string['configdelay1st2nd'] = '如果在此设置了时间间隔，那么在第一次答题结束后，学生必须等足该间隔，才能开始第二次答题。';
$string['configdelay2'] = '如果您设置了一个时延，那么学生在第三次及以后答题之前必须等待这段时间。';
$string['configdelaylater'] = '如果在此设置了时间间隔，那么在上一次答题结束后，学生必须等足该间隔，才能开始第三次、第四次……答题。';
$string['configeachattemptbuildsonthelast'] = '如果允许多次答题，那么每次新答题都会基于上次答题的答案。';
$string['configgrademethod'] = '当允许多次答题时，应该使用哪种方法来计算学生测验的最终成绩。';
$string['configintro'] = '这里设置的值是您创建新测验时设置表单中的缺省值。您还可以配置哪些测验设置是高级设置。';
$string['configmaximumgrade'] = '测验成绩最高分的缺省值。';
$string['confignewpageevery'] = '在向测验添加试题时，会根据您在这里的设置决定是否自动插入分页符。';
$string['configpenaltyscheme'] = '在适应模式下，每次回答错误都会导致罚分。';
$string['configpopup'] = '强制在弹出窗口中打开试卷，并尝试用 JavaScript 限制拷贝和粘贴等操作。';
$string['configrequirepassword'] = '学生必须输入这个密码才可以尝试测验。';
$string['configrequiresubnet'] = '学生只能通过这些计算机尝试测验。';
$string['configreviewoptions'] = '此选项控制用户在回顾答题或看测验报告时都能看到什么信息。';
$string['configshowblocks'] = '答题时显示版块。';
$string['configshowuserpicture'] = '答题时，在屏幕上显示用户头像。';
$string['configshufflequestions'] = '如果您启用此选项，那么学生每次答题时，题目的顺序都会被随机排列。';
$string['configshufflewithin'] = '如果您启用此选项，且题目设置也启用了它，那么学生每次答题时，题目内的一些组件会被随机排列。';
$string['configtimelimit'] = '测验的缺省时限，单位分钟。0 表示无限制。';
$string['configtimelimitsec'] = '测验的缺省时间限制，单位秒。0 表示无时间限制。';
$string['configurerandomquestion'] = '设置试题';
$string['confirmclose'] = '一旦提交，您将不能再修改在这次答题的答案。';
$string['confirmserverdelete'] = '确定要把服务器<b>{$a}</b>从列表删除吗？';
$string['confirmstartattemptlimit'] = '此测验只能参加 {$a} 次。您确认要开始新一次答题吗？';
$string['confirmstartattempttimelimit'] = '此测验有时间限制并且只能参加 {$a} 次。您确认想开始新一次答题吗？';
$string['confirmstarttimelimit'] = '此测验有时间限制。您确认要开始吗？';
$string['containercategorycreated'] = '由于以下详细原因，已经创建了存储所有移到适当的层次的原始类别的分类。';
$string['continueattemptquiz'] = '继续上次答题';
$string['continuepreview'] = '继续上次预览';
$string['copyingfrom'] = '为试题“{$a}”建立一份拷贝';
$string['copyingquestion'] = '复制一个试题';
$string['correct'] = '正确';
$string['correctanswer'] = '正确答案';
$string['correctanswerformula'] = '正确答案的公式';
$string['correctansweris'] = '正确答案：{$a}';
$string['correctanswerlength'] = '有效数字';
$string['correctanswers'] = '正确答案';
$string['correctanswershows'] = '正确答案显示';
$string['corrresp'] = '正确回答';
$string['countdown'] = '倒计时';
$string['countdownfinished'] = '测试就要结束了，您应该现在提交答案。';
$string['countdowntenminutes'] = '测试将于10分钟后结束';
$string['coursetestmanager'] = '课程测试管理者格式';
$string['createcategoryandaddrandomquestion'] = '创建类别并随机添加试题';
$string['createfirst'] = '您必须先建立一些填空题。';
$string['createmultiple'] = '向测验添加多个随机试题';
$string['createnewquestion'] = '新建试题';
$string['createquestionandadd'] = '创建一道新题并添加到测验里。';
$string['custom'] = '自定义格式';
$string['dataitemneed'] = '您必须添加至少一个数据项集合才能得到一个有效的试题';
$string['datasetdefinitions'] = '分类可再利用的数据集定义';
$string['datasetnumber'] = '号码';
$string['daysavailable'] = '可用天数';
$string['decimaldigits'] = '成绩中保留小数点位数';
$string['decimalplaces'] = '成绩里小数的位数';
$string['decimalplaces_help'] = '此设置决定在显示成绩和评分时小数点后保留几位小数。它只影响成绩的显示，并不影响成绩在数据库的保存和内部计算。后两者会使用完整的精度。';
$string['decimalplacesquestion'] = '试题成绩的小数位数';
$string['decimalplacesquestion_help'] = '此设置决定在显示每道题的成绩时，小数点后保留几位小数。';
$string['decimalpoints'] = '保留几位小数';
$string['default'] = '默认';
$string['defaultgrade'] = '默认试题分数';
$string['defaultinfo'] = '题目的默认类别。';
$string['delay1'] = '第一次和第二次答题间的时间间隔';
$string['delay1st2nd'] = '第一和第二次答题间的强制延时';
$string['delay1st2nd_help'] = '如果您设置了测验间隔时间，那么学生在第一次测验后必须等上一段时间才能进行下一次测验。';
$string['delay2'] = '后续答题间的时间间隔';
$string['delaylater'] = '后续答题间的强制延时';
$string['delaylater_help'] = '如果在这里设置了一个间隔时间， 那么学生在第三次及以后的答题前，必须先等上一段时间。';
$string['deleteattemptcheck'] = '您确定要完全删除这些试卷吗？';
$string['deleteselected'] = '删除选中的';
$string['deletingquestionattempts'] = '删除试卷';
$string['description'] = '描述';
$string['disabled'] = '禁用';
$string['displayoptions'] = '显示选项';
$string['download'] = '点击下载已导出的分类文件';
$string['downloadextra'] = '（文件保存在课程文件的/backupdata/quiz文件夹内）';
$string['duplicateresponse'] = '您提交过相同的答案，因此本次提交被忽略。';
$string['eachattemptbuildsonthelast'] = '在上一次的基础上答题';
$string['eachattemptbuildsonthelast_help'] = '如果允许多次参加测验并启用此选项，则每次参加测验时，都会用上一次答题的答案作为缺省答案。这样就可以通过多次参加测验来彻底完成测验。';
$string['editcategories'] = '编辑类别';
$string['editcategory'] = '编辑类别';
$string['editcatquestions'] = '编辑分类试题';
$string['editingquestion'] = '编辑试题';
$string['editingquiz'] = '编辑测验';
$string['editingquiz_help'] = '创建测验的主要思路是：

* 测验可以在一个或多个页面中放置题目
* 题库中保存着所有试题，按类别组织
* 随机题 - 同一名学生的不同次答题可能得到不同的题目。不同学生也会得到不同的题目';
$string['editoverride'] = '修改覆盖';
$string['editqcats'] = '编辑试题分类';
$string['editquestions'] = '编辑试题';
$string['editquiz'] = '编辑测验';
$string['editquizquestions'] = '编辑测验题';
$string['emailconfirmbody'] = '{$a->username}，您好，

感谢您将答案提交至课程“{$a->coursename}”中的“{$a->quizname}”。提交时间：{$a->submissiontime}。

您收到此消息表明我们已经成功接收到您所提交的答案。

该测验的地址是 {$a->quizurl} 。';
$string['emailconfirmsmall'] = '感谢您上传您的答案到 \'{$a->quizname}\'';
$string['emailconfirmsubject'] = '测验提交确认：{$a->quizname}';
$string['emailnotifybody'] = '{$a->username}，您好，

{$a->studentname}已经完成了课程“{$a->coursename}”中的测验“{$a->quizname}”({$a->quizurl})。

您可以在 {$a->quizreviewurl} 批改此试卷。';
$string['emailnotifysmall'] = '{$a->studentname}已经完成{$a->quizname}';
$string['emailnotifysubject'] = '{$a->studentname}已经完成测验{$a->quizname}';
$string['empty'] = '空的';
$string['enabled'] = '允许';
$string['endtest'] = '结束答题…';
$string['erroraccessingreport'] = '您无法访问此报告';
$string['errorinquestion'] = '试题错误';
$string['errormissingquestion'] = '错误：系统找不到 id 为{$a}的试题';
$string['errornotnumbers'] = '错误：答案必须是数值';
$string['errorunexpectedevent'] = '题目 {$a->questionid} 在试卷 {$a->attemptid} 中发现意外的事件代码 {$a->event} 。';
$string['essay'] = '论述';
$string['essayquestions'] = '题目';
$string['everynquestions'] = '每{$a}道题';
$string['everyquestion'] = '每道题';
$string['everythingon'] = '全部启用';
$string['export'] = '导出';
$string['exportcategory'] = '导出类别';
$string['exporterror'] = '导出过程中出现一个错误';
$string['exportingquestions'] = '试题已经导出到文件';
$string['exportname'] = '文件名';
$string['exportquestions'] = '将试题导出到文件';
$string['extraattemptrestrictions'] = '答题的额外限制';
$string['false'] = '错误';
$string['feedback'] = '反馈';
$string['feedbackerrorboundaryformat'] = '反馈分数界限必须是百分比数或者数字。您输入的界限值 {$a} 无法识别。';
$string['feedbackerrorboundaryoutofrange'] = '反馈分数界限必须在 0% 和 100% 之间。您输入的界限值超出范围。';
$string['feedbackerrorjunkinboundary'] = '您必须填写反馈分数界限框，不能留空。';
$string['feedbackerrorjunkinfeedback'] = '您必须填写反馈框，不能留空。';
$string['feedbackerrororder'] = '反馈分数界限必须按从高往低的顺序。您输入的值 {$a} 在顺序之外的。';
$string['file'] = '文件';
$string['fileformat'] = '文件格式';
$string['fillcorrect'] = '用正确答案填充';
$string['filloutnumericalanswer'] = '您至少提供一种可能的答案和容许误差。第一个匹配的答案将被用来确定成绩和反馈。如果您在最后提供不包含答案的反馈，它将会显示给与任何答案都不匹配的学生。';
$string['filloutoneanswer'] = '您至少必须填写一个可能的答案。空白的答案会被忽略。“*”可被用做通配符，与任意字符串匹配。第一个匹配的答案将被用来确定成绩和反馈。';
$string['filloutthreequestions'] = '您必须填写至少三个有答案的试题。如果让题目为空，但是提供答案，那么这个答案将作为额外的错误答案。试题和答案都为空的条目将被忽略。';
$string['fillouttwochoices'] = '您至少必须填写两个选项。空白的选项将作废。';
$string['finishattemptdots'] = '结束答题…';
$string['finishreview'] = '结束回顾';
$string['forceregeneration'] = '强制重新产生';
$string['formatnotfound'] = '没有发现导入/导出格式 {$a}';
$string['formatnotimplemented'] = '此格式没有正确地生效，请报告 BUG。';
$string['formulaerror'] = '公式错误！';
$string['fractionsaddwrong'] = '您选的得分总和不等于 100%<br />而是等于 {$a}%<br />您想回去改正这个问题吗？';
$string['fractionsnomax'] = '答案中应该有一个是 100%，
<br />这样这个题目才有可能得满分。
<br />您想回去改正这个问题吗？';
$string['fromfile'] = '来自文件：';
$string['functiondisabledbysecuremode'] = '该功能目前已停用';
$string['generalfeedback'] = '通用的反馈';
$string['generalfeedback_help'] = '通用反馈是在学生答完题目后，显示给学生看的文本。
与针对学生的答题情况而给的反馈不同的是，通用反馈总会被显示。';
$string['grade'] = '成绩';
$string['gradeall'] = '全部评分';
$string['gradeaverage'] = '平均分';
$string['gradeboundary'] = '分数段区间';
$string['gradeessays'] = '批改简答';
$string['gradehighest'] = '最高分';
$string['grademethod'] = '评分办法';
$string['grademethod_help'] = '当允许学生多次参加测验，提交了多份试卷时，可以用下面方法计算最终成绩：

* 所有试卷中的最高分
* 所有试卷的平均分
* 第一次答题（其它次都被忽略）
* 最后一次答题（其它次都被忽略）';
$string['gradesdeleted'] = '测验成绩已删除';
$string['gradesofar'] = '{$a->method}: {$a->mygrade} / {$a->quizgrade}';
$string['gradingdetails'] = '这次提交的分数：{$a->raw}/{$a->max}。';
$string['gradingdetailsadjustment'] = '扣除先前的罚分，此次得分 <strong>{$a->cur}/{$a->max}</strong>。';
$string['gradingdetailspenalty'] = '此次提交被罚 {$a} 分';
$string['gradingdetailszeropenalty'] = '您没有被罚分。';
$string['gradingmethod'] = '评分方法：{$a}';
$string['groupoverrides'] = '组覆盖';
$string['groupsnone'] = '目前在这门课程里没有任何组';
$string['guestsno'] = '很抱歉，访客不能看，更不能做测验';
$string['hidebreaks'] = '隐藏分页符。';
$string['hidereordertool'] = '隐藏重新排序工具';
$string['history'] = '回复历史：';
$string['howquestionsbehave_desc'] = '测验中题目行为的缺省设置。';
$string['imagedisplay'] = '要显示的图片';
$string['import'] = '导入';
$string['importcategory'] = '导入类别';
$string['importerror'] = '导入过程发生错误';
$string['importfilearea'] = '从课程文件中导入';
$string['importfileupload'] = '上传文件并导入';
$string['importfromthisfile'] = '从此文件中导入';
$string['import_help'] = '您可以用此功能导入外部文本文件中的题目。

如果您的文件包含非 ascii 字符，那么它必须使用 UTF-8 编码。要特别小心 Microsoft Office 生成的文件，它们常常使用不能被正确处理的特殊编码。

导入和导出格式是插件式的。其它可选格式在模块和插件数据库中可以找到。';
$string['importingquestions'] = '从文件中导入 {$a} 道试题';
$string['importmax10error'] = '在试题中有错误，试题不能有十个以上的答案。';
$string['importmaxerror'] = '在试题题中有错误，试题的答案太多了。';
$string['importquestions'] = '从文件导入试题';
$string['inactiveoverridehelp'] = '* 学生不属于正确的组或角色，不能试此答测验';
$string['incorrect'] = '错误';
$string['indivresp'] = '每条的个人解答';
$string['info'] = '信息';
$string['infoshort'] = '信息';
$string['inprogress'] = '进行中';
$string['introduction'] = '描述';
$string['invalidattemptid'] = '此试卷ID不存在';
$string['invalidcategory'] = '类别 ID 不可用';
$string['invalidnumericanswer'] = '您录入的答案之一不是有效的数字。';
$string['invalidnumerictolerance'] = '您录入的容错误差之一不是有效的数字。';
$string['invalidoverrideid'] = '无效覆盖ID';
$string['invalidquestionid'] = '无效题目ID';
$string['invalidquizid'] = '无效测验ID';
$string['invalidsource'] = '源无效没有接受。';
$string['invalidsourcetype'] = '无效源类型';
$string['invalidstateid'] = '无效状态ID';
$string['lastanswer'] = '您最后一次的解答是';
$string['layout'] = '布局';
$string['layoutasshown'] = '页面布局如图所示。';
$string['layoutasshownwithpages'] = '页面布局如所示。<small>（每 {$a} 道题自动开新页）</small>';
$string['layoutshuffledandpaged'] = '随机排列试题，每页 {$a} 道。';
$string['layoutshuffledsinglepage'] = '随机排列试题，显示在同一页中。';
$string['link'] = '链接';
$string['listitems'] = '列出测试项';
$string['literal'] = '文字';
$string['loadingquestionsfailed'] = '载入试题出错：{$a}';
$string['makecopy'] = '另存为新题';
$string['managetypes'] = '管理题目类型和服务器';
$string['manualgrading'] = '分类';
$string['mark'] = '提交';
$string['markall'] = '提交此页';
$string['marks'] = '分数';
$string['match'] = '匹配题';
$string['matchanswer'] = '匹配答案';
$string['matchanswerno'] = '匹配答案 {$a}';
$string['max'] = '最大';
$string['messageprovider:confirmation'] = '确认您自己上传的测验';
$string['messageprovider:submission'] = '测验提交通知';
$string['min'] = '最小';
$string['minutes'] = '分钟';
$string['missingcorrectanswer'] = '必须指定正确答案';
$string['missingitemtypename'] = '缺少名称';
$string['missingquestion'] = '此题目好像不会再存在';
$string['modulename'] = '测验';
$string['modulename_help'] = '教师可以在测验模块中设计选择、判断、匹配等多种类型的题目。所有回答都会被自动评分。教师可以选择是否给予反馈、是否显示正确答案。';
$string['modulenameplural'] = '测验';
$string['moveselectedonpage'] = '移动已选定试题到 {$a} 页';
$string['multichoice'] = '选择题';
$string['multipleanswers'] = '选择至少一个答案';
$string['multiplier'] = '乘数';
$string['name'] = '名称';
$string['navnojswarning'] = '警告：这些链接不会保存你的答案。请使用页面底端的下一步按钮。';
$string['neverallononepage'] = '不，所有试题在一个页面上';
$string['newattemptfail'] = '错误：此测验无法开始新的答题。';
$string['newpage'] = '新页面';
$string['newpageevery'] = '自动开始一个新页面';
$string['newpage_help'] = '对于题目较多的测验，可以通过限制单页内题目个数，而将整个测验分成数页。向测验添加题目的时候，分页标记会根据此设置而被自动添加。当然，您也可以在编辑页面时，手动调整页面的分割。';
$string['noanswers'] = '您没有选答案！';
$string['noattempts'] = '还没有人参加此测验';
$string['noattemptsfound'] = '没有试卷。';
$string['noattemptstoshow'] = '没有可显示的试卷。';
$string['nocategory'] = '错误或无类型说明';
$string['noclose'] = '没有关闭日期';
$string['nocommentsyet'] = '还没有内容';
$string['noconnection'] = '目前没有能够通过网络服务处理这道题的连接。请和您的管理员联系。';
$string['nodataset'] = '无内容-不是一个未开发的插件。';
$string['nodatasubmitted'] = '没有被上传的数据。';
$string['noessayquestionsfound'] = '没有需要人工评分的题目';
$string['nogradewarning'] = '此测验尚未评分，因此您不能根据分数设定反馈。';
$string['nomoreattempts'] = '不允许再试了';
$string['none'] = '没有';
$string['noopen'] = '没有开放日期';
$string['nooverridedata'] = '您必须覆盖至少一项测验设置。';
$string['nopossibledatasets'] = '没有可用的数据集';
$string['noquestionintext'] = '此题干不包含任何嵌入的问题。';
$string['noquestions'] = '尚未添加试题';
$string['noquestionsfound'] = '找不到试题';
$string['noquestionsinquiz'] = '测验中没有题目。';
$string['noquestionsnotinuse'] = '此随机题未被使用，因为它的类别是空的。';
$string['noquestionsonpage'] = '空白页';
$string['noresponse'] = '无解答';
$string['noreview'] = '您无权回顾该测验';
$string['noreviewattempt'] = '您无权回顾此试卷。';
$string['noreviewshort'] = '不允许';
$string['noreviewuntil'] = '您在 {$a} 之前不能回顾该测验';
$string['noreviewuntilshort'] = '可用 {$a}';
$string['noscript'] = '继续前必须启用 JavaScript！';
$string['notavailabletostudents'] = '注意：这个测验现在对学生不可用。';
$string['notenoughrandomquestions'] = '类别{$a->category}中没有足够的题目用来创建题目{$a->name}（{$a->id}）。';
$string['notenoughsubquestions'] = '没有定义足够的小题!<br />您要退回去修改吗？';
$string['notimedependentitems'] = '测验模块不能正确支持依赖时间项目。作为普遍的工作，请为整个测验设置时间限制。您想选择不同的项目吗（或者不管怎样使用当前的项目）';
$string['notyetgraded'] = '仍未评分';
$string['notyetviewed'] = '还未看过';
$string['notyourattempt'] = '这不是您的试卷！';
$string['noview'] = '已登录用户不允许查看本测验';
$string['numattempts'] = '{$a->studentnum} 个 {$a->studentstring 已经做 {$a->attemptnum} 次测验';
$string['numattemptsmade'] = '此测验共被做了 {$a} 次';
$string['numberabbr'] = '#';
$string['numerical'] = '数字题';
$string['numquestionsx'] = '试题：{$a}';
$string['onlyteachersexport'] = '只有老师能导出题目';
$string['onlyteachersimport'] = '只有具有编辑权力的老师能导出题目。';
$string['onthispage'] = '此页';
$string['open'] = '未作答';
$string['openclosedatesupdated'] = '测验开放和关闭日期已更新';
$string['optional'] = '可选';
$string['orderandpaging'] = '顺序与分页';
$string['orderandpaging_help'] = '每道题目后面的10、20、30这样的数字表明题目的顺序。数字以10为步长递增，是为了给后添加的题目留空间。要改变题目顺序，请修改数字，然后点击“重新排序试题”按钮。

要在指定题目后添加分页符，勾选紧挨题目复选框，再点击“在所选题目后添加新页面”按钮。

要将题目分配在几个页面，点击重新分页按钮，然后选择期望每页几道题。';
$string['orderingquiz'] = '顺序与分页';
$string['outof'] = '{$a->grade}/满分{$a->maxgrade}';
$string['outofpercent'] = '{$a->grade}/满分{$a->maxgrade} ({$a->percent}%)';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = '总体反馈';
$string['overallfeedback_help'] = '总体反馈是在学生完成测验之后显示的文本。如果额外指定了分数边界（可以是百分比或数字），会根据学生的分数显示不同的文本。';
$string['overdue'] = '超时';
$string['override'] = '覆盖';
$string['overridedeletegroupsure'] = '您确定要删除组 {$a} 的覆盖？';
$string['overridedeleteusersure'] = '您确定要删除用户 {$a} 的覆盖？';
$string['overridegroup'] = '覆盖组';
$string['overridegroupeventname'] = '{$a->quiz} - {$a->group}';
$string['overrides'] = '覆盖';
$string['overrideuser'] = '覆盖用户';
$string['overrideusereventname'] = '{$a->quiz} - 覆盖';
$string['page-mod-quiz-edit'] = '编辑测验页面';
$string['page-mod-quiz-x'] = '任意测验模块页面';
$string['pagesize'] = '每页显示试卷数：';
$string['parent'] = '父类别';
$string['parentcategory'] = '父类别';
$string['parsingquestions'] = '从导入文件中分解题目';
$string['partiallycorrect'] = '部分正确';
$string['penalty'] = '惩罚';
$string['penaltyscheme'] = '使用罚分';
$string['penaltyscheme_help'] = '如果启用，每次答题错误都会导致从总分中扣除一定的罚分。罚分的总数可以在题目设置中设定。该设置只在适应模式下有效。';
$string['percentcorrect'] = '分数纠正';
$string['pleaseclose'] = '您的请求已经被处理，现在可以关闭这个窗口了';
$string['pluginadministration'] = '测验管理';
$string['pluginname'] = '测验';
$string['popup'] = '在“安全”窗口中测验';
$string['popupblockerwarning'] = '此测试在安全模式下运行，这意味着您需要在一个安全的窗口里答题。请关闭阻拦弹出窗口的程序，谢谢。';
$string['popupnotice'] = '学生将会在一个安全窗口中看到此测验';
$string['preprocesserror'] = '在预处理时发生错误！';
$string['preview'] = '预览';
$string['previewquestion'] = '预览试题';
$string['previewquiz'] = '预览 {$a}';
$string['previewquiznow'] = '现在预览测验';
$string['previous'] = '以前状态';
$string['publish'] = '发布';
$string['publishedit'] = '只有您有用了公布此类型的课程的修改权限，您才能在此类别中添加或修改试题。';
$string['qbrief'] = '题{$a}';
$string['qname'] = '名称';
$string['qti'] = 'IMS QTI 格式';
$string['qtypename'] = '类型，名称';
$string['question'] = '试题';
$string['questionbankcontents'] = '题库内容';
$string['questionbankmanagement'] = '题库管理';
$string['questionbehaviour'] = '试题行为';
$string['questioncats'] = '试题类别';
$string['questiondeleted'] = '此试题已经被删除。请联系您的老师。';
$string['questioninuse'] = '试题“{$a->questionname}”正被下列测验使用：<br />{$a->quiznames}<br />题目将只能从类别列表，而不能从这些测验中删除。';
$string['questionmissing'] = '此会话的题目缺失';
$string['questionname'] = '试题名称';
$string['questionnonav'] = '<span class="accesshide">题目</span> {$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnonavinfo'] = '<span class="accesshide">信息</span> {$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnotloaded'] = '题目{$a}没能从数据库加载';
$string['questionorder'] = '试题排序';
$string['questions'] = '试题';
$string['questionsinclhidden'] = '试题（包括隐藏的）';
$string['questionsinthisquiz'] = '测验中的试题';
$string['questionsperpage'] = '每页试题数';
$string['questionsperpageselected'] = '已经设置了每页题目数，所以分页现在是固定的，分页控制被禁用。您可以在这里修改 {$a}。';
$string['questionsperpagex'] = '每页题目数：{$a}';
$string['questiontext'] = '试题内容';
$string['questiontextisempty'] = '[题干无文字]';
$string['questiontype'] = '试题类型 {$a}';
$string['questiontypesetupoptions'] = '设定试题类型选项：';
$string['quiz:attempt'] = '尝试测验';
$string['quizavailable'] = '测验将关闭于：{$a}';
$string['quizclose'] = '结束时间';
$string['quizclosed'] = '该测验已于 {$a} 关闭';
$string['quizcloses'] = '测验关闭';
$string['quizcloseson'] = '此测验将关闭于{$a}';
$string['quiz:deleteattempts'] = '删除试卷';
$string['quiz:emailconfirmsubmission'] = '提交时获得确认消息';
$string['quiz:emailnotifysubmission'] = '测验提交后获得通知消息';
$string['quiz:grade'] = '手动给测验评分';
$string['quiz:ignoretimelimits'] = '忽略测验中的时间限制';
$string['quizisclosed'] = '这个测验已关闭';
$string['quizisclosedwillopen'] = '测验已关闭（将开放于{$a}）';
$string['quizisopen'] = '这个测验正在开放';
$string['quizisopenwillclose'] = '测验开放  (关闭 {$a})';
$string['quiz:manage'] = '管理测验';
$string['quiz:manageoverrides'] = '管理测验覆盖';
$string['quiznavigation'] = '测验导航';
$string['quizopen'] = '开始时间';
$string['quizopenclose'] = '开放和关闭日期';
$string['quizopenclose_help'] = '学生只能在开放时间之后答题，并且必须在关闭时间之前结束答题。';
$string['quizopened'] = '这个测验现在是开放的';
$string['quizopenedon'] = '这个测验开放于 {$a}';
$string['quizopens'] = '测验开放';
$string['quizopenwillclose'] = '此测验正开放，将在 {$a} 关闭';
$string['quizordernotrandom'] = '测验的顺序未被打乱';
$string['quizorderrandom'] = '测验的顺序已经打乱';
$string['quiz:preview'] = '预览测验';
$string['quiz:regrade'] = '重新评分测验尝试';
$string['quiz:reviewmyattempts'] = '回顾您自己的试卷';
$string['quizsettings'] = '测验设置';
$string['quiztimer'] = '测验计时器';
$string['quiz:view'] = '查看测验信息';
$string['quiz:viewreports'] = '查看测验报表';
$string['quizwillopen'] = '此测验将开放于{$a}';
$string['random'] = '随机题';
$string['randomcreate'] = '创建随机题';
$string['randomfromcategory'] = '随机题来自类别：';
$string['randomfromexistingcategory'] = '随机题来自已有类别';
$string['randomnosubcat'] = '随机题只来自此类别，不包括它的子类别。';
$string['randomquestionusinganewcategory'] = '随机题使用一个新类别';
$string['randomwithsubcat'] = '试题来自这个类别及其子类别。';
$string['readytosend'] = '您正在发送整份测验去评分。您确定要继续吗？';
$string['reattemptquiz'] = '再次尝试此测验';
$string['recentlyaddedquestion'] = '最新试题！';
$string['recurse'] = '也包括子类别中的试题';
$string['regrade'] = '重新评分所有试卷';
$string['regradecomplete'] = '所有试卷重新评分完毕';
$string['regradecount'] = '{$a->attempt} 份试卷的 {$a->changed} 分已更改得分';
$string['regradedisplayexplanation'] = '分数发生变化的试卷会在试题回顾窗口里显示为超链接';
$string['regradenotallowed'] = '无权限为测验重新评分。';
$string['regradingquestion'] = '正对“{$a}”重新评分。';
$string['regradingquiz'] = '对测验“{$a}”重新评分';
$string['remove'] = '删除';
$string['removeallquizattempts'] = '删除所有试卷';
$string['removeemptypage'] = '移除空白页面';
$string['removeselected'] = '移除已选定的';
$string['rename'] = '重命名';
$string['renderingserverconnectfailed'] = '服务器 {$a} 处理 RQP 请求失败。请检查 URL 是否正确。';
$string['reorderquestions'] = '重新排序试题';
$string['reordertool'] = '显示重新排序工具';
$string['repaginate'] = '每页有 {$a} 道题';
$string['repaginatecommand'] = '重新分页';
$string['repaginatenow'] = '现在重新分页';
$string['replace'] = '替换';
$string['replacementoptions'] = '替换选项';
$string['report'] = '报表';
$string['reportanalysis'] = '单项分析';
$string['reportfullstat'] = '详细统计';
$string['reportmulti_percent'] = '多百分比';
$string['reportmulti_q_x_student'] = '多学生选择';
$string['reportmulti_resp'] = '个人回复';
$string['reportnotfound'] = '未知的报告 ({$a})';
$string['reportoverview'] = '总结';
$string['reportregrade'] = '重新评分';
$string['reportresponses'] = '详细回答';
$string['reports'] = '报表';
$string['reportsimplestat'] = '小结';
$string['requirepassword'] = '需要密码';
$string['requirepassword_help'] = '如果设置了密码，那么学生必须输入此密码才能开始测验。';
$string['requiresubnet'] = '限制网络地址';
$string['requiresubnet_help'] = '可以只允许局域网或Internet的某个子网访问测验。只需用逗号分隔若干个完整或不完整的IP地址。有监考的考试可以使用此功能，来确保只有在指定地点的人可以访问此测验。';
$string['response'] = '回答';
$string['responses'] = '作答';
$string['results'] = '结果';
$string['reuseifpossible'] = '再使用以前删除的';
$string['reverttodefaults'] = '还原到测验默认';
$string['review'] = '回顾';
$string['reviewafter'] = '当测验结束后可以回顾';
$string['reviewalways'] = '允许在任意时间回顾';
$string['reviewattempt'] = '回顾试卷';
$string['reviewbefore'] = '允许在测验开始时回顾';
$string['reviewclosed'] = '测验关闭之后回顾';
$string['reviewduring'] = '答题中';
$string['reviewimmediately'] = '刚刚答完';
$string['reviewnever'] = '从不允许回顾';
$string['reviewofattempt'] = '回顾第 {$a} 次答题';
$string['reviewofpreview'] = '回顾预览';
$string['reviewopen'] = '晚一些，但测验仍然开放';
$string['reviewoptions'] = '学生可以回顾';
$string['reviewoptionsheading'] = '回顾设置';
$string['reviewoptionsheading_help'] = '当用户回顾试卷或看测验报告时，这些选项可以控制用户能看到什么信息。

“刚刚答完”的意思是答完题目后的两分钟内。“晚一些，但测验仍然开放”的意思是答完2分钟后到测验关闭的这段时间。“测验关闭后”指的是已经过了测验关闭时间的时候。如果测验没有设定关闭时间，此状态不会生效。';
$string['reviewresponse'] = '检查答案';
$string['reviewresponsetoq'] = '回顾答案（题目：{$a}）';
$string['reviewthisattempt'] = '回顾您此份试卷中的答案';
$string['rqp'] = '远程试题';
$string['rqps'] = '远程试题';
$string['sameasoverall'] = '与整体成绩相同';
$string['save'] = '保存';
$string['saveandedit'] = '保存更改并编辑试题';
$string['saveattemptfailed'] = '保存当前试卷出错。';
$string['savedfromdeletedcourse'] = '保存了删除课程 {$a}。';
$string['savegrades'] = '保存评分';
$string['savemyanswers'] = '保存我的回答';
$string['savenosubmit'] = '保存但不提交';
$string['saveoverrideandstay'] = '保存并输入其它覆盖';
$string['savequiz'] = '保存整个测验';
$string['saving'] = '保存中';
$string['savingnewgradeforquestion'] = '为题目 id {$a} 保存新成绩。';
$string['savingnewmaximumgrade'] = '保存新最高分。';
$string['score'] = '原始分数';
$string['scores'] = '分数';
$string['select'] = '选择';
$string['selectall'] = '全部选择';
$string['selectcategory'] = '选择类别';
$string['selectedattempts'] = '选择的试卷…';
$string['selectnone'] = '全部不选';
$string['selectquestiontype'] = '选择问题类型';
$string['serveradded'] = '已添加服务器';
$string['serveridentifier'] = '标识符';
$string['serverinfo'] = '服务器信息';
$string['servers'] = '服务器';
$string['serverurl'] = '服务器 URL';
$string['settingsoverrides'] = '设置重写';
$string['shortanswer'] = '填空题';
$string['show'] = '显示';
$string['showall'] = '所有题目显示在一页';
$string['showblocks'] = '在做测验时显示版块';
$string['showblocks_help'] = '如果设为是，那么在答题时会显示常见的版块';
$string['showbreaks'] = '显示分页符';
$string['showcategorycontents'] = '显示类别内容{$a->arrow}';
$string['showcorrectanswer'] = '在反馈信息中显示正确答案吗？';
$string['showdetailedmarks'] = '显示分数细节';
$string['showeachpage'] = '一次显示一页';
$string['showfeedback'] = '回答之后显示反馈信息吗？';
$string['showinsecurepopup'] = '在“安全”的弹出窗口中答题';
$string['shownoattempts'] = '显示未答题的学生';
$string['shownoattemptsonly'] = '只显示未答题的学生';
$string['showteacherattempts'] = '显示教师的试卷';
$string['showuserpicture'] = '显示用户的图片';
$string['showuserpicture_help'] = '如果启用，在答题和回顾界面里会显示学生的姓名和头像，这样在有监考的考试中，就能清楚地检查学生是否是以自己的身份登录的。';
$string['shuffle'] = '随机排列';
$string['shuffleanswers'] = '随机排列答案';
$string['shuffledrandomly'] = '随机排序';
$string['shufflequestions'] = '随机排列试题';
$string['shufflequestionsselected'] = '已设置乱序试题，所以一些与页面相关的操作无法使用。更改乱序选项，请到{$a}。';
$string['shufflewithin'] = '随机排列试题选项';
$string['shufflewithin_help'] = '如果启用，且在题目设置中也启用，那么学生每次答题时都会看到不同顺序的选项。这只适用于像选择题或匹配题这样有多个选项的题型。';
$string['singleanswer'] = '选择一个答案';
$string['sortage'] = '按建立日期排序';
$string['sortalpha'] = '按字母表排序';
$string['sortquestionsbyx'] = '题目排序：{$a}';
$string['sortsubmit'] = '试题排序';
$string['sorttypealpha'] = '按类型、名称排序';
$string['specificapathnotonquestion'] = '指定的文件路径不在指定的题目中';
$string['specificquestionnotonquiz'] = '指定的题目不在指定的测验中';
$string['startagain'] = '重新开始';
$string['startattempt'] = '开始答题';
$string['startedon'] = '开始时间';
$string['startnewpreview'] = '开启一个新预览';
$string['statenotloaded'] = '试题 {$a} 的状态还没有从数据库中加载';
$string['status'] = '状态';
$string['stoponerror'] = '遇错中止';
$string['submitallandfinish'] = '提交所有答案并结束';
$string['subneterror'] = '很抱歉，本测验被锁定为只能从特定位置登录。现在，您的计算机不在允许范围内。';
$string['subnetnotice'] = '很抱歉，本测验被锁定为只能从特定位置登录。现在，您的计算机不在允许的子网范围内。但作为教师，您可以浏览试题。';
$string['subplugintype_quiz'] = '报告';
$string['subplugintype_quizaccess'] = '访问规则';
$string['subplugintype_quizaccess_plural'] = '访问规则';
$string['subplugintype_quiz_plural'] = '报告';
$string['substitutedby'] = '将被替代为';
$string['summaryofattempt'] = '答题情况报告';
$string['summaryofattempts'] = '您上次答题的概要';
$string['temporaryblocked'] = '您暂时不可以再参加此测验。<br/>您可以再次参加，在：';
$string['theattempt'] = '此次答题';
$string['time'] = '时间';
$string['timecompleted'] = '完成时间';
$string['timedelay'] = '在您尝试完成另一个测验之前，您不允许做这个测验，因为您没有通过';
$string['timeleft'] = '剩余时间';
$string['timelimit'] = '时间限制';
$string['timelimitexeeded'] = '很抱歉！时间已用完！';
$string['timelimit_help'] = '如果启用，会有一个浮动窗口（必须激活JavaScript）显示倒计时的计时器。当时间耗尽，会自动提交测验，包括所有已经回答过的题目。';
$string['timelimitmin'] = '时间限制（分钟）';
$string['timelimitsec'] = '时间限制（秒）';
$string['timestr'] = '%y 年 %m 月 %d 日的 %H:%M:%S';
$string['timesup'] = '时间到！';
$string['timetaken'] = '耗时';
$string['tofile'] = '到文件：';
$string['tolerance'] = '容许误差';
$string['toomanyrandom'] = '所要求的随机题的数量大于该类别现有题量！({$a})';
$string['top'] = '顶层';
$string['totalpointsx'] = '总分：{$a}';
$string['totalquestionsinrandomqcategory'] = '此类别共有 {$a} 道试题。';
$string['true'] = '对';
$string['truefalse'] = '判断题';
$string['type'] = '题型';
$string['unfinished'] = '未关闭';
$string['ungraded'] = '未评分';
$string['unit'] = '单位';
$string['unknowntype'] = '行{$a}处不支持该类别的试题。该试题将被忽略';
$string['unusedcategorydeleted'] = '此类别已经被删除，因为删除课程后，它下面的题目都不再使用。';
$string['updatesettings'] = '升级测试环境';
$string['updatingatttemptgrades'] = '更新测验成绩。';
$string['updatingfinalgrades'] = '更新最终成绩。';
$string['updatingthegradebook'] = '正在升级成绩单。';
$string['upgradesure'] = '<div>测验模块将大幅改动测验数据库表，但是这种升级还没有被充分测试。强烈建议您在此之前备份您的数据库中相应的表。</div>';
$string['upgradingquizattempts'] = '升级测验试卷：测验 {$a->done}/{$a->outof}（测验 id {$a->info}）';
$string['upgradingveryoldquizattempts'] = '升级非常旧的测验试卷： {$a->done}/{$a->outof}';
$string['url'] = 'URL';
$string['usedcategorymoved'] = '因为删除此课程后，这些题目还被其它测验使用，所以此分类被移动到站点级。';
$string['useroverrides'] = '用户覆盖';
$string['usersnone'] = '还没有学生参与此测验';
$string['validate'] = '验证';
$string['viewallanswers'] = '查看 {$a} 份试卷';
$string['viewallreports'] = '查看 {$a} 份试卷的报告';
$string['viewed'] = '看过';
$string['warningmissingtype'] = '<b>这个试题是一个还没有安装在您 Moodle 上的题型。<br />请给您的 Moodle 管理员发出警报。</b>';
$string['wheregrade'] = '我的成绩在哪里？';
$string['wildcard'] = '通配符';
$string['windowclosing'] = '此窗口稍后会关闭。';
$string['withsummary'] = '概览统计';
$string['wronguse'] = '您不能这样使用此页';
$string['xhtml'] = 'XHTML';
$string['youneedtoenrol'] = '参加此测验前需要选修此课程。';
$string['yourfinalgradeis'] = '这个测验您的最后得分是 {$a}';
