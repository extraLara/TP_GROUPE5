<?php
session_start();
//Récupération des variables
$recupLogin = strtolower($_POST['login']);
$recupPass = $_POST['pass'];

$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/User.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row[0]);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

$identLogin = null;
$identPass = null;

$connexion = false;

foreach($recupCSV as $row){
    $recupLoginCSV = explode(';', $row)[8];
    $recupPassCSV = explode(';', $row)[9];

    if(($recupLogin == $recupLoginCSV) && ($recupPass == $recupPassCSV)){
        //Je definis et mets en sesssion ces informations
        $identLogin = $recupLoginCSV;
        $identPass = $recupPassCSV;
        //Passe ne connexion true
        $connexion = true;
    }
}

if($connexion == true){
    //Si je peux me connecter alors je creer une variable de session
    $_SESSION['$2y$10$5yV9XVOkQPowxCuywSdSMOO3ciGZYwfl3YkoRSMiFlUCdJcM93UIS'] = 1;
    //Je redirige sur la page d'index
    header('Location: ../view/L&S_HOTEL/index.php');
}else{
    header('Location: ../view/L&S_HOTEL/connexion.php');
}

?>