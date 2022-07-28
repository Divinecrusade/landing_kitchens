jQuery(document).ready(function() {
//-------------------------------------------------------------------

    
    // Слайдеры
    
     $('.slider-promo').slick({
            centerMode: true,
            centerPadding: '10%',
            slidesToShow: 1,
            initialSlide: 1,
            adaptiveHeight: true,
            arrows: true,
            dots: true,
            speed: 750,
            mobileFirst: true
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
        speed: 1000,
        autoplaySpeed: 4000,
        responsive: [
        {
          breakpoint: 991,
          settings: {
            centerPadding: '100px',
          }
        },
        {
          breakpoint: 575,
          settings: {
            centerPadding: '60px',
          }
        }
        ]
    });
    
    $('.our-designers-slider').slick({
            centerMode: true,
            centerPadding: '15%',
            slidesToShow: 1,
            initialSlide: 0,
            adaptiveHeight: true,
            arrows: false,
            dots: true,
            speed: 750,
            mobileFirst: true
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
    
    
    // Меню
    
    let flag = true;
    let menu = $('#menu');
    menu.hide();
    let basis;

    $('#headerToggleMenu, #footerToggleMenu, #menu a, #closeMenu').click(function(){
        if (flag){
            basis = window.pageYOffset || document.documentElement.scrollTop;
            
            menu.fadeIn(500);
            flag=false;
        }
        else{            
            menu.hide(500);
            flag=true;
        }
    });
    
    $(document).mouseup( function(e){
        if (!menu.is(e.target) && menu.has(e.target).length === 0 && !flag && !$('#headerToggleMenu, #footerToggleMenu, #menu a').is(e.target) && $('#headerToggleMenu, #footerToggleMenu, #menu a').has(e.target).length === 0) 
        {
            menu.hide(500);
            flag=true;
        }
    });
    
    window.onscroll = function () {
        if (!flag) {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            if (Math.abs(basis - scrolled) > 400) {
                menu.hide(500);
                flag = true;
            }
        }
    };
//-------------------------------------------------------------------
    
    
    // Высплывающая панель
    
    let is_shown = false;
    let checkbox =  $('#side-checkbox');
    let panel = $('.3D-projecting.side-panel'); 
    
    $("#openModal3DProjecting").click(function() {
        checkbox.prop('checked', true);
        is_shown = true;
    });
    
    $("#closeSidePanel").click(function() {
        checkbox.prop('checked', false);
        is_shown = false;
    });
    
    $(document).mouseup( function(e){
        if (is_shown && !panel.is(e.target) && panel.has(e.target).length === 0) 
        {
            checkbox.prop('checked', false);
        }
    });

    let buttonShowMore = $('#register3DProjectingShowMore');
    let is_shownMore = false;
    let hidden_inps = $('#register3DProjecting_moreInputs');

    buttonShowMore.click(function() {
        if (!is_shownMore){
            hidden_inps.removeClass('visually-hidden');
            is_shownMore = true;
            
            $('#showMoreText').addClass('visually-hidden');
            $('#hideText').removeClass('visually-hidden');
        }
        else {
            hidden_inps.addClass('visually-hidden');
            is_shownMore = false;
            
            $('#showMoreText').removeClass('visually-hidden');
            $('#hideText').addClass('visually-hidden');
        }
    }); 
//-------------------------------------------------------------------
});
//-------------------------------------------------------------------


// Открытие/закрытие модального окна

function showInfo(nameModal, is_overlay = true) {
    let modalWindow = document.querySelector("." + nameModal);
    modalWindow.style.display = "flex";
    if (is_overlay) {
        let overlay = document.querySelector(".overlay");
        overlay.style.display = "block";

        overlay.addEventListener("click", ()=>closeModal(nameModal, is_overlay), false);
    }
}

function closeModal(nameModal, is_overlay = true) {
    let modalWindow = document.querySelector("." + nameModal);
    if (modalWindow) modalWindow.style.display = "none";
    if (is_overlay) {
        let overlay = document.querySelector(".overlay");
        overlay.style.display = "none";

        overlay.removeEventListener("click", ()=>closeModal(nameModal, is_overlay));
    }
}
//-------------------------------------------------------------------
