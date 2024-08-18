<?php
function mytheme_customize_register( $wp_customize ) {


    // Site Settings
    $wp_customize->add_setting( 'site_government', array(
        'default'   => 'United States',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'site_government', array(
        'type'    => 'text',
        'section' => 'title_tagline',
        'label'   => __( 'Government', 'mytheme' ),
    ));

    // Agency-related settings section
    $wp_customize->add_section( 'misc', array(
        'title'    => __( 'Misc', 'mytheme' ),
        'priority' => 90,
    ));
    $wp_customize->add_setting( 'breadCrumsHeroLocation', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'breadCrumsHeroLocation', array(
        'type'    => 'checkbox',
        'section' => 'misc',
        'label'   => __( 'Show Breadcrumbs Hero Location Above', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'header_fixedbox', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_fixedbox', array(
        'type'    => 'checkbox',
        'section' => 'misc',
        'label'   => __( 'Header in Fixed Box', 'mytheme' ),
    ));

    // Site Alert settings section
    $wp_customize->add_section( 'sitealert', array(
        'title'    => __( 'Site Alert', 'mytheme' ),
        'priority' => 90,
    ));
    $wp_customize->add_setting( 'site_alert_enabled', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'site_alert_enabled', array(
        'type'    => 'checkbox',
        'section' => 'sitealert',
        'label'   => __( 'enabled', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'site_alert_type', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'site_alert_type', array(
        'type'    => 'checkbox',
        'section' => 'sitealert',
        'label'   => __( 'Is emergency?', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'stie_alert_noheading', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'stie_alert_noheading', array(
        'type'    => 'checkbox',
        'section' => 'sitealert',
        'label'   => __( 'No heading?', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'stie_alert_slim', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'stie_alert_slim', array(
        'type'    => 'checkbox',
        'section' => 'sitealert',
        'label'   => __( 'Slim', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'stie_alert_noicon', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'stie_alert_noicon', array(
        'type'    => 'checkbox',
        'section' => 'sitealert',
        'label'   => __( 'No icon', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'site_alert_heading', array(
        'default'   => 'Short alert message heading',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'site_alert_heading', array(
        'type'    => 'text',
        'section' => 'sitealert',
        'label'   => __( 'Heading', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'site_alert_body', array(
        'default'   => 'Additional context and followup information',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'site_alert_body', array(
        'type'    => 'text',
        'section' => 'sitealert',
        'label'   => __( 'Body', 'mytheme' ),
    ));



    // Project-related settings section
    $wp_customize->add_section( 'project_section', array(
        'title'    => __( 'Project Settings', 'mytheme' ),
        'priority' => 80,
    ));

    $wp_customize->add_setting( 'project_line1', array(
        'default'   => 'Project',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'project_line1', array(
        'type'    => 'text',
        'section' => 'project_section',
        'label'   => __( 'Project Title Line 1', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'project_line2', array(
        'default'   => 'Title',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'project_line2', array(
        'type'    => 'text',
        'section' => 'project_section',
        'label'   => __( 'Project Title Line 2', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'project_name', array(
        'default'   => 'Project Title',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'project_name', array(
        'type'    => 'text',
        'section' => 'project_section',
        'label'   => __( 'Project Name', 'mytheme' ),
    ));
    $wp_customize->add_setting( 'project_icon', array(
        'default'   => \Roots\asset('images/circle-gray-20.svg')->uri(),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'project_icon', array(
        'label'    => __( 'Project Icon', 'mytheme' ),
        'section'  => 'project_section',
        'settings' => 'project_icon',
    )));


    // Header settings section
    $wp_customize->add_section( 'header_section', array(
        'title'    => __( 'Header Settings', 'mytheme' ),
        'priority' => 30,
    ));

    // Header settings
    $wp_customize->add_setting( 'header_enabled', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_enabled', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Enable Header', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'header_advanced_ProjectNameAndLogo', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_advanced_ProjectNameAndLogo', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Show Advanced Project Name and Logo', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'header_UseDarkHeader', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_UseDarkHeader', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Use Dark Header', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'header_extended', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_extended', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Enable Extended Navigation Menu', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'header_megamenu', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_megamenu', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Enable Megamenu', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'header_fadeBG', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'header_fadeBG', array(
        'type'    => 'checkbox',
        'section' => 'header_section',
        'label'   => __( 'Fade Background on Scroll', 'mytheme' ),
    ));

    // Footer settings section
    $wp_customize->add_section( 'footer_section', array(
        'title'    => __( 'Footer Settings', 'mytheme' ),
        'priority' => 40,
    ));

    $wp_customize->add_setting( 'footer_enabled', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'footer_enabled', array(
        'type'    => 'checkbox',
        'section' => 'footer_section',
        'label'   => __( 'Enable Footer', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'footer_size', array(
        'default'   => 'med',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'footer_size', array(
        'type'    => 'select',
        'section' => 'footer_section',
        'label'   => __( 'Footer Size', 'mytheme' ),
        'choices' => array(
            'big'  => __( 'Big', 'mytheme' ),
            'med'  => __( 'Medium', 'mytheme' ),
            'slim' => __( 'Slim', 'mytheme' ),
        ),
    ));

    // Identifier settings section
    $wp_customize->add_section( 'identifier_section', array(
        'title'    => __( 'Identifier Settings', 'mytheme' ),
        'priority' => 50,
    ));

    $wp_customize->add_setting( 'identifier_enabled', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'identifier_enabled', array(
        'type'    => 'checkbox',
        'section' => 'identifier_section',
        'label'   => __( 'Enable Identifier Section', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'identifier_dualParent', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'identifier_dualParent', array(
        'type'    => 'checkbox',
        'section' => 'identifier_section',
        'label'   => __( 'Support Dual Parent Agency Structure', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'identifier_noLogo', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'identifier_noLogo', array(
        'type'    => 'checkbox',
        'section' => 'identifier_section',
        'label'   => __( 'Hide Logo(s) in Identifier Section', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'identifier_taxpayer_disclaimer', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'identifier_taxpayer_disclaimer', array(
        'type'    => 'checkbox',
        'section' => 'identifier_section',
        'label'   => __( 'Show Taxpayer Disclaimer', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'identifier_showusagov', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'identifier_showusagov', array(
        'type'    => 'checkbox',
        'section' => 'identifier_section',
        'label'   => __( 'Show USA.gov Banner', 'mytheme' ),
    ));

    // Official Banner settings section
    $wp_customize->add_section( 'official_banner_section', array(
        'title'    => __( 'Official Banner Settings', 'mytheme' ),
        'priority' => 60,
    ));

    $wp_customize->add_setting( 'officialBanner_enabled', array(
        'default'   => true,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'officialBanner_enabled', array(
        'type'    => 'checkbox',
        'section' => 'official_banner_section',
        'label'   => __( 'Enable Official Banner', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'officialBanner_dark', array(
        'default'   => false,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'officialBanner_dark', array(
        'type'    => 'checkbox',
        'section' => 'official_banner_section',
        'label'   => __( 'Use Dark Theme for Banner', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'officialBanner_icon', array(
        'default'   => \Roots\asset('images/us_flag_small.png')->uri(),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'officialBanner_icon', array(
        'label'    => __( 'Official Banner Icon', 'mytheme' ),
        'section'  => 'official_banner_section',
        'settings' => 'officialBanner_icon',
    )));

    // Agency-related settings section
    $wp_customize->add_section( 'agency_section', array(
        'title'    => __( 'Agency Settings', 'mytheme' ),
        'priority' => 90,
    ));

    $wp_customize->add_setting( 'agency_name', array(
        'default'   => 'Agency Name',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_name', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Agency Name', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'agency_logo', array(
        'default'   => \Roots\asset('images/logo-img.png')->uri(),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'agency_logo', array(
        'label'    => __( 'Agency Logo', 'mytheme' ),
        'section'  => 'agency_section',
        'settings' => 'agency_logo',
    )));

    $wp_customize->add_setting( 'agency_contact_center', array(
        'default'   => 'Agency Contact Center',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_contact_center', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Contact Center Name', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'agency_contact_email', array(
        'default'   => 'info@agency.gov',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_contact_email', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Contact Email Address', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'agency_contact_pn', array(
        'default'   => '(800) 555-GOV',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_contact_pn', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Contact Phone Number', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'agency_contact_pn_link', array(
        'default'   => '1-800-555-5555',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_contact_pn_link', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Phone Number for Tel Links', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'agency_url', array(
        'default'   => 'agency.gov',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'agency_url', array(
        'type'    => 'text',
        'section' => 'agency_section',
        'label'   => __( 'Agency Website URL', 'mytheme' ),
    ));

    // Parent agency settings section
    $wp_customize->add_section( 'parentagency_section', array(
        'title'    => __( 'Parent Agency Settings', 'mytheme' ),
        'priority' => 100,
    ));

    $wp_customize->add_setting( 'parentagency_name', array(
        'default'   => 'Parent Agency',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'parentagency_name', array(
        'type'    => 'text',
        'section' => 'parentagency_section',
        'label'   => __( 'Parent Agency Name', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'parentagency_website', array(
        'default'   => 'agency.gov',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'parentagency_website', array(
        'type'    => 'text',
        'section' => 'parentagency_section',
        'label'   => __( 'Parent Agency Website URL', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'parentagency_logo', array(
        'default'   => \Roots\asset('images/circle-gray-20.svg')->uri(),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'parentagency_logo', array(
        'label'    => __( 'Parent Agency Logo', 'mytheme' ),
        'section'  => 'parentagency_section',
        'settings' => 'parentagency_logo',
    )));

    // Second parent agency settings section
    $wp_customize->add_section( 'parentagency2_section', array(
        'title'    => __( 'Second Parent Agency Settings', 'mytheme' ),
        'priority' => 110,
    ));

    $wp_customize->add_setting( 'parentagency2_name', array(
        'default'   => 'Parent Agency2',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'parentagency2_name', array(
        'type'    => 'text',
        'section' => 'parentagency2_section',
        'label'   => __( 'Second Parent Agency Name', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'parentagency2_website', array(
        'default'   => 'agency2.gov',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( 'parentagency2_website', array(
        'type'    => 'text',
        'section' => 'parentagency2_section',
        'label'   => __( 'Second Parent Agency Website URL', 'mytheme' ),
    ));

    $wp_customize->add_setting( 'parentagency2_logo', array(
        'default'   => \Roots\asset('images/circle-gray-20.svg')->uri(),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'parentagency2_logo', array(
        'label'    => __( 'Second Parent Agency Logo', 'mytheme' ),
        'section'  => 'parentagency2_section',
        'settings' => 'parentagency2_logo',
    )));

}

add_action( 'customize_register', 'mytheme_customize_register' );
