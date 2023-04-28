$('.team-carousel').slick({
	arrows: false,
	mobileFirst: true,
	autoplay: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 767,
			settings: { slidesToShow: 2 }
		},

		{
			breakpoint: 992,
			settings: { slidesToShow: 3 }
		},
	],
})