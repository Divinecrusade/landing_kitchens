jQuery(document).ready(function() {
//-------------------------------------------------------------------

    
    // Слайдеры
    
	$('.slider-promo').slick({
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 1,
        initialSlide: 1,
        adaptiveHeight: true,
        arrows: true,
        dots: true
    });
    
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
    });
//-------------------------------------------------------------------
    
    
    // Материалы
    
    $('input[name="radio"]').click(function(){
        var target = $('#type-materials-' + $(this).val());
        let value = $(this).val();
        $('.type-materials').not(target).hide(0);
        target.fadeIn(500);
        if (value == 1){
            $( "#kitch_Type_1_1" ).trigger( "click" );    
        }
        else if (value == 2){
            $( "#kitch_Type_2_1" ).trigger( "click" );  
        }
        else if (value == 3){
            $( "#kitch_Type_3_1" ).trigger( "click" );
        }    
    });
    

    $('input[name="radioSec"]').click(function(){   
                
            var target2 = $('#desc_text-' + $(this).val()); 
            
            $('.desc_text').not(target).hide(0);
            target2.fadeIn(500);     
    });
    var target = $('#type-materials-1');
    $('.type-materials').hide(0);
    target.fadeIn(500);
    var target2 = $('#desc_text-1');
    $('.desc_text').hide(0);
    target2.fadeIn(500);
//-------------------------------------------------------------------
})