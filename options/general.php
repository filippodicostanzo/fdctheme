<?php

$wp_customize->add_section('general', array(
    'title' => __('General', 'custom_general_section'),  //Visible title of section
    'priority' => 20, //Determines what order this appears in
));

/**
 *
 * LAYOUT TYPE
 *
 */

$wp_customize->add_setting('section_title_general_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_general_1',
        array(
            'label' => 'LAYOUT TYPE',
            'divider' => false,
            'section' => 'general',
            'settings' => 'section_title_general_1',
        )
    )
);

$wp_customize->add_setting('onepage_enable', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_onepage_enable', //Set a unique ID for the control
    array(
        'label' => __('One Page', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'onepage_enable', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));


$wp_customize->add_setting('layout_boxed_enable', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_layout_boxed', //Set a unique ID for the control
    array(
        'label' => __('Boxed Layout', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'layout_boxed_enable', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));


$wp_customize->add_setting('layout_width', array(
    'transport' => 'refresh', //Autorefresh
    'default' => 768,

));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_layout_width', //Set a unique ID for the control
    array(
        'label' => __('Layout Width', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Layout Width Range 768 - 1920'),
        'settings' => 'layout_width', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array('min' => 768, 'max' => 1920, 'step' => 2)
    )
));


$wp_customize->add_setting('page_layout_type', array(
    'default' => 'full_width', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_page_layout_type', //Set a unique ID for the control
    array(
        'label' => __('Select Page Layout', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the layout style'),
        'settings' => 'page_layout_type', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'select',
        'choices' => array(
            'full_width' => 'Full Width',
            'sidebar_left' => 'Left Sidebar',
            'sidebar_right' => 'Right Sidebar',
            'sidebar_both' => 'Both Sidebar',
            'full_page' => 'Full Page'
        )
    )
));


/**
 *
 * BODY STYLE
 *
 */

$wp_customize->add_setting('section_title_general_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_general_2',
        array(
            'label' => 'BODY STYLE',
            'divider' => true,
            'section' => 'general',
            'settings' => 'section_title_general_2',
        )
    )
);


$wp_customize->add_setting('body_background_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background_color', array(
    'label' => __('Body Background Color', 'fdctheme'),
    'settings' => 'body_background_color',
    'section' => 'general',

)));

$wp_customize->add_setting('body_background_image', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_body_background_image',
        array(
            'label' => __('Body Background Image', 'fdctheme'),
            'section' => 'general',
            'settings' => 'body_background_image',
        )
    )
);

$wp_customize->add_setting('body_background_size', array(
    'default' => 'cover', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_body_background_size', //Set a unique ID for the control
    array(
        'label' => __('Body Background Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'body_background_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'cover' => 'Cover',
            'contain' => 'Contain',
            'auto' => 'Auto',
            'inherit' => 'Inherit',
        )
    )
));


$wp_customize->add_setting('body_background_repeat', array(
    'default' => 'no-repeat', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_body_background_repeat', //Set a unique ID for the control
    array(
        'label' => __('Body Background Repeat', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'body_background_repeat', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat X',
            'repeat-y' => 'Repeat Y',
        )
    )
));

$wp_customize->add_setting('body_background_position_x', array(
    'default' => 'center', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_body_background_position_x', //Set a unique ID for the control
    array(
        'label' => __('Body Background Position X', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'body_background_position_x', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
        )
    )
));

$wp_customize->add_setting('body_background_position_y', array(
    'default' => 'center', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_body_background_position_y', //Set a unique ID for the control
    array(
        'label' => __('Body Background Position Y', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'body_background_position_y', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'top' => 'Top',
            'bottom' => 'Bottom',
        )
    )
));


$wp_customize->add_setting('body_background_blur', array(
    'transport' => 'refresh', //Autorefresh
    'default' => 0,

));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_body_background_blur', //Set a unique ID for the control
    array(
        'label' => __('Body Background Blur', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Background Blur'),
        'settings' => 'body_background_blur', //Which setting to load and manipulate (serialized is okay)
        'section' => 'general', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array('min' => 0, 'max' => 100, 'step' => 1)
    )
));


/**
 *
 * WRAPPER STYLE
 *
 */

$wp_customize->add_setting('section_title_general_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_general_3',
        array(
            'label' => 'WRAPPER STYLE',
            'divider' => true,
            'section' => 'general',
            'settings' => 'section_title_general_3',
        )
    )
);

$wp_customize->add_setting('wrapper_background_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_wrapper_background_color',
    array(
        'label' => __('Wrapper Background Color', 'fdctheme'),
        'settings' => 'wrapper_background_color',
        'section' => 'general',
    )
));




/**
 *
 * ICONS
 *
 */

$wp_customize->add_setting('section_title_general_4', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_general_4',
        array(
            'label' => 'ICONS',
            'divider' => true,
            'section' => 'general',
            'settings' => 'section_title_general_4',
        )
    )
);


$wp_customize->add_setting('favicon', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_favicon',
        array(
            'label' => __('Favicon', 'fdctheme'),
            'description' => __('Using this option you can change the header style'),
            'section' => 'general',
            'settings' => 'favicon',
        )
    )
);

$wp_customize->add_setting('apple_touch_icon', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_apple_touch_icon',
        array(
            'label' => __('Apple Touch Icon', 'fdctheme'),
            'description' => __('Using this option you can change the header style'),
            'section' => 'general',
            'settings' => 'apple_touch_icon',
        )
    )
);
