<?php
  //Inclu la navbar
  include('Common/navBar.php');
?>
<body>
  <div class="py-5 text-center" style="background-image: url(&quot;../image/background.jpg&quot;); background-size: cover; background-position: left top; background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5" style="border-radius:5px; box-shadow:1px 5px 1px">
          <h1 class="mb-4">Me connecter&nbsp;</h1>
          <h5 class="text-left">Nom d'utilisateur</h5>
          <form>
            <div class="form-group"> <input type="email" class="form-control" placeholder="Entrez votre identifiant" id="form9"> </div>
            <h5 class="text-left">Mot de passe</h5>
            <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Mot de passe" id="form10"> 
            <small class="form-text text-muted text-right">
                <a href="#" style="color:#eebb4d"> Mot de pass oublié?</a>
              </small> </div> 
              <button type="submit" style="border:none;" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
 </body>

 <?php
  //Inclu le footer
  include('Common/footer.php');
?>