// Affichage des commentaires des appareillages dans le textarea
var checkboxesAppareillages = $('div#commandes_appareillages input[type=checkbox]');
var textareaCommentaire = $('#commandes_comment');

checkboxesAppareillages.on('click', function () {

    ($(this).prop('checked')) ? addCommentAppareillage($(this).val()) : removeCommentAppareillage($(this).val());

    textareaCommentaire.html('');

    $('.commentaireClass').each(function () {
        textareaCommentaire.append($(this).html() + "\n");
    });
});


function addCommentAppareillage(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauCommentaireAppareillages[commentId]);
}

function removeCommentAppareillage(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}