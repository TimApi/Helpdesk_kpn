<?php
    session_start();

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else {
        $page = 'home';
    }
?>

<head>
    <title>Helpdesk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/tim.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!------ Include the above in your HEAD tag ---------->
<body>
    <?php   include "includes/navbar.inc.php" ?>
    <?php   include  "includes/".$page.".inc.php"; ?>
</body>