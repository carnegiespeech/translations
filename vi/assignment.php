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
 * Strings for component 'assignment', language 'vi', branch 'MOODLE_22_STABLE'
 *
 * @package   assignment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeleting'] = 'Cho phép xoá';
$string['allowmaxfiles'] = 'Số tập tin tối đa được tải lên';
$string['allownotes'] = 'Cho phép viết ghi chú';
$string['allowresubmit_help'] = '<p>Mặc định là học viên không thể gửi lại các bài tập một khi giáo viên đã cho điểm</p>

<p>Nếu bạn bật tùy chọn này lên, thì học viên sẽ được phép gửi lại các bài tập sau khi họ đã được cho điểm (để bạn có thể đánh gía cho điểm lại).  Tùy chọn này có thể có ích khi giáo viên muốn khuyến khích học viên học tốt hơn trong quá trình lặp đi lặp lại.</p>

<p>Rõ ràng là tùy chọn này không thể sử dụng cho các bài tập ngoại tuyến.</p>';
$string['alreadygraded'] = 'Bài tập của bạn đã được chấm điểm nên không thể nộp bài lại được nữa.';
$string['assignmentdetails'] = 'Chi tiết bài tập';
$string['assignment:grade'] = 'Chấm điểm bài tập';
$string['assignmentmail'] = '{$a->teacher} vừa viết vài nhận xét cho bài tập \'{$a->assignment}\' mà bạn đã nộp.

Bạn có thể xem ở phần kèm theo bài tập của mình:

    {$a->url}';
$string['assignmentmailhtml'] = '{$a->teacher} vừa viết vài nhận xét về bài tập \'<i>{$a->assignment}</i>\' mà bạn đã nộp<br /><br />
Bạn có thể xem ở phần kèm theo<a href="{$a->url}">bài tập</a> của mình.';
$string['assignmentname'] = 'Tên bài tập';
$string['assignment:submit'] = 'Gửi bài';
$string['assignmenttype'] = 'Kiểu bài tập';
$string['assignment:view'] = 'Xem bài nộp';
$string['availabledate'] = 'Bắt đầu nộp từ';
$string['cannotdeletefiles'] = 'Có lỗi xảy ra. Tập tin chưa được xóa.';
$string['comment'] = 'Nhận xét';
$string['commentinline'] = 'Nhận xét vào trong bài';
$string['commentinline_help'] = '<p>Với tùy chọn này, tài liệu nguyên gốc được sinh viên gửi lên, trong quá trình đánh giá cho điểm sẽ được sao chép vào vùng lời phê, điều này sẽ tạo điều kiện thuận lợi cho giáo viên gửi lời phê ở giữa các dòng (thí dụ: dùng một màu khác chẳng hạn) hay dễ dàng hơn trong việc chỉnh sửa tài liệu gốc.</p>';
$string['configitemstocount'] = 'Những kiểu tài liệu có thể được chấp nhận như bài tập nộp trực tuyến của sinh viên';
$string['configmaxbytes'] = 'Dung lượng tối đa mặc định của tất cả bài tập nộp vào hệ thống (phụ thuộc vào thiết lập của khóa học hay các thiết lập cục bộ khác)';
$string['configshowrecentsubmissions'] = 'Mọi người có thể xem các thông báo nộp bài trong các báo cáo những hoạt động gần nhất.';
$string['confirmdeletefile'] = 'Bạn có chắn chắn muốn xoá tập tin này?<br /><strong>{$a}</strong>';
$string['deleteallsubmissions'] = 'Xoá tất cả các bài nộp';
$string['deletefilefailed'] = 'Không xoá được';
$string['draft'] = 'Bản nháp';
$string['duedate'] = 'Hạn chót';
$string['duedateno'] = 'Vô thời hạn';
$string['early'] = '{$a}';
$string['editmysubmission'] = 'Sửa bài nộp';
$string['emailstudents'] = 'Gửi điện thư thông báo cho học viên';
$string['emailteachermail'] = 'Học viên {$a->username} đã cập nhật bài nộp cho bài tập \'{$a->assignment}\'.

Bài nộp đó có thể xem tại đây:

{$a->url}';
$string['emailteachermailhtml'] = 'Học viên {$a->username} đã cập nhật bài nộp cho bài tập \'{$a->assignment}\'.

Bài nộp đó có thể xem <a href="{$a->url}">trên website</a>';
$string['emailteachers'] = 'Gửi thư điện tử thông báo cho học viên';
$string['emailteachers_help'] = '<p>Nếu kích hoạt, giáo viên sẽ được báo bằng một thư điện tử ngắn bất cứ lúc nào có một học viên thêm hay gửi cập nhật một bài tập chỉ định.</p>

<p>Chỉ những giáo viên có quyền cho điểm tài liệu do học viên gửi lên, thì mới nhận được thông báo này. Vì vậy, chẳng hạn như nếu cua học sử dụng tùy chọn các nhóm riêng, thì giáo viên được chỉ định riêng cho từng nhóm sẽ không nhận được bất cứ thông báo nào về các học viên thuộc nhóm khác.</p>

<p>Dĩ nhiên là đối với các hoạt động ngoại tuyến thì không có thư báo vì các học viên hoạt động bên ngoài trang trực tuyến.</p>';
$string['emptysubmission'] = 'Bạn chưa nộp bài nào cả';
$string['enablenotification'] = 'Gửi điện thư thông báo';
$string['existingfiledeleted'] = 'Đã xoá tập tin {$a}';
$string['failedupdatefeedback'] = 'Chưa cập nhật được phần nhận xét bài nộp của học viên {$a}';
$string['feedback'] = 'Nhận xét';
$string['feedbackfromteacher'] = 'Nhận xét của {$a}';
$string['feedbackupdated'] = 'Đã cập nhật phần nhận xét của {$a} thành viên';
$string['finalize'] = 'Không có bài nộp nào nữa';
$string['finalizeerror'] = 'Có lỗi xảy ra và bài vẫn chưa được nộp lên';
$string['graded'] = 'Đã cho điểm';
$string['guestnosubmit'] = 'Xin lỗi, khách vãng lai không được nộp bài tập. Bạn cần phải đăng kí thành viên và đăng nhập mới có thể trả lời được';
$string['guestnoupload'] = 'Xin lỗi, khách vãng lai không được tải tập tin lên hệ thống';
$string['helpoffline'] = '<p>Tùy chọn này có thể hữu ích khi bài tập được làm ngoài hệ thống Moodle, ví dụ ở một website ngoài hay trên lớp học.</p><p>Học viên có thể xem phần mô tả của bài tập, nhưng không thể tải tập tin hay bất cứ thứ gì khác lên hệ thống. Vẫn có thể cho điểm bình thường, và học viên sẽ được thông báo về điểm số của mình.</p>';
$string['helponline'] = '<p>Kiểu bài tập này đòi hỏi học viên phải viết một văn bản, với các công cụ soạn thảo bình thường. Giáo viên có thể cho điểm trực tuyến, và cả viết nhận xét bên trong văn bản đó hoặc chỉnh sửa nếu muốn.</p>
<p>(Nếu bạn đã quen dùng các phiên bản Moodle trước, kiểu bài tập này cũng giống như kiểu module Nhật kí).</p>';
$string['helpupload'] = '<p>Kiểu bài tập này cho phép học viên tải một hay nhiều tập tin thuộc mọi định dạng lên hệ thống.
Đó có thể là một tài liệu Word, một tập tin PDF, một hình ảnh, một website nén lại hay mọi thứ bạn yêu cầu nộp.</p>
<p>Kiểu này cũng cho phép bạn tải nhiều tập tin làm bài nộp. Các tập tin này có thể được tải lên trước hạn nộp bài, nhằm giúp mỗi học viên có thể làm việc với một tập tin khác nhau.</p>
<p>Học viên cũng có thể viết ghi chú về các bài mình đã nộp lên, diễn tiến làm bài của mình hay mọi thông tin khác.</p>
<p>Bài nộp kiểu này phải do chính thành viên hoàn tất. Bất cứ lúc nào bạn cũng có thể xem diễn tiến hiện tại của bài làm, các bài chưa làm xong được đánh dấu là Bản nháp. Bạn có thể chuyển mọi bài nộp chưa cho điểm thành Bản nháp.</p>';
$string['helpuploadsingle'] = '<p>Kiểu bài tập này cho phép mỗi thành viên tải một tập tin duy nhất, thuộc mọi định dạng, lên hệ thống. .</p> <p>Đó có thể là một tập tin Word, PDF, hình ảnh, một website nén, hay mọi kiểu khác.</p>';
$string['hideintro'] = 'Ẩn phần mô tả trước khi đến hạn mở';
$string['itemstocount'] = 'Số lượng';
$string['late'] = 'Trễ hạn {$a}';
$string['maximumsize'] = 'Dung lượng lớn nhất';
$string['modulename'] = 'Bài tập';
$string['modulename_help'] = '<p><img alt="" src="<?php echo $CFG->wwwroot?>/mod/assignment/icon.gif" />&nbsp;<b>Các bài tập chỉ định</b></p>
<div class="indent">
Các bài tập chỉ định này cho phép giáo viên xác định một nhiệm vụ nào đó, yêu cầu học viên phải chuẩn bị một nội dung số hoá (bất cứ kiểu nào) và nộp bài bằng cách tải nội dung đó lên máy chủ. Các bài tập điển hình gồm các bài luận, các dự án, các bài báo cáo, v.v....  Mô đun này bao gồm những tiện ích nhằm hỗ trợ cho quá trình đánh giá học viên.
</div>';
$string['modulenameplural'] = 'Bài tập';
$string['newsubmissions'] = 'Bài tập đã nộp';
$string['noassignments'] = 'Chưa có bài tập nào';
$string['noattempts'] = 'Chưa có ai làm bài tập này';
$string['nofiles'] = 'Chưa có bài nào được nộp lên';
$string['nofilesyet'] = 'Chưa có bài nào được nộp lên';
$string['nomoresubmissions'] = 'Không được phép nộp lần nữa.';
$string['notavailableyet'] = 'Xin lỗi, bài tập này chưa tới hạn mở.';
$string['notes'] = 'Ghi chú';
$string['notesempty'] = 'Không có ghi chú';
$string['notesupdateerror'] = 'Có lỗi xảy ra khi cập nhật ghi chú';
$string['notgradedyet'] = 'Chưa có điểm';
$string['onceassignmentsent'] = 'Một khi gửi đi để chấm điểm, bạn sẽ không thể xóa hay đính kèm thêm tập tin được nữa. Bạn có thực sự muốn tiếp tục?';
$string['overwritewarning'] = 'Chú ý: Bài được tải lên sẽ THAY THẾ bài đã nộp trước đó.';
$string['pagesize'] = 'Số bài nộp hiển thị trong mỗi trang';
$string['pluginname'] = 'Bài tập';
$string['preventlate'] = 'Không cho phép nộp bài trễ';
$string['quickgrade'] = 'Cho phép chấm điểm nhanh';
$string['responsefiles'] = 'Bài nộp trả';
$string['reviewed'] = 'Đã xem lại';
$string['saveallfeedback'] = 'Lưu tất cả các nhận xét';
$string['sendformarking'] = 'Gửi để chấm điểm';
$string['showrecentsubmissions'] = 'Mở các bài nộp gần nhất';
$string['submission'] = 'Bài nộp';
$string['submissiondraft'] = 'Bản nháp bài nộp';
$string['submissionfeedback'] = 'Nhận xét về bài nộp';
$string['submissions'] = 'Bài nộp';
$string['submissionsaved'] = 'Đã lưu các thay đổi';
$string['submissionsnotgraded'] = '{$a} bài nộp chưa chấm điểm';
$string['submitassignment'] = 'Dùng mẫu này để nộp bài tập của bạn';
$string['submitedformarking'] = 'Bài này đã được gửi để chấm điểm và không thể cập nhật được nữa';
$string['submitformarking'] = 'Bài nộp sau cùng để chấm điểm';
$string['submitted'] = 'Bài đã nộp';
$string['submittedfiles'] = 'Tập tin đã nộp';
$string['subplugintype_assignment'] = 'Kiểu bài tập';
$string['trackdrafts'] = 'Bật chức năng Gửi để chấm điểm';
$string['typeoffline'] = 'Hoạt động ngoại tuyến';
$string['typeonline'] = 'Bài viết trực tuyến';
$string['typeupload'] = 'Tải nhiều tập tin (nâng cao)';
$string['typeuploadsingle'] = 'Tải một tập tin';
$string['unfinalize'] = 'Chuyển thành bản nháp';
$string['unfinalizeerror'] = 'Có lỗi xảy ra, bài nộp này không thể chuyển thành bản nháp';
$string['uploadbadname'] = 'Tên tập tin có mang các kí tự lạ, nên không tải lên được';
$string['uploadedfiles'] = 'Tập tin đã tải lên';
$string['uploaderror'] = 'Có lỗi xảy ra khi lưu tập tin lên máy chủ';
$string['uploadfailnoupdate'] = 'Tập tin đã được tải lên nhưng không thể cập nhật bài nộp của bạn';
$string['uploadfiletoobig'] = 'Xin lỗi, tập tin này quá lớn (giới hạn là {$a} byte)';
$string['uploadnofilefound'] = 'Không tìm thấy tập tin. Bạn có chắc chắn đã chọn một tập tin để tải lên hay chưa?';
$string['uploadnotregistered'] = 'Đã tải \'{$a}\' lên nhưng không thể lưu bài nộp của bạn.';
$string['uploadsuccess'] = 'Đã tải \'{$a}\' lên thành công';
$string['viewfeedback'] = 'Xem điểm và nhận xét của các bài nộp';
$string['viewsubmissions'] = 'Xem {$a} bài tập đã nộp';
