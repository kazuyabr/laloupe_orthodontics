<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsAdjonctions
 */
class PoidsAdjonctions
{

    public function __construct(Utilisateurs $utilisateurs, Adjonctions $adjonctions)
    {
        $this->utilisateur = $utilisateurs;
        $this->adjonction = $adjonctions;
    }

    public function incrementation()
    {
        $this->poids++;
    }

    private $utilisateur;
    private $adjonction;
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
     * @return PoidsAdjonctions
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
     * Set adjonction
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonction
     * @return PoidsAdjonctions
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

    /**
     * Set utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return PoidsAdjonctions
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
