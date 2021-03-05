<?php 
// Add footer menus
add_action( 'init', function(){
    register_nav_menus(
        array(
            'footer-menu-1' => __( 'Footer menu 1' ),
            'footer-menu-2' => __( 'Footer menu 2' ),
            'footer-menu-3' => __( 'Footer menu 3' )
        )
    );
});

 add_action( 'customize_register', function($wp_customize){
// Theme Options Panel
$wp_customize->add_panel( 'nd_dosth_theme_options', 
    array(
        //'priority'       => 100,
        'title'            => __( 'Theme Options', 'nd_dosth' ),
        'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'nd_dosth' ),
    ) 
);
 } );

?>