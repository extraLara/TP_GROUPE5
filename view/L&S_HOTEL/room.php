<?php
  //Inclu la navbar
  include('Common/navBar.php');
  $chambreReser = array();

  //Récupération des chambres reservers 
  foreach($recupReservation as $row){
    array_push($chambreReser, explode(';', $row[0])[2]);
  } 
?>
<body>


  <!-- bouton filtrer centrer
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
 </div>-->


  <!-- Rooms -->

  <div class="section">
    <div class="form-row text-center">
      <div class="row row-cols-1 row-cols-md-4">
      <?php 

        $compteurImage = 1;
          foreach($listeChambres as $row){
              echo '<div class="col mb-4">';
              echo '  <div class="card">';
              echo '    <img src="assets/rooms/room_'.$compteurImage.'.jpg" class="card-img-top" alt="...">';
              echo '    <div class="card-body">';
              echo '        <div class="col-12"><h5 class="card-title">'.$row[0].'</h5>';
              echo '          <p class="card-text">'.$row[1].'<br>'.$row[2].'<br>'.$row[3].'<br>';
              foreach($chambreReser as $value){
                if($compteurImage == $value[0]){
                  $compteurChambreDispoRestant = $row[5] - 1;
                  echo '<script>
                  $( document ).ready(function() {
                    $("#dispo'.$compteurImage.'").html("'.$compteurChambreDispoRestant.' Disponible(s)");
                  });
                  </script>';
                }
              }
              echo '          <div id="dispo'.$compteurImage.'" class="badge badge-success">'.$row[5].' Disponible(s)</div> '; //badge chambre dispo
              echo '          <a href="chamber.php?id='.$compteurImage.'" class="btn btn-primary" style="border:none"> <i class="fa fa-key"></i> Reserver</a> ';
              echo '        </div>';
              echo '    </div>';
              echo '  </div>';
              echo '</div>';
            $compteurImage++;
          }
        ?>
      </div>
    </div>
  </div>

<!-- Pagination -->
<!-- <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Précedent</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item"><a class="page-link" href="#">7</a></li>
      <li class="page-item"><a class="page-link" href="#">8</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Suivant</a>
      </li>
    </ul>
  </nav> -->



  
  <?php
  //Inclu le footer
  include('Common/footer.php');
?>
