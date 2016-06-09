<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Utilisateurs;
use OrthoBundle\Form\Type\UtilisateursCabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CabinetController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Utilisateurs = $em->getRepository('OrthoBundle:Utilisateurs')->findAll();

        return $this->render('OrthoBundle:Cabinet:liste_cabinet.html.twig', array(
            'cabinets' => $Utilisateurs,
        ));
    }


    public function newAction(Request $request)
    {
        $Utilisateurs = new Utilisateurs();
        $form = $this->createForm('OrthoBundle\Form\Type\UtilisateursCabinetType', $Utilisateurs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Utilisateurs);
            $em->flush();

            return $this->redirectToRoute('fiche_cabinet', array('id' => $Utilisateurs->getId()));
        }

        return $this->render('@Ortho/Cabinet/crea_cabinet.html.twig', array(
            'cabinets' => $Utilisateurs,
            'form' => $form->createView(),
        ));
    }


    public function showAction(Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);

        return $this->render('@Ortho/Cabinet/fiche_cabinet.html.twig', array(
            'cabinets' => $utilisateurs,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);
        $editForm = $this->createForm('OrthoBundle\Form\Type\UtilisateursCabinetType', $utilisateurs);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurs);
            $em->flush();

            return $this->redirectToRoute('edit_cabinet', array('id' => $utilisateurs->getId()));
        }

        return $this->render('OrthoBundle:Cabinet:edit_cabinet.html.twig', array(
            'cabinets' => $utilisateurs,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function deleteAction(Request $request, Utilisateurs $utilisateurs)
    {
        $form = $this->createDeleteForm($utilisateurs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($utilisateurs);
            $em->flush();
        }

        return $this->redirectToRoute('liste_cabinet');
    }


    private function createDeleteForm(Utilisateurs $utilisateurs)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_app', array('id' => $utilisateurs->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
