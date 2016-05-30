<?php

namespace OrthoBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Cabinetsdentaires
 */
class Cabinetsdentaires extends BaseUser
{
    // CUSTOM CODE

    public function __toString()
    {
        return $this->fidLabo;
    }

    private $poidsAdjonction;
    
    
    // GENERATED CODE
    
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \OrthoBundle\Entity\Laboratoire
     */
    private $fidLabo;

    /**
     * @var string
     */
    private $nomCab;

    /**
     * @var string
     */
    private $adresseCab;

    /**
     * @var string
     */
    private $codepostalCab;

    /**
     * @var string
     */
    private $villeCab;
    
    /**
     * @var string
     */
    private $telephoneCab;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poids;
    
    /**
     * Get idCab
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


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
     * Set nomCab
     *
     * @param string $nomCab
     * @return Cabinetsdentaires
     */
    public function setNomCab($nomCab)
    {
        $this->nomCab = $nomCab;

        return $this;
    }

    /**
     * Get nomCab
     *
     * @return string
     */
    public function getNomCab()
    {
        return $this->nomCab;
    }

    /**
     * Set adresseCab
     *
     * @param string $adresseCab
     * @return Cabinetsdentaires
     */
    public function setAdresseCab($adresseCab)
    {
        $this->adresseCab = $adresseCab;

        return $this;
    }

    /**
     * Get adresseCab
     *
     * @return string
     */
    public function getAdresseCab()
    {
        return $this->adresseCab;
    }

    /**
     * Set codepostalCab
     *
     * @param string $codepostalCab
     * @return Cabinetsdentaires
     */
    public function setCodepostalCab($codepostalCab)
    {
        $this->codepostalCab = $codepostalCab;

        return $this;
    }

    /**
     * Get codepostalCab
     *
     * @return string
     */
    public function getCodepostalCab()
    {
        return $this->codepostalCab;
    }

    /**
     * Set villeCab
     *
     * @param string $villeCab
     * @return Cabinetsdentaires
     */
    public function setVilleCab($villeCab)
    {
        $this->villeCab = $villeCab;

        return $this;
    }

    /**
     * Get villeCab
     *
     * @return string
     */
    public function getVilleCab()
    {
        return $this->villeCab;
    }

    /**
     * Set telephoneCab
     *
     * @param string $telephoneCab
     * @return Cabinetsdentaires
     */
    public function setTelephoneCab($telephoneCab)
    {
        $this->telephoneCab = $telephoneCab;

        return $this;
    }

    /**
     * Get telephoneCab
     *
     * @return string
     */
    public function getTelephoneCab()
    {
        return $this->telephoneCab;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->poids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     * @return Cabinetsdentaires
     */
    public function addPoids(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids[] = $poids;
    }
    
    /**
     * Remove poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     */
    public
    function removePoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids->removeElement($poids);
    }

    /**
     * Get poids
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPoids()
    {
        return $this->poids;
    }
    
    /**
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     * @return Cabinetsdentaires
     */
    public function addPoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids[] = $poids;

        return $this;
    }

    /**
     * Add poidsAdjonction
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction
     * @return Cabinetsdentaires
     */
    public function addPoidsAdjonction(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction)
    {
        $this->poidsAdjonction[] = $poidsAdjonction;

        return $this;
    }

    /**
     * Remove poidsAdjonction
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction
     */
    public function removePoidsAdjonction(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction)
    {
        $this->poidsAdjonction->removeElement($poidsAdjonction);
    }

    /**
     * Get poidsAdjonction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoidsAdjonction()
    {
        return $this->poidsAdjonction;
    }
}
