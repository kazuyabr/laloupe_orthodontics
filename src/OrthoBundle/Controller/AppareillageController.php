<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Appareillages;
use OrthoBundle\Form\Type\AjoutappType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AppareillageController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adjonctions = $em->getRepository('OrthoBundle:Appareillages')->findAll();

        return $this->render('OrthoBundle:Appareillage:liste_app.html.twig', array(
            'appareillages' => $adjonctions,
        ));
    }

    
    public function newAction(Request $request)
    {
        $appareillages = new Appareillages();
        $form = $this->createForm(new AjoutappType(), $appareillages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appareillages);
            $em->flush();

            return $this->redirectToRoute('fiche_app', array('id' => $appareillages->getId()));
        }

        return $this->render('@Ortho/Appareillage/crea_app.html.twig', array(
            'appareillages' => $appareillages,
            'form' => $form->createView(),
        ));
    }

    
    public function showAction(Appareillages $appareillages)
    {
        $deleteForm = $this->createDeleteForm($appareillages);

        return $this->render('@Ortho/Appareillage/fiche_app.html.twig', array(
            'appareillages' => $appareillages,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function editAction(Request $request, Appareillages $appareillages)
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

        return $this->render('OrthoBundle:Appareillage:edit_app.html.twig', array(
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

        return $this->redirectToRoute('liste_app');
    }

    
    private function createDeleteForm(Appareillages $appareillages)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_app', array('id' => $appareillages->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}