<?php
$wp_customize->add_section('plugins', array(
    'title' => __('Plugins', 'custom_header_section'),  //Visible title of section
    'priority' => 115, //Determines what order this appears in
));

/**
 *
 * SEO METADATA
 *
 */

$wp_customize->add_setting('section_title_plugins_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_plugins_1',
        array(
            'label' => 'OWL CAROUSEL',
            'divider' => false,
            'section' => 'plugins',
            'settings' => 'section_title_plugins_1',
        )
    )
);

$wp_customize->add_setting('owl_carousel_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_owl_carousel_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use OWL Carousel Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'owl_carousel_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'plugins', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));



$wp_customize->add_setting('section_title_plugins_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_plugins_2',
        array(
            'label' => 'SUPREME ICONS',
            'divider' => true,
            'section' => 'plugins',
            'settings' => 'section_title_plugins_2',
        )
    )
);

$wp_customize->add_setting('supreme_icons_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_supreme_icons_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use Supreme Icons Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'supreme_icons_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'plugins', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));



$wp_customize->add_setting('section_title_plugins_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_plugins_3',
        array(
            'label' => 'FLEURDESEL HOTEL ICONS',
            'divider' => true,
            'section' => 'plugins',
            'settings' => 'section_title_plugins_3',
        )
    )
);

$wp_customize->add_setting('fleurdesel_hotel_icons_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_fleurdesel_hotel_icons_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use Fleurdesel Hotel Icons Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'fleurdesel_hotel_icons_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'plugins', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));




$wp_customize->add_setting('section_title_plugins_4', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_plugins_4',
        array(
            'label' => 'JQUERY UI',
            'divider' => true,
            'section' => 'plugins',
            'settings' => 'section_title_plugins_4',
        )
    )
);

$wp_customize->add_setting('jquery_ui_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_jquery_ui_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use jQuery UI Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'jquery_ui_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'plugins', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));



$wp_customize->add_setting('section_title_plugins_5', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_plugins_5',
        array(
            'label' => 'FLATICONS',
            'divider' => true,
            'section' => 'plugins',
            'settings' => 'section_title_plugins_5',
        )
    )
);

$wp_customize->add_setting('flaticon_plugin', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_flaticon_plugin', //Set a unique ID for the control
    array(
        'label' => __('Use Flaticon Plugin', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'flaticon_plugin', //Which setting to load and manipulate (serialized is okay)
        'section' => 'plugins', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));
