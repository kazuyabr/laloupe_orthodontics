// On crée un Objet JS qui va contenir la liste de tout les appareils
var textareaCommentaire = $('#commandes_commentaireLabo');

function addCommentAppareillageModal(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauAppareillages[commentId].commentaire);
}

function removeCommentAppareillageModal(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}

// Pour chaque itération de boucle du tableau trié, faire :
for (var compteur = 1; compteur < Object.keys(tableauAppareillages).length; compteur++)
{
    // On ajoute dans l'élément qui a pour id="images-app" :
    $('#images-app').append('' +
        '<div class="col-xs-6">' +
        '<div class="blocAppareillage" data-id="' + tableauAppareillages[compteur].id + '">' +
        '<img src="' + tableauAppareillages[compteur].img +'" title="Appareillages" alt="Appareillages" id="imageSchemaApp" name="commandes[appareillages]"/><br />' +
        '<span class="nomAppareillageEnfant">' + tableauAppareillages[compteur].title  + ' ' + tableauAppareillages[compteur].family + '</span>' +
        '</div>' +
        '</div>'
    );
}

$('.blocAppareillage').on('click', function () {
    var appareillageSelectionne = $('#modalbuttoncheck-'+$(this).attr('data-id'));

    console.log(appareillageSelectionne);
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
