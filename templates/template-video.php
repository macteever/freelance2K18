<?php /* Template Name: Video */ get_header(); ?>
	<main role="main" class="main-content">
      <div class="container-fluid pl-0 pr-0 video-top-page">
         <video autoplay loop id="bkg-video">
            <source
            src="<?php echo get_template_directory_uri(); ?>/assets/img/creation-video-webmaster-bordeaux-poitiers-nicolas-metivier.mp4"
            type="video/mp4">
            <source
            src="<?php echo get_template_directory_uri(); ?>/assets/img/creation-video-webmaster-bordeaux-poitiers-nicolas-metivier.webm"
            type="video/webm">
            <source
             src="<?php echo get_template_directory_uri(); ?>/assets/img/creation-video-webmaster-bordeaux-poitiers-nicolas-metivier.ogv"
             type="video/ogg">
           Votre navigateur ne permet pas de lire les vidéos HTML5.
         </video>
			<div class="container h-100 zi-9">
				<div class="row h-100 align-items-center">
					<div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto video-headlines">
						<h1 class="roboto-slab fs-72 fw-700 ls-1"><?php the_title(); ?></h1>
						<div class="ubuntu fs-17 lh-24 mw-50">
							<?php the_field('intro_video'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid video-content-container">
         <div class="container">
            <?php
            if( have_rows('video_content') ):
                while ( have_rows('video_content') ) : the_row();
                ?>
                <div class="row video-content">
                   <div class="col-xl-10 col-lg-10 col-md-10 col-12 mx-auto d-flex video-content-child">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0">
                        <h2 class="roboto uppercase fs-32 ls-6 mb-20 text-white"><?php the_sub_field('subtitle'); ?></h2>
                        <div class="ubuntu fs-17 lh-24 text-white">
                           <?php the_sub_field('content'); ?>
                        </div>
                        <?php
								$image = get_sub_field('image');
                        $link = get_sub_field('lien');

                        if( $link ): ?>
                           <div class="mt-30">
                              <a class="btn-gold" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                           </div>
                        <?php endif; ?>
                     </div>

                     <div class="col-xl-6 col-lg-6 col-md-6 col-12 pl-0 video-content-child-img hidden-xs">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                     </div>
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
