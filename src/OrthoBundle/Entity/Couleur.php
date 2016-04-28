<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleur
 */
class Couleur
{
    /**
     * @var int
     */
    private $idCouleur;

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
        return $this->idCouleur;
    }

    /**
     * Set nomCouleur
     *
     * @param string $nomCouleur
     * @return Couleur
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
