<?php
  //Inclu la navbar
  include('Common/navBar.php');
  //Recuperation des reservations
  $recupCSVReservations = array();
  //Ce tableau va contenir toutes les chambres du clients
  $tabChambresClient = array();
  //Importation des lignes
  $handle = fopen("../../input/Reservation.csv", "r");
  for ($i = 0;$row = fgetcsv($handle);$i++) {
      //Tant que j'ai une ligne, j'ajoute dans mon tableau
      array_push($recupCSVReservations, $row);
  }
  //Je ferme le fichier
  fclose($handle);
  //Suppression du premier element
  array_shift($recupCSVReservations);

  //Recuperation des chambres reserves par l'utilisateur
  foreach($recupCSVReservations as $row){
      if(explode(';', $row[0])[1] == $_SESSION['ID']){
          array_push($tabChambresClient, explode(';', $row[0])[2]);
      }
  }

?>
<body>
    <div class="py-5 text-center" style="background-color: white !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="img-fluid d-block mx-auto w-25" src="assets/brand/logo.png"></div>
            </div>
            <div class="col-md-12">
            <h3 style="color:#082D41">Toutes mes réservations: </h3>
            </div>
        </div>
    </div>
            
    
    <div class="py-3" style="background-color: white !important">
        <div class="container">
            <?php
                $compteurChambre = 1;
                foreach($listeChambres as $row){
                    foreach($tabChambresClient as $value){
                        if($value == $compteurChambre){
                            echo '<div class="row pt-5">';
                                echo '<div class="col-md-6 p-3">';
                                    echo '<img class="img-fluid d-block" src="assets/rooms/room_'.$compteurChambre.'.jpg" width="1500" style="border-radius:15px">';
                                echo '</div>';
                                echo '<div class="col-md-6 p-3 shadow-lg" style="border-radius:15px">';
                                    echo '<i>Description de la chambre</i><p><br>Superficie : '.$row[1].'<br>Type de chambre : '.$row[0].'<br>Vue sur : '.$row[2].'<br>Options :';
                                    echo '<ul>';
                                        foreach(explode('|', $row[6]) as $value){
                                        echo '<p>'.$value.'</p>';
                                        }       
                                      echo '</ul>';
                                    echo '<br></p>
                                    <table border="0">
                                        <tr>
                                            <td>
                                                <a class="btn btn-primary text-right" href="../../controller/annulationReservationController.php?idChambre='.$compteurChambre.'" style="border:none">Annuler</a>
                                            </td>
                                            <td>
                                                &nbsp;
                                            </td>
                                            <td>
                                                <a class="btn btn-primary text-right" style="border:none" href="#">Télécharger Facture (PDF)</a>
                                            </td>
                                        </tr>
                                    </table>';
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                    $compteurChambre++;
                }
                if(count($tabChambresClient) == 0){
                    echo "<p class='text-center'>Vous n'avez aucune reservation</p>";
                }
            ?>
            </div>
        </div>
    </div>
</body>

<?php
  //Inclu le footer
  include('Common/footer.php');
?>