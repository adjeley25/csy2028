<?php
$pdo = new PDO('mysql: host=localhost;dbname=kitchen;charset=utf8', 'student', 'student');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>