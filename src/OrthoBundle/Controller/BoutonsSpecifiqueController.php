<?php

namespace OrthoBundle\Controller;

use OrthoBundle\Entity\AppAdjLabo;
use OrthoBundle\Form\Type\BoutonsSpecifiqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BoutonsSpecifiqueController extends Controller
{
    public function createSpecificButtonAction()
    {
        $newSpecificButton = new AppAdjLabo();
        
        $form = $this->createForm(new BoutonsSpecifiqueType(), $newSpecificButton);
        
        return $this->render('@Ortho/BoutonsSpecifique/new_bouton_specifique.html.twig', array(
            'form' => $form->createView()
        ));
    }
}