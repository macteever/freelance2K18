<div class="row align-items-center menu-section anim-300 ml-50 mr-50">
    <div class="col-xl-3 col-lg-3 col-3 anim-300 container-logo-menu pl-15">
       <!-- logo -->
          <div class="logo anim-300 d-flex align-items-center">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Webmaster création de site internet Webdesign Bordeaux Poitiers Nicolas Métivier" class="anim-300 logo-img">
            </a>
            <div class="logo-tagline ml-5 anim-300">
               <p class="ubuntu fs-15 ml-15 mb-0"><strong>Création de site internet</strong></p>
               <p class="ubuntu fs-15 ml-15 mb-0"><strong class="fw-300">Bordeaux | Poitiers</strong></p>
            </div>

          </div>
        <!-- /logo -->
    </div>
    <div class="col-xl-9 col-lg-9 col-9 anim-300 large-menu pr-15 text-right anim-300">
      <nav class="d-flex">
         <?php  customTheme_nav(); ?>
         <div id="menu-btn">
            <button>
               <span></span>
               <span></span>
               <span></span>
            </button>
            <span class="ml-10 ubuntu text-white">MENU</span>
         </div>
      </nav>
        <!-- /nav -->
    </div>
</div>
