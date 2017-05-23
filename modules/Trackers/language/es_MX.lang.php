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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Mostrar usuarios activos',
		  'ShowLastModifiedRecords' => 'Últimos 10 registros modificados',
		  'ShowTopUser' => 'Usuario más activo',
		  'ShowMyModuleUsage' => 'Mi uso de módulos',
		  'ShowMyWeeklyActivities' => 'Mi actividad semanal',
		  'ShowTop3ModulesUsed' => 'Mis 3 módulos más usados',
		  'ShowLoggedInUserCount' => 'Número de usuarios activos',
		  'ShowMyCumulativeLoggedInTime' => 'Mi tiempo de sesión acumulado (esta semana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tiempo de sesión acumulado de todos los usuarios (esta semana)',
		  
		  //Column header mapping
		  'action' => 'Acción',
		  'active_users' => 'Número de usuarios activos',
		  'date_modified' => 'Fecha de última acción',
		  'different_modules_accessed' => 'Número de módulos accedidos',
		  'first_name' => 'Nombre',
		  'item_id' => 'ID',
		  'item_summary' => 'Nombre',
		  'last_action' => 'Fecha/Hora de última acción',
		  'last_name' => 'Apellido',
		  'module_name' => 'Nombre de módulo',
		  'records_modified' => 'Total de registros modificados',
		  'top_module' => 'Módulos nás accedidos',
		  'total_count' => 'Total de visitas a páginas',
		  'total_login_time' => 'Hora (hh:mm:ss)',
		  'user_name' => 'Nombre de usuario',
		  'users' => 'Usuarios',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Habilitado',
		  'LBL_MODULE_NAME_TITLE' => 'Seguimiento',
		  'LBL_MODULE_NAME' => 'Seguimiento',
		  'LBL_TRACKER_SETTINGS' => 'Configuración de seguimiento',
		  'LBL_TRACKER_QUERIES_DESC' => 'Consultas de seguimiento',
		  'LBL_TRACKER_QUERIES_HELP' => 'Dar seguimiento a sentencias SQL cuando "Registrar consultas lentas" esté habilitado y el tiempo de ejecución de la consulta exceda el valor del "Tiempo umbral para consultas lentas"',
		  'LBL_TRACKER_PERF_DESC' => 'Rendimiento de seguimiento',
		  'LBL_TRACKER_PERF_HELP' => 'Dar seguimiento a accesos a base de datos, archivos accedidos y utilización de memoria',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Sesiones de seguimiento',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Dar seguimiento a usuarios activos e información de la sesión de los usuarios',
		  'LBL_TRACKER_DESC' => 'Acciones de seguimiento',
		  'LBL_TRACKER_HELP' => 'Dar seguimiento a visitas de los usuarios a páginas (módulos y registros accedidos) y registros guardados',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Número de días de datos de seguimiento a guardar cuando el planeador compacte las tablas',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Número de días',
);
?>