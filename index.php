<?php get_header(); ?>
<main>
	<div class="container mt-150">
		<?php
		if(have_posts()) : while(have_posts()) : the_post();
		?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>'

		<?php
	endwhile; endif;
	?>
	</div>
</main>
<?php get_footer(); ?>
