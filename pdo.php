<?php
    $hostName = "127.0.0.1"; 
    $port = "3306";          
    $dbName = "misc";
    $userName = "fred";
    $password = "alan";

    $pdo = null;

    try {
        $pdo = new PDO("mysql:host=$hostName;port=$port;dbname=$dbName", $userName, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "<p style='color:red'>Connection failed: " . htmlentities($e->getMessage()) . "</p>";
    }
?>
