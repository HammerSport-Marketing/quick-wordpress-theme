<?php

/**
 * Template Name: Blog Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */

get_header();
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h2>', '</h2>' ); 
        the_post_thumbnail(); 
        the_excerpt();
    endwhile; 
else: 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
get_footer();
