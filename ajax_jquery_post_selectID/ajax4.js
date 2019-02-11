$(document).ready(function(){//je selectionn emon document, et lui dit d'effectuer la fonction lorsqu'il est chargé
    $("#submit").click(function(event){//je selectionne le bouton qui porte l'action dans mon index.php, il s'agit dans ce cas de mon bouton ayant l'id submit, et je lui applique une fonction a executer lorsque l'evenement (ici le click) est fait 
        event.preventDefault();// je supprime le rechargement de la page au clic sur le bouton
        // alert('ok'); je teste si ma fonction est bien chargee avec une alerte
        ajax();//pour chaque clic j'effectue ma fonction ajax definie plus bas. Cette fonction n'est pas predefinie, je peux donc lui donner le nom que je veux
    });

    function ajax()//je recupere la valeur , "value" de mon <option>
    {
        var id=$("#personne").val();//je récupère dans mon sélecteur l'id de l'employé demandé
        console.log(id);

        var parameters="id="+id;//le $_post[id] de ma requête doit etre égal à l'id de sélecteur
        console.log(parameters);//id selectionné , correspond au $_post[id]

        $.post("ajax4.php", parameters, function(data){
            $("#resultat").html(data.resultat);/*je cible ma div id resultat dans laquelle j'accroche mes resultats. le resultat de ma requete retour se stocke ici. Le .resultat correspond au $tab['resulat'] que j'ai dans ajax4.php  . Data est un objet qui devient une propriete de mon tableau. Si j'avais inscrit $("#employes").html(data.resultat); 
            le resultat de retour de ma requete se serait affiché dans ma div <div id="employes" class="form-group">, également présente dans index.php*/

        }, 'json');// j'ai besoin d'encoder les donnees en format json pour pouvoir les recuperer
    }
});