<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Venta',
    'LBL_MODULE_TITLE' => 'Venta: Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'Ventas: Buscar',
    'LBL_VIEW_FORM_TITLE' => 'Ventas: Ver',
    'LBL_LIST_FORM_TITLE' => 'Ventas: Lista ',
    'LBL_SALE_NAME' => 'Nombre de la venta:',
    'LBL_SALE' => 'Venta:',
    'LBL_NAME' => 'Nombre',
    'LBL_LIST_SALE_NAME' => 'Nombre',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la cuenta',
    'LBL_LIST_AMOUNT' => 'Cantidad',
    'LBL_LIST_DATE_CLOSED' => 'Fecha de cierre',
    'LBL_LIST_SALE_STAGE' => 'Etapa de la venta',
    'LBL_ACCOUNT_ID' => 'ID de la cuenta',
    'LBL_CURRENCY_ID' => 'ID de la divisa',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
    'UPDATE' => 'Venta - actualizar la divisa',
    'UPDATE_DOLLARAMOUNTS' => 'Colocar los montos de la divisa predeterminadamente',
    'UPDATE_VERIFY' => 'Verificar los montos',
    'UPDATE_VERIFY_TXT' => 'Verificar que los montos de las ventas sean decimales válidos y sólo caracteres numéricos (0-9) y decimales (,)',
    'UPDATE_FIX' => 'Reparar montos',
    'UPDATE_FIX_TXT' => 'Intenta corregir cualquier cantidad no válida creando un número decimal válido a partir de la cantidad actual. Antes realiza una copia de seguridad de todas las cantidades modificadas en el campo de base de datos amount_backup. Si tras la correción detecta problemas, no vuelva a realizar esta operación sin restaurar los valores previos desde la copia de seguridad ya que si no sobrescribirá la copia de seguridad con nuevos datos no válidos',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza las cantidades en Dólares EEUU para las ventas basadas en el conjunto actual de cambios de moneda. Este valor se usa para calcular gráficas y vistas de listas de cantidades monetarias',
    'UPDATE_CREATE_CURRENCY' => 'Crear nueva divisa:',
    'UPDATE_VERIFY_FAIL' => 'Falló la verificación del registro:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Cantidad en curso:',
    'UPDATE_VERIFY_FIX' => 'Lanzar la reparación',
    'UPDATE_INCLUDE_CLOSE' => 'Incluir los registros cerrados',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nueva cantidad:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nueva divisa:',
    'UPDATE_DONE' => 'Completado',
    'UPDATE_BUG_COUNT' => 'Incidencias encontradas:',
    'UPDATE_BUGFOUND_COUNT' => 'Incidencias:',
    'UPDATE_COUNT' => 'Restaurar registros:',
    'UPDATE_RESTORE_COUNT' => 'Registros con Cantidades Restauradas:',
    'UPDATE_RESTORE' => 'Restaurar Cantidades',
    'UPDATE_RESTORE_TXT' => 'Restaura los valores de las cantidades desde la copia de seguridad creada durante la reparación',
    'UPDATE_FAIL' => 'No ha podido actualizarse - ',
    'UPDATE_NULL_VALUE' => 'La cantidad es NULL, estableciéndola a 0 -',
    'UPDATE_MERGE' => 'Unificar divisas',
    'UPDATE_MERGE_TXT' => 'Unifica múltiples monedas en una única moneda. Si detecta que hay múltiples registros de tipo moneda para la misma moneda, puede unificarlas. Esto también unificará las monedas para el resto de módulos',
    'LBL_ACCOUNT_NAME' => 'Nombre de la cuenta:',
    'LBL_AMOUNT' => 'Cantidad:',
    'LBL_AMOUNT_USDOLLAR' => 'Cantidad en Dólares EEUU:',
    'LBL_CURRENCY' => 'Divisa:',
    'LBL_DATE_CLOSED' => 'Fecha de cierre prevista:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes potenciales',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_NEXT_STEP' => 'Siguiente paso:',
    'LBL_LEAD_SOURCE' => 'Origen:',
    'LBL_SALES_STAGE' => 'Etapa de la venta:',
    'LBL_PROBABILITY' => 'Probabilidad (%):',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DUPLICATE' => 'Posible venta duplicada',
    'MSG_DUPLICATE' => 'El registro para la venta que va a crear podría ser un duplicado de otro registro de venta existente. Los registros de venta con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta venta, o en Cancelar para volver al módulo sin crear la venta',
    'LBL_NEW_FORM_TITLE' => 'Nueva venta',
    'LNK_NEW_SALE' => 'Nueva venta',
    'LNK_SALE_LIST' => 'Venta',
    'ERR_DELETE_RECORD' => 'Debe de especificar un número de registro para eliminar la venta',
    'LBL_TOP_SALES' => 'Mis principales ventas abiertas',
    'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de que desea eliminar este contacto de la venta?',
    'SALE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desea eliminar esta venta del proyecto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Venta',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_RAW_AMOUNT' => 'Importe bruto',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_ASSIGNED_TO_NAME' => 'Usuario:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Responsable',
    'LBL_MY_CLOSED_SALES' => 'Mis ventas cerradas',
    'LBL_TOTAL_SALES' => 'Ventas totales',
    'LBL_CLOSED_WON_SALES' => 'Ventas ganadas',
    'LBL_ASSIGNED_TO_ID' => 'Asignada a ID',
    'LBL_CREATED_ID' => 'Creada por ID',
    'LBL_MODIFIED_ID' => 'Modificada por ID',
    'LBL_MODIFIED_NAME' => 'Modificada por usuario',
    'LBL_SALE_INFORMATION' => 'Información de la venta',
    'LBL_CURRENCY_NAME' => 'Nombre de la divisa',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de la divisa',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Quitar',

);
