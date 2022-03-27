// swiper////////////////////////////////

const mySwiper = new Swiper('.swiper-container', {
    speed: 3000,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    loop: true,
	autoplay: {
		delay: 3000,
		stopOnLastSlide: false,
		disableOnInteraction: false,
		reverseDirection: false
	},
    navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}
});

// swiper 終了////////////////////////////////

// AOS/////////////////////////////////

AOS.init({
    once: true,
});

// AOS 終了////////////////////////////