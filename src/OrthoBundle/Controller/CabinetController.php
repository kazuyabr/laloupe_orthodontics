<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 30/05/16
 * Time: 16:43
 */
namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Cabinetsdentaires;
use OrthoBundle\Entity\Laboratoire;
use OrthoBundle\Form\Type\CabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CabinetController extends Controller
{
    public function createAction()
    {
        // On crée une instance de l'entité Commandes
        $cabinet  = new Cabinetsdentaires();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "CommandesType.php" ainsi que l'instance de l'entité Commandes
        $form    = $this->createForm(new CabinetType(), $cabinet);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        // On hydrate notre formulaire
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cabinet);
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_cabinet', array('id' => $cabinet->getId())));
        }

        // On affiche la page formulaire, qui prend en paramètre
        // Notre instance de l'entité Commandes, ainsi que l'affichage du formulaire
        return $this->render('OrthoBundle:Default:crea_cabinet.html.twig', array(
            'form'   => $form->createView()
        ));

    }

    public function showAction($id)
    {
        // On récupère l'ID de la commande en question, passé dans l'URL
        // Lors de la redirection de la commande.
        $idCabinet = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagefiche = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find($idCabinet);

        // On affiche la vue de recap_formulaire, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:fiche_cabinet.html.twig', array(
            'affichagefiche' => $affichagefiche
        ));
    }

}