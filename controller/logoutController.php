<?php
session_start();
//Nettoyage de la session 
$_SESSION['$2y$10$5yV9XVOkQPowxCuywSdSMOO3ciGZYwfl3YkoRSMiFlUCdJcM93UIS'] = 0;
//Redirection sur la page d'acceuil
header('Location: ../view/L&S_HOTEL/index.php');
?>