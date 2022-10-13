<?php
require 'src/db.php';
$db=connectMysql($dsn,$dbuser,$dbpass);

if( !empty($_POST['username'])&&!empty($_POST['email'])&&!empty($_POST['password'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);

    $db=connectMysql($dsn, $dbuser, $dbpass);
    $passwordCrypt = password_hash($password,PASSWORD_DEFAULT);
    $stmt=$db->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?)");
    $res=$stmt->execute(array($username, $email, $passwordCrypt));

    if ($res){
        $_SESSION['user']['username']=$username;
        //$_SESSION['user'](obj)->username=$username;
        header('Location:?url=dashboard');
    }
}