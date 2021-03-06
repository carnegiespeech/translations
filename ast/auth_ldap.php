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
 * Strings for component 'auth_ldap', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_auth_user_create_key'] = 'Crear usuarios externamente';
$string['auth_ldap_bind_dn'] = 'Se desexa utilizar ligar-usuario para buscar usuarios, especifíqueo aquí. Algo como cn=ldapuser,ou=public,o=org';
$string['auth_ldap_bind_dn_key'] = 'Nome distinguido';
$string['auth_ldap_bind_pw'] = 'Contrasinal para ligar-usuario.';
$string['auth_ldap_bind_pw_key'] = 'Contrasinal';
$string['auth_ldap_bind_settings'] = 'Ligar configuración';
$string['auth_ldap_changepasswordurl_key'] = 'URL Modificar contrasinal';
$string['auth_ldap_contexts'] = 'Lista de contextos onde os usuarios son localizados. Separe os diferentes contextos con ;. Por exemplo: ou=users,o=org; ou=others,o=org';
$string['auth_ldap_contexts_key'] = 'Contextos';
$string['auth_ldap_create_context'] = 'Se permite a creación de usuarios con confirmación de correo electrónico, especifique o contexto onde son creados os usuarios. Este contexto podería ser diferente para outros usuarios por medidas de seguranza. Non precisa engadir este contexto á variable ldap_contexto, Moodle buscará aos usuarios desde este contexto automaticamente.<br /><b>Nota!</b> Ten que modificar o método crear_usuario() no ficheiro auth/ldap/auth.php para facer que a creación de usuario funcione';
$string['auth_ldap_create_context_key'] = 'Contexto para novos usuarios';
$string['auth_ldap_creators'] = 'Lista de grupos en que os membros teñen permiso para crear novos cursos. Separar grupos múltiples con ;. Xeralmente algo como cn=teachers,ou=staff,o=myorg';
$string['auth_ldap_creators_key'] = 'Creadores';
$string['auth_ldapdescription'] = 'Este método fornece autenticación contra un servidor LDAP externo. Se o nome de usuario e o contrasinal dados son válidos, Moodle crea unha nova entrada de usuario nesta base de datos. Este módulo pode ler atributos de usuario desde LDAP e encher os campos desexados en Moodle. Para os futuros accesos só serán verificados o nome do usuario e o contrasinal.';
$string['auth_ldap_expiration_desc'] = 'Seleccione Non para desactivar a verificación do contrasinal caducado ou LDAP para ler directamente o tempo de caducidade de LDAP';
$string['auth_ldap_expiration_key'] = 'Caducidade';
$string['auth_ldap_expiration_warning_desc'] = 'Número de días antes de que apareza o aviso de caducidade do contrasinal.';
$string['auth_ldap_expiration_warning_key'] = 'Aviso de caducidade';
$string['auth_ldap_expireattr_desc'] = 'Opcional: anule o atributo ldap que almacena o tempo de caducidade do contrasinal';
$string['auth_ldap_expireattr_key'] = 'Atributo de caducidade';
$string['auth_ldapextrafields'] = 'Estes campos son opcionais. Pode escoller encher algúns campos de usuario en Moodle con información dos <b>campos LDAP</b> que especifique aquí. <p>Se deixa estes campos en branco, non se transferirá nada desde LDAP e en vez diso será utilizado Moodle por defecto.</p><p>En calquera caso, o usuario poderá editar todos estes campos despois de entrar.</p>';
$string['auth_ldap_graceattr_desc'] = 'Opcional: Anule o atributo acceso de graza';
$string['auth_ldap_gracelogin_key'] = 'Atributo de acceso libre';
$string['auth_ldap_gracelogins_desc'] = 'Active o soporte acceso libre ao LDAP. Despois de que o contrasinal caduque, o usuario poderá acceder até que o número de accesos libres sexa 0. Ao activar esta configuración, mostrarase unha mensaxe de acceso libre se o contrasinal está caducado.';
$string['auth_ldap_gracelogins_key'] = 'Accesos libres';
$string['auth_ldap_host_url'] = 'Especifique o servidor LDAP en forma de URL como ldap://ldap.myorg.com/ ou ldaps://ldap.myorg.com/ Separe servidores múltiples con ; para obter soporte failover.';
$string['auth_ldap_host_url_key'] = 'URL do servidor';
$string['auth_ldap_ldap_encoding'] = 'Especifique a codificación usada polo servidor LDAP. Probablemente utf-8, MS AD v2 utiliza codificación de plataforma por defecto como cp1252, cp1250, etc.';
$string['auth_ldap_ldap_encoding_key'] = 'Codificación LDAP';
$string['auth_ldap_login_settings'] = 'Configuración de acceso';
$string['auth_ldap_memberattribute'] = 'Opcional: Anule o atributo membro do usuario, cando os usuarios pertenzan a un grupo. Xeralmente membro';
$string['auth_ldap_memberattribute_isdn'] = 'Opcional: Anula o manexo de valores de atributos dos membros, é 0 ou 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atributos de membro utilizan dn';
$string['auth_ldap_memberattribute_key'] = 'Atributo de membro';
$string['auth_ldap_noconnect'] = 'O módulo LDAP non pode conectarse ao servidor: {$a}';
$string['auth_ldap_noconnect_all'] = 'O módulo LDAP non pode conectarse a calquera servidor: {$a}';
$string['auth_ldap_noextension'] = 'Aviso: O módulo LDAP PHP LDAP non aparece. Asegúrese de que está instalado e activado.';
$string['auth_ldapnotinstalled'] = 'Non pode utilizar a autenticación LDAP. O módulo LDAP PHP non está instalado.';
$string['auth_ldap_objectclass'] = 'Opcional: Anule a Clase de obxecto utilizada para nomear/buscar usuarios no ldap_user_type. Xeralmente non precisa modificar isto.';
$string['auth_ldap_objectclass_key'] = 'Clase de obxecto';
$string['auth_ldap_opt_deref'] = 'Determine como se manexan os alcumes durante a busca. Seleccione un dos seguintes valores: Non (LDAP_DEREF_NEVER) ou Si (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Enlazar alcumes';
$string['auth_ldap_passtype'] = 'Especifique o formato dos contrasinais novos ou cambiados no servidor LDAP';
$string['auth_ldap_passtype_key'] = 'Formato de contrasinal';
$string['auth_ldap_passwdexpire_settings'] = 'Configuración LDAP do contrasinal caducado.';
$string['auth_ldap_preventpassindb'] = 'Seleccione Si para previr que os contrasinais sexan almacenados na base de datos de Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Ocultar contrasinais';
$string['auth_ldap_search_sub'] = 'Buscar usuarios dos subcontextos.';
$string['auth_ldap_search_sub_key'] = 'Busca de subcontextos';
$string['auth_ldap_server_settings'] = 'Configuración do servidor LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() non soporta o tipo de usuario seleccionado:"{$a}" (aínda)';
$string['auth_ldap_update_userinfo'] = 'Actualice a información do usuario (nome, apelido, enderezo..) de LDAP para Moodle.  Especifique a configuración de mapeado de datos como precise.';
$string['auth_ldap_user_attribute'] = 'Opcional: Anule o atributo utilizado para nomear/buscar usuarios. Xeralmente \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atributo de usuario';
$string['auth_ldap_user_settings'] = 'Configuración de busca de usuarios';
$string['auth_ldap_user_type'] = 'Seleccione como son almacenados os usuarios en LDAP. Esta configuración tamén especifica como funcionarán a caducidade do acceso, os accesos libres e a creación de usuarios.';
$string['auth_ldap_user_type_key'] = 'Tipo de usuario';
$string['auth_ldap_usertypeundefined'] = 'config.user_type non está definido ou a función ldap_expirationtime2unix non admite o tipo seleccionado!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type non está definido ou a función ldap_unixi2expirationtime non admite o tipo seleccionado!';
$string['auth_ldap_version'] = 'Versión do protocolo LDAP que o seu servidor está a utilizar.';
$string['auth_ldap_version_key'] = 'Versión';
$string['noemail'] = 'Tentouse enviarlle un correo electrónico mais fallou!';
$string['pluginname'] = 'Utilice un servidor LDAP';
