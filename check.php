<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 30) {
    echo "Too short or too long login";
    exit();
} else if(mb_strlen($email) < 9 || mb_strlen($email) > 60) {
  echo('Too short or too long email');
}

$pass = md5($pass);
$mysql = new mysqli('localhost', 'root', '', 'users');
$mysql->query("INSERT INTO `user` (`Login`, `password`, `email`)
 VALUES('$login', '$pass', '$email')");

$mysql->close();
header('Location: reg.php')
?>