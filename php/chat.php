<?php
require_once "../database/db.php";
session_start();


$message = isset($_POST["message"]) ? $_POST["message"] : null;
$from = isset($_POST["from"]) ? $_POST["from"]: null;


// if(!empty($message) && !empty($from)){
//     $sql = "INSERT INTO `chat` (message, from) VALUES (:message, :from)";
//     $query = $conn->prepare($sql);


//     $query->execute(array(
//         ':message' => $message,
//         ':from' => $from
//     ));
// }

// header("Access-Control-Allow-Orgin: *");
// header("Content-Type: application/json");

// echo json_encode($query);
