jQuery(document).ready(function ($) {
    $("body").css("display", "none").fadeIn(500);

    $(document).on("click", 'a[href^="#"]', function (e) {
        e.preventDefault();
        $("html, body")
            .stop()
            .animate(
                {
                    scrollTop: $($(this).attr("href")).offset().top - 130,
                },
                500,
                "linear"
            );
    });

    $(".ham").on("click", function () {
        $("nav").toggleClass("clicked");
    });

    $("#home .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        autoplay: true,
        animateOut: "fadeOut",
        dots: false,
        autoplayTimeout: 2500,
        mouseDrag: false,
        touchDrag: false,
    });

    $(".slider-01").owlCarousel({
        loop: true,
        nav: false,
        items: 3,
        margin: 20,
        autoplay: true,
        dots: false,
        autoplayTimeout: 2500,
    });

    $(document).ready(function () {
        $(".animsition").animsition({
            inClass: "fade-in",
            outClass: "fade-out",
            inDuration: 800,
            outDuration: 800,
            linkElement: ".animsition-link a",
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: "body", //animsition wrapper element
            loadingClass: "animsition-loading",
            loadingInner: "", // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: ["animation-duration", "-webkit-animation-duration"],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay: false,
            overlayClass: "animsition-overlay-slide",
            overlayParentElement: "body",
            transition: function (url) {
                window.location.href = url;
            },
        });
    });
});
