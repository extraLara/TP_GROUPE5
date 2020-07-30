<?php

    class Hotel{
        //Déclarations des attributs
        protected $nom;
        protected $lieu;

        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu){
            $this->nom = $nouveauNom;
            $this->lieu = $nouveauLieu;
        }

        //GETTER
        public function getNom(): string{
            return $this->nom;
        }

        public function getLieu(): string{
            return $this->lieu;
        }

        //SETTER
        public function setNom($nouveauNom):void{
            $this->nom = $nouveauNom;
        }

        public function setLieu($nouveauLieu): void{
            $this->lieu = $nouveauLieu;
        }

        //toString
        public function __toString(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu;
        }
    }

?>
