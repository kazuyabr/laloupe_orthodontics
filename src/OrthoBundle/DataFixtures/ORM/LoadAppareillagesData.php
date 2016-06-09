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
        $appareillage1->setNom('Arc Lingual soudé');
        $appareillage1->setFamille('fix');
        $appareillage1->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0001.jpg');
        $appareillage1->setCommentaire('Réaliser un Arc lingual soudé s/ bagues');
        $appareillage1->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage1->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage1);

        $appareillage2 = new Appareillages();
        $appareillage2->setNom('Arc de Nance soudé');
        $appareillage2->setFamille('fix');
        $appareillage2->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0002.jpg');
        $appareillage2->setCommentaire('Réaliser Arc de Nance soudé s/ bagues');
        $appareillage2->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage2->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage2);

        $appareillage3 = new Appareillages();
        $appareillage3->setNom('Arc Palatin soudé');
        $appareillage3->setFamille('fix');
        $appareillage3->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0003.jpg');
        $appareillage3->setCommentaire('Réaliser Arc Palatin soudé s/ bagues');
        $appareillage3->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage3->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage3);

        $appareillage4 = new Appareillages();
        $appareillage4->setNom('Arc Transpalatin soudé');
        $appareillage4->setFamille('fix');
        $appareillage4->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0004.jpg');
        $appareillage4->setCommentaire('Réaliser un arc Transpalatin soudé s/ bagues');
        $appareillage4->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage4->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage4);

        $appareillage5 = new Appareillages();
        $appareillage5->setNom('Arc NTP soudé');
        $appareillage5->setFamille('fix');
        $appareillage5->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0005.jpg');
        $appareillage5->setCommentaire('Réaliser un Arc NTP soudé s/ bagues');
        $appareillage5->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage5->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage5);

        $appareillage6 = new Appareillages();
        $appareillage6->setNom('Arc Lingual Idéal soudé');
        $appareillage6->setFamille('fix');
        $appareillage6->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0006.jpg');
        $appareillage6->setCommentaire('Réaliser un Arc Lingual Idéal soudé s/ bagues');
        $appareillage6->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage6->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage6);

        $appareillage7 = new Appareillages();
        $appareillage7->setNom('Arc double de Delaire');
        $appareillage7->setFamille('fix');
        $appareillage7->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0007.jpg');
        $appareillage7->setCommentaire('Réaliser un Arc double de Delaire soudé');
        $appareillage7->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage7->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage7);

        $appareillage8 = new Appareillages();
        $appareillage8->setNom('Quad Hélix soudé');
        $appareillage8->setFamille('fix');
        $appareillage8->setImage('http://www.neo3d.fr/imgbase/fix/0000fix0008.jpg');
        $appareillage8->setCommentaire('Réaliser un Arc QH soudé s/ bagues');
        $appareillage8->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage8->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage8);

        $appareillage9 = new Appareillages();
        $appareillage9->setNom('Arc Lingual amovible');
        $appareillage9->setFamille('fix');
        $appareillage9->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage9->setCommentaire('Réaliser un Arc Lingual amovible');
        $appareillage9->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage9->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage9);
        
        $appareillage10 = new Appareillages();
        $appareillage10->setNom('Arc de Nance amovible');
        $appareillage10->setFamille('fix');
        $appareillage10->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage10->setCommentaire('Réaliser un Arc de Nance amovible');
        $appareillage10->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage10->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage10);

        $appareillage11 = new Appareillages();
        $appareillage11->setNom('Arc Lingual idéal amovible');
        $appareillage11->setFamille('fix');
        $appareillage11->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage11->setCommentaire('Réaliser un Arc Lingual idéal amovible');
        $appareillage11->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage11->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage11);

        $appareillage12 = new Appareillages();
        $appareillage12->setNom('Arc Transpalatin amovible');
        $appareillage12->setFamille('fix');
        $appareillage12->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage12->setCommentaire('Réaliser un Arc Transpalatin amovible');
        $appareillage12->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage12->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage12);

        $appareillage13 = new Appareillages();
        $appareillage13->setNom('Quad Hélix amovible');
        $appareillage13->setFamille('fix');
        $appareillage13->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage13->setCommentaire('Réaliser un Quad Hélix amovible');
        $appareillage13->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage13->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage13);

        $appareillage14 = new Appareillages();
        $appareillage14->setNom('Grille anti-lanque soudée');
        $appareillage14->setFamille('fix');
        $appareillage14->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage14->setCommentaire('Réaliser une grille anti-lanque soudée s/ bagues');
        $appareillage14->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage14->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage14);

        $appareillage15 = new Appareillages();
        $appareillage15->setNom('Grille anti-pouce soudée');
        $appareillage15->setFamille('fix');
        $appareillage15->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage15->setCommentaire('Réaliser une grille anti-pouce soudée s/ bagues');
        $appareillage15->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage15->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage15);

        $appareillage16 = new Appareillages();
        $appareillage16->setNom('Boule de tucat');
        $appareillage16->setFamille('fix');
        $appareillage16->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage16->setCommentaire('Réaliser une boule de tucat soudée s/ bagues');
        $appareillage16->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage16->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage16);

        $appareillage17 = new Appareillages();
        $appareillage17->setNom('Bi-Hélix soudé');
        $appareillage17->setFamille('fix');
        $appareillage17->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage17->setCommentaire('Réaliser un Bi-Hélix soudé sur bagues');
        $appareillage17->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage17->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage17);

        $appareillage18 = new Appareillages();
        $appareillage18->setNom('Bi-Hélix amovible');
        $appareillage18->setFamille('fix');
        $appareillage18->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage18->setCommentaire('Réaliser un Bi-Hélix amovible');
        $appareillage18->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage18->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage18);

        $appareillage19 = new Appareillages();
        $appareillage19->setNom('Contention collée 2-2');
        $appareillage19->setFamille('fix');
        $appareillage19->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage19->setCommentaire('Réaliser une contention collée de 2 à 2');
        $appareillage19->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage19->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage19);

        $appareillage20 = new Appareillages();
        $appareillage20->setNom('Contention collée 3-3');
        $appareillage20->setFamille('fix');
        $appareillage20->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage20->setCommentaire('Réaliser une contention collée de 3 à 3');
        $appareillage20->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage20->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage20);

        $appareillage21 = new Appareillages();
        $appareillage21->setNom('Contention collée 4-4');
        $appareillage21->setFamille('fix');
        $appareillage21->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage21->setCommentaire('Réaliser une contention collée de 4 à 4');
        $appareillage21->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage21->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage21);

        $appareillage22 = new Appareillages();
        $appareillage22->setNom('Disjoncteur 4 bras');
        $appareillage22->setFamille('fix');
        $appareillage22->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage22->setCommentaire('Réaliser un disjoncteur 4 bras');
        $appareillage22->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage22->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage22);

        $appareillage23 = new Appareillages();
        $appareillage23->setNom('Disjoncteur 2 bras');
        $appareillage23->setFamille('fix');
        $appareillage23->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage23->setCommentaire('Réaliser un disjoncteur 2 bras');
        $appareillage23->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage23->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage23);

        $appareillage24 = new Appareillages();
        $appareillage24->setNom('Distal Jet');
        $appareillage24->setFamille('fix');
        $appareillage24->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage24->setCommentaire('Réaliser un Distal Jet');
        $appareillage24->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage24->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage24);

        $appareillage25 = new Appareillages();
        $appareillage25->setNom("Mainteneur d'espace");
        $appareillage25->setFamille('fix');
        $appareillage25->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage25->setCommentaire("Réaliser un mainteneur d'espace soudé s/ bagues");
        $appareillage25->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage25->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage25);

        $appareillage26 = new Appareillages();
        $appareillage26->setNom('PRI soudé');
        $appareillage26->setFamille('fix');
        $appareillage26->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage26->setCommentaire('Réaliser un Plan Rétro Incisif soudé s/ bagues');
        $appareillage26->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage26->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage26);

        $appareillage27 = new Appareillages();
        $appareillage27->setNom('PRI amovible');
        $appareillage27->setFamille('fix');
        $appareillage27->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage27->setCommentaire('Réaliser un Plan Rétro Incisif amovible');
        $appareillage27->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage27->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage27);

        $appareillage28 = new Appareillages();
        $appareillage28->setNom('Pendulum');
        $appareillage28->setFamille('fix');
        $appareillage28->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage28->setCommentaire('Réaliser un pendulum');
        $appareillage28->setInfoLabo('Fil 0.9 à -20% chez Dentaurum');
        $appareillage28->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage28);

        $appareillage29 = new Appareillages();
        $appareillage29->setNom('Plaque Palatine');
        $appareillage29->setFamille('mob');
        $appareillage29->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0001.jpg');
        $appareillage29->setCommentaire('Réaliser une Plaque Palatine');
        $appareillage29->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage29->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage29);

        $appareillage30 = new Appareillages();
        $appareillage30->setNom('Plaque de Hawley');
        $appareillage30->setFamille('mob');
        $appareillage30->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0002.jpg');
        $appareillage30->setCommentaire('Réaliser une Plaque de Hawley');
        $appareillage30->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage30->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage30);
        
        $appareillage31 = new Appareillages();
        $appareillage31->setNom('Gouttière de Contention');
        $appareillage31->setFamille('mob');
        $appareillage31->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0003.jpg');
        $appareillage31->setCommentaire('Réaliser une Gouttière de Contention');
        $appareillage31->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage31->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage31);

        $appareillage32 = new Appareillages();
        $appareillage32->setNom('Plaque Mandibulaire');
        $appareillage32->setFamille('mob');
        $appareillage32->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0004.jpg');
        $appareillage32->setCommentaire('Réaliser une Plaque Mandibulaire');
        $appareillage32->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage32->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage32);

        $appareillage33 = new Appareillages();
        $appareillage33->setNom('Monobloc de Lautrou CL2');
        $appareillage33->setFamille('mob');
        $appareillage33->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0005.jpg');
        $appareillage33->setCommentaire('Réaliser un monobloc de Lautrou Classe 2');
        $appareillage33->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage33->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage33);

        $appareillage34 = new Appareillages();
        $appareillage34->setNom('Monobloc de Chabre CL2');
        $appareillage34->setFamille('mob');
        $appareillage34->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0006.jpg');
        $appareillage34->setCommentaire('Réaliser un monobloc de Chabre Classe 2');
        $appareillage34->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage34->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage34);

        $appareillage35 = new Appareillages();
        $appareillage35->setNom('Bielle de Herbst');
        $appareillage35->setFamille('mob');
        $appareillage35->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0007.jpg');
        $appareillage35->setCommentaire('Réaliser une bielle de Herbst');
        $appareillage35->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage35->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage35);

        $appareillage36 = new Appareillages();
        $appareillage36->setNom('Bielle de Tavernier');
        $appareillage36->setFamille('mob');
        $appareillage36->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0008.jpg');
        $appareillage36->setCommentaire('Réaliser une bielle de Tavernier');
        $appareillage36->setInfoLabo('Nouvelle résine chez LaboShop !');
        $appareillage36->setInfoCabinet('Nouvelles bagues RMO slim');

        $manager->persist($appareillage36);

        $appareillage37 = new Appareillages();
        $appareillage37->setNom('PUL 1');
        $appareillage37->setFamille('mob');
        $appareillage37->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0009.jpg');
        $appareillage37->setCommentaire('Réaliser un PUL 1');
        $appareillage37->setInfoLabo('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage37->setInfoCabinet('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage37);

        $appareillage38 = new Appareillages();
        $appareillage38->setNom('PUL 2');
        $appareillage38->setFamille('mob');
        $appareillage38->setImage('http://www.neo3d.fr/imgbase/mob/0000mob0010.jpg');
        $appareillage38->setCommentaire('Réalier un PUL 2');
        $appareillage38->setInfoLabo('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage38->setInfoCabinet('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage38);

        $appareillage39 = new Appareillages();
        $appareillage39->setNom('PUL 3');
        $appareillage39->setFamille('mob');
        $appareillage39->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage39->setCommentaire('Réaliser un PUL 3');
        $appareillage39->setInfoLabo('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage39->setInfoCabinet('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage39);

        $appareillage40 = new Appareillages();
        $appareillage40->setNom('PUL W');
        $appareillage40->setFamille('mob');
        $appareillage40->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage40->setCommentaire('Réaliser un PUL W');
        $appareillage40->setInfoLabo('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage40->setInfoCabinet('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage40);

        $appareillage41 = new Appareillages();
        $appareillage41->setNom('PUL de contention');
        $appareillage41->setFamille('mob');
        $appareillage41->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage41->setCommentaire('Réaliser un PUL de contention');
        $appareillage41->setInfoLabo('PUL -15 % jusqu\'au 30 Juin !');
        $appareillage41->setInfoCabinet('Formation PUL ! Places disponibles..');

        $manager->persist($appareillage41);

        $appareillage42 = new Appareillages();
        $appareillage42->setNom('Monobloc de Lautrou CL3');
        $appareillage42->setFamille('mob');
        $appareillage42->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage42->setCommentaire('Réaliser un monobloc de Lautrou de Classe 3');
        $appareillage42->setInfoLabo('');
        $appareillage42->setInfoCabinet('');

        $manager->persist($appareillage42);

        $appareillage43 = new Appareillages();
        $appareillage43->setNom('Monobloc de Chabre CL3');
        $appareillage43->setFamille('mob');
        $appareillage43->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage43->setCommentaire('Réaliser un monobloc de Chabre de Classe 3');
        $appareillage43->setInfoLabo('');
        $appareillage43->setInfoCabinet('');

        $manager->persist($appareillage43);

        $appareillage44 = new Appareillages();
        $appareillage44->setNom('Activateur CL2');
        $appareillage44->setFamille('mob');
        $appareillage44->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage44->setCommentaire('Réaliser un Activateur de Classe 2');
        $appareillage44->setInfoLabo('');
        $appareillage44->setInfoCabinet('');

        $manager->persist($appareillage44);

        $appareillage45 = new Appareillages();
        $appareillage45->setNom('Activateur CL3');
        $appareillage45->setFamille('mob');
        $appareillage45->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage45->setCommentaire('Réaliser un Activateur de Classe 3');
        $appareillage45->setInfoLabo('');
        $appareillage45->setInfoCabinet('');

        $manager->persist($appareillage45);

        $appareillage46 = new Appareillages();
        $appareillage46->setNom('Circonférentiel');
        $appareillage46->setFamille('mob');
        $appareillage46->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage46->setCommentaire('Réaliser un circonférentiel');
        $appareillage46->setInfoLabo('');
        $appareillage46->setInfoCabinet('');

        $manager->persist($appareillage46);

        $appareillage47 = new Appareillages();
        $appareillage47->setNom('3 Pièces de Château');
        $appareillage47->setFamille('mob');
        $appareillage47->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage47->setCommentaire('Réaliser un 3 Pièces de Château');
        $appareillage47->setInfoLabo('');
        $appareillage47->setInfoCabinet('');

        $manager->persist($appareillage47);

        $appareillage48 = new Appareillages();
        $appareillage48->setNom('Equiplan');
        $appareillage48->setFamille('mob');
        $appareillage48->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage48->setCommentaire('Réaliser un Equiplan');
        $appareillage48->setInfoLabo('');
        $appareillage48->setInfoCabinet('');

        $manager->persist($appareillage48);

        $appareillage49 = new Appareillages();
        $appareillage49->setNom('Gouttière de Herbst (Amoric)');
        $appareillage49->setFamille('mob');
        $appareillage49->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage49->setCommentaire('Réaliser une Gouttière de Herbst (Amoric)');
        $appareillage49->setInfoLabo('');
        $appareillage49->setInfoCabinet('');

        $manager->persist($appareillage49);

        $appareillage50 = new Appareillages();
        $appareillage50->setNom('Gouttières anti-ronflement');
        $appareillage50->setFamille('mob');
        $appareillage50->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage50->setCommentaire('Réaliser des gouttières anti-ronflement');
        $appareillage50->setInfoLabo('');
        $appareillage50->setInfoCabinet('');

        $manager->persist($appareillage50);

        $appareillage51 = new Appareillages();
        $appareillage51->setNom('Optimiseur cinématique');
        $appareillage51->setFamille('mob');
        $appareillage51->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage51->setCommentaire('Réaliser un Optimiseur cinématique');
        $appareillage51->setInfoLabo('');
        $appareillage51->setInfoCabinet('');

        $manager->persist($appareillage51);

        $appareillage52 = new Appareillages();
        $appareillage52->setNom('Plaque de Korn');
        $appareillage52->setFamille('mob');
        $appareillage52->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage52->setCommentaire('Réaliser une Plaque de Korn');
        $appareillage52->setInfoLabo('');
        $appareillage52->setInfoCabinet('');

        $manager->persist($appareillage52);

        $appareillage53 = new Appareillages();
        $appareillage53->setNom('Plaque de Tucat');
        $appareillage53->setFamille('mob');
        $appareillage53->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage53->setCommentaire('Réaliser une Plaque de Tucat');
        $appareillage53->setInfoLabo('');
        $appareillage53->setInfoCabinet('');

        $manager->persist($appareillage53);

        $appareillage54 = new Appareillages();
        $appareillage54->setNom('Positionneur');
        $appareillage54->setFamille('mob');
        $appareillage54->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage54->setCommentaire('Réaliser un positionneur');
        $appareillage54->setInfoLabo('');
        $appareillage54->setInfoCabinet('');

        $manager->persist($appareillage54);

        $appareillage55 = new Appareillages();
        $appareillage55->setNom('Pistes de Planas');
        $appareillage55->setFamille('mob');
        $appareillage55->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage55->setCommentaire('Réaliser des Pistes de Planas');
        $appareillage55->setInfoLabo('');
        $appareillage55->setInfoCabinet('');

        $manager->persist($appareillage55);

        $appareillage56 = new Appareillages();
        $appareillage56->setNom('Protège-Dents');
        $appareillage56->setFamille('mob');
        $appareillage56->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage56->setCommentaire('Réaliser un Protège-Dents');
        $appareillage56->setInfoLabo('');
        $appareillage56->setInfoCabinet('');

        $manager->persist($appareillage56);

        $appareillage57 = new Appareillages();
        $appareillage57->setNom('Spring Retainer');
        $appareillage57->setFamille('mob');
        $appareillage57->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $appareillage57->setCommentaire('Réaliser un Spring Retainer');
        $appareillage57->setInfoLabo('');
        $appareillage57->setInfoCabinet('');

        $manager->persist($appareillage57);
        
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}