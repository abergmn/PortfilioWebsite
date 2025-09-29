<?php

$host = "localhost";
$dbname = "db_name";
$user = "db_user";
$pass = "db_password";


// connect to db
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// fetch IP
$ip = $_SERVER['REMOTE_ADDR'];

// if ip doesnt exist in db, add to db
$stmt = $pdo->prepare("INSERT IGNORE INTO visitors (ip_address) VALUES (:ip)");
$stmt->execute(['ip' => $ip]);

// fetch user count
$count = $pdo->query("SELECT COUNT(*) FROM visitors")->fetchColumn();
echo $count;

?>
