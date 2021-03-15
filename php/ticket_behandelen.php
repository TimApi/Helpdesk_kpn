<?php
require_once "../database/db.php";
session_start();

    $ticket_id = $_POST["id"];



    $sql = 'UPDATE tickets SET ict_id = :icterid WHERE ticket_id = :ticket_id';
    $query = $conn->prepare($sql);


    $query->execute(array(
        ':icterid' => $_SESSION['icter_id'],
        ':ticket_id' => $ticket_id
    ));

$url = 'Location:../index.php?page=home';
header($url);

?>

