<?php get_header(); ?>
<?php
/*
Template Name: Development Page templalte
*/
?>
<div id="container">

<div id="content" role="main">

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>

<?php $recent = new WP_Query('post_type=events&posts_per_page=10'); while($recent->have_posts()) : $recent->the_post();?>

<?php the_title( '<h2><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

<div class="entry-content">

<?php the_content(); ?>

<?php wp_link_pages( array( 'before' => '<div>' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

</div><!– .entry-content –>

<?php comments_template( ", true" ); ?>

<?php endwhile; ?>

</div><!– #content –>

</div><!– #container –>

<?php get_sidebar(); ?>

<?php get_footer(); ?>