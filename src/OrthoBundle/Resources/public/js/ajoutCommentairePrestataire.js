var commentairePrestataire = $('#commandes_commentairePrestataire3D');
var commentaireLabo = $('#commandes_commentaireLabo');
commentairePrestataire.change( function () {
    commentaireLabo.val(commentaireLabo.val() + ' \n' + commentairePrestataire.val());
});