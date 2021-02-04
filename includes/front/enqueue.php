<?php

function enqueue()
{
    $stylesheet = get_stylesheet_uri();
    $uri = get_theme_file_uri();

    // register vendor styles
    wp_register_style('fortawesome', $uri . '/src/assets/libs/@fortawesome/fontawesome-free/css/all.min.css');

    // register theme styles

    wp_register_style('quick', $stylesheet);


    wp_enqueue_style('fortawesome');
    wp_enqueue_style('quick');




    // Register core scripts
    wp_register_script('jquery-1', $uri . '/src/assets/libs/jquery/dist/jquery.js', [], '1.0.0',  true);
    wp_register_script('bootstrap', $uri . '/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js', [], '1.0.0',  true);
    // Register vendor scripts
    wp_register_script('svg', $uri . '/src/assets/libs/svg-injector/dist/svg-injector.min.js', [], '1.0.0',  true);
    wp_register_script('feather', $uri . '/src/assets/libs/feather-icons/dist/feather.min.js', [], '1.0.0',  true);
    wp_register_script('scrollBar', $uri . '/src/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js', [], '1.0.0',  true);
    wp_register_script('simpleBar', $uri . '/src/assets/libs/simplebar/dist/simplebar.min.js', [], '1.0.0',  true);
    wp_register_script('in-view', $uri . '/src/assets/libs/in-view/dist/in-view.min.js', [], '1.0.0',  true);
    wp_register_script('sticky-kit', $uri . '/src/assets/libs/sticky-kit/dist/sticky-kit.min.js', [], '1.0.0',  true);
    wp_register_script('images-loaded', $uri . '/src/assets/libs/imagesloaded/imagesloaded.pkgd.min.js', [], '1.0.0',  true);

    // Register theme scripts
    wp_register_script('scripts', $uri . '/src/assets/js/quick-website.js', [], '1.0.0',  true);
    // Register enqueue scripts
    wp_enqueue_script('jquery-1');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('svg');
    wp_enqueue_script('feather');

    wp_enqueue_script('scrollBar');
    wp_enqueue_script('simpleBar');
    wp_enqueue_script('in-view');
    wp_enqueue_script('sticky-kit');
    wp_enqueue_script('images-loaded');

    wp_enqueue_script('scripts');
}
function theme_editor_styles()
{
    $stylesheet = get_stylesheet_uri();
    $uri = get_theme_file_uri();
    add_theme_support('editor-styles');
    add_theme_support( 'post-thumbnails' );
    add_editor_style( 'style-editor.css' );
}