<?php
$module_name = 'admin_Proveedor_Factura';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'customCode' => '{if $fields.id.value!=""}
            				{assign var="type" value="hidden"}
            		 		{else}
            		 		{assign var="type" value="file"}
            		  		{/if}
            		  		<input name="uploadfile" type = {$type} size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}',
            'displayParams' => 
            array (
              'required' => true,
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
            'name' => 'exp_date',
            'label' => 'LBL_DOC_EXP_DATE',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'jl_subtotal',
            'label' => 'LBL_JL_SUBTOTAL',
          ),
        ),
        4 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'jl_iva',
            'label' => 'LBL_JL_IVA',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'jl_total',
            'label' => 'LBL_JL_TOTAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'jl_retencioniva',
            'label' => 'LBL_JL_RETENCIONIVA',
          ),
          1 => 
          array (
            'name' => 'jl_retencionisr',
            'label' => 'LBL_JL_RETENCIONISR',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
          1 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => 10,
              'cols' => 120,
            ),
          ),
          1 => 
          array (
            'name' => 'admin_proveedor_admin_proveedor_factura_name',
            'label' => 'LBL_ADMIN_PROVEEDOR_ADMIN_PROVEEDOR_FACTURA_FROM_ADMIN_PROVEEDOR_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
