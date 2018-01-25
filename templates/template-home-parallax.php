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
            <section class="section home-part background" style="background: url(<?php the_sub_field('bkg_part'); ?>); background-size: cover;">
               <div class="container h-100">
                  <div class="row align-items-center h-100">
                     <h2 class="content-title text-white ubuntu fs-72"><?php the_sub_field('title_part'); ?></h2>
                  </div>
                  <div class="test">
                     <p>
                        test git diff
                     </p>
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
