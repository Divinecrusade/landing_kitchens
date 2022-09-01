<?php
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
    elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
    elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
    elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
    elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
    else $browser = "Неизвестный";
?>

<?php    
    const ASSETS_PATH = "";
?>

<!DOCTYPE HTML>
<html lang="ru">
	<head>
        <link rel="icon" sizes="48x48" href="https://mf-slon.ru/favicon.ico" type="image/x-icon">
        <link rel="icon" sizes="32x32" href="https://mf-slon.ru/favicon32.ico" type="image/x-icon">
        <link rel="icon" sizes="16x16" href="https://mf-slon.ru/favicon16.ico" type="image/x-icon">
        <link rel="icon" href="https://mf-slon.ru/favicon.svg" type="image/svg+xml">
        <link rel="shortcut icon" href="https://mf-slon.ru/favicon.svg" type="image/svg+xml">
        <link rel="shortcut icon" sizes="32x32" href="https://mf-slon.ru/favicon32.ico" type="image/x-icon">
        <link rel="shortcut icon" sizes="16x16" href="https://mf-slon.ru/favicon16.ico" type="image/x-icon">
        <link rel="shortcut icon" sizes="48x48" href="https://mf-slon.ru/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="https://mf-slon.ru/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="https://mf-slon.ru/favicon.ico" type="image/x-icon">

        <link rel="icon" href="./favicon.png" type="image/png">
        <link rel="icon" href="./favicon.jpg" type="image/jpeg">

        <meta property="og:image" content="https://mf-slon.ru/images/logo.webp">
        
		<meta charset="utf-8">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style-no-prefixes.css">
		
		<link rel="preload" href="<?=ASSETS_PATH?>assets/fonts/montserrat.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<noscript><link rel="stylesheet" href="<?=ASSETS_PATH?>assets/fonts/montserrat.css"></noscript>
		
		<title>Кухни-Слон | Дизайн кухни онлайн</title>
        <style>            
            .main-features-section {    
                background-image: url("<?=ASSETS_PATH?>assets/img/main_features_bg<?=($browser=='Safari'?'.png':'.webp')?>");
            }
            
            .free-services {    
                background-image: url("<?=ASSETS_PATH?>assets/img/slider_promotion_bg_1<?=($browser=='Safari'?'.png':'.webp')?>");
            }
            
            .examples_style_retarget-title{
                background-image: url('<?=ASSETS_PATH?>assets/img/examples_style_retarget-title-img<?=($browser=='Safari'?'.jpg':'.webp')?>');
            }
            
            .personal_kitch_back {
                background-image: url('<?=ASSETS_PATH?>assets/img/offers-bg-retarget<?=($browser=='Safari'?'.jpg':'.webp')?>');
            }
            
            .guarantee {  
                background-image: url("<?=ASSETS_PATH?>assets/img/warranty_bg<?=($browser=='Safari'?'.png':'.webp')?>");
            }
            
            .our-designers {
                background-image: url("<?=ASSETS_PATH?>assets/img/designers_bg<?=($browser=='Safari'?'.png':'.webp')?>");
            }

            .about-statistics-desc-1{
                background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 0%), url("<?=ASSETS_PATH?>assets/img/about_Statistics_1<?=($browser=='Safari'?'.jpg':'.webp')?>");
            }
            .about-statistics-desc-2{
                background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 0%), url("<?=ASSETS_PATH?>assets/img/about_Statistics_2<?=($browser=='Safari'?'.jpg':'.webp')?>");
            }
            .about-statistics-desc-3{
                background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 0%), url("<?=ASSETS_PATH?>assets/img/about_Statistics_3<?=($browser=='Safari'?'.jpg':'.webp')?>");
            }
            .about-statistics-desc-4{
                background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 0%), url("<?=ASSETS_PATH?>assets/img/about_Statistics_4<?=($browser=='Safari'?'.jpg':'.webp')?>");
            }
            .about-statistics-desc-5{
                background-image: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 0%, rgba(0,0,0,0.6) 0%), url("<?=ASSETS_PATH?>assets/img/about_Statistics_5<?=($browser=='Safari'?'.jpg':'.webp')?>");
            }
        </style>
        
        <meta name="description" content="Кухни на заказ от фабрики в Москве. Собственное производство. Изготовление от 14 дней. Онлайн расчет стоимости кухни. Бесплатная доставка в пределах города. Гарантия на кухни 5 лет">

        <? include_once './metrics.php' ?>
	</head>
	<body>
        <header class="main-header">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-7 col-4 order-sm-1 d-flex align-content-center order-2">
                    <p class="header-logo d-flex flex-nowrap">
                        <img src="<?=ASSETS_PATH?>assets/img/ico_logo_header.svg" alt="Логотип Кухни-Слон">
                        <span class="align-self-stretch">Уже 29 лет производим кухни для Вас более чем в 13 городах</span>
                    </p>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 order-sm-2 order-3">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <!--<select class="city-choose" onChange="redirect()">
                            <option value="Orel">г. Орел</option>
                            <option value="Moscow" selected>г. Москва</option>
                        </select>-->

                        <p class="header-tel">
                            <a href="tel:79624775727">
                                <span class="visually-hidden">Контактный телефон: </span><span>+7 (962) 477-57-27</span>
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-2 col-sm-1 col-4 order-sm-3 order-1">
                    <div class="d-flex h-100 align-items-center justify-content justify-content-between">
                        <button class="btn-green-flat" id="openCalculateCost" onclick="showInfo('modal_Form_Count_Cost')">Рассчитать стоимость Вашей кухни</button>
                        <button class="burger" id="headerToggleMenu">
                            <span class="visually-hidden">Открыть/закрыть меню сайта</span>
                            <img src="<?=ASSETS_PATH?>assets/img/ico_burger_header.svg" width="40" height="30" alt="Бургер для меню сайта">
                        </button>
                    </div>
                </div>
            </div>
        </header>
        
        <nav class="menu-wrapper container-fluid">
            <div class="container-fluid" id="menu">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="sub-option-menu col-12 justify-content-between align-items-center">
                        <!--<div>
                            <select class="city-choose" onChange="redirect()">
                                <option value="Orel">г. Орел</option>
                                <option value="Moscow" selected>г. Москва</option>
                            </select>   
                        </div>-->
                        <div>
                            <button id="closeMenu" class="modal-close"></button>
                        </div>
                    </div>
                    
                    <a href="#our-works">Наши работы</a>
                    <a href="#promo">Специальные предложения</a>
                    <a href="#guarantee">Гарантия</a>
                    <a href="#materials">Материалы</a>
                    <a href="#designers">Наши специалисты</a>
                    <a href="#about">О фабрике</a>
                    <a href="#contacts">Контакты</a>
                    
                    <div class="sub-option-menu-bot">
                        <a class="btn-green-flat" href="#question">Задать вопрос</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <main>
            <h1 class="visually-hidden">Кухни-Слон | Дизайн кухни онлайн</h1>
            
            <section class="main-features-section container-fluid">
                <h2 class="visually-hidden">Преимущества компании</h2>

                <div class="container">
                    <p class="main-offer">Создайте <b class="green">3D&#8209;проект</b> <br class="break-575-on">Вашей кухни, <b class="green"><br>не выходя из дома</b></p>
                    <p class="main-offer-suptext">в режиме онлайн&#8209;конференции <br>со специалистом <br class="break-575-on">мебельной фабрики Слон</p>

                    <div class="main-features-block row">
                        <div class="col-xl-6 col-lg-6 col-12 order-xl-1 order-lg-1 order-3">
                            <ul class="main-features-list">
                                <li>
                                    <h3 class="main-feature">Поможем определиться <br class="break-575-on">с дизайном</h3>
                                    <p class="main-feature-desc">Сделаем проект, который будет максимально вписываться в Ваш интерьер</p>
                                </li>
                                <li>
                                    <h3 class="main-feature">Рассчитаем кухню под <br class="break-575-on">Ваш бюджет</h3>
                                    <p class="main-feature-desc">Дизайнер вместе с Вами выберет фасады и фурнитуру, подберет технику и материалы</p>
                                </li>            
                                <li>
                                    <h3 class="main-feature">Рассчитаем стоимость кухни в трех ценовых категориях</h3>
                                    <p class="main-feature-desc">Разработаем 3 варианта проекта: стандарт, бизнес и премиум</p>
                                </li>
                                <li>
                                    <h3 class="main-feature">Есть проект? <br class="break-575-on">Предложим свою цену!</h3>
                                    <p class="main-feature-desc">Присылайте готовый проект - мы сделаем свой расчет и подскажем, как сэкономить, не потеряв в качестве</p>
                                </li>  
                            </ul>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-12 order-xl-1 order-lg-1 order-1 d-flex justify-content-end">
                            <video class="video-promo" controls autoplay muted loop>
                                <source src="<?=ASSETS_PATH?>assets/video/video-promo.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                        <div class="project-btn-wrapper col-12 text-center order-xl-2 order-lg-2 order-2">
                            <button class="btn-green-flat" id="openModal3DProjecting">Записаться на 3D&#8209;проект кухни</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Примеры кухонь -->
            <!-- Полностью перенесено с другого лендинга компании -->
            <section class="examples container">
                <a name="our-works" class="anchor"></a>
                <div class="row col-12 mx-0">
                    <div class="container">
                        <h2 class="promotions-desc">Выберите стиль оформления Вашей будущей кухни</h2>
                    </div>
                </div>

                <div class="examples_main_retarget row">
                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div onclick="showMoreExamplesRetarget('high-tech')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Современный хай-тек</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div onclick="showMoreExamplesRetarget('classic')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Классика</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div onclick="showMoreExamplesRetarget('provans')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Прованс</a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div onclick="showMoreExamplesRetarget('minimal')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Минимализм </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div  onclick="showMoreExamplesRetarget('neoclassic')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Неоклассика</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 examples_main_retarget_type">
                        <div class="col-12">
                            <img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_main_retarget_type-6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="">
                        </div>
                        <div onclick="showMoreExamplesRetarget('modern')" class="more_images_retarget Btn-pointer">
                            <a class="col-12" href="#examples_anchor">Модерн</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Полностью перенесено с другого лендинга компании -->
            <div class="container-fluid p-0">
        <!-- Classic -->
        <div class="examples_style_retarget d-none" id="classic">
            <div class="col-12  examples_style_retarget-title">
                <span>Кухни в классическом стиле</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-9<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-10<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-11<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-12<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-13<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-14<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-15<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-16<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-17<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-1-18<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>

                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('classic')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div onclick="showAllExamplesRetarget()" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_more">
                                    <a>Показать больше фото</a>
                                </p>
                            </div>
                            <div onclick="showInfo('modal_Form_Count_Cost')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_count">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- High-tech -->
        <div class="examples_style_retarget d-none" id="high-tech">
            <div class="col-12 examples_style_retarget-title">
                <span>Кухни в стиле хай-тек</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-9<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-10<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-11<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-12<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-13<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-2-14<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('high-tech')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <p onclick="showAllExamplesRetarget()" class="examples_style_retarget_more Btn-pointer">
                                    <a>Показать больше фото</a>
                                </p>
                            </div>
                            <div onclick="showInfo('modal_Form_Count_Cost')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_count">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <!-- Provans -->
        <div class="examples_style_retarget d-none" id="provans">
            <div class="col-12 examples_style_retarget-title">
                <span>Кухни в стиле прованс</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-3-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-3-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-3-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-3-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>

                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('provans')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <!-- <p class="examples_style_retarget_more"> -->
                                <!-- <a onclick="showAllExamplesRetarget()">Показать больше фото</a> -->
                                <!-- </p> -->
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <p onclick="showInfo('modal_Form_Count_Cost')" class="examples_style_retarget_count Btn-pointer">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Minimal -->
        <div class="examples_style_retarget d-none" id="minimal">
            <div class="col-12  examples_style_retarget-title">
                <span>Кухни в стиле минимализм</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-9<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-10<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-11<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-12<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-13<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-14<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-4-15<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>

                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('minimal')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div onclick="showAllExamplesRetarget()" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_more">
                                    <a>Показать больше фото</a>
                                </p>
                            </div>
                            <div  onclick="showInfo('modal_Form_Count_Cost')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_count">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- neoclassic -->
        <div class="examples_style_retarget d-none" id="neoclassic">
            <div class="col-12  examples_style_retarget-title">
                <span>Кухни в стиле неоклассики</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-9<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-10<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-11<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-12<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="col-12 m-0 row d-none">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-5-13<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>

                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('neoclassic')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div onclick="showAllExamplesRetarget()" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_more">
                                    <a>Показать больше фото</a>
                                </p>
                            </div>
                            <div onclick="showInfo('modal_Form_Count_Cost')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_count">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modern -->
        <div class="examples_style_retarget d-none" id="modern">
            <div class="col-12  examples_style_retarget-title">
                <span>Кухни в стиле модерн</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 examples_style_retarget-photos">
                        <!-- <p class="examples_style_retarget-subtitle">Каждая кухня индивидуальна и неповторима</p> -->
                        <div class="col-12 m-0 row start_retarget">
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-6-1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                            <div class="col-12 col-lg-6 examples_style_retarget-photos-img"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/examples_style_retarget-photos-img-6-2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt=""></div>
                        </div>
                        <div class="row m-0 col-12">
                            <div onclick="hideMoreExamplesRetarget('modern')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_back">
                                    <a href="#examples_anchor">Выбрать другой стиль</a>
                                </p>
                            </div>
                            <div class="col-12 col-lg-4 ">
                                <!-- <p class="examples_style_retarget_more"> -->
                                <!-- <a onclick="showAllExamplesRetarget()">Показать больше фото</a> -->
                                <!-- </p> -->
                            </div>
                            <div onclick="showInfo('modal_Form_Count_Cost')" class="col-12 col-lg-4 Btn-pointer">
                                <p class="examples_style_retarget_count">
                                    <a>Рассчитать кухню</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        
            <!-- Не нашли нужной кухни -->
            <!-- Полностью перенесено с другого лендинга компании -->
            <div class="personal_kitch_back container-fluid">
                <div class="personal_kitch container">
                    <div class="row">
                        <div class="personal_kitch_Img  d-none d-lg-block col-lg-5">

                        </div>
                        <div class="personal_kitch_Text col-12">
                            <p class="personal_kitch_Text_Title retarget">Не нашли у нас кухню своей мечты?</p>
                            <p class="personal_kitch_Text_SubText retarget">Если Вы не нашли кухню своей мечты в наших проектах - мы разработаем Вам индивидуальный дизайн!</p>
                            <p class="personal_kitch_Text_SubText retarget">Оставьте заявку на разработку дизайна кухни по вашим пожеланиям, фото примера или эскизу, который вам нравится!</p>
                            <p class="personal_kitch_Text_SubText retarget">Благодаря собственному производству, огромному ассортименту материалов и цветов мы можем делать любые кухни!</p>
                        </div>
                        <button onclick="showInfo('modal_Form_Personal-Design')" class="col-12 col-lg-4 ml-lg-2 personal_kitch-size btn-green-flat vk-Btn">
                            Заказать проект по фото или эскизу
                        </button>
                    </div>
                </div>
            </div>                
            
            
            <a name="promo" class="anchor"></a>
            <section class="promotions-section container-lg container-fluid">
                   
                <h2 class="visually-hidden">Акции</h2>

                <p class="promotions-desc">Только <b class="green">до конца августа</b> у нас есть специальные предложения <br class="break-575-on">для Вас!</p> 
                
                <ul class="slider-promo">
                    <li class="slider-promo-item fabric-birthday row">
                        <div class="d-flex flex-column col-lg-8 col-12 order-lg-2 order-1 justify-content-center">
                            <h3 class="promo-name">
                                Скидки до 30% на кухни
                            </h3>
                            <p class="promo-desc">
                                Получите скидку до 30% в честь
                                дня рождения нашей фабрики
                            </p>
                        </div>
                        <div class="promo-dec col-lg-4 col-12 order-lg-1 order-2 d-flex justify-content-center align-content-end align-items-end">
                            <img src="<?=ASSETS_PATH?>assets/img/slider_fabric-birthday<?=($browser=='Safari'?'.png':'.webp')?>" width="256" height="320" alt="Скидки">
                        </div>
                    </li>
                    <li class="slider-promo-item blum-discount">
                        <div class="row d-flex flex-lg-row flex-column">
                            <h3 class="promo-name col-12 order-0">
                                Скидка 25% на фурнитуру BLUM до 31 августа
                            </h3>
                            <p class="promo-desc order-1 order-lg-2 col-lg-7 col-12">
                                Получи скидку на австрийскую фурнитуру Blum при заказе кухни. Гарантия 25 лет
                            </p>

                            <div class="promo-dec order-lg-1 order-2 col-lg-5 col-12 d-flex justify-content-center align-content-center align-items-center">
                                <img src="<?=ASSETS_PATH?>assets/img/slider_promotion_blum<?=($browser=='Safari'?'.png':'.webp')?>" alt="Логотип Blum">
                            </div>
                        </div>
                    </li>
                    <li class="slider-promo-item free-services row">
                        <div class="col-lg-7 col-12 d-flex flex-column order-lg-2 order-1 justify-content-center">
                            <h3 class="promo-name">
                                Получите бесплатно
                            </h3>
                            <p class="promo-desc">
                                Замер, доставка и установка за наш счёт
                            </p>
                        </div>
                        <div class="promo-dec col-lg-5 col-12 order-lg-1 order-2 d-flex justify-content-center align-content-end align-items-end">
                            <img src="<?=ASSETS_PATH?>assets/img/slider_promotion_gift<?=($browser=='Safari'?'.png':'.webp')?>" width="272" height="320" alt="Подарки">
                        </div>
                    </li>
                </ul>
            </section>
            
            <div class="promotion-section-wrapper container-fluid">
                <section class="promotion-pinned-section container-lg container-fluid">
                    <div class="col-xl-10 col-12">
                        <h2><b class="green">Беспроцентная</b> рассрочка до 24 <b class="green">месяцев</b></h2>
                        
                        <div class="promotion-pinned-content d-flex flex-column">
                            <table class="promotion-pinned-desc col-xl-8 col-12 d-flex flex-column-reverse">
                                <thead class="w-100">
                                    <tr class="row">
                                        <th class="col-4">Предоплаты</th>
                                        <th class="col-4">Процентов</th>
                                        <th class="col-4">До 24 месяцев</th>
                                    </tr>
                                </thead>
                                <tbody class="w-100">
                                    <tr class="row">
                                        <td class="col-4">0</td>
                                        <td class="col-4">0</td>
                                        <td class="col-4">24</td>
                                    </tr>
                                </tbody>
                            </table>

                            <form id="installment" class="col-xl-8 col-12">
                                
                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="Кухни-Слон">
                                <input type="hidden" name="city" value="Москва">

                                <input type="hidden" name="form_subject" value="Беспроцентная рассрочка">
                                <!-- END Hidden Required Fields -->
                                
                                <div class="d-flex installment-inputs flex-sm-row flex-column">
                                    <label class="visually-hidden" for="installmentName">Введите имя: </label>
                                    <input id="installmentName" class="w-50" name="Имя" type="text" placeholder="*Ваше имя" required>
                                    <label class="visually-hidden" for="installmentTel">Введите телефон: </label>
                                    <input id="installmentTel" class="w-50" name="Телефон" type="tel" placeholder="*Ваш номер телефона" required>
                                </div>

                                <label class="checkbox-field installment-checkbox">
                                    <input id="termsAgree" class="checkbox" name="Agree" type="checkbox" checked>
                                    <span class="checkbox-indicator"></span>
                                    <span class="checkbox-label">*Я принимаю <a href="./politics.html" target="_blank">условия конфиденциальности сайта</a></span>
                                </label>

                                <div class="col-12">
                                    <small class="text-remark">* - обязательные для заполнения поля</small>
                                </div>

                                <button id="orderKitchenInstallment" class="w-100 btn-green-flat" type="submit">Заказать кухню в рассрочку</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            
            <section class="guarantee container-fluid">
                <div class="container">
                    <div class="d-flex flex-row-reverse">                    
                        <div class="guarantee-desc">
                            <a name="guarantee" class="anchor"></a>
                            <h2>Гарантия 5 лет</h2>
                            <p>Мы готовы дать гарантию 5 лет благодаря тому, что сами изготавливаем для Вас материалы кухни, столешницу, фасады и сами собираем ее из надежных комплектующих.</p>  
                        </div>

                        <img class="guarantee-img lazyload" data-src="<?=ASSETS_PATH?>assets/img/warranty<?=($browser=='Safari'?'.png':'.webp')?>" width="409" height="462" alt="Договор">
                    </div>
                </div>
            </section>
            
            <!-- Раздел с материалами -->
            <section class="materials container" name="materials">
                <a name="materials" class="anchor"></a>
                <h2 class="materials_Title col-12">
                    Создаём кухни только <br>
                    из качественных материалов
                </h2>
                <div class="kitch_Type col-12 d-flex">
                    <input type="radio" class="kitch_Type_Radio" id="kitch_Type_1" name="radio" value="1" checked="checked"><label for="kitch_Type_1" class="kitch_Type_Btn">Фасады</label>
                    <input type="radio" class="kitch_Type_Radio" id="kitch_Type_2" name="radio" value="2"> <label for="kitch_Type_2" class="kitch_Type_Btn">Столешницы</label>
                    <input type="radio" class="kitch_Type_Radio" id="kitch_Type_3" name="radio" value="3"> <label for="kitch_Type_3" class="kitch_Type_Btn">Фартуки</label>
                </div>
                <div class="row">
                    <div class="type-materials col-12" id="type-materials-1">
                        <p class="kitch_Type_variations">
                            <input type="radio" id="kitch_Type_1_1" name="radioSec" value="1"><label for="kitch_Type_1_1">ЛДСП</label>
                            <input type="radio" id="kitch_Type_1_2" name="radioSec" value="2"><label for="kitch_Type_1_2">Пластик + ДСП</label>
                            <input type="radio" id="kitch_Type_1_3" name="radioSec" value="3"><label for="kitch_Type_1_3">Экомембрана + МДФ</label>
                            <input type="radio" id="kitch_Type_1_4" name="radioSec" value="4" checked="checked"><label for="kitch_Type_1_4">Эмаль + МДФ</label>
                            <input type="radio" id="kitch_Type_1_5" name="radioSec" value="6"><label for="kitch_Type_1_5">Массив дерева</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="type-materials col-12" id="type-materials-2">
                        <p class="kitch_Type_variations">
                            <input type="radio" id="kitch_Type_2_1" name="radioSec" value="8"><label for="kitch_Type_2_1">Искусственный камень</label>
                            <input type="radio" id="kitch_Type_2_2" name="radioSec" value="9"><label for="kitch_Type_2_2">Пластик+ДСП</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="type-materials col-12" id="type-materials-3">
                        <p class="kitch_Type_variations">
                            <input type="radio" id="kitch_Type_3_1" name="radioSec" value="13"><label for="kitch_Type_3_1">ДСП + пластик HPL</label>
                            <input type="radio" id="kitch_Type_3_2" name="radioSec" value="16"><label for="kitch_Type_3_2">ДСП и ДВП, ЛДСП</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="desc_text container col-12" id="desc_text-1">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="ЛДСП">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">ЛДСП</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>Выгодная стоимость – одно из главных достоинств таких плит.</span>
                                    </li>
                                    <li>
                                        <span>Устойчивость к переменам температуры и воздействию влаги.</span>
                                    </li>
                                    <li>
                                        <span>
                                            Хорошо переносит механические нагрузки и чистку моющими средствами.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="desc_text container col-12" id="desc_text-2">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Пластик + МДФ" />
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Пластик + ДСП</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Выдерживает большие нагрузки благодаря высокой прочности
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Влагостойкость, что очень важно для кухни
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Долговечные цвета, так как менее подвержен к выгоранию при попадании солнечных лучей
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Огромный ассортимент цветов
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Легко отмыть даже сложные пятна
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="desc_text container col-12" id="desc_text-3">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Экомембрана + МДФ">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Экомембрана + МДФ</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Высокая стойкость к механическим воздействиям
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Широкий выбор цветовой гаммы и фактур
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Устойчивость к влаге и высоким температурам
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Легко очищается от загрязнений при помощи моющих средств
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="desc_text container col-12 " id="desc_text-4">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Эмаль + МДФ">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Эмаль + МДФ</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Привлекательный внешний вид за счет возможности сделать глянцевые, матовые, перламутровые поверхности или <br class="break-575-on">с эффектом металлик
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Эмаль устойчива к внешним воздействиям <br class="break-575-on">и долго сохраняет внешний вид
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Возможность реставрации фасадов
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="desc_text container col-12" id="desc_text-6">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Массив дерева">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Массив дерева</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Экологически чистый и натуральный материал
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Высокий срок эксплуатации - более 40 лет
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Благородный, эстетичный и стильный вид
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Выдерживает большинство повреждений благодаря своей природной прочности
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            С легкостью устраняются царапины и трещины
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="desc_text container col-12" id="desc_text-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img2_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Искусственный камень">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Искусственный камень</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Столешница выглядит презентабельно и дорого
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Искусственный камень не имеет пор и не склонен к появлению плесени и грибка
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Легко моется и очищается от загрязнений
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Возможно изготавливать без стыков длиной до 3 м, при наличии швов разглядеть их трудно
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Идеально гладкая поверхность, может быть любого цвета или сочетать несколько оттенков, включая рисунки
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="desc_text container col-12" id="desc_text-9">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img2_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Пластик + ДСП">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Пластик + ДСП</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Устойчивость к повреждениям механического характера и истиранию
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Большой диапазон цветов и оттенков, что дает возможность воплощать разные стилистические решения
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Устойчивость к воздействию химии и водяному пару
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Долговечные цвета. Даже под воздействием ультрафиолета, столешница из пластика не выгорает
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="desc_text container col-12" id="desc_text-11">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img3_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Дерево">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Дерево</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Для фартука из натурального дерева обычно используют наборные щиты из древесины твердых пород
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Поверхность тщательно шлифуют и покрывают специальным лаком или краской, чтобы увеличить срок службы дерева
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="desc_text container col-12" id="desc_text-12">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img3_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Искусственный камень">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">Искусственный камень</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Столешница из искусственного камня дает возможность сделать стеновую панель и столешницу монолитными, без швов и стыков
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Искусственный камень близок к натуральному, но при этом намного легче, дешевле, им проще облицовывать стену и легче сделать технологические отверстия под розетки или выключатели
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Искусственный камень долговечен и имеет широкую цветовую гамму
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Столешница из искусственного камня устойчива к механическим, температурным воздействиям и не боится влаги
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Идеально гладкая поверхность, может быть любого цвета или сочетать несколько оттенков, включая рисунки
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="desc_text container col-12" id="desc_text-13">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img3_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="МДФ+пластик">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">ДСП + пластик HPL</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Панели достаточно прочные, идентичны по декору и структуре со столешницей или могут быть контрастные
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Фартук из МДФ и пластика выполняют свою основную функцию - надежную защиту стен от брызг, одновременно притягивают к себе взгляд как элемент дизайна
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="desc_text container col-12" id="desc_text-16">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img3_5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="ДСП и ДВП, ЛДСП">
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="desc_title">ДСП и ДВП, ЛДСП</p>
                                <ul class="desc_list">
                                    <li>
                                        <span>
                                            Панели из этих материалов наиболее доступны по цене
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            Стеновые панели просты в монтаже и уходе, очень стильно смотрятся в интерьере кухни и могут стать изюминкой дизайна
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <section class="our-designers container-fluid">
                <div class="container-lg container-fluid">
                    <a name="designers" class="anchor"></a>
                    <h2 class="visually-hidden">Наши дизайнеры</h2>

                    <p class="our-designers-promo-text">С Вами работают <br class="break-575-on"><b class="green">профессионалы</b></p>

                    <ol class="our-designers-list our-designers-slider">
                        <li>
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo" data-lazy="<?=ASSETS_PATH?>assets/img/specialists_1<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Оржанцева Наталья">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Оржанцева Наталья
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 20 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo" data-lazy="<?=ASSETS_PATH?>assets/img/specialists_2<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Ванифатова Людмила">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Ванифатова Людмила

                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 15 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo" data-lazy="<?=ASSETS_PATH?>assets/img/specialists_3<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Семина Татьяна">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Семина Татьяна
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 8 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo" data-lazy="<?=ASSETS_PATH?>assets/img/specialists_4<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Заболотская Наталия">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Заболотская Наталия
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 3 года
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                    </ol>
                    
                    
                    <ol class="our-designers-list row">
                        <li class="col-lg-3 col-md-6">
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo lazyload" data-src="<?=ASSETS_PATH?>assets/img/specialists_1<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Оржанцева Наталья">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Оржанцева Наталья
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 20 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-lg-3 col-md-6">
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo lazyload" data-src="<?=ASSETS_PATH?>assets/img/specialists_2<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Ванифатова Людмила">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Ванифатова Людмила

                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 15 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-lg-3 col-md-6">
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo lazyload" data-src="<?=ASSETS_PATH?>assets/img/specialists_3<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Семина Татьяна">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Семина Татьяна
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 8 лет
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-lg-3 col-md-6">
                            <figure class="our-designer d-flex flex-column align-items-center">
                                <img class="our-designer-photo lazyload" data-src="<?=ASSETS_PATH?>assets/img/specialists_4<?=($browser=='Safari'?'.jpg':'.webp')?>" width="255" height="368" alt="Заболотская Наталия">
                                <figcaption class="our-designer-info d-flex flex-column align-items-center w-100">
                                    <p class="our-designer-name w-100">
                                        Заболотская Наталия
                                    </p>
                                    <p class="our-designer-experience">
                                        <b class="green">Дизайнер</b><br>Опыт работы: 3 года
                                    </p>
                                </figcaption>
                            </figure>
                        </li>
                    </ol>
                </div>
            </section>
            
            
            <!-- Раздел с информацией о нас -->
            <section class="about-section container" >    
                <a name="about" class="anchor"></a>
                <h2 class="about-title">О нас в <b class="green">цифрах</b></h2>
                
                <p class="about-subtitle">Мебельная фабрика «Слон» основана <br class="break-575-on">в сентябре 1993 года</p>
                
                <div class="about-statistics">
                    <div class="about-statistics-first-row row">
                        <div class="col-md-6 col-sm-12 col-6">
                            <div class="about-statistics-desc-1">
                                <p>Уже 28 лет делаем для Вас отличные кухни</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-6">
                            <div class="about-statistics-desc-2">
                                <p>Более 20 дилерских салонов в крупнейших городах центрального федерального округа</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-12">
                            <div class="about-statistics-desc-3">
                                <p>Более 21 350 довольных клиентов</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-6">
                            <div class="about-statistics-desc-4">
                                <p> 3 офиса продаж в Орле и <br>3 офиса в Москве</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-6">
                            <div class="about-statistics-desc-5">
                                <p>Штат более 80 человек <br>70% из них работают <br>более 10 лет</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="our-manufacture container-lg container-fluid">
                <h2><b class="green">Собственное</b> производство</h2>
                
                <ul class="slider-manufacture">
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?><?=ASSETS_PATH?>assets/img/slider_manufacture_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 1">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 2">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 3">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 4">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 5">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 6">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 7">
                    </li>
                    <li class="slider-manufacture-item">
                        <img class="w-100" data-lazy="<?=ASSETS_PATH?>assets/img/slider_manufacture_8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С места производства 8">
                    </li>
                </ul>
                
            </section>
            
            
            <section class="contacts-section container-fluid">   
                <a name="contacts" class="anchor"></a>
                <h2 class="visually-hidden">Контакты</h2>
                            
                                    
                <div class="addresses col-xl-3 col-lg-4 col-sm-5 col-12 d-flex flex-column">
                    <p class="addresses-promo-text w-100">Мы ждем Вас в наших офисах, чтобы обсудить <br><b class="green">все детали и подробности</b></p>

                    <ul class="addresses-list w-100">
                        <li>
                            <address>ул. Пришвина, 26А, Москва ТЦ Миллион Мелочей, этаж 2, павильон В24</address>
                            <p class="contacts-tel">
                                <a href="tel:79065701444"><span class="visually-hidden">Контактный телефон для салона по адресу ул. Пришвина, 26А, Москва ТЦ Миллион Мелочей, этаж 2, павильон В24: </span>+7 (906) 570-14-44</a>
                            </p>
                        </li>
                        <li>
                            <address>Шараповский пр., вл2с4, Мытищи МЦ Красный Кит, эт. 1</address>
                            <p class="contacts-tel">
                                <a href="tel:79065705444"><span class="visually-hidden">Контактный телефон для салона по адресу Шараповский пр., вл2с4, Мытищи МЦ Красный Кит, эт. 1: </span>+7 (906) 570-54-44</a>
                            </p>  
                        </li>
                        <li>
                            <address>Киевское шоссе, 22-й км, владение 4 стр., блок В, 3 этаж, павильон 320Б</address>
                            <p class="contacts-tel">
                                <a href="tel:79616214668"><span class="visually-hidden">Контактный телефон для салона по адресу Киевское шоссе, 22-й км, владение 4 стр., блок В, 3 этаж, павильон 320Б: </span>+7 (961) 621-46-68</a>
                            </p>
                        </li>
                        <li>
                            <address>ул. Рябиновая, д. 41, корп. 1, 2 эт.</address>
                        </li>
                    </ul>                    
                </div>

                
                <div class="static-map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/mf_slon/171098015561/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">МФ Слон</a><a href="https://yandex.ru/maps/213/moscow/category/custom_made_furniture/184107879/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Мебель на заказ в Москве</a><a href="https://yandex.ru/maps/213/moscow/category/cabinet_furniture/184107869/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Корпусная мебель в Москве</a><iframe class="w-100" src="https://yandex.ru/map-widget/v1/-/CCUVQQbZDA" height="572" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                

                <!--<a class="static-map" href="https://yandex.ru/maps/-/CCUuAVb9lD"><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/map_moscow<?=($browser=='Safari'?'.png':'.webp')?>" height="572" alt="Адреса салонов в Москве: ул. Пришвина, 26А, Москва ТЦ Миллион Мелочей, этаж 2, павильон В24, Шараповский пр., вл2с4, Мытищи МЦ Красный Кит, эт. 1, Киевское шоссе, 22-й км, владение 4 стр., блок В, 3 этаж, павильон 320Б, ул. Рябиновая, д. 41, корп. 1, 2 эт."></a>-->


                        
                <div class="contact-form col-xl-4 col-lg-5 col-sm-6 col-12">
                    <a name="question" class="anchor"></a>
                    <h3 class="visually-hidden">Контактная форма</h3>

                    <p class="contact-promo-text">Остались вопросы?</p>

                    <form id="sendQuestion" class="d-flex flex-column modal_Form_Send_Question">

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Кухни-Слон">
                        <input type="hidden" name="city" value="Орёл">

                        <input type="hidden" name="form_subject" value="Задать вопрос">
                        <!-- END Hidden Required Fields -->

                        <label class="visually-hidden" for="sendQuestionName">Введите имя: </label><input id="sendQuestionName" class="w-100" name="Имя" type="text" placeholder="*Ваше имя" required>
                        <label class="visually-hidden" for="sendQuestionTel">Введите телефон: </label><input id="sendQuestionTel" class="w-100" name="Телефон" type="tel" placeholder="*Ваш телефон" required>
                        <label class="visually-hidden" for="sendQuestionComment">Оставьте вопрос: </label><textarea id="sendQuestionComment" name="Вопрос" rows="6" cols="4" placeholder="Ваш вопрос"></textarea>

                        <p class="send-question-agree-terms">Согласен на обработку персональных данных в соответствии с <a href="./politics.html" target="_blank">политикой конфиденциальности</a></p>


                        <div class="col-12">
                            <small class="text-remark">* - обязательные для заполнения поля</small>
                        </div>
                        <button class="btn-green-flat" type="submit">Отправить заявку</button>
                    </form>
                </div>
            </section>
        </main>
        <footer class="main-footer container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-6 order-sm-1 order-2">
                    <p class="footer-logo d-flex flex-nowrap">
                        <img src="<?=ASSETS_PATH?>assets/img/ico_logo_footer.svg" alt="Логотип Кухни-Слон">
                        <span class="align-self-stretch">Уже 29 лет производим кухни для Вас более чем в 13 городах</span>
                    </p>
                </div>

                <div class="col-lg-4 col-sm-1 col-0 order-sm-2 order-1">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <button class="btn-white-border" id="openModal3DProjectingFooter">Планирование кухни онлайн</button>
                    </div>
                </div>                        
                
                <div class="col-lg-4 col-sm-5 col-6 order-sm-3 order-3 d-flex justify-content-sm-between justify-content-end align-items-center">
                    <p class="footer-tel">
                        <a href="tel:79624775727">
                            <span class="visually-hidden">Контактный телефон: </span><span>+7 (962) 477-57-27</span>
                        </a>
                    </p>
                    <p class="footer-vk">
                        <a href="https://vk.com/mf_slon" target="_blank">
                            <span class="visually-hidden">Группа во ВКонтакте</span>
                        </a>
                    </p>
                    
                    <button class="burger" id="footerToggleMenu">
                        <span class="visually-hidden">Открыть/закрыть меню сайта</span>
                        <img src="<?=ASSETS_PATH?>assets/img/ico_burger_footer.svg" width="40" height="30" alt="Бургер для меню сайта">
                    </button>
                </div>
            </div>
        </footer>
        
        <!-- Всплывающая справа панель -->
        <input type="checkbox" id="side-checkbox">
        <section class="3D-projecting side-panel">
            <div class="row col-12 justify-content-end">
                <button id="closeSidePanel" class="modal-close"></button>
            </div>    
            <h3 class="side-title">Планирование кухни вместе с дизайнером онлайн</h3>
            <p class="side-text"><b class="green">Заполните заявку</b><br>на бесплатный 3D-проект Вашей кухни в 3 клика!</p>
            
            <form class="container col-sm-8 col-11 d-flex flex-column register3DProjecting" id="offer-with-file" enctype="multipart/form-data" method="post" onsubmit="send(event, '<?=ASSETS_PATH?>assets/php/mail.php')">
                
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Кухни-Слон">
                <input type="hidden" name="city" value="Москва">

                <input type="hidden" name="form_subject" value="3D-проектирование кухни">
                <!-- END Hidden Required Fields -->
                
                <label for="register3DProjectingName">*Введите имя: </label><input id="register3DProjectingName" class="inp-grey" name="Имя" type="text" placeholder="Ваше имя" required>
                <label for="register3DProjectingTel">*Введите телефон: </label><input id="register3DProjectingTel" class="inp-grey" name="Телефон" type="tel" placeholder="Ваш телефон" required>
                
                
                <div id="register3DProjecting_moreInputs" class="container-fluid d-flex flex-column p-0 visually-hidden">
                    <label for="register3DProjectingDate">Выберите день:</label>
                    <input id="register3DProjectingDate" class="inp-grey w-100" type="date" name="Дата">

                    <label for="register3DProjectingTime">Выберите время:</label>
                    <input id="register3DProjectingTime" class="inp-grey w-100" type="time" name="Время">
                    
                    <div class="col-md-12 col-12">
                        <input class="modal_Inp_File" id="modal_Inp_File" type="file" multiple name="form_file[]">
                        <label id="modal_Inp_File-label" for="modal_Inp_File" class="modal_Inp_File_Label btn-pointer">План вашей кухни
                            <input class="f_name" type="text" id="f_name" value="Файл не выбран." disabled />
                        </label>
                    </div>
                    
                    <label for="register3DProjectingComment">Оставьте комментарии: </label><textarea class="inp-grey" id="register3DProjectingComment" name="Комментарий" rows="6" cols="4" placeholder="Комментарии"></textarea>
                </div>
                
                <div id="register3DProjectingShowMore"><span id="showMoreText">Дополнительно +</span><span id="hideText" class="visually-hidden">Скрыть доп. поля</span></div>

                <div class="col-12">
                    <small class="text-remark">* - обязательные для заполнения поля</small>
                </div>

                <button class="btn-green-flat" type="submit">Отправить заявку</button>

                <p class="register-3D-projecting-agree-terms">Согласен на обработку персональных данных в соответствии с <a href="./politics.html" target="_blank">политикой конфиденциальности</a></p>
            </form>
        </section>
        
        <!-- Квиз сайта -->
        <!-- Полностью перенесено с другого лендинга компании -->
        <div class="modal_Form_Count_Cost">
            <a class="top_bar_modal justify-content-end"><button class="modal-close" onclick="closeModal('modal_Form_Count_Cost')"></button></a>
            <p class="Quiz_Title">Оставьте заявку на расчёт стоимости</p>
            <p class="Quiz_Subtitle">Ответьте на 7 вопросов, и мы вышлем расчёт стоимости Вашей будущей кухни</p>
            <p class="Quiz_Step_Name"><b>Шаг:</b><span>1</span><b class="step_percentage">готово на <asd class="step_percentage_value">0</asd>%</b></p>
            <div class="Quiz_Steps d-flex flex-direction-row align-items-center p-0">
                <div class="step active_Step"></div>
                <div class="step_Line step_Line_active"></div>
                <div class="step"></div>
                <div class="step_Line"></div>
                <div class="step"></div>
                <div class="step_Line"></div>
                <div class="step"></div>
                <div class="step_Line"></div>
                <div class="step"></div>
                <div class="step_Line"></div>
                <div class="step"></div>
                <div class="step_Line"></div>
                <div class="step"></div>
            </div>

            <form class="modal_Form_Count_Cost_Inpunts col-12 p-0">

                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Кухни-Слон">
                <input type="hidden" name="city" value="Москва">

                <input type="hidden" name="form_subject" value="Посчитать стоимость кухни">
                <!-- END Hidden Required Fields -->
                <div class="modal_Type_Kitchen container ">
                    <div class="modal_Types row justify-content-around text-center">
                        <input id="modal_Kitch_Type-1" class="modal_Kitch_Type" value="Угловая" type="radio" name="Тип кухни" checked>
                        <label for="modal_Kitch_Type-1" class="modal_Kitch_Type col 1">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/Angler<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Угловая">
                            </div>
                            <div class="col-12">Угловая</div>
                        </label>
                        <input id="modal_Kitch_Type-2" class="modal_Kitch_Type" value="Прямая" type="radio" name="Тип кухни" >
                        <label for="modal_Kitch_Type-2" class="modal_Kitch_Type col 2">
                            <div class="col-12  p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/Straight<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Прямая">
                            </div>
                            <div class="col-12">Прямая</div>
                        </label>
                        <input id="modal_Kitch_Type-3" class="modal_Kitch_Type" value="П-образная" type="radio" name="Тип кухни" >
                        <label for="modal_Kitch_Type-3" class="modal_Kitch_Type col 3">
                            <div class="col-12  p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/P_style<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="П образная">
                            </div>
                            <div class="col-12">П образная</div>
                        </label>
                        <input id="modal_Kitch_Type-4" class="modal_Kitch_Type" value="С_островом" type="radio" name="Тип кухни" >
                        <label for="modal_Kitch_Type-4" class="modal_Kitch_Type col 4">
                            <div class="col-12  p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/With_island<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="С островом">
                            </div>
                            <div class="col-12">С островом</div>
                        </label>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row sizes"  id="sizes-1">
                                <div class="container">
                                    <div class="col-12 p-0">
                                        Напишите размеры Вашей кухни
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="modal_Kitch_Sizes_Img lazyload" src="data:image/gif;base64,R0lGODlhGwAIAIAAAP///wAAACH5BAEAAAEALAAAAAAbAAgAAAINjI+py+0Po5y02otVAQA7" data-src="<?=ASSETS_PATH?>assets/img/Straight_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Прямая размеры">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input id="modal_Kitch_Sizes-1_1" class="modal_Inp_Sizes" type="text" name="Основная_секция" placeholder="Длина, мм" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sizes"  id="sizes-2">
                                <div class="container">
                                    <div class="col-12 p-0">
                                        Напишите размеры Вашей кухни
                                    </div>
                                    <div class="col-12 p-0">
                                        <small class="text-remark">Если не знаете размеры, нажмите Далее</small>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="modal_Kitch_Sizes_Img lazyload" src="data:image/gif;base64,R0lGODlhCQFOAIAAAP///wAAACH5BAEAAAEALAAAAAAJAU4AAAKxjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzsvFoAADs=" data-src="<?=ASSETS_PATH?>assets/img/Angler_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Угловая размеры">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input id="modal_Kitch_Sizes-2_1" class="modal_Inp_Sizes " type="text" name=" Левая_Секция " placeholder="Длина, мм" >
                                            <input id="modal_Kitch_Sizes-2_2" class="modal_Inp_Sizes " type="text" name=" Основная_Секция " placeholder="Длина, мм" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sizes" id="sizes-3">
                                <div class="container">
                                    <div class="col-12 p-0">
                                        Напишите размеры Вашей кухни
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="modal_Kitch_Sizes_Img lazyload" src="data:image/gif;base64,R0lGODlhCQOXAIAAAP///wAAACH5BAEAAAEALAAAAAAJA5cAAAL+jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAgxosSJFCtavIgxo8bpjRw7evwIMqTIkSRLmjyJMqXKlSxbunwJM6bMmTRr2ryJM6fOnTx7+vwJNKjQoUSLGj2KNKnSpUybOn0KNarUqVSrWr2KNavWrVy7ev0KNqzYsWTLmj2LNq3atWzbun0LN67cuXTr2r2LN6/evXz7+v0LOLDgwYQLGz6MOLHixYwbO34MObLkyZQrW76MObPmzZw7e/4MOrTo0aRLmz6NOrXq1axbu34NO7bs2bRr276NO7fu3bx7+/4NPLjw4cSLGz+OPLny5cybO38OPbr06dSrW7+OPbv27dy7e/8OPrz48eTLmz/fuwAAOw==" data-src="<?=ASSETS_PATH?>assets/img/P_style_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="П-образная размеры">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input id="modal_Kitch_Sizes-3_1" class="modal_Inp_Sizes" type="text" name=" Левая_Секция " placeholder="Длина, мм" >
                                            <input id="modal_Kitch_Sizes-3_2" class="modal_Inp_Sizes" type="text" name=" Основная_Секция " placeholder="Длина, мм" >
                                            <input id="modal_Kitch_Sizes-3_3" class="modal_Inp_Sizes" type="text" name=" Правая_Секция " placeholder="Длина, мм" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sizes"  id="sizes-4">
                                <div class="container">
                                    <div class="col-12 p-0">
                                        Напишите размеры Вашей кухни
                                    </div>
                                    <div class="col-12 p-0">
                                        <small class="text-success">Если не знаете размеры - нажмите Далее</small>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="modal_Kitch_Sizes_Img lazyload" src="data:image/gif;base64,R0lGODlhCQFOAIAAAP///wAAACH5BAEAAAEALAAAAAAJAU4AAAKxjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzsvFoAADs=" data-src="<?=ASSETS_PATH?>assets/img/Angler_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Угловая размеры">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input id="modal_Kitch_Sizes-4_1" class="modal_Inp_Sizes " type="text" name="Левая__Секция_" placeholder="Длина, мм" >
                                            <input id="modal_Kitch_Sizes-4_2" class="modal_Inp_Sizes " type="text" name="Основная__Секция" placeholder="Длина, мм" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sizes"  id="sizes-5">
                                <div class="container">
                                    <div class="col-12 p-0">
                                        Напишите размеры Вашей кухни
                                    </div>
                                    <div class="col-12 p-0">
                                        <small class="text-success">Если не знаете размеры - нажмите Далее</small>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="modal_Kitch_Sizes_Img lazyload" src="data:image/gif;base64,R0lGODlhCQFOAIAAAP///wAAACH5BAEAAAEALAAAAAAJAU4AAAKxjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzsvFoAADs=" data-src="<?=ASSETS_PATH?>assets/img/Angler_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Угловая размеры">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input id="modal_Kitch_Sizes-5_1" class="modal_Inp_Sizes " type="text" name="Левая_Секция" placeholder="Длина, мм" >
                                            <input id="modal_Kitch_Sizes-5_2" class="modal_Inp_Sizes " type="text" name="Основная_Секция" placeholder="Длина, мм" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row material_Fasads ">
                        <div class="col-12 p-0">
                            Выберите тип фасадов
                        </div>

                        <input id="modal_Kitch_Material-1" class="modal_Kitch_Material" value="Массив_дерева" type="radio" name="Материал Фасада" checked>
                        <label for="modal_Kitch_Material-1" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Массив_дерева">
                            </div>
                            <div class="col-12">Массив дерева</div>
                            <p class="cost_category">(Люкс)</p>
                        </label>
                        <input id="modal_Kitch_Material-2" class="modal_Kitch_Material" value="Шпон" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-2" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Шпон">
                            </div>
                            <div class="col-12">Шпон</div>
                            <p class="cost_category">(Люкс)</p>
                        </label>
                        <input id="modal_Kitch_Material-3" class="modal_Kitch_Material" value="МДФ_в_пленке" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-3" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="МДФ_в_пленке">
                            </div>
                            <div class="col-12">МДФ + Экомембрана</div>
                            <p class="cost_category">(Стандарт)</p>
                        </label>
                        <input id="modal_Kitch_Material-4" class="modal_Kitch_Material" value="Эмаль" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-4" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Эмаль">
                            </div>
                            <div class="col-12">Эмаль</div>
                            <p class="cost_category">(Премиум)</p>
                        </label>
                        <input id="modal_Kitch_Material-5" class="modal_Kitch_Material" value="Акриловые_фасады" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-5" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Акриловые_фасады">
                            </div>
                            <div class="col-12">Акриловые фасады</div>
                            <p class="cost_category">(Премиум)</p>
                        </label>
                        <input id="modal_Kitch_Material-6" class="modal_Kitch_Material" value="ЛДСП" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-6" class="col-6 col-md-3 justify-content-center  text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="ЛДСП">
                            </div>
                            <div class="col-12">ЛДСП</div>
                            <p class="cost_category">(Стандарт)</p>
                        </label>
                        <input id="modal_Kitch_Material-7" class="modal_Kitch_Material" value="Пластик" type="radio" name="Материал Фасада" >
                        <label for="modal_Kitch_Material-7" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img1_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Пластик">
                            </div>
                            <div class="col-12">Пластик</div>
                            <p class="cost_category">(Премиум)</p>
                        </label>

                    </div>
                    <div class="row material_Stol ">
                        <div class="col-12">
                            Выберите тип столешницы
                        </div>

                        <input id="modal_Kitch_Material_Stol-1" class="modal_Kitch_Material" value="Искусственный_камень" type="radio" name="Материал Столешницы" checked>
                        <label for="modal_Kitch_Material_Stol-1" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img2_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Искусственный_камень">
                            </div>
                            <div class="col-12">Искусственный камень</div>
                            <p class="cost_category">(Люкс)</p>
                        </label>
                        <input id="modal_Kitch_Material_Stol-2" class="modal_Kitch_Material" value="Массив_дерева" type="radio" name="Материал Столешницы" >
                        <label for="modal_Kitch_Material_Stol-2" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img2_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Массив_дерева">
                            </div>
                            <div class="col-12">Массив дерева</div>
                            <p class="cost_category">(Премиум)</p>
                        </label>
                        <input id="modal_Kitch_Material_Stol-3" class="modal_Kitch_Material" value="ДСП_под_пластиком" type="radio" name="Материал Столешницы" >
                        <label for="modal_Kitch_Material_Stol-3" class="col-6 col-md-3 justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhXwBUAIAAAP///wAAACH5BAEAAAEALAAAAABfAFQAAAJkjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGNhWAAA7" data-src="<?=ASSETS_PATH?>assets/img/desc_img2_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="ДСП_под_пластиком">
                            </div>
                            <div class="col-12">ДСП под пластиком</div>
                            <p class="cost_category">(Стандарт)</p>
                        </label>
                    </div>
                    <div class="row additional">
                        <div class="col-12">
                            Укажите, какая техника будет присутствовать в кухне
                        </div>
                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-1" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Вытяжка">
                            <label for="modal_Kitch_Tech-1" class="justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_1<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Вытяжка">
                                </div>
                                <p>Вытяжка</p>
                            </label>
                        </div>

                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-2" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Холодильник" >
                            <label for="modal_Kitch_Tech-2" class=" justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_2<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Холодильник">
                                </div>
                                <p>Холодильник</p>
                            </label>
                            <p>
                                <input name="Встроенный Холодильник" id="included_1" class="included" type="checkbox">
                                <label for="included_1">  <a class="">Встроенный</a> </label>
                            </p>
                        </div>

                        <div class="col-6 col-md-3 justify-content-center text-center">
                            <input id="modal_Kitch_Tech-3" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Стиральная машина" >
                            <label for="modal_Kitch_Tech-3" class="justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Стиральная машина">
                                </div>
                                <p>Стиральная машина</p>
                            </label>
                            <p>
                                <input name="Встроенная Стиральная машина" id="included_2" class="included" type="checkbox">
                                <label for="included_2"> <a class="">Встроенная</a></label>
                            </p>

                        </div>

                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-4" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Посудомоечная машина" >
                            <label for="modal_Kitch_Tech-4" class="justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_4<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Посудомоечная машина">
                                </div>
                                <p>Посудомоечная машина</p>
                            </label>
                        </div>

                        <div class="col-6 col-md-3 justify-content-center text-center">
                            <input id="modal_Kitch_Tech-5" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Микроволновая печь" >
                            <label for="modal_Kitch_Tech-5" class=" justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Микроволновая печь">
                                </div>
                                <p>Микроволновая печь</p>
                            </label>
                            <p>
                                <input name="Встроенная Микроволновая печь" id="included_3" class="included" type="checkbox">
                                <label for="included_3"><a class="">Встроенная</a></label>
                            </p>

                        </div>

                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-6" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Варочная поверхность" >
                            <label for="modal_Kitch_Tech-6" class="justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Варочная поверхность">
                                </div>
                                <p>Варочная поверхность</p>
                            </label>
                        </div>

                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-7" class="modal_Kitch_Tech" value="Да" type="checkbox" name="Духовой шкаф" >
                            <label for="modal_Kitch_Tech-7" class=" justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_7<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Духовой шкаф">
                                </div>
                                <p>Духовой шкаф</p>
                            </label>
                        </div>
                        <div class="col-6 col-md-3  justify-content-center text-center">
                            <input id="modal_Kitch_Tech-8" class="modal_Kitch_Tech" value="Ничего не нужно" type="checkbox" name="Техника на кухне" >
                            <label for="modal_Kitch_Tech-8" class=" justify-content-center text-center">
                                <div class="col-12 p-0">
                                    <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Tech_8<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Ничего не нужно">
                                </div>
                                <p>Ничего не нужно</p>
                            </label>
                        </div>
                    </div>
                    <div class="row services">
                    <div class="col-12">
                        Выберите подарок к кухне
                    </div>

                    <div class="col-6 col-md-3 justify-content-center text-center">
                        <input id="modal_Kitch_Service-11" class="modal_Kitch_Service" value="Скидка до 30% на кухню" type="radio" name="Подарок к кухне" >
                        <label for="modal_Kitch_Service-11" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_3<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Скидка до 30% на кухню">
                            </div>
                            <p>Скидка до 30% на кухню</p>
                        </label>
                    </div>

                    <div class="col-6 col-md-3  justify-content-center text-center">
                        <input id="modal_Kitch_Service-21" class="modal_Kitch_Service" value="Замер, доставка и установка в подарок" type="radio" name="Подарок к кухне" checked>
                        <label for="modal_Kitch_Service-21" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_9<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Замер, доставка и установка в подарок">
                            </div>
                            <p>Замер, доставка и установка в подарок</p>
                        </label>
                    </div>

                    <div class="col-6 col-md-3  justify-content-center text-center">
                        <input id="modal_Kitch_Service-31" class="modal_Kitch_Service" value="Беспроцентная рассрочка на 24 месяца" type="radio" name="Подарок к кухне" >
                        <label for="modal_Kitch_Service-31" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_5<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Беспроцентная рассрочка на 24 месяца">
                            </div>
                            <p>Беспроцентная рассрочка на 24 месяца</p>
                        </label>
                    </div>
                    <div class="col-6 col-md-3  justify-content-center text-center">
                        <input id="modal_Kitch_Service-41" class="modal_Kitch_Service" value="Скидка 25% на фурнитуру Blum" type="radio" name="Подарок к кухне" >
                        <label for="modal_Kitch_Service-41" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_10<?=($browser=='Safari'?'.png':'.webp')?>" alt="Скидка 25% на 
                                фурнитуру Blum">
                            </div>
                            <p>Скидка 25% на фурнитуру Blum до 31 июля 2022</p>
                        </label>
                    </div>
                    <div class="col-6 col-md-3  justify-content-center text-center">
                        <input id="modal_Kitch_Service-51" class="modal_Kitch_Service" value="Встраимваемая техника Kuppersberg в подарок" type="radio" name="Подарок к кухне" >
                        <label for="modal_Kitch_Service-51" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_11<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Вытяжка Gorenje BHI681ES">
                            </div>
                            <p>Встраимваемая техника Kuppersberg в подарок на сумму до 35 000р</p>
                        </label>
                    </div>
                    <div class="col-6 col-md-3  justify-content-center text-center">
                        <input id="modal_Kitch_Service-6" class="modal_Kitch_Service" value="Ничего не нужно" type="radio" name="Подарок к кухне" >
                        <label for="modal_Kitch_Service-6" class="justify-content-center text-center">
                            <div class="col-12 p-0">
                                <img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=ASSETS_PATH?>assets/img/modal_Kitch_Service_6<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Ничего не нужно">
                            </div>
                            <p>Ничего не нужно</p>
                        </label>
                    </div>
                </div>

                    <div class="col-12 d-flex flex-row justify-content-center">

                        <a id="modal_Quiz_Btn_Back" class="modal_Quiz_Btn_Back col-12 col-md-6" >Назад</a>
                        <a id="modal_Quiz_Btn" class="modal_Quiz_Btn col-12 col-md-6" >Далее</a>

                    </div>

                    <div class="row">
                        <div class="Quiz_Title_Last">
                            <p>
                                Cпасибо за ответы. Остался <b class="announcement-point">последний шаг!</b><br>
                            </p>
                            <p>
                                Благодаря широкой складской программе материалов <b class="announcement-point">мы не зависим от внешних факторов</b> и можем по-прежнему держать <b class="announcement-point">цены на кухни на минимальном уровне</b>.<br><br>
                            </p>
                            <p>
                                Оставьте заявку и <b class="announcement-point">получите Ваш подарок к кухне!</b><br>
                            </p>
                            <p>
                                Мы зафиксировали за Вами стоимость кухни. Менеджер свяжется с Вами и пришлет <b class="announcement-point">дизайн проект и подробный расчет стоимости.</b>
                            </p>
                        </div>
                        <input class="modal_Inp" type="text" name="Имя" placeholder="*Введите Ваше имя" required>
                        <input class="modal_Inp" type="tel" name="Телефон" placeholder="*Введите телефон в формате: +7 (999) 999 9999" minlength="18" maxlength="18" required>

                        <input class="modal_Inp" type="text" name="Комментарий к заказу" placeholder="Комментарии">
                        <div class="col-12 p-0">
                            <small class="text-success">* - обязательные для заполнения поля</small>

                        </div>
                        <button  type="submit" class="modal_Btn">Получить результат расчета</button>
                        <p>Нажимая кнопку "Отправить заявку" Вы даете согласие на обработку персональных данных в соответствии с <a href="./politics.html" target="_blank">политикой конфиденциальности</a></p>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Полностью перенесено с другого лендинга компании -->
        <!-- Не нашли нужной кухни -->
        <div class="modal_Form_Personal-Design">
            <p class="w-100 d-flex justify-content-end"><a class="top_bar_modal justify-content-end"><button class="modal-close" onclick="closeModal('modal_Form_Personal-Design')"></button></a></p>
            <p class="modal_Title">Загрузите фотографию или эскиз той кухни, которая Вам понравилась и мы рассчитаем стоимость её изготовления&nbspу&nbspнас!</p>
            <!--и дополнительно сертификат на 10&nbsp000р!-->

            <form class="modal_Form_Personal-Design_Inpunts" id="offer-with-file-first" onsubmit="send(event, '<?=ASSETS_PATH?>assets/php/mail.php')" enctype="multipart/form-data" method="post">

                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Кухни-Слон">
                <input type="hidden" name="city" value="Москва">

                <input type="hidden" name="form_subject" value="Заказ дизайна кухни по образу из файла ">
                <!-- END Hidden Required Fields -->
                <input class="modal_Inp" type="text" name="Имя" placeholder="Введите Ваше имя" required>
                <input class="modal_Inp" type="tel" name="Телефон" placeholder="Введите телефон в формате: +7 (999) 999 9999" minlength="18" maxlength="18" required>
                <!-- <span class="d-flex align-items-center justify-content-start ml-3"><input  name="Удобнее по Whatsapp" type="checkbox"> <a class="ml-2">Мне удобнее по Whatsapp</a></span> -->

                <input class="modal_Inp" type="text" name="Комментарий к заказу" placeholder="Комментарии">
                <p class="modal_Form_Personal-Design-Input-Desc">Прикрепите фото образца кухни—мечты или проект</p>
                <input class="modal_Inp_File" id="modal_Inp_File-2" type="file" multiple name="form_file[]">
                <label id="modal_Inp_File-label-2"for="modal_Inp_File-2" class="modal_Inp_File_Label Btn-pointer">Прикрепить файл
                    <input class="f_name" type="text" id="f_name-2" value="Файл не выбран." disabled />
                </label>

                <button  type="submit" class="modal_Btn">Отправить заявку</button>
                <p>Нажимая кнопку "Отправить заявку" вы даете согласие на обработку персональных данных в соответствии с <a href="./politics.html" target="_blank">политикой конфиденциальности</a></p>
            </form>

        </div>
        
        <!-- Полностью перенесено с другого лендинга компании -->
        <div class="modal_Form_Offer_Call_Alert">
            <a class="top_bar_modal justify-content-end"><button class="modal-close" onclick="closeModal('modal_Form_Offer_Call_Alert')"></button></a>

            <span><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/paper_Plane<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Бумажный самолёт"></span>
            <p class="modal_Title">Ваша заявка принята!</p>
            <p class="modal_Subtitle">Мы свяжемся с Вами в ближайшее время для уточнения деталей!</p>
        </div>
        
        <!-- Полностью перенесено с другого лендинга компании -->
        <div class="modal_Form_Offer_Designer_Alert">
            <a class="top_bar_modal justify-content-end" onclick="closeModal('modal_Form_Offer_Designer_Alert')"><button class="modal-close" onclick="closeModal('modal_Form_Offer_Designer_Alert')"></button></a>
            <span><img class="lazyload" data-src="<?=ASSETS_PATH?>assets/img/paper_Plane<?=($browser=='Safari'?'.jpg':'.webp')?>" alt="Бумажный самолёт"></span>
            <p class="modal_Title">Ваша заявка уже летит к нашему дизайнеру-технологу!</p>
            <p class="modal_Subtitle">Мы перезвоним Вам в ближайшее время</p>
        </div>
        
        <div class="overlay"></div>
        
        
        <!--<script>
            function redirect() {
                window.location.replace("http://mf-slon-retarget/");
            }
        </script>-->
        
        <!-- Ленивая загрузка изображений -->
        <script src="<?=ASSETS_PATH?>assets/lib/jquery/jquery-3.6.0.min.js"></script>
        <script src="<?=ASSETS_PATH?>assets/lib/lazysizes/lazysizes.min.js"></script>
        <script src="<?=ASSETS_PATH?>assets/lib/slick/slick.min.js"></script>        
        <script src="<?=ASSETS_PATH?>assets/js/main.min.js"></script>

        <!-- ВК Пиксель -->
        <? include_once './VKPixelConf.php' ?>
    
        <link rel="stylesheet" href="<?=ASSETS_PATH?>assets/lib/slick/slick.css">
        <link rel="stylesheet" href="<?=ASSETS_PATH?>assets/lib/slick/slick-theme.css">
        
        <!-- Куки -->
        <script src="<?=ASSETS_PATH?>assets/js/cookiechoices.js"></script>
        <script>
            cookieChoices.showCookieBar({
                linkHref: './politics.html',
                language: 'ru'
            });
        </script>
        
        <!-- Виджет с чатом -->
        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b18733946/crm/site_button/loader_2_j5tvx2.js');
        </script>
	</body>
</html>
