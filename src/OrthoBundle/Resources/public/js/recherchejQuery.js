$("#search, #search2").keyup(function() // A chaque levée d'une touche du clavier sur l'id search, on fera :
{
    // Nouvelle regex qui comprend la valeur de l'input
    var myRegExp = new RegExp($(this).val(), 'i');

    $('.nomAppareillageEnfant').each(function(){ // Pour chaque élément qui a la classe citée, faire :

        // Si la vérification de la regex renvoie au minimum quelque chose, faire :
        if (($(this).html().match(myRegExp) || []).length != 0)
        {
            // On affiche le bloc correspondant avec un effet slide
            $(this).parent().parent().show('slide');
        }
        else // Sinon
        {
            // On masque le bloc correspondant avec un effet slideOut
            $(this).parent().parent().hide('slideOut');
        }
    });
});

