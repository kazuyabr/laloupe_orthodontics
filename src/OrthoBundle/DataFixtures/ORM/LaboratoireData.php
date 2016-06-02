<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Laboratoire;

class LaboratoireData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $laboratoire1 = new Laboratoire();
        $laboratoire1->setUsername("laboratoire1");
        $laboratoire1->setPlainPassword("laboratoire1");
        $laboratoire1->setEnabled(true);
        $laboratoire1->setEmail("laboratoire@gmail.com");
        $laboratoire1->setRoles(array('ROLE_LABORATOIRE'));
        $laboratoire1->setNomLabo("Arseus Lab Site Colmar");
        $laboratoire1->setAdresseLabo("4 rue Emile Schwoerer");
        $laboratoire1->setCodepostalLabo("68000");
        $laboratoire1->setVilleLabo("Colmar");
        $laboratoire1->setMailLabo("contact.colmar@arseus-lab.fr");
        $laboratoire1->setTelephoneLabo("03.89.20.25.10");
        $manager->persist($laboratoire1);

        $laboratoire2 = new Laboratoire();
        $laboratoire2->setUsername("Superadmin");
        $laboratoire2->setPlainPassword("Superadmin");
        $laboratoire2->setEnabled(true);
        $laboratoire2->setEmail("superadmin@gmail.com");
        $laboratoire2->setRoles(array('ROLE_SUPER_ADMIN'));
        $laboratoire2->setNomLabo("Arseus Lab Site Colmar");
        $laboratoire2->setAdresseLabo("4 rue Emile Schwoerer");
        $laboratoire2->setCodepostalLabo("68000");
        $laboratoire2->setVilleLabo("Colmar");
        $laboratoire2->setMailLabo("contact.colmar@arseus-lab.fr");
        $laboratoire2->setTelephoneLabo("03.89.20.25.10");
        $manager->persist($laboratoire2);

        $manager->flush();

        $this->addReference('laboratoire1', $laboratoire1);
    }

    public function getOrder()
    {
        return 1;
    }
}

