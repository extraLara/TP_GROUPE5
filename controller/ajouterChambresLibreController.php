<?php
session_start();
//récupération des variables
$recupIDUser = $_POST['client'];
$recupDateDu = $_POST['dateDu'];
$recupDateAu = $_POST['dateAu'];
$recupIDChambre = $_POST['idChambre'];

//PERMET DE CREER UN ID
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

$compteurResa = 1;

//Recupere le derneir element
$recupDerniereElementCSV = end($recupCSV);

if(count($recupCSV) > 0){
    $compteurResa = explode(';', $recupDerniereElementCSV[0])[0] + 1;
}


//Création de la ligne
$nouvelleResa = $compteurResa.';'.$recupIDUser.';'.$recupIDChambre.';'.$recupDateDu.';'.$recupDateAu.';'.date('d/m/Y h:i:s');

//inscription dans le fichier CSV 
$handle = fopen("../input/Reservation.csv", "a");
fputcsv($handle, array($nouvelleResa)); 
fclose($handle);

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/admin/chambres.php');

?>