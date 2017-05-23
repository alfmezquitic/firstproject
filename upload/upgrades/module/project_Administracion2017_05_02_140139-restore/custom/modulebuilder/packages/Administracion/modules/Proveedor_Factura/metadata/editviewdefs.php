<?php
$module_name = 'admin_Proveedor_Factura';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          0 => 'document_name',
          1 => 
          array (
            'name' => 'jl_serie',
            'label' => 'LBL_JL_SERIE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
          1 => 
          array (
            'name' => 'jl_fecha_factura',
            'label' => 'LBL_JL_FECHA_FACTURA',
          ),
        ),
        2 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'jl_subtotal',
            'label' => 'LBL_JL_SUBTOTAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'jl_iva',
            'label' => 'LBL_JL_IVA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'jl_total',
            'label' => 'LBL_JL_TOTAL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'jl_retencionisr',
            'label' => 'LBL_JL_RETENCIONISR',
          ),
          1 => 
          array (
            'name' => 'jl_retencioniva',
            'label' => 'LBL_JL_RETENCIONIVA',
          ),
        ),
        6 => 
        array (
          0 => 'status_id',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'admin_proveedor_admin_proveedor_factura_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'titan_orden_trabajo_proveedor_admin_proveedor_factura_name',
          ),
          1 => 
          array (
            'name' => 'titan_orden_servicio_admin_proveedor_factura_name',
          ),
        ),
      ),
    ),
  ),
);
?>
