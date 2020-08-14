<?php
  //Inclu la navbar
  include('Common/navBar.php');
?>
<body>



<!-- contact-->
  <div class="container contact-form">
        <div class="contact-image">
            <section id="contact">
                <div class="container">
                <br>
                    <h3 class="text-center text-uppercase">CONTACT</h3><hr>
                    <p class="text-center w-75 m-auto">Pour tout renseignements veuillez utiliser le formulaire de contact  ou nous joindre par les differents moyens disponible (voir ci-dessous).
                    <br>Si vous souhaitez modifier ou annuler votre réservation, vous pouvez le faire via votre espace personnel. </p>   
                    <br>
                    <br>
                    <form method="post" action="../../controller/contactController.php">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control" placeholder="Entrez votre nom *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="Entrez votre Email *" value="" required />
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtPhone" class="form-control" placeholder="Entrez votre numéro de téléphone *" value="" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="txtMsg" class="form-control" placeholder="Votre message *" style="width: 100%; height: 150px;" required></textarea>
                            </div>
                        </div>
                        <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                      </div>
                    </form>
                    <br>
                    <!-- caroussel contact-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/contact/contact_1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="assets/contact/contact_3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Precedent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>

                <!-- icone contact-->
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                           <div class="card-body text-center">
                             <i class="fa fa-phone fa-2x mb-3" aria-hidden="true"></i>
                             <h5 class="text-uppercase mb-5">TELEPHONE</h5>
                             <a href="tel:0612345678"style="color:#082D41; text-decoration:none">06.12.34.56.78</a>
                           </div>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                           <div class="card-body text-center">
                             <i class="fa fa-map-marker fa-2x mb-3" aria-hidden="true"></i>
                             <h5 class="text-uppercase mb-5">ADRESSE</h5>
                                <a href="https://www.google.com/maps/place/AFPA/@50.6931783,3.1585986,15z/data=!4m2!3m1!1s0x0:0x3b33b05842792807?sa=X&ved=2ahUKEwjVzevn0pPrAhVWD2MBHS0GB6wQ_BIwEnoECBEQCA" style="color:#082D41; text-decoration:none"> L&S Hotel et Spa **** 20 Rue du Luxembourg, 59100 Roubaix</a>
                           </div>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                           <div class="card-body text-center">
                             <i class="fa Example of whatsapp fa-whatsapp fa-2x mb-3" aria-hidden="true"></i>
                             <h5 class="text-uppercase mb-5">Messagerie</h5>
                             <address>LSHOTEL </address>
                           </div>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                           <div class="card-body text-center">
                             <i class="fa fa-globe fa-2x mb-3" aria-hidden="true"></i>
                             <h5 class="text-uppercase mb-5">Mail</h5>
                             <a href="mailto:lshotel@hotmail.com" style="color:#082D41; text-decoration:none">lshotel@hotmail.com</a>
                           </div>
                         </div>
                      </div>
                    </div>
                    </div>
                </div>

             </section>
    </div>
        
<?php
  //Inclu le footer
  include('Common/footer.php');
?>