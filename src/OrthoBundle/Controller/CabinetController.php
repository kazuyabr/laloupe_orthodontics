<?php
/**
 * Created by PhpStorm.
 * User: ninon
 * Date: 30/05/16
 * Time: 16:43
 */
namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Cabinetsdentaires;
use OrthoBundle\Form\Type\CabinetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class CabinetController extends Controller
{
    public function createAction()
    {

        // On crée une instance de l'entité cabinet
        $cabinet = new Cabinetsdentaires();
        $request = $this->getRequest();

        // On crée un nouveau formulaire qui prend en paramètres notre formulaire
        // "cabinetType.php" ainsi que l'instance de l'entité cabinet

        $form = $this->createForm(new CabinetType(), $cabinet);

        // Appel de Doctrine
        $em = $this->getDoctrine()->getManager();

        // On hydrate notre formulaire
        $form->handleRequest($request);

        if ($form->isValid()) {

            $cabinet->activationDuCompte();
            $cabinet->attributionDuRole();
            $em->persist($cabinet);
            $em->flush();

            return $this->redirect($this->generateUrl('fiche_cabinet', array('id' => $cabinet->getId())));
        }

        // On affiche la page formulaire, qui prend en paramètre
        // Notre instance de l'entité cabinet, ainsi que l'affichage du formulaire
        return $this->render('@Ortho/Cabinet/crea_cabinet.html.twig', array(
            'form' => $form->createView()
        ));

    }

    public function showAction($id)
    {
        // On récupère l'ID de la cabinet en question, passé dans l'URL
        // Lors de la redirection de la cabinet.
        $idCabinet = $id;

        // On appelle Doctrine
        $em = $this->getDoctrine()->getManager();

        // On récupère la liste des informations d'un formulaire en fonction de son ID
        $affichagefiche = $em->getRepository('OrthoBundle:Cabinetsdentaires')->find($idCabinet);

        // On affiche la vue de fiche_cabinet, en prenant en paramètre
        // La liste des informations du formulaire
        return $this->render('@Ortho/Cabinet/fiche_cabinet.html.twig', array(
            'affichagefiche' => $affichagefiche
        ));
    }

    public function editCabAction(Request $request, Cabinetsdentaires $cabinetsdentaires)
    {
        $deleteForm = $this->createDeleteForm($cabinetsdentaires);
        $editForm = $this->createForm('OrthoBundle\Form\Type\CabinetType', $cabinetsdentaires);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cabinetsdentaires);
            $em->flush();

            return $this->redirectToRoute('fiche_cabinet', array('id' => $cabinetsdentaires->getId()));
        }

        return $this->render('@Ortho/Cabinet/fiche_cabinet.html.twig', array(
            'test' => $cabinetsdentaires,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteCabAction(Request $request, Cabinetsdentaires $cabinetsdentaires)
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

    private function createDeleteForm(Cabinetsdentaires $cabinetsdentaires)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sup_cabinet', array('id' => $cabinetsdentaires->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
    
}