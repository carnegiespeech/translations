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
 * Strings for component 'filter_mediaplugin', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   filter_mediaplugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fallbackaudio'] = 'Enlace de Audio';
$string['fallbackvideo'] = 'Enlace de video';
$string['filtername'] = 'Plugins de Multimedia';
$string['flashanimation'] = 'Animación Flash';
$string['flashanimation_help'] = 'Archivos con extensión *.swf que por razones de seguridad este filtro solamente debería de usarse en textos confiables (que NO tienen riesgo de virus).';
$string['flashvideo'] = 'Video Flash';
$string['flashvideo_help'] = 'Archivos con extensión *.flv y *.f4v , estos videoclips se ven con Flowplayer, requierer plugin de Flash y Javascript. Usa video HTML 5 como remplazo-si-falla si se especifican fuentes múltiples.';
$string['html5audio'] = 'Audio HTML 5';
$string['html5audio_help'] = 'Archivos de audio con extensiones *.ogg, *.aac y otras. Es compatible con los navegadores de internet más recientes pero desafortunadamente no existe un formato que sea soportado por todos los navegadores. El truco para que funcione está en especificar estrategias alternas de reserva (fallback) separadas con # (ejemplo: http://ejemplo.org.mx/audio.aac#http://ejemplo.org.mx/audio.aac#http://ejemplo.org.mxaudio.mp3#), El reproductor QuickTime se usa como estrategia alterna para navegadores (muy) antiguos.';
$string['html5video'] = 'Video HTML 5';
$string['html5video_help'] = 'Archivos de video con extensiones *.webm, *.m4v, *.ogv, *.mp4 y otras. Es compatible con los navegadores de internet más recientes pero desafortunadamente no existe un formato que sea soportado por todos los navegadores. El truco para que funcione está en especificar estrategias alternas de reserva (fallback) separadas con # (ejemplo: http://ejemplo.org.mx/video.m4v#http://ejemplo.org.mx/video.aac#http://ejemplo.org.mx/video.ogv#d=640x480), El reproductor QuickTime se usa como estrategia alterna para navegadores (muy) antiguos.';
$string['legacyheading'] = 'Reproductores multimedia (muy) antiguos';
$string['legacyheading_help'] = 'Los siguientes formatos no se recomiendan para uso general, usualmente se usan en instalaciones montadas en intranet con clientes administrados centralmente.';
$string['legacyquicktime'] = 'Reproductor Quicktime';
$string['legacyquicktime_help'] = 'Archivos con extensión *.mov, *.mp4, *.m4a, *.mp4 y *.mpg. Requieren el reproductor QuickTime o sus codecs..';
$string['legacyreal'] = 'Reproductor Real Media (...peligro,peligro,peligro... tiene muchos problemas)';
$string['legacyreal_help'] = 'Archivos con extensión *.rm, *.ra, *.ram, *.rp, *.rv. Requieren el reproductor RealPlayer.';
$string['legacywmp'] = 'Windows Media Player';
$string['legacywmp_help'] = 'Archivos con extensión *.avi y *.wmv. Completamente compatible con Internet Explorer en Windows, pero pueden ser problemáticos en otros exploradores o sistemas operativos.';
$string['mp3audio'] = 'Audio mp3';
$string['mp3audio_help'] = 'Archivos con extensión *.mp3. Reproducen audio empleando Flowplayer, requiere el plugin de Flash.';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_help'] = 'Sitio para compartir video de Vimeo.';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_help'] = 'Sitio para compartir video YouTube, soporta ligas de video y listas de reproducción (playlists).';
