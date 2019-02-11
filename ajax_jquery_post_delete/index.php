<?php   
require_once('init.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX DELETE JQUERY</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="ajax3.js"></script>    
</head>
<body>
    <div class="container">
    <h1 class="display-4 text-center">AJAX DELETE JQUERY</h1>
<!--exo : realiser une liste deroulante permettant d'afficher tous les noms des employes--> 
<?php  
$resultat= $bdd->query("SELECT * FROM employes");
?>

<form method="post" action="">
    <div id="employes" class="form-group">
      <div class="form-group">
       <label for="personne">Liste des employés</label>
       <select class="form-control" id="personne" name="personne">
        <?php while($employes = $resultat->fetch(PDO::FETCH_ASSOC)):  ?>
        <?php //echo '<pre>'; print_r($employes); echo '</pre>';  ?>
          <option value="<?= $employes['id_employes']?>"><?= $employes['nom'] ?></option>
        <?php endwhile; ?>
        </select>
       </div>
       
    </div>
    <input type="submit" id="submit" value="supprimer" class="col-md-6 btn btn-dark mt-2">
</form>



</div><!--fin container-->
</body>
</html>