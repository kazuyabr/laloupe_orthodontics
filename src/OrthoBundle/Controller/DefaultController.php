<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Form\CommandesType;
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
        $form = $this->createForm(new CommandesType());
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form'=>$form->createView()));
    }
}