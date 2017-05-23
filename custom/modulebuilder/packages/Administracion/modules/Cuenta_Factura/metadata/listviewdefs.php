<?php
$module_name = 'admin_Cuenta_Factura';
$OBJECT_NAME = 'ADMIN_CUENTA_FACTURA';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '10%',
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
  'JL_FECHAFACTURA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_JL_FECHAFACTURA',
    'width' => '10%',
    'default' => true,
  ),
  'JL_SUBTOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_IVA' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_IVA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'JL_TOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_JL_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
?>
