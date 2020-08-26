<?php
$wp_customize->add_section('social', array(
    'title' => __('Social', 'custom_social_section'),  //Visible title of section
    'priority' => 60, //Determines what order this appears in
));

$wp_customize->add_setting('facebook', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_facebook', //Set a unique ID for the control
    array(
        'label' => __('Facebook', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'facebook', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));


$wp_customize->add_setting('instagram', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_instagram', //Set a unique ID for the control
    array(
        'label' => __('Instagram', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'instagram', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

$wp_customize->add_setting('youtube', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_youtube', //Set a unique ID for the control
    array(
        'label' => __('Youtube', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'youtube', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));


$wp_customize->add_setting('whatsapp', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_whatsapp', //Set a unique ID for the control
    array(
        'label' => __('Whatsapp', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'whatsapp', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));


$wp_customize->add_setting('twitter', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_twitter', //Set a unique ID for the control
    array(
        'label' => __('Twitter', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'twitter', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));