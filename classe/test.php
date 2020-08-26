<?php 
include "Tool.class.php";

$monSuperObjet = new Tool("../input/ListeChambres_V3.csv");

$monSuperObjet->recupCSV();

$monSuperObjet->affichageCSV();

?>