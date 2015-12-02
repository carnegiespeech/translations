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
 * Strings for component 'filter_mediaplugin', language 'zh_tw', branch 'MOODLE_22_STABLE'
 *
 * @package   filter_mediaplugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fallbackaudio'] = '聲音連結';
$string['fallbackvideo'] = '影片連結';
$string['filtername'] = '多媒體插件';
$string['flashanimation'] = 'Flash動畫';
$string['flashanimation_help'] = '副檔名為*.swf的檔案。基於安全因素，此過濾器只對可信任內容有效。';
$string['flashvideo'] = 'Flash影片';
$string['flashvideo_help'] = '副檔名為*.flv和*.f4v的檔案。使用Flowplayer播放影片，需要Flash外掛程式和javascript。如果指定了多個來源，會使用HTML5影片備用方案。';
$string['html5audio'] = 'HTML5音效';
$string['html5audio_help'] = '副檔名為*.ogg和*.acc等等的檔案。只和最新的web瀏覽器相容，但不幸的是沒有任何一種格式被所有瀏覽器支援。
解決方法是用#分隔多個候補（例如：http://example.org/audio.aac#http://example.org/audio.aac#http://example.org/audio.mp3#）。在舊瀏覽器會使用QuirTime播放器做為備用。備用可以是任意音效類型。';
$string['html5video'] = 'HTML5影片';
$string['html5video_help'] = '副檔名為*.webm、*.m4v、*.ogv和*.mp4等的檔案。只和最新的web瀏覽器相容，但不幸的是沒有任何一種格式被所有的瀏覽器支援。
解決方法是用#分隔多個備用(例如：http://example.org/video.m4v#http://example.org/video.acc#http://example.org/video.ogv#d=640x480）。
在舊版瀏覽器會使用QuickTime撥放器作為備用。';
$string['legacyheading'] = '舊的媒體播放器';
$string['legacyheading_help'] = '下列格式不建議在一般使用。它們通常都用在內部網路安裝了中心控管的客戶端。';
$string['legacyquicktime'] = 'QuickTime播放器';
$string['legacyquicktime_help'] = '副檔名是*.mov、*.mp4、*.m4a、*.mp4和*.mpg的文件。需要QuickTime播放器或解碼器。';
$string['legacyreal'] = 'Real media player';
$string['legacyreal_help'] = '副檔名為*.rm、*.ra、*.ram、*.ra和*.rv的檔案。需要RealPlayer。';
$string['legacywmp'] = 'Windows media player';
$string['legacywmp_help'] = '副檔名是*.avi和*.wmv的檔案。和windows下的IE完全相容，在其他瀏覽器或作業系統上可能會有問題。';
$string['mp3audio'] = 'MP3音樂';
$string['mp3audio_help'] = '副檔名是*.mp3的檔案。使用Flowplayer播放音樂，需要Flash外掛。';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_help'] = 'Vimeo影片分享網站。';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_help'] = 'YouTube影片分享網站，支援影片以及播放列表。';
