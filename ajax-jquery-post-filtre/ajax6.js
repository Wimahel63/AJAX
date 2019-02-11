$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        // alert('hello');
        ajax();
    });

function ajax(){
//je recupere ici les valeurs definies dans mon formulaire, et je les stocke dans des variables
  var sexe=$("#sexe").val();
  console.log(sexe);
  var service=$("#service").val();
  console.log(service);
  var date_embauche1=$("#date_embauche1").val();
  console.log(date_embauche1);
  var date_embauche2=$("#date_embauche2").val();
  console.log(date_embauche2);
  var salaire1=$("#salaire1").val();
  console.log(salaire1);
  var salaire2=$("#salaire2").val();
  console.log(salaire2);

//pour faire plus simple et eviter de reecrire toutes mes variables, je les stocke dans une variable parameters:
  var parameters="sexe="+sexe+ "&service="+service+ "&date_embauche1="+date_embauche1+ "&date_embauche2="+date_embauche2+ "&salaire1="+salaire1+ "&salaire2="+salaire2;

  console.log(parameters);

  $.post("ajax6.php", parameters, function(data){
    $("#rendu").html(data.resultat);
  },'json');


  // $("#formulaire").trigger('reset');
}

});