<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\Commandes;
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

        $commandes = new Commandes();
        $request = $this->getRequest();
        $form = $this->createForm(new CommandesType(), $commandes);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($commandes);
            $em->flush();

            return $this->redirect($this->generateUrl('recap_formulaire', array(
                'idCommande' => $commandes->getIdCommande()
            )));
        }

        return $this->render('OrthoBundle:Default:formulaire.html.twig', array(
            'entity' => $commandes,
            'form' => $form->createView()
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
class UploadsController extends Controller
{

    /**
     * Lists all Images entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OrthoBundle:Uploads')->findAll();

        return $this->render('OrthoBundle:uploads:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Images entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Uploads();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('uploads_show', array('id' => $entity->getId())));
        }

        return $this->render('OrthoBundle:uploads:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Images entity.
     *
     * @param Uploads $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Uploads $entity)
    {
        $form = $this->createForm(new UploadsType(), $entity, array(
            'action' => $this->generateUrl('uploads_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Images entity.
     *
     */
    public function newAction()
    {
        $entity = new Uploads();
        $form   = $this->createCreateForm($entity);

        return $this->render('OrthoBundle:uploads:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Images entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrthoBundle:Uploads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Images entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrthoBundle:uploads:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Images entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrthoBundle:Uploads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Images entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrthoBundle:uploads:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Images entity.
     *
     * @param Uploads $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Uploads $entity)
    {
        $form = $this->createForm(new UploadsType(), $entity, array(
            'action' => $this->generateUrl('uploads_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Images entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrthoBundle:Uploads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Images entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('uploads_edit', array('id' => $id)));
        }

        return $this->render('OrthoBundle:uploads:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Images entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OrthoBundle:Uploads')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Images entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('uploads_index'));
    }

    /**
     * Creates a form to delete a Images entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uploads_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }


}