function addCommentAdjonctionModal(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauCommentaireAdjonction[commentId].commentaire);
}

function removeCommentAdjonctionModal(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}
console.log(tableauCommentaireAdjonction);

// Pour chaque itération de boucle du tableau trié, faire :
for (var compteur = 1; compteur < Object.keys(tableauCommentaireAdjonction).length; compteur++)
{
    $('#images-adjonctions').append('' +
        '<div class="col-xs-6">' +
            '<div class="blocAdjonction" data-id="' + tableauCommentaireAdjonction[compteur].id + '">' +
                '<img src="' + tableauCommentaireAdjonction[compteur].img +'" title="Adjonctions" alt="Adjonctions" id="imageSchemaAdj" name="commandes[adjonctions]"/><br />' +
                '<span class="nomAppareillageEnfant">' + tableauCommentaireAdjonction[compteur].title + '</span>' +
            '</div>' +
        '</div>'
    );
}

$('.blocAdjonction').on('click', function () {
    if ($('#modalbuttoncheck-'+$(this).attr('data-id')).length) {
        $(this).removeClass('selected');
        $('#modalbuttoncheck-'+$(this).attr('data-id')).remove();
        removeCommentAdjonctionModal($(this).attr('data-id'));
    }
    else {
        $(this).addClass('selected');
        $('#msform').prepend('<input type="checkbox" checked="checked" style="display: none;" name="commandes[adjonctions][]" value="' + $(this).attr('data-id') + '" id="modalbuttoncheck-'+$(this).attr('data-id')+'" />');
        addCommentAdjonctionModal($(this).attr('data-id'));
    }
});