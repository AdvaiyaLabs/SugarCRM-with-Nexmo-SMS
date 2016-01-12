<?php

    $admin_option_defs = array();
    $admin_option_defs['Administration']['Nexmo Api'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'Administration',
        
        //Link name label 
        'Configuration Settings',
        
        //Link description label
        'Configuration Settings of SugarCRM with Nexmo SMS App',
        './index.php?module=Nexmo&action=config',
        
    );

    $admin_group_header[] = array(
        //Section header label
        'SugarCRM with Nexmo SMS settings',
        
        //$other_text parameter for get_form_header()
        '',
        
        //$show_help parameter for get_form_header()
        false,
        
        //Section links
        $admin_option_defs, 
        
        //Section description label
        'Please give following details to configure SugarCRM with NEXMO SMS'
    );