<?php 
 require_once('init.php');

$tab=array();


//------requete ajax 'aller'
  $resultat = $bdd->query("SELECT * FROM employes WHERE id_employes = '$_POST[id]'" );//je recupere ici le parametre envoyé par la requete ajax, avec '$_POST[id]'
 
$tab['resultat'] = '<table class="table table-bordered"><tr>';
for($i = 0; $i<$resultat->columnCount(); $i++){
  $colonne = $resultat->getColumnMeta($i);
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
echo json_encode($tab);//si je n'encode pas le resultat en json, les donnees ne pourront pas passer, je n'aurais aucun resultat
?>