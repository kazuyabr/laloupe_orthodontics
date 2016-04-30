<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Appareillages;

class AppareillagesData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {

        $appareillage1 = new Appareillages();
        $appareillage1->setTitreApp('Arc Lingual');
        $appareillage1->setFamilleApp('fix');
        $appareillage1->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0001.jpg');
        $appareillage1->setCommentairesApp('Réaliser un Arc lingual soudé s/ bagues');
        $appareillage1->setCompteurApp(0);
        $appareillage1->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage1->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage1);
        $manager->flush();



        $appareillage2 = new Appareillages();
        $appareillage2->setTitreApp('Arc de Nance');
        $appareillage2->setFamilleApp('fix');
        $appareillage2->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0002.jpg');
        $appareillage2->setCommentairesApp('Réaliser Arc de Nance soudé s/ bagues');
        $appareillage2->setCompteurApp(0);
        $appareillage2->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage2->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage2);
        $manager->flush();



        $appareillage3 = new Appareillages();
        $appareillage3->setTitreApp('Arc Palatin');
        $appareillage3->setFamilleApp('fix');
        $appareillage3->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0003.jpg');
        $appareillage3->setCommentairesApp('Réaliser Arc Palatin soudé s/ bagues');
        $appareillage3->setCompteurApp(0);
        $appareillage3->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage3->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage3);
        $manager->flush();



        $appareillage4 = new Appareillages();
        $appareillage4->setTitreApp('Arc Transpalatin');
        $appareillage4->setFamilleApp('fix');
        $appareillage4->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0004.jpg');
        $appareillage4->setCommentairesApp('Réaliser un arc Transpalatin soudé s/ bagues');
        $appareillage4->setCompteurApp(0);
        $appareillage4->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage4->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage4);
        $manager->flush();



        $appareillage5 = new Appareillages();
        $appareillage5->setTitreApp('Arc NTP');
        $appareillage5->setFamilleApp('fix');
        $appareillage5->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0005.jpg');
        $appareillage5->setCommentairesApp('Réaliser un Arc NTP soudé s/ bagues');
        $appareillage5->setCompteurApp(0);
        $appareillage5->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage5->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage5);
        $manager->flush();



        $appareillage6 = new Appareillages();
        $appareillage6->setTitreApp('Arc Lingual Idéal');
        $appareillage6->setFamilleApp('fix');
        $appareillage6->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0006.jpg');
        $appareillage6->setCommentairesApp('Réaliser un Arc Lingual Idéal soudé s/ bagues');
        $appareillage6->setCompteurApp(0);
        $appareillage6->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage6->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage6);
        $manager->flush();



        $appareillage7 = new Appareillages();
        $appareillage7->setTitreApp('Arc double de Delaire');
        $appareillage7->setFamilleApp('fix');
        $appareillage7->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0007.jpg');
        $appareillage7->setCommentairesApp('Réaliser un Arc double de Delaire soudé');
        $appareillage7->setCompteurApp(0);
        $appareillage7->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage7->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage7);
        $manager->flush();



        $appareillage8 = new Appareillages();
        $appareillage8->setTitreApp('Plaque Palatine');
        $appareillage8->setFamilleApp('mob');
        $appareillage8->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0001.jpg');
        $appareillage8->setCommentairesApp('Réaliser une Plaque Palatine');
        $appareillage8->setCompteurApp(0);
        $appareillage8->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage8->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage8);
        $manager->flush();



        $appareillage9 = new Appareillages();
        $appareillage9->setTitreApp('Plaque de Hawley');
        $appareillage9->setFamilleApp('mob');
        $appareillage9->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0002.jpg');
        $appareillage9->setCommentairesApp('Réaliser une Plaque de Hawley');
        $appareillage9->setCompteurApp(0);
        $appareillage9->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage9->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage9);
        $manager->flush();



        $appareillage10 = new Appareillages();
        $appareillage10->setTitreApp('Gouttière de Contention');
        $appareillage10->setFamilleApp('mob');
        $appareillage10->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0003.jpg');
        $appareillage10->setCommentairesApp('Réaliser une Gouttière de Contention');
        $appareillage10->setCompteurApp(0);
        $appareillage10->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage10->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage10);
        $manager->flush();



        $appareillage11 = new Appareillages();
        $appareillage11->setTitreApp('Plaque Mandibulaire');
        $appareillage11->setFamilleApp('mob');
        $appareillage11->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0004.jpg');
        $appareillage11->setCommentairesApp('Réaliser une Plaque Mandibulaire');
        $appareillage11->setCompteurApp(0);
        $appareillage11->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage11->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage11);
        $manager->flush();



        $appareillage12 = new Appareillages();
        $appareillage12->setTitreApp('Monobloc de Lautrou');
        $appareillage12->setFamilleApp('mob');
        $appareillage12->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0005.jpg');
        $appareillage12->setCommentairesApp('Réaliser un monobloc de Lautrou');
        $appareillage12->setCompteurApp(0);
        $appareillage12->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage12->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage12);
        $manager->flush();



        $appareillage13 = new Appareillages();
        $appareillage13->setTitreApp('Monobloc de Chabre');
        $appareillage13->setFamilleApp('mob');
        $appareillage13->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0006.jpg');
        $appareillage13->setCommentairesApp('Réaliser un monobloc de Chabre');
        $appareillage13->setCompteurApp(0);
        $appareillage13->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage13->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage13);
        $manager->flush();



        $appareillage14 = new Appareillages();
        $appareillage14->setTitreApp('Bielle de Herbst');
        $appareillage14->setFamilleApp('mob');
        $appareillage14->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0007.jpg');
        $appareillage14->setCommentairesApp('Réaliser une bielle de Herbst');
        $appareillage14->setCompteurApp(0);
        $appareillage14->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage14->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage14);
        $manager->flush();



        $appareillage15 = new Appareillages();
        $appareillage15->setTitreApp('Bielle de Tavernier');
        $appareillage15->setFamilleApp('mob');
        $appareillage15->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0008.jpg');
        $appareillage15->setCommentairesApp('Réaliser une bielle de Tavernier');
        $appareillage15->setCompteurApp(0);
        $appareillage15->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage15->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage15);
        $manager->flush();



        $appareillage16 = new Appareillages();
        $appareillage16->setTitreApp('PUL 1');
        $appareillage16->setFamilleApp('mob');
        $appareillage16->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0009.jpg');
        $appareillage16->setCommentairesApp('Réaliser un PUL 1');
        $appareillage16->setCompteurApp(0);
        $appareillage16->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage16->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage16);
        $manager->flush();



        $appareillage17 = new Appareillages();
        $appareillage17->setTitreApp('PUL 2');
        $appareillage17->setFamilleApp('mob');
        $appareillage17->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0010.jpg');
        $appareillage17->setCommentairesApp('Réalier un PUL 2');
        $appareillage17->setCompteurApp(0);
        $appareillage17->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage17->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage17);
        $manager->flush();



        $appareillage18 = new Appareillages();
        $appareillage18->setTitreApp('Impression moulage Mini');
        $appareillage18->setFamilleApp('met');
        $appareillage18->setImgApp('http://www.neo3d.fr/imgbase/met/0000met0001.jpg');
        $appareillage18->setCommentairesApp('Imprimer le moulage au plus court');
        $appareillage18->setCompteurApp(0);
        $appareillage18->setInfoComLaboApp(' ');
        $appareillage18->setInfoComCabApp(' ');

        $manager->persist($appareillage18);
        $manager->flush();



        $appareillage19 = new Appareillages();
        $appareillage19->setTitreApp('Impression du Moulage d\'étude');
        $appareillage19->setFamilleApp('met');
        $appareillage19->setImgApp('http://www.neo3d.fr/imgbase/met/0000met0002.jpg');
        $appareillage19->setCommentairesApp('Imprimer le moulage d\'étude');
        $appareillage19->setCompteurApp(0);
        $appareillage19->setInfoComLaboApp(' ');
        $appareillage19->setInfoComCabApp(' ');

        $manager->persist($appareillage19);
        $manager->flush();



        $appareillage20 = new Appareillages();
        $appareillage20->setTitreApp('Moulage d\'étude 3D');
        $appareillage20->setFamilleApp('met');
        $appareillage20->setImgApp('http://www.neo3d.fr/imgbase/met/0000met0003.jpg');
        $appareillage20->setCommentairesApp('Réaliser un moulage virtuel');
        $appareillage20->setCompteurApp(0);
        $appareillage20->setInfoComLaboApp(' ');
        $appareillage20->setInfoComCabApp(' ');

        $manager->persist($appareillage20);
        $manager->flush();
    }
}