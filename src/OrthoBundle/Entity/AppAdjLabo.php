<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAdjLabo
 */
class AppAdjLabo
{
    private $utilisateur;

    private $adjonction;

    private $appareillage;
    /**
     * @var int
     */
    private $id;


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
     * Set utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return AppAdjLabo
     */
    public function setUtilisateur(\OrthoBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \OrthoBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set appareillage
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillage
     * @return AppAdjLabo
     */
    public function setAppareillage(\OrthoBundle\Entity\Appareillages $appareillage = null)
    {
        $this->appareillage = $appareillage;

        return $this;
    }

    /**
     * Get appareillage
     *
     * @return \OrthoBundle\Entity\Appareillages 
     */
    public function getAppareillage()
    {
        return $this->appareillage;
    }

    /**
     * Set adjonction
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonction
     * @return AppAdjLabo
     */
    public function setAdjonction(\OrthoBundle\Entity\Adjonctions $adjonction = null)
    {
        $this->adjonction = $adjonction;

        return $this;
    }

    /**
     * Get adjonction
     *
     * @return \OrthoBundle\Entity\Adjonctions 
     */
    public function getAdjonction()
    {
        return $this->adjonction;
    }
}
