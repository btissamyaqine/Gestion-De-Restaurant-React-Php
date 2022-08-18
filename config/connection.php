<?php
    include_once 'database.php';
    try {
        $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    // $DB_DSN = 'mysql:dbname=mynoama_db;host=127.0.0.1';
    // $DB_USER = 'root';
    // $DB_PASSWORD = '';
    // $DB_NAME = 'mynoama_db';
    // $DB_HOST = '127.0.0.1';