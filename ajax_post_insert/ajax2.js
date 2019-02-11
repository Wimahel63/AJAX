$(document).ready(function(){//lorsque le doc est chargé completement, alors execute le code du dessous
  $("#action").click(function(event){
     event.preventDefault();//annule le comportement de base de rechargement du bouton
    //  alert('test ok!');
    ajax();
  });

  //pour chaque clic je declenche une fonction ajax:
  function ajax(){
      var personne= $("#personne").val();//le .val recupere la valeur saisie dans le champ input dans index.php, valeur que l'on a designé dans les <option value="">
      
      console.log(personne);
      var parameters="personne="+personne;// ce "personne=" correspond au [personne] de $_POST[personne] definit dans le fichier ajax2.php : $result = $bdd->exec("INSERT INTO employes (prenom) VALUES ('$_POST[personne]')"); Je dis donc à js ce que je veux insérer et dans quel champ de ma table je veux l'insérer. Cela permet de définir les paramètres envoyés avec la requête http ajax aller. Cela précise que l'indice $_POST[personne] de ajax2.php sera égal à la valeur que l'on a saisie dans le champ . C'est ce paramètre que l'on transmet au fichier php via la requête ajax
     

      $.post("ajax2.php", parameters, function(data){
          $("#resultat").html(data.resultat);//on sélectionne la div id resultat dans laquelle on accroche la réponse de la requête 'retour' AJAX .  data.resultat --> 'resultat' correspond au tableau ARRAY définie dans le fichier PHP



      },'json');//1er paramètre "ajax2.php": je définis dans quel fichier j'envoie mes param, 
      //2e param : parameters: je définis mes donnees que j'envoie dans mon fichier, 
      //3e param : function(data): si tout s'est bien passé, je stocke mes données dans data. $.post() est une méthode jquery permettant d'envoyer des requêtes AJAX via la method="post".
      /*1-- URL de destination
      2-- paramètres à transmettre a la requête ajax
      3-- en cas de succès, la réponse de la requête retour sera stockée dans 'data'
      4-- type de données, ici, encodage en json pour véhiculer les données*/

  }
});