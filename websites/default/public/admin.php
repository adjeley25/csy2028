<?php

session_start();

require '../loadTemplate.php';
require '../classes/DatabaseTable.php';
require '../template/databaseConnect.php';

if (isset($_POST['submit'])){
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
    $values = [
     'email' => $_POST['email'],
     'password' => $_POST['password'] 
    ];
    $stmt->execute($values);
    $user = $stmt->fetch();
// check if account details match anything the record
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch();
    $_SESSION['loggedin'] = $user['id'];
    header('location: /admin/adminpages'); // redirects to login page
}
else{
     echo 'Incorrect Login details<li><a href="/admin.php">Log in</a></li>';// redirects user to the login page
}
}
else{
$output = loadTemplate('../template/login.html.php', []);

$title = 'Admin Login-Kates Kitchen';

require '../template/layout.html.php'; 
}
?>