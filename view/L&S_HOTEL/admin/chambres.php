<?php 
//Appel de la navbar
include('common/header.php');
?>

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
          </tr>
        </thead>

        <tbody>
            <?php 
                $chambreReserver = array();
                $toutesLesChambres = array();
                foreach($listeChambres as $row){
                  foreach($recupReservation as $value){
                    if(explode(';', $value[0])[2] == $compteurImage){
                      array_push($chambreReserver,$compteurImage);
                    }
                  }      
                  array_push($toutesLesChambres, $compteurImage);
                  //Incremente le compteur a image
                  $compteurImage++;
                }

                //Difference entre les chambres resever et libre
                $chambreLibres = array_diff($toutesLesChambres, $chambreReserver);
                $compteurImage = 1;

                foreach($listeChambres as $row){
                  foreach($chambreLibres as $value){
                    if($value == $compteurImage){
                      echo '<tr>';
                      echo '<td>'.$row[0].'</td>';
                      echo '<td>'.$row[4].' €</td>';
                      echo '<td>'.$row[1].'</td>';
                      echo '<td>'.$row[2].'</td>';
                      echo '</tr>';
                    }
                  }$compteurImage++;
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