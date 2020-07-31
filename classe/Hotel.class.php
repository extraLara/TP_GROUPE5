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


        //Methode 
        //--------------------------------------------------------------------
        //toString
        public function __toString(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu;
        }


        //Fonction afficher l'etat de l'hotel 
        public function afficheEtat(): string{
            return "Nom : ".$this->nom." adresse : ".$this->lieu." l'Hotel se compose de : ".count($this->nombreChambres). " chambres.";
        }


        //Fonction afficher le nombre de chambre libre
        public function nbChLibre(): int
        {
            return $this->nombreChambres;
        }


        //Fonction Calcul du chiffre affaire 
        public function chiffreAffaire(): float{
            return $this->chiffreAffaire;
        }













        //GETTER
        public function getNom(): string{
            return $this->nom;
        }

        public function getLieu(): string{
            return $this->lieu;
        }

        public function getNombreChambres(): string{
            return $this ->getNombreChambre;
        }

        public function getChiffreAffaire(): string{
            return $this ->chiffreAffaire;
        }


        //SETTER
        public function setNom($nouveauNom):void{
            $this->nom = $nouveauNom;
        }

        public function setLieu($nouveauLieu): void{
            $this->lieu = $nouveauLieu;
        }

        public function setNombreChambres($nombreChambres): void{
            $this->nombrechambres = $nouveauNombreChambres; 
        }
        
        public function setNombreChambres($chiffreAffaire): void{
            $this->chiffreAffaire = $nouveauChiffreAff; 
        }

    }

?>
