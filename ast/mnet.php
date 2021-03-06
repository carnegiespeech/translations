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
 * Strings for component 'mnet', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Al rodiu\'l so servidor';
$string['accesslevel'] = 'Nivel d\'accesu';
$string['addhost'] = 'Amestar servidor';
$string['addnewhost'] = 'Amestar un servidor nuevu.';
$string['addtoacl'] = 'Amestar al control d\'accesu';
$string['allow'] = 'Permitir';
$string['authfail_nosessionexists'] = 'Erru na autorización: La sesión mnet nun esiste.';
$string['authfail_sessiontimedout'] = 'Erru na autorización: La sesión mnet acabó.';
$string['authfail_usermismatch'] = 'Erru na autorización: L\'usuariu nun ataxa.';
$string['authmnetdisabled'] = 'El <em>plugin d\'autentificación</em> de la rede de Moodle ta <strong>desactiváu</strong>.';
$string['badcert'] = 'Esti certificáu nun val.';
$string['couldnotgetcert'] = 'Nun s\'atopó nengún certificáu en <br />{$a}. <br />Pue ser que\'l servidor nun funcione o tea mal configuráu.';
$string['couldnotmatchcert'] = 'Esto nun ataxa col certificáu actualmente espublizáu pol servidor web.';
$string['courses'] = 'cursos';
$string['courseson'] = 'cursos en';
$string['currentkey'] = 'Llave pública actual';
$string['current_transport'] = 'Tresporte actual';
$string['databaseerror'] = 'Nun se pudo escribir los detalles na base de datos.';
$string['deleteaserver'] = 'Esborrando un servidor';
$string['deletehost'] = 'Esborrar sitiu web';
$string['deletekeycheck'] = '¿Ta ciertu/a de que quier esborrar esta llave?';
$string['deleteoutoftime'] = 'El so ventanu de 60 segundos pa esborrar esta llave caducó. Entame otra vez.';
$string['deleteuserrecord'] = 'SSO ACL: esborrar rexistru de\'usuariu \'{$a}[0]\' de {$a}[1].';
$string['deletewrongkeyvalue'] = 'Ocorrió un erru. Si nun taba intentando esborrar la llave SSL del so servidor, pue ser que atacaren con males intenciones. Nun s\'executó nenguna aición.';
$string['deny'] = 'Denegar';
$string['description'] = 'Descripción';
$string['duplicate_usernames'] = 'Hubo un fallu de la que se iguaba un índiz nes columnes "mnethostid" y "username" de la so tabla d\'usuarios.<br />Esto pue pasar si tien <a href="{$a}" target="_blank">nomes d\'usuarios duplicaos na so tabla d\'usuarios</a>.<br />La so actualización debería completase correutamente. Calque nel enllaz d\'enriba y, dempués, apaecerá esti problema nun ventanu nuevu coles instrucciones pa iguar el problema. Pue intentalo en terminando l\'actualización.<br />';
$string['enabled_for_all'] = '(Esti serviciu activóse pa tolos servidores).';
$string['enterausername'] = 'Escriba un nome d\'usuariu o un llistáu de nomes separtados por comes.';
$string['error7020'] = 'Esti erru, normalmente, pasa si\'l sitiu remotu creó un rexistru del so sitiu web con un nome wwwroot incorreutu. Por exemplu http://eltositiu.com en vez de http://www.eltositiu.com. Sería lo meyor contautar col alministrador remotu del sitiu col nome incorreutu (según lo especificao nel config.php) y pidi-y que lo cambie.';
$string['error7022'] = 'El mensaxe qu\'unvió al sitiu remotu taba bien encriptáu, pero nun taba firmáu. Esto nun ye lo esperao. Lo más seguro ye que tenga un bug, un erru,  y debería informar d\'ello dando tola información posible de la so versión de Moodle y otros detalles.';
$string['error7023'] = 'El sitiu remotu fizo por desencriptar el so mensaxe con toles llaves que tenía guardaes pa uste nel so sitiu, pero falló. Tendría d\'iguar esti problema a mano refaciendo les llaves nel sitiu remotu. Esto pue ser que pase si nun tuvo en comunicación col sitiu remotu en varios meses.';
$string['error7024'] = 'Unvió un mensaxe ensin encriptar al sitiu remotu, pero\'l sitiu remotu nun acepta la comunicación ensin encriptar en tolo que tenga de ver col so sitiu. Esto nun ye lo esperao. Lo más seguro ye que tenga un bug, un erru, y debería informar d\'ello dando tola información posible de la so versión de Moodle y otros detalles.';
$string['error7026'] = 'La llave cola que firmó\'l so mensaxe nun ataxa cola llave que\'l servidor remotu tien guardada pal so servidor. El servidor fizo por ataxales y nun pudo. Por favor intente ataxar les llaves a mano y inténtelo otra vez.';
$string['error709'] = 'El sitiu remotu nun foi quien a consiguir una llave SSL d\'usté.';
$string['expired'] = 'Esta llave caduca\'l';
$string['expires'] = 'Válida hasta';
$string['expireyourkey'] = 'Esborrar esta chave';
$string['expireyourkeyexplain'] = 'Moodle cambia automáticamente les llaves cada 28 díes (por defeutu) pero tien la opción d\'adelantar <em>manualmente</em> la caducidá d\'esta llave en cualquier momentu. Esto ye útil si piensa que la llave ta en pelligru. La sostitución xenéase entós inmediatamente de manera automático.<br />Con ello y con too, l\'esobrrar la llave va imposibilitar la so comunicación con otros Moodles demientres nun contaute manualmente con caún los alministradores y-yos dea la llave nueva.';
$string['failedaclwrite'] = 'Hubo un erru de la que s\'escribía nel llistáu de control d\'entrada MNET al usuariu \'{$a}\'.';
$string['forbidden-function'] = 'Esa función ta ensin activar pa RPC.';
$string['forbidden-transport'] = 'El métodu de tresporte que ta intentando usar nun ta permitíu.';
$string['forcesavechanges'] = 'Forzar la grabación de les modificaciones';
$string['helpnetworksettings'] = 'Configurar comunicación inter-Moodle';
$string['hidelocal'] = 'Esconder usuarios llocales';
$string['hideremote'] = 'Esconder usuarios remotos';
$string['host'] = 'servidor';
$string['hostcoursenotfound'] = 'Nun s\'atoño servidor o cursu.';
$string['hostdeleted'] = 'Aceptar - Servidor esborráu';
$string['hostexists'] = 'Hai yá un rexistru pa esi servidor ya implementación de Moodle con ID {$a}.<br />Calque en <em>Siguir</em> pa editar esi rexistru.';
$string['hostname'] = 'Nome del servidor';
$string['hostnamehelp'] = 'El nome de dominiu dafechu calificáu del servidor remotu, como por exemplo: www.exemplu.com';
$string['hostnotconfiguredforsso'] = 'Esti hub de Moodle remotu ta ensin configurar pa entamos de sesión remotos.';
$string['hostsettings'] = 'Configuración del servidor';
$string['http_self_signed_help'] = 'Permitir conexones usando un certificáu DIY SSL auto-asignáu nel servidor remotu.';
$string['https_self_signed_help'] = 'Permitir conexones usando un DIY SSL auto-asignáu en PHP nel servidor remotu sobre http.';
$string['https_verified_help'] = 'Permitir conexones usando un certificáu SSL verificáu nel servidor remotu.';
$string['http_verified_help'] = 'Permitir conexones usando un certificáu SSL verificáu en PHP nel servidor remotu, sobre http (non https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Esti valor atribúise automáticamente y non se pue cambiar.';
$string['invalidaccessparam'] = 'Parámetru d\'entrada inválidu.';
$string['invalidactionparam'] = 'Parámetru d\'aición inválidu.';
$string['invalidhost'] = 'Ufierte un identificador de servidor válidu.';
$string['invalidpubkey'] = 'La llave nun ye una SSL válida.';
$string['invalidurl'] = 'Parámetru URL inválidu.';
$string['ipaddress'] = 'Direición IP';
$string['is_in_range'] = 'La direición IP  <code>{$a}</code> representa un servidor de confianza válidu.';
$string['ispublished'] = '{$a} Moodle activó esti serviciu pa usté.';
$string['issubscribed'] = '{$a} Moodle ta soscribiéndose a esti serviciu del so servidor.';
$string['keydeleted'] = 'La so llave esborróse y cambióse correutamente.';
$string['keymismatch'] = 'La llave pública que tien pa esti servidor ye distinta de la espublizada nesti momentu.';
$string['last_connect_time'] = 'Última conexón';
$string['last_connect_time_help'] = 'El tiempu que tuvo coneutáu a esti servidor.';
$string['last_transport_help'] = 'El tresporte qu\'usó pa la última conexón a esti servidor.';
$string['loginlinkmnetuser'] = '<br/>Si ye un usuariu remotu de la rede Moodle y pue <a href="{$a}">confirmar la so direición de corréu ellectrónicu equí</a>, pue ser redirixíu a la so páxina d\'entamu de sesión.<br />';
$string['logs'] = 'logs';
$string['mnet'] = 'Rede Moodle';
$string['mnet_concatenate_strings'] = 'Concatenar (hasta) 3 cadenes y devolver el resultáu.';
$string['mnetdisabled'] = 'La rede de Moodle ta <strong>desactivada</strong>.';
$string['mnetlog'] = 'Logs';
$string['mnetpeers'] = 'Compañeros';
$string['mnetservices'] = 'Servicios';
$string['mnet_session_prohibited'] = 'Los usuarios del so servidor domésticu nun tienen permisu nesti momentu pa dir a {$a}.';
$string['mnetsettings'] = 'Configuración de la rede Moodle';
$string['moodle_home_help'] = 'la ruta a la páxina principal de Moodle nel servidor remotu, como por exemplu: /moodle/.';
$string['net'] = 'Rede';
$string['networksettings'] = 'Configuración de la rede';
$string['never'] = 'Enxamás';
$string['noaclentries'] = 'Nun hai entraes nel llistáu de control d\'entrada SSO';
$string['nocurl'] = 'La biblioteca PHP Curl ta ensin instalar.';
$string['nolocaluser'] = 'Nun esiste nengún rexistru llocal pa usuariu remotu.';
$string['nomodifyacl'] = 'Nun tien permisu pa cambiar el llistáu de control d\'entrada MNET.';
$string['nonmatchingcert'] = 'L\'asuntu del certificáu <br /><em>{$a}[0]</em><br />nun ataxa col servidor del que procede:<br /><em>{$a}[1]</em>.';
$string['nopubkey'] = 'Hubo un problema nel procesu de recuperación de la llave pública.<br />Igual ye que\'l servidor nun acepta la rede de Moodle o la llave nun ye válida.';
$string['nosite'] = 'Nun se pudo atopar cursu a nivel del sitiu.';
$string['nosuchfile'] = 'El ficheru/función {$a} nun esiste.';
$string['nosuchfunction'] = 'Nun se pue llocalizar la función, o ye una función prohibida pa RPC.';
$string['nosuchmodule'] = 'O hai dalgún erru na direición de la función o nun se pudo atopala. Use\'l formatu mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Nun se pue consiguir la llave pública pa la verificación de la firma.';
$string['nosuchservice'] = 'El serviciu RPC nun ta funcionando nesti servidor.';
$string['nosuchtransport'] = 'Nun esiste tresporte con esi ID.';
$string['notBASE64'] = 'Esta cadena nun ta en formatu Base64 Encoded. Nun pue ser una llave válida.';
$string['not_in_range'] = 'La direición IP  <code>{$a}</code>  nun ye un servidor de confianza válidu.';
$string['notPEM'] = 'Esta llave nun ta en formatu PEM. Nun va funcionar.';
$string['notpermittedtojump'] = 'Nun tien permisu pa entamar una sesión remota dende esti hub de Moodle.';
$string['notpermittedtoland'] = 'Nun tien permisu pa entamar una sesión remota.';
$string['off'] = 'Desactiváu';
$string['on'] = 'Activáu';
$string['permittedtransports'] = 'Tresportes permitíos';
$string['phperror'] = 'Un erru internu de PHP impidió facer el so pidíu.';
$string['postrequired'] = 'La función esborrada necesita un pidíu POST.';
$string['promiscuous'] = 'Promiscuu';
$string['publickey'] = 'Llave pública';
$string['publickey_help'] = 'Esta llave pública consiguise automáticamente del servidor remotu.';
$string['publish'] = 'Espublizar';
$string['reallydeleteserver'] = '¿Ta ciertu/a de que quier esborrar el servidor?';
$string['receivedwarnings'] = 'Recibíerense los siguientes avisos.';
$string['recordnoexists'] = 'Esi rexistru nun esiste.';
$string['reenableserver'] = 'Non - Escueya esta opción p\'activar otra vez esti servidor.';
$string['registerallhosts'] = 'Rexistrar tolos servidores (<em>mou Hub</em>)';
$string['registerallhostsexplain'] = 'Los usuarios puen optar por rexistrar tolos servidores que intenten coneutase automáticamente con ellos.
Esto quier dicir que nel llistáu de servidores va apaecer el rexistru de cualquier sitio Moodle que se coneute con ellos y pida la so llave pública.<br />Embaxo dase la posibilidáe de configurar servicios pa \'Tolos servidores\'. Los servicios activaos ehí puen ufiertase a cualquier servidor Moodle escoyíu indiscriminadamente.';
$string['remotecourses'] = 'Cursos remotos';
$string['remotehost'] = 'Hub remotu';
$string['remotehosts'] = 'Servidores remotos';
$string['requiresopenssl'] = 'La rede necesita la estensión OpenSSL';
$string['restore'] = 'Restaurar';
$string['reviewhostdetails'] = 'Revisar detalles del servidor';
$string['reviewhostservices'] = 'Revisar servicios del servidor';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP descifráu';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-asignáu)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-asignáu)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (asignáu)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (asignáu)';
$string['selectaccesslevel'] = 'Escueya un nivel d\'entrada del llistáu.';
$string['selectahost'] = 'Escueya un servidor Moodle remotu.';
$string['serviceswepublish'] = 'Servicios qu\'espublizamos pa {$a}.';
$string['serviceswesubscribeto'] = 'Servicios en {$a} a los que nos soscribimos.';
$string['settings'] = 'Configuración';
$string['showlocal'] = 'Amosar usuarios llocales';
$string['showremote'] = 'Amosar usuarios remotos';
$string['ssl_acl_allow'] = 'SSO ACL: Permitir usuariu {$a}[0] de {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Denegar usuariu {$a}[0] de {$a}[1]';
$string['ssoaccesscontrol'] = 'Control d\'entrada SSO';
$string['ssoacldescr'] = 'Use esta páxina pa dar de pasu/denegar entrada a dalgunos usuarios de servidores remotos de la rede Moodle. Esto val pa daqué si s\'ufiertan servicios SSO a usuarios remotos. Pa controlar la capacidá de los sos usuarios <em>llocales</em> pa dir a otros servidores de la rede Moodle, use\'l sistema de papeles pa da-yos la capacidá <em>mnetcanroam</em>.';
$string['ssoaclneeds'] = 'Pa qu\'esta opción funcione, la rede de Moodle tien de tar activa, y tamién el plugin d\'autentificación, colos usuarios amestaos automáticamente tamién activos.';
$string['strict'] = 'Estrictu';
$string['subscribe'] = 'Soscribise';
$string['system'] = 'Sistema';
$string['testtrustedhosts'] = 'Pruebe una direición';
$string['testtrustedhostsexplain'] = 'Escriba una direición IP pa ver si ye un servidor de confianza.';
$string['transport_help'] = 'Estes opciones son recíproques, lo que quier dicir que namás pue forzar un servidor remotu a usar una certificación SSL firmada si\'l so servidor tamién tien una.';
$string['trustedhosts'] = 'servidores XML-RPC';
$string['trustedhostsexplain'] = '<p>El mecanismu de los servidores de confianza permite que determinaes máquines executen llamaes vía XML-RPC a cualquier parte de la API de Moodle. Esto ta disponible pa que los scripts controlen el comportamientu de Moodle. Activalu pue ser una opción peligrosa. Si tien dúldes, déxelo desactivao.</p>
<p>Esto <strong>nun</strong> ye necesario pa la rede de Moodle.</p>
<p>Pa activalo, escriba un llistáu de direiciones IP o redes, una en cada ringlera.
Dellos exemplos:</p>El so servidor llocal:<br />127.0.0.1<br />El so servidor llocal (con bloquéu de rede):<br />127.0.0.1/32<br />Namás el servidor cola direición IP 192.168.0.7:<br />192.168.0.7/32<br />Cualquier servidor con direición IP ente 192.168.0.1 y 192.168.0.255:<br />192.168.0.0/24<br />Cualquier servidor:<br />192.168.0.0/0<br />Obviamente l\'últimu exemplu <strong>nun</strong> ye una configuración recomendada.';
$string['unknownerror'] = 'Ocorrió un erru desconocíu de la que se negociaba.';
$string['usercannotchangepassword'] = 'Nun pue cambiar equí la so seña, usté ye un usuariu remotu.';
$string['userchangepasswordlink'] = '<br /> Pue ser que pueda cambiar la so seña nel so proveedor de servicios <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usersareonline'] = 'Avisu: {$a} usuarios d\'esti servidor tienen nesti momentu la sesión entamada nel so sitiu.';
$string['validated_by'] = 'Ta validáu/ada pola rede:  <code>{$a}</code>';
$string['verifysignature-error'] = 'Falló la verificación de la firma. Hubo un erru.';
$string['verifysignature-invalid'] = 'Falló la verificación de la firma. Paez ser qu\'estos datos nun tán firmaos por usté.';
$string['version'] = 'versión';
$string['warning'] = 'Avisu';
$string['wrong-ip'] = 'La so direición IP nun ataxa cola direición qu\'hai nel nuestru rexistru.';
$string['xmlrpc-missing'] = 'Tien de tener XML-RPC instaláu na so construción PHP pa poder usar esta carauterística';
$string['yourhost'] = 'El so servidor';
$string['yourpeers'] = 'Los sos compañeros';
