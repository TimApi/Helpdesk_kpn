<?php
require_once "../database/db.php";
session_start();

$username = $_POST['username'];
$password = ($_POST['password']);

$query = $conn->prepare("SELECT id, username, password, rol FROM users WHERE  username = :username AND Password = :password");
$query->execute(array(':username' => $username, ':password' => $password));

if($query->rowCount() > 0) {
    $result = $query->fetch(    PDO::FETCH_ASSOC);

    $_SESSION['username'] = $result['name'];
    $_SESSION['userid'] = $result['id'];
    $_SESSION["rol"] = $result["rol"];
    $_SESSION ['ingelogd'] = true;
   
    
    header('location:/Helpdesk/?page=home');
}

else{
    header('location:/Helpdesk/?page=login');
    echo "something went wrong";
}
