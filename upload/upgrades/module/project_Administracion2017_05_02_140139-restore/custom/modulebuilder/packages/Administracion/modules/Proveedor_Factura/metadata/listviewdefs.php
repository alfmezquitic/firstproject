<?php
$module_name = 'admin_Proveedor_Factura';
$OBJECT_NAME = 'ADMIN_PROVEEDOR_FACTURA';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'JL_SERIE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JL_SERIE',
    'width' => '10%',
    'default' => true,
  ),
  'JL_FECHA_FACTURA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_JL_FECHA_FACTURA',
    'width' => '10%',
    'default' => true,
  ),
  'ADMIN_PROVEEDOR_ADMIN_PROVEEDOR_FACTURA_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ADMIN_PROVEEDOR_ADMIN_PROVEEDOR_FACTURA_FROM_ADMIN_PROVEEDOR_TITLE',
    'id' => 'ADMIN_PROVEEDOR_ADMIN_PROVEEDOR_FACTURAADMIN_PROVEEDOR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'JL_TOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_SALDO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_SALDO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'JL_SUBTOTAL' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_JL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_IVA' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_JL_IVA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_RETENCIONISR' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_JL_RETENCIONISR',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_VALIDACIONSAT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_JL_VALIDACIONSAT',
    'width' => '10%',
  ),
  'JL_RETENCIONIVA' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_JL_RETENCIONIVA',
    'currency_format' => true,
    'width' => '10%',
  ),
);
?>
