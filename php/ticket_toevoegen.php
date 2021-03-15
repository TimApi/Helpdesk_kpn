<?php
require_once "../database/db.php";
session_start();

    $ticket_naam = $_POST["ticket_naam"];
    $ticket_probleem = $_POST["ticket_probleem"];
    $ticket_status = "TO DO ";



    $sql = "INSERT INTO `tickets` (user_id, ticket_name, ticket_uitleg, ticket_status) VALUES (:user_id, :ticket_name, :ticket_uitleg, :ticket_status)";
    $query = $conn->prepare($sql);


    $query->execute(array(
        ':user_id' => $_SESSION['userid'],
        ':ticket_name' => $ticket_naam,
        ':ticket_uitleg' => $ticket_probleem,
        ':ticket_status' => $ticket_status
    ));

$url = 'Location:../index.php?page=home';
header($url);

?>

