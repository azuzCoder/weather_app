<?php

$dsn = "mysql:host=localhost;dbname=weatherappdb";
$dbusername = "root";
$dbpassword = "root";

$pdo = null;

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Failed: " . $e->getMessage();
}