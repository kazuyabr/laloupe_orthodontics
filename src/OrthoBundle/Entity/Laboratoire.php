<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 */
class Laboratoire
{
    /**
     * @var int
     */
    private $idLabo;

    /**
     * @var string
     */
    private $nomLabo;

    /**
     * @var string
     */
    private $adresseLabo;

    /**
     * @var string
     */
    private $codepostalLabo;

    /**
     * @var string
     */
    private $villeLabo;

    /**
     * @var string
     */
    private $mailLabo;

    /**
     * @var string
     */
    private $telephoneLabo;



    /* Déclaration des variables utilisées pour les relations Doctrine */

    private $labos;

    /* Fin de déclaration des variables utilisées pour les relations Doctrine */


    /**
     * Get idLabo
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idLabo;
    }

    /**
     * Set nomLabo
     *
     * @param string $nomLabo
     * @return Laboratoire
     */
    public function setNomLabo($nomLabo)
    {
        $this->nomLabo = $nomLabo;

        return $this;
    }

    /**
     * Get nomLabo
     *
     * @return string 
     */
    public function getNomLabo()
    {
        return $this->nomLabo;
    }

    /**
     * Set adresseLabo
     *
     * @param string $adresseLabo
     * @return Laboratoire
     */
    public function setAdresseLabo($adresseLabo)
    {
        $this->adresseLabo = $adresseLabo;

        return $this;
    }

    /**
     * Get adresseLabo
     *
     * @return string 
     */
    public function getAdresseLabo()
    {
        return $this->adresseLabo;
    }

    /**
     * Set codepostalLabo
     *
     * @param string $codepostalLabo
     * @return Laboratoire
     */
    public function setCodepostalLabo($codepostalLabo)
    {
        $this->codepostalLabo = $codepostalLabo;

        return $this;
    }

    /**
     * Get codepostalLabo
     *
     * @return string 
     */
    public function getCodepostalLabo()
    {
        return $this->codepostalLabo;
    }

    /**
     * Set villeLabo
     *
     * @param string $villeLabo
     * @return Laboratoire
     */
    public function setVilleLabo($villeLabo)
    {
        $this->villeLabo = $villeLabo;

        return $this;
    }

    /**
     * Get villeLabo
     *
     * @return string 
     */
    public function getVilleLabo()
    {
        return $this->villeLabo;
    }

    /**
     * Set mailLabo
     *
     * @param string $mailLabo
     * @return Laboratoire
     */
    public function setMailLabo($mailLabo)
    {
        $this->mailLabo = $mailLabo;

        return $this;
    }

    /**
     * Get mailLabo
     *
     * @return string 
     */
    public function getMailLabo()
    {
        return $this->mailLabo;
    }

    /**
     * Set telephoneLabo
     *
     * @param string $telephoneLabo
     * @return Laboratoire
     */
    public function setTelephoneLabo($telephoneLabo)
    {
        $this->telephoneLabo = $telephoneLabo;

        return $this;
    }

    /**
     * Get telephoneLabo
     *
     * @return string 
     */
    public function getTelephoneLabo()
    {
        return $this->telephoneLabo;
    }

    /**
     * Get idLabo
     *
     * @return integer 
     */
    public function getIdLabo()
    {
        return $this->idLabo;
    }
}
