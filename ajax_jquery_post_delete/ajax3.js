$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();// je supprime le rechargement de la page au clic sur le bouton
        // alert('ok'); je teste si ma fonction est bien chargee avec une alerte
        ajax();//pour chaque clic j'effectue ma fonction ajax definie plus bas
    });

    function ajax()//je recupere la valeur , "value" de mon <option>
    {
        var id=$("#personne").val(); //le .val recupere ce qu'il y a dans l'attribut value de l'option
        console.log(id);

        var parameters="id="+id;
        console.log(parameters);

        $.post("ajax3.php", parameters, function(data){
            $("#employes").html(data.resultat);//je cible ma div id employes dans laquelle j'accroche mes resultats

        }, 'json');
    }
});