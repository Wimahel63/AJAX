<?php 
require_once('init.php');

$tab=array();


//---------requete 'ALLER' AJAX-----
$result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$_POST[id]'" );


// code test : j'essaye d'effacer un employé pour voir si ma requete fonctionne: $result = $bdd->exec("DELETE FROM employes WHERE id_employes = 1001" ); 
//on teste la requete php, si il y a des erreurs dans le fichier php, les requetes AJAX ne passeront pas !!! TOUJOURS CONTROLER LES FICHIERS PHP en ouvrant le fichier dans l'url. Il est normal d'avoir un message d'erreur de type Notice: Undefined index: id in C:\xampp\htdocs\ajax\ajax_jquery_post_delete\ajax3.php on line 8, car on n'a pas de selection pour notre action (la definition de la var se fait au clic, donc au moment de l'action)



//---------requete 'RETOUR' AJAX
$result= $bdd->query("SELECT * FROM employes");

$tab['resultat'] ='<div class="form-group">';
$tab['resultat'] .='<label for="personne">Liste des employés</label>';
$tab['resultat'] .= '<select class="form-control" id="personne" name="personne">';
while($employes = $result->fetch(PDO::FETCH_ASSOC))
{
    $tab['resultat'] .="<option value='$employes[id_employes]'>$employes[nom]</option>";
}
$tab['resultat'].='</select>';
$tab['resultat'].='</div>';

echo json_encode($tab);

//avec ce code, les champs de la table sont effacés "en direct", en instantané, c-a-d que dès que je clique sur l'input, le nom de la personne se supprime directement, sans avoir besoin de recharger la page

?>