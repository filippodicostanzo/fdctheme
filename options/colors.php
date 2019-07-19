<?php

$wp_customize->add_section('colors', array(
    'title' => __('Colors', 'fdctheme'),  //Visible title of section
    'priority' => 90, //Determines what order this appears in
));

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
    'priority' => 10, //Determines the order this control appears in for the specified section
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
        'priority' => 20, //Determines the order this control appears in for the specified section
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
        'priority' => 30, //Determines the order this control appears in for the specified section
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
        'priority' => 40, //Determines the order this control appears in for the specified section
    )));