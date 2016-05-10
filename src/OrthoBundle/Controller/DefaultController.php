<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Entity\PoidsAppareillages;
use OrthoBundle\Form\CommandesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrthoBundle:Default:index.html.twig');
    }

    public function formulaireAction()
    {
        $form = $this->createForm(new CommandesType());
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form'=>$form->createView()));
    }

    public function createAction()
    {

        $commande  = new Commandes();
        $request = $this->getRequest();
        $form    = $this->createForm(new CommandesType(), $commande);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            foreach ($commande->getFidApp() as $appareil)
            {
                $cabinet = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find(2); // TODO : Récupérer le vrai cabinet
                $poids = $em->getRepository('OrthoBundle:PoidsAppareillages')->findOneBy(['cabinet' => $cabinet, 'fidAppareillages' => $appareil ]);
                if (isset($poids))
                {
                    $poids->incr();
                }
                else
                {
                    $poids = new PoidsAppareillages($cabinet, $appareil);
                    $em->persist($poids);
                }

            }
            
            $em->persist($commande);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_formulaire', array(
                'idCommande' => $commande->getIdCommande(),
            )));
        }

        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'entity' => $commande,
            'form'   => $form->createView()
        ));
    }

    public function formulaireRecapAction()
    {
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig');
    }


    public function showAction()
    {
        $idCommande = intval($_GET['idCommande']);

        $em = $this->getDoctrine()->getManager();
        $affichagerecap = $em->getRepository('OrthoBundle:Commandes')->find($idCommande);


        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig', array(
            'affichagerecap' => $affichagerecap
        ));
    }

}