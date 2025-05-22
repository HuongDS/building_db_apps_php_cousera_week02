<?php
$host = '127.0.0.1';
$port = '3306';
$db   = 'misc';
$user = 'fred';
$pass = 'alan';

$pdo = null;
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<p style='color:red'>Connection failed: " . htmlentities($e->getMessage()) . "</p>";
}
?>
