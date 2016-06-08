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
        $adjonction1->setNom('Ressort Poussoir');
        $adjonction1->setFamille('adj');
        $adjonction1->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0001.jpg');
        $adjonction1->setCommentaire('Ajouter ressort poussoir sur');
        $adjonction1->setInfoLabo('');
        $adjonction1->setInfoCabinet('');

        $manager->persist($adjonction1);
        
        $adjonction2 = new Adjonctions();
        $adjonction2->setNom('Ressort Fouet');
        $adjonction2->setFamille('adj');
        $adjonction2->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0002.jpg');
        $adjonction2->setCommentaire('Ajouter ressort fouet');
        $adjonction2->setInfoLabo('');
        $adjonction2->setInfoCabinet('');

        $manager->persist($adjonction2);
        
        $adjonction3 = new Adjonctions();
        $adjonction3->setNom('Ressort Mésialeur');
        $adjonction3->setFamille('adj');
        $adjonction3->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0003.jpg');
        $adjonction3->setCommentaire('Ajouter ressort pour mésialer');
        $adjonction3->setInfoLabo('');
        $adjonction3->setInfoCabinet('');

        $manager->persist($adjonction3);
        
        $adjonction4 = new Adjonctions();
        $adjonction4->setNom('Vérin Médian');
        $adjonction4->setFamille('adj');
        $adjonction4->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0004.jpg');
        $adjonction4->setCommentaire('AJouter vérin médian');
        $adjonction4->setInfoLabo('Offre spéciale sur vérin Lewa');
        $adjonction4->setInfoCabinet('');

        $manager->persist($adjonction4);
        
        $adjonction5 = new Adjonctions();
        $adjonction5->setNom('Vérin antérieur');
        $adjonction5->setFamille('adj');
        $adjonction5->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0005.jpg');
        $adjonction5->setCommentaire('Ajouter vérin antérieur');
        $adjonction5->setInfoLabo('Offre spéciale sur vérin Lewa');
        $adjonction5->setInfoCabinet('');

        $manager->persist($adjonction5);
        
        $adjonction6 = new Adjonctions();
        $adjonction6->setNom('Vérin tridirectionnel');
        $adjonction6->setFamille('adj');
        $adjonction6->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0006.jpg');
        $adjonction6->setCommentaire('Ajouter vérin tridirectionnel');
        $adjonction6->setInfoLabo('Offre spéciale sur vérin Lewa');
        $adjonction6->setInfoCabinet('');

        $manager->persist($adjonction6);

        $adjonction7 = new Adjonctions();
        $adjonction7->setNom('Pistes molaires');
        $adjonction7->setFamille('adj');
        $adjonction7->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0007.jpg');
        $adjonction7->setCommentaire('Ajouter pistes molaires');
        $adjonction7->setInfoLabo('');
        $adjonction7->setInfoCabinet('');

        $manager->persist($adjonction7);

        $adjonction8 = new Adjonctions();
        $adjonction8->setNom('PRI');
        $adjonction8->setFamille('adj');
        $adjonction8->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0008.jpg');
        $adjonction8->setCommentaire('Ajouter un Plan Rétro Actif');
        $adjonction8->setInfoLabo('');
        $adjonction8->setInfoCabinet('');

        $manager->persist($adjonction8);
        
        $adjonction9 = new Adjonctions();
        $adjonction9->setNom('Bandeau vesibulaire');
        $adjonction9->setFamille('adj');
        $adjonction9->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0009.jpg');
        $adjonction9->setCommentaire('Ajouter bandeau vesibulaire');
        $adjonction9->setInfoLabo('');
        $adjonction9->setInfoCabinet('');

        $manager->persist($adjonction9);
        
        $adjonction10 = new Adjonctions();
        $adjonction10->setNom('Arc Circonférentiel');
        $adjonction10->setFamille('adj');
        $adjonction10->setImage('http://www.neo3d.fr/imgbase/adj/0000adj0010.jpg');
        $adjonction10->setCommentaire('Ajouter un Arc circonférentiel');
        $adjonction10->setInfoLabo('');
        $adjonction10->setInfoCabinet('');

        $manager->persist($adjonction10);
        
        $adjonction11 = new Adjonctions();
        $adjonction11->setNom('Ressort TMA');
        $adjonction11->setFamille('adj');
        $adjonction11->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction11->setCommentaire('Ajouter un ressort TMA');
        $adjonction11->setInfoLabo('');
        $adjonction11->setInfoCabinet('');

        $manager->persist($adjonction11);
        
        $adjonction12 = new Adjonctions();
        $adjonction12->setNom('Vérin sectoriel');
        $adjonction12->setFamille('adj');
        $adjonction12->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction12->setCommentaire('Ajouter un Vérin Sectoriel pour');
        $adjonction12->setInfoLabo('');
        $adjonction12->setInfoCabinet('');

        $manager->persist($adjonction12);
        
        $adjonction13 = new Adjonctions();
        $adjonction13->setNom('Plan général');
        $adjonction13->setFamille('adj');
        $adjonction13->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction13->setCommentaire('Ajouter un Plan général');
        $adjonction13->setInfoLabo('');
        $adjonction13->setInfoCabinet('');

        $manager->persist($adjonction13);

        $adjonction14 = new Adjonctions();
        $adjonction14->setNom("Arc d'Eschler");
        $adjonction14->setFamille('adj');
        $adjonction14->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction14->setCommentaire("Ajouter un arc d'Eschler");
        $adjonction14->setInfoLabo('');
        $adjonction14->setInfoCabinet('');

        $manager->persist($adjonction14);
        
        $adjonction15 = new Adjonctions();
        $adjonction15->setNom('Boucle de Coffin');
        $adjonction15->setFamille('adj');
        $adjonction15->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction15->setCommentaire('Ajouer une boucle de Coffin');
        $adjonction15->setInfoLabo('');
        $adjonction15->setInfoCabinet('');

        $manager->persist($adjonction15);
        
        $adjonction16 = new Adjonctions();
        $adjonction16->setNom('Dent prothétique');
        $adjonction16->setFamille('adj');
        $adjonction16->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction16->setCommentaire('Ajouter une dent prothétique  - teinte');
        $adjonction16->setInfoLabo('');
        $adjonction16->setInfoCabinet('');

        $manager->persist($adjonction16);

        $adjonction17 = new Adjonctions();
        $adjonction17->setNom('Disjoncteur');
        $adjonction17->setFamille('adj');
        $adjonction17->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction17->setCommentaire('Ajouter un Disjoncteur');
        $adjonction17->setInfoLabo('');
        $adjonction17->setInfoCabinet('');

        $manager->persist($adjonction17);

        $adjonction18 = new Adjonctions();
        $adjonction18->setNom('Disjoncteur éventail');
        $adjonction18->setFamille('adj');
        $adjonction18->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction18->setCommentaire('Ajouer un Disjoncteur éventail');
        $adjonction18->setInfoLabo('');
        $adjonction18->setInfoCabinet('');

        $manager->persist($adjonction18);

        $adjonction19 = new Adjonctions();
        $adjonction19->setNom('Ecrans latéraux en résine');
        $adjonction19->setFamille('adj');
        $adjonction19->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction19->setCommentaire('Ajouter Ecrans Lateraux en resine');
        $adjonction19->setInfoLabo('');
        $adjonction19->setInfoCabinet('');

        $manager->persist($adjonction19);

        $adjonction20 = new Adjonctions();
        $adjonction20->setNom('Equiplan');
        $adjonction20->setFamille('adj');
        $adjonction20->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction20->setCommentaire('Ajouer un Equiplan');
        $adjonction20->setInfoLabo('');
        $adjonction20->setInfoCabinet('');

        $manager->persist($adjonction20);
        
        $adjonction21 = new Adjonctions();
        $adjonction21->setNom('Force extra orale');
        $adjonction21->setFamille('adj');
        $adjonction21->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction21->setCommentaire('Ajouter Force extra Orale');
        $adjonction21->setInfoLabo('');
        $adjonction21->setInfoCabinet('');

        $manager->persist($adjonction21);

        $adjonction22 = new Adjonctions();
        $adjonction22->setNom('Grille anti-langue  -  pouce');
        $adjonction22->setFamille('adj');
        $adjonction22->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction22->setCommentaire('Ajouter Grille anti-langue  -  pouce');
        $adjonction22->setInfoLabo('');
        $adjonction22->setInfoCabinet('');

        $manager->persist($adjonction22);

        $adjonction23 = new Adjonctions();
        $adjonction23->setNom('Perle de Tucat');
        $adjonction23->setFamille('adj');
        $adjonction23->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction23->setCommentaire('Ajouter un Perle de Tucat');
        $adjonction23->setInfoLabo('');
        $adjonction23->setInfoCabinet('');

        $manager->persist($adjonction23);
        
        $adjonction24 = new Adjonctions();
        $adjonction24->setNom('Pare-langue résine');
        $adjonction24->setFamille('adj');
        $adjonction24->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction24->setCommentaire('Ajouter un Pare-langue résine');
        $adjonction24->setInfoLabo('');
        $adjonction24->setInfoCabinet('');

        $manager->persist($adjonction24);
        
        $adjonction25 = new Adjonctions();
        $adjonction25->setNom('Vis poussoir');
        $adjonction25->setFamille('adj');
        $adjonction25->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction25->setCommentaire('Ajouter Vis poussoir');
        $adjonction25->setInfoLabo('');
        $adjonction25->setInfoCabinet('');

        $manager->persist($adjonction25);
        
        $adjonction26 = new Adjonctions();
        $adjonction26->setNom('Vérin éventail');
        $adjonction26->setFamille('adj');
        $adjonction26->setImage('http://www.neo3d.fr/imgbase/00000000.jpg');
        $adjonction26->setCommentaire('Ajouter vérin éventail');
        $adjonction26->setInfoLabo('');
        $adjonction26->setInfoCabinet('');

        $manager->persist($adjonction26);
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 1;
    }
}