<?php /* Template Name: Home-parallax */
   get_header(); ?>
   <main role="main" class="main-content">
      <!-- navigation -->

      <!-- navigation -->
      <div id="fullpage">
         <?php
         // check if the repeater field has rows of data
         if( have_rows('home_part') ):
            // loop through the rows of data
            while ( have_rows('home_part') ) : the_row();
            ?>
            <section data-anchor="<?php the_sub_field('anchor'); ?>" class="section home-part background anim-300 <?php the_sub_field('anchor'); ?>" style="background: url(<?php the_sub_field('bkg_part'); ?>); background-size: cover;">
               <div class="container">
                  <div class="row align-items-center mw-50">
                     <h2 class="uppercase content-title ubuntu fs-60 mb-15 w-100"><?php the_sub_field('title_part'); ?></h2>
                     <div class="home-loading-bar"></div>
                     <p class="home-excerpt fs-18 mt-15">
                        <?php the_sub_field('excerpt'); ?>
                     </p>
                     <a class="home-part-cta mt-15 anim-300" href="<?php the_sub_field('link'); ?>">En savoir plus</a>
                  </div>
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
