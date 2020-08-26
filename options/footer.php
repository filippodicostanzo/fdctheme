<?php

$wp_customize->add_section('footer', array(
    'title' => __('Footer', 'custom_general_section'),  //Visible title of section
    'priority' => 115, //Determines what order this appears in
));


/**
 *
 * FOOTER LOGO
 *
 */

$wp_customize->add_setting('section_title_footer_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_footer_1',
        array(
            'label' => 'SHOW FOOTER',
            'divider' => false,
            'section' => 'footer',
            'settings' => 'section_title_footer_1',
        )
    )
);


$wp_customize->add_setting('footer_hidden', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_footer_hidden', //Set a unique ID for the control
    array(
        'label' => __('Hidden Footer', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option for set one page style'),
        'settings' => 'footer_hidden', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));


/**
 *
 * FOOTER BACKGROUND
 *
 */

$wp_customize->add_setting('section_title_footer_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_footer_3',
        array(
            'label' => 'FOOTER BACKGROUND',
            'divider' => true,
            'section' => 'footer',
            'settings' => 'section_title_footer_3',
        )
    )
);


$wp_customize->add_setting('footer_background_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ctrl_footer_background_color', array(
    'label' => __('Footer Background Color', 'fdctheme'),
    'settings' => 'footer_background_color',
    'section' => 'footer',

)));

$wp_customize->add_setting('footer_background_image', array(
    'transport' => 'refresh' //Autorefresh
));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ctrl_footer_background_image',
        array(
            'label' => __('Footer Background Image', 'fdctheme'),
            'section' => 'footer',
            'settings' => 'footer_background_image',
        )
    )
);

$wp_customize->add_setting('footer_background_size', array(
    'default' => 'cover', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_footer_background_size', //Set a unique ID for the control
    array(
        'label' => __('Footer Background Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'footer_background_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'cover' => 'Cover',
            'contain' => 'Contain',
            'auto' => 'Auto',
            'inherit' => 'Inherit',
        )
    )
));


$wp_customize->add_setting('footer_background_repeat', array(
    'default' => 'no-repeat', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_footer_background_repeat', //Set a unique ID for the control
    array(
        'label' => __('Footer Background Repeat', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'footer_background_repeat', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat X',
            'repeat-y' => 'Repeat Y',
        )
    )
));

$wp_customize->add_setting('footer_background_position_x', array(
    'default' => 'center', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_footer_background_position_x', //Set a unique ID for the control
    array(
        'label' => __('Footer Background Position X', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'footer_background_position_x', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
        )
    )
));

$wp_customize->add_setting('footer_background_position_y', array(
    'default' => 'center', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_footer_background_position_y', //Set a unique ID for the control
    array(
        'label' => __('Footer Background Position Y', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'footer_background_position_y', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'top' => 'Top',
            'bottom' => 'Bottom',
        )
    )
));


/**
 *
 * BACK TO TOP
 *
 */

$wp_customize->add_setting('section_title_footer_4', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_footer_4',
        array(
            'label' => 'BACK TO TOP',
            'divider' => true,
            'section' => 'footer',
            'settings' => 'section_title_footer_4',
        )
    )
);


$wp_customize->add_setting('back_to_top_enable', array(
    'default' => 0, //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_back_to_top_enable', //Set a unique ID for the control
    array(
        'label' => __('Back To Top Enable', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'back_to_top_enable', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'checkbox'
    )
));

$wp_customize->add_setting('back_to_top_style', array(
    'default' => 'circle', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_back_to_top_style', //Set a unique ID for the control
    array(
        'label' => __('Back To Top Style', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'back_to_top_style', //Which setting to load and manipulate (serialized is okay)
        'section' => 'footer', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'circle' => 'Circle',
            'square' => 'Square',
            'fixed' => 'Fixed',
        )
    )
));


$wp_customize->add_setting('back_to_top_background_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_back_to_top_background_color',
    array(
        'label' => __('Back To Top Background Color', 'fdctheme'),
        'settings' => 'back_to_top_background_color',
        'section' => 'footer',

    )
));


$wp_customize->add_setting('back_to_top_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_back_to_top_color',
    array(
        'label' => __('Back To Top  Color', 'fdctheme'),
        'settings' => 'back_to_top_color',
        'section' => 'footer',

    )
));


$wp_customize->add_setting('back_to_top_hover_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_back_to_top_hover_color',
    array(
        'label' => __('Back To Hover Top  Color', 'fdctheme'),
        'settings' => 'back_to_top_hover_color',
        'section' => 'footer',

    )
));
