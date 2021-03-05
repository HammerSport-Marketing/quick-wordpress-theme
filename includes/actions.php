<?php 


// Hooks
add_action('wp_enqueue_scripts', 'enqueue');
add_action('after_setup_theme', 'register_nav', 0);
add_action('admin_init', 'theme_editor_styles');

// Theme Setup
add_action('after_setup_theme', 'mytheme_setup');

// Custom logo in WP theme editor
add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

// Custom logo in WP theme editor
function mytheme_setup() {
    add_theme_support('custom-logo');
};
add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));