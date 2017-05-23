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






$mod_strings = array (
'LBL_EDIT_LAYOUT'=>'Editar diseño',
'LBL_EDIT_ROWS'=>'Editar filas',
'LBL_EDIT_COLUMNS'=>'Editar columnas',
'LBL_EDIT_LABELS'=>'Editar etiquetas',
'LBL_EDIT_FIELDS'=>'Editar campos personalizados',
'LBL_ADD_FIELDS'=>'Agregar campos personalizados',
'LBL_DISPLAY_HTML'=>'Mostrar código HTML',
'LBL_SELECT_FILE'=> 'Seleccionar archivo',
'LBL_SAVE_LAYOUT'=> 'Guardar diseño',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un subpanel',
'LBL_SELECT_SUBPANEL' => 'Seleccionar subpanel',
'LBL_MODULE_TITLE' => 'Estudio',
'LBL_TOOLBOX' => 'Caja de herramientas',
'LBL_STAGING_AREA' => 'Área de diseño (arrastre y suelte elementos aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos SuiteCRM (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_SUGAR_BIN_STAGE' => 'Papelera SuiteCRM (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos SuiteCRM',
'LBL_VIEW_SUGAR_BIN' => 'Ver Papelera SuiteCRM',
'LBL_FAILED_TO_SAVE' => 'Error al guardar',
'LBL_CONFIRM_UNSAVE' => 'Los cambios no se han guardado y se perderán. ¿Está seguro que desea continuar?',
'LBL_PUBLISHING' => 'Publicando...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_FAILED_PUBLISHED' => 'Error al publicar',
'LBL_DROP_HERE' => '[Soltar aquí]',

//CUSTOM FIELDS
'LBL_NAME'=>'Nombre',
'LBL_LABEL'=>'Etiqueta',
'LBL_MASS_UPDATE'=>'Actualización masiva',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor predeterminado',
'LBL_REQUIRED'=>'Requerido',
'LBL_DATA_TYPE'=>'Tipo',


'LBL_HISTORY'=>'Historial',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>¡Bienvenido al Estudio!</h2><br> ¿Qué desea hacer hoy?<br><b> Por favor, seleccione una de las siguientes opciones</b>',
'LBL_SW_EDIT_MODULE'=>'Editar un módulo',
'LBL_SW_EDIT_DROPDOWNS'=>'Editar listas desplegables',
'LBL_SW_EDIT_TABS'=>'Configurar pestañas',
'LBL_SW_RENAME_TABS'=>'Renombrar pestañas',
'LBL_SW_EDIT_GROUPTABS'=>'Configurar grupos de pestañas',
'LBL_SW_EDIT_PORTAL'=>'Editar portal',
'LBL_SW_EDIT_WORKFLOW'=>'Editar flujo de trabajo',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'Reparar campos personalizados',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'Migrar campos personalizados',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>¡Bienvenido al Estudio!</h2><br><b>Por favor, seleccione uno de los siguientes módulos',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>Editar un módulo</h2>¿Qué desea hacer con ese módulo?<br><b>Por favor, seleccione la acción que desea realizar',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'Editar campos personalizados',
'LBL_SMA_EDIT_LAYOUT'=>'Editar diseño',
'LBL_SMA_EDIT_LABELS' =>'Editar etiquetas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_WELCOME'=> '<h2>Historial</h2><br> El historial le permite ver ediciones publicadas anteriormente del archivo con el que actualmente está trabajando. Puede comparar con y restaurar versiones previas. Si restaura un archivo, éste se convertirá en su archivo de trabajo. Debe publicarlo antes de que sea visible para cualquier otra persona.<br> ¿Qué desea hacer hoy?<br><b> Por favor, seleccione una de las siguientes opciones</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> 'Crea una lista desplegable',
'LBL_ED_WELCOME'=>'<h2>Editor de listas desplegables</h2><br><b>Puede editar una lista desplegable existente, o crear una nueva',
'LBL_DROPDOWN_NAME' => 'Nombre de lista desplegable:',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma de lista desplegable:',
'LBL_TABGROUP_LANGUAGE' => 'Idioma del grupo de pestañas:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>Editor de campos personalizados</h2><br><b>Puede ver o editar un campo personalizado existente, crear un nuevo campo personalizado, o limpiar la caché de campos personalizados',
'LBL_EC_VIEW_CUSTOMFIELDS'=> 'Ver campos personalizados',
'LBL_EC_CREATE_CUSTOMFIELD'=>'Crear campo personalizado',
'LBL_EC_CLEAR_CACHE'=>'Limpia la caché',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>Historial</h2><br><b>Por favor, seleccione el archivo que desea visualizar</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'Display Value',
'LBL_DD_DATABASEVALUE'=>'Database Value',
'LBL_DD_ALL'=>'Todo',

//BUTTONS
'LBL_BTN_SAVE'=>'Guardar',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar y publicar',
'LBL_BTN_HISTORY'=>'Historial',
'LBL_BTN_NEXT'=>'Siguiente',
'LBL_BTN_BACK'=>'Atrás',
'LBL_BTN_ADDCOLS'=>'Agregar columnas',
'LBL_BTN_ADDROWS'=>'Agregar filas',
'LBL_BTN_UNDO'=>'Deshacer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar campo personalizado',
'LBL_BTN_TABINDEX'=>'Editar orden de pestañas',

//TABS
'LBL_TAB_SUBTABS'=>'Subpestañas',
'LBL_MODULES'=>'Módulos',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => 'Administración',
'LBL_CONFIGURE_GROUP_TABS' => 'Configurar grupos de pestañas',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'Las siguientes pestañas y grupos de subpestañas serán mostradas a los usuarios que elijan ver módulos agrupados en la barra de navegación. Arrastre y suelte módulos a las cajas con pestañas para configurar qué subpestañas deben aparecer bajo qué pestañas. Los grupos de pestañas vacíos no serán mostrados en la barra de navegación',
'LBL_RENAME_TAB_WELCOME'=>'Haga click en el valor de visualización de cualquier pestaña de la siguiente tabla para renombrar la pestaña',
'LBL_DELETE_MODULE'=>'Quitar&nbsp;módulo<br />del&nbsp;grupo',
'LBL_DISPLAY_OTHER_TAB_HELP' => 'Seleccione mostrar la pestaña "Otros" en la barra de navegación.  Predeterminadamente, la pestaña "Otros" muestra aquellos módulos que aún no se han incluido en otros grupos',
'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Para establecer las etiquetas de los grupos de pestañas en otros idiomas disponibles, seleccione un idioma, edite las etiquetas y haga clic en guardar & desplegar para realizar los cambios para ese idioma',
'LBL_ADD_GROUP'=>'Agregar grupo',
'LBL_NEW_GROUP'=>'Nuevo grupo',
'LBL_RENAME_TABS'=>'Renombrar pestañas',
'LBL_DISPLAY_OTHER_TAB' => 'Mostrar pestaña \'Otros\'',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Predeterminado',
'LBL_ADDITIONAL'=>'Adicional',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuación se muestran tres columnas. La columna "Predeterminado" contiene los campos que se muestran en una lista predeterminada, la columna "Adicional" contiene campos que un usuario puede elegir a la hora de crear una vista personalizada, y la columna "Disponible" muestra columnas disponibles para usted como administrador para, o bien añadirlas a las columnas por defecto, o a las adicionales para que sean usadas por usuarios ya que actualmente no están siendo utilizadas',
'LBL_LISTVIEW_EDIT'=>'Editor de listas',

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: campo ya existente',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de clave no válido: [']",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Portal de SuiteCRM',
'LBL_SMP_WELCOME'=>' Por favor, seleccione el módulo que desea editar de la siguiente lista',
'LBL_SP_WELCOME'=>'Welcome to Studio for SuiteCRM Portal. You can either choose to edit modules here or sync to a portal instance.<br> Please choose from the list below.',
'LBL_SP_SYNC'=>'Sincronización de portal',
'LBL_SYNCP_WELCOME'=>'Please enter the url to the portal instance you wish to update then press the Go button.<br> This will bring up a prompt for your user name and password.<br> Please enter your SuiteCRM user name and password and press the Begin Sync button.',
'LBL_LISTVIEWP_DESCRIPTION'=>'Tiene dos columnas a continuación: Predeterminado, que incluye los campos que se mostrarán, y Disponible, que incluye los campos que no se mostrarán, pero que están disponibles para ser mostrados. Simplemente tiene que arrastrar los campos entre ambas columnas. También puede cambiar el orden de los elementos en una columna arrastrándolos y soltándolos',
'LBL_SP_STYLESHEET'=>'Subir una hoja de estilo',
'LBL_SP_UPLOADSTYLE'=>'Haga click en el botón de exploración y seleccione la hoja de estilo que desea subir de su computadora.<br> La próxima vez que realice una sincronización al portal, se incluirá la hoja de estilos',
'LBL_SP_UPLOADED'=> 'Subido',
'ERROR_SP_UPLOADED'=>'Por favor, asegúrese de que está subiendo una hoja de estilos CSS',
'LBL_SP_PREVIEW'=>'Aquí tiene una presentación preliminar de la apariencia que tendrá su hoja de estilos',

	'LBL_SAVE' => 'Guardar' /*for 508 compliance fix*/,
	'LBL_UNDO' => 'Deshacer' /*for 508 compliance fix*/,
	'LBL_REDO' => 'Rehacer' /*for 508 compliance fix*/,
	'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
	'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => 'Agregar campo' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => 'Agregar filas' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => 'Agregar campo' /*for 508 compliance fix*/,
	'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
'LBL_SINGULAR' => 'Singular Label',
'LBL_PLURAL' => 'Plural Label',
'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
?>