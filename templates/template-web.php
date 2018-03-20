<?php /* Template Name: Création de site web */ get_header(); ?>
<main role="main" class="main-content">
	<?php
	if( have_rows('web_top_page') ):
		while ( have_rows('web_top_page') ) : the_row();
		?>
		<div class="container-fluid pt-80 anim-300 web-top-page out" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: right center;">
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto page-intro">
						<h1 class="roboto-slab fs-72 fw-700 mt-0 mb-50"><?php the_sub_field('title'); ?></h1>
						<div class="ubuntu fs-18 lh-24 mb-50">
							<?php the_sub_field('headline'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid web-submenu-container anim-300">
			<div class="container anim-300">
				<div class="row align-items-center web-submenu-row anim-300">
					<div class="col pl-50">
						<a class="btn-grey" href="<?php the_sub_field('lien'); ?>">Demande de devis</a>
					</div>
					<div class="d-flex">
						<nav class="web-submenu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'categories-menu' ) ); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<?php
	endwhile;
	else :
	endif;
	?>
	<div class="container-fluid o-hidden pl-0 pr-0 web-first-part-container anim-300">
		<?php
		if( have_rows('web_first_part') ):
			while ( have_rows('web_first_part') ) : the_row();
			?>
			<div class="row mt-100 align-items-end anim-300">
				<div class="col-xl-4 col-lg-4 col-md-4">
					<img src="<?php the_sub_field('img'); ?>" alt=""/>
				</div>
				<div class="text-container7 web-first-part zi-99">
					<h2 class="roboto-slab fs-60 fw-700 ls-10 uppercase mb-30"><?php the_sub_field('title'); ?></h2>
					<div class="fs-17 lh-24 text-grey ubuntu web-first-part-content">
						<?php the_sub_field('content'); ?>
					</div>
					<img class="zi-9" src="<?php echo get_template_directory_uri(); ?>/assets/img/webmaster-creation-site-internet-bordeaux-poitiers-nicolas-metivier4.png" alt="" />
				</div>
			</div>

			<?php
		endwhile;
		else :
		endif;
		?>
		<div class="container">
			<div class="row mb-50">
				<div class="ml-auto col-xl-11 col-lg-11 col-md-1 col-12 pl-0 web-etapes-title">
					<h3 class="roboto fs-42 fw-500 ls-10 uppercase">Les étapes</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- SLICK SLIDES PART -->
	<?php
	if( have_rows('web_slider_container') ):
		while ( have_rows('web_slider_container') ) : the_row();
		?>
	<div class="container-fluid web-slider-container mb-80 pl-0 pr-0">
			<div class="container">
				<div class="row zi-999 web-slider-headlines">
					<div class="mx-auto pl-0 col-xl-10 col-lg-10 col-md-10 col-12 <?php the_sub_field('title'); ?> web-slider-title d-flex zi-999 ">
						<span class="roboto-slab fw-700 fs-180 text-gold"><?php the_sub_field('number'); ?></span>
						<h3 class="roboto fw-500 fs-100 text-light-grey lowercase ml-30 mr-30"><?php the_sub_field('title'); ?></h3>
					</div>
				</div>
			</div>
			<div class="row zi-9 align-items-center mr-0 <?php the_sub_field('title'); ?> web-slider-row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0 pr-0 <?php the_sub_field('class_img'); ?>">
					<?php
					if( have_rows('img_web_slider') ):
						while ( have_rows('img_web_slider') ) : the_row();
						?>
						<img class="" src="<?php the_sub_field('img_web_slide') ?>" alt="" title=""/>
						<?php
					endwhile;
					else :
					endif;
					?>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0 pr-0">
					<div class="text-container <?php the_sub_field('class_content'); ?>">
						<?php
						if( have_rows('content_web_slider') ):
							while ( have_rows('content_web_slider') ) : the_row();
							?>
							<div>
								<h3 class="roboto-slab fs-36 fw-700 ls-6 pl-50"><?php the_sub_field('subtitle_web_slide'); ?></h3>
								<div class="ubuntu fs-17 lh-24 web-slider-content">
									<?php the_sub_field('content_web_slide'); ?>
								</div>
							</div>
							<?php
						endwhile;
						else :
						endif;
						?>
					</div>
				</div>
			</div>
	</div>
	<?php
endwhile;
else :
endif;
?>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
