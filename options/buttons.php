<?php
$wp_customize->add_section('buttons', array(
    'title' => __('Buttons', 'title_buttons'),  //Visible title of section
    'priority' => 50, //Determines what order this appears in
));

/**
 *
 * ACTION BAR STYLE
 *
 */

$wp_customize->add_setting('section_title_buttons_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_buttons_1',
        array(
            'label' => 'BUTTONS TYPE',
            'divider' => false,
            'section' => 'buttons',
            'settings' => 'section_title_buttons_1',
        )
    )
);

$wp_customize->add_setting('buttons_type', array(
    'default' => 'buttons_1', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctr_buttons_type', //Set a unique ID for the control
    array(
        'label' => __('Select Buttons Type', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'buttons_type', //Which setting to load and manipulate (serialized is okay)
        'section' => 'buttons', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => array(
            'buttons_1' => 'Buttons 1',
            'buttons_2' => 'Buttons 2',
            'buttons_3' => 'Buttons 3',

        )
    )
));

$wp_customize->add_setting('section_title_buttons_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_buttons_2',
        array(
            'label' => 'BUTTONS COLOR',
            'divider' => true,
            'section' => 'buttons',
            'settings' => 'section_title_buttons_2',
        )
    )
);

$wp_customize->add_setting('buttons_background_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_buttons_background_color', array(
        'label' => __('Buttons Background Color', 'fdctheme'),
        'settings' => 'buttons_background_color',
        'section' => 'buttons',
    )
));

$wp_customize->add_setting('buttons_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_buttons_color', array(
        'label' => __('Buttons Color', 'fdctheme'),
        'settings' => 'buttons_color',
        'section' => 'buttons',
    )
));

$wp_customize->add_setting('buttons_border_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_buttons_border_color', array(
        'label' => __('Buttons Border Color', 'fdctheme'),
        'settings' => 'buttons_border_color',
        'section' => 'buttons',
    )
));


$wp_customize->add_setting('section_title_buttons_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_buttons_3',
        array(
            'label' => 'BUTTONS COLOR HOVER',
            'divider' => true,
            'section' => 'buttons',
            'settings' => 'section_title_buttons_3',
        )
    )
);


$wp_customize->add_setting('buttons_background_color_hover', array(
    'default' => '#efefef', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_buttons_background_color_hover', array(
        'label' => __('Buttons Background Color Hover', 'fdctheme'),
        'settings' => 'buttons_background_color_hover',
        'section' => 'buttons',
    )
));

$wp_customize->add_setting('buttons_color_hover', array(
    'default' => '#050505', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control(
    $wp_customize,
    'ctrl_buttons_color_hover', array(
    'label' => __('Buttons Color Hover', 'fdctheme'),
    'settings' => 'buttons_color_hover',
    'section' => 'buttons',
)));