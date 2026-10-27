// Main Slider Js
jQuery(document).ready(function(){
  var owl = jQuery('.main-slider .owl-carousel');
    owl.owlCarousel({
    margin: 30,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: true,
    items: 1
  });
});

// Category Section
jQuery(document).ready(function(){
  var owl = jQuery('.category-section .owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: true,
    navText: ["<span class='dashicons dashicons-arrow-left-alt2'></span>", "<span class='dashicons dashicons-arrow-right-alt2'></span>"],
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    responsive: {
      0: { 
        items: 1 
      },
      600: { 
        items: 2 
      },
      992: { 
        items: 4 
      }
    }
  });
});

// Category Dynamic Section
jQuery(document).ready(function($){
  $('.category-section .grid-row').addClass('owl-carousel');
  var owl = $('.category-section .grid-row');
  owl.owlCarousel({
    nav: true,
    navText: [
      "<span class='dashicons dashicons-arrow-left-alt2'></span>",
      "<span class='dashicons dashicons-arrow-right-alt2'></span>"
    ],
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    responsive: {
      0: { 
        items: 1,
        margin: 0
      },
      600: { 
        items: 2,
        margin: 20
      },
      992: { 
        items: 4 ,
        margin: 20
      }
    }
  });
});