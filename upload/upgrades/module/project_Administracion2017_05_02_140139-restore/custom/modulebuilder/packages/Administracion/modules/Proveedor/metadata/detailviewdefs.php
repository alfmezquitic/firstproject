<?php
$module_name = 'admin_Proveedor';
$_object_name = 'admin_proveedor';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'phone_alternate',
        ),
        2 => 
        array (
          0 => 'rating',
          1 => 
          array (
            'name' => 'jl_tipo_servicio',
            'studio' => 'visible',
            'label' => 'LBL_JL_TIPO_SERVICIO',
          ),
        ),
        3 => 
        array (
          0 => 'email1',
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'jl_logo',
            'studio' => 'visible',
            'label' => 'LBL_JL_LOGO',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jl_razonsocial',
            'label' => 'LBL_JL_RAZONSOCIAL',
          ),
          1 => 
          array (
            'name' => 'jl_rfc',
            'label' => 'LBL_JL_RFC',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'jl_curp',
            'label' => 'LBL_JL_CURP',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'jl_representantelegal',
            'label' => 'LBL_JL_REPRESENTANTELEGAL',
          ),
          1 => 
          array (
            'name' => 'jl_representantepuesto',
            'label' => 'LBL_JL_REPRESENTANTEPUESTO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jl_facturacioncalle',
            'label' => 'LBL_JL_FACTURACIONCALLE',
          ),
          1 => 
          array (
            'name' => 'jl_numeroexterior',
            'label' => 'LBL_JL_NUMEROEXTERIOR',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'jl_numerointerior',
            'label' => 'LBL_JL_NUMEROINTERIOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jl_numero_escritura',
            'label' => 'LBL_JL_NUMERO_ESCRITURA',
          ),
          1 => 
          array (
            'name' => 'jl_nombre_notario',
            'label' => 'LBL_JL_NOMBRE_NOTARIO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'jl_registropublico',
            'label' => 'LBL_JL_REGISTROPUBLICO',
          ),
          1 => 
          array (
            'name' => 'jl_poblacion',
            'label' => 'LBL_JL_POBLACION',
          ),
        ),
      ),
      'lbl_detailview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
