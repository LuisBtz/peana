$(document).ready(function () {
    $('.ham').on('click', function() {
        $('nav').toggleClass('clicked');
    });

    $('#home .owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        items:1,
        autoplay:true,
        animateOut: 'fadeOut',
        dots: false,
        autoplayTimeout: 2500,
        mouseDrag: false,
        touchDrag: false
    });

    $('.slideex.owl-carousel.owl-theme').owlCarousel({
        loop:true,
        nav:false,
        items:3,
        margin:20,
        autoWidth:true,
        autoplay:true,
        dots: false,
        autoplayTimeout: 2500
    });



var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
 $('ul a').each(function() {
  if (this.href === path) {
   $(this).addClass('active-link');
  }
 });


});