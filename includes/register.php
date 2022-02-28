<?php

require_once 'connect.php';
require_once 'User.php';

if (isset($_POST['reg_user'])) {
    $conn = connect();
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($password == $password2 && strlen($password) > 5 && strlen($password) < 31 && strlen($login) > 5 && strlen($login) < 21) {

        $sql = 'select * from user where login = :login';
        $stmt = $conn->prepare($sql);
        $p = ['login' => $login];
        $stmt->execute($p);

        if ($stmt->rowCount() == 0) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $newuser = new User(null);
            $newuser->setLogin($login);
            $newuser->setPassword($hashed_password);
            $newuser->save();
            header("Location: /chat/login.php");
            die();
        }
    }
}
