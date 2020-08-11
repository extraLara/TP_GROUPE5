<?php


class Facture{

    //définitions et initialisations des attributs
    public $date;
    public $numFacture;
    public $nomHotel;
    public $adresse;
    public $tel;
    public $email;
    public $nomPrenomClient;
    private $typeChambre;
    public $options;
    public $prixHT;
    public $prixTTC;
    public $TVA;
    public $nbNuits;
    public $totalRes;


    //METHODES
    //----------------------------------------------------------------------------------------------------------

    public function __construct($nouvelleDate, $nouveauNumFacture,$nouveauNomHotel,$nouveauAdresse,$nouveauTel,$nouveauEmail,$nouveauNomPrenomClient,$nouveauTypeChambre,$nouvellesOptions,$nouveauPrixHT,$nouveauPrixTTC,$nouveauTVA,$nouveauNbNuits,$nouveauTotalRes){
        //Initialiation des attributs
        $this->date = $nouvelleDate;
        $this->numFacture = $nouveauNumFacture;
        $this->nomHotel = $nouveauNomHotel;
        $this->adresse = $nouveauAdresse;
        $this->tel = $nouveauTel;
        $this->email = $nouveauEmail;
        $this->nomPrenomClient = $nouveauNomPrenomClient;
        $this->typeChambre = $nouveauTypeChambre;
        $this->options = $nouvellesOptions;
        $this->prixHT = $nouveauPrixHT;
        $this->prixTTC = $nouveauPrixTTC;
        $this->TVA = $nouveauTVA;
        $this->nbNuits = $nouveauNbNuits;
        $this->totalRes = $nouveauTotalRes;
        //Initialisation de l'objet "tool"
        $this->objTool = new Tool("../input/ListeChambres_V3.csv");
    }



    //Fonction calcul prix ttc
    public function calculPrixTTC(): void{
        $this->prixTTC = $this->prixHT + ($this->prixHT * ($this->TVA / 100));
    }

    //Fonction calcul TVA
    public function calculTVA(){
        $this->prixHT = $this->prixTTC * (100 / ($this->TVA + 100));
    }

    //Fonctions permettant de faire la génération de Facture
    public function genFacture(): void{
        //$this->toolObj->createPDF();
    }

    public function genMail(): void{
        //$this->toolObj->envoyerMail(Personne->getEmail(), "Ma facture", "<p>Facture N°</p>");
    }

    //GETTER AND SETTER
    //------------------------------------------------------------------------------------------------------------
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

    /**
     * @return mixed
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * @param mixed $numFacture
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;
    }

    /**
     * @return mixed
     */
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

    /**
     * @param mixed $nomHotel
     */
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;
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
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
    public function setTel($tel)
    {
        $this->tel = $tel;
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNomPrenomClient()
    {
        return $this->nomPrenomClient;
    }

    /**
     * @param mixed $nomPrenomClient
     */
    public function setNomPrenomClient($nomPrenomClient)
    {
        $this->nomPrenomClient = $nomPrenomClient;
    }

    /**
     * @return mixed
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    /**
     * @param mixed $prixTTC
     */
    public function setPrixTTC($prixTTC)
    {
        $this->prixTTC = $prixTTC;
    }

    /**
     * @return mixed
     */
    public function getTVA()
    {
        return $this->TVA;
    }

    /**
     * @param mixed $TVA
     */
    public function setTVA($TVA)
    {
        $this->TVA = $TVA;
    }

    /**
     * @return mixed
     */
    public function getNbNuits()
    {
        return $this->nbNuits;
    }

    /**
     * @param mixed $nbNuits
     */
    public function setNbNuits($nbNuits)
    {
        $this->nbNuits = $nbNuits;
    }

    /**
     * @return mixed
     */
    public function getTotalRes()
    {
        return $this->totalRes;
    }

    /**
     * @param mixed $totalRes
     */
    public function setTotalRes($totalRes)
    {
        $this->totalRes = $totalRes;
    }

}
