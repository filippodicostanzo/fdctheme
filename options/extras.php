<?php

$wp_customize->add_section('extras', array(
    'title' => __('Extras', 'custom_general_section'),  //Visible title of section
    'priority' => 116, //Determines what order this appears in
));

/**
 *
 * GOOGLE
 *
 */

$wp_customize->add_setting('section_title_extras_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_extras_1',
        array(
            'label' => 'GOOGLE',
            'divider' => false,
            'section' => 'extras',
            'settings' => 'section_title_extras_1',
        )
    )
);


$wp_customize->add_setting('google_api_key', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_google_api_key', //Set a unique ID for the control
    array(
        'label' => __('Google Api Key', 'google_api_key'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'google_api_key', //Which setting to load and manipulate (serialized is okay)
        'section' => 'extras', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));