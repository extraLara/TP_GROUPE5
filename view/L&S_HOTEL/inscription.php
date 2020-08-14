<?php
  //Inclu la navbar
  include('Common/navBar.php');
?>
<body>
<div class="py-5 text-center" style="	background-image: url(../image/background.jpg);	background-size: cover;	background-position: top left;	background-repeat: repeat;">
  <div class="container">
    <div class="row">
      <div class="mx-auto col-md-6 col-10 bg-white p-5" style="border-radius:5px; box-shadow:1px 5px 1px">
        <h1 class="mb-4" style="">S'inscrire&nbsp;</h1>
        <form action="../../controller/inscriptionController.php" method="POST">
          <div class="form-group"> 
            <h5 class="text-left">Nom</h5>
            <input type="text" class="form-control" placeholder="Entrez votre nom" name="nom"> 
          </div>

          <div class="form-group">
            <h5 class="text-left">&nbsp;Prénom</h5>
            <input type="text" class="form-control" placeholder="Entrez votre prénom" name="prenom">
          </div>

          <div class="form-group">
            <h5 class="text-left">Date de naissance</h5>
            <input type="date" class="form-control" placeholder="01/01/1900" name="dateNaissance">
          </div>

          <div class="form-group">
            <h5 class="text-left">Adresse</h5>
            <input type="text" class="form-control" placeholder="exemple: rue de la victoire" name="adresse">
          </div>

          <div class="form-group" style="">
            <h5 class="text-left">Ville</h5>
            <input type="text" class="form-control" placeholder="exemple:  Lille" name="ville">
          </div>

          <div class="form-group">
            <h5 class="text-left">Code Postal</h5>
            <input type="number" class="form-control" placeholder="exemple: 59000" name="codePostal">
          </div>

          <div class="form-group">
            <h5 class="text-left">Téléphone Portable</h5>
            <input type="tel" class="form-control" placeholder="exemple: 06..." name="telPortable">
          </div>

          <div class="form-group">
            <h5 class="text-left">Adresse mail</h5>
            <input type="email" class="form-control" placeholder="ex: votreadresse@contact.fr" name="adresseMail">
          </div>

          <div class="form-group">
             <!-- Ajout d'un pattern pour obligé l'utilisateur a rentrée un log comportant 10chiffres -->
            <h5 class="text-left">Login</h5>
            <input type="text" class="form-control" placeholder="Merci d'entrer un login de 10 chiffres" maxlength="10" size="10" name="login">
          </div>

          <h5 class="text-left">Choisir un mot de passe</h5>
          <p class="text-left" contenteditable="true" style="font-size:12px">(Mot de passe de 8 caractères, au moins une Majuscule, une minuscule, un chiffre et un caractère spécial)</p>

          <div class="form-group mb-3"> 
            <input type="password" class="form-control" placeholder="Mot de passe" name="pass1">
          </div>
                
          <div class="form-group">
            <h5 class="text-left">Confirmez votre mot de passe</h5>
            <input type="password" class="form-control" placeholder="Confirmez le mot de passe" name="pass2">
          </div> 

          <button type="submit" style="border:none" class="btn btn-primary">Valider</button>
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