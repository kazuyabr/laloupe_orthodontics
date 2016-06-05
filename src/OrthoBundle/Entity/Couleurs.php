<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleurs
 */
class Couleurs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomCouleur;


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
     * Set nomCouleur
     *
     * @param string $nomCouleur
     * @return Couleurs
     */
    public function setNomCouleur($nomCouleur)
    {
        $this->nomCouleur = $nomCouleur;

        return $this;
    }

    /**
     * Get nomCouleur
     *
     * @return string 
     */
    public function getNomCouleur()
    {
        return $this->nomCouleur;
    }
}
