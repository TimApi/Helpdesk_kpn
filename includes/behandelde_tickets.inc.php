<?php
require('database/db.php');
$statement = $conn->prepare("SELECT * FROM user_catergory C LEFT JOIN tickets T ON C.icter_id = :u_ict");   
$statement->execute(array(
    ':u_ict' => $_SESSION['icter_id']
   )
);
?>


<h1>ticket in behandeling</h1>
   <!-- <form action="?page=lijstaanmaken" method="POST">
       <input type="hidden" name="id" value="<?= $r['product_id'] ?>">
       <button type="submit" class="btn btn-info"> Lijst aanmaken</button>
   </form>
<form action="?page=profielaanpassen" method="POST">
    <input type="hidden" name="id" value="<?= $_SESSION['userid'] ?>">
    <button type="submit" class="btn btn-info">change profiel</button>
</form> -->
<table class="table">
<thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">ticket_naam</th>
        <th scope="col">ticketomschrijving</th>
        <th scope="col">ticket_status</th>
        <th scope="col">afgehandeld</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php

    while($r = $statement->fetch()){ ?>
        <th scope="row">1</th>
        <td><?php echo $r ["ticket_name"]?>
        <td><?php echo $r ["ticket_uitleg"]?></td>
        <td><?php echo $r ["ticket_status"]?></td>
        <form action="?page=overzicht" method="POST">
            <input type="hidden" name="id" value="<?= $r['gro_id'] ?>">
        <td> <button type="submit" class="btn btn-primary btn-sm">afgehandeld</button></td>
        </form>
    <tr>
        <?php } ?>
