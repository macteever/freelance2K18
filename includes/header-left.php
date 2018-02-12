<div class="row align-items-center menu-section anim-300">
    <div class="col-xl-3 col-lg-3 col-3 anim-300 container-logo-menu pl-15">
       <!-- logo -->
          <div class="logo anim-300 d-flex align-items-center">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.svg" alt="Création de site internet Webdesign Bordeaux Poitiers Nicolas Métivier" class="anim-300 logo-img">
            </a>
            <div class="logo-tagline ml-5">
               <p class="ubuntu fs-18 ml-15 mb-0"><strong>Webdesigner</strong></p>
               <p class="ubuntu fs-18 ml-15 mb-0"><strong>Intégrateur</strong></p>
            </div>

          </div>
        <!-- /logo -->
    </div>
    <div class="col-xl-9 col-lg-9 col-9 anim-300 large-menu pr-15 text-right">
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
