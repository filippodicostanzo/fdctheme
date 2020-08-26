<?php
include(get_template_directory() . '/lib/googlefonts/Google_Font_Dropdown_Custom_Control.php');
include(get_template_directory() . '/lib/prefixseparator/Prefix_Separator_Control.php');
include (get_template_directory() . '/lib/variables/variables.php');

$wp_customize->add_section('section_fonts', array(
    'title' => esc_html__('Fonts', 'fdctheme'),
    'priority' => 100,
));

/* ---------------------------------------------------------------------------
 * Main Google Fonts
 * --------------------------------------------------------------------------- */
$wp_customize->add_setting('main_google_font_list', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'main_google_font_list', array(
    'label' => __('Main Google Font Family', 'fdctheme'),
    'section' => 'section_fonts',
    'settings' => 'main_google_font_list',
)));

$wp_customize->add_setting('main_google_font_size', array(
    'default' => '12',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_main_google_font_size', //Set a unique ID for the control
    array(
        'label' => __('Main Google Font Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'main_google_font_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'section_fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('main_google_font_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_main_google_font_weight', //Set a unique ID for the control
    array(
        'label' => __('Main Google Font Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'main_google_font_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'section_fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));


// separator
$wp_customize->add_setting( 'prefix_sample_separator_1', array(
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control(
    new Prefix_Separator_Control(
        $wp_customize,
        'prefix_sample_separator_1',
        array(
            'section' => 'section_fonts',
        )
    )
);

/* ---------------------------------------------------------------------------
 * Title Google Fonts
 * --------------------------------------------------------------------------- */

$wp_customize->add_setting('font_title_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_title_family', array(
    'label' => __('Font Title Family', 'fdctheme'),
    'section' => 'section_fonts',
    'settings' => 'font_title_family',
)));

$wp_customize->add_setting('font_title_size', array(
    'default' => 20,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_title_size', //Set a unique ID for the control
    array(
        'label' => __('Font Title Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_title_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'section_fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_title_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_title_weight', //Set a unique ID for the control
    array(
        'label' => __('Main Google Font Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_title_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'section_fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting( 'prefix_sample_separator_2', array(
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control(
    new Prefix_Separator_Control(
        $wp_customize,
        'prefix_sample_separator_2',
        array(
            'section' => 'section_fonts',
        )
    )
);