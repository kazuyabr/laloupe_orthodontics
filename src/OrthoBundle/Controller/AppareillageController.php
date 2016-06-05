<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Appareillages;
use OrthoBundle\Form\Type\AppareillagesType;
use OrthoBundle\Form\Type\AjoutappType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AppareillageController extends Controller 
{
    /*
     * Creation Appareillages
     *
     */
    public function creationAppareillageAction()
    {
        $nouveauAppareillage = new Appareillages();
        $request = $this->getRequest();
        $form = $this->createForm(new AjoutappType(), $nouveauAppareillage);
        $form->handleRequest($request);
        //Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        if ($form->isValid() && $form->isSubmitted()) {
            $em->persist($nouveauAppareillage);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_crea_app', array(
                'id' => $nouveauAppareillage->getId()
            )));
        }

        return $this->render('OrthoBundle:Default:crea_app.html.twig', array(
            "form" => $form->createView()
        ));
    }

    /*
     * Recap appareillages
     *
     */
    public function recapAppareillageAction()
    {

        $idAppareillage = intval($_GET['id']);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();
        $recapAppareillage = $em->getRepository('OrthoBundle:Appareillages')->find($idAppareillage);
        return $this->render('OrthoBundle:Default:recap_crea_app.html.twig', array(
            "recapAppareillage" => $recapAppareillage,

        ));

    }

    public function showAppareillageAction($id)
    {
        // On récupère l'ID de la cabinet en question, passé dans l'URL
        // Lors de la redirection de la cabinet.
        $idAppareillage = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagefiche = $em->getRepository('OrthoBundle:Appareillages')->find($idAppareillage);

        // On affiche la vue de fiche_cabinet, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:fiche_app.html.twig', array(
            'affichagefiche' => $affichagefiche
        ));
    }

    /*
     * Edit.
     *
     */
    public function editAppareillageAction(Request $request, Appareillages $appareillages)
    {
        $deleteForm = $this->createDeleteForm($appareillages);
        $editForm = $this->createForm('OrthoBundle\Form\Type\AjoutappType', $appareillages);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appareillages);
            $em->flush();

            return $this->redirectToRoute('edit_app', array('id' => $appareillages->getId()));
        }

        return $this->render('test/edit.html.twig', array(
            'appareillages' => $appareillages,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Appareillages $appareillages)
    {
        $form = $this->createDeleteForm($appareillages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appareillages);
            $em->flush();
        }

        return $this->redirectToRoute('fiche_app');
    }
    
}