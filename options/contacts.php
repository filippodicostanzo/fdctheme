<?php
$wp_customize->add_section('contacts', array(
    'title' => __('Contacts', 'custom_contacts_section'),  //Visible title of section
    'priority' => 110, //Determines what order this appears in
));

/**
 *
 * CONTACTS
 *
 */

$wp_customize->add_setting('section_title_contacts_1', array(
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control(
    new Section_Title_Control(
        $wp_customize,
        'ctrl_section_title_contacts_1',
        array(
            'label' => 'CONTACTS',
            'divider' => false,
            'section' => 'contacts',
            'settings' => 'section_title_contacts_1',
        )
    )
);

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
        'type' => 'text'
    )
));

$wp_customize->add_setting('contacts_phone_1', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_phone_1', //Set a unique ID for the control
    array(
        'label' => __('Phone 1', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_phone_1', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));

$wp_customize->add_setting('contacts_phone_2', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_phone_2', //Set a unique ID for the control
    array(
        'label' => __('Phone 2', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_phone_2', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));


$wp_customize->add_setting('contacts_email', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_email', //Set a unique ID for the control
    array(
        'label' => __('Email', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_email', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));



$wp_customize->add_setting('contacts_vat_id', array(
    'transport' => 'refresh' //Autorefresh
));

//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, //Pass the $wp_customize object (required)
    'ctrl_contacts_vat_id', //Set a unique ID for the control
    array(
        'label' => __('VAT ID', 'fdctheme'), //Admin-visible name of the control
        'description' => __('Using this option you can change the header style'),
        'settings' => 'contacts_vat_id', //Which setting to load and manipulate (serialized is okay)
        'section' => 'contacts', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
        'type' => 'text'
    )
));