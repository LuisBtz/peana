$(document).ready(function () {
    $('.ham').on('click', function() {
        $('nav').toggleClass('clicked');
    });

    $('.owl-carousel').owlCarousel({
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



var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
 $('ul a').each(function() {
  if (this.href === path) {
   $(this).addClass('active');
  }
 });

 
});