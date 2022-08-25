<?php
$login = filter_var(trim($_POST['alogin']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['apass']), FILTER_SANITIZE_STRING);



$pass = md5($pass);


$mysql = new mysqli('localhost', 'root', '', 'users');

$result = $mysql->query("SELECT *  FROM `user` WHERE `login` = '$login' 
AND `password` = '$pass'");
$user = $result->fetch_assoc();
 if(count($user) == 0) {
    echo 'No user where founded';
    exit();
 }

 setcookie('userbal', $user['ballance'], time() + 3600, "/");
 setcookie('user', $user['name'], time() + 3600, "/");
 setcookie('usermail', $user['email'], time() + 3600, "/");
 setcookie('userlog', $user['Login'], time() + 3600, "/");
$mysql->close();

header('Location: /')
?>