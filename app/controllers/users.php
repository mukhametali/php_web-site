<?php

include("app/database/db.php");
//тключаем все erorr
error_reporting(E_ALL ^ E_NOTICE);

$errMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' ||  $passF === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($login, 'UTF-8') < 2){
        $errMsg = "Логин должен быть более 2-х символов";
    }elseif ($passF !== $passS ){
        $errMsg = "Пароли в обеих полях должны соответсвовать!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if ($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . admin/admin.php);
            }else{
                header('location: ' . BASE_URL);
            }
        }
    }
}else{
    $login = '';
    $email = '';
}





