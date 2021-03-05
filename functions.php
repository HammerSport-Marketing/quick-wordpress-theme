<?php

namespace QuickTheme;

// require_once( __DIR__ . '/includes/actions.php');

$files = new \FilesystemIterator( __DIR__.'/includes', \FilesystemIterator::SKIP_DOTS );
foreach ( $files as $file )
{
    /** @noinspection PhpIncludeInspection */
    ! $files->isDir() and include $files->getRealPath();
};

/**
* Customizer additions.
*/
require get_template_directory() . '/includes/customizer/register.php';
include(get_theme_file_path('/includes/front/enqueue.php'));

// Automatic post excerpts
add_action('auto_excerpts', function(){
    add_post_type_support( 'page', 'excerpt' );
});


add_action( 'customize_register', 'themeslug_customize_register' );

add_action('wp_enqueue_scripts','enqueue');

theme_editor_styles();
setup();