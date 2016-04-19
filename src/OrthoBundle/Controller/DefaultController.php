<?php

namespace OrthoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrthoBundle:Default:index.html.twig');
    }

    public function formulaireAction()
    {
        return $this->render('OrthoBundle:Default:formulaire.html.twig');
    }
}
