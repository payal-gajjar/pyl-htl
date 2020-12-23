jQuery(document).ready(function($) {
    
    // Copyright change year
    $('#spanYear').html(new Date().getFullYear());

    //Toggle Main Menu
    $(".switcher").click(function(){
      $(".header-menu").toggleClass('show-menu');
      $("body").toggleClass('body-fix');
    });

    //Home Header stikcy
    var videoheight = $('#home-video-player').height();
      if($(window).width()>990) {
      $(window).scroll(function() {
          if ($(window).scrollTop() >=videoheight) {
              $('.home header').addClass('fixed');
          } else {
              $('.home header').removeClass('fixed');
          }
      });

      //Header stikcy
      $(window).scroll(function() {
          if ($(window).scrollTop()) {
              $('.inner-header').addClass('fixed');
          } else {
              $('.inner-header').removeClass('fixed');
          }
      });
  }
    
    //Smoth Scrolling
    $('.arrow  a[href^="#"]').on('click', function(event) {
	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top -80
	        }, 1000);
	    }
	  });

    //Our Client Slider
    $('.logo-slider').slick({
      slidesToShow: 8,
      infinite: true,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    });

    //Testimonial Slider
    $('.testimonial').slick({
      infinite: true,
      slidesToShow: 1,
      autoplay: true,
      adaptiveHeight: true,
      autoplaySpeed: 2000,
      speed:2000,
      slidesToShow: 1,
    });

    //leadership Slider
    $('.leadership-slider').slick({
      slidesToShow: 4,
      infinite: true,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
    
    //Instagram Feed
    (function($){
        $(window).on('load', function(){
            $.instagramFeed({
                'username': 'studio52.tv',
                'container': "#instagram-feed4",
                'display_profile': false,
                'display_biography': false,
                'display_gallery': true,
                'callback': null,
                'styling': true,
                'items': 12,
                'items_per_row': 6,
                'margin': 0
            });
        });
    })(jQuery);

    // $.instagramFeed({
    //     'tag': 'isro',
    //     'container': "#instagram-feed4",
    //     'display_profile': false,
    //     'display_gallery': true,
    //     'items': 12,
    //     'items_per_row': 6,
    //     'margin': 0
    // });

    //Home Contact form
    $(document).on('keyup', '.text-box', function() {
        if ($(this).val()) {
            $(this).addClass('lable-txt');
        } else {
            $(this).removeClass('lable-txt');
        }
    });
   // $('#userpersonalinfo').validationEngine('attach', {promptPosition : "centerLeft", scroll: false});

    // Filter For Artist page
    $(function () {
        var filterList = {
            init: function () {
                $('#portfoliolist').mixItUp({
                  selectors: {
                    target: '.portfolio',
                    filter: '.filter' 
                  },
                  load: {
                    filter: '.hotel, .all-flg, .eng-ara, .all-lang, .malearabic, .femalearabic, .maleenglish, .femaleenglish, .videomd, .audiomd, .safetymd, .timelapsemd, .animationmd, .eventmd, .photomd, .technologymd, .permitmd, .digitalmd, .dronemd'
                  }
                  
                });                             
            }
        };
        filterList.init();
    }); 
    $(document).on('click','#filters li', function(){
      $('#filters').find('li').removeClass('active-tab');
      $(this).addClass('active-tab');
    });

    // Add class on show Section 
    (function($) {
      $.fn.visible  = function(partial) {
      var $t        = $(this),
      $w            = $(window),
      viewTop       = $w.scrollTop(),
      viewBottom    = viewTop + $w.height(),
      _top          = $t.offset().top,
      _bottom       = _top + $t.height(),
      compareTop    = partial === true ? _bottom : _top,
      compareBottom = partial === true ? _top : _bottom;
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
      };
    })(jQuery);
    $(window).scroll(function(event) {
      $("#our-quality-works .over-index, .process-step > div, #who-we-are-sec .left-animate-border, #our-work-sec .over-index, #testimonials-sec .left-animate-border").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("drow-line"); 
        }  
      });
    }); 
});

