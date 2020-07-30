<?php

    class Hotel{
        //Déclarations des attributs
        protected $nom;
        protected $lieu;
        protected $nombreChambres;
        protected $chiffreAffaire;

        //Déclaration du constructeur
        public function __construct($nouveauNom, $nouveauLieu, $nouveauNombreChambres, $nouveauChiffreAff){
            $this->nom = $nouveauNom;
            $this->lieu = $nouveauLieu;
            $this->nombreChambres = $nouveauNombreChambres;
            $this->chiffreAffaire = $nouveauChiffreAff;
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

        public function afficheEtat(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu." l'Hotel se compose de : ".count($this->nombreChambres). " chambres.";
        }

        public function nbChLibre(): int
        {
            return $this->nombreChambres;
        }

        public function chiffreAffaire(): float{
            return $this->chiffreAffaire;
        }
    }

?>
