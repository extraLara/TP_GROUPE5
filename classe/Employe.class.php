<?php

//Appel de la classe parente
include "Personne.class.php";

class Employe extends Personne{

    //Déclarations des attributs
    private $login;
    private $mdp;
    private $poste;

    //METHODES
    //--------------------------------------------------------------------------------------------------------------

    //Déclaration du constructeur
    public function __construct($nouveauLogin, $nouveauMdp, $nouveauPoste, $nouveauNom, $nouveauPrenom, $nouveauDateDeNaissance, $nouveauEmail, $nouveauTel, $nouveauAdresse){
        //Définition des attributs
        $this->login = $nouveauLogin;
        $this->mdp = $nouveauMdp;
        $this->poste = $nouveauPoste;
        //on appelle le construct parent
        parent::__construct($nouveauNom,$nouveauPrenom,$nouveauDateDeNaissance,$nouveauEmail,$nouveauTel,$nouveauAdresse);
    }


    //GETTER ET SETTER
    //----------------------------------------------------------------------------------------------------
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
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste): void
    {
        $this->poste = $poste;
    }



}