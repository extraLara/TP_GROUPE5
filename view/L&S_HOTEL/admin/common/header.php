<?php
session_start();
//Récupération des informations de l'utilisateur employe
$recupIDUser = $_SESSION['ID'];
$idNom = null;
$idPrenom = null;

$recupCSV = array();
//Importation des lignes
$handle = fopen("../../../input/Employe.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

foreach($recupCSV as $row){
  if(explode(';', $row[0])[0] == $recupIDUser){
    $idNom = explode(';', $row[0])[1];
    $idPrenom = explode(';', $row[0])[2];
  }
}

//Recuperation des contacts
$recupContact = array();
//Importation des lignes
$handle = fopen("../../../input/Contact.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupContact, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupContact);

$recupCSV = array();
$listeChambres = array();
//Importation des lignes
$handle = fopen("../../../input/ListeChambres_V3.csv", "r");
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

$recupReservation = array();
//Importation des lignes
$handle = fopen("../../../input/Reservation.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupReservation, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupReservation);

?>

<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Bootstrap core JavaScript-->
  <script src="jquery/jquery.min.js"></script>

  <title>L&S Hotel & Spa - Gestion hotel</title>

  <!-- fonts-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!-- Bootstrap core JavaScript-->
  <script src="jquery/jquery.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- css-->
  <link href="admin.css" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <img
            src="logo.png" 
            alt="..."
            height="80px" 
            width="145px" 
        />
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item" id="home">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-chart-pie"></i>
          <span>Tableau de bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestion Hotel 
      </div>

      <!-- menu  -->
      <li class="nav-item" id="chambres">
        <a class="nav-link collapsed" href="chambres.php" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-bed"></i>
          <span>Chambres</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="chambres.php"><i class="fas fa-door-open"></i> Disponibilités</a>
          </div>
        </div>
      </li>

      <li class="nav-item" id="reservations">
        <a class="nav-link collapsed" href="reservations.php" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-key"></i>
          <span>Réservations</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="reservations.php"><i class="fas fa-edit"></i> Actions</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <li class="nav-item">
        <a class="nav-link" href="../../../controller/logoutController.php">
          <i class="fa fa-sign-out-alt"></i>
          <span>Deconnexion</span></a>
      </li>
      
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="contact.php" id="messagesDropdown" role="button" >
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"><?php echo count($recupContact);?></span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Employé log -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $idNom.' '.$idPrenom;?> Employé</span>
                <img class="img-profile rounded-circle" src="avatar.png">
              </a>
              <!-- Employé deconnection -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../../../controller/logoutController.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Se déconnecter
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

