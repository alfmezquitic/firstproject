<?php
$module_name = 'admin_Banco_Cuenta';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'admin_banco_admin_banco_cuenta_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ADMIN_BANCO_ADMIN_BANCO_CUENTA_FROM_ADMIN_BANCO_TITLE',
        'id' => 'ADMIN_BANCO_ADMIN_BANCO_CUENTAADMIN_BANCO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'admin_banco_admin_banco_cuenta_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'admin_banco_admin_banco_cuenta_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ADMIN_BANCO_ADMIN_BANCO_CUENTA_FROM_ADMIN_BANCO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ADMIN_BANCO_ADMIN_BANCO_CUENTAADMIN_BANCO_IDA',
        'name' => 'admin_banco_admin_banco_cuenta_name',
      ),
      'jl_tipocuenta' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_JL_TIPOCUENTA',
        'width' => '10%',
        'default' => true,
        'name' => 'jl_tipocuenta',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
