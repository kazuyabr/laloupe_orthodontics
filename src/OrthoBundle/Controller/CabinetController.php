<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Utilisateurs;
use OrthoBundle\Form\Type\CabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CabinetController extends Controller
{
    public function createAction()
    {

        // On crée une instance de l'entité cabinet
        $cabinet  = new Utilisateurs();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "cabinetType.php" ainsi que l'instance de l'entité cabinet

        $form    = $this->createForm(new CabinetType(), $cabinet);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        // On hydrate notre formulaire
        $form->handleRequest($request);

        if ($form->isValid()) {

            $cabinet->activationDuCompte();
            $cabinet->attributionDuRole();
            $em->persist($cabinet);
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_cabinet', array('id' => $cabinet->getId())));
        }

        // On affiche la page formulaire, qui prend en paramètre
        // Notre instance de l'entité cabinet, ainsi que l'affichage du formulaire
        return $this->render('OrthoBundle:Default:crea_cabinet.html.twig', array(
            'form'   => $form->createView()
        ));

    }

    public function showAction($id)
    {
        // On récupère l'ID de la cabinet en question, passé dans l'URL
        // Lors de la redirection de la cabinet.
        $idCabinet = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagefiche = $em->getRepository('OrthoBundle:Utilisateurs')->find($idCabinet);

        // On affiche la vue de fiche_cabinet, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:fiche_cabinet.html.twig', array(
            'affichagefiche' => $affichagefiche
        ));
    }

}