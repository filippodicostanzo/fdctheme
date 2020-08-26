<?php
/**
 *
 * HEADER SECTION
 *
 */


include( get_template_directory() . '/lib/alphacolorpicker/Customize_Alpha_Color_Control.php');

/**
 *
 * ACTION BAR STYLE
 *
 */

$wp_customize->add_setting('section_title_header_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_header_1',
        array(
            'label' => 'LAYOUT TYPE',
            'divider' => false,
            'section' => 'header',
            'settings' => 'section_title_header_1',
        )
    )
);


$wp_customize->add_section('header', array(
    'title' => __('Header', 'custom_header_section'),  //Visible title of section
    'priority' => 40, //Determines what order this appears in
));

$wp_customize->add_setting('header_type', array(
    'default' => 'header_1', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctr_header_type', //Set a unique ID for the control
    array(
        'label' => __('Select Theme Name', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'header_type', //Which setting to load and manipulate (serialized is okay)
        'section' => 'header', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'select',
        'choices' => array(
            'header_1' => 'Header 1',
            'header_2' => 'Header 2',
            'header_3' => 'Header 3',
            'header_4' => 'Header 4',
            'header_5' => 'Header 5',
            'header_6' => 'Header 6',
        )
    )
));

$wp_customize->add_setting(
    'header_background_color',
    array(
        'default'     => 'rgba(209,0,55,0.7)',
        'type'        => 'theme_mod',
        'capability'  => 'edit_theme_options',
        'transport' => 'refresh' //Autorefresh
    )
);

// Alpha Color Picker control.
$wp_customize->add_control(
    new Customize_Alpha_Color_Control(
        $wp_customize,
        'ctrl_header_background_color',
        array(
            'label'         => __( 'Header Background', 'fdctheme' ),
            'section'       => 'header',
            'settings'      => 'header_background_color',
            'show_opacity'  => true, // Optional.
            'palette'	=> array(
                'rgb(150, 50, 220)', // RGB, RGBa, and hex values supported
                'rgba(50,50,50,0.8)',
                'rgba( 255, 255, 255, 0.2 )', // Different spacing = no problem
                '#00CC99' // Mix of color types = no problem
            )
        )
    )
);

$wp_customize->add_setting('mobile_menu_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_mobile_menu_color',
    array(
        'label' => __('Mobile Menu Color', 'fdctheme'),
        'settings' => 'mobile_menu_color',
        'section' => 'header',
    )));



/**
 *
 * HEADER HEIGHT
 *
 */

$wp_customize->add_setting('section_title_header_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_header_2',
        array(
            'label' => 'HEADER HEIGHT',
            'divider' => false,
            'section' => 'header',
            'settings' => 'section_title_header_2',
        )
    )
);

$wp_customize->add_setting('header_height', array(
    'transport' => 'refresh', //Autorefresh
    'default' => 600,

));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_header_height', //Set a unique ID for the control
    array(
        'label' => __('Header Height', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Min 400 - Max 1200'),
        'settings' => 'header_height', //Which setting to load and manipulate (serialized is okay)
        'section' => 'header', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array('min' => 400, 'max' => 1200, 'step' => 2)
    )
));