<?php
//Appel de la navbar
include('common/header.php');
//Récupération des utilisateurs
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

$chambreReser = array();

//Récupération des chambres reservers 
foreach($recupReservation as $row){
  array_push($chambreReser, explode(';', $row[0])[2]);
} 

?>
<script>
//Ajout la classe active
$("#chambres").addClass("active");
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chambres libres</h1>
<p>Liste des chambres libres</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Chambres Libres</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Type</th>
            <th>Prix</th>
            <th>Superficie</th>
            <th>Vue</th>
            <th>Nombre chambre libre</th>
            <th>Réserver une chambre</th>
          </tr>
        </thead>

        <tbody>
            <?php
              $compteurChambre = 1;
              foreach($listeChambres as $row){
                $compteurChambreDispoRestant = $row[5];
                echo '
                  <div class="modal fade" id="modal'.$compteurImage.'" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Confirmer vos dates</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="../../../controller/ajouterChambresLibreController.php" method="POST">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Selectionner le client</label>
                            <select name="client" class="form-control">
                              ';
                                foreach($recupUser as $value){
                                  echo '<option value="'.explode(";", $value[0])[0].'">'.explode(";", $value[0])[1].' '.explode(";", $value[0])[2].'</option>';
                                }
                              echo '
                            </select>
                          </div>
                          <div class="form-group">
                              <label>Réserver du </label>
                              <input type="date" min="'.date('Y-m-d').'" class="form-control" name="dateDu" required>
                          </div>
                          <div class="form-group">
                              <label>Réserver au </label>
                              <input type="date" min="'.date("Y-m-d").'" class="form-control" name="dateAu" required>
                          </div>    
                          <input type="hidden" name="idChambre" value='.$compteurImage.'>
                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                          <input type="submit" class="btn btn-primary" style="border:none;" value="Ajouter la reservation">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>';
                foreach($chambreReser as $value){
                  if($compteurImage == $value[0]){
                    $compteurChambreDispoRestant--;
                    echo '<script>
                      $( document ).ready(function() {
                        let recupCompteur = '.$compteurChambreDispoRestant.';

                        if(recupCompteur == 0){
                          $("#dispo'.$compteurImage.'").html("Indisponible");
                          $("#dispo'.$compteurImage.'").prop("disabled", true);
                        }
                      });
                      </script>';
                  }
                }
                echo '<tr>';
                  echo '<td>'.$row[0].'</td>';
                  echo '<td>'.$row[4].' €</td>';
                  echo '<td>'.$row[1].'</td>';
                  echo '<td>'.$row[2].'</td>';
                  echo '<td>'.$compteurChambreDispoRestant.'</td>';
                  echo '<td><button id="dispo'.$compteurImage.'" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal'.$compteurImage.'">Réserver</button></td>';
                echo '</tr>';
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
  <!-- End of Main Content -->
 
  
  <?php
  //Appel de la navbar
  include('common/footer.php');
  ?>
