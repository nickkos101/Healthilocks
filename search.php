<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<banner>
						<div class="inner-banner">
							<div class="banner-img">
							<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Banner Widget') ) : ?> <?php endif; ?></ul>
							</div>
						</div>
					</banner>
				
					<container>
						<div class="inner-container">
							<div class="inner-left-container">

<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div>
							<div class="inner-right-container">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('News Widget') ) : ?> <?php endif; ?></ul>
							</div>
						</div>
					</container>
				
					<div id="panel">
						<div class="inner-panel">
						
							<div class="panel-section">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Panel One Widget') ) : ?> <?php endif; ?></ul>
							</div>
							
							<div class="panel-section">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Panel Two Widget') ) : ?> <?php endif; ?></ul>
							</div>
							
							<div class="panel-section">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Panel Three Widget') ) : ?> <?php endif; ?></ul>
							</div>
							
							<div class="panel-section">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Panel Four Widget') ) : ?> <?php endif; ?></ul>
							</div>
							
							<div class="panel-section">
								<ul style="list-style:none; margin:0; padding:0; "><?php if ( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar('Panel Five Widget') ) : ?> <?php endif; ?></ul>
							</div>	
																		
						</div>
					</div>
<?php get_footer(); ?>
