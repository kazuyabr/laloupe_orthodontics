<?php

namespace photosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('photosBundle:uploads:index.html.twig');
    }
}
