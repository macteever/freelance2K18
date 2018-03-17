(function ($, root, undefined) {

		$(document).ready(function(){

   // RESIZE HEADER SCROLLTOP

    $(window).scroll(function(){
      var $header = $('.header');
			var $menu_section = $('.large-menu, .logo-tagline');
      if ($(this).scrollTop() > 80){
				$menu_section.css({"-webkit-transform":"translateY(-80px)"});
      }
      else{
				$menu_section.css({"-webkit-transform":"translateY(0px)"});
      }
    });

	 // FIXED WEB PAGE submenu
	 $(window).scroll(function(){
		var $subMenu_web = $('.web-submenu-container');

      if ($(this).scrollTop() > 568){
			if (!$($subMenu_web.hasClass('submenu-fixed'))) {
				$subMenu_web.addClass('submenu-fixed');
			}
      }
      else{
			if($($subMenu_web.hasClass('submenu-fixed'))) {
				$subMenu_web.removeClass('submenu-fixed');
			}
      }
    });


    // MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')/*,*/
          // Add here...
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").fadeToggle("slow");
        $("#header-sticky").css('background-color','transparent');
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

        });

      // ADD class anim with Delay
          $('#menu-btn').click(function() {
              if ( $('body').hasClass( "responsive" ) ) {
                  $('.nav-mobile li').removeClass('animation-fade-out')
                  var delay = 0;
                   $('.nav-mobile li').each(function() {
                     var $li = $(this);
                     setTimeout(function() {
                       $li.addClass('animation-fade-up');
                     }, delay+=100); // delay 100 ms
                   });
              }
              else {
                  setTimeout(function() {
                      $('.nav-mobile li').removeClass('animation-fade-up');
                  }, 800);

              }
          });
          $('ul>li>a').click(function() {
           // $('body').removeClass('responsive');
           $('.nav-mobile').css('display', 'none');
           $('#menu-btn > button').toggleClass('menu-open');
          });

		// START RESIZE
      $(window).on("load resize", function () {

		// HOME PAGE PARALLAX

			$('#fullpage').fullpage({
				anchors: ['home_part1', 'home_part2', 'home_part3', 'home_part4'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Site web', 'Identité visuelle', 'Video | Motion', 'About'],
				showActiveTooltip: true,
				slidesNavigation: true,
				slidesNavPosition: 'right',
				loopTop: true,
				loopBottom: true,
				//Scrolling
				scrollingSpeed: 800,
				touchSensitivity: 1000,
				afterLoad: function(anchorLink, index){
					var loadedSection = $(this);
					if(index == 1){
						$('.home_part1 .home-loading-bar').addClass('progressBar');
						$('.home_part2 .home-loading-bar').removeClass('progressBar');
						$('.home_part3 .home-loading-bar').removeClass('progressBar');
						$('.home_part4 .home-loading-bar').removeClass('progressBar');
					}
					else if (index == 2) {
						$('.home_part2 .home-loading-bar').addClass('progressBar');
						$('.home_part1 .home-loading-bar').removeClass('progressBar');
						$('.home_part3 .home-loading-bar').removeClass('progressBar');
						$('.home_part4 .home-loading-bar').removeClass('progressBar');
					}
					else if (index == 3) {
						$('.home_part3 .home-loading-bar').addClass('progressBar');
						$('.home_part2 .home-loading-bar').removeClass('progressBar');
						$('.home_part4 .home-loading-bar').removeClass('progressBar');
						$('.home_part1 .home-loading-bar').removeClass('progressBar');
					}
					else if (index == 4) {
						$('.home_part4 .home-loading-bar').addClass('progressBar');
						$('.home_part1 .home-loading-bar').removeClass('progressBar');
						$('.home_part2 .home-loading-bar').removeClass('progressBar');
						$('.home_part3 .home-loading-bar').removeClass('progressBar');
					}
		 		},
				 afterRender: function(){
				 	 setInterval(function(){
				 		  $.fn.fullpage.moveSectionDown();
				 	 }, 15000); // 15000
				}
			});

		/* BLUR EFFECT BACKGROUND */

		$(window).on('scroll', function () {
		    var pixs = $(document).scrollTop()
		    pixs = pixs / 100;
		    $(".out").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" })
		});

      /*  CONTAINER FULL WIDTH TEXT GRID */

         var w_container = $('.container').width();
         var w_window = $( window ).width();
         $('.text-container').css("width", w_container/2);
         $('.text-container-left').css("width", w_container/2);
         $('.text-container-left').css("margin-left",(w_window - w_container)/2);
         $('.text-container-left-p').css("padding-left",(w_window - w_container)/2);

			$('.text-container4').css('width', w_container/3);
		   $('.text-container4-left').css("width", w_container/3);
		   $('.text-container4-left').css("margin-left",(w_window - w_container)/2);

			$('.text-container7').css('width', w_container/1.714);
		   $('.text-container7-left').css("width", w_container/1.714);
		   $('.text-container7-left').css("margin-left",(w_window - w_container)/2);

         var wf_container = $('.container-fluid').width();
         $('.text-container-fluid').css("width", wf_container/2);

      }).resize();
		// END RESIZE

		// SLICK SLIDER PAGE SITE WEB

		$('.content-web-slider').slick({
			arrows: false,
			dots: false,
			fade: true
		});
		$('.img-web-slider').slick({
			arrows: false,
			dots: false
		});

		// CONTROL FIRST SLIDE WEBPAGE
		$('.web-left-arrow').click(function(){
		$('.WEBDESIGN .content-web-slider, .WEBDESIGN .img-web-slider').slick('slickPrev');
	 	});
		$('.web-right-arrow').click(function(){
		$('.WEBDESIGN .content-web-slider, .WEBDESIGN .img-web-slider').slick('slickNext');
	 	});

		// INSERT DOTS
		$( "<ul class='web-slider-dots'><li class='fs-12 roboto'>UX design</li><li class='roboto fs-12'>Responsive</li></ul>" ).insertAfter( ".content-web-slider" );

      // SLIDER PAGE BLOG

      $('.subheader-blog-slider').slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      });

		});
})(jQuery, this);
