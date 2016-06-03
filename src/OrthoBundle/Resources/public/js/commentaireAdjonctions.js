// Affichage des commentaires des adjonctions dans le textarea
var checkboxesAdjonctions = $('div#commandes_fidAdj input[type=checkbox]');
var textareaCommentaire = $('#commandes_comment');

checkboxesAdjonctions.on('click', function () {

    ($(this).prop('checked')) ? addCommentAdjonction($(this).val()) : removeCommentAdjonction($(this).val());

    textareaCommentaire.html('');
});


function addCommentAdjonction(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauCommentaireAdjonction[commentId]);
}

function removeCommentAdjonction(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}