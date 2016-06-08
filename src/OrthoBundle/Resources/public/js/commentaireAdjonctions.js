// Affichage des commentaires des adjonctions dans le textarea
var checkboxesAdjonctions = $('div#commandes_adjonctions input[type=checkbox]');
var textareaCommentaire = $('#commandes_commentaireLabo');

checkboxesAdjonctions.on('click', function () {
    console.log($(this).val());
    ($(this).prop('checked')) ? addCommentAdjonction($(this).val()) : removeCommentAdjonction($(this).val());

    textareaCommentaire.html('');
});

function addCommentAdjonction(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauCommentaireAdjonction[commentId].commentaire);
}

function removeCommentAdjonction(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}