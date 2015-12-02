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
 * Strings for component 'ejsapp', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   ejsapp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Disponible';
$string['active_help'] = 'Si es que este laboratorio remoto es operativo o no en este momento.';
$string['appletfile'] = 'Simulación Fácil con Java(Script)';
$string['appletfile_help'] = 'Seleccione el archivo .jar o .zip que encapsula la aplicación (EJS) de Simulación Fácil con Java(Script) . El sitio web oficial de EJS es http://fem.um.es/Ejs/';
$string['appletfile_required'] = 'Debe seleccionarse un archivo .jar o .zip';
$string['applet_size_conf'] = 'Medir tamaño de applet';
$string['applet_size_conf_help'] = 'Tres opciones:

1) "Preserve tamaño original" preservará el tamaño original de la applet EJS,
2) "Dejar que Moodle configure el tamaño" cambiará el tamaño del applet para que ocupe todo el espacio posible mientras se mantenga la relación de aspecto original,
3) "Dejar que el usuario configure el tamaño" dejará que el usuario configure el tamaño de la applet y seleccione si es que quiere o no preservar la relación de aspecto original.';
$string['appwording'] = 'Redacción';
$string['certificate_alias'] = 'Alias del certificado de confianza';
$string['certificate_alias_description'] = 'El alias dado al certificado de confianza';
$string['certificate_password'] = 'Contraseña del certificado de confianza';
$string['certificate_password_description'] = 'La contraseña requerida para usar el certificado de confianza';
$string['certificate_path'] = 'Ruta del archivo del certificado de confianza';
$string['certificate_path_description'] = 'La ruta en el servidor Moodle hacia el archivo del certificado de confianza a usarse al firmar las Applets Java';
$string['check_bookings'] = 'Revise sus reservaciones activas con el sistema de reservaciones';
$string['collab_access'] = 'Sin embargo, Usted todavía puede trabajar en modo colaborativo, si Usted ha sido invitado por un usuario con una reservación activa';
$string['css_rules'] = 'Cree sus propias reglas CSS para cambiar el aspecto visual de la aplicación JavaScript';
$string['css_style'] = 'Hoja_de_estilo CSS';
$string['custom_height'] = 'Alto de Applet (pixeles)';
$string['custom_height_required'] = 'ADVERTENCIA: No se configuró el alto del Applet. Usted debe proporcionar un valor diferente.';
$string['custom_width'] = 'Ancho del Applet (pixeles)';
$string['custom_width_required'] = 'ADVERTENCIA: No se configuró el ancho del Applet. Usted debe proporcionar un valor diferente.';
$string['dailyslots'] = 'Horas laborables del día';
$string['dailyslots_help'] = 'Cantidad máxima de horas diarias de trabajo con este lab que se le permitirá a cada estudiante.';
$string['default_certificate_set'] = 'Configuraciones del certificado de confianza (Solamente importan si Usted quiere firmar automáticamente los Applets subidos con EJSApp)';
$string['default_communication_set'] = 'Configuraciones para comunicaciones. (solamente importa si Usted también está utilizando Sarlab)';
$string['ejsapp'] = 'EJSApp';
$string['ejsapp:accessremotelabs'] = 'Acceder a todos los laboratorios remotos';
$string['ejsapp:addinstance'] = 'Añadir una nueva actividad EJSApp';
$string['ejsapp_error'] = 'La actividad EJSApp que Usted está tratando de accesar no existe.';
$string['ejsappfieldset'] = 'Conjunto de campo de ejemplo personalizado';
$string['ejsappname'] = 'Nombre del lab';
$string['ejsappname_help'] = 'Nombre que aparecerá en el curso para éste laboratorio';
$string['ejsapp:requestinformation'] = 'Solicitar información para plugins de terceros';
$string['ejsapp:view'] = 'Ver una actividad EJSApp';
$string['EJS_version'] = 'ADVERTENCIA: Este archivo de applet no fue generado con EJS 4.37 (build 121201) o superior. Recompile con una nueva versión de EJS.';
$string['event_book'] = 'Es necesario hacer una reservación';
$string['event_collab'] = 'Trabajando con la actividad EJSApp en modo colaborativo';
$string['event_inactive'] = 'Laboratorio está inactivo';
$string['event_wait'] = 'Esperando a que se desocupe el laboratorio';
$string['event_working'] = 'Trabajando con la actividad EJSApp';
$string['experiment_file'] = 'Archivo .exp con el experimento a correr cuando cargue este EJS lab';
$string['exp_fail_msg'] = 'Error al tratar de correr el experimento';
$string['expfile'] = 'Experimento de Simulación Fácil con Java';
$string['expfile_help'] = 'Seleccione el archivo .exp con el experimento que debería de correr la aplicación para Simulación Fácil con Java (EJS)';
$string['exp_load_msg'] = 'Un experimento para este lab será corrido';
$string['file_error'] = 'No puede abrirse el archivo desde el servidor';
$string['free_access'] = 'Acceso libre';
$string['free_access_help'] = 'Habilite el modo de acceso libre (no hay necesidad de hacer reservación) para este lab remoto';
$string['inactive_lab'] = 'El laboratorio remoto está inactivo en este momento.';
$string['ip_lab'] = 'Dirección IP';
$string['ip_lab_help'] = 'Dirección IP de sistema experimental. Si Usted está usando Sarlab, no necesita preocuparse por éste parámetro.';
$string['ip_lab_required'] = 'AVERTENCIA: Usted necesita proporcionar una dirección IP válida.';
$string['is_rem_lab'] = '¿Sistema experimental remoto ?';
$string['is_rem_lab_help'] = 'Si éste EJSApp se conecta con recursos remotos reales Y Usted quiere que el Sistema de Reservaciones EJSApp gestione sus accesos, seleccione "si". En caso contrario, seleccione "no".';
$string['jar_file'] = 'Archivo .jar o .zip que encapsula el laboratorio EJS';
$string['lab_in_use'] = 'El laboratorio actualmente está ocupado. Inténtelo después.';
$string['manifest_error'] = '> No puede encontrarse un manifesto abierto .2mf. Revise el archivo que subió.';
$string['max_value'] = 'Valor máximo {no}';
$string['max_value_help'] = 'Valor máximo pemitido para la variable.';
$string['min_value'] = 'Valor mínimo {no}';
$string['min_value_help'] = 'Valor mínimo pemitido para la variable.';
$string['modulename'] = 'ejsapp';
$string['modulename_help'] = 'El módulo de actividad EJSApp les permite a los maestros añadir applets credas con Simulaciones Fáciles con Java (EJS) dentro de sus cursos Moodle.

Las applets EJS serán incrustadas dentro de cursos Moodle. El maestro puede selecionar entre conservar el tamaño original del applet, o permitir que Moodle cambie el tamaño de acuerdo al espacio disponible. Si la applet EJS fue compilada usando la opción para "Añadir facilidades para idioma"  en EJS, la applet incrustada en Moodle con la actividad EJSApp configurará automáticamente su idioma al que tenga seleccionado el usuario en Moodle, de ser posible. Ésta actividad soporta configurar restricciones de acceso condicional.

Cuando se usa junto con el bloque para Navegación de Achivos  EJSApp, los estudiantes pueden guardar el estado del applet EJS, cuando está corriendo, al hacer click derecho sobre de él y seleccionar la opción apropiada en el menú. La información de éstos estados es guardada en un archivo .xml que es almacenado en el área de archivos privados (Navegador de Archivos EJSApp). Éstos estados pueden ser recuperados por una applet EJS de dos maneras diferentes: eligiendo los archivos .xml dentro del bloque del Navegador de Archivos EJSApp , o haciendo click derecho en la applet EJS y seleccionando la opción apropiada del menú.Si el applet EJS está preparado para hacerlo, también puede guardar archivos de texto o imágenes y almacenarlos en el área de archivos privados.

Cuando se usa junto con el bloque de Sesiones Colaborativas EJSApp, los usuarios de Moodle pueden trabajar con la misma applet EJS en forma sincrónica, lo que significa que la applet mostrará el mismo estado para todos los usuarios en la sesión colaborativa. Gracias a éste bloque, los usuarios pueden crear sesiones, invitar a otros usuarios y trabajar juntos con la misma actividad  EJSApp.';
$string['modulenameplural'] = 'ejsapps';
$string['moodle_resize'] = 'Que Moodle configure el tamaño';
$string['more_text'] = 'Texto opcional después del applet';
$string['no_booking'] = 'Usted no tiene una reservación activa para éste lab';
$string['noejsapps'] = 'No hay actividades EJSApp en este curso';
$string['personalize_vars'] = 'Personalizar variables del lab EJS';
$string['pluginadministration'] = 'Administración de EJSApp';
$string['pluginname'] = 'EJSApp';
$string['port'] = 'Puerto';
$string['port_help'] = 'El puerto usado para establecer la comunicación. Si Usted está usando Sarlab, no tiene que preocuparse acerca de éste parámetro.';
$string['port_required'] = 'ADVERTENCIA: Usted necesita proporcionar un puerto válido.';
$string['practiceintro'] = 'Identificador(es) de práctica en Sarlab';
$string['practiceintro_help'] = 'El identificador de la práctica(s)  configuradas en Sarlab que USted quiere usar para este sistema experimental.';
$string['practiceintro_required'] = 'ADVERTENCIA: Usted necesita especificar al menos una práctica';
$string['preserve_applet_size'] = 'Preservar tamaño original';
$string['preserve_aspect_ratio'] = 'Preservar proporción de aspecto';
$string['preserve_aspect_ratio_help'] = 'Si ésta opción es seleccionada, la relación de aspecto original del applet será respetada. En éste caso, el usuario podrá modificar el ancho del applet y el sistema ajustará automáticamente su altura. Si ésta opción se configura a "no", el usuario podrá configurar ambos, el ancho y la altura del applet.';
$string['rem_lab_conf'] = 'Configuración de Lab Remoto';
$string['sarlab'] = '¿Usando Sarlab ?';
$string['sarlab_collab'] = '¿Usar acceso colaborativo proporcionado por Sarlab ?';
$string['sarlab_collab_help'] = 'Si es que Usted quiere o no que Sarlab proporcione acceso colaborativo a éste laboratorio remoto';
$string['sarlab_enc_key'] = 'Clave de encriptación para comunicarse con Sarlab';
$string['sarlab_enc_key_description'] = 'Si Usted está usando Sarlab (un sistema que gestiona las conexiones a recursos de laboratorios remotros), Usted necesita proporcionar la clave de encriptación de 16 caracteres de largo para encriptar/descriptar las comunicaciones con el servidor Sarlab (esta clave debería ser la misma que la configurada en el servidor Sarlab). En caso contrario, este valor no debería de usarse, de forma que puede dejar puesto el valor por defecto.';
$string['sarlab_help'] = 'Sólamente seleccione Si, si Usted está usando Sarlab, un sistema que gestiona las conexiones a recursos de laboratorios remotos.';
$string['sarlab_instance'] = 'Servidor Sarlab para éste lab';
$string['sarlab_instance_help'] = 'El órden corresponde al usado para los valores en las variables sarlab_IP y sarlab_port  configuradas en la página de configuraciones de ejsapp';
$string['sarlab_IP'] = 'Dirección IP del servidor Sarlab';
$string['sarlab_IP_description'] = 'Si Usted está usando Sarlab (un sistema que gestiona conexiones a recursos de laboratorios remotos), Usted necesita proporcionar la dirección IP del servidor que corre el sistema Sarlab que desea usar. De otra forma, éste valor no se usará, por lo que puede dejarlo con el valor por defecto. Si tiene más de un servidor Sarlab (por ejemplo, uno en 127.0.0.1 y un segundo en 127.0.0.2), inserte las direcciones IP separadas por punto y coma (127.0.0.1;127.0.0.2).';
$string['sarlab_port'] = 'Puerto de comunicación Sarlab';
$string['sarlab_port_description'] = 'Si Usted está usando Sarlab (un sistema que gestiona conexiones a recursos de laboratorios remotos), Usted necesita proporcionar la un puerto válido para establecer las comunicaciones con ell servidor  Sarlab. De otra forma, éste valor no se usará, por lo que puede dejarlo con el valor por defecto. Si tiene más de un servidor Sarlab (por ejemplo, uno que use el puerto 443 y un segundo que use también el puerto 443), inserte los valores separados por punto y coma (443;443).';
$string['state_fail_msg'] = 'Error al tratar de cargar el estado';
$string['statefile'] = 'Estado de Simulación Fácil con Java';
$string['state_file'] = 'Archivo .xml con el estado a leer cuando cargue éste Lab EJS';
$string['statefile_help'] = 'Seleccione el archivo .xml con el estado que debería de cargarse la aplicación de Simulación Fácil con Java (EJS).';
$string['state_load_msg'] = 'Se va a actualizar el estado del lab';
$string['totalslots'] = 'Total de horas de trabajo';
$string['totalslots_help'] = 'Cantidad total máxima de horas que cada estudiante tendrá permitido para trabajar con éste lab.';
$string['use_personalized_vars'] = '¿Personalizar variables para cada usuario?';
$string['use_personalized_vars_help'] = 'Seleccione SI, si Usted sabe el nombre de algunas de las variables en el modelo EJS y quiere que adquieran diferentes valores para cada usuario que accesa esta aplicación.';
$string['user_resize'] = 'Dejar que el usuario configure el tamaño';
$string['var_name'] = 'Nombre {no}';
$string['var_name_help'] = 'Nombre de la variable en el modelo EJS.';
$string['vars_incorrect_type'] = 'ADVRTENCIA: El tipo y valor especificados para esta variable no se corresponden entre sí.';
$string['vars_required'] = 'ADVERTENCIA: Si Usted quiere usar variables personalizadas, debe especificar al menos una.';
$string['var_type'] = 'Tipo {no}';
$string['var_type_help'] = 'Tipo de la variable en el modelo EJS.';
$string['weeklyslots'] = 'Horas semanales de trabajo';
$string['weeklyslots_help'] = 'Cantidad semanal máxima de horas que cada estudiante tendrá permitido para trabajar con éste lab.';
