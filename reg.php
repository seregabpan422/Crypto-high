<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto High</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/regform.css">
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
                       <a href="reg.php"> login </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="registration">
        <div class="registration_container">
            <div class="registration_wrapper">
            <?php 
    if($_COOKIE['log'] == ''):
    ?>
            <div class="registration_content">
                    <div class="registation-form">
                        <h1>Registration</h1>
                    <form action="check.php" method="post">
                        <input type="text" class="registration-input" name="login" id="login" placeholder="Type your login here">
                        <input type="text" class="registration-input" name="email" id="email" placeholder="Type your email  here">
                        <input type="password" class="registration-input" name="pass" id="pass" placeholder="Type you password here">
                        <button class="registration-button" type="submit" >Register</button>
                    </form>
                    </div>
                    <div class="login-form">
                        <h1>Registration</h1>
                    <form action="auth.php" method="post">
                        <input type="text" class="registration-input" name="alogin" id="alogin" placeholder="Type your login here">
                        
                        <input type="password" class="registration-input" name="apass" id="apass" placeholder="Type you password here">
                        <button class="registration-button" type="submit" >Login</button>
                    </form>
                    </div>
                </div>
                <?php
                endif; 
                ?>
            </div>
        </div>
    </section>
</body>
</html>