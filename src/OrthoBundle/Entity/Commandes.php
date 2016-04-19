<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 */
class Commandes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $fidCab;

    /**
     * @var int
     */
    private $fidLabo;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fidCab
     *
     * @param integer $fidCab
     * @return Commandes
     */
    public function setFidCab($fidCab)
    {
        $this->fidCab = $fidCab;

        return $this;
    }

    /**
     * Get fidCab
     *
     * @return integer 
     */
    public function getFidCab()
    {
        return $this->fidCab;
    }

    /**
     * Set fidLabo
     *
     * @param integer $fidLabo
     * @return Commandes
     */
    public function setFidLabo($fidLabo)
    {
        $this->fidLabo = $fidLabo;

        return $this;
    }

    /**
     * Get fidLabo
     *
     * @return integer 
     */
    public function getFidLabo()
    {
        return $this->fidLabo;
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
