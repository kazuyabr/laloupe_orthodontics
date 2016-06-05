<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Motifs;

class MotifsData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $motif1 = new Motifs();
        $motif1->setNomMotif('1 - Papillon');
        $manager->persist($motif1);

        $motif2 = new Motifs();
        $motif2->setNomMotif('2 - Logo Transformers');
        $manager->persist($motif2);

        $motif3 = new Motifs();
        $motif3->setNomMotif('3 - Smiley');
        $manager->persist($motif3);

        $motif4 = new Motifs();
        $motif4->setNomMotif('4 - Rose Rouge');
        $manager->persist($motif4);

        $motif5 = new Motifs();
        $motif5->setNomMotif('5 - Caractère Japonais (Amour)');
        $manager->persist($motif5);

        $motif6 = new Motifs();
        $motif6->setNomMotif('6 - Logo Tribal');
        $manager->persist($motif6);

        $motif7 = new Motifs();
        $motif7->setNomMotif('7 - James Bond 007');
        $manager->persist($motif7);

        $motif8 = new Motifs();
        $motif8->setNomMotif('8 - Etoiles');
        $manager->persist($motif8);

        $motif9 = new Motifs();
        $motif9->setNomMotif('9 - Logo Violetta');
        $manager->persist($motif9);

        $motif10 = new Motifs();
        $motif10->setNomMotif('10 - Double Coeurs');
        $manager->persist($motif10);

        $motif11 = new Motifs();
        $motif11->setNomMotif('11 - Logo Nucléaire');
        $manager->persist($motif11);

        $motif12 = new Motifs();
        $motif12->setNomMotif('12 - Logo Charlotte aux Fraises');
        $manager->persist($motif12);

        $motif13 = new Motifs();
        $motif13->setNomMotif('13 - Logo Apple');
        $manager->persist($motif13);

        $motif14 = new Motifs();
        $motif14->setNomMotif('14 - Dragon Tribal');
        $manager->persist($motif14);

        $motif15 = new Motifs();
        $motif15->setNomMotif('15 - Dauphin');
        $manager->persist($motif15);

        $motif16 = new Motifs();
        $motif16->setNomMotif('16 - Coeur Rose');
        $manager->persist($motif16);

        $motif17 = new Motifs();
        $motif17->setNomMotif('17 - ....');
        $manager->persist($motif17);

        $motif18 = new Motifs();
        $motif18->setNomMotif('18 - Logo Star Wars');
        $manager->persist($motif18);

        $motif19 = new Motifs();
        $motif19->setNomMotif('19 - Motocross');
        $manager->persist($motif19);

        $motif20 = new Motifs();
        $motif20->setNomMotif('20 - Logo Olympique de Marseille');
        $manager->persist($motif20);

        $motif21 = new Motifs();
        $motif21->setNomMotif('21 - Pikachu');
        $manager->persist($motif21);

        $motif22 = new Motifs();
        $motif22->setNomMotif('22 - Logo MSN');
        $manager->persist($motif22);

        $motif23 = new Motifs();
        $motif23->setNomMotif('23 - Voiture de course');
        $manager->persist($motif23);

        $motif24 = new Motifs();
        $motif24->setNomMotif('24 - Petit chat');
        $manager->persist($motif24);

        $motif25 = new Motifs();
        $motif25->setNomMotif('25 - Hello Kitty');
        $manager->persist($motif25);

        $motif26 = new Motifs();
        $motif26->setNomMotif('26 - Coeur Hello Kitty');
        $manager->persist($motif26);

        $motif27 = new Motifs();
        $motif27->setNomMotif('27 - Dragon Tribal 2');
        $manager->persist($motif27);

        $motif28 = new Motifs();
        $motif28->setNomMotif('28 - Logo Mortal Kombat');
        $manager->persist($motif28);

        $motif29 = new Motifs();
        $motif29->setNomMotif('29 - Ballon de Football');
        $manager->persist($motif29);

        $motif30 = new Motifs();
        $motif30->setNomMotif('30 - Logo Monster High');
        $manager->persist($motif30);

        $motif31 = new Motifs();
        $motif31->setNomMotif('31 - Bébé Démon');
        $manager->persist($motif31);

        $motif32 = new Motifs();
        $motif32->setNomMotif('32 - Ourson');
        $manager->persist($motif32);

        $motif33 = new Motifs();
        $motif33->setNomMotif('33 - Personnage Manga');
        $manager->persist($motif33);

        $motif34 = new Motifs();
        $motif34->setNomMotif("34 - M&M's");
        $manager->persist($motif34);

        $motif35 = new Motifs();
        $motif35->setNomMotif('35 - Logo Equipe de France de Football');
        $manager->persist($motif35);

        $motif36 = new Motifs();
        $motif36->setNomMotif('36 - Logo Paris Saint-Germain');
        $manager->persist($motif36);

        $motif37 = new Motifs();
        $motif37->setNomMotif('37 - Dragon Tribal 3');
        $manager->persist($motif37);

        $motif38 = new Motifs();
        $motif38->setNomMotif('38 - Cheval');
        $manager->persist($motif38);

        $motif39 = new Motifs();
        $motif39->setNomMotif('39 - Iron Man');
        $manager->persist($motif39);

        $motif40 = new Motifs();
        $motif40->setNomMotif('40 - Smiley Souriant 2');
        $manager->persist($motif40);

        $motif41 = new Motifs();
        $motif41->setNomMotif('41 - Smiley Souriant 3');
        $manager->persist($motif41);

        $motif42 = new Motifs();
        $motif42->setNomMotif('42 - Smiley Moqueur');
        $manager->persist($motif42);

        $motif43 = new Motifs();
        $motif43->setNomMotif('43 - Fairy Tail');
        $manager->persist($motif43);

        $motif44 = new Motifs();
        $motif44->setNomMotif('44 - Logo Superman');
        $manager->persist($motif44);

        $motif45 = new Motifs();
        $motif45->setNomMotif('45 - Bob l\'Eponge');
        $manager->persist($motif45);

        $motif46 = new Motifs();
        $motif46->setNomMotif('46 - Logo Bratz');
        $manager->persist($motif46);

        $motif47 = new Motifs();
        $motif47->setNomMotif('47 - Grenouille');
        $manager->persist($motif47);

        $motif48 = new Motifs();
        $motif48->setNomMotif('48 - ...');
        $manager->persist($motif48);

        $motif49 = new Motifs();
        $motif49->setNomMotif('49 - Scratch');
        $manager->persist($motif49);

        $motif50 = new Motifs();
        $motif50->setNomMotif('50 - Spider-Man');
        $manager->persist($motif50);


        $manager->flush();
    }
}