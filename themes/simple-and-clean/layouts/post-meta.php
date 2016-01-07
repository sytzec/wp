<?php if ( ! is_page() ) : ?>

	<p class="post-meta">
		<?php the_time('j-m-Y'); ?>
		<?php // the_author_posts_link(); ?>
	
		<?php  // the_category(', '); ?><?php edit_post_link('Edit', '&nbsp;&#124;&nbsp;', ''); ?>
	</p>

<?php endif; // ! is_page ?>