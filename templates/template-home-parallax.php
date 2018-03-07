<?php /* Template Name: Home-parallax */
   get_header(); ?>
   <main role="main" class="main-content">
      <div id="fullpage">
         <?php
         // check if the repeater field has rows of data
         if( have_rows('home_part') ):
            // loop through the rows of data
            while ( have_rows('home_part') ) : the_row();
            ?>
            <section data-anchor="<?php the_sub_field('anchor'); ?>" class="section home-part background anim-300 <?php the_sub_field('anchor'); ?>" style="background: url(<?php the_sub_field('bkg_part') ?>); background-size: cover;">
               <div class="container">
                  <div class="row align-items-center mw-100">
                     <div class="mw-60">
                        <h2 class="uppercase content-title roboto-slab fw-700 fs-80 mb-15 w-100"><?php the_sub_field('title_part'); ?></h2>
                        <div class="home-loading-bar"></div>
                     </div>
                     <div class="w-100">
                        <p class="home-excerpt fs-18 mt-15 mb-15 mw-40">
                           <?php the_sub_field('excerpt'); ?>
                        </p>
                     </div>
                     <a class="home-part-cta mt-15 anim-300" href="<?php the_sub_field('link'); ?>">En savoir plus</a>
                  </div>
                  <img class="home-img-anim" src="<?php the_sub_field('img_part'); ?>" alt=""/>
               </div>
            </section>
            <?php
         endwhile;
         else :
         endif;
         ?>
      </div>
   </main>
<?php get_footer(); ?>
