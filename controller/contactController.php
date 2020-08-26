<?php
    session_start();
    //Récupération des variables
    $recupNomPrenom = $_POST['txtName'];
    $recupEmail = $_POST['txtEmail'];
    $recupPhone = $_POST['txtPhone'];
    $recupMsg = $_POST['txtMsg'];

    //J'ecris dans le fichier des reservations
    $recupCSV = array();
    //Importation des lignes
    $handle = fopen("../input/Contact.csv", "r");
    for ($i = 0;$row = fgetcsv($handle);$i++) {
        //Tant que j'ai une ligne, j'ajoute dans mon tableau
        array_push($recupCSV, $row);
    }
    //Je ferme le fichier
    fclose($handle);
    //Suppression du premier element
    array_shift($recupCSV);

    $compteurContact = 1;

    //Recupere le derneir element
    $recupDerniereElementCSV = end($recupCSV);

    if(count($recupCSV) > 0){
        $compteurContact = explode(';', $recupDerniereElementCSV[0])[0] + 1;
    }
   
    //Permet d'ajouter
    $nouveauContact = $compteurContact.';'.$recupNomPrenom.';'.$recupEmail.';'.$recupPhone.';'.$recupMsg.';'.date('d/m/Y H:i:s');

    //inscription dans le fichier CSV 
    $handle = fopen("../input/Contact.csv", "a");
    fputcsv($handle, array($nouveauContact)); 
    fclose($handle);
    
    //Redirection vers la page contact
    header('Location: ../view/L&S_HOTEL/contact.php');
?>