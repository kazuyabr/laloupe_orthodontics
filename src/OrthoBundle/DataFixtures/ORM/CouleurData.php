<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Couleur;

class CouleurData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $couleur1 = new Couleur();
        $couleur1->setNomCouleur('Transparent [Défaut]');
        $manager->persist($couleur1);

        $couleur2 = new Couleur();
        $couleur2->setNomCouleur('Orange');
        $manager->persist($couleur2);

        $couleur3 = new Couleur();
        $couleur3->setNomCouleur('Violet');
        $manager->persist($couleur3);

        $couleur4 = new Couleur();
        $couleur4->setNomCouleur('Rose');
        $manager->persist($couleur4);

        $couleur5 = new Couleur();
        $couleur5->setNomCouleur('Bleu');
        $manager->persist($couleur5);

        $couleur6 = new Couleur();
        $couleur6->setNomCouleur('Rouge');
        $manager->persist($couleur6);

        $couleur7 = new Couleur();
        $couleur7->setNomCouleur('Vert');
        $manager->persist($couleur7);

        $couleur8 = new Couleur();
        $couleur8->setNomCouleur('Jaune Fluo');
        $manager->persist($couleur8);

        $couleur9 = new Couleur();
        $couleur9->setNomCouleur('Jaune');
        $manager->persist($couleur9);

        $couleur10 = new Couleur();
        $couleur10->setNomCouleur('Paillettes');
        $manager->persist($couleur10);

        $manager->flush();
    }

}