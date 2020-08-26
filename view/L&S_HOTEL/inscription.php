<?php
  //Inclu la navbar
  include('Common/navBar.php');
?>
<body>
<div class="py-5 text-center" style="background-image: url(../image/background.jpg);	background-size: cover;	background-position: top left;	background-repeat: repeat;">
  <div class="container">
    <div class="row">
      <div class="mx-auto col-md-6 col-10 bg-white p-5" style="border-radius:5px; box-shadow:1px 5px 1px">
        <h1 class="mb-4">S'inscrire&nbsp;</h1>
          <a href="inscription_client.php" class="btn btn-primary" style="border:none;">Vous êtes un client ?</a>
          <br><br>
          <a href="inscription_employe.php" class="btn btn-primary" style="border:none;">Vous êtes un employé ?</a>
      </div>
    </div>
  </div>
</div>
</body>


<?php
  //Inclu le footer
  include('Common/footer.php');
?>