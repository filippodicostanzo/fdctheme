<?php
$wp_customize->add_section('seo', array(
    'title' => __('Seo', 'custom_header_section'),  //Visible title of section
    'priority' => 114, //Determines what order this appears in
));

/**
 *
 * SEO METADATA
 *
 */

$wp_customize->add_setting('section_title_seo_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_seo_1',
        array(
            'label' => 'METADATA',
            'divider' => false,
            'section' => 'seo',
            'settings' => 'section_title_seo_1',
        )
    )
);

$wp_customize->add_setting('seo_external_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_seo_external_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use External Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'seo_external_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'seo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));



$wp_customize->add_setting('meta_description', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_meta_description', //Set a unique ID for the control
    array(
        'label' => __('Meta Description', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'meta_description', //Which setting to load and manipulate (serialized is okay)
        'section' => 'seo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

$wp_customize->add_setting('meta_keywords', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_meta_keywords', //Set a unique ID for the control
    array(
        'label' => __('Meta Keywords', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'meta_keywords', //Which setting to load and manipulate (serialized is okay)
        'section' => 'seo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

/**
 *
 * GOOGLE ANALYTICS
 *
 */

$wp_customize->add_setting('section_title_seo_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_seo_2',
        array(
            'label' => 'GOOGLE ANALYTICS',
            'divider' => false,
            'section' => 'seo',
            'settings' => 'section_title_seo_2',
        )
    )
);

$wp_customize->add_setting('google_analytics', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_google_analytics', //Set a unique ID for the control
    array(
        'label' => __('Meta Keywords', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'google_analytics', //Which setting to load and manipulate (serialized is okay)
        'section' => 'seo', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'textarea'
    )
));