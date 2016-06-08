<?php

namespace OrthoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OrthoBundle\Entity\Commandes;
use OrthoBundle\Entity\PoidsAppareillages;
use OrthoBundle\Entity\PoidsAdjonctions;
use OrthoBundle\Form\Type\CommandesType;

class FormulaireController extends Controller
{
    public function createFormulaireAction()
    {
        // On crée une instance de l'entité Commandes
        $commande = new Commandes();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "CommandesType.php" ainsi que l'instance de l'entité Commandes
        $form = $this->createForm(new CommandesType(), $commande);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $commentairesAdj = $em->getRepository('OrthoBundle:Adjonctions')->getComments();
        $nomimageapp = $em->getRepository('OrthoBundle:Appareillages')->findAll();
        $infoUserConnected = $em->getRepository('OrthoBundle:Utilisateurs')->getActualUser($user);

        // On hydrate notre formulaire
        $form->handleRequest($request);

        // Condition pour vérifier que le formlaire est valide et qu'il a bien été envoyé
        if ($form->isValid() && $form->isSubmitted())
        {
            $commande->upload1();
            $commande->upload2();

            // Pour chaque Appareil contenu dans notre commande, qui auront dans la boucle la valeur $appareil, faire :
            foreach ($commande->getAppareillages() as $appareil) {
                // On récupère le cabinet en question qui a passé la commande
                $cabinet = $em->getRepository('OrthoBundle:Utilisateurs')->find($user->getId());

                // On récupère le poids en question en fonction du cabinet qui a passé la commande
                // ET de l'appareil choisi, pour récupérer le poids précis
                // ATTENTION : le $poids récupéré ici est un objet, contrairement au
                // $poids dans l'entité "PoidsAppareillages.php" qui est un entier.
                $poids = $em->getRepository('OrthoBundle:PoidsAppareillages')->findOneBy(['utilisateur' => $cabinet, 'appareillage' => $appareil ]);

                // SI, le poids est déjà renseigné (Si il n'est pas "NULL" en BDD, Faire :
                if (isset($poids)) {
                    // [...] Appliquer la méthode incr() à notre poids (Voir PoidsAppareillages.php).
                    $poids->incrementation();
                }
                // SINON, (Si le poids est "NULL"), faire :
                else
                {
                    // [...] Déclaration d'une nouvelle instance de la classe PoidsAppareillages
                    $poids = new PoidsAppareillages($cabinet, $appareil);

                    $em->persist($poids);
                }
            }

            foreach ($commande->getAdjonctions() as $adjonction)
            {
                $cabinet = $em->getRepository('OrthoBundle:Utilisateurs')->find($user->getId());
                $poidsAdjonction = $em->getRepository('OrthoBundle:PoidsAdjonctions')->findOneBy(['utilisateur' => $cabinet, 'adjonction' => $adjonction]);

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
            'form' => $form->createView(),
            'nomimageapp' => $nomimageapp,
            'commentaireAdjonction' => $commentairesAdj,
            'actualUser' => $infoUserConnected,
        ));
    }
}
