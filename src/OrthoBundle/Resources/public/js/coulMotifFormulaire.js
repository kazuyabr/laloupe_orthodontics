// Affichage des images pour Couleurs et Motifs
var monSelectCouleur = $('#commandes_fidCouleur');
monSelectCouleur.on('change', function () {
    $('#remplissageCadreCouleur').attr('src', 'bundles/ortho/img/couleurs/') + monSelectCouleur.val() + ".png"
});

var monSelectMotif = $('#commandes_fidMotif');
monSelectMotif.on('change', function () {
    $('#remplissageCadreMotif').attr('src', 'bundles/ortho/img/motifs/') + monSelectMotif.val() + ".png"
});
