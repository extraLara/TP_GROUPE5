<?php
session_start();
//Récupération des variables
$recupIDChambre = $_POST['idChambre'];
$recupDateAu = $_POST['dateAu'];
$recupDateDu = $_POST['dateDu'];
$recupUser = "";
$recupIDReservation = "";

function deleteLineInFile($file,$string){
    $i=0;$array=array();
    
    $read = fopen($file, "r") or die("can't open the file");
    while(!feof($read)) {
        $array[$i] = fgets($read);	
        ++$i;
    }
    fclose($read);
    
    $write = fopen($file, "w") or die("can't open the file");
    foreach($array as $a) {
        if(!strstr($a,$string)) fwrite($write,$a);
    }
    fclose($write);
}

//Recuperation des reservations
$recupReservations = array();
//Importation des lignes
$handle = fopen("../input/Reservation.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupReservations, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupReservations);

//Je boucle sur les reservations
foreach($recupReservations as $row){
    if($recupIDChambre == explode(';', $row[0])[2]){
        //Recuperation de l'user
        $recupUser = explode(';', $row[0])[1];
        $recupIDReservation = explode(';', $row[0])[0];
        deleteLineInFile("../input/Reservation.csv", $row[0]);
    }
}

//Création de la ligne
$nouvelleResa = $recupIDReservation.';'.$recupUser.';'.$recupIDChambre.';'.$recupDateDu.';'.$recupDateAu.';'.date('d/m/Y h:i:s');

//inscription dans le fichier CSV 
$handle = fopen("../input/Reservation.csv", "a");
fputcsv($handle, array($nouvelleResa)); 
fclose($handle);

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/reservationCli.php');



?>