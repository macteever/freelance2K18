<?php /* Template Name: Création de site web */ get_header(); ?>
<main role="main" class="main-content">
	<?php
	if( have_rows('web_top_page') ):
		while ( have_rows('web_top_page') ) : the_row();
		?>
		<div class="container-fluid pt-150 anim-300" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: right;">
			<div class="container">
				<div class="row mt-80">
					<div class="col-xl-1 col-lg-1 col-md-1 col-12 web-intro"></div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-12 pl-50 ">
						<h1 class="roboto-slab fs-72 fw-700 mt-0 mb-50 text-light-grey"><?php the_sub_field('title'); ?></h1>
						<div class="ubuntu fs-18 lh-24 mb-50 text-light-grey">
							<?php the_sub_field('headline'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid web-submenu-container anim-300">
			<div class="container">
				<div class="row align-items-center web-submenu-row anim-300">
					<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
					<div class="col pl-50">
						<a class="btn-grey" href="<?php the_sub_field('lien'); ?>">Demande de devis</a>
					</div>
					<div class="col">
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
	<div class="container-fluid o-hidden pl-0 pr-0 anim-300">
		<?php
		if( have_rows('web_first_part') ):
			while ( have_rows('web_first_part') ) : the_row();
			?>
			<div class="row mt-100 align-items-end anim-300">
				<div class="col-xl-4 col-lg-4 col-md-4">
					<img src="<?php the_sub_field('img'); ?>" alt=""/>
				</div>
				<div class="text-container7 web-first-part zi-99">
					<h2 class="roboto-slab fs-48 ls-6 uppercase mb-30"><?php the_sub_field('title'); ?></h2>
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
			<div class="row">
				<div class="ml-auto col-xl-11 col-lg-11 col-md-1 col-12 pl-0 web-etapes-title">
					<h3 class="roboto fs-42 fw-500 ls-10 uppercase">Les étapes</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- SLICK SLIDES PART -->
	<div class="container-fluid web-slider-container pl-0 pr-0">
		<?php
		if( have_rows('web_slider_container') ):
			while ( have_rows('web_slider_container') ) : the_row();
			?>
			<div class="container">
				<div class="row zi-999 mt-50 mb-50 web-slider-headlines">
					<div class="mx-auto pl-0 col-xl-10 col-lg-10 col-md-10 col-12 web-slider-title d-flex zi-999 ">
						<span class="roboto-slab fw-700 fs-180 text-gold"><?php the_sub_field('number'); ?></span>
						<h3 class="roboto fw-500 fs-100 text-light-grey lowercase ml-30"><?php the_sub_field('title'); ?></h3>
					</div>
				</div>
			</div>
			<div class="row zi-9 align-items-center mr-0 <?php the_sub_field('title'); ?>">
				<div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0 pr-0 img-web-slider">
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
					<div class="text-container content-web-slider">
						<?php
						if( have_rows('content_web_slider') ):
							while ( have_rows('content_web_slider') ) : the_row();
							?>
							<div>
								<h3 class="roboto-slab fs-36 fw-700 ls-6 pl-50"><?php the_sub_field('subtitle_web_slide'); ?></h3>
								<div class="ubuntu fs-18 lh-24 web-slider-content">
									<?php the_sub_field('content_web_slide'); ?>
								</div>
							</div>
							<?php
						endwhile;
						else :
						endif;
						?>
					</div>
					<div class="d-inline-block white-bkg web-slider-arrows zi-9999">
						<img class="web-left-arrow mr-30" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left-webmaster-bordeaux-poitiers-nicolas-metivier.svg" alt=""/>
						<img class="web-right-arrow ml-30" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-webmaster-bordeaux-poitiers-nicolas-metivier.svg" alt=""/>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		else :
		endif;
		?>
	</div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
