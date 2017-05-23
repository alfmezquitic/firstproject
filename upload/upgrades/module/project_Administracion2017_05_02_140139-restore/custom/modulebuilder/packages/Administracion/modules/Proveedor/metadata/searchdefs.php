<?php
$module_name = 'admin_Proveedor';
$_module_name = 'admin_proveedor';
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
      'jl_razonsocial' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JL_RAZONSOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'jl_razonsocial',
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
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'website' => 
      array (
        'name' => 'website',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'admin_proveedor_type' => 
      array (
        'name' => 'admin_proveedor_type',
        'default' => true,
        'width' => '10%',
      ),
      'jl_tipo_servicio' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_JL_TIPO_SERVICIO',
        'width' => '10%',
        'name' => 'jl_tipo_servicio',
      ),
      'jl_razonsocial' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JL_RAZONSOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'jl_razonsocial',
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
