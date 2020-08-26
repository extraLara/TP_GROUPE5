<?php
session_start();
//inclue le php mail
require('../classe/phpMailer/src/PHPMailer.php');
//Récupération des fichiers
$recupNP = $_POST['nomPrenom'];
$recupCrNo = $_POST['numeroCard'];
$recupDateExp = $_POST['dateExp'];
$recupCVV = $_POST['3chiffres'];
$recupPrixChambre = $_POST['prixChambre'];
$recupNumChambre =  $_POST['numChambre'];
$recupNomChambre =  $_POST['nomChambre'];

var_dump($recupNP
,$recupCrNo
,$recupDateExp
,$recupCVV,$recupPrixChambre
,$recupNumChambre
,$recupNomChambre);


//PERMET DE CREER UN ID
$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/Paiement.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

$compteurPaiement = 1;

//Recupere le derneir element
$recupDerniereElementCSV = end($recupCSV);

if(count($recupCSV) > 0){
    $compteurPaiement = explode(';', $recupDerniereElementCSV[0])[0] + 1;
}

//Création du string qui sera integre dans le csv "Paiement.csv"
$nouveauPaiement = $compteurPaiement.';'.$recupNP.';'.$recupCrNo.';'.$recupDateExp.';'.$recupCVV.';'.$recupNomChambre.';'.$recupNumChambre.';'.$recupPrixChambre.';'.date('d/m/Y h:i:s');

//inscription dans le fichier CSV 
$handle = fopen("../input/Paiement.csv", "a");
fputcsv($handle, array($nouveauPaiement)); 
fclose($handle);


//PHP MAILER
$body = '<!DOCTYPE html>
<html>

    <head>
    <title>Confirmation de reservation - L&S Hotel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">


<!-- css du mail --> 

<style type="text/css">
body 
table,
td,
a {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

table,

img {
    -ms-interpolation-mode: bicubic;
}

img {
    border: 0;
    height: auto;
    line-height: 100%;
    outline: none;
    text-decoration: none;
}

table {
    border-collapse: collapse !important;
}

body {
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}

a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

@media screen and (max-width: 480px) {
    .mobile-hide {
        display: none !important;
    }

    .mobile-center {
        text-align: center !important;
    }
}

div[style*="margin: 16px 0;"] {
    margin: 0 !important;
}
</style>

<!-- debut --> 
<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">

<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Abel, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
</div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 35px; background-color: #082d41;" bgcolor="#082d41">
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="center"> <img src="assets/brand/logo.png" width="200" height="200" style="display: block; border: 0px;" /> </td>
                                    </tr>
                                    <tr>
                                </table>
                            </div>                    
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family:abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 25px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Votre reservation est confirmée ! </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;"> Ci-dessous le récapitulatif de votre reservation à l hotel L&S Hotel et SPA. </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"> Date de reservation : </td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">  </td> <!-- date reservation -->  
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"> '.$recupNomChambre.' </td> <!-- changer chambre -->  
                                                <td width="25%" align="left" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">'.$recupPrixChambre.' € </td>  <!-- changer prix  -->  
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> TOTAL </td>
                                                <td width="25%" align="left" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;"> '.$recupPrixChambre.' </td> <!-- changer prix  -->  
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Description :</p>
                                                        <p>Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere</p>

                                                        <p style="font-weight: 800;">Options :</p>
                                                        <p>
                                                            consilium vero dare audeamus libere
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style=" padding: 35px; background-color: #082d41;" bgcolor="#1b9ba3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <h2 style="font-size: 20px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;"> Cliquez ci-dessous pour obtenir votre facture. </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 25px 0 15px 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> <a href="#" target="_blank" style="font-size: 14px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #eebb4d; padding: 15px 30px; border: 1px solid #eebb4d; display: block;">PDF</a> </td>
                                            </tr>
                                            <td align="left" style="font-family: abel, Helvetica, Arial, sans-serif; font-size: 25px; font-weight: 400; line-height: 24px;">
                                                <br>
                                                <p style="font-size: 13px; font-weight: 400; line-height: 20px; color: #ffffff63;"> Si vous n avez pas créé de compte à l aide de cette adresse e-mail, veuillez l ignorer ou vous <a href="#" target="_blank" style="color: #77777765;">désinscrire.</a>. </p>
                                            </td>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';


/*$this->envoiMail = new PHPmailer();
//Configuration du mail
$this->envoiMail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$this->envoiMail->Host = 'SMTP.office365.com'; // Spécifier le serveur SMTP
$this->envoiMail->SMTPAuth = true; // Activer authentication SMTP
$this->envoiMail->Username = 'lshotelspa@hotmail.com'; // Votre adresse email d'envoi
$this->envoiMail->Password = 'LShotel2020'; // Le mot de passe de cette adresse email
$this->envoiMail->SMTPSecure = 'ssl'; // Accepter SSL
$this->envoiMail->Port = 587;
$this->envoiMail->setFrom('lshotelspa@hotmail.com', 'HOTEL 5 ETOILES'); // Personnaliser l'envoyeur
$this->envoiMail->addAddress($adresseMailClient); // Ajouter le destinataire
$this->envoiMail->addCC('addresse de MOUSSA');
//$this->envoiMail->addAttachment(''); // Ajouter un fichier joint
$this->envoiMail->isHTML(true); // Paramétrer le format des emails en HTML ou non
$this->envoiMail->Subject = $sujet;
$this->envoiMail->Body = $body;

try{
    //$this->envoiMail->send();
}catch(Exception $e){
    var_dump($e->getMessage());
}*/

//redirection sur la page de connexion
header('Location: ../view/L&S_HOTEL/reservationCli.php');

?>