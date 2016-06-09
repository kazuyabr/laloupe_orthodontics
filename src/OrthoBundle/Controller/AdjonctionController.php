<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Adjonctions;
use OrthoBundle\Form\Type\AjoutAdjType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdjonctionController extends Controller
{


    /**
     * Lists all Test entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adjonctions = $em->getRepository('OrthoBundle:Adjonctions')->findAll();

        return $this->render('OrthoBundle:Adjonction:liste_adj.html.twig', array(
            'adjonctions' => $adjonctions,
        ));
    }


    /**
     * Creates a new Test entity.
     *
     */
    public function newAction(Request $request)
    {
        $adjonctions = new Adjonctions();
        $form = $this->createForm('OrthoBundle\Form\Type\AjoutAdjType', $adjonctions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adjonctions);
            $em->flush();

            return $this->redirectToRoute('fiche_adj', array('id' => $adjonctions->getId()));
        }

        return $this->render('@Ortho/Adjonction/crea_adj.html.twig', array(
            'adjonctions' => $adjonctions,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Test entity.
     *
     */
    public function showAction(Adjonctions $adjonctions)
    {
        $deleteForm = $this->createDeleteForm($adjonctions);

        return $this->render('@Ortho/Adjonction/fiche_adj.html.twig', array(
            'adjonctions' => $adjonctions,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Test entity.
     *
     */
    public function editAction(Request $request, Adjonctions $adjonctions)
    {
        $deleteForm = $this->createDeleteForm($adjonctions);
        $editForm = $this->createForm('OrthoBundle\Form\Type\AjoutAdjType', $adjonctions);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adjonctions);
            $em->flush();

            return $this->redirectToRoute('edit_adj', array('id' => $adjonctions->getId()));
        }

        return $this->render('OrthoBundle:Adjonction:edit_adj.html.twig', array(
            'adjonctions' => $adjonctions,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Test entity.
     *
     */
    public function deleteAction(Request $request, Adjonctions $adjonctions)
    {
        $form = $this->createDeleteForm($adjonctions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adjonctions);
            $em->flush();
        }

        return $this->redirectToRoute('liste_adj');
    }

    /**
     * Creates a form to delete a Test entity.
     *
     * @param Test $test The Test entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Adjonctions $adjonctions)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_adj', array('id' => $adjonctions->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
