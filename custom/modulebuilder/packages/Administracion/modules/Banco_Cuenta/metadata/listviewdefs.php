<?php
$module_name = 'admin_Banco_Cuenta';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'JL_TIPOCUENTA' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_JL_TIPOCUENTA',
    'width' => '10%',
    'default' => true,
  ),
  'JL_SALDO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_SALDO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'ADMIN_BANCO_ADMIN_BANCO_CUENTA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ADMIN_BANCO_ADMIN_BANCO_CUENTA_FROM_ADMIN_BANCO_TITLE',
    'id' => 'ADMIN_BANCO_ADMIN_BANCO_CUENTAADMIN_BANCO_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
