<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 30/05/16
 * Time: 16:43
 */
namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Laboratoire;
use OrthoBundle\Form\Type\LaboratoireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class LaboratoireController extends Controller
{
    public function createAction()
    {
        // On crée une instance de l'entité Laboratoire
        $laboratoire  = new Laboratoire();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "LaboratoireType.php" ainsi que l'instance de l'entité Laboratoire
        $form    = $this->createForm(new LaboratoireType(), $laboratoire);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        // On hydrate notre formulaire
        $form->handleRequest($request);

        if ($form->isValid()) {

            $laboratoire->activationDuCompte();
            $laboratoire->attributionDuRole();
            $em->persist($laboratoire);
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_labo', array('id' => $laboratoire->getId())));
        }

        // On affiche la page formulaire, qui prend en paramètre
        // Notre instance de l'entité Laboratoire, ainsi que l'affichage du formulaire
        return $this->render('OrthoBundle:Default:crea_labo.html.twig', array(
            'form'   => $form->createView()
        ));

    }

    public function showAction($id)
    {
        // On récupère l'ID du Laboratoire en question, passé dans l'URL
        // Lors de la redirection du Laboratoire.
        $idLaboratoire = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagefiche = $em->getRepository('OrthoBundle:Laboratoire')->find($idLaboratoire);

        // On affiche la vue de fiche_laboratoire, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:fiche_labo.html.twig', array(
            'affichagefiche' => $affichagefiche
        ));
    }

    public function editLaboAction(Request $request, Laboratoire $laboratoire)
    {
        $deleteForm = $this->createDeleteForm($laboratoire);
        $editForm = $this->createForm('Crud\Bundle\Form\TestType', $laboratoire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($laboratoire);
            $em->flush();

            return $this->redirectToRoute('fiche_labo', array('id' => $laboratoire->getId()));
        }

        return $this->render('@Ortho/Default/fiche_labo.html.twig', array(
            'Labo' => $laboratoire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function deleteLaboAction(Request $request, Laboratoire $laboratoire)
    {
        $form = $this->createDeleteForm($laboratoire);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($laboratoire);
            $em->flush();
        }
    
        return $this->redirectToRoute('sup_labo');
        }
    

}