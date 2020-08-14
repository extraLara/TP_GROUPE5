<?php 
//Appel de la navbar
include('common/header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dernier rapport</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generer rapport CSV</a>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">6500€</div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">60%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <tr>
                      <td>Libre</td>
                      <td>Suite</td>                      
                      <td>400€</td>
                      <td>150m2</td>
                      <td>Ocean</td>

                    </tr>
                    <tr>                      
                      <td>Reservée</td>
                      <td>Double deluxe</td>
                      <td>250€</td>
                      <td>63m2</td>
                      <td>Green</td>
                    </tr>
                    <tr>
                      <td>Libre</td>
                      <td>Suite</td>
                      <td>360€</td>
                      <td>89m2</td>
                      <td>Foret</td>
                    </tr>
                    <tr>
                      <td>Libre</td>
                      <td>Junior</td>
                      <td>420€</td>
                      <td>64m2</td>
                      <td>Ocean</td>
                    </tr>
                    <tr>
                      <td>Reservée</td>
                      <td>Simple</td>
                      <td>390€</td>
                      <td>30m2</td>
                      <td>Foret</td>
                    </tr>

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
                      <i class="fas fa-circle text-primary"></i> Libres
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Reservéés
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