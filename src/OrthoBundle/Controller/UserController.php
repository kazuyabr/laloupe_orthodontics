<?php


namespace OrthoBundle\Controller;


use OrthoBundle\Form\Type\CabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function showAction()
    {
        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère le nombre total de cabinet présent
        $totalCabinet = $em->getRepository('OrthoBundle:Utilisateurs')->getTotalCabinet();
        
        return $this->render('OrthoBundle:Default:recup_user.html.twig', array(
            'totalCabinet' => $totalCabinet,
        ));


    }

}