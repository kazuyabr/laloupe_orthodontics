<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listepatients
 */
class Listepatients
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
     * @var string
     */
    private $datenaissancePatient;

    /**
     * @var string
     */
    private $nomPatient;

    /**
     * @var string
     */
    private $prenomPatient;


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
     * @return Listepatients
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
     * Set datenaissancePatient
     *
     * @param string $datenaissancePatient
     * @return Listepatients
     */
    public function setDatenaissancePatient($datenaissancePatient)
    {
        $this->datenaissancePatient = $datenaissancePatient;

        return $this;
    }

    /**
     * Get datenaissancePatient
     *
     * @return string 
     */
    public function getDatenaissancePatient()
    {
        return $this->datenaissancePatient;
    }

    /**
     * Set nomPatient
     *
     * @param string $nomPatient
     * @return Listepatients
     */
    public function setNomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    /**
     * Get nomPatient
     *
     * @return string 
     */
    public function getNomPatient()
    {
        return $this->nomPatient;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     * @return Listepatients
     */
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    /**
     * Get prenomPatient
     *
     * @return string 
     */
    public function getPrenomPatient()
    {
        return $this->prenomPatient;
    }
}
