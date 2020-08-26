<?php


$wp_customize->add_section('logo', array(
    'title' => __('Logo', 'custom_header_section'),  //Visible title of section
    'priority' => 40, //Determines what order this appears in
));

/**
 *
 * MAIN LOGO
 *
 */

$wp_customize->add_setting('logo_main', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_logo_main',
        array(
            'label' => __('Main Logo', 'fdctheme'),
            'section' => 'logo',
            'settings' => 'logo_main',
            'context' => 'your_setting_context',
            'default' => '100'
        )
    )
);


$wp_customize->add_setting('logo_height', array(
    'transport' => 'refresh', //Autorefresh
    'default' => 100
));


$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_logo_height', //Set a unique ID for the control
    array(
        'label' => __('Logo Height', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'logo_height', //Which setting to load and manipulate (serialized is okay)
        'section' => 'logo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));


/**
 *
 * MOBILE LOGO
 *
 */

$wp_customize->add_setting('logo_mobile', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_logo_mobile',
        array(
            'label' => __('Mobile Logo', 'fdctheme'),
            'section' => 'logo',
            'settings' => 'logo_mobile',
        )
    )
);


$wp_customize->add_setting('logo_mobile_height', array(
    'transport' => 'refresh', //Autorefresh
    'default' => '100'
));


$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_logo_mobile_height', //Set a unique ID for the control
    array(
        'label' => __('Logo Mobile Height', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'logo_mobile_height', //Which setting to load and manipulate (serialized is okay)
        'section' => 'logo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));




/**
 *
 * STICKY LOGO
 *
 */

$wp_customize->add_setting('logo_sticky', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_logo_sticky',
        array(
            'label' => __('Sticky Logo', 'fdctheme'),
            'section' => 'logo',
            'settings' => 'logo_sticky',
        )
    )
);


$wp_customize->add_setting('logo_sticky_height', array(
    'transport' => 'refresh', //Autorefresh
    'default' => '100'
));


$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_logo_sticky_height', //Set a unique ID for the control
    array(
        'label' => __('Logo Sticky Height', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'logo_sticky_height', //Which setting to load and manipulate (serialized is okay)
        'section' => 'logo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));