<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Adjonctions;
use OrthoBundle\Form\Type\AjoutAdjType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdjonctionController extends Controller
{
    /*
     * Creation adjonctions.
     */
    public function creationAdjonctionAction()
    {
        $nouvelleAdjonction = new Adjonctions();
        $request = $this->getRequest();

        $form = $this->createForm(new AjoutAdjType(), $nouvelleAdjonction);
        $form->handleRequest($request);

        //Appel de Doctrine
        $em = $this->getDoctrine()->getManager();
        if ($form->isValid() && $form->isSubmitted()) {
            $em->persist($nouvelleAdjonction);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_crea_adj', array(
                'id' => $nouvelleAdjonction->getId()
            )));
        }

        return $this->render('OrthoBundle:Adjonction:crea_adj.html.twig', array(
            "form" => $form->createView()
        ));
    }

    /*
     * Recap adjonctions
     */
    public function recapAdjonctionAction()
    {

        $idAdjonction = intval($_GET['id']);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();
        $recapAdjonction = $em->getRepository('OrthoBundle:Adjonctions')->find($idAdjonction);
        return $this->render('OrthoBundle:Adjonction:recap_crea_adj.html.twig', array(
            "recapAdjonction" => $recapAdjonction,

        ));
    }

    public function editAdjonctionAction(Adjonctions $adjonctions)
    {

        $deleteForm = $this->createDeleteForm($adjonctions);
        $request = $this->getRequest();

        $editForm = $this->createForm('OrthoBundle\Form\Type\AjoutAdjType', $adjonctions);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adjonctions);
            $em->flush();

            return $this->redirectToRoute('fiche_adj', array('id' => $adjonctions->getId()));
        }

        return $this->render('@Ortho/Adjonction/fiche_adj.html.twig', array(
            'adjonctions' => $adjonctions,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /*
     * Delete.
     *
     */
    public function deleteAdjonctionAction(Adjonctions $adjonctions)
    {
        $form = $this->createDeleteForm($adjonctions);
        $request = $this->getRequest();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adjonctions);
            $em->flush();
        }

        return $this->redirectToRoute('sup_adj');
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
            ;
    }

}