<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


$mod_strings = array(

    'LBL_ADD_MODULE' => 'Agregar',
    'LBL_ADDRCITY' => 'Ciudad',
    'LBL_ADDRCOUNTRY' => 'País',
    'LBL_ADDRCOUNTRY_ID' => 'ID País',
    'LBL_ADDRSTATEPROV' => 'Estado/Provincia',
    'LBL_ADMINISTRATION' => 'Administración de conectores',
    'LBL_ADMINISTRATION_MAIN' => 'Configuración de conectores',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_BACK' => '< Atrás',
    'LBL_COMPANY_ID' => 'ID compañía',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Algunos campos requeridos se han dejado en blanco.  ¿Desea continuar y guardar los cambios?',
    'LBL_CONNECTOR' => 'Conector',
    'LBL_CONNECTOR_FIELDS' => 'Campos del conector',
    'LBL_DATA' => 'Datos',
    'LBL_DEFAULT' => 'Predeterminado',
    'LBL_DELETE_MAPPING_ENTRY' => '¿Está seguro que desea eliminar esta entrada?',
    'LBL_DISABLED' => 'Deshabilitado',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'No se ha encontrado ninguna ocurrencia para sus criterios de búsqueda',
    'LBL_ENABLED' => 'Habilitado',
    'LBL_EXTERNAL' => 'Habilitar usuarios para crear registros de cuentas externas para este conector',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Para poder usar este conector, las propiedades del conector también se deben definir en la página de configuración.',

    'LBL_MARKET_CAP' => 'Cap. Bursátil',
    'LBL_MERGE' => 'Combinar',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Habilitar conectores',
    'LBL_MODIFY_DISPLAY_DESC' => 'Seleccione qué módulos están habilitados para cada conector',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Configuración de conectores: Habilitar Conectores',
    'LBL_MODULE_FIELDS' => 'Campos del módulo',
    'LBL_MODIFY_MAPPING_TITLE' => 'Mapear campos del conector',
    'LBL_MODIFY_MAPPING_DESC' => 'Mapear campos del conector a campos del módulo para determinar qué datos del conector pueden ser vistos y combinados junto con los registros del módulo',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Configuración de conectores: Mapear campos del conector',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Establecer propiedades del conector',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Configurar las propiedades de cada conector, incluyendo los URLs y las claves del API',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Configuración de conectores: Establecer las propiedades del conector',
    'LBL_MODIFY_SEARCH_TITLE' => 'Administrar búsqueda de conectores',
    'LBL_MODIFY_SEARCH' => 'Búsqueda',
    'LBL_MODIFY_SEARCH_DESC' => 'Seleccione los campos del conector a utilizar para la búsqueda de datos de cada módulo',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Configuración de conectores: Administrar búsqueda de conectores',
    'LBL_MODULE_NAME' => 'Conectores',
    'LBL_NO_PROPERTIES' => 'No hay propiedades configurables para este conector',
    'LBL_PARENT_DUNS' => 'DUNS Padres',
    'LBL_PREVIOUS' => '< Atrás',
    'LBL_QUOTE' => 'Cotización',
    'LBL_RECNAME' => 'Nombre de la compañía',
    'LBL_RESET_TO_DEFAULT' => 'Restablecer valores predeterminados',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => '¿Está seguro que desea restablecer la configuración predeterminada?',
    'LBL_RESET_BUTTON_TITLE' => 'Restablecer',
    'LBL_RESULT_LIST' => 'Lista de datos',
    'LBL_RUN_WIZARD' => 'Ejecutar asistente',
    'LBL_SAVE' => 'Guardar',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Buscando...',
    'LBL_SHOW_IN_LISTVIEW' => 'Mostrar en vista de lista de combinación',
    'LBL_SMART_COPY' => 'Copia inteligente',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_STEP1' => 'Buscar y ver datos',
    'LBL_STEP2' => 'Combinar registros con',
    'LBL_TEST_SOURCE' => 'Prueba de conector',
    'LBL_TEST_SOURCE_FAILED' => 'Error en prueba',
    'LBL_TEST_SOURCE_RUNNING' => 'Realizando prueba...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Prueba exitosa',
    'LBL_TITLE' => 'Combinación de datos',
    'LBL_ULTIMATE_PARENT_DUNS' => 'DUNS padre final',

    'ERROR_RECORD_NOT_SELECTED' => 'Error: Por favor, seleccione un registro de la lista antes de continuar',
    'ERROR_EMPTY_WRAPPER' => 'Error: No ha sido posible recuperar la instancia adaptadora (wrapper) para el origen [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Error: El Id de origen no ha sido especificado o está vacío',
    'ERROR_EMPTY_RECORD_ID' => 'Error: El Id de registro no ha sido especificado o está vacío',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: No se han encontrado más detalles para el registro',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'No se han habilitado módulos para este conector.  Seleccione un módulo para este conector en la página de habilitación de conectores',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: No existen conectores habilitados que tengan campos de búsqueda definidos',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Error: No se ha encontrado ningún archivo sourcedefs.php',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Error: No se han especificado orígenes desde los que obtener datos',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Error: No se han mapeado conectores a este módulo',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: No se han definido campos de búsqueda para el módulo y el conector.  Por favor, póngase en contacto con el administrador del sistema',
    'ERROR_NO_FIELDS_MAPPED' => 'Error: Debe mapear por lo menos un campo del Conector a un campo de módulo para cada entrada de módulo',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: No se ha mapeado ningún campo de módulo para ser mostrado como parte de los resultados.  Por favor, póngase en contacto con el administrador del sistema',
    'LBL_TWITTER_USER' => 'Twitter User',
    'LBL_FACEBOOK_USER' => 'Facebook User',
    'LBL_INFO_INLINE' => 'Información' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fecha de cierre' /*for 508 compliance fix*/,

);

?>