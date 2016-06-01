// On crée un Objet JS qui va contenir la liste de tout les appareils


// Console.log de tests, à supprimer.
console.log("Le gros Objet : Le tableau pas trié");
console.log(appareillages); /* Renvoie l'intégralité de l'objet */
console.log(Object.keys(appareillages).length); /* Renvoie sa longueur totale */

$('.family-button').click(function(){ // Si l'élément avec la class="family-button" est cliqué, faire :

    var familyClicked = $(this).data('family'); // On récupère la donnée inscrite dans "data-family" (Voir ligne ...)

    // Console-log de test, à supprimer.
    console.log("Deux trois tests par-ci par-là");
    console.log("J'suis clicked."); // Juste pour vérifier que c'est bien clicked.
    console.log("La famille de ce que tu as cliqué est : " +familyClicked); // Renvoie "mob"
    console.log("La famille du premier appareillage est : " + appareillages[1].family); // Navigation dans le JSON -> Renvoie 'fix'

    var app = []; // On déclare notre tableau trié (vide pour le moment)

    // Tant que i inférieur à la longueur de l'objet, faire :
    for (i = 1; i < Object.keys(appareillages).length; i++)
    {
        // Si la famille de l'objet, à l'index [i] vaut la valeur de familyClicked, faire :
        if (appareillages[i].family === familyClicked)
        {
            // On ajoute les données de cet appareillage dans le tableau trié.
            app.push(appareillages[i]);
        }
    }

    // Console log de test, à supprimer par la suite
    console.log(app); // Renvoie l'intégralité du tableau trié
    console.log(app[0].title); // Renvoie le titre de l'app à l'index 0.

    // Pour chaque itération de boucle du tableau trié, faire :
    for (var compteur = 0; compteur < app.length; compteur++)
    {
        // On ajoute dans l'élément qui a pour id="images-app" :
        $('#images-app').append('' +
            '<div class="col-xs-6">' +
                '<div class="blocAppareillage" data-id="' + app[compteur].id + '">' +
                    '<img src="' + app[compteur].img +'" title="Appareillages" alt="Appareillages" id="imageSchemaApp" name="commandes[appareillages]"/><br />' +
                    '<span class="nomAppareillageEnfant">' + app[compteur].title + '</span>' +
                '</div>' +
            '</div>'
        );
    }


    $('.blocAppareillage').on('click', function () {
        if ($('#modalbuttoncheck-'+$(this).attr('data-id')).length) {
            $('#modalbuttoncheck-'+$(this).attr('data-id')).remove();
        }
        else {
        $('#msform').prepend('<input type="checkbox" checked="checked" style="display:none;" name="commandes[appareillages][]" value="' + $(this).attr('data-id') + '" id="modalbuttoncheck-'+$(this).attr('data-id')+'" />')
        }
    });

});