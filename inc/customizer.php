<?php
/**
 * Adventure Us Theme Customizer.
 *
 * @package Adventure Us
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function adventure_us_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// remove Tagline
	$wp_customize->remove_section( 'blogdescription' );
	$wp_customize->remove_control('blogdescription');

	// Adds Site Quote Section
	$wp_customize->add_section( 'site_quote', array(
    'title'          => __( 'Site Quote', 'themename' ),
    'priority'       => 35,
) );
	$wp_customize->add_setting( 'site_quote', array(
		  'default'        => '',
	    'type'           => 'theme_mod',
	    'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'site_quote', array(
    'label'      => __( 'Site Quote', 'themename' ),
    'section'    => 'site_quote',
    'settings'   => 'site_quote',
    'type'       => 'text',
	) );
	// Adds Custom Logo Settings
	$wp_customize->add_section( 'site_logo', array(
		'title'          => __( 'Site Logo', 'themename' ),
		'priority'       => 35,
	) );
	$wp_customize->add_setting( 'site_logo', array(
			'default'        => '',
			'type'           => 'theme_mod',
			'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'site_logo',
           array(
               'label'      => __( 'Upload a logo', 'theme_name' ),
               'section'    => 'site_logo',
               'settings'   => 'site_logo',
               'context'    => 'site_logo' 
           )
       )
   );
}



add_action( 'customize_register', 'adventure_us_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adventure_us_customize_preview_js() {
	wp_enqueue_script( 'adventure_us_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'adventure_us_customize_preview_js' );
