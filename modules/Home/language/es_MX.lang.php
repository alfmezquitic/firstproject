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
 *
 * This file was contributed by diligent technology & business consulting GmbH <info@dtbc.eu>
 *
 */

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
$mod_strings = array(
    'LBL_MODULE_NAME' => 'Inicio',
    'LBL_MODULES_TO_SEARCH' => 'Módulos en los que buscar',
    'LBL_NEW_FORM_TITLE' => 'Nuevo contacto',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_LIST_LAST_NAME' => 'Apellidos',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_EMAIL_ADDRESS' => 'e-Mail:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mi pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline por etapa de ventas',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline por etapa de venta',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Campaña ROI',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Mi indicador de oportunidades ganadas',
    'LNK_NEW_CONTACT' => 'Nuevo contacto',
    'LNK_NEW_ACCOUNT' => 'Nueva cuenta',
    'LNK_NEW_OPPORTUNITY' => 'Nuevo contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente potencial',
    'LNK_NEW_CASE' => 'Nuevo caso',
    'LNK_NEW_NOTE' => 'Nueva nota o archivo adjunto',
    'LNK_NEW_CALL' => 'Programar llamada',
    'LNK_NEW_EMAIL' => 'Archivar e-Mail',
    'LNK_COMPOSE_EMAIL' => 'Redactar e-Mail',
    'LNK_NEW_MEETING' => 'Programar reunión',
    'LNK_NEW_TASK' => 'Nueva tarea',
    'LNK_NEW_BUG' => 'Informar de incidencia',
    'LBL_ADD_BUSINESSCARD' => 'Nueva tarjeta de visita',
    'ERR_ONE_CHAR' => 'Por favor, indique al menos un número o letra para su búsqueda...',
    'LBL_OPEN_TASKS' => 'Mis tareas pendientes',
    'LBL_SEARCH_RESULTS_IN' => 'en',
    'LNK_NEW_SEND_EMAIL' => 'Redactar e-Mail',
    'LBL_NO_ACCESS' => 'Usted no tiene acceso a esta área.  Contacte al administrador del sitio para tener acceso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Sin Resultados --',
    'LBL_NO_RESULTS' => '<h2>No se han encontrado resultados. Por favor, realice una nueva búsqueda</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Trucos para la búsqueda:</h3><ul><li>Asegúrese que ha seleccionado las categorías adecuadas más arriba.</li><li>Amplíe sus criterios de búsqueda.</li><li>Si aun así no obtiene resultados, pruebe con la opción de búsqueda avanzada</li></ul>',

    'LBL_RELOAD_PAGE' => 'Por favor, <a href="javascript: window.location.reload()">recargue la ventana</a> para usar este SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Agregar SuiteCRM Dashlets',
    'LBL_ADD_PAGE' => 'Agregar página',
    'LBL_DEL_PAGE' => 'Eliminar página',
    'LBL_WEBSITE_TITLE' => 'Sitio Web',
    'LBL_RSS_TITLE' => 'Lector de noticias',
    'LBL_DELETE_PAGE' => 'Eliminar página',
    'LBL_CHANGE_LAYOUT' => 'Cambiar diseño',
    'LBL_RENAME_PAGE' => 'Renombrar página',
    'LBL_CLOSE_DASHLETS' => 'Cerrar',
    'LBL_OPTIONS' => 'Opciones',
    // dashlet search fields
    'LBL_TODAY' => 'Hoy',
    'LBL_YESTERDAY' => 'Ayer',
    'LBL_TOMORROW' => 'Mañana',
    'LBL_LAST_WEEK' => 'La semana pasada',
    'LBL_NEXT_WEEK' => 'La próxima semana',
    'LBL_LAST_7_DAYS' => 'Últimos 7 días',
    'LBL_NEXT_7_DAYS' => 'Siguientes 7 días',
    'LBL_LAST_MONTH' => 'Último mes',
    'LBL_NEXT_MONTH' => 'Siguiente mes',
    'LBL_LAST_QUARTER' => 'Último trimestre',
    'LBL_THIS_QUARTER' => 'Este trimestre',
    'LBL_LAST_YEAR' => 'Último año',
    'LBL_NEXT_YEAR' => 'Próximo año',
    'LBL_LAST_30_DAYS' => 'Últimos 30 días',
    'LBL_NEXT_30_DAYS' => 'Próximos 30 días',
    'LBL_THIS_MONTH' => 'Este mes',
    'LBL_THIS_YEAR' => 'Este año',

    'LBL_MODULES' => 'Módulos',
    'LBL_CHARTS' => 'Gráficos',
    'LBL_TOOLS' => 'Herramientas',
    'LBL_WEB' => 'Sitio Web',
    'LBL_SEARCH_RESULTS' => 'Resultado de la búsqueda',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vistas del módulo',
        'Portal' => 'Portal',
        'Charts' => 'Gráficos',
        'Tools' => 'Herramientas',
        'Miscellaneous' => 'Varios'),
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add a new one.',
    'LBL_ADDING_DASHLET' => 'Agregando SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Agregado',
    'LBL_REMOVE_DASHLET_CONFIRM' => '¿Está seguro de que desea quitar el SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Quitando SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Sólo mis elementos',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar filas',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    'LBL_TRAINING_TITLE' => 'Formación',

    'LBL_CREATING_NEW_PAGE' => 'Creando nueva página...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add SuiteCRM Dashlets option.',
    'LBL_DELETE_PAGE_CONFIRM' => '¿Está seguro que desea eliminar esta página?',
    'LBL_SAVING_PAGE_TITLE' => 'Guardando título de página...',
    'LBL_RETRIEVING_PAGE' => 'Recuperando página...',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_HOME_PAGE_2_NAME' => 'Página de ventas',
    'LBL_HOME_PAGE_3_NAME' => 'Página de soporte',
    'LBL_HOME_PAGE_6_NAME' => 'Página de marketing',//bug 16510, separate the support and marketing page from each other
    'LBL_HOME_PAGE_4_NAME' => 'Seguimiento',
    'LBL_CLOSE_SITEMAP' => 'Cerrar',

    'LBL_SEARCH' => 'Buscar',
    'LBL_CLEAR' => 'Limpiar',

    'LBL_BASIC_CHARTS' => 'Gráficos básicos',
    'LBL_REPORT_CHARTS' => 'Gráficos de informes',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mis reportes favoritos',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Reportes del equipo global',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Reportes de mi equipo',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Mis reportes guardados',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Versión',
    'LBL_BUILD' => 'Build',


    'LBL_VIEWLICENSE_COM' => '<P>This program is free software; you can redistribute it and/or modify it under the terms of the <a href="LICENSE.txt" target="_blank" class="body"> GNU Affero General Public License version 3</a> as published by the Free Software Foundation, including the additional permission set forth in the source code header.</P>',
    'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',


    'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
    'LBL_AND' => "y",
    'LBL_ARE' => "son",
    'LBL_TRADEMARKS' => 'marcas registradas',
    'LBL_OF' => 'de',
    'LBL_FOUNDERS' => 'Fundadores',
    'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the SuiteCRM Community',
    'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop SuiteCRM extensions',
    'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified SuiteCRM extensions',
    'LBL_TRAINING' => 'Formación',
    'LBL_DETAILS_TRAINING' => 'Learn about SuiteCRM using online and interactive learning content',
    'LBL_FORUMS' => 'Foros',
    'LBL_DETAILS_FORUMS' => 'Discuss SuiteCRM with expert community users and developers',
    'LBL_WIKI' => 'Wiki',
    'LBL_DETAILS_WIKI' => 'Busque en la Base de conocimiento sobre temas de usuarios y desarrolladores',
    'LBL_DEVSITE' => 'Sitio del desarrollador',
    'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
    'LBL_GET_SUGARCRM_RSS' => 'Get SuiteCRM RSS',
    'LBL_SUGARCRM_NEWS' => 'SuiteCRM News',
    'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM Training News',
    'LBL_SUGARCRM_FORUMS' => 'SuiteCRM Forums',
    'LBL_SUGARFORGE_NEWS' => 'SuiteCRM News',
    'LBL_ALL_NEWS' => 'Todas las noticias',
    'LBL_SOURCE_CODE' => 'Código fuente',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
    'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Un motor de plantillas para PHP creado por Barnabás Debreceni',
    'LBL_SOURCE_NUSOAP' => 'NuSOAP - Un conjunto de clases PHP que permiten a los desarrolladores crear y consumir servicios web creado por NuSphere Corporation y Dietrich Ayala',
    'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Un calendario para introducir fechas creado por Mihai Bazon',
    'LBL_SOURCE_PHPPDF' => 'PHP PDF - Una librería para crear documentos PDF creado por Wayne Munro',
    'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Una implementación de servidor WebDAV en PHP',
    'LBL_SOURCE_PCLZIP' => 'PclZip - libería que ofrece funciones de compresión y extracción para archivos Zip, por Vincent Blavet',
    'LBL_SOURCE_SMARTY' => 'Smarty - Un motor de plantillas para PHP',
    'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - La biblioteca de utilidades de interfaz gráfica facilita la implementación de características para un cliente con una interfaz rico',
    'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Una clase para transferencia de e-Mail para PHP con características completas',
    'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
    'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Permite una rápida encriptación blowfish en ambos sentidos sin requerir la extensión PHP MCrypt',
    'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Un analizador SAX para HTML y otros documentos con XML mal formado',
    'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensiones para la Yahoo! User Interface Library, por Jack Slocum',
    'LBL_SOURCE_SWFOBJECT' => 'SWFObject - detección JavaScript y script de incrustación del reproductor de Flash',
    'LBL_SOURCE_TINYMCE' => 'TinyMCE - Control de edición WYSIWYG para navegadores web que permite al usuario editar el contenido HTML',
    'LBL_SOURCE_EXT' => 'Ext - Framework JavaScript para clientes de aplicaciones web',
    'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Un servicio CAPTCHA gratuito que ayuda a digitalizar libros, periódicos y los programas de radio de toda la vida',
    'LBL_SOURCE_TCPDF' => 'TCPDF - Una clase PHP para generar documentos PDF',
    'LBL_SOURCE_CSSMIN' => 'CssMin - un convertidor y reductor de css.',
    'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Herramienta simple de SAML para PHP.',
    'LBL_SOURCE_ISCROLL' => 'iScroll - El overflow:scroll para webkit móvil.  Scrolling nativo dentro de un elemento con ancho y alto',
    'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas es una librería de JavaScript que agrega soporte HTML5 para Internet Explorer. Renderiza formas e imágenes via API de dibujo de Flash. Soporta la mayoría de los APIs de dibujo y, en muchos casos, se ejecuta más rápido que otras librerías similares que usan VML o Silverlight',
    'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - El JavaScript InfoVis Toolkit proporciona herramientas para crear visualizaciones de datos interactivas para la Web.',
    'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
    'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser for PHP',
    'LBL_SOURCE_PHPJS' => 'php.js - Use PHP functions in JavaScript',
    'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
    'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
    'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
    'LBL_SOURCE_ELASTICA' => 'Elastica - PHP client for the distributed search engine elasticsearch ',
    'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
    'LBL_SOURCE_JQUERY' => 'jQuery - jQuery is a fast, small, and feature-rich JavaScript library.',
    'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
    'LBL_SOURCE_OVERLIB' => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

  'LBL_DASHLET_TITLE' => 'Mis sitios',
  'LBL_DASHLET_OPT_TITLE' => 'Título',
  'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
  'LBL_DASHLET_OPT_URL' => 'Dirección del sitio web',
  'LBL_DASHLET_OPT_HEIGHT' => 'Altura del Dashlet (en pixeles)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM News',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Discover SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Más Detalles' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Búsqueda Full-Text',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificaciones',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Creación rápida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => 'Acerca de',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM is a fork of SugarCRM. There are many articles on the web that explain the reasons why a fork of SugarCRM became necessary.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - GPL3',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM is completely compatible with SugarCRM 6.5.x',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

);
