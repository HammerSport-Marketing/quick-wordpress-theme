<?php
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