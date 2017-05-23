<?php
$module_name = 'admin_Proveedor_Factura';
$_object_name = 'admin_proveedor_factura';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => true,
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
          0 => 'uploadfile',
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
          0 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        7 => 
        array (
          0 => 'description',
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
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
