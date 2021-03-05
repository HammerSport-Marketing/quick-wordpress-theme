<?php 
// Add footer menus
add_action( 'init', function(){
    register_nav_menus(
        array(
            'footer-menu-1' => __( 'Footer menu 1' ),
            'footer-menu-2' => __( 'Footer menu 2' ),
            'footer-menu-3' => __( 'Footer menu 3' ),
            'horizontal-footer-menu' => __( 'Horizontal Footer menu' ),
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

 // Scaffold for custom control creation
 
 if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Prefix_Custom_Content' ) ) :
 class Prefix_Custom_Content extends WP_Customize_Control {

     // Whitelist content parameter
     public $content = '';

     /**
      * Render the control's content.
      *
      * Allows the content to be overriden without having to rewrite the wrapper.
      *
      * @since   1.0.0
      * @return  void
      */
     public function render_content() {
         if ( isset( $this->label ) ) {
             echo '<span class="customize-control-title">' . $this->label . '</span>';
         }
         if ( isset( $this->content ) ) {
             echo $this->content;
         }
         if ( isset( $this->description ) ) {
             echo '<span class="description customize-control-description">' . $this->description . '</span>';
         }
     }
 }
 endif;

 

?>

