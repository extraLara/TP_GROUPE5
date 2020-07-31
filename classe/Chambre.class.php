<?php
    //Inclu l'hotel
    include "Hotel.class.php"; 

    class Chambre extends Hotel{
        //Déclarations des attributs
        private $etat;
        private $chambreNumero;
        private $nomFichierCSV;
        private $superficie; 
        public $prix; 
        public $typeChambre; 
        public $options;


        //Methodes
        //------------------------------------------------------
        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff, $nouvelEtat, $nouveauNumeroChambre, $nouveauNomFichierCSV,$nouveauSuperficie,$nouveauPrix,$nouveauTypeChambre,$nouveauOptions){

            //Définition de la chambre
            $this->etat = $nouvelEtat;
            $this->chambreNumero = $nouveauNumeroChambre;
            $this->nomFichierCSV = $nouveauNomFichierCSV;
            $this->superficie = $nouveauSuperficie; 
            $this->prix = $nouveauPrix;
            $this->typeChambre = $nouveauTypeChambre;
            $this->options = $nouveauOptions;                      
            //appel du constructeur
            parent::__construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff);
        }


        //Fonction toString
        public function __toString(): string{
            return "Nom : ".parent::getNom().PHP_EOL. " Adresse : ".parent::getLieu().PHP_EOL. " Etat : ".$this->etat.PHP_EOL." Chambre n° : ".$this->chambreNumero;
        }


        //Fonction recuperation CSV
        public function csv(){
            $handle = fopen($this->nomFichierCSV, "r");
            for ($i = 0; $row = fgetcsv($handle); ++$i) {
                //Row me donne les lignes a definir apres
                //$row
            }
            fclose($handle);

        }

        //Fonction filtrer chambre
        public function filtreChambre(){
            //array_filter()
        }

        /*
        //Fonction de tri des chambres
        public function triChambre(){
            //array_filter()
        }
        */

        //Fonction reserver Chambre
        public function reserveChambre(){
            $this->setEtat(1);
        }

        //Fonction Liberer la chambre
        public function libereChambre(){
            $this->setEtat(0);
        }
    }

?>