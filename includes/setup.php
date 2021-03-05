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
        'priority'=>10,
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

    // Mission

    $wp_customize->add_section('footer_mission',array(
        'title'=>'Mission',
        'priority'=>10,
        'panel'=>'footer',
    ));

    $wp_customize->add_setting('footer_company_mission',array(
        'default'=> 'Webpixels attempts to bring the best development
        experience to designers and developers by offering the tools needed for having a quick and
        solid start in most web projects.',
        'type' => 'theme_mod',
    ));
    
    $wp_customize->add_control('control_footer_company_mission',array(
        'label'=>'Subtitle',
        'type'=>'text',
        'section'=>'footer_mission',
        'settings'=>'footer_company_mission',
    ));
};
