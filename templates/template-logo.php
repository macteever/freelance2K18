<?php /* Template Name: Logotype */ get_header(); ?>
<main role="main" class="main-content">
   <?php
      if( have_rows('logo_top_page') ):
          while ( have_rows('logo_top_page') ) : the_row();
          ?>
          <div class="container-fluid pt-150 out" style="background: url(<?php the_sub_field('background'); ?>); background-size: cover; background-position: right;">
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
            <div class="row mt-150 mb-250 logo-content align-items-end">
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
      <div class="container-fluid logo-projets">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creation-logo-site-internet-webmaster-poitiers-bordeaux-nicolas-metivier.png" alt="Création de logo webmaster freelance Bordeaux Poitiers Nicolas Métivier"/>
         <div class="container mb-150">
            <div class="row pt-100">
               <div class="col-xl-10 col-lg-10 col-md-10 col-12 ml-auto">
                  <h3 class="roboto-slab uppercase fs-72 ls-10 fw-700 mb-50 pl-15"><?php the_field('logo_projets'); ?></h3>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-10 col-lg-10 col-md-10 col-12 ml-auto">
                  <?php $args = array(
                     'posts_per_page'   => 4,
                     'post_type'        => 'projet',
                     'category'         => 'logo',
                     'category_name'    => 'logo',
                     'orderby'          => 'date',
                     'order'            => 'DESC',
                     'post_status'      => 'publish',
                     'suppress_filters' => true
                  );

                  $myposts = get_posts( $args );

                  foreach ( $myposts as $post ) : setup_postdata( $post );
                  ?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 float-left mt-15 mb-15">
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div style="height: 300px; background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
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
         <div class="roboto fs-17 ls-1 pr-15 mt-50 text-right link-category-logo">
            <a href="<?php echo get_site_url(); ?>/category/logo/">Voir tout les projets</a>
         </div>
      </div>
</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
