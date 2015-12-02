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
 * Strings for component 'message_email', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowusermailcharset'] = 'Permitir al usuario elegir el juego de caracteres';
$string['configallowusermailcharset'] = 'Si habilita esta opción, todos los usuarios del sitio podrán especificar su propio juego de caracteres para escribir emails.';
$string['configmailnewline'] = 'Caracteres de línea nueva usados en los mensajes de correo electrónico. CRLF es necesario de acuerdo con RFC 822bis; algunos servidores realizan una conversión automática desde LF a CRLF, en tanto que otros realizan una conversión incorrecta de CRLF a CRCRLF y; finalmente, otros rechazarán los correos con LF vacío (qmail, por ejemplo). Intente modificar este ajuste si tiene problemas con correos sin entregar o con nuevas líneas dobles.';
$string['confignoreplyaddress'] = 'A veces los emails son enviados en nombre de algun usuario (por ejemplo, mensajes a un foro). La dirección email especificada aquí se usará como dirección "De" en aquellos casos en que los receptores no deban contestarle directamente al usuario (por ejemplo, cuando un usuario elige mantener oculta su dirección).';
$string['configsitemailcharset'] = 'Todos los emails generados por su sitio se enviarán en el juego de caracteres que aquí se especifique. En cualquier caso, cada usuario individual podrá ajustar esta opción si está habilitado el siguiente ajuste.';
$string['configsmtphosts'] = 'Escriba el nombre completo de uno o más servidores SMTP locales que Moodle usará para enviar correo (por ejemplo, \'mail.a.com\' o \'mail.a.com;mail.b.com\'). Para especificar un puerto no convencional (diferente al puerto 25), puede usar la sintaxis [server]:[port]  (por ejemplo, \'mail.a.com:587\'. Si lo deja en blanco, Moodle usará el método PHP por defecto para enviar correo.';
$string['configsmtpmaxbulk'] = 'Número máximo de mensajes enviados por sesión SMTP. La agrupación de mensajes puede agilizar el envío de emails. Valores inferiores a 2 fuerzan la creación de una nueva sesión SMTP para cada email.';
$string['configsmtpuser'] = 'Si antes ha especificado un servidor SMTP, y el servidor requiere autenticación, escriba aquí el nombre_de_usuario y la contraseña.';
$string['email'] = 'Enviar notificaciones email a';
$string['mailnewline'] = 'Caracteres de línea nueva en correo electrónico';
$string['noreplyaddress'] = 'Dirección de \'sin-respuesta\' (no-reply)';
$string['pluginname'] = 'Email';
$string['sitemailcharset'] = 'Conjunto de caracteres';
$string['smtphosts'] = 'hosts SMTP';
$string['smtpmaxbulk'] = 'Límite de sesión SMTP';
$string['smtppass'] = 'Contraseña SMTP';
$string['smtpuser'] = 'Nombre_de_usuario SMTP';
