<?php
/*
 * Notice: Please it's important to keep in mind that
 * Enqueuing order matters. 
 * For example, enqueuing theme js before jQuery will result in
 * error cause jQuery has not been declared at the point where theme.js
 * is trying to use it!
 * 
 * The order is consistent with original HTML theme
*/

function enqueue()
{
    $stylesheet = get_stylesheet_uri();
    $uri = get_theme_file_uri();
    
    // Enqueue page CSS
    wp_enqueue_style('swiper-css', $uri."/assets/libs/swiper/dist/css/swiper.min.css");
    wp_enqueue_style('fancybox-css', $uri."/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css");
    
    // Enqueue Vendor styles
    wp_enqueue_style( 'style', $uri . '/assets/libs/@fortawesome/fontawesome-free/css/all.min.css'  );
    
    // Enqueue Theme styles
    wp_enqueue_style('quick', $stylesheet);

    // Enqueue core scripts
    wp_enqueue_script('jquery-1', $uri . '/assets/libs/jquery/dist/jquery.min.js');
    wp_enqueue_script('bootstrap', $uri . '/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('svg', $uri . '/assets/libs/svg-injector/dist/svg-injector.min.js');
    wp_enqueue_script('feather', $uri . '/assets/libs/feather-icons/dist/feather.min.js');

    // Enqueue Optional scripts
    // wp_enqueue_script('scrollBar', $uri . '/assets/libs/jquery.scrollbar/jquery.scrollbar.min.js');
    // wp_enqueue_script('simpleBar', $uri . '/assets/libs/simplebar/dist/simplebar.min.js');
    wp_enqueue_script('in-view', $uri . '/assets/libs/in-view/dist/in-view.min.js');
    wp_enqueue_script('sticky-kit', $uri . '/assets/libs/sticky-kit/dist/sticky-kit.min.js');
    wp_enqueue_script('images-loaded', $uri . '/assets/libs/imagesloaded/imagesloaded.pkgd.min.js');

    // Page JS
    wp_enqueue_script('swiper', $uri . "/assets/libs/swiper/dist/js/swiper.min.js");
    wp_enqueue_script('fancybox', $uri . "/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js");
    wp_enqueue_script('typed', $uri . "/assets/libs/typed.js/lib/typed.min.js");    
    
    // Enqueue Theme JS
    wp_enqueue_script('scripts', $uri . '/assets/js/quick-website.js');

}

function theme_editor_styles()
{
    $stylesheet = get_stylesheet_uri();
    $uri = get_theme_file_uri();
    add_theme_support('editor-styles');
    add_theme_support( 'post-thumbnails' );
    add_editor_style( 'style-editor.css' );
}