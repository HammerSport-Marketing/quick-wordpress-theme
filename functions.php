<?php

namespace QuickTheme;

// require_once( __DIR__ . '/includes/actions.php');

$files = new \FilesystemIterator( __DIR__.'/includes', \FilesystemIterator::SKIP_DOTS );
foreach ( $files as $file )
{
    /** @noinspection PhpIncludeInspection */
    ! $files->isDir() and include $files->getRealPath();
}

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

// Print into error log function
if (!function_exists('write_log')) {

    function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }

}


include(get_theme_file_path('/includes/front/enqueue.php'));
// include(get_theme_file_path('/includes/setup.php'));
// include(get_theme_file_path('/includes/Navwalker.php'));

setup();