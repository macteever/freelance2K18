<?php /* Template Name: Logotype */ get_header(); ?>
<main role="main" class="main-content">
   <?php
      if( have_rows('logo_top_page') ):
          while ( have_rows('logo_top_page') ) : the_row();
          ?>
          <div class="container-fluid pt-150" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: right;">
             <div class="container">
                <div class="row mt-80">
                   <div class="col-xl-1 col-lg-1 col-md-1 col-12 logo-intro"></div>
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
                   <div class="col-xl-8 col-lg-8 col-md-8 col-12 pl-50">
                      <a class="btn-grey" href="<?php the_sub_field('lien'); ?>">Demande de devis</a>
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
         <div class="container">
         <?php
         if( have_rows('logo_content') ):
            while ( have_rows('logo_content') ) : the_row();
            ?>
            <div class="row mt-150 mb-150 logo-content align-items-end">
               <div class="col-xl-1 col-lg-1 col-md-1 col-12">
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-12 zi-99">
                  <h2 class="roboto-slab fs-72 fw-700 uppercase ls-12 text-gold"><?php the_sub_field('subtitle'); ?></h2>
                  <div class="ubuntu fs-18 lh-24 mt-20">
                     <?php the_sub_field('content'); ?>
                  </div>
               </div>
               <div class="col-xl-1 col-lg-1 col-md-1 col-12">
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-12 zi-9">
                  <img src="<?php the_sub_field('img'); ?>" />
               </div>
            </div>
            <?php
            endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
