<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motifs
 */
class Motifs
{

    private $commandes;
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomMotif;


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
     * Set nomMotif
     *
     * @param string $nomMotif
     * @return Motifs
     */
    public function setNomMotif($nomMotif)
    {
        $this->nomMotif = $nomMotif;

        return $this;
    }

    /**
     * Get nomMotif
     *
     * @return string 
     */
    public function getNomMotif()
    {
        return $this->nomMotif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     * @return Motifs
     */
    public function addCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
}
