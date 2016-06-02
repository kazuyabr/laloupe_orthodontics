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
        $cabinet1->setUsername("Cabinet");
        $cabinet1->setPlainPassword("Cabinet");
        $cabinet1->setEnabled(true);
        $cabinet1->setEmail("SuperAdmin@gmail.com");
        $cabinet1->setRoles(array('ROLE_CABINET'));
        $cabinet1->setFidLabo($this->getReference('laboratoire1'));
        $cabinet1->setNomCab("Néo 3D");
        $cabinet1->setAdresseCab("5 Allée des Atlantes");
        $cabinet1->setCodepostalCab("28000");
        $cabinet1->setVilleCab("Chartres");
        $cabinet1->setTelephoneCab("02.37.90.61.84");
        $manager->persist($cabinet1);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}

