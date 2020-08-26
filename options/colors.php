<?php

$wp_customize->add_section('colors', array(
    'title' => __('Colors', 'fdctheme'),  //Visible title of section
    'priority' => 112, //Determines what order this appears in
));


/**
 *
 * PRIMARY COLORS
 *
 */

$wp_customize->add_setting('section_title_colors_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_1',
        array(
            'label' => 'GENERAL',
            'divider' => false,
            'section' => 'colors',
            'settings' => 'section_title_colors_1',
        )
    )
);

$wp_customize->add_setting('css_primary_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_css_primary_color',
    array(
        'label' => __('Primary Color', 'fdctheme'),
        'settings' => 'css_primary_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('css_secondary_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_css_secondary_color',
    array(
        'label' => __('Secondary Color', 'fdctheme'),
        'settings' => 'css_secondary_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('css_third_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_css_third_color',
    array(
        'label' => __('Third Color', 'fdctheme'),
        'settings' => 'css_third_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('css_fourth_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_css_fourth_color',
    array(
        'label' => __('Fourth Color', 'fdctheme'),
        'settings' => 'css_fourth_color',
        'section' => 'colors',
    )));


/**
 *
 * MAIN MENU COLORS
 *
 */

$wp_customize->add_setting('section_title_colors_2', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_2',
        array(
            'label' => 'MAIN MENU COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_2',
        )
    )
);

$wp_customize->add_setting('main_menu_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_main_menu_color',
    array(
        'label' => __('Main Menu Color', 'fdctheme'),
        'settings' => 'main_menu_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('main_menu_color_hover', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_main_menu_color_hover',
    array(
        'label' => __('Main Menu Color Hover', 'fdctheme'),
        'settings' => 'main_menu_color_hover',
        'section' => 'colors',
    )));


/**
 *
 * MOBILE MENU COLORS
 *
 */

$wp_customize->add_setting('section_title_colors_3', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_3',
        array(
            'label' => 'MOBILE MENU COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_3',
        )
    )
);

$wp_customize->add_setting('mobile_menu_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_mobile_menu_color',
    array(
        'label' => __('Mobile Menu Color', 'fdctheme'),
        'settings' => 'mobile_menu_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('mobile_menu_color_hover', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_mobile_menu_color_hover',
    array(
        'label' => __('Mobile Menu Color Hover', 'fdctheme'),
        'settings' => 'mobile_menu_color_hover',
        'section' => 'colors',
    )));


/**
 *
 * FOOTER MENU COLORS
 *
 */

$wp_customize->add_setting('section_title_colors_4', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_4',
        array(
            'label' => 'FOOTER MENU COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_4',
        )
    )
);

$wp_customize->add_setting('footer_menu_color', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_footer_menu_color',
    array(
        'label' => __('Footer Menu Color', 'fdctheme'),
        'settings' => 'footer_menu_color',
        'section' => 'colors',
    )));

$wp_customize->add_setting('footer_menu_color_hover', array(
    'default' => '#ffffff', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
    'ctrl_footer_menu_color_hover',
    array(
        'label' => __('Footer Menu Color Hover', 'fdctheme'),
        'settings' => 'footer_menu_color_hover',
        'section' => 'colors',
    )));


/**
 *
 * SUBHEADER COLOR
 *
 */

$wp_customize->add_setting('section_title_colors_5', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_5',
        array(
            'label' => 'SUBHEADER COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_5',
        )
    )
);


$wp_customize->add_setting('font_title_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_font_title_color',
        array(
            'label' => __('Title Color', 'fdctheme'),
            'settings' => 'font_title_color',
            'section' => 'colors',
        )
    )
);


$wp_customize->add_setting('font_breadcrumb_color', array(
    'default' => '#efefef', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_font_breadcrumb_color',
        array(
            'label' => __('Breadcrumb Color', 'fdctheme'),
            'settings' => 'font_breadcrumb_color',
            'section' => 'colors',
        )
    )
);


$wp_customize->add_setting('chevron_down_color', array(
    'default' => '#efefef', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_chevron_down_color',
        array(
            'label' => __('Chevron Down Color', 'fdctheme'),
            'settings' => 'chevron_down_color',
            'section' => 'colors',
        )
    )
);


/**
 *
 * HEADINGS COLOR
 *
 */

$wp_customize->add_setting('section_title_colors_6', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_6',
        array(
            'label' => 'HEADINGS COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_6',
        )
    )
);

$wp_customize->add_setting('h1_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h1_color',
        array(
            'label' => __('H1 Color', 'fdctheme'),
            'settings' => 'h1_color',
            'section' => 'colors',
        )
    )
);

$wp_customize->add_setting('h2_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h2_color',
        array(
            'label' => __('H2 Color', 'fdctheme'),
            'settings' => 'h2_color',
            'section' => 'colors',
        )
    )
);

$wp_customize->add_setting('h3_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h3_color',
        array(
            'label' => __('H3 Color', 'fdctheme'),
            'settings' => 'h3_color',
            'section' => 'colors',
        )
    )
);

$wp_customize->add_setting('h4_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h4_color',
        array(
            'label' => __('H4 Color', 'fdctheme'),
            'settings' => 'h4_color',
            'section' => 'colors',
        )
    )
);

$wp_customize->add_setting('h5_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h5_color',
        array(
            'label' => __('H5 Color', 'fdctheme'),
            'settings' => 'h5_color',
            'section' => 'colors',
        )
    )
);


$wp_customize->add_setting('h6_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_h6_color',
        array(
            'label' => __('H6 Color', 'fdctheme'),
            'settings' => 'h6_color',
            'section' => 'colors',
        )
    )
);


/**
 *
 * CONTENT COLOR
 *
 */

$wp_customize->add_setting('section_title_colors_7', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_colors_7',
        array(
            'label' => 'CONTENT COLORS',
            'divider' => true,
            'section' => 'colors',
            'settings' => 'section_title_colors_7',
        )
    )
);


$wp_customize->add_setting('font_content_color', array(
    'default' => '#000000', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_font_content_color',
        array(
            'label' => __('Text Color', 'fdctheme'),
            'settings' => 'font_content_color',
            'section' => 'colors',
        )
    )
);

$wp_customize->add_setting('font_link_color', array(
    'default' => '#ededed', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_font_link_color',
        array(
            'label' => __('Link Color', 'fdctheme'),
            'settings' => 'font_link_color',
            'section' => 'colors',
        )
    )
);


$wp_customize->add_setting('font_link_color_hover', array(
    'default' => '#2d2d2d', //Default setting/value to save
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...


$wp_customize->add_control(
    new WP_Customize_Color_Control (
        $wp_customize,
        'ctrl_font_link_color_hover',
        array(
            'label' => __('Link Color Hover', 'fdctheme'),
            'settings' => 'font_link_color_hover',
            'section' => 'colors',
        )
    )
);