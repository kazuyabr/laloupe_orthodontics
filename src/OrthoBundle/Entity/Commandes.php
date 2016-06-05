<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 */
class Commandes
{
    private $adjonctions;
    
    private $appareillages;
    
    private $utilisateur;
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $referencePatient;

    /**
     * @var string
     */
    private $prenomPatient;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var \DateTime
     */
    private $dateCommande;

    /**
     * @var string
     */
    private $commentaireLabo;

    /**
     * @var string
     */
    private $pathPJ1;

    /**
     * @var string
     */
    private $pathPJ2;

    /**
     * @var string
     */
    private $pathPJ3;


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
     * Set referencePatient
     *
     * @param string $referencePatient
     * @return Commandes
     */
    public function setReferencePatient($referencePatient)
    {
        $this->referencePatient = $referencePatient;

        return $this;
    }

    /**
     * Get referencePatient
     *
     * @return string 
     */
    public function getReferencePatient()
    {
        return $this->referencePatient;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     * @return Commandes
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

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Commandes
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commandes
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set commentaireLabo
     *
     * @param string $commentaireLabo
     * @return Commandes
     */
    public function setCommentaireLabo($commentaireLabo)
    {
        $this->commentaireLabo = $commentaireLabo;

        return $this;
    }

    /**
     * Get commentaireLabo
     *
     * @return string 
     */
    public function getCommentaireLabo()
    {
        return $this->commentaireLabo;
    }

    /**
     * Set pathPJ1
     *
     * @param string $pathPJ1
     * @return Commandes
     */
    public function setPathPJ1($pathPJ1)
    {
        $this->pathPJ1 = $pathPJ1;

        return $this;
    }

    /**
     * Get pathPJ1
     *
     * @return string 
     */
    public function getPathPJ1()
    {
        return $this->pathPJ1;
    }

    /**
     * Set pathPJ2
     *
     * @param string $pathPJ2
     * @return Commandes
     */
    public function setPathPJ2($pathPJ2)
    {
        $this->pathPJ2 = $pathPJ2;

        return $this;
    }

    /**
     * Get pathPJ2
     *
     * @return string 
     */
    public function getPathPJ2()
    {
        return $this->pathPJ2;
    }

    /**
     * Set pathPJ3
     *
     * @param string $pathPJ3
     * @return Commandes
     */
    public function setPathPJ3($pathPJ3)
    {
        $this->pathPJ3 = $pathPJ3;

        return $this;
    }

    /**
     * Get pathPJ3
     *
     * @return string 
     */
    public function getPathPJ3()
    {
        return $this->pathPJ3;
    }
}
