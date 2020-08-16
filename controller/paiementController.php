<?php
session_start();
//Récupération des variables
$idChambreRecup = $_POST['idChambre'];
$prixChambreRecup = $_POST['prixChambre'];
$recupDateDu = $_POST['dateDu'];
$recupDateAu = $_POST['dateAu'];

//Voir si connecte
if($_SESSION['$2y$10$5yV9XVOkQPowxCuywSdSMOO3ciGZYwfl3YkoRSMiFlUCdJcM93UIS'] == 1){
    //J'ecris dans le fichier des reservations
    $recupCSV = array();
    //Importation des lignes
    $handle = fopen("../input/Reservation.csv", "r");
    for ($i = 0;$row = fgetcsv($handle);$i++) {
        //Tant que j'ai une ligne, j'ajoute dans mon tableau
        array_push($recupCSV, $row);
    }
    //Je ferme le fichier
    fclose($handle);
    //Suppression du premier element
    array_shift($recupCSV);

    $compteurReservation = 1;

    //Recupere le derneir element
    $recupDerniereElementCSV = end($recupCSV);

    if(count($recupCSV) > 0){
        $compteurReservation = explode(';', $recupDerniereElementCSV[0])[0] + 1;
    }
   
    //Permet d'ajouter
    $nouvelleReservation = $compteurReservation.';'.$_SESSION['ID'].';'.$idChambreRecup.';'.$recupDateDu.';'.$recupDateAu.';'.date('d/m/Y H:i:s');

    //inscription dans le fichier CSV 
    $handle = fopen("../input/Reservation.csv", "a");
    fputcsv($handle, array($nouvelleReservation)); 
    fclose($handle);

    header('Location: ../view/L&S_HOTEL/paiement.php?id='.$idChambreRecup);
}else{
    header('Location: ../view/L&S_HOTEL/connexion.php');
}

?>
