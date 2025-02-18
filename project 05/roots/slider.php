<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="css/slider.css">

    <!-- swiper -->
     <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

    <!-- header design -->
    <header class="header">
        <a href="main.html" class="logo"><img src="images/logo.jpg"><span class="animate" style="--i:1;"></span></a>
  
     <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>
  
        <nav class="navbar">
            <a href="main.php">Главная</a>
            <a href="slider.php">Возможности</a>
            <!-- <a href="profile.html">Профиль</a> -->
            <a href="login.php">Вход/Регистрация</a>
            
            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>
    
<section class="home">
    <div class="container swiper">
        <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <div class="content">
                    <span>Возможности(в разработке)</span>
                    <h3>Создание древа семьи</h3>
                    <p>Ну это не ко мне...зайдите на family echo чтоли</p>
                    <a href="https://www.familyecho.com/" class="btn">Перейти к созданию</a>
                </div>

                <div class="img">
                    <img src="images/деревце.png" alt="">
                </div>
            </div>

            <div class="slide swiper-slide">
                <div class="content">
                    <span>Возможности(в разработке)</span>
                    <h3>Поиск по архивам</h3>
                    <p>Яндекс смогли,умнички</p>
                    <a href="https://yandex.ru/archive" class="btn">Перейти к поиску</a>
                </div>

                <div class="img">
                    <img src="images/архив.png" alt="">
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper=new Swiper(".container",{
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
    })
</script>



</body>
</html>