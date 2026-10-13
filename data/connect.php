<?php
require_once './config.php';
$dsn = "sqlite:$db";

try {
    $pdo = new PDO($dsn);
    echo "Connected to SQLite Database successfully";

    // create waiting list table
    $pdo->exec('CREATE TABLE IF NOT EXISTS waiting_list (
        id int AUTO_INCREMENT PRIMARY KEY,
        first_name varchar(256) NOT NULL,
        last_name varchar(256) NOT NULL,
        phone_number varchar(256),
    );');
    
    $pdo->commit();

} catch (\PDOException $e) {
    echo $e->getMessage();
}


?>