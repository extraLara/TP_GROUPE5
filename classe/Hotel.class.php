<?php

    class Hotel{
        //Déclarations des attributs
        protected $nom;
        protected $lieu;
        protected $nombreChambres;
        protected $chiffreAffaire;
        protected $objTool;

        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAffaire, $nouveauNomFichierCSV){
            $this->nom = $nouveauNom;
            $this->lieu = $nouveauLieu;
            $this->nombreChambres = $nouveauNombreChambres;
            $this->chiffreAffaire = $nouveauChiffreAffaire;
            $this->objTool = new Tool($nouveauNomFichierCSV);
        }


        //Methode 
        //--------------------------------------------------------------------
        //toString
        public function __toString(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu;
        }


        //Afficher l'etat de l'hotel
        public function afficheEtat(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu." l'Hotel se compose de : ".count($this->nombreChambres). " chambres.";
        }


        //Afficher le nombre de chambre libre
        public function nbChLibre(): int{
            return $this->nombreChambres;
        }

        //Calcul du chiffre affaire
        public function chiffreAffaire(): float{
            return $this->chiffreAffaire;
        }

        //Recuperation de toutes les chambres
        public function initChambres(){
            //$getChambres = $this->objTool->getgetCSVInformation();
        }

        //GETTER ET SETTER
        //--------------------------------------------------------------------------------------------------
        public function getNom(): string{
            return $this->nom;
        }

        public function getLieu(): string{
            return $this->lieu;
        }

        public function getNombreChambres(): string{
            return $this ->getNombreChambres;
        }

        public function getChiffreAffaire(): string{
            return $this ->chiffreAffaire;
        }


        public function setNom($nouveauNom):void{
            $this->nom = $nouveauNom;
        }

        public function setLieu($nouveauLieu): void{
            $this->lieu = $nouveauLieu;
        }

        public function setNombreChambres($nombreChambres): void{
            $this->nombrechambres = $nouveauNombreChambres; 
        }
        
        public function setChiffreAffaire($chiffreAffaire): void{
            $this->chiffreAffaire = $nouveauChiffreAffaire;
        }

    }

?>
