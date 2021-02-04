<?php



//Setup variables



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