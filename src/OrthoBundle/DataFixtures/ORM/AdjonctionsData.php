<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Adjonctions;

class AdjonctionsData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $adjonction1 = new Adjonctions();
        $adjonction1->setTitreAdj('Ressort Poussoir');
        $adjonction1->setFamilleAdj('adj');
        $adjonction1->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0001.jpg');
        $adjonction1->setCommentairesAdj('Ajouter ressort poussoir sur');
        $adjonction1->setCompteurAdj(0);
        $adjonction1->setInfoComLaboAdj('');
        $adjonction1->setInfoComCabAdj('');

        $manager->persist($adjonction1);
        $manager->flush();



        $adjonction2 = new Adjonctions();
        $adjonction2->setTitreAdj('Ressort Fouet');
        $adjonction2->setFamilleAdj('adj');
        $adjonction2->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0002.jpg');
        $adjonction2->setCommentairesAdj('Ajouter ressort fouet');
        $adjonction2->setCompteurAdj(0);
        $adjonction2->setInfoComLaboAdj('');
        $adjonction2->setInfoComCabAdj('');

        $manager->persist($adjonction2);
        $manager->flush();



        $adjonction3 = new Adjonctions();
        $adjonction3->setTitreAdj('Ressort Mésialeur');
        $adjonction3->setFamilleAdj('adj');
        $adjonction3->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0003.jpg');
        $adjonction3->setCommentairesAdj('Ajouter ressort pour mésialer');
        $adjonction3->setCompteurAdj(0);
        $adjonction3->setInfoComLaboAdj('');
        $adjonction3->setInfoComCabAdj('');

        $manager->persist($adjonction3);
        $manager->flush();



        $adjonction4 = new Adjonctions();
        $adjonction4->setTitreAdj('Vérin Médian');
        $adjonction4->setFamilleAdj('adj');
        $adjonction4->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0004.jpg');
        $adjonction4->setCommentairesAdj('AJouter vérin médian');
        $adjonction4->setCompteurAdj(0);
        $adjonction4->setInfoComLaboAdj('Offre spéciale sur vérin Lewa');
        $adjonction4->setInfoComCabAdj('');

        $manager->persist($adjonction4);
        $manager->flush();



        $adjonction5 = new Adjonctions();
        $adjonction5->setTitreAdj('Vérin antérieur');
        $adjonction5->setFamilleAdj('adj');
        $adjonction5->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0005.jpg');
        $adjonction5->setCommentairesAdj('Ajouter vérin antérieur');
        $adjonction5->setCompteurAdj(0);
        $adjonction5->setInfoComLaboAdj('Offre spéciale sur vérin Lewa');
        $adjonction5->setInfoComCabAdj('');

        $manager->persist($adjonction5);
        $manager->flush();



        $adjonction6 = new Adjonctions();
        $adjonction6->setTitreAdj('Vérin tridirectionnel');
        $adjonction6->setFamilleAdj('adj');
        $adjonction6->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0006.jpg');
        $adjonction6->setCommentairesAdj('Ajouter vérin tridirectionnel');
        $adjonction6->setCompteurAdj(0);
        $adjonction6->setInfoComLaboAdj('Offre spéciale sur vérin Lewa');
        $adjonction6->setInfoComCabAdj('');

        $manager->persist($adjonction6);
        $manager->flush();



        $adjonction7 = new Adjonctions();
        $adjonction7->setTitreAdj('Pistes molaires');
        $adjonction7->setFamilleAdj('adj');
        $adjonction7->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0007.jpg');
        $adjonction7->setCommentairesAdj('Ajouter pistes molaires');
        $adjonction7->setCompteurAdj(0);
        $adjonction7->setInfoComLaboAdj('');
        $adjonction7->setInfoComCabAdj('');

        $manager->persist($adjonction7);
        $manager->flush();



        $adjonction8 = new Adjonctions();
        $adjonction8->setTitreAdj('PRI');
        $adjonction8->setFamilleAdj('adj');
        $adjonction8->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0008.jpg');
        $adjonction8->setCommentairesAdj('Ajouter un Plan Rétro Actif');
        $adjonction8->setCompteurAdj(0);
        $adjonction8->setInfoComLaboAdj('');
        $adjonction8->setInfoComCabAdj('');

        $manager->persist($adjonction8);
        $manager->flush();



        $adjonction9 = new Adjonctions();
        $adjonction9->setTitreAdj('Bandeau vesibulaire');
        $adjonction9->setFamilleAdj('adj');
        $adjonction9->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0009.jpg');
        $adjonction9->setCommentairesAdj('Ajouter bandeau vesibulaire');
        $adjonction9->setCompteurAdj(0);
        $adjonction9->setInfoComLaboAdj('');
        $adjonction9->setInfoComCabAdj('');

        $manager->persist($adjonction9);
        $manager->flush();



        $adjonction10 = new Adjonctions();
        $adjonction10->setTitreAdj('Arc Circonférentiel');
        $adjonction10->setFamilleAdj('adj');
        $adjonction10->setImgAdj('http://www.neo3d.fr/imgbase/adj/0000adj0010.jpg');
        $adjonction10->setCommentairesAdj('Ajouter un Arc circonférentiel');
        $adjonction10->setCompteurAdj(0);
        $adjonction10->setInfoComLaboAdj('');
        $adjonction10->setInfoComCabAdj('');

        $manager->persist($adjonction10);
        $manager->flush();



        $adjonction11 = new Adjonctions();
        $adjonction11->setTitreAdj('Ressort TMA');
        $adjonction11->setFamilleAdj('adj');
        $adjonction11->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction11->setCommentairesAdj('Ajouter un ressort TMA');
        $adjonction11->setCompteurAdj(0);
        $adjonction11->setInfoComLaboAdj('');
        $adjonction11->setInfoComCabAdj('');

        $manager->persist($adjonction11);
        $manager->flush();



        $adjonction12 = new Adjonctions();
        $adjonction12->setTitreAdj('Vérin sectoriel');
        $adjonction12->setFamilleAdj('adj');
        $adjonction12->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction12->setCommentairesAdj('Ajouter un Vérin Sectoriel pour');
        $adjonction12->setCompteurAdj(0);
        $adjonction12->setInfoComLaboAdj('');
        $adjonction12->setInfoComCabAdj('');

        $manager->persist($adjonction12);
        $manager->flush();



        $adjonction13 = new Adjonctions();
        $adjonction13->setTitreAdj('Plan général');
        $adjonction13->setFamilleAdj('adj');
        $adjonction13->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction13->setCommentairesAdj('Ajouter un Plan général');
        $adjonction13->setCompteurAdj(0);
        $adjonction13->setInfoComLaboAdj('');
        $adjonction13->setInfoComCabAdj('');

        $manager->persist($adjonction13);
        $manager->flush();



        $adjonction14 = new Adjonctions();
        $adjonction14->setTitreAdj("Arc d'Eschler");
        $adjonction14->setFamilleAdj('adj');
        $adjonction14->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction14->setCommentairesAdj("Ajouter un arc d'Eschler");
        $adjonction14->setCompteurAdj(0);
        $adjonction14->setInfoComLaboAdj('');
        $adjonction14->setInfoComCabAdj('');

        $manager->persist($adjonction14);
        $manager->flush();



        $adjonction15 = new Adjonctions();
        $adjonction15->setTitreAdj('Boucle de Coffin');
        $adjonction15->setFamilleAdj('adj');
        $adjonction15->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction15->setCommentairesAdj('Ajouer une boucle de Coffin');
        $adjonction15->setCompteurAdj(0);
        $adjonction15->setInfoComLaboAdj('');
        $adjonction15->setInfoComCabAdj('');

        $manager->persist($adjonction15);
        $manager->flush();



        $adjonction16 = new Adjonctions();
        $adjonction16->setTitreAdj('Dent prothétique');
        $adjonction16->setFamilleAdj('adj');
        $adjonction16->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction16->setCommentairesAdj('Ajouter une dent prothétique  - teinte');
        $adjonction16->setCompteurAdj(0);
        $adjonction16->setInfoComLaboAdj('');
        $adjonction16->setInfoComCabAdj('');

        $manager->persist($adjonction16);
        $manager->flush();



        $adjonction17 = new Adjonctions();
        $adjonction17->setTitreAdj('Disjoncteur');
        $adjonction17->setFamilleAdj('adj');
        $adjonction17->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction17->setCommentairesAdj('Ajouter un Disjoncteur');
        $adjonction17->setCompteurAdj(0);
        $adjonction17->setInfoComLaboAdj('');
        $adjonction17->setInfoComCabAdj('');

        $manager->persist($adjonction17);
        $manager->flush();



        $adjonction18 = new Adjonctions();
        $adjonction18->setTitreAdj('Disjoncteur éventail');
        $adjonction18->setFamilleAdj('adj');
        $adjonction18->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction18->setCommentairesAdj('Ajouer un Disjoncteur éventail');
        $adjonction18->setCompteurAdj(0);
        $adjonction18->setInfoComLaboAdj('');
        $adjonction18->setInfoComCabAdj('');

        $manager->persist($adjonction18);
        $manager->flush();



        $adjonction19 = new Adjonctions();
        $adjonction19->setTitreAdj('Ecrans latéraux en résine');
        $adjonction19->setFamilleAdj('adj');
        $adjonction19->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction19->setCommentairesAdj('Ajouter Ecrans Lateraux en resine');
        $adjonction19->setCompteurAdj(0);
        $adjonction19->setInfoComLaboAdj('');
        $adjonction19->setInfoComCabAdj('');

        $manager->persist($adjonction19);
        $manager->flush();



        $adjonction20 = new Adjonctions();
        $adjonction20->setTitreAdj('Equiplan');
        $adjonction20->setFamilleAdj('adj');
        $adjonction20->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction20->setCommentairesAdj('Ajouer un Equiplan');
        $adjonction20->setCompteurAdj(0);
        $adjonction20->setInfoComLaboAdj('');
        $adjonction20->setInfoComCabAdj('');

        $manager->persist($adjonction20);
        $manager->flush();



        $adjonction21 = new Adjonctions();
        $adjonction21->setTitreAdj('Force extra orale');
        $adjonction21->setFamilleAdj('adj');
        $adjonction21->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction21->setCommentairesAdj('Ajouter Force extra Orale');
        $adjonction21->setCompteurAdj(0);
        $adjonction21->setInfoComLaboAdj('');
        $adjonction21->setInfoComCabAdj('');

        $manager->persist($adjonction21);
        $manager->flush();



        $adjonction22 = new Adjonctions();
        $adjonction22->setTitreAdj('Grille anti-langue  -  pouce');
        $adjonction22->setFamilleAdj('adj');
        $adjonction22->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction22->setCommentairesAdj('Ajouter Grille anti-langue  -  pouce');
        $adjonction22->setCompteurAdj(0);
        $adjonction22->setInfoComLaboAdj('');
        $adjonction22->setInfoComCabAdj('');

        $manager->persist($adjonction22);
        $manager->flush();



        $adjonction23 = new Adjonctions();
        $adjonction23->setTitreAdj('Perle de Tucat');
        $adjonction23->setFamilleAdj('adj');
        $adjonction23->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction23->setCommentairesAdj('Ajouter un Perle de Tucat');
        $adjonction23->setCompteurAdj(0);
        $adjonction23->setInfoComLaboAdj('');
        $adjonction23->setInfoComCabAdj('');

        $manager->persist($adjonction23);
        $manager->flush();



        $adjonction24 = new Adjonctions();
        $adjonction24->setTitreAdj('Pare-langue résine');
        $adjonction24->setFamilleAdj('adj');
        $adjonction24->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction24->setCommentairesAdj('Ajouter un Pare-langue résine');
        $adjonction24->setCompteurAdj(0);
        $adjonction24->setInfoComLaboAdj('');
        $adjonction24->setInfoComCabAdj('');

        $manager->persist($adjonction24);
        $manager->flush();



        $adjonction25 = new Adjonctions();
        $adjonction25->setTitreAdj('Vis poussoir');
        $adjonction25->setFamilleAdj('adj');
        $adjonction25->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction25->setCommentairesAdj('Ajouter Vis poussoir');
        $adjonction25->setCompteurAdj(0);
        $adjonction25->setInfoComLaboAdj('');
        $adjonction25->setInfoComCabAdj('');

        $manager->persist($adjonction25);
        $manager->flush();



        $adjonction26 = new Adjonctions();
        $adjonction26->setTitreAdj('Vérin éventail');
        $adjonction26->setFamilleAdj('adj');
        $adjonction26->setImgAdj('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction26->setCommentairesAdj('Ajouter vérin éventail');
        $adjonction26->setCompteurAdj(0);
        $adjonction26->setInfoComLaboAdj('');
        $adjonction26->setInfoComCabAdj('');

        $manager->persist($adjonction26);
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 1;
    }
}