<?php

require_once 'connect.php';


if (isset($_POST['log_user'])) {
    echo 1;
    if (isset($_POST['login'], $_POST['password'])) {
        echo 2;
        $login = $_POST['login'];
        $password = $_POST['password'];
        $conn = connect();
        $sql = 'select * from user where login = :login';
        $stmt = $conn->prepare($sql);
        $p = ['login' => $login];
        $stmt->execute($p);
        if ($stmt->rowCount() > 0) {
            $getRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $getRow['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['login'] = $login;
                header("Location: /chat/");
                die();
            }
        }
    }
}
