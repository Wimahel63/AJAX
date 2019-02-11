$(document).ready(function(){
    $("#insertion").click(function(event){
        event.preventDefault();
     ajax();
    });
//je supprime le comportement par defaut du bouton et lui empeche de recharger la page a chaque clic

function ajax(){
     var prenom= $("#prenom").val();
     var nom=$("#nom").val();
     var sexe=$("#sexe").val();
     var service=$("#service").val();
     var date_embauche=$("#date_embauche").val();
     var salaire=$("#salaire").val();

   

    var parameters="prenom="+prenom +"&nom="+nom +"&sexe="+sexe +"&service="+service +"&date_embauche="+date_embauche + "&salaire="+salaire;//pour concatener, je rajoute & devant mes parametres.Tous ces indices vont se stocker directement dans la requete
    console.log(parameters);

    $.post("ajax5.php", parameters, function(data){
         $("#rendu").html(data.resultat);
    },'json');

    $('#formulaire').trigger("reset");//reboot le formulaire apres une insertion

  }
});

