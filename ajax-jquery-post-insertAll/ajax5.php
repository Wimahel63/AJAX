<?php 
require_once('init.php');

$tab=array();


//----requete aller ajax
$resultat=$bdd->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('$_POST[prenom]','$_POST[nom]', '$_POST[sexe]','$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]' )");
//  $resultat=$bdd->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Magali','Piszcy', 'f','commercial', '2015-02-10', 2000 )");  requete de test, pour voir si php fonctionne bien

//---requete retour, avec affichage de mes donnees "en direct", c-a-d dès que j'insere et enregistre des nouvelles donnees,sous forme de tableau
$resultat=$bdd->query("SELECT * FROM employes ORDER BY salaire DESC");//je recupere mes donnees de ma bdd

$tab['resultat'] = '<table class="table table-bordered"><tr>';
for($i = 0; $i<$resultat->columnCount(); $i++){
  $colonne = $resultat->getColumnMeta($i);
//   echo '<pre>'; print_r($colonne); echo '</pre>';
  $tab['resultat'] .="<th>$colonne[name]</th>";
}
$tab['resultat'] .='</tr>';

while($employe= $resultat->fetch(PDO::FETCH_ASSOC)){
  $tab['resultat'] .='<tr>';
  foreach($employe as $value){
    $tab['resultat'] .="<td>$value</td>";//bien penser à mettre des "" sinon le résultat ne s'affichera pas, il renverra $value et non la valeur elle-même
  }
  $tab['resultat'] .='</tr>';
}
$tab['resultat'] .='</table>';


 echo json_encode($tab);

?>

