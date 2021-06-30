<?php

/* 
    Content

1. Load CSS
2. Load Javascript
3. Load Theme Options
4. Init Menus
5. Remove Navigationpoints from WordPress-Dashboard
*/





//Setup Plugins in here
//Hooks also get in here

//Loads CSS
function load_css()
{
    //Bootstrap CSS
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    // Slider CSS
    wp_register_style('flexslidercss', get_template_directory_uri() . '/css/flexslider.css', array(), false, 'all');
    wp_enqueue_style('flexslidercss');

    //Own CSS for Changing Bootstraps CCS Library
    wp_register_style('maincss', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('maincss');

    //Own CSS for Header only
    wp_register_style('headercss', get_template_directory_uri() . '/css/header.css', array(), false, 'all');
    wp_enqueue_style('headercss');

    //Own CSS for Footer only
    wp_register_style('footercss', get_template_directory_uri() . '/css/footer.css', array(), false, 'all');
    wp_enqueue_style('footercss');
}
add_action('wp_enqueue_scripts','load_css');


//Loads Javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');

    wp_register_script('flexsliderjs', get_template_directory_uri() . '/js/jquery.flexslider-min.js', 'jquery', false, true);
    wp_enqueue_script('flexsliderjs');

    wp_register_script('xlsxjs', get_template_directory_uri() . '/js/xlsx.js', 'jquery', false, true);
    wp_enqueue_script('xlsxjs');
    
    wp_register_script('xlsxReaderjs', get_template_directory_uri() . '/js/xlsxReader.js', 'jquery', false, true);
    wp_enqueue_script('xlsxReaderjs');

    wp_register_script('xlsxUploadjs', get_template_directory_uri() . '/js/xlsxUpload.js', 'jquery', false, true);
    wp_enqueue_script('xlsxUploadjs');

    wp_register_script('xlsxBackupjs', get_template_directory_uri() . '/js/xlsxBackup.js', 'jquery', false, true);
    wp_enqueue_script('xlsxBackupjs');


}
add_action('wp_enqueue_scripts', 'load_js');



//Load Theme Options
add_theme_support('menus');
add_theme_support('widgets');


//Init Menus
register_nav_menus(
    array(
        'top-contact-menu' => 'Top Menu Location for Contact',
        'top-page-menu' => 'Top Menu Location for Page Menu',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

?>