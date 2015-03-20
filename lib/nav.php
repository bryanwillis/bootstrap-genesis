<?php

/*
function remove_genesis_site_title() {
	remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
	remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

}
add_action( 'after_setup_theme', 'remove_genesis_site_title', 11 );
// */



/*
function bsg_logo()  {
$header = array(
    	'header-selector'        => '.navbar-brand',
	'default-image'          => '',
	'random-default'         => false,
    	'header-text'            => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);
add_theme_support( 'custom-header', $header ); 
}
add_action( 'after_setup_theme', 'bsg_logo' );
// */

function fix_navbar_css_pitfalls() {
	?>
	<style type="text/css">
		.navbar.navbar-static-top + .navbar.navbar-static-top {
    			margin-top: -20px;
    			z-index: auto;
		}
		.navbar.navbar-static-top + .jumbotron {
   			margin-top: -20px;
		}
		.navbar-brand >  img {
  			object-fit: contain;
  			max-height: 100%;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'fix_navbar_css_pitfalls' );





function bsg_customizer_add_navbar_logo() { 
    $output .= '<a class="navbar-brand" id="logo" href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'" rel="home" ><img src="'. esc_url( get_theme_mod( 'link_textcolor' ) ) .'" alt="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'"></a>';
    return $output;
}




function bsg_customize_register( $wp_customize ) {

 $wp_customize->add_section( 'mytheme_options', 
         array(
            'title' => __( 'Branding', 'mytheme' ), //Visible title of section
            'priority' => 35, //Determines what order this appears in
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize some example settings for MyTheme.', 'mytheme'), //Descriptive tooltip
         ) 
      );
$wp_customize->add_setting( 'link_textcolor', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default' => '#2BA6CB', //Default setting/value to save
            'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         ) 
      );     
$wp_customize->add_control( new WP_Customize_Image_Control(
         $wp_customize, 
         'mytheme_link_textcolor', 
         array(
            'label' => __( 'Navbar Logo', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'link_textcolor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );
      
}
add_action( 'customize_register', 'mytheme_customize_register' );



if ( class_exists('UberMenuStandard') ) {
    return;
}
// remove primary & secondary nav from default position
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
// add primary & secondary nav to top of the page
add_action( 'genesis_before', 'genesis_do_nav' );
add_action( 'genesis_before', 'genesis_do_subnav' );

// filter menu args for bootstrap walker and other settings
add_filter( 'wp_nav_menu_args', 'bsg_nav_menu_args_filter' );

// add bootstrap markup around the nav
add_filter( 'wp_nav_menu', 'bsg_nav_menu_markup_filter', 10, 2 );

function bsg_nav_menu_args_filter( $args ) {

    if (
        'primary' === $args['theme_location'] ||
        'secondary' === $args['theme_location']
    ) {
        $args['depth'] = 2;
        $args['menu_class'] = 'nav navbar-nav';
        $args['fallback_cb'] = 'wp_bootstrap_navwalker::fallback';
        $args['walker'] = new wp_bootstrap_navwalker();
    }

    return $args;
}

function bsg_nav_menu_markup_filter( $html, $args ) {
    $data_target = "nav-collapse" . sanitize_html_class( '-' . $args->theme_location );
    $output = <<<EOT
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#{$data_target}">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
EOT;

        if ( 'primary' === $args->theme_location ) {
            $output .= '<a class="navbar-brand" id="logo" href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'" rel="home" ><img src="'. esc_url( get_theme_mod( 'link_textcolor' ) ) .'" alt="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'"></a>';
        }

        $output .= '</div>';

        $output .= "<div class=\"collapse navbar-collapse\" id=\"{$data_target}\">";
            $output .= $html;
        $output .= '</div>'; // .collapse .navbar-collapse
      $output .= '</div>'; // .navbar-header
  $output .= '</div>'; // .container-fluid
$output .= '</nav>'; // .navbar .navbar-default

    return $output;
}
