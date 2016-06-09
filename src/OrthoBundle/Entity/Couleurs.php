<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleurs
 */


class Couleurs
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function __toString()
    {
        return $this->nomCouleur;
    }

    private $commande;
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

    /**
     * Add commande
     *
     * @param \OrthoBundle\Entity\Commandes $commande
     * @return Couleurs
     */
    public function addCommande(\OrthoBundle\Entity\Commandes $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \OrthoBundle\Entity\Commandes $commande
     */
    public function removeCommande(\OrthoBundle\Entity\Commandes $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
