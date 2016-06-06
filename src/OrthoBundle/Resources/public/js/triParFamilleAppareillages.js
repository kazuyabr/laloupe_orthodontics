// On crée un Objet JS qui va contenir la liste de tout les appareils
var textareaCommentaire = $('#commandes_comment');

function addCommentAppareillageModal(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauCommentaireAppareillages[commentId]);
}

function removeCommentAppareillageModal(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}

$('.family-button').click(function(){ // Si l'élément avec la class="family-button" est cliqué, faire :

    var familyClicked = $(this).data('family'); // On récupère la donnée inscrite dans "data-family" (Voir ligne ...)
    var app = []; // On déclare notre tableau trié (vide pour le moment)

    // Tant que i inférieur à la longueur de l'objet, faire :
    for (i = 1; i < Object.keys(appareillages).length; i++)
    {
        // Si la famille de l'objet, à l'index [i] vaut la valeur de familyClicked, faire :
        if (appareillages[i].family === familyClicked)
        {
            // On ajoute les données de cet appareillage dans le tableau trié.
            app.push(appareillages[i]);
        }
    }

    // Pour chaque itération de boucle du tableau trié, faire :
    for (var compteur = 0; compteur < app.length; compteur++)
    {
        // On ajoute dans l'élément qui a pour id="images-app" :
        $('#images-app').append('' +
            '<div class="col-xs-6">' +
                '<div class="blocAppareillage" data-id="' + app[compteur].id + '">' +
                    '<img src="' + app[compteur].img +'" title="Appareillages" alt="Appareillages" id="imageSchemaApp" name="commandes[appareillages]"/><br />' +
                    '<span class="nomAppareillageEnfant">' + app[compteur].title + '</span>' +
                '</div>' +
            '</div>'
        );
    }

    $('.blocAppareillage').on('click', function () {
        if ($('#modalbuttoncheck-'+$(this).attr('data-id')).length) {
            $(this).removeClass('selected');
            $('#modalbuttoncheck-'+$(this).attr('data-id')).remove();
            removeCommentAppareillageModal($(this).attr('data-id'));
        }
        else {
            $(this).addClass('selected');
            $('#msform').prepend('<input type="checkbox" checked="checked"  name="commandes[appareillages][]" value="' + $(this).attr('data-id') + '" id="modalbuttoncheck-'+$(this).attr('data-id')+'" />');
            addCommentAppareillageModal($(this).attr('data-id'));
        }
    });
});



