<?php 
//Appel de la navbar
include('common/header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Chambres libres</h1>
          <p>Entrer dans la barre de recherche les chambres que vous souhaitez voir. (Ex: libre, réservée, vue...)</p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tableau</h6>
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
                  </thead>

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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php 
//Appel de la navbar
include('common/footer.php');
?>
