<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>   
<?php
/*
Template Name: Contact Page template
*/
?>
	<div id="inner-container">
		<!-- Page Content Display -->
            <h1 class="entry_title"><?php the_title(); ?></h1>
			<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="single" id="post-<?php the_ID(); ?>">										
                					
            <?php the_content('Read the rest of this entry &raquo;'); ?>										
            </div>
            <?php endwhile; ?>
            <div id="navigation">
            <div class="leftalign"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>													
            </div>										
            <?php else : ?>						
            <h1 class="title">Not Found</h1>
            <p>Sorry, but you are looking for something that isn't here.</p>									
            <?php endif; ?>
        <!-- Page Content Display Ends -->
	</div>
	
<?php get_footer(); ?>   
	   