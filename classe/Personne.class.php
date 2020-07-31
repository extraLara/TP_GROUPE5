<?php
    class Personne{

    //Déclaration des attributs
        protected $nom;
        protected $prenom;
        protected $dateDeNaissance;
        protected $email;
        protected $tel;
        protected $adresse;


    //METHODE
    //------------------------------------------------------------------------------------------------
    //Déclaration du constructeur
    public function __construct($nouveauNom,$nouveauPrenom,$nouveauDateDeNaissance,$nouveauEmail,$nouveauTel,$nouveauAdresse ){
        $this->nom = $nouveauNom;
        $this->prenom = $nouveauPrenom;
        $this->dateDeNaissance = $nouveauDateDeNaissance;
        $this->email = $nouveauEmail;
        $this->tel = $nouveauTel;
        $this->adresse = $nouveauAdresse;
    }


    //GETTER ET SETTER
    //------------------------------------------------------------------------------------------------
        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom): void
        {
            $this->nom = $nom;
        }

        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom): void
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getDateDeNaissance()
        {
            return $this->dateDeNaissance;
        }

        /**
         * @param mixed $dateDeNaissance
         */
        public function setDateDeNaissance($dateDeNaissance): void
        {
            $this->dateDeNaissance = $dateDeNaissance;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email): void
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getTel()
        {
            return $this->tel;
        }

        /**
         * @param mixed $tel
         */
        public function setTel($tel): void
        {
            $this->tel = $tel;
        }

        /**
         * @return mixed
         */
        public function getAdresse()
        {
            return $this->adresse;
        }

        /**
         * @param mixed $adresse
         */
        public function setAdresse($adresse): void
        {
            $this->adresse = $adresse;
        }









































}