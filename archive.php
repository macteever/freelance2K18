<?php get_header(); ?>
<main role="main" class="main-content">
        <div class="container-fluid tmplt-projets">
            <div class="container pt-150 pb-50">
					<div class="row tmplt-projets-title">
						<h1 class="roboto-slab fs-72 fw-700 ml-15">Les projets</h1>
					</div>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="row row-templt-projets mt-15 mb-15">
						<div class="col-xl-6 col-lg-6 col-md-6 col-12">
							<span class="tmplt-projets-date fs-15"><?php the_time('Y'); ?></span>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<img class="tmplt-projet-thumbnail mb-30" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');" alt="Webmaster Freelance Bordeaux Poitiers Nicolas Métivier"/>
							</a>
							<div class="roboto fs-16 category ml-auto">
								<?php $term_list = wp_get_post_terms($post->ID, 'taxonomy-projets', array("fields" => "all"));
								foreach($term_list as $term_single) {?>
								<span class="fs-15"><?php echo $term_single->name; ?></span>
								<?php } ?>
							</div>
							<h3 class="fs-36 roboto-slab fw-700"><?php the_title(); ?></h3>
						</div>

					</div>
						<?php endwhile; ?>
					<?php endif; ?>
            </div>
        </div>
</main>

<?php get_footer(); ?>
