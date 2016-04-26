<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Form\CommandesType;
use OrthoBundle\Form\LaboratoireType;
use OrthoBundle\Form\ListepatientsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

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
        $form->bind($request);

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($commandes);
            $em->flush();

            return $this->redirect($this->generateUrl('envoi_bdd'));
        }

        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'entity' => $commandes,
            'form'   => $form->createView()
        ));
    }


    public function envoiAction()
    {
        return $this->render('OrthoBundle:Default:envoiok.html.twig');
    }
}