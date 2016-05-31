<?php

namespace OrthoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 


class RecapFormulaireController extends Controller
{
    public function showRecapFormulaireAction($id)
    {
        // On récupère l'ID de la commande en question, passé dans l'URL
        // Lors de la redirection de la commande.
        $idCommande = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagerecap = $em->getRepository('OrthoBundle:Commandes')->find($idCommande);

        // On affiche la vue de recap_formulaire, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig', array(
            'affichagerecap' => $affichagerecap
        ));
    }
}