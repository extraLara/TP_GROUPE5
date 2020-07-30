<?php
    //Inclu l'hotel
    include "Hotel.class.php"; 

    class Chambre extends Hotel{
        //Déclarations des attributs
        private $etat;
        private $chambreNumero;
        private $nomFichierCSV;

        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff, $nouvelEtat, $nouveauNumeroChambre, $nouveauNomFichierCSV){
            //Définition de la chambre
            $this->etat = $nouvelEtat;
            $this->chambreNumero = $nouveauNumeroChambre;
            $this->nomFichierCSV = $nouveauNomFichierCSV;
            //appel du constructeur
            parent::__construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff);
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
            return "Nom : ".parent::getNom().PHP_EOL. " Adresse : ".parent::getLieu().PHP_EOL. " Etat : ".$this->etat.PHP_EOL." Chambre n° : ".$this->chambreNumero;
        }

        public function csv(){
            $handle = fopen($this->nomFichierCSV, "r");
            for ($i = 0; $row = fgetcsv($handle); ++$i) {
                //Row me donne les lignes a definir apres
                //$row
            }
            fclose($handle);
            
        }

        public function filtreChambre(){
            //array_filter()
        }

        public function triChambre(){
            //array_filter()
        }
        public function reserveChambre(){
            $this->setEtat(1);
        }
        public function libereChambre(){
            $this->setEtat(0);
        }
    }

?>