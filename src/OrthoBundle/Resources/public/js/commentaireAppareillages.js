checkboxesAppareillages.on('click', function () {

    ($(this).prop('checked')) ? addCommentAppareillage($(this).val()) : removeCommentAppareillage($(this).val());

    textareaCommentaire.html('');

    $('.commentaireClass').each(function () {
        textareaCommentaire.append($(this).html() + "\n");
    });
});


function addCommentAppareillage(commentId) {
    $('#commandes_comment').val($('#commandes_comment').val() + "\n" + tableauCommentaireAppareillages[commentId]);
}

function removeCommentAppareillage(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}