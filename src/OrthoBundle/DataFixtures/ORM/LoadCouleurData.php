<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Couleurs;

class CouleursData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $Couleurs1 = new Couleurs();
        $Couleurs1->setNomCouleur('Transparent [Défaut]');
        $manager->persist($Couleurs1);

        $Couleurs2 = new Couleurs();
        $Couleurs2->setNomCouleur('Orange');
        $manager->persist($Couleurs2);

        $Couleurs3 = new Couleurs();
        $Couleurs3->setNomCouleur('Violet');
        $manager->persist($Couleurs3);

        $Couleurs4 = new Couleurs();
        $Couleurs4->setNomCouleur('Rose');
        $manager->persist($Couleurs4);

        $Couleurs5 = new Couleurs();
        $Couleurs5->setNomCouleur('Bleu');
        $manager->persist($Couleurs5);

        $Couleurs6 = new Couleurs();
        $Couleurs6->setNomCouleur('Rouge');
        $manager->persist($Couleurs6);

        $Couleurs7 = new Couleurs();
        $Couleurs7->setNomCouleur('Vert');
        $manager->persist($Couleurs7);

        $Couleurs8 = new Couleurs();
        $Couleurs8->setNomCouleur('Jaune Fluo');
        $manager->persist($Couleurs8);

        $Couleurs9 = new Couleurs();
        $Couleurs9->setNomCouleur('Jaune');
        $manager->persist($Couleurs9);

        $Couleurs10 = new Couleurs();
        $Couleurs10->setNomCouleur('Paillettes');
        $manager->persist($Couleurs10);

        $manager->flush();
    }

}