<?php 
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX INSERTALL POST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="ajax5.js"></script>    
</head>
<body>
    <!-- exo: ameliorer l'exemple ajax2 en faisant en sorte d'inserer toutes  les valeurs dans toutes les colonnes de la table 'employes' (prenom, nom, sexe, service, date_embauche, salaire)-->
<div class="container">
<h1>INSERTION AJAX</h1>

<div id="rendu"></div>

<form method="post" action="" id="formulaire">
  <div class="form-group">
    <label for="prenom"> prenom</label>
    <input type="text" class="form-control" id="prenom"  name="prenom" placeholder="prenom">
  </div>
  <div class="form-group">
    <label for="nom">nom</label>
    <input type="text" class="form-control" id="nom" placeholder="nom" name="nom">
  </div>
  <div class="form-group">
    <label for="sexe">sexe</label>
    <select class="form-control" id="sexe" name="sexe">
      <option value="m">homme</option>
      <option value="f">femme</option>
    </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">service</label>
    <input type="text" class="form-control" id="service" placeholder="service" name="service">
  </div>
  <div class="form-group">
    <label for="date_embauche">date d'embauche</label>
    <input type="date" class="form-control" id="date_embauche" placeholder="date embauche" name="date_embauche">
  </div>
  <div class="form-group">
    <label for="salaire">salaire</label>
    <input type="text" class="form-control" id="salaire" placeholder="salaire" name="salaire">
  </div>
  <button type="submit" id="insertion" class="col-md-12 btn btn-primary">Insérer</button>
</form>

</div><!--fin container-->

</body>
</html>