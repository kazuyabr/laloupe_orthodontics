$(function() {
    $('#commandes_dateretour').datepicker({
        dateFormat: 'dd-mm-yyyy'
    })
});

// Ajout d'une class sur le label des appareillages pour afficher un bouton
// Masquage des coches des checkbox
$("div#commandes_appareillages > label").addClass("btn btn-default");
$("div#commandes_appareillages > input").hide();

$("div#commandes_fidAdj > label").addClass("btn btn-default");
$("div#commandes_fidAdj > input").hide();
