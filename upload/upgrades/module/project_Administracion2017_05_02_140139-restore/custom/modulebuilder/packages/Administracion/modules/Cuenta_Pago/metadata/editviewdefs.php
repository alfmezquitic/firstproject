<?php
$module_name = 'admin_Cuenta_Pago';
$_object_name = 'admin_cuenta_pago';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'admin_cuenta_pago_number',
            'type' => 'readonly',
          ),
          1 => 
          array (
            'name' => 'jl_fecha',
            'label' => 'LBL_JL_FECHA',
          ),
        ),
        1 => 
        array (
          0 => 'status',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'jl_monto',
            'label' => 'LBL_JL_MONTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'jl_referencia',
            'label' => 'LBL_JL_REFERENCIA',
          ),
          1 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
            ),
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
