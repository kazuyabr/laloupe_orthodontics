<?php

namespace OrthoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use OrthoBundle\Entity\CategorieUtilisateurs;


class CategorieUtilisateursData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new CategorieUtilisateurs();
        $categorie1->setCategorieUtilisateur('Cabinet Dentaire');

        $manager->persist($categorie1);
        
        $categorie2 = new CategorieUtilisateurs();
        $categorie2->setCategorieUtilisateur('Laboratoire');
        
        $manager->persist($categorie2);
        
        $categorie3 = new CategorieUtilisateurs();
        $categorie3->setCategorieUtilisateur('TeamNéo3D');
        
        $manager->persist($categorie3);
        
        $categorie4 = new CategorieUtilisateurs();
        $categorie4->setCategorieUtilisateur('Super Admin');
        
        $manager->persist($categorie4);
        
        $manager->flush();

        $this->addReference('Cabinet Dentaire', $categorie1);
        $this->addReference('Laboratoire', $categorie2);
        $this->addReference('TeamNéo3D', $categorie3);
        $this->addReference('SuperAdmin', $categorie4);
    }
    
    public function getOrder()
    {
        return 1;
    }
}