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
 * Strings for component 'portfolio_mahara', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = '啟用Leap2A作品選集支援(需要Mahara 1.3 或以上版本)';
$string['err_invalidhost'] = '無效的Mnet主機';
$string['err_invalidhost_help'] = '這一插件在配置時錯誤地指向一個無效(或已被刪除)的Moodle網路主機。這一插件依賴Moodle網路同儕才能進行SSO IDP發行，SSO_SP訂閱，以及個人作品集的訂閱和發行。';
$string['err_networkingoff'] = 'MNet是關閉的';
$string['err_networkingoff_help'] = 'MNet已完全關閉。在嘗試設定這一插件之前請啟用它。這一插件的任何實例已經被設定為無法看見，直到它被修復。--你需要以手動方式再一次把它們設定為可以看見。若不這樣做，他們無法被使用。';
$string['err_nomnetauth'] = 'MNet認證插件是關閉的';
$string['err_nomnetauth_help'] = 'MNet認證插件是關閉的，但卻是這一服務所需要的';
$string['err_nomnethosts'] = '需要依賴Moodle網路';
$string['failedtojump'] = '無法開始與遠端伺服器溝通';
$string['failedtoping'] = '無法開始與遠端伺服器{$a}溝通';
$string['mnethost'] = 'Mnet主機';
$string['mnet_nofile'] = '無法在傳遞的物件中找到檔案---奇怪的錯誤';
$string['mnet_nofilecontents'] = '在傳遞的物件中找到檔案，但無法取出內容---奇怪的錯誤：{$a}';
$string['mnet_noid'] = '無法為這通行憑證找到配對的傳遞紀錄';
$string['mnet_notoken'] = '無法找到配合這一傳遞的通行憑證';
$string['mnet_wronghost'] = '遠端主機無法為這通行憑證找到配對的傳遞紀錄';
$string['pf_name'] = '作品選集服務';
$string['pluginname'] = 'Mahara 電子作品選集服務';
$string['senddisallowed'] = '在這時候，你無法轉移檔案到Mahara';
$string['url'] = '網址';
