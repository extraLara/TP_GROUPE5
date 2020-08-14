<?php
  //Inclu la navbar
  include('Common/navBar.php');
  
  //Récupération de toutes les chambres
  $chambre1 = explode(';', $recupCSV[0][0]);
  array_push($listeChambres, $chambre1);

  $chambre2 = explode(';', $recupCSV[1][0].$recupCSV[1][1]);
  array_push($listeChambres, $chambre2);

  $chambre3 = explode(';', $recupCSV[2][0]);
  array_push($listeChambres, $chambre3);

  $chambre4 = explode(';', $recupCSV[3][0]);
  array_push($listeChambres, $chambre4);

  $chambre5 = explode(';', $recupCSV[4][0]);
  array_push($listeChambres, $chambre5);

  $chambre6 = explode(';', $recupCSV[5][0]);
  array_push($listeChambres, $chambre6);

  $chambre7 = explode(';', $recupCSV[6][0]);
  array_push($listeChambres, $chambre7);

  $chambre8 = explode(';', $recupCSV[7][0]);
  array_push($listeChambres, $chambre8);

  $compteurImage = 1;
?>
<body>
          <!-- Caroussel -->
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousephoto" data-slide-to="0" class="active"></li>
              <li data-target="#carousephoto" data-slide-to="1"></li>
              <li data-target="#carousephoto" data-slide-to="2"></li>
              <li data-target="#carousephoto" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/caroussel/room_1.jpg" class="d-block w-100" alt="Image ">
                  <div class="carousel-caption">
                    <img src="assets/brand/logo.png" alt="" class="img-fluid">
                    <h3>Bienvenue !</h3>
                    <p>Hotel et SPA 4 étoiles </p>
                  </div>         
              </div>
              <div class="carousel-item">
                <img src="assets/caroussel/room_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <img src="assets/brand/logo.png" alt="" class="img-fluid">
                  <h5><?php echo $chambre1[0];?></h5>
                  <p>Tarif : <?php echo $chambre1[4];?>€</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/caroussel/room_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <img src="assets/brand/logo.png" alt="" class="img-fluid">
                  <h5><?php echo $chambre2[0];?></h5>
                  <p>Tarif : <?php echo $chambre2[4];?>€</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/caroussel/room_4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <img src="assets/brand/logo.png" alt="" class="img-fluid">
                  <h5><?php echo $chambre3[0];?></h5>
                  <p>Tarif : <?php echo $chambre3[4];?>€</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Precedent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Suivant</span>
            </a>
          </div>
        
 
  


<!-- breadcrumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="file:///C:/Users/Utilisateur/Desktop/L&S_HOTEL/index.html#">Accueil</a></li>
      <li class="breadcrumb-item"><a href="file:///C:/Users/Utilisateur/Desktop/L&S_HOTEL/room.html">Nos chambres</a></li>
      <li class="breadcrumb-item"><a href="#">Nos options</a></li>
      
    </ol>
  </nav>

  <!-- bouton filtrer centrer-->
  <br>
  <br>
  <div class="form-row text-center">
    <div class="col-12">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="radio" name="options" id="option1" checked> Filtrer par 
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option2"> Type
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option3"> Vue
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option4"> Prix
        </label>
        <label class="btn btn-secondary">
          <input type="radio" name="options" id="option5"> Options
        </label>
      </div>
    </div>
 </div>


  <!-- Rooms -->

  <div class="section">
    <div class="form-row text-center">
      <div class="row row-cols-1 row-cols-md-4">
        <?php 
          foreach($listeChambres as $row){
            echo '<div class="col mb-4">';
            echo '  <div class="card">';
            echo '    <img src="assets/rooms/room_'.$compteurImage.'.jpg" class="card-img-top" alt="...">';
            echo '    <div class="card-body">';
            echo '        <div class="col-12"><h5 class="card-title"><?php echo $chambre1[0];?></h5>';
            echo '          <p class="card-text">'.$row[0].'<br>'.$row[1].'<br>'.$row[2].'<br>'.$row[3].'<br>';
           // echo '            Options :';
            //echo '            <ul>';
                                /*foreach(explode('|', $row[6]) as $value){
                                  echo '<p>'.$value.'</p>';
                                }       */ 
          //  echo '            </ul>';
            echo '           <a href="chamber.php?id='.$compteurImage.'" class="btn btn-primary" style="border:none">Reserver</a>';
            echo '        </div>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
            //Incremente le compteur a image
            $compteurImage++;
          }
        ?>
      </div>
    </div>
  </div>
</body>
<?php
  //Inclu le footer
  include('Common/footer.php');
?>