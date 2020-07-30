<?php
    //Inclu l'hotel
    include "Hotel.class.php"; 

    class Chambre extends Hotel{
        //Déclarations des attributs
        private $etat;
        private $chambreNumero;

        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouvelEtat, $nouveauNumeroChambre){
            //Définition de la chambre
            $this->etat = $nouvelEtat;
            $this->chambreNumero = $nouveauNumeroChambre;
            //appel du constructeur
            parent::__construct($nouveauNom, $nouveauLieu);
        }

        //GETTER
        public function getEtat(): int{
            return (int)$this->etat;
        }

        public function getChambreNumero(): int{
            return $this->chambreNumero;
        }

        //SETTER
        public function setEtat($nouveauNom):void{
            $this->etat = $nouveauNom;
        }

        public function setChambreNumero($nouveauNumeroChambre): void{
            $this->chambreNumero = $nouveauNumeroChambre;
        }

        //toString
        public function __toString(): string{
            return "Nom : ".parent::getNom()." adresse : ".parent::getLieu(). " etat : ".$this->etat." chambre numero : ".$this->chambreNumero;
        }
    }

?>