<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsAppareillages
 */
class PoidsAppareillages
{
    private $appareillage;

    private $utilisateur;
    
    public function __construct(Utilisateurs $utilisateurs, Appareillages $appareillages)
    {
        $this->appareillage = $appareillages;
        $this->utilisateur = $utilisateurs;
    }

    public function incrementation()
    {
        $this->poids++;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $poids = 1;


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
     * Set appareillage
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillage
     * @return PoidsAppareillages
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
     * Set utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return PoidsAppareillages
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
}
