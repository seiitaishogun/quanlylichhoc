<?php

require_once("constant.php");

if ($_POST) {
    $mysqli = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,MYSQL_DB);

    $sql = "SELECT * FROM users WHERE username='" . $_POST['username'] . "' && password='" . md5($_POST['password']) . "' LIMIT 1";

    $result = $mysqli -> query($sql);

    $row = $result->fetch_array(MYSQLI_ASSOC);
    setcookie('auth', $row['username'], time()+2592000, "/");


    $result -> free_result();
    $mysqli -> close();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if (!isset($_COOKIE['auth'])) {
    require_once("login.html");
    exit();
}

if (@$_GET['action']=='logout') {
    setcookie('auth', $row['username'], -1, "/");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

$url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);;
if ($url!='hocphi.php' && $_COOKIE['auth']!='admin') {
    require_once('restricted.html');
    exit();
}
