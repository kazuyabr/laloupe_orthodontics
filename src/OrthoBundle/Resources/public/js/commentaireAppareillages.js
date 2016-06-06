// Affichage des commentaires des appareillages dans le textarea
var checkboxesAppareillages = $('div#commandes_appareillages input[type=checkbox]');
var textareaCommentaire = $('#commandes_commentaireLabo');

checkboxesAppareillages.on('click', function (){
    ($(this).prop('checked')) ? addCommentAppareillage($(this).val()) : removeCommentAppareillage($(this).val());
    textareaCommentaire.html('');
});

function addCommentAppareillage(commentId) {
    textareaCommentaire.val(textareaCommentaire.val() + "\n" + tableauAppareillages[commentId].commentaire);
}

function removeCommentAppareillage(commentId) {
    $('#commentaireEnfant' + commentId).remove();
}