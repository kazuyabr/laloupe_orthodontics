<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Utilisateurs;
use OrthoBundle\Form\Type\UtilisateursLaboratoireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class LaboratoireController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Utilisateurs = $em->getRepository('OrthoBundle:Utilisateurs')->findAll();

        return $this->render('OrthoBundle:Laboratoire:liste_labo.html.twig', array(
            'laboratoires' => $Utilisateurs,
        ));
    }

    public function newAction(Request $request)
    {
        $Utilisateurs = new Utilisateurs();
        $form = $this->createForm(new UtilisateursLaboratoireType(), $Utilisateurs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $Utilisateurs->setCategorie($em->getRepository('OrthoBundle:CategorieUtilisateurs')->find(2));
            $Utilisateurs->setEnabled(true);
            $Utilisateurs->setRoles(array('ROLE_LABORATOIRE'));

            $em->persist($Utilisateurs);
            $em->flush();

            return $this->redirectToRoute('fiche_labo', array('id' => $Utilisateurs->getId()));
        }

        return $this->render('@Ortho/Laboratoire/crea_labo.html.twig', array(
            'laboratoires' => $Utilisateurs,
            'form' => $form->createView(),
            'id' => $Utilisateurs->getId()
        ));
    }

    public function showAction(Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);

        return $this->render('@Ortho/Laboratoire/fiche_labo.html.twig', array(
            'laboratoires' => $utilisateurs,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);
        $editForm = $this->createForm('OrthoBundle\Form\Type\UtilisateursLaboratoireType', $utilisateurs);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurs);
            $em->flush();

            return $this->redirectToRoute('edit_labo', array('id' => $utilisateurs->getId()));
        }

        return $this->render('OrthoBundle:Laboratoire:edit_labo.html.twig', array(
            'laboratoires' => $utilisateurs,
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

        return $this->redirectToRoute('liste_labo');
    }


    private function createDeleteForm(Utilisateurs $utilisateurs)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_labo', array('id' => $utilisateurs->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
