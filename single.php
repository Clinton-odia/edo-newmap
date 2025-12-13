<?php
/**
 * The Template for displaying all single posts
 * This file acts as a "Controller" to load different designs based on category.
 */

if ( in_category( 'news' ) ) {
    // If the post is checked as 'News', load the News design
    get_template_part( 'single', 'news' ); 
} else {
    // For everything else (Projects), load the Project design
    get_template_part( 'single', 'project' );
}
?>