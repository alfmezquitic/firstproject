<?php
$module_name='admin_Banco_Cuenta';
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
      'popup_module' => 'admin_Banco_Cuenta',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'jl_tipocuenta' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_JL_TIPOCUENTA',
      'width' => '10%',
      'default' => true,
    ),
    'jl_saldo' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_JL_SALDO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'admin_Banco_Cuenta',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'admin_Banco_Cuenta',
      'width' => '5%',
      'default' => true,
    ),
  ),
);