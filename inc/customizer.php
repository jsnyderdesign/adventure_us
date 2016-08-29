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
		$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_control('colors');

	// Adds Site Quote Section
	$wp_customize->add_section( 'site_quote', array(
    'title'          => __( 'Site Quote', 'themename' ),
    'priority'       => 36,
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
	 // Adds Featured Title Section
 	$wp_customize->add_section( 'featured_title', array(
     'title'          => __( 'Featured Post Title', 'themename' ),
     'priority'       => 40,
 ) );
 	$wp_customize->add_setting( 'featured_title', array(
 		  'default'        => '',
 	    'type'           => 'theme_mod',
 	    'capability'     => 'edit_theme_options',
 	) );
 	$wp_customize->add_control( 'featured_title', array(
     'label'      => __( 'Featured Post Title', 'themename' ),
     'section'    => 'featured_title',
     'settings'   => 'featured_title',
     'type'       => 'text',
 	) );
	// Adds Regular Title Section
 $wp_customize->add_section( 'regular_title', array(
		'title'          => __( 'Secondary Post Title', 'themename' ),
		'priority'       => 41,
) );
 $wp_customize->add_setting( 'regular_title', array(
		 'default'        => '',
		 'type'           => 'theme_mod',
		 'capability'     => 'edit_theme_options',
 ) );
 $wp_customize->add_control( 'regular_title', array(
		'label'      => __( 'Secondary Post Title', 'themename' ),
		'section'    => 'regular_title',
		'settings'   => 'regular_title',
		'type'       => 'text',
 ) );
	// SOCIAL MEDIA BUTTONS STARTING HERE
	$wp_customize->add_section( 'socials',
		array(
			'title'		=> __('Social Icons', 'themename'),
			'priority'	=> 50
		)
	);

	$wp_customize->add_setting(
		'wi_facebook'
	);
	$wp_customize->add_control(
		'wi_facebook',
		array(
			'label'		=> __('Facebook URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 1
		)
	);

	$wp_customize->add_setting(
		'wi_twitter'
	);
	$wp_customize->add_control(
		'wi_twitter',
		array(
			'label'		=> __('Twitter URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 2
		)
	);

	$wp_customize->add_setting(
		'wi_behance'
	);
	$wp_customize->add_control(
		'wi_behance',
		array(
			'label'		=> __('Behance URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 3
		)
	);

	$wp_customize->add_setting(
		'wi_dribbble'
	);
	$wp_customize->add_control(
		'wi_dribbble',
		array(
			'label'		=> __('Dribbble URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 4
		)
	);

	$wp_customize->add_setting(
		'wi_flickr'
	);
	$wp_customize->add_control(
		'wi_flickr',
		array(
			'label'		=> __('Flickr URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 5
		)
	);

	$wp_customize->add_setting(
		'wi_instagram'
	);
	$wp_customize->add_control(
		'wi_instagram',
		array(
			'label'		=> __('Instagram URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 6
		)
	);

	$wp_customize->add_setting(
		'wi_googleplus'
	);
	$wp_customize->add_control(
		'wi_googleplus',
		array(
			'label'		=> __('Google+ URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 7
		)
	);

	$wp_customize->add_setting(
		'wi_youtube'
	);
	$wp_customize->add_control(
		'wi_youtube',
		array(
			'label'		=> __('YouTube URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 8
		)
	);

	$wp_customize->add_setting(
		'wi_vimeo'
	);
	$wp_customize->add_control(
		'wi_vimeo', array(
			'label'		=> __('Vimeo URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 9
		)
	);

	$wp_customize->add_setting(
		'wi_pinterest'
	);
	$wp_customize->add_control(
		'wi_pinterest',
		array(
			'label'		=> __('Pinterest URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 10
		)
	);

	$wp_customize->add_setting(
		'wi_github'
	);
	$wp_customize->add_control(
		'wi_github',
		array(
			'label'		=> __('GitHub URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 11
		)
	);

	$wp_customize->add_setting(
		'wi_linkedin'
	);
	$wp_customize->add_control(
		'wi_linkedin',
		array(
			'label'		=> __('LinkedIn URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 12
		)
	);

	$wp_customize->add_setting(
		'wi_rss'
	);
	$wp_customize->add_control(
		'wi_rss',
		array(
			'label'		=> __('RSS URL', 'themename'),
			'section'	=> 'socials',
			'type'		=> 'text',
			'priority'	=> 13
		)
	);

	// add new section
	$wp_customize->add_section( 'theme_colors', array(
		'title' => __( 'Theme Color', 'bwpy' ),
		'priority' => 100,
	) );

	// add color picker setting
	$wp_customize->add_setting( 'theme_colors', array(
		'default' => '#b98822'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label' => 'Theme Color',
		'section' => 'theme_colors',
		'settings' => 'theme_colors',
	) ) );


}


function bwpy_customizer_head_styles() {
	$theme_color = get_theme_mod( 'theme_colors' );

	if ( $theme_color != '#b98822' ) :
	?>
		<style type="text/css">
			a {
				color: <?php echo $theme_color; ?>;
			}
			nav.main-navigation li a:before, nav.main-navigation li a:after  {
				background: <?php echo $theme_color; ?>;
			}
			nav.main-navigation li a:hover {
				color: <?php echo $theme_color; ?>;
			}
			.featured-post .entry-content .category a, .featured-post .entry-content .category a:visited,
			.regular-post .entry-content .category a, .regular-post .entry-content .category a:visited {
				color: <?php echo $theme_color; ?>;
			}
			.featured-post .entry-meta a, .featured-post .entry-meta a:visited,
			.regular-post .entry-content .entry-meta a, .regular-post .entry-content .entry-meta a:visited {
				color: <?php echo $theme_color; ?>;
			}
			h2.entry-title a:hover {
				color: <?php echo $theme_color; ?>;
			}
			h2.section-title::after {
			 background: <?php echo $theme_color; ?>;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'bwpy_customizer_head_styles' );


add_action( 'customize_register', 'adventure_us_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function adventure_us_customize_preview_js() {
	wp_enqueue_script( 'adventure_us_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'adventure_us_customize_preview_js' );
