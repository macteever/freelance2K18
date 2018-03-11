<?php /* Template Name: Création de site web */ get_header(); ?>
	<main role="main" class="main-content">
      <?php
         if( have_rows('web_top_page') ):
          while ( have_rows('web_top_page') ) : the_row();
          ?>
          <div class="container-fluid pt-150" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: right;">
             <div class="container">
                <div class="row mt-80">
                   <div class="col-xl-1 col-lg-1 col-md-1 col-12 web-intro"></div>
                   <div class="col-xl-8 col-lg-8 col-md-8 col-12 pl-50 ">
                     <h1 class="roboto-slab fs-72 fw-700 mt-0"><?php the_sub_field('title'); ?></h1>
                     <div class="ubuntu fs-18 lh-24 mb-30">
                        <?php the_sub_field('headline'); ?>
                     </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="container-fluid">
             <div class="container">
                <div class="row pt-40">
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
			<div class="container-fluid">
				<?php
		         if( have_rows('web_first_part') ):
		          while ( have_rows('web_first_part') ) : the_row();
		          ?>
					 <div class="row mt-100 align-items-end">
						 <img src="<?php the_sub_field('img'); ?>" alt=""/>
						 <div class="text-container web-first-part zi-99">
							<h2 class="roboto-slab fs-48 ls-6 uppercase mb-30"><?php the_sub_field('title'); ?></h2>
							<div class="fs-18 lh-24 text-grey ubuntu web-first-part-content">
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
						<div class="ml-auto col-xl-11 col-lg-11 col-md-1 col-12 pl-0">
							<h3 class="roboto fs-42 fw-500 ls-10 uppercase">Les étapes</h3>
						</div>
					</div>
				 </div>
			</div>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
