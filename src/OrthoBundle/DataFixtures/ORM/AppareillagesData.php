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
        $appareillage1->setTitreApp('Arc Lingual soudé');
        $appareillage1->setFamilleApp('fix');
        $appareillage1->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0001.jpg');
        $appareillage1->setCommentairesApp('Réaliser un Arc lingual soudé s/ bagues');
        $appareillage1->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage1->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage1);
        



        $appareillage2 = new Appareillages();
        $appareillage2->setTitreApp('Arc de Nance soudé');
        $appareillage2->setFamilleApp('fix');
        $appareillage2->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0002.jpg');
        $appareillage2->setCommentairesApp('Réaliser Arc de Nance soudé s/ bagues');
        $appareillage2->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage2->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage2);
        



        $appareillage3 = new Appareillages();
        $appareillage3->setTitreApp('Arc Palatin soudé');
        $appareillage3->setFamilleApp('fix');
        $appareillage3->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0003.jpg');
        $appareillage3->setCommentairesApp('Réaliser Arc Palatin soudé s/ bagues');
        $appareillage3->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage3->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage3);
        



        $appareillage4 = new Appareillages();
        $appareillage4->setTitreApp('Arc Transpalatin soudé');
        $appareillage4->setFamilleApp('fix');
        $appareillage4->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0004.jpg');
        $appareillage4->setCommentairesApp('Réaliser un arc Transpalatin soudé s/ bagues');
        $appareillage4->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage4->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage4);
        



        $appareillage5 = new Appareillages();
        $appareillage5->setTitreApp('Arc NTP soudé');
        $appareillage5->setFamilleApp('fix');
        $appareillage5->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0005.jpg');
        $appareillage5->setCommentairesApp('Réaliser un Arc NTP soudé s/ bagues');
        $appareillage5->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage5->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage5);
        



        $appareillage6 = new Appareillages();
        $appareillage6->setTitreApp('Arc Lingual Idéal soudé');
        $appareillage6->setFamilleApp('fix');
        $appareillage6->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0006.jpg');
        $appareillage6->setCommentairesApp('Réaliser un Arc Lingual Idéal soudé s/ bagues');
        $appareillage6->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage6->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage6);
        



        $appareillage7 = new Appareillages();
        $appareillage7->setTitreApp('Arc double de Delaire');
        $appareillage7->setFamilleApp('fix');
        $appareillage7->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0007.jpg');
        $appareillage7->setCommentairesApp('Réaliser un Arc double de Delaire soudé');
        $appareillage7->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage7->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage7);
        



        $appareillage8 = new Appareillages();
        $appareillage8->setTitreApp('Quad Hélix soudé');
        $appareillage8->setFamilleApp('fix');
        $appareillage8->setImgApp('http://www.neo3d.fr/imgbase/fix/0000fix0008.jpg');
        $appareillage8->setCommentairesApp('Réaliser un Arc QH soudé s/ bagues');
        $appareillage8->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage8->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage8);
        



        $appareillage9 = new Appareillages();
        $appareillage9->setTitreApp('Arc Lingual amovible');
        $appareillage9->setFamilleApp('fix');
        $appareillage9->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage9->setCommentairesApp('Réaliser un Arc Lingual amovible');
        $appareillage9->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage9->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage9);
        



        $appareillage10 = new Appareillages();
        $appareillage10->setTitreApp('Arc de Nance amovible');
        $appareillage10->setFamilleApp('fix');
        $appareillage10->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage10->setCommentairesApp('Réaliser un Arc de Nance amovible');
        $appareillage10->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage10->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage10);
        



        $appareillage11 = new Appareillages();
        $appareillage11->setTitreApp('Arc Lingual idéal amovible');
        $appareillage11->setFamilleApp('fix');
        $appareillage11->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage11->setCommentairesApp('Réaliser un Arc Lingual idéal amovible');
        $appareillage11->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage11->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage11);
        



        $appareillage12 = new Appareillages();
        $appareillage12->setTitreApp('Arc Transpalatin amovible');
        $appareillage12->setFamilleApp('fix');
        $appareillage12->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage12->setCommentairesApp('Réaliser un Arc Transpalatin amovible');
        $appareillage12->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage12->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage12);
        



        $appareillage13 = new Appareillages();
        $appareillage13->setTitreApp('Quad Hélix amovible');
        $appareillage13->setFamilleApp('fix');
        $appareillage13->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage13->setCommentairesApp('Réaliser un Quad Hélix amovible');
        $appareillage13->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage13->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage13);
        



        $appareillage14 = new Appareillages();
        $appareillage14->setTitreApp('Grille anti-lanque soudée');
        $appareillage14->setFamilleApp('fix');
        $appareillage14->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage14->setCommentairesApp('Réaliser une grille anti-lanque soudée s/ bagues');
        $appareillage14->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage14->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage14);
        



        $appareillage15 = new Appareillages();
        $appareillage15->setTitreApp('Grille anti-pouce soudée');
        $appareillage15->setFamilleApp('fix');
        $appareillage15->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage15->setCommentairesApp('Réaliser une grille anti-pouce soudée s/ bagues');
        $appareillage15->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage15->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage15);
        



        $appareillage16 = new Appareillages();
        $appareillage16->setTitreApp('Boule de tucat');
        $appareillage16->setFamilleApp('fix');
        $appareillage16->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage16->setCommentairesApp('Réaliser une boule de tucat soudée s/ bagues');
        $appareillage16->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage16->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage16);
        



        $appareillage17 = new Appareillages();
        $appareillage17->setTitreApp('Bi-Hélix soudé');
        $appareillage17->setFamilleApp('fix');
        $appareillage17->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage17->setCommentairesApp('Réaliser un Bi-Hélix soudé sur bagues');
        $appareillage17->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage17->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage17);
        


        $appareillage18 = new Appareillages();
        $appareillage18->setTitreApp('Bi-Hélix amovible');
        $appareillage18->setFamilleApp('fix');
        $appareillage18->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage18->setCommentairesApp('Réaliser un Bi-Hélix amovible');
        $appareillage18->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage18->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage18);
        



        $appareillage19 = new Appareillages();
        $appareillage19->setTitreApp('Contention collée 2-2');
        $appareillage19->setFamilleApp('fix');
        $appareillage19->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage19->setCommentairesApp('Réaliser une contention collée de 2 à 2');
        $appareillage19->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage19->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage19);
        



        $appareillage20 = new Appareillages();
        $appareillage20->setTitreApp('Contention collée 3-3');
        $appareillage20->setFamilleApp('fix');
        $appareillage20->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage20->setCommentairesApp('Réaliser une contention collée de 3 à 3');
        $appareillage20->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage20->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage20);
        



        $appareillage21 = new Appareillages();
        $appareillage21->setTitreApp('Contention collée 4-4');
        $appareillage21->setFamilleApp('fix');
        $appareillage21->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage21->setCommentairesApp('Réaliser une contention collée de 4 à 4');
        $appareillage21->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage21->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage21);
        



        $appareillage22 = new Appareillages();
        $appareillage22->setTitreApp('Disjoncteur 4 bras');
        $appareillage22->setFamilleApp('fix');
        $appareillage22->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage22->setCommentairesApp('Réaliser un disjoncteur 4 bras');
        $appareillage22->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage22->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage22);
        



        $appareillage23 = new Appareillages();
        $appareillage23->setTitreApp('Disjoncteur 2 bras');
        $appareillage23->setFamilleApp('fix');
        $appareillage23->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage23->setCommentairesApp('Réaliser un disjoncteur 2 bras');
        $appareillage23->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage23->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage23);
        



        $appareillage24 = new Appareillages();
        $appareillage24->setTitreApp('Distal Jet');
        $appareillage24->setFamilleApp('fix');
        $appareillage24->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage24->setCommentairesApp('Réaliser un Distal Jet');
        $appareillage24->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage24->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage24);
        



        $appareillage25 = new Appareillages();
        $appareillage25->setTitreApp("Mainteneur d'espace");
        $appareillage25->setFamilleApp('fix');
        $appareillage25->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage25->setCommentairesApp("Réaliser un mainteneur d'espace soudé s/ bagues");
        $appareillage25->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage25->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage25);
        



        $appareillage26 = new Appareillages();
        $appareillage26->setTitreApp('PRI soudé');
        $appareillage26->setFamilleApp('fix');
        $appareillage26->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage26->setCommentairesApp('Réaliser un Plan Rétro Incisif soudé s/ bagues');
        $appareillage26->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage26->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage26);
        



        $appareillage27 = new Appareillages();
        $appareillage27->setTitreApp('PRI amovible');
        $appareillage27->setFamilleApp('fix');
        $appareillage27->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage27->setCommentairesApp('Réaliser un Plan Rétro Incisif amovible');
        $appareillage27->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage27->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage27);
        



        $appareillage28 = new Appareillages();
        $appareillage28->setTitreApp('Pendulum');
        $appareillage28->setFamilleApp('fix');
        $appareillage28->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage28->setCommentairesApp('Réaliser un pendulum');
        $appareillage28->setInfoComLaboApp('Fil 0.9 à -20% chez Dentaurum');
        $appareillage28->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage28);
        



        $appareillage29 = new Appareillages();
        $appareillage29->setTitreApp('Plaque Palatine');
        $appareillage29->setFamilleApp('mob');
        $appareillage29->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0001.jpg');
        $appareillage29->setCommentairesApp('Réaliser une Plaque Palatine');
        $appareillage29->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage29->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage29);
        



        $appareillage30 = new Appareillages();
        $appareillage30->setTitreApp('Plaque de Hawley');
        $appareillage30->setFamilleApp('mob');
        $appareillage30->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0002.jpg');
        $appareillage30->setCommentairesApp('Réaliser une Plaque de Hawley');
        $appareillage30->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage30->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage30);
        



        $appareillage31 = new Appareillages();
        $appareillage31->setTitreApp('Gouttière de Contention');
        $appareillage31->setFamilleApp('mob');
        $appareillage31->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0003.jpg');
        $appareillage31->setCommentairesApp('Réaliser une Gouttière de Contention');
        $appareillage31->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage31->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage31);
        



        $appareillage32 = new Appareillages();
        $appareillage32->setTitreApp('Plaque Mandibulaire');
        $appareillage32->setFamilleApp('mob');
        $appareillage32->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0004.jpg');
        $appareillage32->setCommentairesApp('Réaliser une Plaque Mandibulaire');
        $appareillage32->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage32->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage32);
        



        $appareillage33 = new Appareillages();
        $appareillage33->setTitreApp('Monobloc de Lautrou CL2');
        $appareillage33->setFamilleApp('mob');
        $appareillage33->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0005.jpg');
        $appareillage33->setCommentairesApp('Réaliser un monobloc de Lautrou Classe 2');
        $appareillage33->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage33->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage33);
        



        $appareillage34 = new Appareillages();
        $appareillage34->setTitreApp('Monobloc de Chabre CL2');
        $appareillage34->setFamilleApp('mob');
        $appareillage34->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0006.jpg');
        $appareillage34->setCommentairesApp('Réaliser un monobloc de Chabre Classe 2');
        $appareillage34->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage34->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage34);
        



        $appareillage35 = new Appareillages();
        $appareillage35->setTitreApp('Bielle de Herbst');
        $appareillage35->setFamilleApp('mob');
        $appareillage35->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0007.jpg');
        $appareillage35->setCommentairesApp('Réaliser une bielle de Herbst');
        $appareillage35->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage35->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage35);
        



        $appareillage36 = new Appareillages();
        $appareillage36->setTitreApp('Bielle de Tavernier');
        $appareillage36->setFamilleApp('mob');
        $appareillage36->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0008.jpg');
        $appareillage36->setCommentairesApp('Réaliser une bielle de Tavernier');
        $appareillage36->setInfoComLaboApp('Nouvelle résine chez LaboShop !');
        $appareillage36->setInfoComCabApp('Nouvelles bagues RMO slim');

        $manager->persist($appareillage36);
        



        $appareillage37 = new Appareillages();
        $appareillage37->setTitreApp('PUL 1');
        $appareillage37->setFamilleApp('mob');
        $appareillage37->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0009.jpg');
        $appareillage37->setCommentairesApp('Réaliser un PUL 1');
        $appareillage37->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage37->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage37);
        



        $appareillage38 = new Appareillages();
        $appareillage38->setTitreApp('PUL 2');
        $appareillage38->setFamilleApp('mob');
        $appareillage38->setImgApp('http://www.neo3d.fr/imgbase/mob/0000mob0010.jpg');
        $appareillage38->setCommentairesApp('Réalier un PUL 2');
        $appareillage38->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage38->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage38);
        



        $appareillage39 = new Appareillages();
        $appareillage39->setTitreApp('PUL 3');
        $appareillage39->setFamilleApp('mob');
        $appareillage39->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage39->setCommentairesApp('Réaliser un PUL 3');
        $appareillage39->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage39->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage39);
        



        $appareillage40 = new Appareillages();
        $appareillage40->setTitreApp('PUL W');
        $appareillage40->setFamilleApp('mob');
        $appareillage40->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage40->setCommentairesApp('Réaliser un PUL W');
        $appareillage40->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage40->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage40);
        



        $appareillage41 = new Appareillages();
        $appareillage41->setTitreApp('PUL de contention');
        $appareillage41->setFamilleApp('mob');
        $appareillage41->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage41->setCommentairesApp('Réaliser un PUL de contention');
        $appareillage41->setInfoComLaboApp('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage41->setInfoComCabApp('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage41);
        



        $appareillage42 = new Appareillages();
        $appareillage42->setTitreApp('Monobloc de Lautrou CL3');
        $appareillage42->setFamilleApp('mob');
        $appareillage42->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage42->setCommentairesApp('Réaliser un monobloc de Lautrou de Classe 3');
        $appareillage42->setInfoComLaboApp('');
        $appareillage42->setInfoComCabApp('');

        $manager->persist($appareillage42);
        



        $appareillage43 = new Appareillages();
        $appareillage43->setTitreApp('Monobloc de Chabre CL3');
        $appareillage43->setFamilleApp('mob');
        $appareillage43->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage43->setCommentairesApp('Réaliser un monobloc de Chabre de Classe 3');
        $appareillage43->setInfoComLaboApp('');
        $appareillage43->setInfoComCabApp('');

        $manager->persist($appareillage43);
        



        $appareillage44 = new Appareillages();
        $appareillage44->setTitreApp('Activateur CL2');
        $appareillage44->setFamilleApp('mob');
        $appareillage44->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage44->setCommentairesApp('Réaliser un Activateur de Classe 2');
        $appareillage44->setInfoComLaboApp('');
        $appareillage44->setInfoComCabApp('');

        $manager->persist($appareillage44);
        



        $appareillage45 = new Appareillages();
        $appareillage45->setTitreApp('Activateur CL3');
        $appareillage45->setFamilleApp('mob');
        $appareillage45->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage45->setCommentairesApp('Réaliser un Activateur de Classe 3');
        $appareillage45->setInfoComLaboApp('');
        $appareillage45->setInfoComCabApp('');

        $manager->persist($appareillage45);
        



        $appareillage46 = new Appareillages();
        $appareillage46->setTitreApp('Circonférentiel');
        $appareillage46->setFamilleApp('mob');
        $appareillage46->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage46->setCommentairesApp('Réaliser un circonférentiel');
        $appareillage46->setInfoComLaboApp('');
        $appareillage46->setInfoComCabApp('');

        $manager->persist($appareillage46);
        



        $appareillage47 = new Appareillages();
        $appareillage47->setTitreApp('3 Pièces de Château');
        $appareillage47->setFamilleApp('mob');
        $appareillage47->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage47->setCommentairesApp('Réaliser un 3 Pièces de Château');
        $appareillage47->setInfoComLaboApp('');
        $appareillage47->setInfoComCabApp('');

        $manager->persist($appareillage47);
        



        $appareillage48 = new Appareillages();
        $appareillage48->setTitreApp('Equiplan');
        $appareillage48->setFamilleApp('mob');
        $appareillage48->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage48->setCommentairesApp('Réaliser un Equiplan');
        $appareillage48->setInfoComLaboApp('');
        $appareillage48->setInfoComCabApp('');

        $manager->persist($appareillage48);
        



        $appareillage49 = new Appareillages();
        $appareillage49->setTitreApp('Gouttière de Herbst (Amoric)');
        $appareillage49->setFamilleApp('mob');
        $appareillage49->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage49->setCommentairesApp('Réaliser une Gouttière de Herbst (Amoric)');
        $appareillage49->setInfoComLaboApp('');
        $appareillage49->setInfoComCabApp('');

        $manager->persist($appareillage49);
        



        $appareillage50 = new Appareillages();
        $appareillage50->setTitreApp('Gouttières anti-ronflement');
        $appareillage50->setFamilleApp('mob');
        $appareillage50->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage50->setCommentairesApp('Réaliser des gouttières anti-ronflement');
        $appareillage50->setInfoComLaboApp('');
        $appareillage50->setInfoComCabApp('');

        $manager->persist($appareillage50);
        



        $appareillage51 = new Appareillages();
        $appareillage51->setTitreApp('Optimiseur cinématique');
        $appareillage51->setFamilleApp('mob');
        $appareillage51->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage51->setCommentairesApp('Réaliser un Optimiseur cinématique');
        $appareillage51->setInfoComLaboApp('');
        $appareillage51->setInfoComCabApp('');

        $manager->persist($appareillage51);
        



        $appareillage52 = new Appareillages();
        $appareillage52->setTitreApp('Plaque de Korn');
        $appareillage52->setFamilleApp('mob');
        $appareillage52->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage52->setCommentairesApp('Réaliser une Plaque de Korn');
        $appareillage52->setInfoComLaboApp('');
        $appareillage52->setInfoComCabApp('');

        $manager->persist($appareillage52);
        



        $appareillage53 = new Appareillages();
        $appareillage53->setTitreApp('Plaque de Tucat');
        $appareillage53->setFamilleApp('mob');
        $appareillage53->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage53->setCommentairesApp('Réaliser une Plaque de Tucat');
        $appareillage53->setInfoComLaboApp('');
        $appareillage53->setInfoComCabApp('');

        $manager->persist($appareillage53);
        



        $appareillage54 = new Appareillages();
        $appareillage54->setTitreApp('Positionneur');
        $appareillage54->setFamilleApp('mob');
        $appareillage54->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage54->setCommentairesApp('Réaliser un positionneur');
        $appareillage54->setInfoComLaboApp('');
        $appareillage54->setInfoComCabApp('');

        $manager->persist($appareillage54);
        



        $appareillage55 = new Appareillages();
        $appareillage55->setTitreApp('Pistes de Planas');
        $appareillage55->setFamilleApp('mob');
        $appareillage55->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage55->setCommentairesApp('Réaliser des Pistes de Planas');
        $appareillage55->setInfoComLaboApp('');
        $appareillage55->setInfoComCabApp('');

        $manager->persist($appareillage55);
        



        $appareillage56 = new Appareillages();
        $appareillage56->setTitreApp('Protège-Dents');
        $appareillage56->setFamilleApp('mob');
        $appareillage56->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage56->setCommentairesApp('Réaliser un Protège-Dents');
        $appareillage56->setInfoComLaboApp('');
        $appareillage56->setInfoComCabApp('');

        $manager->persist($appareillage56);
        



        $appareillage57 = new Appareillages();
        $appareillage57->setTitreApp('Spring Retainer');
        $appareillage57->setFamilleApp('mob');
        $appareillage57->setImgApp('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage57->setCommentairesApp('Réaliser un Spring Retainer');
        $appareillage57->setInfoComLaboApp('');
        $appareillage57->setInfoComCabApp('');

        $manager->persist($appareillage57);


        $manager->flush();
        
    }
}