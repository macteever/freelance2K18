<?php /* Template Name: About */ get_header(); ?>
	<main role="main" class="main-content">
      <div class="container-fluid light-grey-bkg about-container1">
      </div>
		<div class="container-fluid about-container2">
         <div class="container">
            <div class="row about-row pt-150 pb-100 align-items-end mx-auto mb-30">
               <?php
                  if( have_rows('about_content') ):
                      while ( have_rows('about_content') ) : the_row();
                      ?>
                       <div class="col-xl-5 col-lg-5 col-md-6 col-12 ml-auto">
                          <img class="" src="<?php the_sub_field('img'); ?>"/>
                       </div>
                       <div class="col-xl-5 col-lg-5 col-md-6 col-12 mr-auto">
                         <h1 class="roboto-slab fs-72 ls-1 fw-700 mb-30"><?php the_sub_field('title'); ?></h1>
                         <div class="ubuntu fs-17 lh-24 mb-30">
                            <?php the_sub_field('content'); ?>
                         </div>
                         <div class="about-link">
                            <a class="btn-purple" href="<?php the_sub_field('lien'); ?>">Demande de devis</a>
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
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
