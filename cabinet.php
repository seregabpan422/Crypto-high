<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&display=swap" rel="stylesheet">
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


                    <div class="header_button-log" onclick="regBtn()">
                       <a href="exit.php">Leave</a>
                    </div> 

                </div>
            </div>
        </div>
    </header>
    <section class="user">
        <div class="user-container">
            <div class="user-wrappep">
                <div class="user-content">
                    <div class="user-content-info">
                        <div class="user-content-info-privacy">
                            <div class="user-img"><img src="img/items/user.png" width="300px" height="300px"></div>
                            <hr>
                            <div class="user-name">Your name:  <?=$_COOKIE['user']?></div>
                            <div class="user-email">Your email:   <?=$_COOKIE['usermail']?></div>
                            <div class="user-login">Your login: <?=$_COOKIE['userlog']?></div>
                        </div>
                    </div>
                    <div class="user-content-trans">
                        
                        <div class="user-content-trans-hist">
                        <div class="user-content-trans-balance">
                        <?=$_COOKIE['userbal']?>    USD
                        </div>
                        <div class="user-content-trans-list">
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <script src="script.js"></script>
</body>
</html>

