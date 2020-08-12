<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap & style CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <!-- Font Awesome -->    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    
    <!-- Titre -->
    <title>L&S HOTEL et SPA ****</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/brand/logo.png" />

</head>

<body>

    <!-- NavBar image -->   
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a>
      <img src="assets/brand/logo.png" width="150" height="85" alt="" loading="lazy">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="file:///C:/Users/Utilisateur/Desktop/L&S_HOTEL/index.html">Accueil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="file:///C:/Users/Utilisateur/Desktop/L&S_HOTEL/contact.html">Contact</a>
        </li>
      </ul>
      <span class="navbar-text">
        <button type="submit" class="btn btn-primary">Reserver</button>
      </span>
    </div>
  </nav>







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
                                <div class="input-group"> <input type="text" name="Name" placeholder=""> <label>Nom et Prénom</label> </div>
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
                                        <div class="input-group"> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">


                        <!-- Button modal -->

                        <div class="col-md-12"> 
                            <input type="button" value="Payer" class="btn btn-pay " data-toggle="modal" data-target="#exampleModal">
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
                            <h5 class="modal-title" id="exampleModalLabel">Paiement accepté</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Votre paiement d'un montant de .....€ a été effectué !
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Mon espace</button><!-- mettre le lien vers espace personnel ! -->
                            </div>
                        </div>
                        </div>
                    </div>







<footer class="footer-area footer--light">
    <div class="footer-big">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="footer-widget">
              <div class="widget-about">
                <img src="assets/brand/logo.png" alt="" class="img-fluid">
                <p>Hotel Spa 4 étoiles.
                  Chambres et suites de luxe avec vue sur mer, forets et green.
                </p>
              </div>
            </div>          
          </div>        
          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu footer-menu--1">
                <h4 class="footer-widget-title">FAQ</h4><hr>
                <!-- list-unstyled / enleve les puces menu  -->
                <ul class="list-unstyled">
                  <li>
                    <a href="#">Votre Réservation</a>
                  </li>
                  <li>
                    <a href="#">Accès Hotel</a>
                    <!-- map responsive -->
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.4420085190527!2d3.1564099158347467!3d50.693181677725896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328e2f9dd32f5%3A0x3b33b05842792807!2sAFPA!5e0!3m2!1sfr!2sfr!4v1596910572041!5m2!1sfr!2sfr" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
  
          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu">
                <h4 class="footer-widget-title">NOS SERVICES</h4><hr>
                <ul class="list-unstyled">
                  <li>
                    <a href="#">Conciergerie</a>
                  </li>
                  <li>
                    <a href="#">Restaurants & Bar</a>
                  </li>
                  <li>
                    <a href="#">Service d'etage</a>
                  </li>
                  <li>
                    <a href="#">Espace Bien-etre</a>
                  </li>
                  <li>
                    <a href="#">Parking</a>
                  </li>
                </ul>
              </div>          
            </div>          
          </div>
          
  
          <div class="col-md-3 col-sm-4">
            <div class="footer-widget">
              <div class="footer-menu no-padding">
                <h4 class="footer-widget-title">A PROPOS</h4><hr>
                <ul class="list-unstyled">
                  <li>
                    <a href="#">A propos</a>
                  </li>
                  <li>
                    <a href="#">Conditions generales</a>
                  </li>
                  <li>
                    <a href="#">Conditions de reservation</a>
                  </li>
                  <li>
                    <a href="#">Politique de remboursement</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>              
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- bouton go top -->
    <div class="go_top">
      <a href="#"> <i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></a>
    </div>
  
    <div class="mini-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <a href="#"><i id="social-fb" class="fa fa-facebook-official fa-1x"></i></a>
              <a href="#"><i id="social-tw" class="fa fa-twitter"></i></a>
              <a href="#"><i id="social-gp" class="fa fa-google"></i></a>
              <a href="#"><i id="social-em" class="fa fa-envelope"></i></a>
              <hr>
              <p>L&S HOTEL et SPA © 2020 All rights reserved.</p>
              <p>Created with <a href="#"><i id="social-he" class="fa fa-heart"></i></a> by <a href="#">Lara & Samira</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="min.js"></script>
    </body>
  </html>