<?php
$module_name = 'admin_Sucursal_Contacto';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'admin_proveeedor_sucursal_admin_sucursal_contacto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ADMIN_PROVEEEDOR_SUCURSAL_ADMIN_SUCURSAL_CONTACTO_FROM_ADMIN_PROVEEEDOR_SUCURSAL_TITLE',
        'id' => 'ADMIN_PROV954BUCURSAL_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'admin_proveeedor_sucursal_admin_sucursal_contacto_name',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'default' => true,
        'width' => '10%',
      ),
      'admin_proveeedor_sucursal_admin_sucursal_contacto_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ADMIN_PROVEEEDOR_SUCURSAL_ADMIN_SUCURSAL_CONTACTO_FROM_ADMIN_PROVEEEDOR_SUCURSAL_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ADMIN_PROV954BUCURSAL_IDA',
        'name' => 'admin_proveeedor_sucursal_admin_sucursal_contacto_name',
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
