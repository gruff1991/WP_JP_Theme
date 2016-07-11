<?php
/**
*function file to set up functionality for jobping theme
*/

function jobping_theme_setup(){//set up theme

	//add support for logo
	add_theme_support('custom-logo',array(
		'height'    =>100,
		'width'     =>100,
		'flex-width'=>true,
		'flex-height'=>true,
		'header-text'=> array('site-title','site-description'),
  	));
	
	add_theme_support('title-tag');//wordpress provides title
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
	
	/*
	* add array for custom header and add theme support for
	* custom header.
	*/
    $jobping_header_settings = array(
		'default-image'         =>'',
		'width'                 =>'1366',
		'height'                =>'250',
		'flex-width'            =>'true',
		'flex-height'           =>'true',
		'uploads'               =>'true',
		'header-text'           =>'true',
		'default-text-color'    => '',
		'wp-head-callback'      => '',
		'admin-head-callback'   => '',
		'admin-preview-callback'=> '',
    );
	add_theme_support('custom-header',$jobping_header_settings);
	
	/*
	* add support for custom backgrounds.
	*/
	//add custom background arguments
    $defaults = array(
		'default-color'          => '',
		'default-image'          => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
}
add_action('after_setup_theme','jobping_theme_setup');

//enqueue style sheets
function enqueue_styles_jobping(){
	
    wp_enqueue_style(
		'jobping.css',
		get_template_directory_uri() . '/css/jobping.css',
		array(),
		'0.0.1',
		'all',
	);
}

//call the function for css
add_action('wp_enqueue_scripts', 'enqueue_styles_jobping');

//output logout
function jobping_logo_output(){
    if (function_exists('the_custom_logo')){
        the_custom_logo();
    }
}

//register navigation menu
function jobping_register_nav(){
    //register nav menu
    register_nav_menus(array(
        'jobping_primary_navigation'    =>'Primary navigation',
        'jobping_js_login'              =>'Job Searchers Login',
        'jobping_rec_login'             =>'Recruiters Login',
        'jobping_footer_menu'           =>'Footer Menu',
        'jobping_js_loggedin'           =>'Logged In Job Searcher',
        'jobping_rec_leggedin'          =>'Logged In Recruiter',
    ));
}
//add action to enable menus
add_action('init','jobping_register_nav');

?>
