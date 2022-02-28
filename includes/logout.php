<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION['loggedin']);
header("Location: /chat/");
die();
