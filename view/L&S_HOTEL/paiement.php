<?php
  //Inclu la navbar
  include('Common/navBar.php');
  if($_GET['id'] == 2){
    $infoChambre = explode(';', $recupCSV[$_GET['id']-1][0].$recupCSV[$_GET['id']-1][1]);
  }else{
    $infoChambre = explode(';', $recupCSV[$_GET['id']-1][0]);
  }
?>


 <!-- Css loader-->
<style>
    .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  padding-left:180px
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #eebb4d;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>


<body>
    <!-- Credit Card Payment Form - START -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8">
                <div class="card p-3">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="heading text-center">Paiement</h2>
                        </div>
                    </div>
                    <form class="form-card">
                        <div class="row justify-content-center mb-4 radio-group">
                            <div class="col-sm-3 col-5">
                                <div class='radio selected mx-auto' data-value="dk"> <img class="fit-image" src="assets/paiement/visa.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="visa"> <img class="fit-image" src="assets/paiement/mastercard.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="master"> <img class="fit-image" src="assets/paiement/cb.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="paypal"> <img class="fit-image" src="assets/paiement/paypal.jpg" width="105px" height="55px"> </div>
                            </div> <br>
                        </div>
                        <div class="row justify-content-center form-group">

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" id="NP" name="Name" placeholder=""> <label>Nom et Prénom</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" id="cr_no" name="card-no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19"> <label>Numero de carte</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group"> <input type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5"> <label>Date d'expiration</label> </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group"> <input type="password" id="cvv" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">


                        <!-- Button modal -->

                            <div class="col-md-12"> 
                              <input type="button" id="validate" value="Payer" class="btn btn-pay ">
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Paiement en cours...</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body text-align">
                                <div class="lds-spinner" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

                                <p id="infoModal">
                                Votre paiement d'un montant de <?php echo $infoChambre[4];?> € a été effectué !
                                </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" id="closeBtn" data-dismiss="modal">Fermer</button>
                              <form action="../../controller/ecriturePaiementController.php" method="POST">
                                <input type="hidden" name="nomPrenom" value="" id="nomPrenomPost">
                                <input type="hidden" name="numeroCard" value="" id="numeroCardPost">
                                <input type="hidden" name="dateExp" value="" id="dateExpPost">
                                <input type="hidden" name="3chiffres" value="" id="3chiffresPost">
                                <input type="hidden" name="prixChambre" value="<?php echo $infoChambre[4];?>">
                                <input type="hidden" name="numChambre" value="<?php echo $_GET['id'];?>">
                                <input type="hidden" name="nomChambre" value="<?php echo $infoChambre[0];?>">

                                <input type="submit" class="btn btn-primary" id="espaceBtn" value="Mon espace">
                              </form>
                            </div>
                        </div>
                        </div>
                    </div>






</body>
<script>
$(document).ready(function(){

    $("#infoModal").hide();
    $("#closeBtn").hide();
    $("#espaceBtn").hide();

    $("#validate" ).click(function() {
        //Récupération
        var recupNP = $("#NP").val();
        var recupCrNo = $("#cr_no").val();
        var recupExp = $("#exp").val();
        var recupCVV = $("#cvv").val();
        if(recupNP == "" && recupCrNo == "" && recupExp == "" && recupCVV == ""){
            $("#exampleModalLabel").text("Non valide");
            $("#infoModal").text("Erreur");
            $("#espaceBtn").hide();
            alert("Les champs ne sont pas valides.");
        }else{
            $("#exampleModalLabel").text("Paiement en cours...");
            $("#infoModal").text("Votre paiement d'un montant de "+<?php echo $infoChambre[4];?>+" € a été effectué !");
            $("#espaceBtn").hide();
            $('#exampleModal').modal('show');
            setTimeout(function() { 
                $("#infoModal").show();
                $("#closeBtn").show();
                $("#espaceBtn").show();
                $("#loader").hide();
                $("#exampleModalLabel").text("Paiement accepté...");
            }, 5000);
            $("#nomPrenomPost").val(recupNP);
            $("#numeroCardPost").val(recupCrNo);
            $("#dateExpPost").val(recupExp);
            $("#3chiffresPost").val(recupCVV);
        }
    });
});
</script>

<?php
  //Inclu le footer
  include('Common/footer.php');
?>
