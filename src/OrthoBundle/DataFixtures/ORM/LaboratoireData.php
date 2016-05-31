<?php

namespace OrthoBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Laboratoire;

class LaboratoireData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $laboratoire1 = new Laboratoire();
        $laboratoire1->setNomLabo("Arseus Lab Site Colmar");
        $laboratoire1->setAdresseLabo("4 rue Emile Schwoerer");
        $laboratoire1->setCodepostalLabo("68000");
        $laboratoire1->setVilleLabo("Colmar");
        $laboratoire1->setMailLabo("contact.colmar@arseus-lab.fr");
        $laboratoire1->setTelephoneLabo("03.89.20.25.10");
        $manager->persist($laboratoire1);

        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }
}

