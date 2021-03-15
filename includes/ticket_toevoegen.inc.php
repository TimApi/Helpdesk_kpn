<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
require('database/db.php');
   $statement = $conn->prepare("SELECT * FROM users WHERE id = :id");
   $statement->execute(array(
           ':id' => $_SESSION['userid']
       )
   );
   $users = $statement->fetch();
   ?>
 
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Voeg hier je ticket</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="php/ticket_toevoegen.php" method="POST">
                <input type="text" name="ticket_naam" class="form-control" placeholder="Ticketnaam" required >
                <textarea id="w3review" class="form-control" name="ticket_probleem" rows="4" cols="50">
Vul hier je ticket probleem in 
  </textarea>
                <button class="btn btn-lg btn-primary btn-block" value="hidden" type="submit">
                    Sign in</button>
                </form>
        </div>
    </div>
</div>