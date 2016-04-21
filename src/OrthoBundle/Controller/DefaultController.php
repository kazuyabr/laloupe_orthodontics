<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Form\LaboratoireType;
use OrthoBundle\Form\ListepatientsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrthoBundle:Default:index.html.twig');
    }

    public function formulaireAction()
    {
        $form = $this->createForm(new LaboratoireType());
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form'=>$form->createView()));
    }

    public function formulairePatientAction()
    {
        $form = $this->createForm(new ListepatientsType());
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form'=>$form->createView()));
    }
    
}