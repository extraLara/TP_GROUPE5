<?php
  //Inclu la navbar
  include('Common/navBar.php');
  if($_GET['id'] == 2){
    $infoChambre = explode(';', $recupCSV[$_GET['id']-1][0].$recupCSV[$_GET['id']-1][1]);
  }else{
    $infoChambre = explode(';', $recupCSV[$_GET['id']-1][0]);
  }
?>
<body>
    <div class="py-5 text-center" style="background-color: white !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><img class="img-fluid d-block mx-auto w-25" src="assets/brand/logo.png"></div>
            </div>
            <div class="col-md-12">
            <h3 style="color:#082D41"><?php echo $infoChambre[0];?></h3>
            </div>
        </div>
    </div>
            
    
    <div class="py-3" style="background-color: white !important">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-3"> 
                    <img class="img-other" src="assets/rooms/room_7.jpg" style="border-radius:0.25">
                </div>
                <div class="col-md-6 p-3 shadow-lg" style="border-radius:5px">
                        <i>Description de la chambre</i><p><br><b>Superficie :</b> <?php echo $infoChambre[1];?><br><b> Type de chambre :</b>  <?php echo $infoChambre[0];?><br><b> Vue sur :</b>  <?php echo $infoChambre[2];?><br>
                        <b>  Options :</b>  <br>
                        
                            <?php
                                foreach(explode('|', $infoChambre[6]) as $row){
                                    echo $row.'<br>';
                                } 
                            ?>
                        </p>
                        <h6 align="right"><b> Prix : </b> <?php echo $infoChambre[4];?> €</h6>
                        <table border="0" align="right">
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" style="border:none;" data-toggle="modal" data-target="#exampleModal">Réserver</button>                                
                                </td>
                            </tr>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmer vos dates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../../controller/paiementController.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label>Réserver du </label>
            <input type="date" class="form-control" name="dateDu" required>
        </div>
        <div class="form-group">
            <label>Réserver au </label>
            <input type="date" class="form-control" name="dateAu" required>
        </div>    
        <input type="hidden" name="idChambre" value='<?php echo $_GET['id'];?>'>
        <input type="hidden" name="prixChambre" value='<?php echo $infoChambre[4];?>'>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <input type="submit" class="btn btn-primary" style="border:none;" value="Procéder au paiement">
      </div>
      </form>
    </div>
  </div>
</div>

<?php
  //Inclu le footer
  include('Common/footer.php');
?>
