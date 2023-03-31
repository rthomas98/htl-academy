<?php
/*
 * Template name: Marketing Page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BuddyBoss_Theme
 */

get_header('marketing');
?>

<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :

        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'practice_areas' ):
            include( get_stylesheet_directory() . '/acf-blocks/practice-areas.php' );
        endif;

        if ( get_row_layout() == 'about_me' ):
            include( get_stylesheet_directory() . '/acf-blocks/about-me.php' );
        endif;

        if ( get_row_layout() == 'recent_post' ):
            include( get_stylesheet_directory() . '/acf-blocks/recent-post.php' );
        endif;

    endwhile;
endif; ?>

<?php
get_footer('marketing');
