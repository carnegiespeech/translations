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
 * Strings for component 'chat', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoscroll'] = 'Auto Scroll';
$string['beep'] = 'Pitíu';
$string['chat:chat'] = 'Falar nel chat';
$string['chat:deletelog'] = 'Esborrar rexistros del chat';
$string['chatintro'] = 'Testu introductoriu';
$string['chatname'] = 'Nome d\'esta sala de chat.';
$string['chat:readlog'] = 'Lleer rexistros del chat';
$string['chatreport'] = 'Sesiones de chat';
$string['chat:talk'] = 'Falar nel chat.';
$string['chattime'] = 'Prósima hora de chat';
$string['configmethod'] = 'El métodu normal de chat implica que los clientes contauten regularmente col servidor pa consiguir actualizaciones. Nun necesita configuración y funciona en cualquier parte, pero pue producir sobrecarga nel servidor si hai munches persones nel chat. L\'usu d\'un daemon nel servidor necesita del acceso shell d\'Unix, pero\'l resultáu ye un ambiente de chat más rápidu y escalable.';
$string['confignormalupdatemode'] = 'Normalmente les actualizaciones de la sala de chat faense eficientemente usando\'l comandu <em>Keep-Alive</em> de HTTP 1.1, pero esto implica muncha carga nel servidor. El métodu más avanzáu ye usar la estratexa <em>Stream</em> pa unviar actualizaciones de los usuarios. Si usa <em>Stream</em> escala muncho meyor (apaecío al  métodu chat) pero pue ser que\'l so servidor nun lo soporte.';
$string['configoldping'] = '¿Cuánto tiempu, como máximo (en segundos), pue pasar enantes de que se deteute qu\'un usuariu nun ta coneutáu? Esti namás ye una llende superior, normalmente les desconexones detéutense perrápido. Los valores más baxos van sern más demandaos nel so servidor. Si ta usando\'l métodu normal,  <strong>enxamás</strong> defina esta carauterística como más baxa de 2 * chat_refresh_room.\'';
$string['configrefreshroom'] = '¿Con qué frecuencia deberíase actualizar la sala de chat? (en segundos). Si configura esti mínimu va facer que la sala de chat paeza más rápida, pero pue ser una carga mayor pal so servidor Web si hai muncha xente chateando. Si ta usando actualizaciones <em>Stream</em>, pue escoyer frecuencies de mayor actualización. Intente con 2.';
$string['configrefreshuserlist'] = '¿Con qué frecuencia tendía d\'actualizase\'l llistáu d\'usuarios? (en segundos)';
$string['configserverhost'] = 'El nome de servidor del computador nel que s\'abelluga\'l daemon do servidor';
$string['configserverip'] = 'Direición IP numbérica qu\'equival al nome del servidor d\'enriba';
$string['configservermax'] = 'Cantidá máxima d\'usuarios permitida';
$string['configserverport'] = 'Puertu qu\'usa\'l daemon nel servidor';
$string['currentchats'] = 'Sesiones de chat actives';
$string['currentusers'] = 'Usuarios actuales';
$string['deletesession'] = 'Esborrar esta sesión';
$string['deletesessionsure'] = '¿Seguro que quier esborrar esta sesión?';
$string['donotusechattime'] = 'Non espublizar hores de chat';
$string['enterchat'] = 'Calque equí pa entrar nel chat agora mesmo.';
$string['errornousers'] = '¡Nun s\'atopen usuarios!';
$string['explaingeneralconfig'] = 'Estes configuraciones tán <strong>siempre</strong> actives.';
$string['explainmethoddaemon'] = 'Estes configuraciones son importantes <strong>namás</strong> si escoyó un servidor Daemon de chat como método_chat';
$string['explainmethodnormal'] = 'Estes configuraciones son importantes <strong>namás</strong> si escoyó Métodu normal como método_chat';
$string['generalconfig'] = 'Configuración xeneral';
$string['idle'] = 'Ensin coneutar';
$string['messagebeepseveryone'] = '{$a} unvía pitíos a toos!';
$string['messagebeepsyou'] = '¡{$a} acaba d\'unvia-y un pitíu!';
$string['messageenter'] = '{$a} acaba d\'entrar nesti chat';
$string['messageexit'] = '{$a} marchó d\'esti chat';
$string['messages'] = 'Mensaxes';
$string['method'] = 'Métodu de chat';
$string['methoddaemon'] = 'Daemon del servidor de chat';
$string['methodnormal'] = 'Métodu normal';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nun esborrar mensaxes enxamás.';
$string['nextsession'] = 'Prósima sesión programada';
$string['noguests'] = 'El chat nun tá abiertu a los convidaos';
$string['nomessages'] = 'Entá nun hai mensaxes';
$string['normalkeepalive'] = 'Funcionando entá.';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Sesión non programada';
$string['notallowenter'] = 'Nun tien permisu pa entrar nesta sala de chat.';
$string['oldping'] = 'Tiempu pa desconeutar.';
$string['pastchats'] = 'Sesiones de chat vieyes.';
$string['pluginname'] = 'Chat';
$string['refreshroom'] = 'Refrescar sala de chat.';
$string['refreshuserlist'] = 'Refrescar llistáu d\'usuarios.';
$string['removemessages'] = 'Esborrar tolos mensaxes.';
$string['repeatdaily'] = 'Tolos díes a la mesma hora';
$string['repeatnone'] = 'Ensin repeticiones. Publique namás el tiempu especificáu.';
$string['repeattimes'] = 'Repetir sesiones';
$string['repeatweekly'] = 'Toles selmanes a la mesma hora';
$string['savemessages'] = 'Guardar sesiones vieyes.';
$string['seesession'] = 'Ver esta sesión';
$string['serverhost'] = 'Nome del servidor';
$string['serverip'] = 'Ip del servidor';
$string['servermax'] = 'Máximu d\'usuarios.';
$string['serverport'] = 'Puertu del servidor.';
$string['sessions'] = 'Sesiones de Chat';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Toos puen ver sesiones vieyes.';
$string['updatemethod'] = 'Métodu d\'actualización.';
$string['usingchat_help'] = '<p>Este módulo contén algunhas características para facelo máis agradable.</p>

<dl>
<dt><b>Emoticonas</b></dt>
<dd>Todas as emoticonas que se poden escribir en calquera lugar de Moodle tamén se
  poden colocar aquí. Por exemplo: :-) = <img src="pix/s/smiley.gif">  </dd>

<dt><b>Enlaces</b></dt>
<dd>Os enderezos de Internet convertiranse automaticamente en enlaces.</dd>

<dt><b>Emocións</b></dt>
<dd>Pode iniciar unha liña con "/me" ou ":" para amosar unha emoción. Por exemplo,
  se o seu nome é Ana e escribe ": ri&quot; todos verán "Ana ri&quot;</dd>

<dt><b>Beeps</b></dt>
<dd>Pode enviar un asubío a outra persoa facendo clic no enlace &quot;beep&quot;
  xunto ao nome.</dd>

<dt><b>HTML</b></dt>
<dd>Se sabe un pouco de linguaxe HTML pode empregalo no seu texto para insertar
  imaxes, executar sons ou formatear texto, entre outros.
</dd>
</dl>';
$string['viewreport'] = 'Ver les sesiones vieyes.';
