<?php

namespace OrthoBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Cabinetsdentaires;


class CabinetsdentairesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cabinet1 = new Cabinetsdentaires();
        $cabinet1->setUsername("SuperAdmin");
        $cabinet1->setPlainPassword("SuperAdmin");
        $cabinet1->setEnabled(true);
        $cabinet1->setEmail("SuperAdmin@gmail.com");
        $cabinet1->setRoles(array('ROLE_SUPER_ADMIN'));
        $cabinet1->setFidLabo($this->getReference('laboratoire1'));
        $cabinet1->setNomCab("Néo 3D");
        $cabinet1->setAdresseCab("5 Allée des Atlantes");
        $cabinet1->setCodepostalCab("28000");
        $cabinet1->setVilleCab("Chartres");
        $cabinet1->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet1);
        
        $cabinet2 = new Cabinetsdentaires();
        $cabinet2->setUsername("TeamNéo3d");
        $cabinet2->setPlainPassword("Neo3d");
        $cabinet2->setEnabled(true);
        $cabinet2->setEmail("teamneo3D@gmail.com");
        $cabinet2->setRoles(array('ROLE_TEAMNEO'));
        $cabinet2->setFidLabo($this->getReference('laboratoire1'));
        $cabinet2->setNomCab("Néo 3D");
        $cabinet2->setAdresseCab("5 Allée des Atlantes");
        $cabinet2->setCodepostalCab("28000");
        $cabinet2->setVilleCab("Chartres");$cabinet2->setCodepostalCab("28000");
        $cabinet2->setVilleCab("Chartres");
        $cabinet2->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet2);
        
        
        $cabinet3 =  new Cabinetsdentaires();
        $cabinet3->setUsername("Laboratoire1");
        $cabinet3->setPlainPassword("Laboratoire1");
        $cabinet3->setEnabled(true);
        $cabinet3->setEmail("Laboratoire@gmail.com");
        $cabinet3->setRoles(array('ROLE_LABORATOIRE'));
        $cabinet3->setFidLabo($this->getReference(('laboratoire1')));
        $cabinet3->setNomCab("Laboratoire Néo 3D");
        $cabinet3->setAdresseCab("5 Allée des Atlantes");
        $cabinet3->setCodepostalCab("28000");
        $cabinet3->setVilleCab("Chartres");
        $cabinet3->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet3);

        $cabinet4 = new Cabinetsdentaires();
        $cabinet4->setUsername("Cabinet1");
        $cabinet4->setPlainPassword("Cabinet1");
        $cabinet4->setEnabled(true);
        $cabinet4->setEmail("Cabinet@gmail.com");
        $cabinet4->setRoles(array('ROLE_CABINET'));
        $cabinet4->setFidLabo($this->getReference(('laboratoire1')));
        $cabinet4->setNomCab("Cabinet Néo 3D");
        $cabinet4->setAdresseCab("5 Allée des Atlantes");
        $cabinet4->setCodepostalCab("28000");
        $cabinet4->setVilleCab("Chartres");
        $cabinet4->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet4);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}

