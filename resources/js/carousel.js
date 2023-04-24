// $('.hero-carousel').slick({
// 	arrows: false,
// 	mobileFirst: true,
// 	autoplay: false,
// 	slidesToShow: 1,
// 	slidesToScroll: 1,
// })

var $carousel = $(".slick-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    vertical: true
});

$("#fullpage").fullpage({
    navigation: false,
    onLeave: function(origin, destination, direction) {
        if (direction == "down") {
            $carousel.slick("slickNext");
        } else if (direction == "up") {
            $carousel.slick("slickPrev");
        }
    }
});
