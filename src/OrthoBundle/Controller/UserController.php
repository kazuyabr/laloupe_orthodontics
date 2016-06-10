<?php


namespace OrthoBundle\Controller;


use OrthoBundle\Form\Type\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OrthoBundle\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $Utilisateurs = $em->getRepository('OrthoBundle:Utilisateurs')->findAll();

        return $this->render('OrthoBundle:Users:liste_user.html.twig', array(
            'cabinets' => $Utilisateurs,
        ));
    }


    public function newAction(Request $request)
    {
        $Utilisateurs = new Utilisateurs();
        $form = $this->createForm(new UserType(), $Utilisateurs);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $Utilisateurs->setRoles(array('ROLE_CABINET'));
            $Utilisateurs->setEnabled(true);
            $em->persist($Utilisateurs);
            $em->flush();

            return $this->redirectToRoute('fiche_user', array('id' => $Utilisateurs->getId()));
        }

        return $this->render('@Ortho/Users/crea_user.html.twig', array(
            'users' => $Utilisateurs,
            'form' => $form->createView(),
        ));
    }


    public function showAction(Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);

        return $this->render('@Ortho/Users/fiche_user.html.twig', array(
            'users' => $utilisateurs,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Utilisateurs $utilisateurs)
    {
        $deleteForm = $this->createDeleteForm($utilisateurs);
        $editForm = $this->createForm(new UserType(), $utilisateurs);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateurs);
            $em->flush();

            return $this->redirectToRoute('edit_user', array('id' => $utilisateurs->getId()));
        }

        return $this->render('OrthoBundle:Users:edit_user.html.twig', array(
            'users' => $utilisateurs,
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

        return $this->redirectToRoute('liste_user');
    }


    private function createDeleteForm(Utilisateurs $utilisateurs)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_user', array('id' => $utilisateurs->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


}