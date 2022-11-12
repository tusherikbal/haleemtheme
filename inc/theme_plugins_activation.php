<?php
//tgm plugin activation part. 


function my_theme_register_required_plugins(){
    $plugins = array(
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required'           => true,
            
        ),

        array(
            'name' => 'Advanced Custom Fields: Font Awesome Field',
            'slug' => 'advanced-custom-fields-font-awesome',
            'required'           => true
            
        ),
        array(
            'name' => 'Theme Features',
            'slug' => 'theme-features',
            'source' => get_template_directory().'/plugins/theme-features',
            'required'           => true
            
        ),
        array(
            'name' => 'ACF PRO',
            'slug' => 'advanced-custom-fields-pro',
            'source' => get_template_directory().'/plugins/advanced-custom-fields-pro',
            'required'           => true
            
        ),
        array(
            'name' => 'One Click demo Import',
            'slug' => 'one-click-demo-import',
            'required'           => true
            
        ),
    );

    $config = array(
        array(
            'id'=> 'halim-plugin-activate',
            'menu'=>'halim-plugin-activation',
            'parent_slug'  => 'themes.php', 
            'has_notices'  => true,
        )
        );

        tgmpa( $plugins, $config );

}





add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
