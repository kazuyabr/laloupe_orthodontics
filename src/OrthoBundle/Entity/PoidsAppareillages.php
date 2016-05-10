<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsAppareillages
 */
class PoidsAppareillages
{

    // CUSTOM CODE

    public function __construct(Cabinetsdentaires $cabinet, Appareillages $appareil)
    {
        $this->cabinet = $cabinet;
        $this->fidAppareillages = $appareil;
    }

    public function incr()
    {
        $this->poids++;
    }

    /**
     * @var int
     */
    private $id;
    
    private $poids = 1;

    /* Déclaration des variables utilisés pour les relations Doctrine */
    
    private $fidLaboratoire;
    /* Fin de délcaration des variables utilisés pour les relations Doctrine */




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
     * Set poids
     *
     * @param integer $poids
     * @return PoidsAppareillages
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set fidAppareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $fidAppareillages
     * @return PoidsAppareillages
     */
    public function setFidAppareillages(\OrthoBundle\Entity\Appareillages $fidAppareillages = null)
    {
        $this->fidAppareillages = $fidAppareillages;

        return $this;
    }

    /**
     * Get fidAppareillages
     *
     * @return \OrthoBundle\Entity\Appareillages 
     */
    public function getFidAppareillages()
    {
        return $this->fidAppareillages;
    }

    /**
     * Set fidLaboratoire
     *
     * @param \OrthoBundle\Entity\Laboratoire $fidLaboratoire
     * @return PoidsAppareillages
     */
    public function setFidLaboratoire(\OrthoBundle\Entity\Laboratoire $fidLaboratoire = null)
    {
        $this->fidLaboratoire = $fidLaboratoire;

        return $this;
    }

    /**
     * Get fidLaboratoire
     *
     * @return \OrthoBundle\Entity\Laboratoire 
     */
    public function getFidLaboratoire()
    {
        return $this->fidLaboratoire;
    }
    
    
    /**
     * @var \OrthoBundle\Entity\Cabinetsdentaires
     */
    private $cabinet;


    /**
     * Set cabinet
     *
     * @param \OrthoBundle\Entity\Cabinetsdentaires $cabinet
     * @return PoidsAppareillages
     */
    public function setCabinet(\OrthoBundle\Entity\Cabinetsdentaires $cabinet = null)
    {
        $this->cabinet = $cabinet;

        return $this;
    }

    /**
     * Get cabinet
     *
     * @return \OrthoBundle\Entity\Cabinetsdentaires 
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }
    /**
     * @var \OrthoBundle\Entity\Appareillages
     */
    private $fidAppareillages;


}
