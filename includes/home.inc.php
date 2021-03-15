<?php
require('database/db.php');
   $statement = $conn->prepare("SELECT * FROM users U LEFT JOIN tickets T ON U.id = :u_id");
   $statement->execute(array(
           ':u_id' => $_SESSION['userid']
       )
   );
   ?>
<?php
    $statement2 = $conn->prepare("SELECT * FROM tickets");   
    $statement2->execute(array(
       )
   );
   ?>

<?php
    $statement3 = $conn->prepare("SELECT * FROM `user_catergory` WHERE user_catergory_id = :u_id");   
    $statement3->execute(array(
        ':u_id' => $_SESSION['userid']
       )
   );
   ?>
   <?php
    $statement4 = $conn->prepare("SELECT * FROM tickets WHERE user_id = :u_id");   
    $statement4->execute(array(
        ':u_id' => $_SESSION['userid']
       )
   );
   ?>
<?php
while($r = $statement3->fetch()){ ?>
        <?php $_SESSION['icter_id'] = $r['icter_id'];?>
    <tr>
    <?php } ?>
<div class="container">


<?php if  (isset($_SESSION['rol']) && $_SESSION['rol'] == "admin"){  ?>
<h1>Mijn Tickets</h1>
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
        <th scope="col">ticketomschrijving</th>
        <th scope="col">ticket_status</th>
        <th scope="col">Chatten</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php

    while($r = $statement->fetch()){ ?>
        <th scope="row">1</th>
        <td><?php echo $r ["ticketomschrijving"]?>
        <td><?php echo $r ["ticket_status"]?></td>
        <form action="?page=overzicht" method="POST">
            <input type="hidden" name="id" value="<?= $r['gro_id'] ?>">
        <td> <button type="submit" class="btn btn-primary btn-sm">chatten</button></td>
        </form>

    <tr>
    <?php } ?>
<?php }elseif((isset($_SESSION['rol']) && $_SESSION['rol'] == "medenwerker")){
    
       ?>
    <h1>alle tickets</h1>
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
            <th scope="col">ticket_name</th>
            <th scope="col">ticket_uitleg</th>
            <th scope="col">ticket_status</th>
            <th scope="col">Aan de slag</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
    
        while($r = $statement2->fetch()){ ?>
            <th scope="row">1</th>
            <td><?php echo $r ["ticket_name"]?>
            <td><?php echo $r ["ticket_uitleg"]?>
            <td><?php echo $r ["ticket_status"]?></td>
            <form action="php/ticket_behandelen.php" method="POST">
                <input type="hidden" name="id" value="<?= $r['ticket_id']?> ">
            <td> <button type="submit" class="btn btn-primary btn-sm">aan de slag</button></td>
            </form>
    
        <tr>

        <?php } ?>
        <?php }else{
    
    ?>
 <h1>alle tickets</h1>
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
         <th scope="col">ticket_name</th>
         <th scope="col">ticket_uitleg</th>
         <th scope="col">ticket_status</th>
         <th scope="col">Aan de slag</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
 
     while($r = $statement4->fetch()){ ?>
         <th scope="row">1</th>
         <td><?php echo $r ["ticket_name"]?>
         <td><?php echo $r ["ticket_uitleg"]?>
         <td><?php echo $r ["ticket_status"]?></td>
         <form action="php/ticket_behandelen.php" method="POST">
             <input type="hidden" name="id" value="<?= $r['ticket_id']?> ">
         <td> <button type="submit" class="btn btn-primary btn-sm">inspecteer</button></td>
         </form>

     <tr>
     <?php } ?>
     <?php }


