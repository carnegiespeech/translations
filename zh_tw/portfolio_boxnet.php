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
 * Strings for component 'portfolio_boxnet', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   portfolio_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API密鑰';
$string['err_noapikey'] = '無API密鑰';
$string['err_noapikey_help'] = '這一插件還沒有配置API密鑰，你可以登入Box.net，然後在OpenBox發展頁面取得一個。';
$string['existingfolder'] = '可以放檔案進去的現有資料夾';
$string['folderclash'] = '你要求建立的資料夾已經存在';
$string['foldercreatefailed'] = '無法在 box.met 建立你的目標資料夾';
$string['folderlistfailed'] = '無法從 box.net 擷取資料夾清單';
$string['newfolder'] = '可放檔案進去的新資料夾';
$string['noauthtoken'] = '無法擷取一個認證憑證來在這次交流中使用';
$string['notarget'] = '你必須指定一個現有的或新的資料夾，以供檔案上傳';
$string['noticket'] = '無法從 box.net 擷取票證已便開始認證程序';
$string['password'] = '你的 box.net 密碼(不會被儲存)';
$string['pluginname'] = 'Box.net';
$string['sendfailed'] = '無法傳送內容到box.net：{$a}';
$string['setupinfo'] = '設定說明';
$string['setupinfodetails'] = '要獲得API密鑰。請登入box.net，並訪問 <a href="{$a->servicesurl}">OpenBox development page</a>。在"發展工具"下選"建立新應用"，然後為你的Moodle網站建立一新應用。API密鑰是顯示在"應用編輯表單"的"後端參數"那部分。
在這表單，填上\'Redirect URL\' field to:<br /><code>{$a->callbackurl}</code>，此外，你也可以提供你的Moodle網站的其他訊息。這些數值可以稍後在"檢視我的應用"頁面上加以編輯。';
$string['sharedfolder'] = '共用的';
$string['sharefile'] = '共用這檔案？';
$string['sharefolder'] = '共用這新資料夾？';
$string['targetfolder'] = '目標資料夾';
$string['tobecreated'] = '要被建立';
$string['username'] = '你的box.net用戶名稱(不會被儲存)';
