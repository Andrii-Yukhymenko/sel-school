@@include('_slick.min.js')

// $(function () {
$(document).ready(function(){
    
    $('.main-slider').slick({
        prevArrow: '<button type="button" class="slick-arrow slick-prev"><div></div></button>',
        nextArrow: '<button type="button" class="slick-arrow slick-next"><div></div></button>',

        autoplay: true,
        autoplaySpeed: 3000,
    });

    $('.clients__container').slick({
        prevArrow: '<button type="button" class="slick-arrow slick-prev"><div></div></button>',
        nextArrow: '<button type="button" class="slick-arrow slick-next"><div></div></button>',
        // adaptiveHeight: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        variableWidth: true,
        centerMode: true,
    });

    $('.reviews-slider').slick({
        dots: true,
        slidesToShow: 1,
        arrows: false,
        rows: 2,
        autoplay: true,
        autoplaySpeed: 3000,
      });

    $('.reviews-slider-portfolio').slick({
        dots: true,
        slidesToShow: 2,
        arrows: false,
        rows: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 950,
            settings: {
              slidesToShow: 1
            }
          },
        ]
      });

    $('.blog-post__slider').slick({
        dots: true,
        slidesToShow: 1,
        arrows: false,
        rows: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });

    $('.latestposts__slider').slick({
        dots: true,
        slidesToShow: 2,
        arrows: false,
        rows: 1,
        autoplay: true,
        // adaptiveHeight: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 950,
            settings: {
              slidesToShow: 1
            }
          },
        ]
      });

    $('.abouts-rewiews__text-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.abouts-rewiews__author-slider'
      });

    $('.abouts-rewiews__author-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          asNavFor: '.abouts-rewiews__text-slider',
          // centerMode: true,
          // focusOnSelect: true,
          prevArrow: '<button type="button" class="slick-arrow slick-prev"><div></div></button>',
          nextArrow: '<button type="button" class="slick-arrow slick-next"><div></div></button>',
        });

    $('.project__slider-little').slick({
        slidesToShow: 6,
        infinite: true,
        centerMode: true,
        arrows: false,
        variableWidth: true,
        // adaptiveHeight: true,
        asNavFor: '.project__slider-big'
      });
  
    $('.project__slider-big').slick({
          prevArrow: '<button type="button" class="slick-arrow slick-prev"><div></div></button>',
          nextArrow: '<button type="button" class="slick-arrow slick-next"><div></div></button>',
          slidesToShow: 1,
          slidesToScroll: 1,
          asNavFor: '.project__slider-little',
          infinite: true,
        });

    
    let headerheight = $("header").height();

    $(window).scroll(function(){

        let scroll = $(window).scrollTop();

        if(scroll > headerheight) {
            $('.scrolline').addClass('sticky');
            $('.marquee').addClass('sticky');

            var o = $(window).scrollTop() / ($(document).height() - $(window).height());
            $(".scrolline__inline").animate({
                width: ((100 * o) | 0) + "%"
            },17);
            // $(".scrolline__inline").css({
            //     width: ((100 * o) | 0) + "%"
            // });
        }

        else{
            $('.scrolline').removeClass('sticky');
            $('.marquee').removeClass('sticky');
            // $(".scrolline").css({
            //     width: (100) + "%"
            // });
            $(".scrolline__inline").css({
                width: (0) + "%"
            });
        }      
    });

    console.log("headerheight" + " = " + headerheight + "px");




    $("a.content__button").click(function() {
      var elementClick = $(this).attr("href")
      var destination = $(elementClick).offset().top;
      jQuery("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
      }, 800);
      return false;
    });

    $('.header__burger').click(function(event) {
      $('.header__burger, .header__menu').toggleClass('active');
    });
});