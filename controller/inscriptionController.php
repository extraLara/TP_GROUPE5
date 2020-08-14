<?php
session_start();
//Récupération des variables
$recupNom = $_POST['nom'];
$recupPrenom = $_POST['prenom'];
$recupDateNaissance = $_POST['dateNaissance'];
$recupAdresse = $_POST['adresse'];
$recupVille = $_POST['ville'];
$recupCodePostal = $_POST['codePostal'];
$recupTelPortable = $_POST['telPortable'];
$recupAdresseMail = $_POST['adresseMail'];
$recupLogin = strtolower($_POST['login']);
$recupPass1 = $_POST['pass1'];
$recupPass2 = $_POST['pass2'];

//PERMET DE CREER UN ID
$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/User.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

$compteurUser = 1;

//Recupere le derneir element
$recupDerniereElementCSV = end($recupCSV);

if(count($recupCSV) > 0){
    $compteurUser = explode(';', $recupDerniereElementCSV[0])[0] + 1;
}



//Création du string qui sera integre dans le csv "user.csv"
$nouvelleUser = $compteurUser.';'.$recupNom.';'.$recupPrenom.';'.$recupDateNaissance.';'.$recupAdresse.';'.$recupVille.';'.$recupCodePostal.';'.$recupTelPortable.';'.$recupAdresseMail.';'.$recupLogin.';'.$recupPass1;

//inscription dans le fichier CSV 
$handle = fopen("../input/User.csv", "a");
fputcsv($handle, array($nouvelleUser)); 
fclose($handle);

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/connexion.php');


?>