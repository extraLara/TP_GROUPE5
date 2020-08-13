<?php
  //Inclu la navbar
  include('Common/navBar.php');
?>
<body>


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
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="col-12"><h5 class="card-title">Chambre Triple Luxe</h5>
                  <p class="card-text">Chambre pour trois personnes avec lits séparés.
                   La chambre comprend trois lits simples avec des matelas à ressorts. La chambre dispose également d'un bureau, d'une télévision à écran plat et d'une salle de bains privative.</p><hr>
                    <button type="submit" class="btn btn-primary">Reserver</button>
                </div>
            </div>          
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre Triple</h5>
                <p class="card-text">Chambre pour trois personnes.
                  La chambre comprend un lit simple et un lit pour deux personnes. La chambre dispose également d'un bureau, d'une télévision à écran plat et d'une salle de bains privative.</p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre Twin</h5>
                <p class="card-text">Idéal pour une visite à deux ou pour les voyageurs d'affaires. Profitez de l'atmosphère de cette chambre confortable. Les éléments de conception surprenants apportent une touche moderne. </p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre Triple</h5>
                <p class="card-text">La chambre pour trois personnes de l'hôtel L&S est agréable et spacieuse.  La chambre comprend trois lits simples et dispose également d'un bureau, d'une télévision à écran plat et d'une salle de bains privative. </p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card" >
            <img src="assets/rooms/room_5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre Triple</h5>
                <p class="card-text">Idéal pour les couples , découvrez le charme de cette chambre. La chambre comprend un lit double avec matelas à ressorts, un bureau, une télévision à écran plat et une salle de bains privative. </p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre Triple</h5>
                <p class="card-text">Chambre pour trois personnes. La chambre comprend un lit simple et un lit pour deux personnes. La chambre dispose également d'un bureau, d'une télévision à écran plat et d'une salle de bains privative.</p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Chambre double Deluxe</h5>
                <p class="card-text">Idéal pour les couples , découvrez le charme de cette chambre. La chambre comprend un lit double avec matelas à ressorts, un bureau, une télévision à écran plat et une salle de bains privative.</p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/rooms/room_8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="col-12"><h5 class="card-title">Suite Junior</h5>
                <p class="card-text">Suite de luxe avec literie premium, lit et baignoire face à la vue, petit salon attenant à la chambre. La chambre dispose d'un service d'étages exclusif et d'une conciergerie ouverte 7j/7 24h/24.</p><hr>
                <button type="submit" class="btn btn-primary">Reserver</button></div>
            </div>
          </div>
        </div>
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