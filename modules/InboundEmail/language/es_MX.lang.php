<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(


	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Usuario o contraseña incorrecta',
	'ERR_BODY_TOO_LONG'		=> '\rEl texto del cuerpo es demasiado largo para capturar el e-Mail COMPLETO. Truncado',
	'ERR_INI_ZLIB'			=> 'No pudo deshabilitarse la compresión Zlib temporalmente.  Puede que "Comprobar configuración" falle',
	'ERR_MAILBOX_FAIL'		=> 'No se pudo recuperar ninguna cuenta de e-Mail',
	'ERR_NO_IMAP'			=> 'No se han encontrado las librerías de IMAP.  Por favor, resuelva esto antes de continuar con la configuración de e-Mail entrante',
	'ERR_NO_OPTS_SAVED'		=> 'No se han guardado valores óptimos con su cuenta de e-Mail entrante.  Por favor, revise la configuración',
	'ERR_TEST_MAILBOX'		=> 'Por favor, compruebe su configuración e inténtelo de nuevo',

	'LBL_APPLY_OPTIMUMS'	=> 'Aplicar valores óptimos',
	'LBL_ASSIGN_TO_USER'	=> 'Asignar a usuario',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opciones de respuesta automática',
	'LBL_AUTOREPLY'			=> 'Plantilla de respuesta automática',
	'LBL_AUTOREPLY_HELP'	=> 'Seleccione una respuesta automática para notificar a los remitentes de e-Mail que su respuesta ha sido recibida',
	'LBL_BASIC'				=> 'Información de la cuenta de e-Mail',
	'LBL_CASE_MACRO'		=> 'Macro de casos',
	'LBL_CASE_MACRO_DESC'	=> 'Establece la macro que será analizada y utilizada para vincular el e-Mail importado a un caso',
	'LBL_CASE_MACRO_DESC2'	=> 'Establezca ésto a cualquier valor que desee, pero preserve el <b>"%1"</b>',
	'LBL_CERT_DESC'			=> 'Forzar la validación del certificado de seguridad del servidor - no utilizar en certificados no firmados por una autoridad raíz reconocida',
	'LBL_CERT'				=> 'Validar certificado',
	'LBL_CLOSE_POPUP'		=> 'Cerrar ventana',
	'LBL_CREATE_NEW_GROUP'	=> '--Crear grupo al guardar--',
	'LBL_CREATE_TEMPLATE'	=> 'Crear',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Suscribirse a carpetas',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Predeterminado:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Predeterminado:',
	'LBL_DELETE_SEEN'		=> 'Eliminar e-Mails leídos tras importación',
	'LBL_EDIT_TEMPLATE'		=> 'Editar',
	'LBL_EMAIL_OPTIONS'		=> 'Opciones de gestión de e-Mail',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opciones de gestión de rebotes',
	'LBL_FILTER_DOMAIN_DESC'=> 'Especificar un dominio al cual no se enviarán respuestas automáticas',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Seleccione esta opción para que se creen automáticamente registros de correo en SuiteCRM para todos los correos entrantes.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Para usar la opción de nuevo caso, debe seleccionar una carpeta de grupo',
	'LBL_FILTER_DOMAIN'		=> 'No enviar respuestas automáticas a este dominio',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Buscando variables óptimas de conexión',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Buscar configuración óptima',
	'LBL_FIND_SSL_WARN'		=> '<br>La comprobación de SSL puede durar bastante tiempo.  Por favor, tenga paciencia.<br>',
	'LBL_FORCE_DESC'		=> 'Algunos servidores IMAP/POP3 requieren opciones especiales. Marque para forzar una opción negativa al conectar (ej., /notls)',
	'LBL_FORCE'				=> 'Forzar negativo',
	'LBL_FOUND_MAILBOXES'	=> 'Se han encontrado las siguientes carpetas utilizables.<br>Haga clic en una para seleccionarla:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Opciones óptimas encontradas.	Presiones el siguiente botón para aplicarlas a su cuenta de e-Mail',
	'LBL_FROM_ADDR'			=> 'Dirección del remitente',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "El e-Mail proporcionado aquí no aparecerá en la opción 'De' de la sección de dirección del e-Mail enviado de acuerdo a las restricciones impuestas por proveedor de servicio de e-Mail. En estas circunstancias, el e-Mail definido en el servidor de e-Mail de salida será usado", // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
	'LBL_FROM_NAME_ADDR'	=> 'Nombre/e-Mail del remitente',
	'LBL_FROM_NAME'			=> 'Nombre del remitente',
	'LBL_GROUP_QUEUE'		=> 'Asignar a grupo',
    'LBL_HOME'              => 'Inicio',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Utilización de la cuenta de e-Mail',
	'LBL_LIST_NAME'			=> 'Nombre:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Tipo',
	'LBL_LIST_SERVER_URL'	=> 'Servidor de e-Mail',
	'LBL_LIST_STATUS'		=> 'Estado',
	'LBL_LOGIN'				=> 'Nombre de usuario',
	'LBL_MAILBOX_DEFAULT'	=> 'BANDEJA DE ENTRADA',
	'LBL_MAILBOX_SSL_DESC'	=> 'Usar SSL en la conexión. Si no funciona, compruebe que su instalación de PHP incluye "--with-imap-ssl" en la configuración',
	'LBL_MAILBOX_SSL'		=> 'Usar SSL',
	'LBL_MAILBOX_TYPE'		=> 'Acciones posibles',
	'LBL_DISTRIBUTION_METHOD' => 'Método de distribución',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Nueva plantilla de respuesta automática para caso',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleccione una respuesta automática para notificar a los remitentes de e-Mail que se ha creado un nuevo caso. El e-Mail contiene el número de casos en la línea de asunto acorde con la configuración de la macro de caso.  Esta respuesta sólo se enviará cuando se reciba el primer e-Mail de un remitente',
	'LBL_MAILBOX'			=> 'Carpetas en seguimiento',
	'LBL_TRASH_FOLDER'		=> 'Papelera',
	'LBL_GET_TRASH_FOLDER'	=> 'Obtener papelera',
	'LBL_SENT_FOLDER'		=> 'Elementos enviados',
	'LBL_GET_SENT_FOLDER'	=> 'Obtener elementos eliminados',
	'LBL_SELECT'				=> 'Seleccionar',
	'LBL_MARK_READ_DESC'	=> 'Importar y marcar mensajes como leídos en el servidor de e-Mail; no borrar',
	'LBL_MARK_READ_NO'		=> 'e-Mail marcado como borrado tras importación',
	'LBL_MARK_READ_YES'		=> 'e-Mail dejado en el servidor tras importación',
	'LBL_MARK_READ'			=> 'Dejar mensajes en el servidor',
	'LBL_MAX_AUTO_REPLIES'	=> 'Número de respuestas automáticas',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Establece el máximo número de respuestas automáticas a enviar a una única dirección de e-Mail durante un período de 24 horas',
	'LBL_PERSONAL_MODULE_NAME' => 'Cuenta de e-Mail personal',
	'LBL_CREATE_CASE'      => 'Crear caso desde e-Mail',
	'LBL_CREATE_CASE_HELP'  => 'Select to automatically create case records in SuiteCRM from incoming emails.',
	'LBL_MODULE_NAME'		=> 'Cuenta de e-Mail de grupo',
	'LBL_BOUNCE_MODULE_NAME' => 'Bandeja de gestión de e-Mail rebotado',
	'LBL_MODULE_TITLE'		=> 'e-Mail entrante',
	'LBL_NAME'				=> 'Nombre',
    'LBL_NONE'              => 'Ninguno',
	'LBL_NO_OPTIMUMS'		=> 'No se han encontrado valores óptimos.  Por favor, compruebe su configuración e inténtelo de nuevo',
	'LBL_ONLY_SINCE_DESC'	=> 'Al usar POP3, PHP no se pueden realizar filtros en mesajes Nuevos/No leídos.  Esta opción permite que se soliciten mensajes desde la última vez que la bandeja fue consultada.  Esto mejorará significativamente el rendimiento si su servidor de e-Mail no soporta IMAP',
	'LBL_ONLY_SINCE_NO'		=> 'No. Comprobar contra todos los e-Mails en el servidor de e-Mail',
	'LBL_ONLY_SINCE_YES'	=> 'Sí.',
	'LBL_ONLY_SINCE'		=> 'Importar sólo desde la última comprobación:',
	'LBL_OUTBOUND_SERVER'	=> 'Servidor de e-Mail saliente',
	'LBL_PASSWORD_CHECK'	=> 'Comprobar contraseña',
	'LBL_PASSWORD'			=> 'Contraseña',
	'LBL_POP3_SUCCESS'		=> 'Su prueba de conexión de POP3 tuvo éxito',
	'LBL_POPUP_FAILURE'		=> 'Prueba de conexión fallida. El error es el siguiente:',
	'LBL_POPUP_SUCCESS'		=> 'Prueba de conexión exitosa.  Su configuración funciona',
	'LBL_POPUP_TITLE'		=> 'Comprobar configuración',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Obteniendo lista de carpetas',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Seleccionar carpetas suscritas',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Seleccionar papelera',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Seleccionar carpeta de elementos enviados',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Las siguientes carpetas %s o no existen o han sido eliminadas del servidor',
	'LBL_PORT'				=> 'Puerto del servidor de e-Mail',
	'LBL_QUEUE'				=> 'Cola de la cuenta de e-Mail',
	'LBL_REPLY_NAME_ADDR'	=> 'Responder a nombre/e-Mail',
	'LBL_REPLY_TO_NAME'		=> 'Nombre de "Responder a"',
	'LBL_REPLY_TO_ADDR'		=> 'Dirección de "Responder a"',
	'LBL_SAME_AS_ABOVE'		=> 'Usando el mismo Nombre/Dirección',
	'LBL_SAVE_RAW'			=> 'Guardar código fuente original',
	'LBL_SAVE_RAW_DESC_1'	=> 'Seleccione "Sí" si quiere preservar el código fuente original para cada e-Mail importado',
	'LBL_SAVE_RAW_DESC_2'	=> 'Los archivos adjuntos grandes pueden producir error en bases de datos configuradas de forma restringida o incorrecta',
	'LBL_SERVER_OPTIONS'	=> 'Configuración avanzada',
	'LBL_SERVER_TYPE'		=> 'Protocolo del servidor de e-Mail',
	'LBL_SERVER_URL'		=> 'Dirección del servidor de e-Mail',
	'LBL_SSL_DESC'			=> 'Si su servidor de e-Mail soporta conexiones seguras de sockets (SSL), habilitar esta opción forzará conexiones SSL al importar el e-Mail',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'El equipo seleccionado tiene acceso a la cuenta de e-Mail',
	'LBL_SSL'				=> 'Usar SSL',
	'LBL_STATUS'			=> 'Estado',
	'LBL_SYSTEM_DEFAULT'	=> 'Predeterminado en el sistema',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Probar',
	'LBL_TEST_SETTINGS'		=> 'Probar configuración',
	'LBL_TEST_SUCCESSFUL'	=> 'Conexión completada con éxito',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Un momento por favor...',
	'LBL_TLS_DESC'			=> 'Usar Transport Layer Security (TLS) para conectarse al servidor de e-Mail - sólo use ésto si su servidor de e-Mail soporta este protocolo',
	'LBL_TLS'				=> 'Usar TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'e-Mail entrante deshabilitado',
	'LBL_WARN_IMAP'			=> 'Avisos:',
	'LBL_WARN_NO_IMAP'		=> 'El e-Mail entrante <b>no puede</b> funcionar sin las librerías de C del cliente de IMAP habilitadas/compiladas en el módulo de PHP.  Por favor, contacte con su administrador para resolver este problema',

	'LNK_CREATE_GROUP'		=> 'Crear nuevo grupo',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nueva cuenta de e-Mail de grupo',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nueva cuenta de gestión de rebotes',
	'LNK_LIST_MAILBOXES'	=> 'Todas las cuentas de e-Mail',
	'LNK_LIST_QUEUES'		=> 'Todas las colas',
	'LNK_LIST_SCHEDULER'	=> 'Planeaciones',
	'LNK_LIST_TEST_IMPORT'	=> 'Probar importación de e-Mail',
	'LNK_NEW_QUEUES'		=> 'Crear nueva cola',
	'LNK_SEED_QUEUES'		=> 'Crear cabeza de serie para colas de equipos',
	'LBL_GROUPFOLDER_ID'	=> 'ID de carpeta de grupo',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Asignar a carpeta de grupo',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir a los usuarios enviar e-Mails usando en "De" el nombre y la dirección como dirección de respuesta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Cuando esta opción está seleccionada, el nombre y dirección de remitente asociado con esta cuenta de e-Mail de grupo aparecerá como una opción para el campo De cuando redacte e-Mails para usuarios que tengan acceso a la cuenta de e-Mail de grupo',
    'LBL_STATUS_ACTIVE'     => 'Activo',
    'LBL_STATUS_INACTIVE'   => 'Inactivo',
    'LBL_IS_PERSONAL' => 'personal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar e-Mails automáticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Aviso: Está modificando su configuración de importación automática lo cual puede provocar pérdida de datos',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Aviso: La importación automática debe estar habilitada para la creación automática de casos',
	'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
	'LBL_MODIFIED_BY' => 'Modificado por',
	'LBL_SERVICE' => 'Servicio',
	'LBL_STORED_OPTIONS' => 'Stored Options',
	'LBL_GROUP_ID' => 'Group ID',
);
?>
