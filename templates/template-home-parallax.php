<?php /* Template Name: Home-parallax */
   get_header(); ?>
   <main role="main" class="main-content">
      <!-- navigation -->
      <div id="menu">
         <ul>
            <?php
            if( have_rows('home_part') ):
               while ( have_rows('home_part') ) : the_row();
               ?>
               <li data-anchor="<?php the_sub_field('anchor'); ?>" class="">
                  <a href="#<?php the_sub_field('anchor'); ?>"><span class="anim-300" </span></a>
               </li>
               <?php
            endwhile;
            else :
            endif;
            ?>
         </ul>
      </div>
      <!-- navigation -->
      <div id="fullpage">
         <?php
         // check if the repeater field has rows of data
         if( have_rows('home_part') ):
            // loop through the rows of data
            while ( have_rows('home_part') ) : the_row();
            ?>
            <section class="section home-part background" style="background: url(<?php the_sub_field('bkg_part'); ?>); background-size: cover;">
               <div class="container h-100">
                  <div class="row align-items-center h-100" data-anchor="<?php the_sub_field('anchor'); ?>">
                     <h2 class="content-title text-white ubuntu fs-72"><?php the_sub_field('title_part'); ?></h2>
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
