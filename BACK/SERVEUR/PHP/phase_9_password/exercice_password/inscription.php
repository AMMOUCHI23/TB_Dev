<?php
session_start();
$user=[];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$login=$_POST["email"];
$pass=$_POST["pass"];
$password_hash = password_hash($pass, PASSWORD_DEFAULT);
array_push($user,$nom,$prenom,$login,$password_hash);
$connecter=$_POST["connecter"];

if(isset($connecter)){
  if($login=="toto@hotmail.com" && $pass=="afpa"){
      $_SESSION["auth"]="ok";
      header("Location:script.php");
  }else{
    session_destroy();
  }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Formulaire d'authentification </title>
</head>
<body>
    <form action="" method="post" >
      <div class="row g-3" >
      <div class="col-md-3 mx-3 mt-5">
    <label for="inputNom4" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="inputNom" placeholder="Entrer votre nom">
  </div>
  <div class="col-md-3 mx-3 mt-5">
    <label for="inputPrenom4" class="form-label">Prénom</label>
    <input type="email" class="form-control" name="prenom" id="inputPrenom" placeholder="Entrer votre prénom">
  </div>

      </div>
      <div class="row g-3" >
    <div class="col-md-3 mx-3 mt-5">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4">
  </div>
  <div class="col-md-3 mx-3 mt-5">
    <label for="inputPassword4" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="pass" id="inputPassword4">
  </div>
  
  <div class="col-12 mx-3">
    <button type="submit" class="btn btn-primary" name="connecter" value="">se connecter</button>
  </div>
  </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
</body>
</html>