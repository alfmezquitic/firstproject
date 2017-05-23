<?php
$module_name='admin_Proveedor_Factura';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'admin_Proveedor_Factura',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'object_image' => 
    array (
      'widget_class' => 'SubPanelIcon',
      'width' => '2%',
      'image2' => 'attachment',
      'image2_url_field' => 
      array (
        'id_field' => 'selected_revision_id',
        'filename_field' => 'selected_revision_filename',
      ),
      'attachment_image_only' => true,
      'default' => true,
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'jl_total' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_JL_TOTAL',
      'currency_format' => true,
      'width' => '10%',
    ),
    'jl_saldo' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_JL_SALDO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'status' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DOC_STATUS',
      'width' => '10%',
      'default' => true,
    ),
    'jl_validacionsat' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_JL_VALIDACIONSAT',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'admin_Proveedor_Factura',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'admin_Proveedor_Factura',
      'width' => '5%',
      'default' => true,
    ),
  ),
);