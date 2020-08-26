<?php
include (get_template_directory() . '/lib/googlefonts/Google_Font_Dropdown_Custom_Control.php');
include (get_template_directory() . '/lib/variables/variables.php');

$wp_customize->add_section('fonts', array(
    'title' => esc_html__('Fonts', 'fdctheme'),
    'priority' => 113,
));

/**
 *
 * CONTENT FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_1',
        array(
            'label' => 'FONT CONTENT',
            'divider' => false,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_1',
        )
    )
);

$wp_customize->add_setting('font_content_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_content_family', array(
    'label' => __('Font Content Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_content_family',
)));

$wp_customize->add_setting('font_content_size', array(
    'default' => '12',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_content_size', //Set a unique ID for the control
    array(
        'label' => __('Font Content Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_content_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_content_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_content_weight', //Set a unique ID for the control
    array(
        'label' => __('Font Content Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_content_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));



/**
 *
 * TITLE FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_2',
        array(
            'label' => 'FONT TITLE',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_2',
        )
    )
);

$wp_customize->add_setting('font_title_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_title_family', array(
    'label' => __('Font Title Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_title_family',
)));

$wp_customize->add_setting('font_title_size', array(
    'default' => 20,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_title_size', //Set a unique ID for the control
    array(
        'label' => __('Font Title Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_title_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_title_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_title_weight', //Set a unique ID for the control
    array(
        'label' => __('Font Title Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_title_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));


/**
 *
 * ACTION BAR FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_3',
        array(
            'label' => 'FONT ACTION BAR',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_3',
        )
    )
);

$wp_customize->add_setting('font_action_bar_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_action_bar_family', array(
    'label' => __('Font Action Bar Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_action_bar_family',
)));

$wp_customize->add_setting('font_action_bar_size', array(
    'default' => 10,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_action_bar_size', //Set a unique ID for the control
    array(
        'label' => __('Font Action Bar Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_action_bar_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_action_bar_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_action_bar_weight', //Set a unique ID for the control
    array(
        'label' => __('Font Action Bar Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_action_bar_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));


/**
 *
 * MAIN MENU FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_4', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_4',
        array(
            'label' => 'FONT MENU',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_4',
        )
    )
);

$wp_customize->add_setting('font_menu_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_menu_family', array(
    'label' => __('Font Menu Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_menu_family',
)));

$wp_customize->add_setting('font_menu_size', array(
    'default' => 12,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_menu_size', //Set a unique ID for the control
    array(
        'label' => __('Font H1 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_menu_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_menu_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_menu_weight', //Set a unique ID for the control
    array(
        'label' => __('Font Menu Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_menu_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_menu_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_menu_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font Menu Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_menu_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));


/**
 *
 * H1 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_5', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_5',
        array(
            'label' => 'FONT H1',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_5',
        )
    )
);

$wp_customize->add_setting('font_h1_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h1_family', array(
    'label' => __('Font H1 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h1_family',
)));

$wp_customize->add_setting('font_h1_size', array(
    'default' => 32,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h1_size', //Set a unique ID for the control
    array(
        'label' => __('Font H1 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h1_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h1_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h1_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H1 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h1_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));


$wp_customize->add_setting('font_h1_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h1_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font h1 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h1_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));


/**
 *
 * H2 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_6', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_6',
        array(
            'label' => 'FONT H2',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_6',
        )
    )
);

$wp_customize->add_setting('font_h2_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h2_family', array(
    'label' => __('Font H2 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h2_family',
)));

$wp_customize->add_setting('font_h2_size', array(
    'default' => 30,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h2_size', //Set a unique ID for the control
    array(
        'label' => __('Font H2 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h2_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h2_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h2_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H2 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h2_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_h2_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h2_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font h2 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h2_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));


/**
 *
 * H3 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_7', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_7',
        array(
            'label' => 'FONT H3',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_7',
        )
    )
);

$wp_customize->add_setting('font_h3_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h3_family', array(
    'label' => __('Font H3 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h3_family',
)));

$wp_customize->add_setting('font_h3_size', array(
    'default' => 26,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h3_size', //Set a unique ID for the control
    array(
        'label' => __('Font H3 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h3_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h3_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h3_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H3 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h3_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_h3_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h3_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font h3 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h3_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));


/**
 *
 * H4 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_8', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_8',
        array(
            'label' => 'FONT H4',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_8',
        )
    )
);

$wp_customize->add_setting('font_h4_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h4_family', array(
    'label' => __('Font H4 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h4_family',
)));

$wp_customize->add_setting('font_h4_size', array(
    'default' => 26,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h4_size', //Set a unique ID for the control
    array(
        'label' => __('Font H4 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h4_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h4_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h4_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H4 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h4_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_h4_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h4_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font H4 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h4_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));

/**
 *
 * H5 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_9', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_9',
        array(
            'label' => 'FONT H5',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_9',
        )
    )
);

$wp_customize->add_setting('font_h5_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));
$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h5_family', array(
    'label' => __('Font H5 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h5_family',
)));

$wp_customize->add_setting('font_h5_size', array(
    'default' => 16,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h5_size', //Set a unique ID for the control
    array(
        'label' => __('Font H5 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h5_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h5_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h5_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H5 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h5_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_h5_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h5_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font H5 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h5_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));


/**
 *
 * H6 FONTS
 *
 */

$wp_customize->add_setting('section_title_fonts_10', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_fonts_10',
        array(
            'label' => 'FONT H6',
            'divider' => true,
            'section' => 'fonts',
            'settings' => 'section_title_fonts_10',
        )
    )
);

$wp_customize->add_setting('font_h6_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new Google_Font_Dropdown_Custom_Control(
    $wp_customize,
    'font_h6_family', array(
    'label' => __('Font H6 Family', 'fdctheme'),
    'section' => 'fonts',
    'settings' => 'font_h6_family'
)));

$wp_customize->add_setting('font_h6_size', array(
    'default' => 14,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h6_size', //Set a unique ID for the control
    array(
        'label' => __('Font H6 Size', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h6_size', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 8, 'max' => 96, 'step'  => 1 )
    )
));

$wp_customize->add_setting('font_h6_weight', array(
    'default' => '400',
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h6_weight', //Set a unique ID for the control
    array(
        'label' => __('Font H6 Weight', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h6_weight', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'select',
        'choices' => $font_weight
    )
));

$wp_customize->add_setting('font_h6_spacing', array(
    'default' => 0,
    'transport' => 'refresh', //Autorefresh
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_font_h6_spacing', //Set a unique ID for the control
    array(
        'label' => __('Font H6 Spacing', 'fdctheme'), //Admin-visible name of the control
        'settings' => 'font_h6_spacing', //Which setting to load and manipulate (serialized is okay)
        'section' => 'fonts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'number',
        'input_attrs' => array( 'min' => 0, 'max' => 10, 'step'  => 1 )
    )
));
