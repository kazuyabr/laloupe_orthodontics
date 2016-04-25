<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 */
class Commandes
{

    public function __toString()
    {
        return $this->fidApp;
    }
    
    /**
     * @var int
     */
    private $idCommande;

    /**
     * @var int
     */
    private $fidCabinet;

    /**
     * @var int
     */
    private $fidLaboratoire;

    /**
     * @var int
     */
    private $fidPatient;

    /**
     * @var string
     */
    private $fnomPatient;

    /**
     * @var \DateTime
     */
    private $dateretour;

    /**
     * @var \DateTime
     */
    private $datecommande;

    /**
     * @var int
     */
    private $fidApp;

    /**
     * @var int
     */
    private $fidAdj;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set fidCab
     *
     * @param integer $fidCabinet
     * @return Commandes
     */
    public function setFidCabinet($fidCabinet)
    {
        $this->fidCabinet = $fidCabinet;

        return $this;
    }

    /**
     * Get fidCabinet
     *
     * @return integer 
     */
    public function getFidCabinet()
    {
        return $this->fidCabinet;
    }

    /**
     * Set fidLaboratoire
     *
     * @param integer $fidLaboratoire
     * @return Commandes
     */
    public function setFidLaboratoire($fidLaboratoire)
    {
        $this->fidLaboratoire = $fidLaboratoire;

        return $this;
    }

    /**
     * Get fidLaboratoire
     *
     * @return integer 
     */
    public function getFidLaboratoire()
    {
        return $this->fidLaboratoire;
    }

    /**
     * Set fidPatient
     *
     * @param integer $fidPatient
     * @return Commandes
     */
    public function setFidPatient($fidPatient)
    {
        $this->fidPatient = $fidPatient;

        return $this;
    }

    /**
     * Get fidPatient
     *
     * @return integer 
     */
    public function getFidPatient()
    {
        return $this->fidPatient;
    }

    /**
     * Set fnomPatient
     *
     * @param string $fnomPatient
     * @return Commandes
     */
    public function setFnomPatient($fnomPatient)
    {
        $this->fnomPatient = $fnomPatient;

        return $this;
    }

    /**
     * Get fnomPatient
     *
     * @return string 
     */
    public function getFnomPatient()
    {
        return $this->fnomPatient;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Commandes
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime 
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     * @return Commandes
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime 
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set fidApp
     *
     * @param integer $fidApp
     * @return Commandes
     */
    public function setFidApp($fidApp)
    {
        $this->fidApp = $fidApp;

        return $this;
    }

    /**
     * Get fidApp
     *
     * @return integer 
     */
    public function getFidApp()
    {
        return $this->fidApp;
    }

    /**
     * Set fidAdj
     *
     * @param integer $fidAdj
     * @return Commandes
     */
    public function setFidAdj($fidAdj)
    {
        $this->fidAdj = $fidAdj;

        return $this;
    }

    /**
     * Get fidAdj
     *
     * @return integer 
     */
    public function getFidAdj()
    {
        return $this->fidAdj;
    }
}
