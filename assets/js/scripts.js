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
    dots: false
})
});