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


//Création du string qui sera integre dans le csv "employe.csv"
$nouvelleUser = $recupNom.';'.$recupPrenom.';'.$recupDateNaissance.';'.$recupAdresse.';'.$recupVille.';'.$recupCodePostal.';'.$recupTelPortable.';'.$recupAdresseMail.';'.$recupLogin.';'.$recupPass1;

//inscription dans le fichier CSV 
$handle = fopen("../input/Employe.csv", "a");
fputcsv($handle, array($nouvelleUser)); 
fclose($handle);

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/connexion.php');


?>