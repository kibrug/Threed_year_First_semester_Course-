<?php
$host = '127.0.0.1';
$db = 'class_db';
$dsn = "mysql:host=$host;dbname=$db";
$conn = new PDO($dsn, 'user', '123456', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
