<?php
$wp_customize->add_section('social', array(
    'title' => __('Social', 'custom_social_section'),  //Visible title of section
    'priority' => 111, //Determines what order this appears in
));

/**
 *
 * SOCIAL
 *
 */

$wp_customize->add_setting('section_title_social_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_social_1',
        array(
            'label' => 'SOCIAL',
            'divider' => false,
            'section' => 'social',
            'settings' => 'section_title_social_1',
        )
    )
);

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

$wp_customize->add_setting('tripadvisor', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_tripadvisor', //Set a unique ID for the control
    array(
        'label' => __('Tripadvisor', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'tripadvisor', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

$wp_customize->add_setting('linkedin', array(
    'transport' => 'refresh' //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_linkedin', //Set a unique ID for the control
    array(
        'label' => __('Linkedin', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'linkedin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'social', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

