<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
use OrthoBundle\Entity\PoidsAdjonctions;
use OrthoBundle\Entity\PoidsAppareillages;
use OrthoBundle\Form\Type\CommandesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\SerializerBuilder;

class DefaultController extends Controller
{
    public function createAction()
    {
        // On crée une instance de l'entité Commandes
        $commande  = new Commandes();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "CommandesType.php" ainsi que l'instance de l'entité Commandes
        $form    = $this->createForm(new CommandesType(), $commande);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();
        
        $commentairesApp = $em->getRepository('OrthoBundle:Appareillages')->getComments();
        $commentairesAdj = $em->getRepository('OrthoBundle:Adjonctions')->getComments();
        $nomimageapp = $em->getRepository('OrthoBundle:Appareillages')->getnameandimage();
        $infoUserConnected = $em->getRepository('OrthoBundle:Cabinetsdentaires')->getActualUser();

        // On hydrate notre formulaire
        $form->handleRequest($request);

        // Condition pour vérifier que le formlaire est valide et qu'il a bien été envoyé
        if ($form->isValid() && $form->isSubmitted())
        {

            // Pour chaque Appareil contenu dans notre commande, qui auront dans la boucle la valeur $appareil, faire :
            foreach ($commande->getAppareillages() as $appareil)
            {
                // On récupère le cabinet en question qui a passé la commande
                $cabinet = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find(1);

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

                    $em->persist($poids);
                }

            }

            foreach ($commande->getFidAdj() as $adjonction)
            {
                $cabinet = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find(1);
                $poidsAdjonction = $em->getRepository('OrthoBundle:PoidsAdjonctions')->findOneBy(['cabinet' => $cabinet, 'fidAdjonction' => $adjonction]);

                if (isset($poidsAdjonction))
                {
                    $poidsAdjonction->incrementation();
                }
                else
                {
                    $poidsAdjonction = new PoidsAdjonctions($cabinet, $adjonction);

                    $em->persist($poidsAdjonction);
                }
            }
            
            // On prépare la mise en Base de données
            $em->persist($commande);
            // On met en Base de données
            $em->flush();

            // On redirige vers l'affichage de recap_formulaire, qui prend en paramètre
            // La commande qu'on vient de générer
            return $this->redirect($this->generateUrl('recap_formulaire', array(
                'id' => $commande->getId(),
            )));
        }

        // On affiche la page formulaire, qui prend en paramètre
        // Notre instance de l'entité Commandes, ainsi que l'affichage du formulaire
        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'form'   => $form->createView(),
            'nomimageapp' => $nomimageapp,
            'commentaireAppareil' => $commentairesApp,
            'commentaireAdjonction' => $commentairesAdj,
            'actualUser' => $infoUserConnected,

        ));
    }

    public function showAction($id)
    {
        // On récupère l'ID de la commande en question, passé dans l'URL
        // Lors de la redirection de la commande.
        $idCommande = $id;
        
        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();
        
        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagerecap = $em->getRepository('OrthoBundle:Commandes')->find($idCommande);
        
        // On affiche la vue de recap_formulaire, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('OrthoBundle:Default:recap_formulaire.html.twig', array(
            'affichagerecap' => $affichagerecap
        ));
    }

    public function rechercheAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();


        $listeAppareillages = $em->getRepository('OrthoBundle:Appareillages')->find($id);
        $jsonContent = $serializer->serialize($listeAppareillages, 'json');

        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
