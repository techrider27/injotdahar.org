<?php
    ob_start();
	error_reporting(E_ALL & ~E_NOTICE);
    session_start();

    $hostname = 'localhost';
    $database = 'injotdahar_ngo';
    $username = 'root';
    $password = '';

    try {
        $con = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>