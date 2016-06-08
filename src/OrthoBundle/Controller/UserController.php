<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 30/05/16
 * Time: 16:43
 */
namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Form\Type\CabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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