<?php 


require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory(). '/inc/theme_plugins_activation.php';
require_once get_template_directory(). '/inc/haleem-demo.php';
require_once get_template_directory(). '/inc/acf-data.php';
require_once(get_theme_file_path('/inc/haleem-customization.php'));




load_theme_textdomain( 'wp-haleem', get_template_directory() . '/languages' );
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


function haleem_setup(){
        
//nav 
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'wp-haleem' ),
        'footer_menu' => __( 'Footer Menu', 'wp-haleem' ),
        
    ) );
}

add_action('after_setup_theme', 'haleem_setup');



 
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );





function haleemtheme_enque() {
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all');

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'owl', get_template_directory_uri().'/assets/css/owl.carousel.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'owl', get_template_directory_uri().'/assets/css/owl.carousel.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'maincss', get_template_directory_uri().'/assets/css/style.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );



    //script

    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'popperjs', get_template_directory_uri().'/assets/js/popper.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'magnificpopup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.min.js',array(), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri().'/assets/js/imageloaded.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'couterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'waypoint', get_template_directory_uri().'/assets/js/waypoint.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'mainjs', get_template_directory_uri().'/assets/js/main.js',array(), '1.0.0', true );

}



add_action( 'wp_enqueue_scripts', 'haleemtheme_enque' );





function acf_css(){
    ?>
    <style>
        .header-top{
            background-color: <?php the_field('background_color', 'option'); ?>;
        }
    </style>

    <?php

}
    add_action('wp_head', 'acf_css');






// register sidebar

function halim_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'wp-haleem' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp-haleem' ),
		'before_widget' => '<p class="widgettitle">',
		'after_widget'  => '</p>',
		'before_title'  => '<h3 class="widgettitlebefore">',
		'after_title'   => '</h3>',
	) );



register_sidebar( array(
		'name'          => __( 'Footer 1', 'wp-haleem' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp-haleem' ),
		'before_widget' => '<div class="single-footer footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );


register_sidebar( array(
		'name'          => __( 'Footer 2', 'wp-haleem' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp-haleem' ),
		'before_widget' => '<div class="single-footer footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );


register_sidebar( array(
		'name'          => __( 'Footer 3', 'wp-haleem' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp-haleem' ),
		'before_widget' => '<div class="single-footer footer-logo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );



}

add_action( 'widgets_init', 'halim_sidebar' );



//acf option page for theme option page


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header ',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    

    acf_add_options_sub_page(array(
        'page_title'    => 'About US',
        'menu_title'    => 'About US',
        'parent_slug'   => 'theme-general-settings',
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Faq and skill',
        'menu_title'    => 'Faq and skill',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Contact page option',
        'menu_title'    => 'Contact page',
        'parent_slug'   => 'theme-general-settings',
    ));

 


}




//wp comments 


function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'move_comment_field' );


// comment field placeholder



function wpse_62742_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        
            . _x(
                'Your name',
                'comment form placeholder',
                'theme_text_domain'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="mail@youremail.com"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="your website link" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}

add_filter( 'comment_form_default_fields', 'wpse_62742_comment_placeholders' );

//for field type textarea | comment box

function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'yourdomain');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );


