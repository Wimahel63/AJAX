<?php   
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX JQUERY POST SELECTID</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="ajax4.js"></script>    
</head>
<body>
    <div class="container">
        <h1>AJAX POST SELECTID</h1>

<!--1 : connexion a la bdd dans init.php
2 : realiser le selecteur en php de tous les employes dans index.php
3 : dans le fichier ajax4.php realiser la requete php
4: realiser le traitement permettant d'afficher les donnees d'un employé dans le fichier ajax4.php
5 : encoder en json
6 : realiser le traitement js permettant d'envoyer les requetes ajax dans le fichier ajax4.js-->

<?php
$resultat=$bdd->query("SELECT * FROM employes");
?>
<form method="post" action="">
    <div id="employes" class="form-group">
      <div class="form-group">
       <label for="personne">Liste des employés</label>
       <select class="form-control" id="personne" name="personne">
        <?php while($employes = $resultat->fetch(PDO::FETCH_ASSOC)):  ?>
        <?php echo '<pre>'; print_r($employes); echo '</pre>';  ?>
          <option value="<?= $employes['id_employes']?>"><?= $employes['prenom'] ?></option>
        <?php endwhile; ?>
        </select>
       </div>
       
    </div>
    <input type="submit" id="submit" value="afficher" class="col-md-6 btn btn-dark mt-2">
</form>

<div id="resultat"></div>
</div><!--fin container-->
</body>
</html>