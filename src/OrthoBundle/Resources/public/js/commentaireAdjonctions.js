var checkboxesAdjonctions = $('div#commandes_fidAdj input[type=checkbox]');

checkboxesAdjonctions.on('click', function () {

    ($(this).prop('checked')) ? addCommentAdjonction($(this).val()) : removeCommentAdjonction($(this).val());

    textareaCommentaire.html('');

    $('.commentaireClass').each(function () {
        textareaCommentaire.append($(this).html() + "\n");
    });
});


function addCommentAdjonction(commentId) {
    textareaCommentaire.val(textareaCommentaire + "\n" + tableauCommentaireAdjonction[commentId]);
}

function removeCommentAdjonction(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}