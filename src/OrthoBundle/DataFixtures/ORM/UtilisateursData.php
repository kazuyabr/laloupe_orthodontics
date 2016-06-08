<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OrthoBundle\Entity\Utilisateurs;

class UtlisateursData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $superAdminCredentials = new Utilisateurs();
        $superAdminCredentials->setUsername('Superadmin');
        $superAdminCredentials->setPlainPassword('Superadmin');
        $superAdminCredentials->setCategorie($this->getReference('SuperAdmin'));
        $superAdminCredentials->setEnabled(true);
        $superAdminCredentials->setEmail('Superadmin@gmail.com');
        $superAdminCredentials->setRoles(array('ROLE_SUPER_ADMIN'));
        $superAdminCredentials->setNom('Néo 3D');
        $superAdminCredentials->setAdresse('5 Allée des Atlantes');
        $superAdminCredentials->setCodePostal('28000');
        $superAdminCredentials->setVille('Chartres');
        $superAdminCredentials->setTelephone('02.37.90.61.84');
        $superAdminCredentials->setAdresseFacturation('blabla');
        $superAdminCredentials->setCodePostalFacturation('blabla');
        $superAdminCredentials->setVilleFacturation('blabla');
        $superAdminCredentials->setTelephoneFacturation('0987654321');
        
        $manager->persist($superAdminCredentials);
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}