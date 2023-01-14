<?php
include("app/database/db.php");

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
            $errMsg = "Пользователь " . "<strong>" . $login . "</strong>" . " успешно зарегистрирован!";
        }
    }
}else{
    $login = '';
    $email = '';
}





