<?php

    //Appel de la classe parente
    include "Personne.class.php";
    class Client extends Personne
    {


    //Déclarations des attributs
    private $login;
    private $mdp;
    private $reservation;


    //Methode
    //---------------------------------------------------------------------------------------------

    //Déclaration du constructeur
    public function __construct($nouveauLogin, $nouveauMdp, $nouveauReservation)
    {
        $this->login = $nouveauLogin;
        $this->mdp = $nouveauMdp;
        $this->reservation = $nouveauReservation;
        //on appelle le construct parent
        parent::__construct($nouveauNom,$nouveauPrenom,$nouveauDateDeNaissance,$nouveauEmail,$nouveauTel,$nouveauAdresse);
    }

    //function modifier reservation
    public function modifResa():
    {
        //TO DO 
    }

    //fonction annuler reservation
    public function annulerResa():
    {
        //To DO
    }

     //fonction reglement du client
     public function reglement():
     {
         //To DO
     }
 


     
    //GETTER & SETTER
    //------------------------------------------------------------------------------------------------------------------
        /**
         * @return mixed
         */
        public function getLogin()
        {
            return $this->login;
        }

        /**
         * @param mixed $login
         */
        public function setLogin($login): void
        {
            $this->login = $login;
        }

        /**
         * @return mixed
         */
        public function getMdp()
        {
            return $this->mdp;
        }

        /**
         * @param mixed $mdp
         */
        public function setMdp($mdp): void
        {
            $this->mdp = $mdp;
        }

        /**
         * @return mixed
         */
        public function getReservation()
        {
            return $this->reservation;
        }

        /**
         * @param mixed $reservation
         */
        public function setReservation($reservation): void
        {
            $this->reservation = $reservation;
        }



}