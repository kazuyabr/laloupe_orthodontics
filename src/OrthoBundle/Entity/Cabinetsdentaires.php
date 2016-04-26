<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinetsdentaires
 */
class Cabinetsdentaires
{
    /**
     * @var int
     */
    private $idCab;

    /**
     * @var int
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
    private $mailCab;

    /**
     * @var string
     */
    private $telephoneCab;


    /**
     * Get idCab
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idCab;
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
     * Set mailCab
     *
     * @param string $mailCab
     * @return Cabinetsdentaires
     */
    public function setMailCab($mailCab)
    {
        $this->mailCab = $mailCab;

        return $this;
    }

    /**
     * Get mailCab
     *
     * @return string 
     */
    public function getMailCab()
    {
        return $this->mailCab;
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
     * Get idCab
     *
     * @return integer 
     */
    public function getIdCab()
    {
        return $this->idCab;
    }
}
