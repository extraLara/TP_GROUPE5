<?php
    //Inclu les classes
    require('fpdf/fpdf.php');
    require('phpMailer/src/PHPMailer.php');

    class Tool{
        //Déclarations des attributs
        private $creationPDF;
        private $envoiMail;
        //Va contenir, le fichier CSV
        private $csvImport;
        //Va contenir, le chemin du fichier CSV
        //../input/ListeChambres_V3.csv
        private $csvNomFichier;

        //Création du constructeur
        public function __construct($nouveauCsvNomFichier){
            //Instanciation FPDF
            $this->creationPDF = new FPDF();
            //PHP MAILER
            $this->envoiMail = new PHPmailer();
            //Configuration du mail
            $this->envoiMail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
            $this->envoiMail->Host = 'SMTP.office365.com'; // Spécifier le serveur SMTP
            $this->envoiMail->SMTPAuth = true; // Activer authentication SMTP
            $this->envoiMail->Username = 'lshotelspa@hotmail.com'; // Votre adresse email d'envoi
            $this->envoiMail->Password = 'LShotel2020'; // Le mot de passe de cette adresse email
            $this->envoiMail->SMTPSecure = 'ssl'; // Accepter SSL
            $this->envoiMail->Port = 587;
            //Definition du nom de fichier
            $this->csvNomFichier = $nouveauCsvNomFichier;
            //Création du tableau qui contient l'ensemble du csv
            $this->csvImport = array();
        }

        //METHODES
        //CSV
        //---------------------------------------------------------------
        public function recupCSV(): void {
            //Importation des lignes
            $handle = fopen($this->csvNomFichier, "r");
            for ($i = 0;$row = fgetcsv($handle);$i++) {
                //Tant que j'ai une ligne, j'ajoute dans mon tableau
                array_push($this->csvImport, $row);
            }
            //Je ferme le fichier
            fclose($handle);
            //Suppression du premier element
            array_shift($this->csvImport);
        }

        public function exportCSV(): void{
            //TO DO : Faire l'exportation du fichier
        }

        //PDF
        //---------------------------------------------------------------
        public function createPDF(): void{

            $codeSourceHTML = "
            
            //TO DO : code HTML
            
            
            ";

            $this->creationPDF->AddPage();
            $this->creationPDF->WriteHTML($codeSourceHTML);
            $this->creationPDF->Output();
        }


        //MAIL
        //---------------------------------------------------------------
        public function envoyerMail($adresseMailClient, $sujet, $body): void{
            $this->envoiMail->setFrom('lshotelspa@hotmail.com', 'HOTEL 5 ETOILES'); // Personnaliser l'envoyeur
            $this->envoiMail->addAddress($adresseMailClient); // Ajouter le destinataire
            $this->envoiMail->addCC('addresse de MOUSSA');
            //$this->envoiMail->addAttachment(''); // Ajouter un fichier joint
            $this->envoiMail->isHTML(true); // Paramétrer le format des emails en HTML ou non
            $this->envoiMail->Subject = $sujet;
            $this->envoiMail->Body = $body;

            try{
                $this->envoiMail->send();
            }catch(Exception $e){
                var_dump($e->getMessage());
            }
        }


        //GETTER
        public function getCSVInformation(){
            return $this->csvImport;
        }
       
        
    }

?>