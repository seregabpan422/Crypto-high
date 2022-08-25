<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&display=swap" rel="stylesheet">
    <link re;="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/awesome.min.css">
    <title>Crypto High</title>
</head>

<body>
    <header class="header">
        <div class="header_container">
            <div class="header_wrapper">
                <div class="header_content">
                    <div class="header_content-logo">
                        <a href="index.php">
                            <p class="header_content-logo-Title">Crypto</p>
                            <p class="header_content-logo-subtitle">High</p></div>
                        </a>
                    <div class="header_content-nav">
                        <nav>
                                <li class="nav-menu"><a href="">Main</a></li>
                                <li class="nav-menu"><a href="">Market</a></li>
                                <li class="nav-menu" ><a href="">Information</a></li>
                        </nav>
                    </div>
                    <?php 
                    if($_COOKIE['user'] == ''):
                    ?>

                    <div class="header_button-log" onclick="regBtn()">
                       <a href="reg.php"> Login </a>
                    </div> 
                    <?php 
                     else:
                    ?>
                    <div class="header_button-log" onclick="regBtn()">
                       <a href="cabinet.php"><?=$_COOKIE['user']?></a>
                    </div> 
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </header>
    <section class="info">
        <div class="info__img">
            <a href="index.html" class="info__img-link">
                <img src="img/items/06.svg" class="info__images" alt="logo">
            </a>
        </div>
        <div class="info_container">
           
            <div class="info_wrapper">
                <div class="info_content">
                  <div class="info-agit">
                    <div class="info_content-title">
                        <div class="info_content-title-first">Research - </div> 
                        <div class="info-content-title-second"> Earn</div>
                    </div>
                        <div class="info_content-subtitle">Trade with us now</div>
                    <div class="info_content-buttons">
                      <div class="info_content-button-inactive">Research</div>
                      <div class="info_content-button">Earn</div>
                    </div>
                     <div class="info_container-blur">23</div>
                     <div class="info_container-blur-second">233</div>
                   </div>
                   <div class="info_content-actions-img">
                    <img src="img/items/01.png" alt="" width="230px" height="240px">
                </div>
                <div class="info_content-actions-img-second">
                    <img src="img/items/01.png" alt="" width="230px" height="240px">
                </div>
                <div class="info_content-actions-img-third">
                    <img src="img/items/01.png" alt="" width="230px" height="240px">
                </div>
                   <div class="info_content-actions" id="trading">

                        <div class="info__content-current" >
                            <div class="info__content-item">
                                <div class="info__content-info">
                                    <div class="info__content-title">
                                        Crypto
                                    </div>
                                    <div class="info__content-text">
                                        1.00  BTC
                                    </div>
                                </div>
                                <div class="info__content-time">
                                    <div class="info__time-title">
                                        Price
                                    </div>
                                    <div class="info__time-subtitle">
                                        21.302$
                                    </div>
                                </div>
                            </div>
                            <div class="info__content-item">
                                <div class="info__content-info">
                                    <div class="info__content-title">
                                        
                                    </div>
                                    <div class="info__content-text">
                                        1.00 ETH
                                    </div>
                                </div>
                                <div class="info__content-time">
                                    <div class="info__time-title">
                                        
                                    </div>
                                    <div class="info__time-subtitle">
                                        1634$
                                    </div>
                                </div>
                            </div>
                            <div class="info__content-item">
                                <div class="info__content-info">
                                    <div class="info__content-title">
                                        
                                    </div>
                                    <div class="info__content-text">
                                        1.00 XRP
                                    </div>
                                </div>
                                <div class="info__content-time">
                                    <div class="info__time-title">
                                        
                                    </div>
                                    <div class="info__time-subtitle">
                                        0.34$
                                    </div>
                                </div>
                            </div>
                            <div class="info__content-item">
                                <div class="info__content-info">
                                    <div class="info__content-title">
                                        
                                    </div>
                                    <div class="info__content-text">
                                        1.00 USDT
                                    </div>
                                </div>
                                <div class="info__content-time">
                                    <div class="info__time-title">
                                        
                                    </div>
                                    <div class="info__time-subtitle">
                                        1$
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info__content-button">
                            <a href="reg.php" class="info__button-link">
                                Trade Now
                            </a>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section class="items">
        <div class="container">
            <div class="items__content">
                <div class="items__item">
                    <img src="img/items/01.svg" alt="logo" id="coinbase">
                </div>
                <div class="items__item">
                    <img src="img/items/02.svg" alt="logo" id="block">
                </div>
                <div class="items__item">
                    <img src="img/items/03.svg" alt="logo" id="binance">
                </div>
                <div class="items__item">
                    <img src="img/items/04.svg" alt="logo" id="bit">
                </div>
            </div>
        </div>
    </section>
    
    <section class="live">
        <div class="container-fluid">
            <div class="live__title">
                Daily Auctions
            </div>
            <div class="live__items">
                <div class="live__item">
                    <div class="live__content">
                        <div class="live__img">
                            <img class="live__images" src="img/live/04.jpg" alt="img">
                        </div>
                        <div class="live__date">
                            <p class="live__date-text">
                                03:18:24
                            </p>
                        </div>
                        <div class="live__autor">
                            <div class="live__autor-content">
                                <div class="live__autor-info">
                                    <div class="live__autor-img">
                                        <img class="live__autor-images" src="img/live/02.png" alt="logo">
                                    </div>
                                    <div class="live__autor-box">
                                        <div class="live__autor-name">
                                            Virtual Art
                                        </div>
                                        <div class="live__autor-subtitle">
                                            by @wzard
                                        </div>
                                    </div>
                                </div>
                                <div class="live__autor-like">
                                    <div class="live__like-img">
                                        <img src="img/live/03.svg" alt="logo" class="like__autor-images">
                                    </div>
                                    <p class="live__autor-text">
                                        92
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="live__current">
                            <p class="live__current-text">
                                Current Bid
                            </p>
                            <p class="live__current-efir">
                                4.89 ETH
                            </p>
                        </div>
                        <div class="live__btn">
                            <a href="#!" class="live__btn-link">
                                Place a bid
                            </a>
                        </div>
                    </div>
                </div>
                <div class="live__item">
                    <div class="live__content">
                        <div class="live__img">
                            <img class="live__images" src="img/live/05.jpg" alt="img">
                        </div>
                        <div class="live__date">
                            <p class="live__date-text">
                                03:18:24
                            </p>
                        </div>
                        <div class="live__autor">
                            <div class="live__autor-content">
                                <div class="live__autor-info">
                                    <div class="live__autor-img">
                                        <img class="live__autor-images" src="img/live/02.png" alt="logo">
                                    </div>
                                    <div class="live--autor-box">
                                        <div class="live__autor-name">
                                            Virtual Art
                                        </div>
                                        <div class="live__autor-subtitle">
                                            by @wzard
                                        </div>
                                    </div>
                                </div>
                                <div class="live__autor-like">
                                    <div class="live__like-img">
                                        <img src="img/live/03.svg" alt="logo" class="like__autor-images">
                                    </div>
                                    <p class="live__autor-text">
                                        92
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="live__current">
                            <p class="live__current-text">
                                Current Bid
                            </p>
                            <p class="live__current-efir">
                                4.89 ETH
                            </p>
                        </div>
                        <div class="live__btn">
                            <a href="#!" class="live__btn-link">
                                Place a bid
                            </a>
                        </div>
                    </div>
                </div>
                <div class="live__item">
                    <div class="live__content">
                        <div class="live__img">
                            <img class="live__images" src="img/live/06.jpg" alt="img">
                        </div>
                        <div class="live__date">
                            <p class="live__date-text">
                                03:18:24
                            </p>
                        </div>
                        <div class="live__autor">
                            <div class="live__autor-content">
                                <div class="live__autor-info">
                                    <div class="live__autor-img">
                                        <img class="live__autor-images" src="img/live/02.png" alt="logo">
                                    </div>
                                    <div class="live__autor-box">
                                        <div class="live__autor-name">
                                            Virtual Art
                                        </div>
                                        <div class="live__autor-subtitle">
                                            by @wzard
                                        </div>
                                    </div>
                                </div>
                                <div class="live__autor-like">
                                    <div class="live__like-img">
                                        <img src="img/live/03.svg" alt="logo" class="like__autor-images">
                                    </div>
                                    <p class="live__autor-text">
                                        92
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="live__current">
                            <p class="live__current-text">
                                Current Bid
                            </p>
                            <p class="live__current-efir">
                                4.89 ETH
                            </p>
                        </div>
                        <div class="live__btn">
                            <a href="#!" class="live__btn-link">
                                Place a bid
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="live__button">
                <a href="#!" onclick="" class="live__button-link">
                    View All
                </a>
            </div>
        </div>
    </section>

    <section class="how">
        <div class="container">
            <div class="how__title">
                How it works
            </div>
            <div class="how__items">
                <div class="how__item how__item-1">
                    <div class="how__img">
                        <img src="img/how/01.svg" class="how__images" alt="">
                    </div>
                    <div class="how__item-title">
                        <p class="how__title-text">
                            Set up your wallet
                        </p>
                    </div>
                </div>
                <div class="how__item how__item-2">
                    <div class="how__img">
                        <img src="img/how/02.svg" class="how__images" alt="">
                    </div>
                    <div class="how__item-title">
                        <p class="how__title-text">
                            Find profitable crypto
                        </p>
                    </div>
                </div>
                <div class="how__item how__item-3">
                    <div class="how__item-img">
                        <img src="img/how/03.svg" class="how__images" alt="">
                    </div>
                    <div class="how__item-title">
                        <p class="how__title-text">
                            Trade it
                        </p>
                    </div>
                </div>
                <div class="how__item how__item-4">
                    <div class="how__item-img">
                        <img src="img/how/04.svg" class="how__images" alt="">
                    </div>
                    <div class="how__item-title">
                        <p class="how__title-text">
                            Sell them
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top">
        <div class="container">
            <div class="top__title">
                Top Traders
            </div>
            <div class="top__items">
                <div class="top__items-box--1">
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/01.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Aleksandr Komarenko
                                    </div>
                                    <div class="top__subtitle">
                                        Total: 148.321$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    22
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/02.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Maglena Maximenko
                                    </div>
                                    <div class="top__subtitle">
                                        15.341$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    48
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top__items-box--2">
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/03.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Nazar Kupruk
                                    </div>
                                    <div class="top__subtitle">
                                        7.241$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    17 
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/04.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Sergij Karpenko
                                    </div>
                                    <div class="top__subtitle">
                                        4.291$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    3
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top__items-box--3">
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/01.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Max Kovalevuch
                                    </div>
                                    <div class="top__subtitle">
                                        4.241$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    13
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/02.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Melnyk Pavlo
                                    </div>
                                    <div class="top__subtitle">
                                        3.482$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    9
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top__items-box--4">
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/04.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Liza Shevchenko
                                    </div>
                                    <div class="top__subtitle">
                                        2.144$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    48
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top__item">
                        <div class="top__content">
                            <div class="top__info">
                                <div class="top__logo">
                                    <img src="img/top/03.png" alt="logo" class="top__logo-img">
                                </div>
                                <div class="top__info-content">
                                    <div class="top__item-title">
                                        Taras Lobas
                                    </div>
                                    <div class="top__subtitle">
                                        764$
                                    </div>
                                </div>
                            </div>
                            <div class="top__preview">
                                <div class="top__preview-title">
                                    2
                                </div>
                                <div class="top__preview-subtitle">
                                    deals
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__logo">
                    <img src="img/footer/01.png" class="footer__logo-img" alt="logo">
                </div>
                <div class="footer__nec">
                    <div class="footer__nec-text">
                        Nec, enim sed lacus, magna pharetra. Phasellus tincidunt nulla pharetra gravida est. 
                    </div>
                    <div class="footer__nec-items">
                        <div class="footer__nec-item">
                            <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7631 4.13064C36.5496 3.33827 36.1322 2.61565 35.5526 2.0347C34.9729 1.45376 34.2513 1.03475 33.4594 0.819389C30.5231 0.0131389 18.7763 1.42435e-05 18.7763 1.42435e-05C18.7763 1.42435e-05 7.03125 -0.0131111 4.09313 0.757514C3.30174 0.982788 2.58154 1.40772 2.00169 1.99152C1.42183 2.57531 1.00179 3.29837 0.781878 4.09126C0.00750309 7.02751 2.74715e-06 13.1175 2.74715e-06 13.1175C2.74715e-06 13.1175 -0.00749722 19.2375 0.761253 22.1438C1.1925 23.7506 2.45813 25.02 4.06688 25.4531C7.03313 26.2594 18.7481 26.2725 18.7481 26.2725C18.7481 26.2725 30.495 26.2856 33.4313 25.5169C34.2234 25.3019 34.9458 24.8839 35.5269 24.3041C36.1079 23.7243 36.5276 23.003 36.7444 22.2113C37.5206 19.2769 37.5263 13.1888 37.5263 13.1888C37.5263 13.1888 37.5638 7.06689 36.7631 4.13064ZM15.0188 18.7594L15.0281 7.50939L24.7913 13.1438L15.0188 18.7594Z" fill="#D53D5C"/>
                            </svg>
                        </div>
                        <div class="footer__nec-item">
                            <svg width="33" height="28" viewBox="0 0 33 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.3883 7.32824C29.41 7.61991 29.41 7.90991 29.41 8.19991C29.41 17.0749 22.655 27.3016 10.31 27.3016C6.50667 27.3016 2.97333 26.1999 0 24.2866C0.54 24.3482 1.06 24.3699 1.62167 24.3699C4.64332 24.3772 7.57941 23.3668 9.95667 21.5016C8.5557 21.4762 7.19763 21.014 6.07206 20.1795C4.9465 19.3449 4.10964 18.1797 3.67833 16.8466C4.09333 16.9082 4.51 16.9499 4.94667 16.9499C5.54833 16.9499 6.15333 16.8666 6.715 16.7216C5.1946 16.4146 3.82746 15.5905 2.84603 14.3894C1.86461 13.1883 1.32949 11.6843 1.33167 10.1332V10.0499C2.22667 10.5482 3.265 10.8599 4.365 10.9016C3.44348 10.2892 2.68787 9.45828 2.16557 8.48289C1.64327 7.50751 1.37052 6.418 1.37167 5.31158C1.37167 4.06491 1.70333 2.92158 2.285 1.92491C3.9719 3.99994 6.07584 5.69751 8.46056 6.90767C10.8453 8.11783 13.4576 8.8136 16.1283 8.94991C16.025 8.44991 15.9617 7.93158 15.9617 7.41158C15.9612 6.52984 16.1346 5.65667 16.4718 4.84198C16.809 4.02728 17.3035 3.28703 17.927 2.66356C18.5505 2.04008 19.2907 1.54559 20.1054 1.20837C20.9201 0.871152 21.7933 0.697805 22.675 0.698243C24.6083 0.698243 26.3533 1.50824 27.58 2.81824C29.083 2.5276 30.5242 1.97895 31.84 1.19658C31.339 2.74794 30.2896 4.06342 28.8883 4.89658C30.2213 4.74454 31.5241 4.394 32.7533 3.85658C31.8352 5.19507 30.6975 6.36882 29.3883 7.32824Z" fill="#D53D5C"/>
                            </svg>                                
                        </div>
                        <div class="footer__nec-item">
                            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.76159 27V14.7041H13.9079L14.5242 9.88981H9.76159V6.82333C9.76159 5.43411 10.1485 4.48296 12.1414 4.48296H14.6667V0.190784C13.438 0.0590496 12.203 -0.00455774 10.9672 0.000253789C7.30229 0.000253789 4.78601 2.23861 4.78601 6.34775V9.88081H0.666687V14.6951H4.79501V27H9.76159Z" fill="#D53D5C"/>
                            </svg>
                        </div>
                        <div class="footer__nec-item">
                            <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.14767 6.73313C2.14767 9.02506 2.92558 10.6788 4.45801 11.6499C5.71451 12.4476 7.17056 12.5673 7.9282 12.5673C8.11215 12.5673 8.26025 12.5581 8.36314 12.5519C8.36314 12.5519 8.12306 14.0922 9.28291 15.614H9.22991C7.22044 15.614 0.666687 16.0266 0.666687 21.3315C0.666687 26.7254 6.68573 27 7.8939 27C7.989 27 8.04512 26.9969 8.04512 26.9969C8.05759 26.9969 8.14333 27 8.29143 27C9.06622 27 11.0694 26.9049 12.9293 26.0136C15.3425 24.863 16.5662 22.8549 16.5662 20.0536C16.5662 17.3475 14.7018 15.7367 13.3408 14.5585C12.5099 13.839 11.7912 13.2193 11.7912 12.6164C11.7912 12.0027 12.3166 11.541 12.9791 10.9565C14.0532 10.013 15.0666 8.66761 15.0666 6.12409C15.0666 3.88892 14.7719 2.38705 12.9558 1.43438C13.1444 1.33926 13.8147 1.27023 14.1452 1.2242C15.1289 1.09227 16.5678 0.941932 16.5678 0.151875V0H9.39827C9.32656 0.00306818 2.14767 0.263864 2.14767 6.73313ZM13.7212 20.5599C13.8584 22.7168 11.983 24.3077 9.16599 24.5086C6.30535 24.7157 3.95136 23.4486 3.81417 21.2932C3.74714 20.2561 4.21014 19.2436 5.11588 18.4352C6.03409 17.6175 7.29527 17.1112 8.66713 17.0115C8.82926 17.0023 8.98983 16.9931 9.1504 16.9931C11.799 16.9947 13.5918 18.5257 13.7212 20.5599ZM11.8489 5.2558C12.552 7.69193 11.4904 10.2355 9.79736 10.7064C9.60247 10.7599 9.40104 10.7867 9.19873 10.7862C7.64915 10.7862 6.1136 9.2429 5.54303 7.11511C5.22501 5.92466 5.25151 4.87841 5.6163 3.87511C5.9733 2.88563 6.61869 2.22136 7.42934 1.99585C7.62421 1.94216 7.82531 1.91455 8.02953 1.91455C9.90025 1.91455 11.1037 2.67852 11.8489 5.2558ZM23.9899 10.4318V5.82955H20.872V10.4318H16.1952V13.5H20.872V18.1023H23.9899V13.5H28.6667V10.4318H23.9899Z" fill="#D53D5C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="footer__nec-all">
                        <p class="footer__all-text">
                            All rights reserved@2021
                        </p>
                    </div>
                </div>
                <div class="footer__about">
                    <div class="footer__about-title">
                        About Us
                    </div>
                    <ul class="footer__about-list">
                        <li class="footer__about-item">
                            <a href="#!" class="footer__about-link">
                                About NFTs
                            </a>
                        </li>
                        <li class="footer__about-item">
                            <a href="#!" class="footer__about-link">
                                Live Auctions
                            </a>
                        </li>
                        <li class="footer__about-item">
                            <a href="#!" class="footer__about-link">
                                NFT Blog
                            </a>
                        </li>
                        <li class="footer__about-item">
                            <a href="#!" class="footer__about-link">
                                Activity
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__support">
                    <div class="footer__support-title">
                        Support
                    </div>
                    <ul class="footer__support-list">
                        <li class="footer__suppor-item">
                            <a href="#!" class="footer__support-link">
                                Help & Support
                            </a>
                        </li>
                        <li class="footer__suppor-item">
                            <a href="#!" class="footer__support-link">
                                Item Details
                            </a>
                        </li>
                        <li class="footer__suppor-item">
                            <a href="#!" class="footer__support-link">
                                Item Details
                            </a>
                        </li>
                        <li class="footer__suppor-item">
                            <a href="#!" class="footer__support-link">
                                Collection
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

