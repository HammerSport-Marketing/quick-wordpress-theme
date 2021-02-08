<?php



//Setup variables
// function mytheme_customize_register( $wp_customize ) {
//     $wp_customize->add_section( 'themeslug_logo_section' , array(
//         'title'         => __( 'Logo', 'themeslug' ),
//         'priority'      => 30,
//         'description'   => 'Upload a logo to replace the default site name and description in the header',
//     ));
//     $wp_customize->add_setting( 'themeslug_logo' );
//     $wp_customize->add_control( new WP_Customize_Image_Control(
//         $wp_customize, 'themeslug_logo', array(
//             'label'     => __( 'Logo', 'themeslug' ),
//             'section'   => 'themeslug_logo_section',
//             'settings'  => 'themeslug_logo',
//         )
//     ));
// }
// add_action( 'customize_register', 'mytheme_customize_register' );


// Custom logo in WP theme editor
function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

add_action('after_setup_theme', 'mytheme_setup');


// Includes


include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/Navwalker.php'));



// Hooks
add_action('wp_enqueue_scripts', 'enqueue');
add_action('after_setup_theme', 'register_nav', 0);
add_action('admin_init', 'theme_editor_styles');
setup();

// Shortcodes