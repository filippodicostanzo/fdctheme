<?php
$wp_customize->add_section('contacts', array(
    'title' => __('Contacts', 'custom_contacts_section'),  //Visible title of section
    'priority' => 50, //Determines what order this appears in
));

$wp_customize->add_setting('contacts_address', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_address', //Set a unique ID for the control
    array(
        'label' => __('Address', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_address', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'text'
    )
));

$wp_customize->add_setting('contacts_phone', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_phone', //Set a unique ID for the control
    array(
        'label' => __('Phone', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_phone', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'priority' => 10, //Determines the order this control appears in for the specified section
        'type' => 'text'
    )
));