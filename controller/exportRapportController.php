<?php
//Récupération des variables
$recupChambreLibres = $_POST['chambreLibres'];
$recupChambreReserve = $_POST['chambreReserve'];
$recupChiffreAffaire = $_POST['chiffreAffaire'];
$recupTauxOccupation = $_POST['tauxOccupation'];

//PERMET DE CREER UN ID
$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/RapportReservations.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

$compteurRapport = 1;

//Recupere le derneir element
$recupDerniereElementCSV = end($recupCSV);

if(count($recupCSV) > 0){
    $compteurRapport = explode(';', $recupDerniereElementCSV[0])[0] + 1;
}

//Création du string qui sera integre dans le csv "RapportReservations.csv"
$nouveauRapport = $compteurRapport.';'.$recupChambreLibres.';'.$recupChambreReserve.';'.$recupChiffreAffaire.';'.$recupTauxOccupation.';'.date('d/m/Y h:i:s');

//inscription dans le fichier CSV 
$handle = fopen("../input/RapportReservations.csv", "a");
fputcsv($handle, array($nouveauRapport)); 
fclose($handle);

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/admin/admin.php');

?>