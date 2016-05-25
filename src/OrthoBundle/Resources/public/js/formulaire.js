
var monSelectCouleur = $('#commandes_fidCouleur');
monSelectCouleur.on('change', function () {
    $('#remplissageCadreCouleur').attr('src', "{{ asset('bundles/ortho/img/couleurs/') }}" + monSelectCouleur.val() + ".png");
});



var monSelectMotif = $('#commandes_fidMotif');
monSelectMotif.on('change', function () {
    $('#remplissageCadreMotif').attr('src', "{{ asset('bundles/ortho/img/motifs/') }}" + monSelectMotif.val() + ".png");
})



$(function() {
    $('#commandes_dateretour').datepicker({
        dateFormat: 'dd-mm-yyyy'
    })
});

//ajouter class='' à input appareillage
//$("div#commandes_appareillages").addClass("btn-group");
$("div#commandes_appareillages > label").addClass("btn btn-default");
$("div#commandes_appareillages > input").hide();
