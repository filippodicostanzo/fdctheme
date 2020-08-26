<?php
$wp_customize->add_section('action_bar', array(
    'title' => __('Action Bar', 'title_action_bar'),  //Visible title of section
    'priority' => 30, //Determines what order this appears in
));

/**
 *
 * ACTION BAR STYLE
 *
 */

$wp_customize->add_setting('section_title_action_bar_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_action_bar_1',
        array(
            'label' => 'LAYOUT TYPE',
            'divider' => false,
            'section' => 'action_bar',
            'settings' => 'section_title_action_bar_1',
        )
    )
);

$wp_customize->add_setting('action_bar_enable', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_action_bar_enable', //Set a unique ID for the control
    array(
        'label' => __('Action Bar Enable', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'action_bar_enable', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('action_bar_background', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_action_bar_background', array(
        'label' => __('Background Color', 'fdctheme'),
        'settings' => 'action_bar_background',
        'section' => 'action_bar',
    )
));

$wp_customize->add_setting('action_bar_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_action_bar_color',
    array(
        'label' => __('Text Color', 'fdctheme'),
        'settings' => 'action_bar_color',
        'section' => 'action_bar',
    )
));


$wp_customize->add_setting('action_bar_color_hover', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_action_bar_color_hover',
    array(
        'label' => __('Text Color Hover', 'fdctheme'),
        'settings' => 'action_bar_color_hover',
        'section' => 'action_bar',
    )
));



$wp_customize->add_setting('section_title_action_bar_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_action_bar_2',
        array(
            'label' => 'SHOW ON ACTION BAR',
            'divider' => true,
            'section' => 'action_bar',
            'settings' => 'section_title_action_bar_2',
        )
    )
);


$wp_customize->add_setting('address_enable_desktop', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_address_enable_desktop', //Set a unique ID for the control
    array(
        'label' => __('Address Enable Desktop', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'address_enable_desktop', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('email_enable_desktop', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_email_enable_desktop', //Set a unique ID for the control
    array(
        'label' => __('Email Enable Desktop', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'email_enable_desktop', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('phone_1_enable_desktop', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_phone_1_enable_desktop', //Set a unique ID for the control
    array(
        'label' => __('Phone 1 Enable Desktop', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'phone_1_enable_desktop', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('phone_2_enable_desktop', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_phone_2_enable_desktop', //Set a unique ID for the control
    array(
        'label' => __('Phone 2 Enable Desktop', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'phone_2_enable_desktop', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('section_title_action_bar_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_action_bar_3',
        array(
            'label' => 'SHOW ON MOBILE ACTION BAR',
            'divider' => true,
            'section' => 'action_bar',
            'settings' => 'section_title_action_bar_3',
        )
    )
);


$wp_customize->add_setting('address_enable_mobile', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_address_enable_mobile', //Set a unique ID for the control
    array(
        'label' => __('Address Enable Mobile', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'address_enable_mobile', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('email_enable_mobile', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_email_enable_mobile', //Set a unique ID for the control
    array(
        'label' => __('Email Enable Mobile', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'email_enable_mobile', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('phone_1_enable_mobile', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_phone_1_enable_mobile', //Set a unique ID for the control
    array(
        'label' => __('Phone 1 Enable Mobile', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'phone_1_enable_mobile', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('phone_2_enable_mobile', array(
    'default' => 1, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_phone_2_enable_mobile', //Set a unique ID for the control
    array(
        'label' => __('Phone 2 Enable Mobile', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'phone_2_enable_mobile', //Which setting to load and manipulate (serialized is okay)
        'section' => 'action_bar', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));
