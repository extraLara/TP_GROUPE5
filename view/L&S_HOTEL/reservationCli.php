<?php
  //Inclu la navbar
  include('Common/navBar.php');
  //Recuperation des reservations
  $recupCSVReservations = array();
  //Ce tableau va contenir toutes les chambres du clients
  $tabChambresClient = array();
  //Ce tableau va contenir toutes les dates de reservation selon la chambre du client
  $tabDateReservationsChambresClient = array();
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
          array_push($tabDateReservationsChambresClient, explode(';', $row[0])[2] .';'. date("d/m/Y", strtotime(explode(';', $row[0])[3])).' au '. date("d/m/Y", strtotime(explode(';', $row[0])[4])));
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
                            //Création des modals
                            echo '
                            <div class="modal fade" id="modal'.$compteurChambre.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modifier vos dates</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="../../controller/modifierReservationController.php" method="POST">
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <label>Réserver du </label>
                                            <input type="date" min="'.date('Y-m-d').'" class="form-control" name="dateDu" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Réserver au </label>
                                            <input type="date" min="'.date('Y-m-d').'" class="form-control" name="dateAu" required>
                                        </div>    
                                        <input type="hidden" name="idChambre" value='.$compteurChambre.'>
                                    </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <input type="submit" class="btn btn-primary" style="border:none;" value="Modifier">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                            //Affiche les informations
                            echo '<div class="row pt-5">';
                                echo '<div class="col-md-6 p-3">';
                                    echo '<img class="img-other" src="assets/rooms/room_'.$compteurChambre.'.jpg" style="border-radius:0.25em">';
                                echo '</div>';
                                echo '<div class="col-md-6 p-3 shadow-lg" style="border-radius:0.35em">';
                                foreach($tabDateReservationsChambresClient as $key){
                                    if(explode(';', $key)[0] == $value){
                                        echo 'Date de réservation : '.explode(';', $key)[1];
                                    }
                                }
                                    echo '<br><i><br>Description de la chambre</i><p><br>Superficie : '.$row[1].'<br>Type de chambre : '.$row[0].'<br>Vue sur : '.$row[2].'<br>Options :';
                                    echo '<ul>';
                                        foreach(explode('|', $row[6]) as $valueZ){
                                        echo '<p>'.$valueZ.'</p>';
                                        }       
                                      echo '</ul>';
                                    echo '<br></p>
                                    <table border="0">
                                        <tr>
                                            <td>
                                                <a class="btn btn-primary text-right" href="../../controller/annulationReservationController.php?idChambre='.$value.'" style="border:none">Annuler</a>
                                            &nbsp;</td>
                                            <td>
                                             
                                            </td>
                                            <td>   
                                                <a class="btn btn-primary" style="border:none" data-toggle="modal" data-target="#modal'.$compteurChambre.'">Modifier la date</a>
                                            </td>
                                            <td>&nbsp;
                                                <a class="btn btn-primary text-right" style="border:none" target="_blank" href="../../controller/createPDFFacture.php?idChambre='.$compteurChambre.'">Télécharger Facture (PDF)</a>
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
