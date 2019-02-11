<?php 
require_once('init.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax post filtre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="ajax6.js"></script>    
</head>
<body>

<div class="container">

<h1 class="display-4 text-center">AJAX POST FILTRE</h1>
<!--Realiser un filtre sur la table employes, en affichant: 
sexe
service
date_embauche
salaire -->
<?php 
$resultat=$bdd->query("SELECT DISTINCT  service FROM employes");
?>
<div id="rendu"></div>
<form method="post" action="" id="formulaire">
  <label for="sexe">sexe</label>
  <select id="sexe" name="sexe">
    <option value="m">homme</option>
    <option value="f">femme</option>
  </select>

  <br><br>

  <label for="service">service</label>
  <select id="service" name="service">
  <?php while($employes = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>
    <option value="<?=$employes['service']?>"><?=$employes['service']?></option>
  <?php  }?>
  </select>
<br><br>

   <label for="date_embauche">Date d'embauche</label>
   
  <input type="date" id="date_embauche1" name="date_embauche">
  <span>et</span>
  <input type="date" id="date_embauche2" name="date_embauche">
  
  <br><br>
  
  <label for="salaire">salaire</label>
  <input type="number" id="salaire1" name="salaire1">
  <span>et</span>
  <input type="number" id="salaire2" name="salaire2">
  
  <br><br>

  <input type="submit" id="submit" value="Rechercher">
</form>


</div><!--fin container-->
    
</body>
</html>