<?php


function setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
    add_theme_support('title-tag');

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1568, 9999);

    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'twentytwentyone'),
            'footer'  => __('Secondary menu', 'twentytwentyone'),
        )
    );

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');
};

function register_nav()
{
    register_nav_menu('primary', __('Primary Menu', 'quick-ui'));
};

function themeslug_customize_register( $wp_customize ) {

    // Add a setting 
    $wp_customize->add_setting('your_theme_secondary_logo');
    // Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'your_theme_secondary_logo', array(
        'label' => 'Upload Secondary Logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'your_theme_secondary_logo',
        'priority' => 8 // show it just below the custom-logo
    )));

    $wp_customize->add_panel('footer',array(
        'title'=>'Footer Options',
        'description'=> 'Configure your footer',
        'priority'=> 4,
    ));
    
    // Headline section configuration
    $wp_customize->add_section('footer_headline',array(
        'title'=>'Headline',
        'priority'=>1,
        'panel'=>'footer',
    ));
    
    // Title

    $wp_customize->add_setting('footer_headline_title',array(
        'default'=>'Brilliant solutions for your ideas',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_headline_title',array(
        'label'=>'Title',
        'type'=>'text',
        'section'=>'footer_headline',
        'settings'=>'footer_headline_title',
    ));

    // Subtitle

    $wp_customize->add_setting('footer_headline_subtitle',array(
        'default'=>'Build modern looking websites fast and easy using Quick.',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_headline_subtitle',array(
        'label'=>'Subtitle',
        'type'=>'text',
        'section'=>'footer_headline',
        'settings'=>'footer_headline_subtitle',
    ));

    // Buttons

    $wp_customize->add_section('footer_buttons',array(
        'title'=>'Buttons',
        'priority'=>2,
        'panel'=>'footer',
    ));

    // Button 1

    $wp_customize->add_setting('footer_button_1_text',array(
        'default'=>'Documentation',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_button_1_text',array(
        'label'=>'Button 1 title',
        'type'=>'text',
        'section'=>'footer_buttons',
        'settings'=>'footer_button_1_text',
    ));

    $wp_customize->add_setting('footer_button_1_url',array(
        'default'=>'#',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_button_1_url',array(
        'label'=>'Button 1 URL',
        'type'=>'url',
        'section'=>'footer_buttons',
        'settings'=>'footer_button_1_url',
    ));

    // Button 2

    $wp_customize->add_setting('footer_button_2_text',array(
        'default'=>'Documentation',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_button_2_text',array(
        'label'=>'Button 2 title',
        'type'=>'text',
        'section'=>'footer_buttons',
        'settings'=>'footer_button_2_text',
    ));

    $wp_customize->add_setting('footer_button_2_url',array(
        'default'=>'#',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_button_2_url',array(
        'label'=>'Button 2 URL',
        'type'=>'url',
        'section'=>'footer_buttons',
        'settings'=>'footer_button_2_url',
    ));

    // Headline

    $wp_customize->add_setting('footer_headline_title',array(
        'default'=>'Brilliant solutions for your ideas',
        'type' => 'theme_mod',
    ));

    
    $wp_customize->add_control('control_footer_headline_title',array(
        'label'=>'Title',
        'type'=>'text',
        'section'=>'footer_headline',
        'settings'=>'footer_headline_title',
    ));

    // Mission

    $wp_customize->add_section('footer_mission',array(
        'title'=>'Mission',
        'priority'=>3,
        'panel'=>'footer',
    ));

    $wp_customize->add_setting('footer_company_mission',array(
        'default'=> 'Webpixels attempts to bring the best development
        experience to designers and developers by offering the tools needed for having a quick and
        solid start in most web projects.',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_company_mission',array(
        'label'=>'Mission',
        'type'=>'textarea',
        'section'=>'footer_mission',
        'settings'=>'footer_company_mission',
        'priority' => 1,
    ));

    // Social Icon picker 1

    $wp_customize->add_setting( 'o2_fa_icon_picker_1', array(
        'default' => 'fa-facebook',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_1', array(
        'label' => __('Social icon 1', 'textdomain'),
        'description' => __('Choose an icon', 'textdomain'),
        'iconset' => 'fa',
        'section' => 'footer_mission',
        'priority' => 2,
        'settings' => 'o2_fa_icon_picker_1',
        'choices' => array(
            'fa-facebook' => __('Facebook', 'textdomain'),
            'fa-twitter' => __('Twitter', 'textdomain'),
            'fa-instagram' => __('Instagram', 'textdomain'),
            'fa-wordpress' => __('WordPress', 'textdomain'),
            'fa-github' => __('Github', 'textdomain'),
        )
    )));

    $wp_customize->add_setting('footer_social_url_1',array(
        'default'=>'https://www.facebook.com/hammersportmarketing',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_social_url_1',array(
        'label'=>'URL',
        'type'=>'url',
        'section'=>'footer_mission',
        'settings'=>'footer_social_url_1',
        'priority' => 3,
    ));

    // Social Icon picker 2

    $wp_customize->add_setting( 'o2_fa_icon_picker_2', array(
        'default' => 'fa-twitter',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_2', array(
        'label' => __('Social icon 2', 'textdomain'),
        'description' => __('Choose an icon', 'textdomain'),
        'iconset' => 'fa',
        'section' => 'footer_mission',
        'priority' => 4,
        'settings' => 'o2_fa_icon_picker_2',
        'choices' => array(
            'fa-facebook' => __('Facebook', 'textdomain'),
            'fa-twitter' => __('Twitter', 'textdomain'),
            'fa-instagram' => __('Instagram', 'textdomain'),
            'fa-wordpress' => __('WordPress', 'textdomain'),
            'fa-github' => __('Github', 'textdomain'),
        )
    )));

    $wp_customize->add_setting('footer_social_url_2',array(
        'default'=>'https://www.twitter.com/hammersportmarketing',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_social_url_2',array(
        'label'=>'URL',
        'type'=>'url',
        'section'=>'footer_mission',
        'settings'=>'footer_social_url_2',
        'priority' => 5,
    ));

    // Social Icon picker 3

    $wp_customize->add_setting( 'o2_fa_icon_picker_3', array(
        'default' => 'fa-instagram',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_3', array(
        'label' => __('Social icon 3', 'textdomain'),
        'description' => __('Choose an icon', 'textdomain'),
        'iconset' => 'fa',
        'section' => 'footer_mission',
        'priority' => 5,
        'settings' => 'o2_fa_icon_picker_3',
        'choices' => array(
            'fa-facebook' => __('Facebook', 'textdomain'),
            'fa-twitter' => __('Twitter', 'textdomain'),
            'fa-instagram' => __('Instagram', 'textdomain'),
            'fa-wordpress' => __('WordPress', 'textdomain'),
            'fa-github' => __('Github', 'textdomain'),
        )
    )));

    $wp_customize->add_setting('footer_social_url_3',array(
        'default'=>'https://www.instagram.com/hammersport_marketing',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_social_url_3',array(
        'label'=>'URL',
        'type'=>'url',
        'section'=>'footer_mission',
        'settings'=>'footer_social_url_3',
        'priority' => 6,
    ));

    // Social Icon picker 4

    $wp_customize->add_setting( 'o2_fa_icon_picker_4', array(
        'default' => 'fa-github',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'o2_fa_icon_picker_4', array(
        'label' => __('Social icon 4', 'textdomain'),
        'description' => __('Choose an icon', 'textdomain'),
        'iconset' => 'fa',
        'section' => 'footer_mission',
        'priority' => 7,
        'settings' => 'o2_fa_icon_picker_4',
        'choices' => array(
            'fa-facebook' => __('Facebook', 'textdomain'),
            'fa-twitter' => __('Twitter', 'textdomain'),
            'fa-instagram' => __('Instagram', 'textdomain'),
            'fa-wordpress' => __('WordPress', 'textdomain'),
            'fa-github' => __('Github', 'textdomain'),
        )
    )));

    $wp_customize->add_setting('footer_social_url_4',array(
        'default'=>'https://github.com/hammersport-marketing',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_social_url_4',array(
        'label'=>'URL',
        'type'=>'url',
        'section'=>'footer_mission',
        'settings'=>'footer_social_url_4',
        'priority' => 8,
    ));

    // Footer copyright text
    $wp_customize->add_setting('footer_copyright_text',array(
        'default'=>'© 2021 HammerSport Marketing. All rights reserved',
        'type' => 'theme_mod',
    ));

    
    $wp_customize->add_control('control_footer_copyright_text',array(
        'label'=>'Copyright text',
        'type'=>'text',
        'section'=>'footer_mission',
        'settings'=>'footer_copyright_text',
    ));


};
