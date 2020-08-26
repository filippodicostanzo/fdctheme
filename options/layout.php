<?php
$wp_customize->add_section('pagelayout', array(
    'title' => __('Page Layout', 'fdctheme'),  //Visible title of section
    'priority' => 90, //Determines what order this appears in
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
        'section' => 'pagelayout', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'select',
        'choices' => array(
            'full_width' => 'Full Width',
            'sidebar_left' => 'Left Sidebar',
            'sidebar_right' => 'Right Sidebar',
            'sidebar_both' => 'Both Sidebar'
        )
    )
));