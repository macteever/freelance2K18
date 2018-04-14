<?php get_header(); ?>
	<main role="main">
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container pt-150">
					<div class="row">
						<div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto">
							<h1 class="roboto-slab fw-700 fs-60 ls-1 mb-20"><?php the_title(); ?></h1>
							<div class="custom-post-details d-flex mb-20">
								<span class="roboto fs-17 date">le <?php the_time('j F Y'); ?> | </span>
								<span class="roboto fs-17 author ml-5"> <?php _e( ' par', 'html5blank' ); ?> <strong><?php the_author(); ?></strong></span>
								<div class="roboto fs-16 category ml-auto">
									<?php $term_list = wp_get_post_terms($post->ID, 'taxonomy-projets', array("fields" => "all"));
									foreach($term_list as $term_single) {?>
									Catégorie | <strong class="fs-16"><a href="<?php echo get_site_url(); ?>/taxonomy-projets/creation-de-logo/"><?php echo $term_single->name; ?></a></strong>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<?php // repetaur pour les créations des projets
						if( have_rows('visuel_projet') ):
						    while ( have_rows('visuel_projet') ) : the_row();
						?>
						<div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto mt-30 mb-30 content-projet">
							<?php
	                     $image = get_sub_field('visuel');
	                  ?>
							<img class="visuel-projet" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
							<div class="legende-projet roboto italic fs-15 mt-15">
								<?php the_sub_field('legende'); ?>
							</div>
						</div>
						<?php
						    endwhile;
						else :
						endif;
						?>
					</div>
					<div class="row posts-pagination mt-50	mb-30">
						<div class="col-xl-10 col-lg-10 col-md-10 col-12 d-flex justify-content-between mx-auto">
							<div class="nav-previous previus-post"><?php previous_post_link(); ?></div>
							<div class="nav-next next-post"><?php next_post_link(); ?></div>
						</div>
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

		<?php endwhile; ?>

		<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
