<?php 
//Appel de la navbar
include('common/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Contact</h1>
<p>Liste des contacts</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Telephone</th>
            <th>Message</th>
            <th>Supprimer</th>
          </tr>
        </thead>

        <tbody>
            <?php 
                foreach($recupContact as $row){
                    $value = explode(';', $row[0]);
                    echo '<tr>';
                    echo '<td>'.$value[1].'</td>';
                    echo '<td>'.$value[2].'</td>';
                    echo '<td>'.$value[3].'</td>';
                    echo '<td>'.$value[4].'</td>';
                    echo '<td>'.$value[5].'</td>';
                    echo '<td><a href="../../../controller/deleteContactController.php?id='.$value[0].'">Supprimer</a>';
                    echo '</tr>';
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