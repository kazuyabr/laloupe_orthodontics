<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Form\CommandesType;
use OrthoBundle\Form\UploadsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrthoBundle:Default:index.html.twig');
    }

    public function formulaireAction()
    {
        $form = $this->createForm(new CommandesType());
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form'=>$form->createView()));
    }

    public function createAction()
    {

        $commandes  = new Commandes();
        $request = $this->getRequest();
        $form    = $this->createForm(new CommandesType(), $commandes);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($commandes);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_formulaire', array(
                'idCommande' => $commandes->getIdCommande()
            )));
        }

        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'entity' => $commandes,
            'form'   => $form->createView()
        ));
    }

    public function formulaireRecapAction()
    {
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig');
    }


    public function showAction()
    {
        $idCommande = intval($_GET['idCommande']);

        $em = $this->getDoctrine()->getManager();
        $affichagerecap = $em->getRepository('OrthoBundle:Commandes')->find($idCommande);

        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig', array(
            'affichagerecap' => $affichagerecap
        ));
    }

}