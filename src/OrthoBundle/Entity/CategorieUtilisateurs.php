<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieUtilisateurs
 */
class CategorieUtilisateurs
{
    // CUSTOM CODE
    
    /* Variable relation Doctrine */
    
    private $utilisateur;
    
    
    
    
    
    
    
    
    
    
    // GENERATED CODE
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $categorieUtilisateur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorieUtilisateur
     *
     * @param string $categorieUtilisateur
     * @return CategorieUtilisateurs
     */
    public function setCategorieUtilisateur($categorieUtilisateur)
    {
        $this->categorieUtilisateur = $categorieUtilisateur;

        return $this;
    }

    /**
     * Get categorieUtilisateur
     *
     * @return string 
     */
    public function getCategorieUtilisateur()
    {
        return $this->categorieUtilisateur;
    }
}
