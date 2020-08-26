<?php
    session_start();
    //Récupération de l'id Chambre 
    $recupIdContact = $_GET['id'];

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

    foreach($recupCSV as $row){
        if(explode(';', $row[0])[0] == $recupIdContact){
            deleteLineInFile("../input/Contact.csv", $row[0]);
        }
    }

    //Redirection vers la page des reservations
    header('Location: ../view/L&S_HOTEL/admin/contact.php');
?>