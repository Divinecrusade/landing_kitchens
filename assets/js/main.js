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
            autoplay: true,
            autoplaySpeed: 5000,
            mobileFirst: true
    }); 
    
    
    $('.slider-manufacture').slick({
		lazyLoad: 'ondemand',
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
			lazyLoad: 'ondemand',
            centerMode: true,
            centerPadding: '15%',
            slidesToShow: 1,
            initialSlide: 0,
            adaptiveHeight: true,
            arrows: true,
            dots: true,
            speed: 750,
            mobileFirst: false,
            responsive: [
        {
          breakpoint: 380,
          settings: {
              centerMode: false,
              slidesToShow: 1,
          }
        }
        ]
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
    var target3 = $('#desc_text-4');
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
	
    $("#openModal3DProjectingFooter").click(function() {
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
 //-------------------------------------------------------------------   
    
  // Ajax-обработка почты
    
  //E-mail Ajax Send
  $("form#installment").submit(function () {

    var th = $(this);

    $.ajax({
      type: "POST",
      url: "./assets/php/mail.php", 
      data: th.serialize(),
    }).done(function () {
      showInfo("modal_Form_Offer_Call_Alert");
      setTimeout(function () {

        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
  $("form.modal_Form_Send_Question").submit(function () {

    var th = $(this);
    
    $.ajax({
      type: "POST",
      url: "./assets/php/mail.php", 
      data: th.serialize(),
    }).done(function () {
        showInfo("modal_Form_Offer_Call_Alert");
        
      setTimeout(function () {
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
  $("form.modal_Form_Count_Cost_Inpunts").submit(function () {

    var th = $(this);

    
     closeModal("modal_Form_Count_Cost");
      
    $.ajax({
      type: "POST",
      url: "./assets/php/mail.php", 
      data: th.serialize(),
    }).done(function () {
      showInfo("modal_Form_Offer_Call_Alert");

      setTimeout(function () {
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
  $("form.register3DProjecting").submit(function () {
    var th = $(this);

    checkbox.prop('checked', false);
    is_shown = false;
      
    $.ajax({}).done(function () {
      showInfo("modal_Form_Offer_Call_Alert");

      setTimeout(function () {
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
//-------------------------------------------------------------------
    
    
    // Прикрепление файлов к письму
    
    $(".modal_Inp_File").change(function() {
        var f_name = [];
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            f_name.push(" " + $(this).get(0).files[i].name);
        }
        $("#f_name").val(f_name.join(", "));
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


// Отправка письма с файлом

function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
	
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
//-------------------------------------------------------------------


//---------------------------------------------------------------
// Блокирование кнопок отправки форм

function changeButtonStatus() {
    let form = this.form;

    if (form) {
        if (form.elements['Имя'].value !== "" && form.elements['Телефон'].value.length === 18) {
            form.querySelector('button[type=submit]').disabled = false;
            form.querySelector('button[type=submit]').classList.remove("disabled");
        } else {
            let btn = form.querySelector('button[type=submit]');
            if (btn) {
                btn.disabled = true;
                btn.classList.add("disabled");
            }
        }
    }
}

function changeButtonStatusForInstallment() {
    let form = this.form;

    if (form) {
        if (form.elements['Имя'].value !== "" && form.elements['Телефон'].value.length === 18 && form.elements['Agree'].checked) {
            form.querySelector('button[type=submit]').disabled = false;
            form.querySelector('button[type=submit]').classList.remove("disabled");
        } else {
            let btn = form.querySelector('button[type=submit]');
            if (btn) {
                btn.disabled = true;
                btn.classList.add("disabled");
            }
        }
    }
}
//---------------------------------------------------------------
// Маска телефона

window.addEventListener("DOMContentLoaded", function()
{
    [].forEach.call(document.querySelectorAll("input[name='Телефон']"), function(input)
    {
        let keyCode;

        function mask(event)
        {
            event.keyCode && (keyCode = event.keyCode);

            let pos = this.selectionStart;

            if (pos < 3) event.preventDefault();

            let matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function(a)
                {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });

            i = new_value.indexOf("_");

            if (i !== -1)
            {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }

            let reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function(a)
                {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");

            reg = new RegExp("^" + reg + "$");

            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type === "blur" && this.value.length < 5)  this.value = "";
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false);
    });


    let names = document.getElementsByName('Имя');
    let tels = document.getElementsByName('Телефон');
    let btns = document.querySelectorAll('button[type=submit]');
    let installmentForm = document.getElementById('installment');

    [].forEach.call(names,function(input){
        input.addEventListener("input", changeButtonStatus, false);
        input.addEventListener("focus", changeButtonStatus, false);
        input.addEventListener("blur", changeButtonStatus, false);
        input.addEventListener("keydown", changeButtonStatus, false);
    });
    [].forEach.call(tels,function(input){
        input.addEventListener("input", changeButtonStatus, false);
        input.addEventListener("focus", changeButtonStatus, false);
        input.addEventListener("blur", changeButtonStatus, false);
        input.addEventListener("keydown", changeButtonStatus, false);
    });
    for (let i in btns) {
        if (btns[i])
        {
            btns[i].disabled = true;

            if (typeof(btns[i].classList) != 'undefined')
                btns[i].classList.add("disabled");
        }
    }
    
    [].forEach.call(installmentForm.elements, function(input){
        input.removeEventListener("input", changeButtonStatus, false);
        input.removeEventListener("focus", changeButtonStatus, false);
        input.removeEventListener("blur", changeButtonStatus, false);
        input.removeEventListener("keydown", changeButtonStatus, false);
    });
    
    [].forEach.call(installmentForm.elements, function(input){
        input.addEventListener("input", changeButtonStatusForInstallment, false);
        input.addEventListener("focus", changeButtonStatusForInstallment, false);
        input.addEventListener("blur", changeButtonStatusForInstallment, false);
        input.addEventListener("keydown", changeButtonStatusForInstallment, false);
    });
});
//---------------------------------------------------------------