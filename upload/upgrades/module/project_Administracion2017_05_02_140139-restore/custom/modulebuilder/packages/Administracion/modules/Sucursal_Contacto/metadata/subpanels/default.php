<?php
$module_name='admin_Sucursal_Contacto';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'People',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_LIST_NAME',
      'sort_by' => 'last_name',
      'sort_order' => 'asc',
      'widget_class' => 'SubPanelDetailViewLink',
      'module' => 'Contacts',
      'width' => '10%',
      'default' => true,
    ),
    'department' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DEPARTMENT',
      'width' => '10%',
      'default' => true,
    ),
    'email1' => 
    array (
      'name' => 'email1',
      'vname' => 'LBL_LIST_EMAIL',
      'widget_class' => 'SubPanelEmailLink',
      'width' => '10%',
      'sortable' => false,
      'default' => true,
    ),
    'phone_work' => 
    array (
      'name' => 'phone_work',
      'vname' => 'LBL_LIST_PHONE',
      'width' => '15%',
      'default' => true,
    ),
    'jl_whatsapp' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_JL_WHATSAPP',
      'width' => '10%',
      'default' => true,
    ),
    'jl_skype' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_JL_SKYPE',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Contacts',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Contacts',
      'width' => '5%',
      'default' => true,
    ),
    'first_name' => 
    array (
      'name' => 'first_name',
      'usage' => 'query_only',
    ),
    'last_name' => 
    array (
      'name' => 'last_name',
      'usage' => 'query_only',
    ),
    'salutation' => 
    array (
      'name' => 'salutation',
      'usage' => 'query_only',
    ),
  ),
);