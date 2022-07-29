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
                
            var target3 = $('#desc_text-' + $(this).val()); 
            
            $('.desc_text').not(target).hide(0);
            target3.fadeIn(500);     
    });
    var target = $('#type-materials-1');
    $('.type-materials').hide(0);
    target.fadeIn(500);
    var target3 = $('#desc_text-1');
    $('.desc_text').hide(0);
    target3.fadeIn(500);
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
    
    
    // Квиз сайта
    
    let steps = document.getElementsByClassName("step");
    let lines = document.getElementsByClassName("step_Line");
    let btn = document.getElementsByClassName("modal_Quiz_Btn");
    let stepNum = 1;
    let stepPerc = 0;
    let target2;
    let targetRow;
    let targetNum;
    let offerRows;
    let typeKitch = 0;
    let firstClick = true;
    $(document).ready(function () {
      $(".modal_Form_Count_Cost > .top_bar_modal.justify-content-end").click(
        function () {
          stepNum = 1;
          stepPerc = 0;
          target2 = 0;
          targetRow = undefined;
          targetNum = 0;
          offerRows = 0;
          target = 0;

          $(".modal_Form_Count_Cost_Inpunts")[0].reset();
          $(".Quiz_Step_Name > span").text(stepNum);
          $(".step").removeClass("active_Step");
          $(".step_Line").removeClass("step_Line_active");
          $(".step").eq(0).addClass("active_Step");
          $(".step_Line").eq(0).addClass("step_Line_active");
          target = $(".modal_Type_Kitchen>div.row").eq(0);
          $(".modal_Type_Kitchen div.row").hide(0);
          target.fadeIn(500);
          let modalBtn = $(".modal_Quiz_Btn");
          modalBtn.fadeIn(0);
          let backBtn = $(".modal_Quiz_Btn_Back");
          backBtn.fadeIn(0);
        }
      );
      $(".Quiz_Step_Name > span").text(stepNum);
      $(".step_percentage_value").text(stepPerc);
      /* */
      $(".modal_Type_Kitchen > div.row > label").click(function () {
        if ($(this).hasClass("modal_Kitch_Type")) {
          target2 = $(".modal_Type_Kitchen>div.row").eq(1);
          if ($(this).hasClass("1")) {
            typeKitch = 1;
          } else if ($(this).hasClass("2")) {
            typeKitch = 0;
          } else if ($(this).hasClass("3")) {
            typeKitch = 2;
          } else {
            typeKitch = 3;
          }
          targetRow = target2.find("div>div.row.sizes").eq(typeKitch);
          targetNum = typeKitch;
        }

        if (firstClick == false) {
          stepNum++;
          stepPerc += 16;
          firstClick = true;
        }
        $(".Quiz_Step_Name > span").text(stepNum + 1);
        $(".step_percentage_value").text(stepPerc + 16);
        $(".step").eq(stepNum).addClass("active_Step");
        $(".step_Line").eq(stepNum).addClass("step_Line_active");
        if (typeof targetRow == "undefined") {
          target2 = $(".modal_Type_Kitchen>div.row").eq(1);
          targetRow = target2.find("div>div.row.sizes").eq(1);
          targetNum = 1;
        }
        if (stepNum == 1) {
          target.hide(0);
          targetRow.hide(0);
          target = $(".modal_Type_Kitchen>div.row").eq(stepNum);

          target.fadeIn(500);
          target.children().children().eq(targetNum).fadeIn(500);
          target = target.children().children().eq(targetNum).children().children();
          target.fadeIn(500);
        } else {
          target.hide(0);
          targetRow.hide(0);
          target = $(".modal_Type_Kitchen>div.row").eq(stepNum);
          target.fadeIn(500);
        }

        stepNum++;
        stepPerc += 16;
        if (stepNum == 7) {
          let modalBtn = $(".modal_Quiz_Btn");
          modalBtn.hide(0);
          let backBtn = $(".modal_Quiz_Btn_Back");
          backBtn.hide(0);
        } else {
          offerRows = $(".modal_Type_Kitchen>div.row").eq(stepNum);
        }
      });
      /* */

      $(".modal_Quiz_Btn").click(function () {
        if (firstClick == false) {
          stepNum++;
          stepPerc += 16;
          firstClick = true;
        }
        $(".Quiz_Step_Name > span").text(stepNum + 1);
        $(".step_percentage_value").text(stepPerc + 16);
        $(".step").eq(stepNum).addClass("active_Step");
        $(".step_Line").eq(stepNum).addClass("step_Line_active");

        if (typeof targetRow == "undefined") {
          target2 = $(".modal_Type_Kitchen>div.row").eq(1);
          targetRow = target2.find("div>div.row.sizes").eq(1);
          targetNum = 1;
        }
        if (stepNum == 1) {
          target.hide(0);
          targetRow.hide(0);
          target = $(".modal_Type_Kitchen>div.row").eq(stepNum);

          target.fadeIn(500);
          target.children().children().eq(targetNum).fadeIn(500);
          target = target.children().children().eq(targetNum).children().children();
          target.fadeIn(500);
        } else {
          target.hide(0);
          targetRow.hide(0);
          target = $(".modal_Type_Kitchen>div.row").eq(stepNum);
          target.fadeIn(500);
        }

        stepNum++;
        stepPerc += 16;
        if (stepNum == 7) {
          let modalBtn = $(".modal_Quiz_Btn");
          modalBtn.hide(0);
          let backBtn = $(".modal_Quiz_Btn_Back");
          backBtn.hide(0);
        } else {
          offerRows = $(".modal_Type_Kitchen>div.row").eq(stepNum);
        }
      });

      /* */
      $(".modal_Quiz_Btn_Back").click(function () {
        if (firstClick == true) {
          stepPerc -= 16;
          stepNum--;
          firstClick = false;
        }
        if (stepNum == 0) {
        } else {
          stepNum--;
          stepPerc -= 16;
          $(".Quiz_Step_Name > span").text(stepNum + 1);
          $(".step_percentage_value").text(stepPerc + 16);
          $(".step")
            .eq(stepNum + 1)
            .removeClass("active_Step");
          $(".step_Line")
            .eq(stepNum + 1)
            .removeClass("step_Line_active");

          if (stepNum == 1) {
            target.hide(0);
            targetRow.hide(0);
            target = $(".modal_Type_Kitchen>div.row").eq(stepNum);

            target.fadeIn(500);
            target.children().children().eq(targetNum).fadeIn(500);
            target = target
              .children()
              .children()
              .eq(targetNum)
              .children()
              .children();
            target.fadeIn(500);
          } else {
            target.hide(0);
            targetRow.hide(0);
            target = $(".modal_Type_Kitchen>div.row").eq(stepNum);
            target.fadeIn(500);
          }

          if (stepNum == 5) {
            target3 = $(".modal_Quiz_Btn");
            target3.fadeIn(500);
          } else {
            offerRows = $(".modal_Type_Kitchen>div.row").eq(stepNum);
          }
        }
      });
      /* */
      var target = $(".modal_Type_Kitchen>div.row").eq(0);
      $(".modal_Type_Kitchen div.row").hide(0);
      target.fadeIn(500);
    });
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