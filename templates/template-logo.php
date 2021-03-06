<?php /* Template Name: Logotype */ get_header(); ?>
<main role="main" class="main-content">
   <?php
      if( have_rows('logo_top_page') ):
          while ( have_rows('logo_top_page') ) : the_row();
          ?>
          <div class="container-fluid logo-top-page" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: bottom;">
             <div class="container h-100">
                <div class="row h-100 align-items-center">
                   <div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto page-intro">
                     <h1 class="roboto-slab fs-72 fw-700 mt-0"><?php the_sub_field('title'); ?></h1>
                     <div class="ubuntu fs-18 lh-24 mb-30">
                        <?php the_sub_field('headline'); ?>
                     </div>
                     <div class="ml-30">
                        <a class="btn-grey" href="<?php the_sub_field('lien'); ?>">Demande de devis</a>
                     </div>
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
            <div class="row mt-150 mb-250 logo-content align-items-end justify-content-around">
               <div class="col-xl-5 col-lg-5 col-md-12 col-12 zi-99">
                  <div class="roboto-slab fs-66 fw-700 ls-1 mb-30"><?php the_sub_field('subtitle'); ?></div>
                  <div class="ubuntu fs-17 lh-24 mt-20 ">
                     <?php the_sub_field('content'); ?>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-12 zi-9 logo-content-img">
                  <?php
                     $image = get_sub_field('img');
                  ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
               </div>
            </div>
            <?php
            endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
      <div class="container-fluid logo-projets">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creation-logo-site-internet-webmaster-poitiers-bordeaux-nicolas-metivier.png" alt="Création de logo webmaster freelance Bordeaux Poitiers Nicolas Métivier"/>
         <div class="container mb-150">
            <div class="row pt-100 row-projets">
               <div class="col-xl-9 col-lg-9 col-md-12 col-12 mx-auto">
                  <h3 class="roboto-slab fs-60 ls-1 fw-700 mb-30 pl-15"><?php the_field('logo_projets'); ?></h3>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-9 col-lg-9 col-md-12 col-12 mx-auto">
               <?php
               $myposts = get_posts(array(
                   'showposts' => 4,
                   'post_type' => 'projets',
                   'orderby'  => 'name',
                   'order'     => 'DESC',
                   'tax_query' => array(
                       array(
                       'taxonomy' => 'taxonomy-projets',
                       'field' => 'slug',
                       'terms' => array('creation-de-logo'))
                   ))
               );
                     foreach ( $myposts as $post ) : setup_postdata( $post );
                  ?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 float-left mt-15 mb-15">
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="projet-thumbnail" style="height: 280px; background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                     </a>
                  </div>
                  <?php
                  endforeach;
                  ?>
                  <?php wp_reset_postdata();
                  ?>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-12 mx-auto roboto fs-17 pr-15 mt-30 text-right link-category-logo">
               <a class="pr-15" href="<?php echo get_site_url(); ?>/taxonomy-projets/creation-de-logo/">Voir tout les projets</a>
            </div>
         </div>
      </div>
      <!-- DIV TEST -->
      <div class="container">

      </div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
