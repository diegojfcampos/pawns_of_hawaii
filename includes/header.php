<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="social project, pets, pawns, adoption">
  <meta name="description" content="Providing pets and families happier">
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Pawns Hawaii</title>
</head>

<body>
  <header>

    <section class="nav-session">

      <?php
      include("../controller/navpanel.php");
      ?>
    </section>

    <section class="logo-header">
      <div>

        <?php

        echo '<img src="../assets/img/logo.png" height="300px" width="350px">';


        ?>

      </div>
      <div>
        <p id="titlePrahse">Providing pets and families happier!</p>
      </div>

    </section>

    <section class="nav-bar" id="nav-bar">

      <?php

      include("../controller/navbar.php");


      ?>
    </section>

  </header>