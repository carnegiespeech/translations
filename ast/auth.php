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
 * Strings for component 'auth', language 'ast', branch 'MOODLE_22_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Activar plugins d\'autentificación.';
$string['alternatelogin'] = 'Si escribe equí una URL, va usase como páxina d\'accesu a esti sitiu. La páxina tien de tener un formulariu con una propiedá d\'aición definida pa <strong>\'{$a}\'</strong> y ficheros de retornu <strong>nome d\'usuariu</strong> y <strong>seña</strong>.<br />Cuide de nun escribir una URL incorreuta porque pue bloquease a sigo mesmu fuera del sitiu.<br />Dexe esta configuración vacía si quier usar la páxina d\'accesu por defeutu.';
$string['alternateloginurl'] = 'URL d\'accesu alternativu';
$string['auth_changepasswordhelp'] = 'Ayuda pa Modificar la seña.';
$string['auth_changepasswordhelp_expl'] = 'Amosar l\'ayuda pa usuarios que perdieren les sos señes {$a}. Va apaecer, amás, o en vez de <strong>URL Modificar la seña</strong> o de modificar seña que Moodle tien internamente.';
$string['auth_changepasswordurl'] = 'URL pa Cambiar la seña.';
$string['auth_changepasswordurl_expl'] = 'escriba la URL a la que los usuarios que perdieren la so seña {$a} tienen de dir. Define <strong>Usar la páxina estándar Modificar seña</strong> como <strong>Non</strong>.';
$string['auth_changingemailaddress'] = 'Acaba facer un cambiu de direición de corréu ellectrónicu, de {$a->oldemail} to {$a->newemail}. Por motivos de seguridá, vamos manda-y un mensaxe de corréu a la so nueva direición pa confirmar que ye suya. La so direición actualizaráse en cuantes abra la URL que-y unviamos nel mensaxe.';
$string['auth_common_settings'] = 'Configuración común';
$string['auth_data_mapping'] = 'Mapeamento de datos';
$string['authenticationoptions'] = 'Opciones d\'autentificación';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Si ta activáu, va prever que los usuarios y alministradores de Moodle editen un campu direutamente. Use esta opción si ta usando estos datos nel sistema d\'autorización esternu. </p>';
$string['auth_fieldlocks'] = 'Bloquear campos d\'usuariu.';
$string['auth_fieldlocks_help'] = '<p>Pue bloquear campos de datos de los usuarios. Esto ye útil en sitios nos que los datos de los usuarios caltiénenlos manualmente los administradores, editando rexistros d\'usuarios o cargándolos usando la ferramienta Cargar usuarios. Si va bloquear campos que Moodle necesita, asegúrese d\'ufrir los datos de la que se creen les cuentes d\'usuariu o si non les cuentes van quedar inutilizables.</p><p>Piense una manera de bloquéu pa Desbloquear si queden vacíos pa nun tener esti problema.</p>';
$string['authinstructions'] = 'Equí pue escribir instruciones pa los sos usuarios, pa qu\'así sepan qué nome d\'usuariu y qué seña deberíen usar. El testu qu\'escriba equí, va apaecer na páxina d\'entrada. Si lu dexa vacíu nun se van publicar instruciones.';
$string['auth_invalidnewemailkey'] = 'Erru: si ta faciendo por confirmar un cambiu de corréu ellectrónicu, paez que s\'equivocó de la que copiaba la URL que-y unviamos per corréu. Por favor, copie la direición otra vez.';
$string['auth_multiplehosts'] = 'Puen especificase múltiples servidores O direiciones (por exem. host1.com;host2.com;host3.com) o (por exem. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_outofnewemailupdateattempts'] = 'Intentó más veces de les posibles actualizar el so corréu ellectrónicu. Los sos pidimientos queden anulaos.';
$string['auth_passwordisexpired'] = 'La so seña caducó. ¿Quier cambiala agora?';
$string['auth_passwordwillexpire'] = 'La so seña caduca en {$a} díes. ¿Quier cambiala agora?';
$string['auth_remove_delete'] = 'Esborráu completu';
$string['auth_remove_keep'] = 'Caltener interna';
$string['auth_remove_suspend'] = 'Suspender interna';
$string['auth_remove_user'] = 'Especifique qué facer con una cuenta d\'usuariu interna de la que se fae una sincronización masiva si l\'usuariu ta esborráu na fonte esterna. Namás los usuarios suspendíos se retomen automaticamente si reapaecen nuna fonte esterna.';
$string['auth_remove_user_key'] = 'Usuariu esternu esborráu.';
$string['auth_sync_script'] = 'Script de sincronización del Cron';
$string['auth_updatelocal'] = 'Actualización llocal';
$string['auth_updatelocal_expl'] = '<p><b>Actualización llocal:</b> Si lo tien activao, el campu va actualizase (dende autentificación esterna) toles veces que l\'usuariu entre o se faiga una sincronización d\'usuariu. Hai que bloquear los campos definíos con una actualización llocal.</p>';
$string['auth_updateremote'] = 'Actualización esterna';
$string['auth_updateremote_expl'] = '<p><b>Actualización esterna:</b> Si ta activada, la autentificación esterna va actualizase de la que s\'actualiza\'l rexistru d\'usuariu. Hai que desbloquear los campos pa permitir editar.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Nota </b> Pa actualizar datos esternos del LDAP ye necesario que defina binddn y bindpw nun usuariu-enllazáu con privilexos d\'edición pa tolos rexistros d\'usuariu. Agora mesmo, nun conserva atributos de valor múltiple y va esborrar los valores estra na actualización. </p>';
$string['auth_user_create'] = 'Activar creación d\'usuariu';
$string['auth_user_creation'] = 'Los usuarios nuevos (anónimos) puen crear cuentes d\'usuariu d\'autentificación esterna confirmaes por corréu ellectrónicu. Si activa esto, remembre que tamién tien de configurar les opciones nel módulu específicu pa la creación d\'usuarios.';
$string['auth_usernameexists'] = 'El nome d\'usuariu escoyíu yá esiste. Escueya otru.';
$string['auto_add_remote_users'] = 'Amestar automáticamente usuarios remotos';
$string['changepassword'] = 'URL Modificar seña.';
$string['changepasswordhelp'] = 'Equí pue especificar la llocalización na que los usuarios puen recuperar o modificar el so nome d\'usuariu/seña si lu/la escaecieren. Esto apaez pa los usuarios como un botón na páxina d\'entrada na so páxina d\'usuariu. Si lu dexa vacíu\'l botón nun va tar disponible.';
$string['chooseauthmethod'] = 'Escueya un métodu d\'autentificación.';
$string['createpasswordifneeded'] = 'Crear seña si ye necesario.';
$string['enterthenumbersyouhear'] = 'Escriba los númberos que ta oyendo.';
$string['enterthewordsabove'] = 'Escriba les pallabres d\'enriba.';
$string['errorminpassworddigits'] = 'La seña tien de tener, polo menos, {$a} díxitu(os).';
$string['errorminpasswordlength'] = 'La seña tien de tener, polo menos, {$a} carauteres de llargu.';
$string['errorminpasswordlower'] = 'La seña tien de tener, polo menos, {$a} lletra(es) minúscules';
$string['errorminpasswordnonalphanum'] = 'La seña tien de tener, polo menos, {$a} carauteres non alfanumbéricos.';
$string['errorminpasswordupper'] = 'La seña tien de tener, polo menos, {$a} lletra(es) mayúscula(es)';
$string['errorpasswordupdate'] = 'Erru de la que s\'actualizaba la seña, la seña ta ensin cambiar.';
$string['forcechangepassword'] = 'Obligar a modificar la seña.';
$string['forcechangepasswordfirst_help'] = 'Obligar a los usuarios a cambiar la seña na so primer entrada en Moodle.';
$string['forcechangepassword_help'] = 'Obligar a los usuarios a cambiar la seña nes sos próximes entrada en Moodle.';
$string['forgottenpassword'] = 'Si escribe una URL equí, va usase como la páxina qu\'esti sitiu va usar pa recuperar señes perdíes. Esto ta pensao pa sitios nos que les señes manéxense dende fuera de Moodle. Déxe esti espaciu vacíu pa usar el sistema por defeutu de recuperación de señes.';
$string['forgottenpasswordurl'] = 'URL pa señes escaecíes.';
$string['getanaudiocaptcha'] = 'Tener un CAPTCHA d\'audio.';
$string['getanimagecaptcha'] = 'Tener un CAPTCHA d\'imaxe.';
$string['getanothercaptcha'] = 'Tener un CAPTCHA d\'otru tipu.';
$string['guestloginbutton'] = 'Botón d\'entrada como convidáu';
$string['incorrectpleasetryagain'] = 'Incorreuto. Por favor, inténtelo otra vez.';
$string['infilefield'] = 'Campu necesariu nel ficheru';
$string['instructions'] = 'Instruciones';
$string['internal'] = 'Interna';
$string['locked'] = 'Bloqueáu.';
$string['md5'] = 'Codificación MD5';
$string['nopasswordchange'] = 'La seña nun se pue cambiar.';
$string['nopasswordchangeforced'] = 'Nun pue siguir ensin cambiar la so seña. Por embargu, nun hai una páxina pa cambiala. Por favor, contaute col so alministrador de Moodle.';
$string['ntlmsso_attempting'] = 'Intentando Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'Falló autoautentificación, use la páxina normal d\'entrada..';
$string['ntlmsso_isdisabled'] = 'NTLM SSO desactiváu';
$string['passwordhandling'] = 'Manexar campu de seña.';
$string['plaintext'] = 'Testu planu.';
$string['pluginnotenabled'] = 'El plugin d\'autentificación {$a} ta ensin activar.';
$string['pluginnotinstalled'] = 'El plugin d\'autentificación {$a} ta ensin activar.';
$string['recaptcha'] = 'reCAPTCHA';
$string['selfregistration'] = 'Rexistrase ún mesmu';
$string['selfregistration_help'] = 'Escueya qué plugin d\'autentificación va usar l\'usuariu de la que se rexistra él/ella mesmu/a. Esto pue dar que los spammers creen cuentes pa usar los sos foros, entraes de blogs, etc col so spam. Pa prevenir esti riesgu, l\'autorexistru debería tar desactiváu o llendáu na carauterística <em>permitir dominios d\'email</em>';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Pue esconder o amosar el botón d\'entrada pa convidaos na páxina d\'entrada.';
$string['stdchangepassword'] = 'Use la páxina estándar Modificar señal.';
$string['stdchangepassword_expl'] = 'Si\'l sistema d\'autentificación esterna permite modificar la seña en Moodle, cambie esto a Sí. Esta configuración anula la de "URL Modificar seña".';
$string['stdchangepassword_explldap'] = 'NOTA: recomiéndase qu\'use LDAP perriba d\'un túnel codificáu SSL (ldaps://) si\'l servidor LDAP ye remotu.';
$string['unlocked'] = 'Desbloqueáu';
$string['unlockedifempty'] = 'Desbloqueáu si ta vacíu.';
$string['update_never'] = 'Enxamás';
$string['update_oncreate'] = 'Creándose';
$string['update_onlogin'] = 'En toles entraes.';
$string['update_onupdate'] = 'N\'actualización';
