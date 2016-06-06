<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 * @ORM\Entity(repositoryClass="OrthoBundle\Repository\CommandesRepository")
 */
class Commandes
{

    // CUSTOM CODE

    public function __toString()
    {
        return $this->commentaireLabo;
    }

    public function setCreatedAtValue()
    {
        $this->setDatecommande(new \DateTime());
    }

    /* Variable relation Doctrine */

    private $adjonctions;
    
    private $appareillages;
    
    private $utilisateur;
    
    private $couleur;


    /**
     * @var \OrthoBundle\Entity\Motifs
     */
    private $motif;

    /* Fin variable relation Doctrine */

    // GENERATED CODE
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
     * @var string
     */
    private $commentairePrestataire3D;


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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appareillages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adjonctions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return Commandes
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
     * Add appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     * @return Commandes
     */
    public function addAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages[] = $appareillages;

        return $this;
    }

    /**
     * Remove appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     */
    public function removeAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages->removeElement($appareillages);
    }

    /**
     * Get appareillages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppareillages()
    {
        return $this->appareillages;
    }

    /**
     * Add adjonctions
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonctions
     * @return Commandes
     */
    public function addAdjonction(\OrthoBundle\Entity\Adjonctions $adjonctions)
    {
        $this->adjonctions[] = $adjonctions;

        return $this;
    }

    /**
     * Remove adjonctions
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonctions
     */
    public function removeAdjonction(\OrthoBundle\Entity\Adjonctions $adjonctions)
    {
        $this->adjonctions->removeElement($adjonctions);
    }

    /**
     * Get adjonctions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdjonctions()
    {
        return $this->adjonctions;
    }

    /**
     * Set couleur
     *
     * @param \OrthoBundle\Entity\Couleurs $couleur
     * @return Commandes
     */
    public function setCouleur(\OrthoBundle\Entity\Couleurs $couleur = null)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return \OrthoBundle\Entity\Couleurs 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set motif
     *
     * @param \OrthoBundle\Entity\Motifs $motif
     * @return Commandes
     */
    public function setMotif(\OrthoBundle\Entity\Motifs $motif = null)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return \OrthoBundle\Entity\Motifs
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set commentairePrestataire3D
     *
     * @param string $commentairePrestataire3D
     * @return Commandes
     */
    public function setCommentairePrestataire3D($commentairePrestataire3D)
    {
        $this->commentairePrestataire3D = $commentairePrestataire3D;

        return $this;
    }

    /**
     * Get commentairePrestataire3D
     *
     * @return string 
     */
    public function getCommentairePrestataire3D()
    {
        return $this->commentairePrestataire3D;
    }

    /**
     * Set testimage
     *
     * @param string $testimage
     * @return Commandes
     */
    public function setTestimage($testimage)
    {
        $this->testimage = $testimage;

        return $this;
    }

    /**
     * Get testimage
     *
     * @return string 
     */
    public function getTestimage()
    {
        return $this->testimage;
    }

    /**
     * Set testimage1
     *
     * @param string $testimage1
     * @return Commandes
     */
    public function setTestimage1($testimage1)
    {
        $this->testimage1 = $testimage1;

        return $this;
    }

    /**
     * Get testimage1
     *
     * @return string 
     */
    public function getTestimage1()
    {
        return $this->testimage1;
    }

    /**
     * Set testimage2
     *
     * @param string $testimage2
     * @return Commandes
     */
    public function setTestimage2($testimage2)
    {
        $this->testimage2 = $testimage2;

        return $this;
    }

    /**
     * Get testimage2
     *
     * @return string 
     */
    public function getTestimage2()
    {
        return $this->testimage2;
    }
}
