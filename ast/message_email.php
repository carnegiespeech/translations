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
 * Strings for component 'message_email', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowusermailcharset'] = 'Permitir que l\'usuariu pueda escoyer el conxuntu de carauteres';
$string['configallowusermailcharset'] = 'Si activa esto, tolos usuarios d\'esti sitiu Web van ser quien a especificar el so propiu códigu de carauteres pal corréu ellectrónicu.';
$string['configmailnewline'] = 'Carauteres que se va usar nos correos ellectrónicos pa ringlera nueva. Ye necesario CRLF según RFC 822bis. Dellos servidores de corréu faen automáticamente la conversión de LF a CRLF, otros faen una incorreuta conversión de CRLF a CRCRLF, incluso dalgunos rechacen los correos con LF (qmail, por exemplu). Cambie esti parámetru si tien problemes con correos devueltos o dobles ringleres.';
$string['confignoreplyaddress'] = 'Los correos ellectrónicos delles veces unvíense a nome d\'un usuariu (por exemplu, los mensaxes del foru). La direición de corréu ellectrónicu qu\'especifique equí va usase como la direición Dende nos casos nos que los receptores nun son quien a responder direutamente al usuariu (por exemplu cuando un usuariu escueye conservar la so direición privada).';
$string['configsitemailcharset'] = 'Tolos correos ellectrónicos xeneraos nel so sitiu van ser unviaos nel códigu de carauteres especificáu equí. De toles formes, cualquier usuariu individual pue axustalu si la configuración siguinte ta activada.';
$string['configsmtphosts'] = 'Dé\'l nome completu d\'una o más llocalización de servidores SMTP que Moodle va ser quien a usar pa unviar correos ellectrónicos (ex: correu.a.com o correu.a.com;correu.b.com). Si nun escribe nada, Moodle va usar el métodu por defeutu PHP pa unviar corréu.';
$string['configsmtpmaxbulk'] = 'Cantidá máxima de mensaxes pa una sesión SMTP. Agrupar mensaxes pue acelerar l\'unvíu de correos. Valires per debaxu de 2 obliga a la creación d\'una sesión nueva de SMTP por caún los correos.';
$string['configsmtpuser'] = 'Si tien especificáu un servidor SMTP más enriba, y esi servidor pide autentificación, escriba equí\'l nome d\'usuariu y la seña.';
$string['mailnewline'] = 'Carauter de ringlera nueva nel corréu';
$string['noreplyaddress'] = 'Direición No-reply (ensin retruque)';
$string['sitemailcharset'] = 'Definir caráuter';
$string['smtphosts'] = 'Servidores SMTP';
$string['smtpmaxbulk'] = 'Llende de la sesión SMTP';
$string['smtppass'] = 'Seña SMTP';
$string['smtpuser'] = 'Nome d\'usuariu SMTP';
