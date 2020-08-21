<?php 
//Appel de la navbar
include('common/header.php');
$recupUser = array();
//Importation des lignes
$handle = fopen("../../../input/User.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupUser, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupUser);
?>
<script>
//Ajout la classe active
$("#reservations").addClass("active");
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chambres réservées</h1>
<p>Liste des chambres réservées</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Chambres réservées</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Type</th>
            <th>Prix</th>
            <th>Superificie</th>
            <th>Vue</th>
            <th>Client</th>
            <th>Date</th>
            <th>Libérer</th>
            <th>Modifier</th>

          </tr>
        </thead>

        <tbody>
            <?php 
                foreach($listeChambres as $row){
                    foreach($recupReservation as $value){
                      if(explode(';', $value[0])[2] == $compteurImage){
                        //Création des modals
                        echo '
                          <div class="modal fade" id="modalReserEdit'.$compteurImage.'" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Confirmer vos dates</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="../../../controller/modifierReservationEmployeController.php" method="POST">
                                <div class="modal-body">
                                  <div class="form-group">
                                      <label>Réserver du </label>
                                      <input type="date" class="form-control" name="dateDu" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Réserver au </label>
                                      <input type="date" class="form-control" name="dateAu" required>
                                  </div>    
                                  <input type="hidden" name="idChambre" value="'.$compteurImage.'">
                              </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                  <input type="submit" class="btn btn-primary" style="border:none;" value="Modifier">
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>';
                        //Ajout des reservations
                        echo '<tr>';
                        echo '<td>'.$row[0].'</td>';
                        echo '<td>'.$row[4].' €</td>';
                        echo '<td>'.$row[1].'</td>';
                        echo '<td>'.$row[2].'</td>';
                        foreach($recupUser as $key){
                            if(explode(';', $key[0])[0] == explode(';', $value[0])[1]){
                                echo '<td>'.explode(";", $key[0])[1].' '.explode(";", $key[0])[2].'</td>';
                            }
                        }
                        echo '<td>Du '.date("d/m/Y", strtotime(explode(';', $value[0])[3])).' au '.date("d/m/Y", strtotime(explode(';', $value[0])[4])).'</td>';
                        echo '<td><a href="../../../controller/annulationReservationEmployeController.php?idChambre='.$compteurImage.'">Annuler</a></td>';
                        echo '<td><a href="#" data-toggle="modal" data-target="#modalReserEdit'.$compteurImage.'">Modifier</a></td>';
                        echo '</tr>';
                      }
                    }      
                    
                    //Incremente le compteur a image
                    $compteurImage++;
                }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<?php 
//Appel de la navbar
include('common/footer.php');
?>