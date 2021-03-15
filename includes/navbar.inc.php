<?php


$menuitems = array(
    array('home','Home'),
);





?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>


        <?php
        if  (isset($_SESSION['rol']) && $_SESSION['rol'] == "admin"){
            ?>
           <header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
          <li><a href="includes/tickets_toevoegen.inc.php">Ticket aanmaken</a></li>
          <li><a href="includes/chat.inc.php">chat</a></li>
          <li><a class="nav-link" href="php/logout.php">Uitloggen<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div> 
  </header>
            <?php
        } elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == "klant"){
            ?>
       <header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
          <li><a href="#">klant klant</a></li>
          <li><a href="?page=ticket_toevoegen">Ticket toevoegen</a></li>
          <li><a class="nav-link" href="php/logout.php">Uitloggen<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div> 
  </header>
  <?php
        }
  elseif(isset($_SESSION['rol']) && $_SESSION['rol'] == "medenwerker"){
            ?>
       <header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
          <li><a href="?page=behandelde_tickets">Tickets in behandeling</a></li>
          <li><a href="?page=ticket_toevoegen">Ticket toevoegen</a></li>
          <li><a class="nav-link" href="php/logout.php">Uitloggen<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div> 
  </header>

            <?php }
    else{
        ?>
          <header>
    <div class="container">
      <h1 class="logo"></h1>
      <nav>
        <ul>
          <li><a href="#">hallo klant</a></li>
          <li><a class="nav-link" href="php/logout.php">Uitloggen<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div> 
  </header>
 <?php   }

