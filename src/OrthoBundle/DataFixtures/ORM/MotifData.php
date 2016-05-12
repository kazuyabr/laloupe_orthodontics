<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Motif;

class MotifData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $motif1 = new Motif();
        $motif1->setNomMotif('1 - Papillon');
        $manager->persist($motif1);

        $motif2 = new Motif();
        $motif2->setNomMotif('2 - Logo Transformers');
        $manager->persist($motif2);

        $motif3 = new Motif();
        $motif3->setNomMotif('3 - Smiley');
        $manager->persist($motif3);

        $motif4 = new Motif();
        $motif4->setNomMotif('4 - Rose Rouge');
        $manager->persist($motif4);

        $motif5 = new Motif();
        $motif5->setNomMotif('5 - Caractère Japonais (Amour)');
        $manager->persist($motif5);

        $motif6 = new Motif();
        $motif6->setNomMotif('6 - Logo Tribal');
        $manager->persist($motif6);

        $motif7 = new Motif();
        $motif7->setNomMotif('7 - James Bond 007');
        $manager->persist($motif7);

        $motif8 = new Motif();
        $motif8->setNomMotif('8 - Etoiles');
        $manager->persist($motif8);

        $motif9 = new Motif();
        $motif9->setNomMotif('9 - Logo Violetta');
        $manager->persist($motif9);

        $motif10 = new Motif();
        $motif10->setNomMotif('10 - Double Coeurs');
        $manager->persist($motif10);

        $motif11 = new Motif();
        $motif11->setNomMotif('11 - Logo Nucléaire');
        $manager->persist($motif11);

        $motif12 = new Motif();
        $motif12->setNomMotif('12 - Logo Charlotte aux Fraises');
        $manager->persist($motif12);

        $motif13 = new Motif();
        $motif13->setNomMotif('13 - Logo Apple');
        $manager->persist($motif13);

        $motif14 = new Motif();
        $motif14->setNomMotif('14 - Dragon Tribal');
        $manager->persist($motif14);

        $motif15 = new Motif();
        $motif15->setNomMotif('15 - Dauphin');
        $manager->persist($motif15);

        $motif16 = new Motif();
        $motif16->setNomMotif('16 - Coeur Rose');
        $manager->persist($motif16);

        $motif17 = new Motif();
        $motif17->setNomMotif('17 - ....');
        $manager->persist($motif17);

        $motif18 = new Motif();
        $motif18->setNomMotif('18 - Logo Star Wars');
        $manager->persist($motif18);

        $motif19 = new Motif();
        $motif19->setNomMotif('19 - Motocross');
        $manager->persist($motif19);

        $motif20 = new Motif();
        $motif20->setNomMotif('20 - Logo Olympique de Marseille');
        $manager->persist($motif20);

        $motif21 = new Motif();
        $motif21->setNomMotif('21 - Pikachu');
        $manager->persist($motif21);

        $motif22 = new Motif();
        $motif22->setNomMotif('22 - Logo MSN');
        $manager->persist($motif22);

        $motif23 = new Motif();
        $motif23->setNomMotif('23 - Voiture de course');
        $manager->persist($motif23);

        $motif24 = new Motif();
        $motif24->setNomMotif('24 - Petit chat');
        $manager->persist($motif24);

        $motif25 = new Motif();
        $motif25->setNomMotif('25 - Hello Kitty');
        $manager->persist($motif25);

        $motif26 = new Motif();
        $motif26->setNomMotif('26 - Coeur Hello Kitty');
        $manager->persist($motif26);

        $motif27 = new Motif();
        $motif27->setNomMotif('27 - Dragon Tribal 2');
        $manager->persist($motif27);

        $motif28 = new Motif();
        $motif28->setNomMotif('28 - Logo Mortal Kombat');
        $manager->persist($motif28);

        $motif29 = new Motif();
        $motif29->setNomMotif('29 - Ballon de Football');
        $manager->persist($motif29);

        $motif30 = new Motif();
        $motif30->setNomMotif('30 - Logo Monster High');
        $manager->persist($motif30);

        $motif31 = new Motif();
        $motif31->setNomMotif('31 - Bébé Démon');
        $manager->persist($motif31);

        $motif32 = new Motif();
        $motif32->setNomMotif('32 - Ourson');
        $manager->persist($motif32);

        $motif33 = new Motif();
        $motif33->setNomMotif('33 - Personnage Manga');
        $manager->persist($motif33);

        $motif34 = new Motif();
        $motif34->setNomMotif("34 - M&M's");
        $manager->persist($motif34);

        $motif35 = new Motif();
        $motif35->setNomMotif('35 - Logo Equipe de France de Football');
        $manager->persist($motif35);

        $motif36 = new Motif();
        $motif36->setNomMotif('36 - Logo Paris Saint-Germain');
        $manager->persist($motif36);

        $motif37 = new Motif();
        $motif37->setNomMotif('37 - Dragon Tribal 3');
        $manager->persist($motif37);

        $motif38 = new Motif();
        $motif38->setNomMotif('38 - Cheval');
        $manager->persist($motif38);

        $motif39 = new Motif();
        $motif39->setNomMotif('39 - Iron Man');
        $manager->persist($motif39);

        $motif40 = new Motif();
        $motif40->setNomMotif('40 - Smiley Souriant 2');
        $manager->persist($motif40);

        $motif41 = new Motif();
        $motif41->setNomMotif('41 - Smiley Souriant 3');
        $manager->persist($motif41);

        $motif42 = new Motif();
        $motif42->setNomMotif('42 - Smiley Moqueur');
        $manager->persist($motif42);

        $motif43 = new Motif();
        $motif43->setNomMotif('43 - Fairy Tail');
        $manager->persist($motif43);

        $motif44 = new Motif();
        $motif44->setNomMotif('44 - Logo Superman');
        $manager->persist($motif44);

        $motif45 = new Motif();
        $motif45->setNomMotif('45 - Bob l\'Eponge');
        $manager->persist($motif45);

        $motif46 = new Motif();
        $motif46->setNomMotif('46 - Logo Bratz');
        $manager->persist($motif46);

        $motif47 = new Motif();
        $motif47->setNomMotif('47 - Grenouille');
        $manager->persist($motif47);

        $motif48 = new Motif();
        $motif48->setNomMotif('48 - ...');
        $manager->persist($motif48);

        $motif49 = new Motif();
        $motif49->setNomMotif('49 - Scratch');
        $manager->persist($motif49);

        $motif50 = new Motif();
        $motif50->setNomMotif('50 - Spider-Man');
        $manager->persist($motif50);


        $manager->flush();
    }
}