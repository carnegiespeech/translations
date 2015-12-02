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
 * Strings for component 'assignment', language 'ar', branch 'MOODLE_22_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'أضف تسليم';
$string['allowdeleting'] = 'السماح بالحذف';
$string['allowdeleting_help'] = 'عند التفعيل، يمكن للطلاب حذف الملفات المرفوعة بأي وقت قبل التسليم للتصحيح.';
$string['allowmaxfiles'] = 'العدد الاقصى للملفات التي تحمل إلى الموقع';
$string['allowmaxfiles_help'] = 'العدد الأقصى للملفات التي يمكن رفعها. بما أن هذا لا يعرض في أي مكان، نقترح ذكره في وصف الوظيفة.';
$string['allownotes'] = 'السماح بالملاحظات';
$string['allownotes_help'] = 'عند التفعيل، يمكن لطلاب إدخال ملاحظات على مربعات النصوص، كما في حالة الوظائف النصية على الإنترنت online.';
$string['allowresubmit'] = 'السماح بإعادة تقديم وظيفة';
$string['allowresubmit_help'] = 'إن تم تفعيل هذا الخيار فسيكون مسموح للطالب إعادة تقديم الوظيفة بعد أن تم تقييمها (ليتم إعادة تقييمها من جديد).';
$string['alreadygraded'] = 'لقد تم تقييم ';
$string['assignmentdetails'] = 'تفاصيل وظيفة';
$string['assignment:exportownsubmission'] = 'صدر تسليمك الخاص بك';
$string['assignment:exportsubmission'] = 'صدر تسليم';
$string['assignment:grade'] = 'وضع علامة للوظيفة';
$string['assignmentmail'] = '{$a->teacher} قام يوضع بعض الاجابات التقييمية على مهمتك المقدمة لـ \'{$a->assignment}\'

تستطيع مشاهدتها مرفقة مع مهمتك المقدمة {$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} قام بوضع بعض الاجابات التقييمية على مهمتك التي تم تقديمها \'<i>{$a->assignment}</i>\'<br /><br />
 ييمكنك مشاهدتها مرفقة مع مهمتك<a href="{$a->url}">assignment submission</a>.';
$string['assignmentname'] = 'اسم الوظيفة';
$string['assignmentsubmission'] = 'تسليم وظيفة';
$string['assignment:submit'] = 'تقديم وظيفة';
$string['assignmenttype'] = 'نوع الوظيفة';
$string['assignment:view'] = 'معاينة وظيفة';
$string['availabledate'] = 'متاح من';
$string['cannotviewassignment'] = 'لا يمكنك معاينة هذه الوظيفة';
$string['comment'] = 'تعليق (علق)';
$string['commentinline'] = 'قم بتعليق في نفس السطر';
$string['configitemstocount'] = 'طبيعة الموادِ الّتي سَتُحْسَبُ لمقالاتِ الطالبِ في المهامِ على الإنترنتِ';
$string['configmaxbytes'] = 'الحجم الافتراضي الأكبر لكل الوظائف على الموقع (خاضع لقيود المقررات والإعدادات المحلية)';
$string['confirmdeletefile'] = 'هل أنت متأكد تماما القيام بحذف هذا الملف؟ <br /><strong>{$a}</strong>';
$string['currentgrade'] = 'الدرجة الحالية في';
$string['deleteallsubmissions'] = 'أحذف كل التسليمات';
$string['deletefilefailed'] = 'تم فشل حذف الملف';
$string['description'] = 'الوصف';
$string['downloadall'] = 'قم بتحميل كل الوظائف كملف مضغوط';
$string['draft'] = 'مسودة';
$string['due'] = 'حان وقت الوظيفة';
$string['duedate'] = 'تاريخ تقديم الوظيفة';
$string['duedateno'] = 'لا يوجد موعد لتقديم الوظيفة';
$string['early'] = '{$a} مبكر';
$string['editmysubmission'] = 'حرر تسليمي';
$string['editthesefiles'] = 'حرر هذه الملفات';
$string['editthisfile'] = 'حدث هذا الملف';
$string['emailstudents'] = 'أرسال الأشعارات بالبريد الإلكتروني للطلاب';
$string['emailteachermail'] = 'قام {$a->username} بتحديث الوظيفة المقدمة لـ \'{$a->assignment}\' وهذه الوظيفة موجودة في: {$a->url}';
$string['emailteachermailhtml'] = 'قام {$a->username} بتحديث الوظيفة المقدمة لـ <i>\'{$a->assignment}\'</i><br /><br /> وهي <a href="{$a->url}">متوفرة على الموقع</a>.';
$string['emailteachers'] = 'بريد إلكتروني تنبيهي للمعلمون';
$string['emailteachers_help'] = 'إذا تم تفعيل هذا الخيار، سيصل للمدرسين إعلام بالبريد الإلكتروني كلما رفع طالب أو حدث مرسلاته.

سيتم فقط إعلام المدرسين الذين لهم الحق بتقييم الوظيفة. فعلى سبيل المثال، إن كان في المقرر مجموعات منفصلة وكان المدرس ملزماً بمجموعة محددة فقط، فلن يستلم إعلامات بخصوص طلاب المجموعات الأخرى.';
$string['emptysubmission'] = 'لم تقم بتقديم أي شئ';
$string['enablenotification'] = 'ارسال إشعارات بالبريد الإلكتروني';
$string['errornosubmissions'] = 'لا يوجد تسليمات ليتم تنزيلها';
$string['existingfiledeleted'] = 'تم حذ الملفات الموجودة :{$a}';
$string['failedupdatefeedback'] = 'تعذر تحديث الاجابات التقييمية للوظيفة المقدمة من {$a}';
$string['feedback'] = 'اجابة تقييمية';
$string['feedbackfromteacher'] = 'اجابة تقييمية من الـ {$a}';
$string['feedbackupdated'] = 'تحديث اجابة تقييمية {$a}  الناس';
$string['finalize'] = 'امنع تحديث التسليم';
$string['graded'] = 'تم رصد درجة';
$string['guestnosubmit'] = 'عذرا، لا يسمح للزوار بالقيام بتقديم مهمه. يجب عليك الدخول/التسجيل في الموقع قبل أن تستطيع تقديم اجابتك.';
$string['guestnoupload'] = 'عذرا، لا يسمح للزوار بتجميل الملفات';
$string['helpoffline'] = '<p>هذا مفيد عندما يتم تجهيز الوظيفة خارج مودل. من الممكن أن تكون في موقع أخر أو في قاعة دراسية تقليدية.</p><p> سيتمكن الطلاب من مشاهدة توصيف الوظيفة، ولكن لن يستطيعون تحميل الملفات أو أي شئ أخر. سيعمل التقييم بشكل طبيعي، وسيحصل الطلاب على أشعارات بعلاماتهم.';
$string['helponline'] = '<p>يطلب نوع الوظيفة هذا من الطلاب تحرير النص بأستخدام أدوات التحرير العادية. يتستطيع المعلمون تصحيحها مباشرة، ووضع التعليقات أو التعديلات في نفس السطر.</p> <p> (لو كنت على دراية بإصدرات مودل السابقة فستلاحط أن نوع الوظيفة هذا يقوم بنفس العمل الذي كانت تقوم به وحدة المذكرات)</p>';
$string['helpuploadsingle'] = '<p>يسمح نوع الوظيفة هذه لكل مستخدم تحميل ملف واحد من أي نوع كان.</p> <p> من الممكن أن تكون ملف محرر نصوص مثل وورد، أرشيف مضغوط، صورة، أو أي شئ تقوم بطلبه منهم للقيام بتقديمه.</p>';
$string['hideintro'] = 'أخفي الوصف قبل التاريخ المسموح به';
$string['invalidassignment'] = 'الوظيفة غير صحيحة';
$string['invalidid'] = 'معرًٍف الوظيفة غير صحيح';
$string['invalidtype'] = 'نوع الوظيفة غير صحيح';
$string['invaliduserid'] = 'معرف المستخدم غير صحيح';
$string['lastgrade'] = 'أخر درجة';
$string['late'] = '{$a} متأخر';
$string['maximumgrade'] = 'الدرجة القصوى';
$string['maximumsize'] = 'حجم الملف';
$string['messageprovider:assignment_updates'] = 'إشعارات المهمات';
$string['modulename'] = 'وظيفة';
$string['modulename_help'] = '<p><img alt=""  src="<?php echo $CFG->wwwroot?>/mod/assignment/icon.gif" />&nbsp;<b>الوجبات</b></p>
<p><b>يستطع المدرس من خلال الواجبات تحديد الواجب المطلوب من الطلاب
تحضيره بمحتوى رقمي (في اي هيئة) والقيام بتسليمه بواسطة تحميل الملف في الخادم.
نماذج الواجبات تضمن المقالات، المشاريع التعليمية، التقارير، إلخ. هذه الوحده
تحتوي على إمكانيات تصحيح الواجبات وإعطائها الدرجات المستحقة.</b></p>';
$string['modulenameplural'] = 'وظائف';
$string['newsubmissions'] = 'وظائف تم تقديمها';
$string['noassignments'] = 'لا توجد وظائف بعد';
$string['noattempts'] = 'لم يتم القيام بأي محاولة في هذه الوظيفة';
$string['noblogs'] = 'لا يوجد لديك مدخلات مدونة لتقوم بتسليمها';
$string['nofiles'] = 'لا يوجد ملفات مقدمة';
$string['nofilesyet'] = 'لم يتم تقديم أى ملف بعد';
$string['norequiregrading'] = 'لا توجد وظائف بحاجة لتقييم';
$string['nosubmisson'] = 'لم يتم تسليم أي وظيفة';
$string['notavailableyet'] = 'عذراً، هذه الوظيفة غير متوفرة حالياً.</br> سيتم نشر التعليمات الخاصة بهذه الوظيفة في التاريخ الموضح أدناه.';
$string['notes'] = 'ملاحظات';
$string['notesempty'] = 'لا توجد مدخلات';
$string['notesupdateerror'] = 'حدث خطاء أثناء تحديث الملاحظات';
$string['notgradedyet'] = 'لم تعطى درجة بعد';
$string['notsubmittedyet'] = 'لم تقدم بعد';
$string['onceassignmentsent'] = 'بمجرد تقديم الوظيفة للتقييم، لن تتمكن من حذف أو إرفاق ملف (أو ملفات). هل ترغب في الاستمرار؟';
$string['operation'] = 'عملية';
$string['optionalsettings'] = 'إعدادات اختيارية';
$string['overwritewarning'] = 'تحذير: التحميل مرة أخرى سيقوم باستبدال الحالي';
$string['pagesize'] = 'عدد الوظائف';
$string['pluginadministration'] = 'إدارة المهمات';
$string['pluginname'] = 'وظيفة';
$string['preventlate'] = 'منع تسليم الوظائف المتأخرة';
$string['quickgrade'] = 'اسمح بتصحيح سريع';
$string['quickgrade_help'] = 'إنت تم تفعيله، سيمكن تقييم عدة وظائف من صفحة واحدة. قم بإضافة العلامات والتعليقات ومن ثم اضغط "احفظ جميع اجاباتي التقييمية" لحفظ كل التعديلات في هذه الصفحة.';
$string['requiregrading'] = 'يتطلب وضع درجة';
$string['responsefiles'] = 'ملفات الاجابة';
$string['reviewed'] = 'تمت مراجعته';
$string['saveallfeedback'] = 'احفظ جميع اجاباتي التقييمية';
$string['sendformarking'] = 'إرسال للتقييم';
$string['showrecentsubmissions'] = 'أظهر التسليمات الحديثة';
$string['submission'] = 'تسليم';
$string['submissiondraft'] = 'تسليم مسودة';
$string['submissionfeedback'] = 'تعليق على الإرسال';
$string['submissions'] = 'تسليمات';
$string['submissionsaved'] = 'تم حفظ التغيرات التي قمت بها';
$string['submissionsnotgraded'] = '{$a} مرسلات غير مصححة';
$string['submitassignment'] = 'قم بتقديم مهمتك باستخدام هذا النموذج';
$string['submitedformarking'] = 'تم تسليم الوظيفة للتصحيح، ولا يمكن تحديثها';
$string['submitformarking'] = 'الإرسال الأخير لتقييم الوظيفة';
$string['submitted'] = 'تم التسليم';
$string['submittedfiles'] = 'الملفات المسلمة';
$string['subplugintype_assignment'] = 'نوع الوظيفة';
$string['subplugintype_assignment_plural'] = 'أنواع الوظائف';
$string['trackdrafts'] = 'تفعيل زر "إرسال للتقييم"';
$string['trackdrafts_help'] = 'يسمح زر "إرسال للتقييم" للطلاب إعلام المحاضر بأنهم قد انتهوا من العمل على الوظيفة. يمكن للأستاذ أن يعيد الوظيفة لوضعية المسودة (إن كانت تحتاج لشغل أكثر على سبيل المثال).';
$string['typeblog'] = 'مشاركة مدونة';
$string['typeoffline'] = 'نشاط بدون اتصال';
$string['typeonline'] = 'نص مباشر';
$string['typeupload'] = 'تحميل الملفات المتقدم';
$string['typeuploadsingle'] = 'تحميل ملف واحد';
$string['unfinalize'] = 'الرجوع للمسودة';
$string['unfinalizeerror'] = 'حدث خطأ، ولا يمكن إعادة المواد المرسلة لحالة المسودة.';
$string['unfinalize_help'] = 'تسمح الإعادة لحالة المسودة للطلاب بإضافة تحديثات لوظائفهم.';
$string['uploadafile'] = 'رفع ملف';
$string['uploadbadname'] = 'يحتوي اسم هذا الملف على حروف غريبة ولذا تعذر تحميله.';
$string['uploadedfiles'] = 'الملفات المحملة';
$string['uploaderror'] = 'وقع خطأ أثناء حفظ الملف على المزود';
$string['uploadfailnoupdate'] = 'تم تحميل الملف بالفعل لكن تعذر تحديث ما قمت بتسليمه!';
$string['uploadfiles'] = 'حمل ملفات';
$string['uploadfiletoobig'] = 'عفوا! هذا الملف حجمه كبير جدا (الحد المسموح به{$a}  بايت)';
$string['uploadnofilefound'] = 'تعذر العثور على أية ملفات، هل أنت متأكد أنك قمت باختيار ملف للتحميل؟';
$string['uploadnotregistered'] = '\'{$a}\' تم تحميله بالفعل، لكن تعذر تسجيل ما قمت بتقديمه!';
$string['uploadsuccess'] = 'تم تحميل \'{$a}\' بنجاح';
$string['viewfeedback'] = 'معاينة علامات الوظيفة والتعليقات';
$string['viewmysubmission'] = 'عايين تسليماتي';
$string['viewsubmissions'] = 'معاينة {$a} وظيفة تم تسليمها';
$string['yoursubmission'] = 'مهمتك المسلمة';
