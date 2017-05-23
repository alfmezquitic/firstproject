<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_TITLE' => 'Oportunidades : Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de oportunidades',
    'LBL_VIEW_FORM_TITLE' => 'Vista de oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de la oportunidad:',
    'LBL_OPPORTUNITY' => 'Oportunidad:',
    'LBL_NAME' => 'Nombre de la oportunidad',
    'LBL_INVITEE' => 'Contactos',
    'LBL_CURRENCIES' => 'Divisas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nombre',
    'LBL_LIST_ACCOUNT_NAME' => 'Cuenta',
    'LBL_LIST_AMOUNT' => 'Cantidad',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Cantidad',
    'LBL_LIST_DATE_CLOSED' => 'Fecha de cierre',
    'LBL_LIST_SALES_STAGE' => 'Etapa de ventas',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta',
    'LBL_CURRENCY_ID' => 'ID divisa',
    'LBL_CURRENCY_NAME' => 'Nombre de la divisa',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de la moneda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Oportunidad - Actualizar Moneda',
    'UPDATE_DOLLARAMOUNTS' => 'Actualizar cantidades en dólares EUA',
    'UPDATE_VERIFY' => 'Verificar cantidades',
    'UPDATE_VERIFY_TXT' => 'Verifica que los valores de las cantidades en las oportunidades son números decimales válidos con sólo caracteres numéricos (0-9) y decimales(.)',
    'UPDATE_FIX' => 'Corregir cantidades',
    'UPDATE_FIX_TXT' => 'Intenta corregir cualquier cantidad no válida creando un número decimal válido a partir de la cantidad actual. Antes realiza una copia de seguridad de todas las cantidades modificadas en el campo de base de datos amount_backup. Si tras la correción detecta problemas, no vuelva a realizar esta operación sin restaurar los valores previos desde la copia de seguridad ya que si no sobrescribirá la copia de seguridad con nuevos datos no válidos',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza las cantidades en dólares EUA para las oportunidades basadas en el conjunto actual de cambios de moneda. Este valor se usa para calcular gráficas y vistas de listas de cantidades monetarias',
    'UPDATE_CREATE_CURRENCY' => 'Creación de nueva divisa:',
    'UPDATE_VERIFY_FAIL' => 'Fallo de verificación de registro:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Cantodad actual:',
    'UPDATE_VERIFY_FIX' => 'La corrección daría',
    'UPDATE_INCLUDE_CLOSE' => 'Registros cerrados incluidos',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nueva cantidad:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nueva divisa:',
    'UPDATE_DONE' => 'Hecho',
    'UPDATE_BUG_COUNT' => 'Problemas detectados cuya resolución se ha intentado:',
    'UPDATE_BUGFOUND_COUNT' => 'Problemas detectados:',
    'UPDATE_COUNT' => 'Registros actualizados:',
    'UPDATE_RESTORE_COUNT' => 'Registros con cantidades restauradas:',
    'UPDATE_RESTORE' => 'Restaurar cantidades',
    'UPDATE_RESTORE_TXT' => 'Restaura los valores de las cantidades desde la copia de seguridad creada durante la corrección',
    'UPDATE_FAIL' => 'No ha podido actualizarse - ',
    'UPDATE_NULL_VALUE' => 'La cantidad es NULL, estableciéndola a 0 -',
    'UPDATE_MERGE' => 'Unificar divisas',
    'UPDATE_MERGE_TXT' => 'Unifica múltiples divisas en una única divisa. Si detecta que hay múltiples registros de tipo divisa para la misma divisa, puede unificarlas. Esto también unificará las divisas para el resto de módulos',
    'LBL_ACCOUNT_NAME' => 'Cuenta:',
    'LBL_AMOUNT' => 'Cantidad:',
    'LBL_AMOUNT_USDOLLAR' => 'Cantidad en dólares EUA:',
    'LBL_CURRENCY' => 'Divisa:',
    'LBL_DATE_CLOSED' => 'Fecha de cierre:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_NEXT_STEP' => 'Siguiente paso:',
    'LBL_LEAD_SOURCE' => 'Toma de contacto:',
    'LBL_SALES_STAGE' => 'Etapa de ventas:',
    'LBL_PROBABILITY' => 'Probabilidad (%):',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DUPLICATE' => 'Posible oportunidad duplicada',
    'MSG_DUPLICATE' => 'El registro para la oportunidad que va a crear podría ser un duplicado de otro registro de oportunidad existente. Los registros de oportunidad con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta oportunidad, o en Cancelar para volver al módulo sin crear la oportunidad',
    'LBL_NEW_FORM_TITLE' => 'Nueva oportunidad',
    'LNK_NEW_OPPORTUNITY' => 'Nueva oportunidad',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar',
    'LBL_TOP_OPPORTUNITIES' => 'Mis principales oportunidades',
    'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro que desea eliminar este contacto de la oportunidad?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '¿Está seguro que desea eliminar esta oportunidad del proyecto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_RAW_AMOUNT' => 'Importe bruto',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario asignado',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mis oportunidades cerradas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades totales',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades ganadas',
    'LBL_ASSIGNED_TO_ID' => 'Asignada a ID:',
    'LBL_CREATED_ID' => 'Creada por ID',
    'LBL_MODIFIED_ID' => 'Modificada por ID',
    'LBL_MODIFIED_NAME' => 'Modificada por usuario',
    'LBL_CREATED_USER' => 'Usuario creado',
    'LBL_MODIFIED_USER' => 'Usuario modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campañas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    'LABEL_PANEL_ASSIGNMENT' => 'Asignación',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar oportunidades',
    'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID de campaña',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo de oportunidad',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre de Usuario Asignado',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Usuario Asignado',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
    'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
    'LBL_EXPORT_NAME' => 'Nombre',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Correos de Contactos Relacionados',
    'TWITTER_USER_C' => 'Usuario de Twitter',

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_QUOTES' => 'Cotizaciones',
);

?>
