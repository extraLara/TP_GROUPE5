<?php
session_start();
//Récupération des variables
$idChambreRecup = $_POST['idChambre'];
$prixChambreRecup = $_POST['prixChambre'];
//Voir si connecte
/*if($_SESSION['logged'] == 1){
    header('Location: ../view/L&S_HOTEL/paiement.php?id='.$idChambreRecup);
}else{
    header('Location: ../view/L&S_HOTEL/connexion.php');
}*/

header('Location: ../view/L&S_HOTEL/paiement.php?id='.$idChambreRecup);
?>