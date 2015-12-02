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
 * Strings for component 'filter_poodll', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   filter_poodll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = '¿Activar PoodLL?';
$string['alwayshtml5'] = 'Siempre usar HTML5';
$string['audioheight'] = 'Altura Reproductor de Audio';
$string['audiosplash'] = 'Mostrar Audio Splash Simple';
$string['audiosplashdetails'] = 'Pantalla Splash se muestra solamente para Flowplayer.';
$string['audiotranscode'] = 'Auto Conv. a MP3';
$string['audiotranscodedetails'] = 'Automaticamente convierte archivo grabado de audio a formato MP3 antes de copiarlo de vuelta a Moodle. Usarlo solamente cuando emplea el servidor tokyo.poodll.com.';
$string['audiowidth'] = 'Ancho Audio Reproductor';
$string['autotryports'] = 'Intentar puertos diferentes si no pudiera conectarse';
$string['bandwidth'] = 'Conexión estudiante, bytes/segundo. Afecta calidad webcam.';
$string['bgtranscode_audio'] = 'Realizar conversiones a MP3 en segundo plano';
$string['bgtranscodedetails_audio'] = 'Esto es más confiable que realizarlas con los usuarios esperando. Pero el usuario no obtendrá su audio hasta que el Cron se haya ejecutado después de guardar. Solamente funciona si Usted está usando  FFMPEG y Moodle 2.7 o superior. Para grabaciones en MP3 con la grabadora MP3, la conversión ocurre en el navegador, no en el servidor. Así es que la conversión del lado del servidor (FFMPEG) no se usará.';
$string['bgtranscodedetails_video'] = 'Esto es más confiable que realizarlas con los usuarios esperando. Pero el usuario no obtendrá su audio hasta que el Cron se haya ejecutado después de guardar. Solamente funciona si Usted está usando  FFMPEG y Moodle 2.7 o superior.';
$string['bgtranscode_video'] = 'Realizar Conversiones hacia MP4 en segundo plano';
$string['biggallheight'] = 'Vid. Galería (grande) Altura';
$string['biggallwidth'] = 'Vid. Galería (grande) Ancho';
$string['capturefps'] = 'Cuadros/segundo Captura Video Grabadora';
$string['captureheight'] = 'Altura Captura Video Grabadora';
$string['capturewidth'] = 'Ancho Captura Video Grabadora';
$string['datadir'] = 'Dir Datos PoodLL';
$string['datadirdetails'] = 'Un subdirectorio del directorio de Moodle, para permitir el acceso a archivos de algunos componentes de Moodle 1.9 a recursos multimedia. PoodLL no creará, ni gestionará permisos para esta carpeta.';
$string['defaultplayer'] = 'Reproductor A/V por defecto';
$string['defaultwhiteboard'] = 'Pizarrón por defecto';
$string['ffmpeg'] = 'Covertir multimedios subidos con FFMPEG';
$string['ffmpeg_details'] = 'FFMPEG debe estar instalado en su servidor Moodle y en la ruta del sistema. Necesitará soportar conversión a MP3, por lo que debe probarlo primeramente en la línea de comandos; por ejemplo: ffmpeg -i unarchivo.flv unarchivo.mp3 . Esto aún es *experimental*';
$string['filename'] = 'Nombre de archivo por defecto';
$string['filtername'] = 'Filtro PoodLL';
$string['filter_poodll_audioplayer_heading'] = 'Configuraciones Reproductor de Audio';
$string['filter_poodll_camera_heading'] = 'Configuraciones de Cámara Web';
$string['filter_poodll_flowplayer_heading'] = 'Configuraciones de Flowplayer';
$string['filter_poodll_intercept_heading'] = 'Tipos de archivo que PoodLL Maneja por Defecto';
$string['filter_poodll_legacy_heading'] = 'Configuraciones Antiguas de PoodLL';
$string['filter_poodll_mic_heading'] = 'Configuraciones de Micrófono';
$string['filter_poodll_network_heading'] = 'Configuraciones de Red PoodLL';
$string['filter_poodll_playertypes_heading'] = 'Tipos de Reproductor por defecto';
$string['filter_poodll_videogallery_heading'] = 'Configuraciones de Galería de Video';
$string['filter_poodll_videoplayer_heading'] = 'Configuraciones de Reproductor de Video';
$string['filter_poodll_whiteboard_heading'] = 'Configuraciones del Pizarrón';
$string['forum_audio'] = 'Foro PoodLL: ¿Audio?';
$string['forum_recording'] = 'Foro PoodLL: ¿Habilitar Grabación AV?';
$string['forum_video'] = 'Foro PoodLL: ¿Video?';
$string['fp_bgcolor'] = 'Color de Flowplayer';
$string['fpembedtype'] = 'Método de Flowplayer incrustado';
$string['fp_embedtypedescr'] = 'El objeto SWF es el más confiable. Flowplayer JS maneja las imágenes splash de vista previa mejor. Si usa Flowplayer JS considere apagar los filtros del plugin Multimedia que manejan MP3/FLV/MP4 para evitar filtrado doble.';
$string['fp_enableplaylist'] = 'Habilitar Audiolista Flowplayer';
$string['fp_enableplaylistdescr'] = 'Esto requiere la librería JQuery JavaScript y añade cerca de 100kb al tamaño de la página de descarga. Moodle la cacha, por lo que no debería de notarse un alentamiento. Usted también debería de configurar la incrustación de Flowplayer a Flowplayer JS. Purgue la cache después de cambiar esta o cualquier otra configuración de flowplayer.';
$string['handleflv'] = 'Manejar Archivos FLV';
$string['handlemov'] = 'Manejar Archivos MOV';
$string['handlemp3'] = 'Manejar Archivos MP3';
$string['handlemp4'] = 'Manejar Archivos MP4';
$string['html5controls'] = 'Controles HTML5';
$string['html5fancybutton'] = 'Usar botón de subida elegante';
$string['html5play'] = 'Reproducción HTML5';
$string['html5rec'] = 'Grabación HTML5';
$string['html5use_heading'] = 'Cuando usar HTML5';
$string['html5widgets'] = 'Widgets PoodLL HTML5';
$string['journal_audio'] = 'Journal PoodLL: ¿Audio?';
$string['journal_recording'] = 'Journal PoodLL: ¿Grabación AV Habilitada?';
$string['journal_video'] = 'Journal PoodLL: ¿Video?';
$string['miccanpause'] = 'Permitir pausa (solamente grabadora mp3)';
$string['micecho'] = 'Mic. Eco';
$string['micgain'] = 'Mic. Ganancia';
$string['micloopback'] = 'Mic. Lazo Retorno (loopback)';
$string['micrate'] = 'Mic. Velocidad';
$string['micsilencelevel'] = 'Mic.  Nivel Silencio';
$string['miniplayerwidth'] = 'Ancho Mini Reproductor';
$string['mobileandwebkit'] = 'Mobile + Webkit browsers (Safari,Chrome etc)';
$string['mobileonly'] = 'Solamente dispositivos Móviles';
$string['mobile_os_version_warning'] = '<p>Su versión de Sistema Operativo es muy antigua</p>
<p>Androide requiere versión 4 o superior.</p>
<p>iOS requiere versión 6 o superior.</p>';
$string['mp3opts'] = 'Opciones para conversión FFMPEG MP3';
$string['mp3opts_details'] = 'Déjelo vacío si desea permitir a FFMPEG tomar las decisiones. Cualquier cosa que ponga aquí aparecerá entre  [ffmpeg - myfile.xx ] y [ myfile.mp3 ]';
$string['mp4opts'] = 'Opciones para conversión FFMPEG MP4';
$string['mp4opts_details'] = 'Déjelo vacío si desea permitir a FFMPEG tomar las decisiones. Cualquier cosa que ponga aquí aparecerá entre  [ffmpeg - myfile.xx ] y [ myfile.mp4 ]';
$string['neverhtml5'] = 'Nunca usar HTML5';
$string['newpairheight'] = 'Altura Widget Pairwork';
$string['newpairwidth'] = 'Ancho Widget Pairwork';
$string['nopoodllresource'] = '--- Seleccionar Recurso PoodLL --';
$string['overwrite'] = '¿Sobre-escribir Mismo?';
$string['picqual'] = 'Calidad Webcam deseada 1-10';
$string['pluginname'] = 'Filtro PoodLL';
$string['poodll:candownloadmedia'] = 'Puede descargar medios';
$string['recui_audiogain'] = 'Ganancia de Audio';
$string['recui_audiorate'] = 'Tasa de Audio';
$string['recui_close'] = 'Cerrar';
$string['recui_continue'] = 'Continuar';
$string['recui_converting'] = 'convirtiendo';
$string['recui_echo'] = 'Supresión de Eco';
$string['recui_inaudibleerror'] = 'No podemos oirlo. Por favor, revise permisos del navegador y Flash.';
$string['recui_loopback'] = 'Bucle de retorno';
$string['recui_off'] = 'Apagado';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'Encendido';
$string['recui_pause'] = 'Pausa';
$string['recui_play'] = 'Reproducir';
$string['recui_record'] = 'Grabar';
$string['recui_silencelevel'] = 'Nivel de Silencio';
$string['recui_stop'] = 'Detener';
$string['recui_time'] = 'Tiempo:';
$string['recui_timeouterror'] = 'Se agotó la solicitud. Lástima.';
$string['recui_uploaderror'] = 'Ocurrió un error y su archivo NO ha sido subido.';
$string['recui_uploading'] = 'subiendo';
$string['screencapturedevice'] = 'Nombre de Dispositivo de Captura Screencast';
$string['serverhttpport'] = 'Puerto Servidor PoodLL (HTTP)';
$string['serverid'] = 'ID Servidor PoodLL';
$string['servername'] = 'Dirección Host PoodLL';
$string['serverport'] = 'Puerto Servidor PoodLL (RTMP)';
$string['settings'] = 'Configuraciones Filtro PoodLL';
$string['showdownloadicon'] = 'Mostrar ícono de descarga debajo de reproductores';
$string['showheight'] = 'Altura Reproductor Screencast';
$string['showwidth'] = 'Ancho Reproductor Screencast';
$string['smallgallheight'] = 'Vid. Galería (pequeña) Altura';
$string['smallgallwidth'] = 'Vid. Galería (pequeña) Ancho';
$string['studentcam'] = 'Nombre preferido de dispositivo para cámara';
$string['studentmic'] = 'Nombre preferido de dispositivo para micrófono';
$string['talkbackheight'] = 'Altura Reproductor Talkback';
$string['talkbackwidth'] = 'Ancho Reproductor Talkback';
$string['thumbnailsplash'] = 'Usar miniatura como Splash';
$string['thumbnailsplashdetails'] = 'Splash miniatura usa el primer cuadro de video como la imagen para splash. Use esto solamente cuando use el servidor tokyo.poodll.com.';
$string['transcode_heading'] = 'Configuraciones para Conversión de Archivo de Audio/Video';
$string['usecourseid'] = '¿Usar ID del curso?';
$string['videoheight'] = 'Altura Video reproductor';
$string['videosplash'] = 'Mostrar Splash Video Simple';
$string['videosplashdetails'] = 'Pantalla Splash se muestra solamente para Flowplayer';
$string['videotranscode'] = 'Auto Conv. a MP4';
$string['videotranscodedetails'] = 'Automáticamente convierte archivo de video grabado a formato MP4 antes de copiar de regreso a Moodle. Usar solamente cuando  use servidor tokyo.poodll.com.';
$string['videowidth'] = 'Ancho Video reproductor';
$string['wboard29problem_details'] = 'El pizarrón de Literally Canvas no funciona en Moodle 2.9 (o superiores) todavía. En Moodle 2.9, un y cuando fuera seleccionado, en su lugar se mostará DrawingBoard (Pizarrón_de_Dibujo).';
$string['wboardautosave'] = 'Autoguardar (milisegundos)';
$string['wboardautosave_details'] = 'Guarda el dibujo cuando el usuario ha pausado al dibujar después de X milisegundos. 0 = sin autoguardar';
$string['wboardheight'] = 'Altura Pizarrón';
$string['wboardwidth'] = 'Ancho Pizarrón';
$string['whiteboardsave'] = 'Guardar imagen';
$string['wordplayerfontsize'] = 'Tamaño Letra Reproductor de Palabra';
