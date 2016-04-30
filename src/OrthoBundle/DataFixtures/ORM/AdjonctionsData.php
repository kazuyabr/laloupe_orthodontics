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































    }
}