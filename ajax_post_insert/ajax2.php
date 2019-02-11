<!--ce fichier fait tampon entre la requete demande et la requete retour--> 
<?php   
require_once('init.php');

$tab = array();//je cree un tableau vide pour stocker mes donnees futures

$result = $bdd->exec("INSERT INTO employes (prenom) VALUES ('$_POST[personne]')");
//$result = $bdd->exec("INSERT INTO employes (prenom) VALUES ('Magali')");
//en ajax je peux envoyer une donnee directement d'ici

if(!empty($_POST['personne'])){
    $tab['resultat']= '<div class="col-md-6 offset-md-3 alert alert-success"> L\'employé'.$_POST['personne']. 'a bien été enregistré!</div>';
}
else 
{
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-danger"> Merci de renseigner le champ!!</div>';
}

echo json_encode($tab);//j'encode les donnees de mon tableau en json pour pouvoir les recuperer sur mon fichier index.php. C'est la reponse de la requete ajax, sans ce format de donnees on ne pourrait pas  vehiculer des donnees en http
?>
