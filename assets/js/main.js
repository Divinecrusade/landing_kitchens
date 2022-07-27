$(function() {
	$('.slider-promo').slick({
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 1,
        initialSlide: 1,
        adaptiveHeight: true,
        arrows: true,
        dots: true
    })
    
    $('.slider-manufacture').slick({
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1,
        initialSlide: 0,
        adaptiveHeight: true,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000
    })
})