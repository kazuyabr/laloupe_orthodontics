<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Adjonctions;
use OrthoBundle\Entity\Appareillages;
use OrthoBundle\Entity\Cabinetsdentaires;
use OrthoBundle\Entity\Laboratoire;
use OrthoBundle\Form\Type\AjoutAdjType;
use OrthoBundle\Form\Type\AjoutappType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SuperAdminController extends Controller
{
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

        return $this->render('OrthoBundle:Default:crea_adj.html.twig', array(
            "form" => $form->createView()
        ));
    }

    public function recapAdjonctionAction()
    {

        $idAdjonction = intval($_GET['id']);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();
        $recapAdjonction = $em->getRepository('OrthoBundle:Adjonctions')->find($idAdjonction);
        return $this->render('OrthoBundle:Default:recap_crea_adj.html.twig', array(
            "recapAdjonction" => $recapAdjonction,

        ));

    }

    public function appdeleteAction(Request $request, Appareillages $appareillages)
    {
        $form = $this->createDeleteForm($appareillages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appareillages);
            $em->flush();
        }

        return $this->redirectToRoute('sup_app');
    }

    public function adjdeleteAction(Request $request, Adjonctions $adjonctions)
    {
        $form = $this->createDeleteForm($adjonctions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adjonctions);
            $em->flush();
        }

        return $this->redirectToRoute('sup_adj');
    }

    public function labodeleteAction(Request $request, Laboratoire $laboratoire)
    {
        $form = $this->createDeleteForm($laboratoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($laboratoire);
            $em->flush();
        }

        return $this->redirectToRoute('sup_labo');
    }

    public function cabdeleteAction(Request $request, Cabinetsdentaires $cabinetsdentaires)
    {
        $form = $this->createDeleteForm($cabinetsdentaires);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cabinetsdentaires);
            $em->flush();
        }

        return $this->redirectToRoute('sup_cabinet');
    }
}