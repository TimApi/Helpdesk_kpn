<?php
require_once "../database/db.php";
session_start();

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $telefoonnummer = $_POST["number"];
    $rol = "klant";



    $sql = "INSERT INTO `users` (username, email, password, telefoonnummer,rol) VALUES (:username, :email, :password, :telefoonnummer, :rol)";
    $query = $conn->prepare($sql);


    $query->execute(array(
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':telefoonnummer' => $telefoonnummer,
        ':rol' => $rol

    ));

$url = 'Location:../index.php?page=login';
header($url);

?>

