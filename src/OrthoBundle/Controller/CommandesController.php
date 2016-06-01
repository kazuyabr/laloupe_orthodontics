<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 30/05/16
 * Time: 16:43
 */
namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Form\Type\CommandesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CommandesController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $totalCommande = $em->getRepository('OrthoBundle:Commandes')->getTotalCommandes();
        
        return $this->render('OrthoBundle:Default:recup_commandes.html.twig', array(
            'totalCommande' => $totalCommande
        ));
    }
    
}