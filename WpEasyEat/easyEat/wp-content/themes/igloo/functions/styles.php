<?php
add_action('init', 'ci_register_theme_styles');
if( !function_exists('ci_register_theme_styles') ):
function ci_register_theme_styles()
{
	//
	// Register all front-end and admin styles here. 
	// There is no need to register them conditionally, as the enqueueing can be conditional.
	//
	wp_register_style('ci-google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,400italic,700|Alegreya:700italic,400,400italic');

	wp_register_style('foundation', get_child_or_parent_file_uri('/css/foundation.css'));
	wp_register_style('ci-mediaqueries', get_child_or_parent_file_uri('/css/mediaqueries.css'));
	wp_register_style('flexslider', get_child_or_parent_file_uri('/css/flexslider.css'));
	wp_register_style( 'jquery-ui-style', get_child_or_parent_file_uri( '/css/admin/jquery-ui.css' ), array(), '1.10.4' );
	wp_register_style( 'jquery-ui-datepicker', get_child_or_parent_file_uri( '/css/admin/datepicker.css' ), array(
		'jquery-ui-style',
	) );
	wp_register_style( 'jquery-ui-timepicker', get_child_or_parent_file_uri( '/css/admin/jquery-ui-timepicker-addon.css' ), array(
		'jquery-ui-style',
		'jquery-ui-datepicker',
	) );
	wp_register_style('ci-color-scheme', get_child_or_parent_file_uri('/colors/'.ci_setting('stylesheet')));
	wp_register_style('ci-style', get_stylesheet_uri(), array(), CI_THEME_VERSION, 'screen');
}
endif;

add_action('wp_enqueue_scripts', 'ci_enqueue_theme_styles');
if( !function_exists('ci_enqueue_theme_styles') ):
function ci_enqueue_theme_styles()
{
	//
	// Enqueue all (or most) front-end styles here.
	//	

	wp_enqueue_style('ci-google-fonts');
	wp_enqueue_style('foundation');
	wp_enqueue_style('ci-style');
	wp_enqueue_style('ci-mediaqueries');
	wp_enqueue_style('flexslider');
	wp_enqueue_style('ci-color-scheme');

	if ( is_page_template( 'template-reservation.php' ) ) {
		wp_enqueue_style( 'jquery-ui-timepicker' );
	}
}
endif;


add_action('admin_enqueue_scripts','ci_enqueue_admin_theme_styles');
if( !function_exists('ci_enqueue_admin_theme_styles') ):
function ci_enqueue_admin_theme_styles() 
{
	global $pagenow;

	//
	// Enqueue here styles that are to be loaded on all admin pages.
	//

	if(is_admin() and $pagenow=='themes.php' and isset($_GET['page']) and $_GET['page']=='ci_panel.php')
	{
		//
		// Enqueue here styles that are to be loaded only on CSSIgniter Settings panel.
		//

	}
}
endif;

?>
