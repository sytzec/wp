<?php
/**
 * Template Name: timeline
 MultiEdit: Before	
 */

 get_header(); ?>
 
 <div id="content2" class="clearfix" role="main">
	 
 
	
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'content', get_post_format() ); ?>
		
		<?php endwhile; ?>
		
	<?php else : ?>
	
		<?php get_template_part( 'content', 'none' ); ?>
	
	<?php endif; ?>
 	
 	<?php get_template_part( 'layouts/pagination' ); ?>

 
 <?php // get_sidebar(); ?>
 
 <?php get_footer(); ?>