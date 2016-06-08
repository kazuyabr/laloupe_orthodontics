<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommandesController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère le total du nombre de commandes qui a été passé
        $totalCommande = $em->getRepository('OrthoBundle:Commandes')->getTotalCommandes();

        return $this->render('OrthoBundle:Default:recup_commandes.html.twig', array(
            'totalCommande' => $totalCommande
        ));
    }
}