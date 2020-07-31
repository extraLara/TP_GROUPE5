<?php


class Facture{

    //définitions et initialisations des attributs

    public $date;
    public $nom;
    public $prenom;
    private $typeChambre;
    public $tarif;
    public $options;

    public function __construct($nouvelleDate, $nouveauNom, $nouveauPrenom, $nouveauTypeCh, $nouveauTarif, $nouvellesOptions){

        $this->date = $nouvelleDate;
        $this->nom = $nouveauNom;
        $this->prenom = $nouveauPrenom;
        $this->typeChambre = $nouveauTypeCh;
        $this->tarif = $nouveauTarif;
        $this->options = $nouvellesOptions;
    }

    //fonction generer facture
    public function genFacture()
    {
        // TO DO
    }

    //fonction calcul prix ttc 
    public function calculPrixTTC()
    {


    }


    //fonction calcul TVA
    public function calculTVA()
    {
        //TO DO 
    }

    //fonctions permettant de faire la génération de Facture
    public function genFacture()
    {
        //$this->toolObj->envoyerMail(Personne->getEmail(), "Ma facture", "<p>Facture N°</p>")

    }

        //GETTER AND SETTER
    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getTypeChambre(){
        return $this->typeChambre;
    }

    public function setTypeChambre($typeChambre){
        $this->typeChambre = $typeChambre;
    }

    public function getTarif(){
        return $this->tarif;
    }

    public function setTarif($tarif){
        $this->tarif = $tarif;
    }

    public function getOptions(){
        return $this->options;
    }

    public function setOptions($options){
        $this->options = $options;
    }


    }

}