<?php
require_once('init.php');

$tab=array();

// requete 'aller', je veux recuperer tous les employés definis par ma requete ci-dessous 
    $resultat=$bdd->query("SELECT *  FROM employes WHERE sexe='$_POST[sexe]' AND service='$_POST[service]' AND (date_embauche BETWEEN '$_POST[date_embauche1]' AND '$_POST[date_embauche2]') AND (salaire BETWEEN '$_POST[salaire1]' AND '$_POST[salaire2]') ");


//-----requete retour  

if($resultat->rowCount()<=0){
    $tab['resultat'] ='<div class="col-md-6 offset-md-3 alert alert-danger">aucune correspondance trouvée</div>';
}
else{
    $tab['resultat'] = '<table class="table table-bordered"><tr>';
for($i = 0; $i<$resultat->columnCount(); $i++){//je recupere les colonnes qui correspondent a ma demande pour afficher les entetes
  $colonne = $resultat->getColumnMeta($i);
  $tab['resultat'] .="<th>$colonne[name]</th>";
}
$tab['resultat'] .='</tr>';

while($employes= $resultat->fetch(PDO::FETCH_ASSOC)){
  $tab['resultat'] .='<tr>';
  foreach($employes as $value){
    $tab['resultat'] .="<td>$value</td>";//bien penser à mettre des "" sinon le résultat ne s'affichera pas, il renverra $value et non la valeur elle-même
  }
  $tab['resultat'] .='</tr>';
}
$tab['resultat'] .='</table>';

}


echo json_encode($tab);

?>