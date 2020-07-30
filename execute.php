<?php
    //Inclu la chambre
    include "Chambre.class.php"; 

    //Défintion des confidentialites
    define("loginUser", "admin");
    define("motDePasse", "root");

    //Definition du nombres de chambre de l'hotel
    define("nbChambresTotal", 20);

    //Ce tableau va gerer tous les chambres de mon hotel
    $tabChambres = array();

    //Je boucle selon constante pour creer le nombre de chambres 
    for($i = 1;$i < nbChambresTotal+1;$i++){
        //Création d'un objet qui prends en parametre
        // - Nom de l'hotel
        // - Adresse
        // - Etat ( du coup soit 0 ou 1 )
        // - Et le numero de chambre
        array_push($tabChambres, new Chambre("HOTEL D2WM", "18 rue de Paris, Montpellier", (int)rand(0,1), $i));
    }

    //Permet de garder le menu ouvert
    $menu = false;

    echo "------------------------------- MENU HOTEL D2WM ------------------------------------------------".PHP_EOL;
    echo "A- Afficher l’état de l’hôtel".PHP_EOL;
    echo "B- Afficher le nombre de chambres réservées".PHP_EOL;
    echo "C- Afficher le nombre de chambres libres".PHP_EOL;
    echo "D- Afficher le numéro de la première chambre vide".PHP_EOL;
    echo "E- Afficher le numéro de la dernière chambre vide".PHP_EOL;
    echo "F- Réserver une chambre (Le programme doit réserver la première chambre vide)".PHP_EOL;
    echo "G- Libérer une chambre (Le programme doit libérer la dernière chambre occupée)".PHP_EOL;
    echo "Q- Quitter".PHP_EOL;
    echo "---------------------------------------------------------------------------------------------------------------------".PHP_EOL;

    while($menu == false){
        //Récupération du choix
        $recupChoix = readline("Votre choix : ");
        //Si c'est le choix A
        //Alors j'affiche l'état de l'hotel
        if($recupChoix == "A"){
            echo "Votre hotel comporte ".PHP_EOL;
            //Définition des compteurs de chambre
            $compteurChambreLibre = 0;
            $compteurChambreReserve = 0;
            //Je boucle sur tous mes elements
            foreach($tabChambres as $row){
                //Si la chambre est à zero du coup je sais qu'elle est libre
                if($row->getEtat() == 0){
                    //Alors j'incremente mon compteur
                    $compteurChambreLibre++;
                }else{
                    //Sinon elle est reserver et j'incremente l'autre compteur
                    $compteurChambreReserve++;
                }
            }
            //J'affiche les chambres
            echo "- ".$compteurChambreLibre." chambres libres".PHP_EOL;
            echo "- ".$compteurChambreReserve." chambres réservées".PHP_EOL;
        }

        if($recupChoix == "B"){
            //Je boucle sur le tableau pour afficher toutes les chambres reserves
            foreach($tabChambres as $row){
                //Si l'etat est a 1 du coup elle est reverse
                if($row->getEtat() == 1){
                    //Alors j'affiche les chambres reservés
                    echo $row->__toString().PHP_EOL;
                }
            }
        }

        if($recupChoix == "C"){
            //Je boucle sur le tableau pour afficher toutes les chambres libres
            foreach($tabChambres as $row){
                //Si l'etat est a 1 du coup elle est libre
                if($row->getEtat() == 0){
                    //Alors j'affiche les chambres libre
                    echo $row->__toString().PHP_EOL;
                }
            }
        }

        if($recupChoix == "D"){
            //Création de la variable qui va contenir mon objet du tableau
            $chambreVide = null;
            //Ce compteur permet de recuperer la premeire chambre
            $compteur = false;
            //Je boucle sur toutes les elements
            foreach($tabChambres as $row){
                //Si mon etat est a 0 du coup libre et que mon compteur est a false
                if($row->getEtat() == 0 && $compteur == false){
                    //Ducoup je rentre dedans pour la premiere fois
                    $chambreVide = $row;
                    //Et je passe a true comme ca je recupere que le premier element
                    $compteur = true;
                }
            }
            //J'affiche le numero de la chambre
            echo "Le numero de la premiere chambre libre est ".$chambreVide->getChambreNumero().PHP_EOL;
        }

        if($recupChoix == "E"){
            //Création de la variable qui va contenir mon objet du tableau
            $chambreVide = null;
            //Je boucle sur les elements du tableau
            foreach($tabChambres as $row){
                //Si mon etat est 0 alors c'est libre mais je
                //definis a chaque fois comme ca je vais recuperer
                //la dernier chambre libre
                if($row->getEtat() == 0){
                    $chambreVide = $row;
                }
            }
            //J'affiche le numero de la chambre
            echo "Le numero de la derniere chambre libre est ".$chambreVide->getChambreNumero().PHP_EOL;
        }

        if($recupChoix == "F"){
            //Protection par user et mot de passe
            echo "Une authentification est attendue".PHP_EOL;
            $recupUser = readline("Login : ");
            $recupPass = readline("Mot de passe : ");
            //Verification de connexion 
            //Si les informations correspondent alors je peux acceder 
            if(($recupUser == loginUser) && ($recupPass == motDePasse)){
                //Création d'une variable qui va contenir mon objet
                $chambreVide = null;
                //Cette variable va me permettre de recuperer la premiere chambre libre
                $compteur = false;
                //Je boucle sur toutes les chambres
                foreach($tabChambres as $row){
                    //Lorsque une chambre est vide et le compteur est false
                    if($row->getEtat() == 0 && $compteur == false){
                        //Je mets l'objet dans ma variable
                        $chambreVide = $row;
                        //Et je passe a true 
                        //donc je recupere que le premier objet
                        $compteur = true;
                    }
                }
                //Je definis son état a 1 pour dire que la chambre est réservé
                $chambreVide->setEtat(1);
                //J'affiche la chambre reservé
                echo $chambreVide->__toString()." est réservé".PHP_EOL;
            }else{
                //Sinon j'affiche un message d'erreur
                echo "Connexion impossible".PHP_EOL;
            }
        }

        if($recupChoix == "G"){
            //Protection par user et mot de passe
            echo "Une authentification est attendu".PHP_EOL;
            $recupUser = readline("Login : ");
            $recupPass = readline("Mot de passe : ");
            //Verification de connexion 
            //Si les informations correspondent alors je peux acceder 
            if(($recupUser == $loginUser) && ($recupPass == $motDePasse)){
                //Création d'une variable qui va contenir mon objet
                $chambreVide = null;
                //Je boucle sur les elements du tableau
                foreach($tabChambres as $row){
                    //Si mon etat est 0 alors c'est libre mais je
                    //definis a chaque fois comme ca je vais recuperer
                    //la dernier chambre libre
                    if($row->getEtat() == 0){
                        $chambreVide = $row;
                    }
                }
                //Je definis a 0 ducoup c'est libre
                $chambreVide->setEtat(0);
                //J'affiche la chambre livre
                echo $chambreVide->__toString()." est libre".PHP_EOL;
            }else{
                //Sinon j'affiche un message d'erreur
                echo "Connexion impossible".PHP_EOL;
            }
        }

        //Si je recupere Q
        if($recupChoix == "Q"){
            //Ducoup je casse la boucle 
            $menu = true;
            //Et j'affiche "Au revoir"
            echo "Au revoir".PHP_EOL;
        }
    }
?>