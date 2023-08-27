<?php

	require_once("constant.php");

    $servername = MYSQL_HOST;
    $username = MYSQL_USER;
    $password = MYSQL_PASS;
    $database = MYSQL_DB;

    // Handle connect php with mysql
    $connect = mysqli_connect($servername, $username, $password);
    mysqli_select_db($connect, $database);

    // Check connect successful or fail
    if (!$connect) {
        die('Connection failed: ' . mysqli_connect_error());
    }
