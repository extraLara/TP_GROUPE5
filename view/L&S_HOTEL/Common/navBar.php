<?php
  session_start();
  //Verifiction de la connexion pour changer la navbar
  $recupSession = $_SESSION['$2y$10$5yV9XVOkQPowxCuywSdSMOO3ciGZYwfl3YkoRSMiFlUCdJcM93UIS'];
?>
<!doctype html>
<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap & style CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

        <!-- Font Awesome -->    
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="min.js"></script>
        
        <!-- Titre -->
        <title>L&S HOTEL et SPA ****</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/brand/logo.png" />

    </head>

    <!-- NavBar image -->   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php">
            <img src="assets/brand/logo.png" width="150" height="85" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="index.php">Accueil</a> </li>
          <li class="nav-item"> <a class="nav-link" href="room.php">Réserver</a> </li>
          <li class="nav-item"> <a class="nav-link" href="about.php">À Propos</a> </li>
          <li class="nav-item"> <a class="nav-link" href="contact.php">Nous Contacter</a> </li>
        </ul>
        <ul class="navbar-nav">
        <?php
          if($recupSession == 1){
            echo '<li class="nav-item"> <a class="nav-link" href="reservationCli.php">Mon espace</a> </li>';
            echo '<li class="nav-item"> <a class="nav-link" style="color:#EEBB4D" href="../../controller/logoutController.php"><b>Deconnexion</b></a> </li>';
          }else{
            echo '<li class="nav-item"> <a class="nav-link" href="connexion.php">Se connecter</a> </li>';
            echo '<li class="nav-item"> <a class="nav-link" style="color:#EEBB4D" href="inscription.php"><b>S\'inscrire</b></a> </li>';
          }
        ?>
        </ul>
        </div>
    </nav>

  
  <?php
    $recupCSV = array();
    $listeChambres = array();
    //Importation des lignes
    $handle = fopen("../../input/ListeChambres_V3.csv", "r");
    for ($i = 0;$row = fgetcsv($handle);$i++) {
        //Tant que j'ai une ligne, j'ajoute dans mon tableau
        array_push($recupCSV, $row);
    }
    //Je ferme le fichier
    fclose($handle);
    //Suppression du premier element
    array_shift($recupCSV);

    //Récupération de toutes les chambres
    $chambre1 = explode(';', $recupCSV[0][0]);
    array_push($listeChambres, $chambre1);

    $chambre2 = explode(';', $recupCSV[1][0].$recupCSV[1][1]);
    array_push($listeChambres, $chambre2);

    $chambre3 = explode(';', $recupCSV[2][0]);
    array_push($listeChambres, $chambre3);

    $chambre4 = explode(';', $recupCSV[3][0]);
    array_push($listeChambres, $chambre4);

    $chambre5 = explode(';', $recupCSV[4][0]);
    array_push($listeChambres, $chambre5);

    $chambre6 = explode(';', $recupCSV[5][0]);
    array_push($listeChambres, $chambre6);

    $chambre7 = explode(';', $recupCSV[6][0]);
    array_push($listeChambres, $chambre7);

    $chambre8 = explode(';', $recupCSV[7][0]);
    array_push($listeChambres, $chambre8);

    $compteurImage = 1;
  ?>