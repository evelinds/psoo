<?php
    try {
        $username = 'root';
        $password = '123456';
        $conn = new PDO('mysql:host=localhost;dbname=bnotas', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>