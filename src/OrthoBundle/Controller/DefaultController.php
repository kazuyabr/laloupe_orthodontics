<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Entity\PoidsAppareillages;
use OrthoBundle\Form\CommandesType;
use OrthoBundle\Form\UploadsType;
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
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array('form' => $form->createView()));
    }

    public function createAction()
    {
        $commande  = new Commandes();
        $request = $this->getRequest();
        $form    = $this->createForm(new CommandesType(), $commande);
        $form->handleRequest($request);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        //$listeCouleurs = $em->getRepository('OrthoBundle:Couleur')->findAll();
        
        // Condition pour vérifier que le formlaire est valide et qu'il a bien été envoyé
        if ($form->isValid() && $form->isSubmitted())
        {

            // Pour chaque Appareil contenu dans notre commande, qui auront dans la boucle la valeur $appareil, faire :
            foreach ($commande->getAppareillages() as $appareil)
            {
                // On récupère le cabinet en question qui a passé la commande
                $cabinet = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find(1); // TODO : Récupérer le vrai cabinet

                // On récupère le poids en question en fonction du cabinet qui a passé la commande
                // ET de l'appareil choisi, pour récupérer le poids précis
                // ATTENTION : le $poids récupéré ici est un objet, contrairement au
                // $poids dans l'entité "PoidsAppareillages.php" qui est un entier.
                $poids = $em->getRepository('OrthoBundle:PoidsAppareillages')->findOneBy(['cabinet' => $cabinet, 'fidAppareillages' => $appareil ]);

                // SI, le poids est déjà renseigné (Si il n'est pas "NULL" en BDD, Faire :
                if (isset($poids))
                {
                    // [...] Appliquer la méthode incr() à notre poids (Voir PoidsAppareillages.php).
                    $poids->incr();
                }
                // SINON, (Si le poids est "NULL"), faire :
                else
                {
                    // [...] Déclaration d'une nouvelle instance de la classe PoidsAppareillages
                    $poids = new PoidsAppareillages($cabinet, $appareil);

                    // On met à jour les données de notre $poids
                    $em->persist($poids);
                }

            }

            $em->persist($commande);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_formulaire', array(
                'id' => $commande->getId(),
            )));
        }

        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'entity' => $commande,
            'form'   => $form->createView(),
        ));
    }


    public function formulaireRecapAction()
    {
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig');
    }


    public function showAction()
    {
        $idCommande = intval($_GET['id']);
        $em = $this->getDoctrine()->getManager();
        $affichagerecap = $em->getRepository('OrthoBundle:Commandes')->find($idCommande);
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig', array(
            'affichagerecap' => $affichagerecap
        ));
    }

    
}