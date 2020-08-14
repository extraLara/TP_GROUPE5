<?php
session_start();
//Récupération des variables
$idChambreRecup = $_POST['idChambre'];
$prixChambreRecup = $_POST['prixChambre'];

//Voir si connecte
if($_SESSION['$2y$10$5yV9XVOkQPowxCuywSdSMOO3ciGZYwfl3YkoRSMiFlUCdJcM93UIS'] == 1){
    header('Location: ../view/L&S_HOTEL/paiement.php?id='.$idChambreRecup);
}else{
    header('Location: ../view/L&S_HOTEL/connexion.php');
}

?>
