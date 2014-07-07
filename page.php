<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<container>
		<div class="left-content">
			<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Sidebar Widget') ) : ?> <?php endif; ?></ul>
		</div>
		<div class="right-content">
			<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Slider Widget') ) : ?> <?php endif; ?></ul>
 			<div class="box-content">
				<div class="box-one">
					<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Bottom Box Two Widget') ) : ?> <?php endif; ?></ul>
				</div>
				<div class="box-two">
					<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Bottom Box One Widget') ) : ?> <?php endif; ?></ul>
				</div>
			</div>
			<div class="main-holder">
				<!-- Page Content Display -->
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
		</div>
	</container>

<?php get_footer(); ?>


