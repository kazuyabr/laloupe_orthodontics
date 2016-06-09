<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieUtilisateurs
 */


class CategorieUtilisateurs
{
    // CUSTOM CODE
    public function __toString()
    {
        return $this->categorieUtilisateur;
    }

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return CategorieUtilisateurs
     */
    public function addUtilisateur(\OrthoBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur[] = $utilisateur;

        return $this;
    }

    /**
     * Remove utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     */
    public function removeUtilisateur(\OrthoBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur->removeElement($utilisateur);
    }

    /**
     * Get utilisateur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
