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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Fecha de envío',
	'LBL_IN_QUEUE'								=> 'en proceso',
	'LBL_IN_QUEUE_DATE'							=> 'Fecha de puesta en cola',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Utilice únicamente valores enteros para especificar el número de e-Mails enviados por lote',

	'LBL_ATTACHMENT_AUDIT'						=> ' ha sido enviado.  No se ha duplicado en local para minimizar la utilización de espacio en el disco duro',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar',
	'LBL_CUSTOM_LOCATION'						=> 'Definido por el usuario',
	'LBL_DEFAULT_LOCATION'						=> 'Predeterminado',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Agregar mensaje sobre confidencialidad de contenido a cada e-Mail',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Confidencialidad de contenido',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'AVISO: Este mensaje de correo es para uso único de su(s) destinatario(s) y puede contener información privada y confidencial. Queda prohibido cualquier tipo de revisión, uso, revelación o distribución no autorizada. Si usted no es el destinatario previsto, por favor, destruya todas las copias del mensaje original y notifique al remitente de forma que podamos corregir la dirección de correo en nuestro registro. Gracias',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Redactar mensajes de e-Mail en este juego de caracteres',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Redactar correo usando este cliente',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Eliminar archivos adjuntos y notas relacionadas junto a los e-Mails borrados',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Rellenar previamente valores por defecto para Gmail&#153;',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Número de e-Mails enviados por lote:',
	'LBL_EMAIL_SMTP_SSL'						=> '¿Habilitar SMTP sobre SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Configuración por defecto de e-Mail para el usuario',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuración de e-Mail Saliente',
	'LBL_EMAILS_PER_RUN'						=> 'Número de e-Mmails enviados por lote:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campaña',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Procesados',
	'LBL_LIST_FORM_TITLE'						=> 'Cola',
	'LBL_LIST_FROM_EMAIL'						=> 'e-Mail del remitente',
	'LBL_LIST_FROM_NAME'						=> 'Nombre del remitente',
	'LBL_LIST_IN_QUEUE'							=> 'en proceso',
	'LBL_LIST_MESSAGE_NAME'						=> 'Mensaje de marketing',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'e-Mail del destinatario',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nombre del destinatario',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Intentos de envío',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar el',
	'LBL_LIST_USER_NAME'						=> 'Nombre de usuario',
	'LBL_LOCATION_ONLY'							=> 'Ubicación',
	'LBL_LOCATION_TRACK'						=> 'Ubicación de los archivos de seguimiento de campaña (como campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Guardar copias de los mensajes de la campaña:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de e-Mail enviado durante todas las campañas?  <bold>Se recomienda el valor predeterminado de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual',
	'LBL_MAIL_SENDTYPE'							=> 'Agente de transferencia de e-Mail (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Usar autenticación SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Contraseña:',
	'LBL_MAIL_SMTPPORT'							=> 'Puerto SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Usuario:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Elija su proveedor de e-Mail',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contraseña de Yahoo! Mail',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID de Yahoo! Mail',
	'LBL_GMAIL_SMTPPASS'					=> 'Contraseña de Gmail',
	'LBL_GMAIL_SMTPUSER'					=> 'Usuario de Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contraseña de Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nombre de usuario de Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Puerto del servidor Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange',
	'LBL_EMAIL_LINK_TYPE'				=> 'Cliente de mensajería a utilizar',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Id de marketing',
    'LBL_MODULE_ID'                             => 'e-Mail',
	'LBL_MODULE_NAME'							=> 'Configuración de e-Mail',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Ajustes de e-Mails de camapaña',
	'LBL_MODULE_TITLE'							=> 'Administración de cola de e-Mail saliente',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Cuando esté habilitado, se enviarán e-Mails a los usuarios cuando se les asignen registros',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Dirección remitente:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nombre del remitente:',
	'LBL_NOTIFY_ON'								=> 'Notificaciones de asignación',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> '¿Enviar notificaciones a usuarios nuevos?',
	'LBL_NOTIFY_TITLE'							=> 'Opciones de e-Mail',
	'LBL_OLD_ID'								=> 'ID antiguo',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opciones de e-Mail saliente',
	'LBL_RELATED_ID'							=> 'Id relacionado',
	'LBL_RELATED_TYPE'							=> 'Tipo relacionado',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Guardar los e-Mails Salientes en formato original',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Búsqueda procesada',
	'LBL_SEARCH_FORM_TITLE'						=> 'Búsqueda en cola',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Ver e-Mails procesados',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Ver e-Mails encolados',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor en config.php para site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Para borrar su suscripción a esta lista de e-Mail vaya a',
	'TXT_REMOVE_ME_CLICK'						=> 'haga click aquí',
	'TXT_REMOVE_ME'								=> 'Para borrar su suscripción a esta lista de e-Mail',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificación usando como remitente la dirección de e-Mail del usuario asignador',

	'LBL_SECURITY_TITLE'						=> 'Configuración de seguridad de e-Mail',
	'LBL_SECURITY_DESC'							=> 'Marque aquello que NO debería ser permitido en el e-Mail entrante o mostradas en el módulo de e-Mails',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta Base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta Embed',
	'LBL_SECURITY_FORM'							=> 'Etiqueta Form',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta Drameset',
	'LBL_SECURITY_IFRAME'						=> 'Etiqueta iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Etiqueta Import',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta Layer',
	'LBL_SECURITY_LINK'							=> 'Etiqueta Link',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Seleccionar la configuración mínima de seguridad predeterminada en Outlook (errores en la visualización del contenido)',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta Script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Inverser toutes les options',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sí',
    'LBL_NO'                                    => 'No',
    'LBL_PREPEND_TEST'                          => '[Prueba]:',
	'LBL_SEND_ATTEMPTS'							=> 'Intentos de envío',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar el servidor de e-Mail saliente predeterminado para enviar notificaciones de e-Mail, incluyendo alertas del flujo de trabajo',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permite a los usuarios utilizar esta cuenta para e-Mail saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Cuando esta opción está seleccionada, todos los usuarios podrán enviar e-Mails utilizando la misma<br> cuenta de e-Mail saliente para enviar notificaciones del sistema y alertas.  Si la opción no está seleccionada,<br> los usuarios podrán utilizar el servidor de e-Mail saliente una vez proporcionen la información sobre su propia cuenta',
    'LBL_FROM_ADDRESS_HELP'                     => 'Cuando está habilitada, el nombre de usuario de asignación y el e-Mail serán incluídos en el campo "De" del e-Mail. Esta característica no funcionará con servidores SMTP que no permitan enviar de una cuenta diferente de e-Mail que la de la cuenta de dicho servidor',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ayuda' /*for 508 compliance fix*/,
	'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
);

?>