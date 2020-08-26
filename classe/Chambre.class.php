<?php
    //Inclu l'hotel
    include "Hotel.class.php"; 

    class Chambre extends Hotel{
        //Déclarations des attributs
        private $etat;
        private $chambreNumero;
        private $superficie; 
        public $prix; 
        public $typeChambre; 
        public $options;
        public $chambrePaye;

        //Methodes
        //------------------------------------------------------
        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff, $nouvelEtat, $nouveauNumeroChambre,$nouveauSuperficie,$nouveauPrix,$nouveauTypeChambre,$nouveauOptions){
            //Définition de la chambre
            $this->etat = $nouvelEtat;
            $this->chambreNumero = $nouveauNumeroChambre;
            $this->superficie = $nouveauSuperficie; 
            $this->prix = $nouveauPrix;
            $this->typeChambre = $nouveauTypeChambre;
            $this->options = $nouveauOptions;   
            $this->chambrePaye = 0;                   
            //appel du constructeur
            parent::__construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff);
        }

        //Fonction toString
        public function __toString(): string{
            return "Nom : ".parent::getNom().PHP_EOL. " Adresse : ".parent::getLieu().PHP_EOL. " Etat : ".$this->etat.PHP_EOL." Chambre n° : ".$this->chambreNumero;
        }

        //Fonction reserver Chambre
        public function reserveChambre(){
            $this->setEtat(1);
        }

        //Fonction Liberer la chambre
        public function libereChambre(){
            $this->setEtat(0);
        }

        //Fonction pour payer
        public function payer($etatPayer): void{
            $this->chambrePaye = $etatPayer;
        }   
    }

?>