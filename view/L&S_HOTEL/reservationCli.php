<?php
  //Inclu la navbar
  include('Common/navBar.php');
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
            <div class="row">
                <div class="col-md-6 p-3"> 
                <img class="img-fluid d-block" src="assets/rooms/room_7.jpg" width="1500" style="border-radius:15px">
                </div>
                <div class="col-md-6 p-3 shadow-lg" style="border-radius:15px">
                <i>Description de la chambre</i><p><br>Superficie :<br>Type de chambre :<br>Vue sur :<br>Options :<br></p>
                    <table border="0">
                        <tr>
                            <td>
                            <a class="btn btn-primary text-right" style="border:none" href="#">Annuler</a>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                            <a class="btn btn-primary text-right" style="border:none" href="#">Télécharger Facture (PDF)</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
  //Inclu le footer
  include('Common/footer.php');
?>