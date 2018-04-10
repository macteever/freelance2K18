<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container pt-150">
				<div class="row mx-auto">
					<div class="col-xl-12 col-lg-10 col-md-10 col-12">
						<h1 class="roboto-slab fw-700 fs-60 ls-10 mb-20 uppercase"><?php the_title(); ?></h1>
						<div class="post-details mb-20">
							<span class="roboto fs-17 date"> Posté le <?php the_time('j F Y'); ?> | </span>
							<span class="roboto fs-17 author"><?php _e( 'par', 'html5blank' ); ?> <strong><?php the_author(); ?></strong></span>
						</div>
					</div>
				</div>

						<div class="text-justify post-text">
							<?php the_content(); ?>
						</div>
				<div class="row justify-content-center posts-pagination mt-50	mb-30">
					 <?php posts_nav_link(' &#183; ', 'Prec', 'Suiv'); ?>
					  <span class="nav-previous previus-post"><?php previous_post_link(); ?></span>
					  <span class="ml-15 mr-15">|</span>
					  <span class="nav-next next-post"><?php next_post_link(); ?></span>

				</div>
				<div class="row justify-content-center social-share mb-15">
					<p class="fs-16 text-center">PARTAGEZ</p>
				</div>
				<div class="row justify-content-center mb-50">
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook-official fs-18 mr-30" aria-hidden="true"></i></a>
					<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus fs-18 ml-30" aria-hidden="true"></i></a>
				</div>
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
