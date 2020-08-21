<?php
session_start();
error_reporting(0);
require_once('../classe/tcpdf/tcpdf.php');

//Récupération de l'id chambre
$recupIDChambre = $_GET['idChambre'];

$recupPaiement = array();
//Importation des lignes
$handle = fopen("../input/Paiement.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupPaiement, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupPaiement);

$recupReservation = array();
//Importation des lignes
$handle = fopen("../input/Reservation.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupReservation, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupReservation);


$html = '<table>';
$html .= '<tr>';

foreach($recupPaiement as $value){
    if(explode(';', $value[0])[6] == $recupIDChambre){
        $html .= '<td colspan="3">Le client : '.explode(";", $value[0])[1].'</td>';
    }
  }   

$html .= '</tr>';

$html .= '<tr>';
$html .= '<td>Nom Chambre</td>';
$html .= '<td>Prix</td>';
$html .= '<td>Date</td>';
$html .= '</tr>';


$html .= '<tr>';
 
foreach($recupPaiement as $value){
    if(explode(';', $value[0])[6] == $recupIDChambre){
        $html .= '<td>'.explode(";", $value[0])[5].'</td>';
        $html .= '<td>'.explode(";", $value[0])[7].' €</td>';
    }
  }    
  foreach($recupReservation as $row){
    if(explode(';', $row[0])[2] == $recupIDChambre){
        $html .= '<td>'.explode(";", $row[0])[3].' au '.explode(";", $row[0])[4].'</td>';
    }
  }

 



  $html .= '</tr>';

$html .= "</table>";


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('L&S HOTEL');
$pdf->SetTitle('Facture');

// add a page
$pdf->AddPage();


// output the HTML content
$pdf->writeHTML($html);

//Close and output PDF document
$pdf->Output('facture.pdf', 'I'); 
?>