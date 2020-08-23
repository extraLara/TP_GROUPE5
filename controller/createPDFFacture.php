<?php
session_start();
error_reporting(0);
// include autoloader
require_once '../classe/dompdf/autoload.inc.php';

$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/ListeChambres_V3.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

//Récupération de l'id chambre
$recupIDChambre = $_GET['idChambre'];
$dateReservation = "";
$recupNumReservation = "";

if($recupIDChambre == 2){
    $infoChambre = explode(';', $recupCSV[$recupIDChambre-1][0].$recupCSV[$recupIDChambre-1][1]);
}else{
    $infoChambre = explode(';', $recupCSV[$recupIDChambre-1][0]);
}

$recupCSV = array();
//Importation des lignes
$handle = fopen("../input/Reservation.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupCSV, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupCSV);

foreach($recupCSV as $row){
    if(explode(';', $row[0])[2] == $recupIDChambre){
        $dateReservation = date("d/m/Y", strtotime(explode(';', $row[0])[3]))." au ".date("d/m/Y", strtotime(explode(';', $row[0])[4]));
        $recupNumReservation = explode(';', $row[0])[0];
    }
}

$html2 = '<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">


<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }

    .gray {
        background-color: #eebb4d;
        color: white;
    }
</style>

</head>
<body style="font-family:Abel;">

  <table width="100%">
    <tr>
        <td valign="top"><img src="../view/L&S_HOTEL/pdf/logo.png" alt="" width="350"/></td>
        <td align="right">
            <h3 style="color:#eebb4d">L&S HOTEL</h3>
            <pre>
                L&S Hotel et Spa **** 
                20 Rue du Luxembourg, 
                59100 Roubaix
                03.27.01.02.03
                lshotel@hotmail.com
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%" align="center">
    <tr>
        <td align="center"><h1 style="color: #082d41"><b>Récapitulatif de votre réservation :</b></h1></td>
    </tr>
    <tr>
        <td align="center">Ci-dessous le récapitulatif de votre reservation à l\'Hôtel L&S Hôtel & SPA. </td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead class="gray">
      <tr>
        <th>Numero de chambre</th>
        <th>Description</th>
        <th>Options</th>
        <th>Prix €</th>
        <th>Date de reservation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">'.$recupIDChambre.'</th>
        <td>'.$infoChambre[0].'</td>
        <td align="right">';
        
    foreach(explode('|', $infoChambre[6]) as $row){
        $html2 .= $row.' ';
    }

    $html2 .= '</td>
        <td align="right">'.$infoChambre[4].'</td>
        <td align="right">'.$dateReservation.'</td>
      </tr>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right" style="color: #082d41">Total €</td>
            <td align="right" class="gray">'.$infoChambre[4].' € </td>
        </tr>
    </tfoot>
  </table>

</body>
</html>';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html2);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Facture n°".$recupNumReservation);

?>
