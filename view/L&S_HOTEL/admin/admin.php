<?php 
//Appel de la navbar
include('common/header.php');
//Varialbe general
$chiffeAffaire = 0;
$chambreLibres = 0;
//Recuperation des chambres
$recupChambres = array();
//Importation des lignes
$handle = fopen("../../../input/ListeChambres_V3.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupChambres, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupChambres);

//Calcul du chiffre d'affaires
$recupReservation = array();
//Importation des lignes
$handle = fopen("../../../input/Reservation.csv", "r");
for ($i = 0;$row = fgetcsv($handle);$i++) {
    //Tant que j'ai une ligne, j'ajoute dans mon tableau
    array_push($recupReservation, $row);
}
//Je ferme le fichier
fclose($handle);
//Suppression du premier element
array_shift($recupReservation);

//recuperation du chiffre d'affaire
foreach($recupReservation as $row){
  $compteurChambres = 1;
  $recupIDReservation = explode(';', $row[0])[2];
  foreach($recupChambres as $value){
    if($compteurChambres == $recupIDReservation){
      if($compteurChambres == 2){
        $chiffeAffaire +=  explode(';', $value[1])[2];
      }else{
        $chiffeAffaire +=  explode(';', $value[0])[4];
      }
    }
    $compteurChambres++;
  }
}

//Calcul du nombres de chambres reserver
$chambreLibres = count($recupChambres) - count($recupReservation);

?>

<script>
//Ajout la classe active
$("#home").addClass("active");
</script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dernier rapport</h1>
            <form action="../../../controller/exportRapportController.php" method="POST">
              <input type="hidden" name="chambreLibres" value="<?php echo $chambreLibres;?>">
              <input type="hidden" name="chambreReserve" value="<?php echo count($recupReservation);?>">
              <input type="hidden" name="chiffreAffaire" value="<?php echo $chiffeAffaire;?>">
              <input type="hidden" name="tauxOccupation" value="<?php echo $res = count($recupReservation) +1 ; echo $res.'0';?>%">

              <input type="submit" value="Générer rapport CSV" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            </form>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- 1# card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombres de chambre libres</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $chambreLibres;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-door-open"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 2# card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombres de chambres reservés</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($recupReservation);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-door-closed"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- 3# card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Chiffre d'affaire</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $chiffeAffaire;?>€</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-euro-sign"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- card taux d'occupation -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Taux d'occupation</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $res = count($recupReservation) +1 ; echo $res.'0';?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo count($recupReservation).'0';?>%" aria-valuenow="<?php echo count($recupReservation).'0';?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-percentage"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Etat des chambres</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>                  
                    <tr>
                      <th>Etat</th>
                      <th>Type</th>
                      <th>Prix</th>
                      <th>Superficie</th>
                      <th>Vue</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $chambreReserver = array();
                      $toutesLesChambres = array();
                      foreach($listeChambres as $row){
                        foreach($recupReservation as $value){
                          if(explode(';', $value[0])[2] == $compteurImage){
                            echo '<tr>';
                            echo '<td>Réservé</td>';
                            echo '<td>'.$row[0].'</td>';
                            echo '<td>'.$row[4].' €</td>';
                            echo '<td>'.$row[1].'</td>';
                            echo '<td>'.$row[2].'</td>';
                            echo '</tr>';
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
                            echo '<td>Libre</td>';
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

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Répartitions des chambres</h6>                  
                  <div class="dropdown no-arrow">
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Reservéés
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Libres
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

             

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
//Inclu le footer
include('common/footer.php');
?>

<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'abel', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart 
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Reservées", "Libres"],
    datasets: [{
      data: [<?php echo count($chambreReserver);?>, <?php echo count($chambreLibres);?>],
      backgroundColor: ['#082d41', '#eebb4d'],
      hoverBackgroundColor: ['#0b5a85', '#ffae00'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>