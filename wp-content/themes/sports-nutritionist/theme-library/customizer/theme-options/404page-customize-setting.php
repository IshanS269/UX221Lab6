<?php
/**
 * 404 page
 *
 * @package sports_nutritionist
 */

/*=========================================
404 Page
=========================================*/
$wp_customize->add_section(
	'404_pg_options', array(
		'title' => esc_html__( '404 Page', 'sports-nutritionist' ),
		'panel' => 'sports_nutritionist_theme_options',
	)
);

/*=========================================
404 Page
=========================================*/
$wp_customize->add_setting(
	'sports_nutritionist_pg_404_head_options'
		,array(
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'sports_nutritionist_sanitize_text',
	)
);

$wp_customize->add_control(
'sports_nutritionist_pg_404_head_options',
	array(
		'type' => 'hidden',
		'label' => __('404 Page','sports-nutritionist'),
		'section' => '404_pg_options',
	)
);

//  Title // 
$wp_customize->add_setting(
	'sports_nutritionist_pg_404_ttl',
	array(
        'default'			=> __('404 Page Not Found','sports-nutritionist'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'sports_nutritionist_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'sports_nutritionist_pg_404_ttl',
	array(
	    'label'   => __('Title','sports-nutritionist'),
	    'section' => '404_pg_options',
		'type'           => 'text',
	)  
);

$wp_customize->add_setting('sports_nutritionist_pg_404_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sports_nutritionist_pg_404_image', array(
        'label'    => __('404 Page Image', 'sports-nutritionist'),
        'section'  => '404_pg_options', // Add this section if it doesn't exist
        'settings' => 'sports_nutritionist_pg_404_image',
    )));

    // Existing settings for 404 title, text, button label, and link
    $wp_customize->add_setting('sports_nutritionist_pg_404_ttl', array(
        'default'           => '404 Page Not Found',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sports_nutritionist_pg_404_ttl', array(
        'label'    => __('404 Page Title', 'sports-nutritionist'),
        'section'  => '404_pg_options',
        'settings' => 'sports_nutritionist_pg_404_ttl',
    ));

    $wp_customize->add_setting('sports_nutritionist_pg_404_text', array(
        'default'           => 'Apologies, but the page you are seeking cannot be found.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('sports_nutritionist_pg_404_text', array(
        'label'    => __('404 Page Text', 'sports-nutritionist'),
        'section'  => '404_pg_options',
        'settings' => 'sports_nutritionist_pg_404_text',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('sports_nutritionist_pg_404_btn_lbl', array(
        'default'           => 'Go Back Home',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('sports_nutritionist_pg_404_btn_lbl', array(
        'label'    => __('404 Button Label', 'sports-nutritionist'),
        'section'  => '404_pg_options',
        'settings' => 'sports_nutritionist_pg_404_btn_lbl',
    ));

    $wp_customize->add_setting('sports_nutritionist_pg_404_btn_link', array(
        'default'           => esc_url(home_url('/')),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('sports_nutritionist_pg_404_btn_link', array(
        'label'    => __('404 Button Link', 'sports-nutritionist'),
        'section'  => '404_pg_options',
        'settings' => 'sports_nutritionist_pg_404_btn_link',
    ));