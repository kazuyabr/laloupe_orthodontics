




$(function() {
    $('#commandes_dateretour').datepicker({
        dateFormat: 'dd-mm-yyyy'
    })
});

//ajouter class='' à input appareillage
//$("div#commandes_appareillages").addClass("btn-group");
$("div#commandes_appareillages > label").addClass("btn btn-default");
$("div#commandes_appareillages > input").hide();
