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
            <th>Supprimer</th>
          </tr>
        </thead>

        <tbody>
            <?php 
                foreach($listeChambres as $row){
                    foreach($recupReservation as $value){
                      if(explode(';', $value[0])[2] == $compteurImage){
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
                        echo '<td>Du '.explode(';', $value[0])[3].' au '.explode(';', $value[0])[4].'</td>';
                        echo '<td><a href="../../../controller/annulationReservationEmployeController.php?idChambre='.$compteurImage.'">Annuler</a>';
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
<!-- End of Main Content -->

<?php 
//Appel de la navbar
include('common/footer.php');
?>