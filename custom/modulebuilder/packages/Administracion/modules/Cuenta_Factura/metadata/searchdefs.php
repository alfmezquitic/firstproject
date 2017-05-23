<?php
$module_name = 'admin_Cuenta_Factura';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'document_name',
    ),
    'advanced_search' => 
    array (
      'jl_serie' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JL_SERIE',
        'width' => '10%',
        'default' => true,
        'name' => 'jl_serie',
      ),
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'jl_fechafactura' => 
      array (
        'type' => 'date',
        'label' => 'LBL_JL_FECHAFACTURA',
        'width' => '10%',
        'default' => true,
        'name' => 'jl_fechafactura',
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'jl_total' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_JL_TOTAL',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'jl_total',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
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
