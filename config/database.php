<?php
    $DB_DSN = 'mysql:dbname=noa_app;host=127.0.0.1';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'noa_app';
    $DB_HOST = '127.0.0.1';

    $host = $_SERVER['HTTP_HOST'];
    $protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
    $url = "$protocol://$host/noa_app";