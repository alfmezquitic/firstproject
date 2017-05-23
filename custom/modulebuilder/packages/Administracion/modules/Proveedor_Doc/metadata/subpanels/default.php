<?php
$module_name='admin_Proveedor_Doc';
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
      'popup_module' => 'admin_Proveedor_Doc',
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
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),
    'category_id' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SF_CATEGORY',
      'width' => '10%',
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'status' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DOC_STATUS',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'admin_Proveedor_Doc',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'admin_Proveedor_Doc',
      'width' => '5%',
      'default' => true,
    ),
  ),
);