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
        return $this->nomPatient;
    }

    public function setCreatedAtValue()
    {
        $this->setDatecommande(new \DateTime());
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
    private $nomPatient;

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

    
    private $fidCouleur;

    private $fidMotif;



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
    public function setFnomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    /**
     * Get fnomPatient
     *
     * @return string 
     */
    public function getFnomPatient()
    {
        return $this->nomPatient;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fidApp = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fidAdj = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fidApp
     *
     * @param \OrthoBundle\Entity\Appareillages $fidApp
     * @return Commandes
     */
    public function addFidApp(\OrthoBundle\Entity\Appareillages $fidApp)
    {
        $this->fidApp[] = $fidApp;

        return $this;
    }

    /**
     * Remove fidApp
     *
     * @param \OrthoBundle\Entity\Appareillages $fidApp
     */
    public function removeFidApp(\OrthoBundle\Entity\Appareillages $fidApp)
    {
        $this->fidApp->removeElement($fidApp);
    }

    /**
     * Add fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     * @return Commandes
     */
    public function addFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj[] = $fidAdj;

        return $this;
    }

    /**
     * Remove fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     */
    public function removeFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj->removeElement($fidAdj);
    }
}
