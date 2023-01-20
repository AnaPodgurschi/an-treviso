<?php

/**
 * Template Name: Privacy page
 */
get_header();
?>
<div class="page-privacy">
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>