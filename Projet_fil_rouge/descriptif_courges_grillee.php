<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil Rouge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
<?php
  require_once("header.php");
  ?>
    
    

      <div class="contenaire mt-5 mx-3">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-3">
                <img src="assets/media/img/category/Entrées/courges-grillees-ricotta.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-5 mx-3">
                <h2>Courges grillées ricotta </h2>
                <h4 class="py-3">9.00 €</h4>
                <label class="card-text text-end  " for="quantite"><h5>Quantité</h5></label>
              <input type="number" class="text-center" placeholder="1" name="quantite" id="quantite">
              <h5 class="my-3">Ingrédients </h5>
              <p>Courge poivrée, ricotta, coriande, citron, huile d'olive, sel et poivron du moulin.</p>
              <a href="#" class="btn btn-primary my-2">Ajouter au panier</a><br>
              <a href="plats_categorie_entree.html" class="btn btn-lg btn-primary my-5 " >Continuer les achats <command></a>
                <a href="#" class="btn btn-lg btn-success  ms-md-5 " >Passer la commande <command></a>
            </div>
        </div>
      </div>


    </div>
    <div class="container d-none  ">
        <div class="row text-center my-5 ">
            <div class="col-6">
                <button type="button" class="btn btn-primary btn-lg">Précédent</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary  btn-lg">Suivant</button>
            </div>

        </div>

    </div>

    <?php
  require_once("foter.php");
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>