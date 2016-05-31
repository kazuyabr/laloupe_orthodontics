<?php

namespace OrthoBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Cabinetsdentaires;

class CabinetsdentairesData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $cabinet1 = new Cabinetsdentaires();
        $cabinet1->setUsername("SuperAdmin");
        $cabinet1->setPlainPassword("SuperAdmin");
        $cabinet1->setEnabled(true);
        $cabinet1->setEmail("SuperAdmin@gmail.com");
        $cabinet1->setRoles(array('ROLE_ADMIN'));
        $cabinet1->setFidLabo(1);
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
        $cabinet2->setRoles(array('ROLE_USER'));
        $cabinet2->setFidLabo(1);
        $cabinet2->setNomCab("Néo 3D");
        $cabinet2->setAdresseCab("5 Allée des Atlantes");
        $cabinet2->setCodepostalCab("28000");
        $cabinet2->setVilleCab("Chartres");
        $cabinet2->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet2);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}

