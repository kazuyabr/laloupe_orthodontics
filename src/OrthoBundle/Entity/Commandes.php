<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 */
class Commandes
{

    // CUSTOM CODE

    /* Fonction en attente, à compléter plus tard
    public function __toString()
    {
        return ;
    }
    */

    public function setCreatedAtValue()
    {
        $this->setDatecommande(new \DateTime());
    }


    private $ajoutApp;

    /**
     * Get ajoutApp
     *
     */
    public function getAjoutApp()
    {
        return $this->ajoutApp;
    }

    /**
     * Set ajoutApp
     *
     */
    public function setAjoutApp($ajoutApp)
    {
        $this->ajoutApp = $ajoutApp;

        return $this;
    }
    

//////////////////////////////////////
// GENRATED CODE

    /**
     * @var integer
     */
    private
        $id;

    /**
     * @var string
     */
    private
        $referencePatient;

    /**
     * @var string
     */
    private
        $prenomPatient;

    /**
     * @var \DateTime
     */
    private
        $dateretour;

    /**
     * @var \DateTime
     */
    private
        $datecommande;

    /**
     * @var string
     */
    private
        $comment;

    /**
     * @var \OrthoBundle\Entity\Cabinetsdentaires
     */
    private
        $fidCabinet;

    /**
     * @var \OrthoBundle\Entity\Laboratoire
     */
    private
        $fidLaboratoire;

    /**
     * @var \OrthoBundle\Entity\Couleur
     */
    private
        $fidCouleur;

    /**
     * @var \OrthoBundle\Entity\Motif
     */
    private
        $fidMotif;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private
        $appareillages;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private
        $fidAdj;

    /**
     * Constructor
     */
    public
    function __construct()
    {
        $this->appareillages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fidAdj = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public
    function getId()
    {
        return $this->id;
    }

    /**
     * Set referencePatient
     *
     * @param string $referencePatient
     * @return Commandes
     */
    public
    function setReferencePatient($referencePatient)
    {
        $this->referencePatient = $referencePatient;

        return $this;
    }

    /**
     * Get referencePatient
     *
     * @return string
     */
    public
    function getReferencePatient()
    {
        return $this->referencePatient;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     * @return Commandes
     */
    public
    function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    /**
     * Get prenomPatient
     *
     * @return string
     */
    public
    function getPrenomPatient()
    {
        return $this->prenomPatient;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Commandes
     */
    public
    function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime
     */
    public
    function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     * @return Commandes
     */
    public
    function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime
     */
    public
    function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Commandes
     */
    public
    function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public
    function getComment()
    {
        return $this->comment;
    }

    /**
     * Set fidCabinet
     *
     * @param \OrthoBundle\Entity\Cabinetsdentaires $fidCabinet
     * @return Commandes
     */
    public
    function setFidCabinet(\OrthoBundle\Entity\Cabinetsdentaires $fidCabinet = null)
    {
        $this->fidCabinet = $fidCabinet;

        return $this;
    }

    /**
     * Get fidCabinet
     *
     * @return \OrthoBundle\Entity\Cabinetsdentaires
     */
    public
    function getFidCabinet()
    {
        return $this->fidCabinet;
    }

    /**
     * Set fidLaboratoire
     *
     * @param \OrthoBundle\Entity\Laboratoire $fidLaboratoire
     * @return Commandes
     */
    public
    function setFidLaboratoire(\OrthoBundle\Entity\Laboratoire $fidLaboratoire = null)
    {
        $this->fidLaboratoire = $fidLaboratoire;

        return $this;
    }

    /**
     * Get fidLaboratoire
     *
     * @return \OrthoBundle\Entity\Laboratoire
     */
    public
    function getFidLaboratoire()
    {
        return $this->fidLaboratoire;
    }

    /**
     * Set fidCouleur
     *
     * @param \OrthoBundle\Entity\Couleur $fidCouleur
     * @return Commandes
     */
    public
    function setFidCouleur(\OrthoBundle\Entity\Couleur $fidCouleur)
    {
        $this->fidCouleur = $fidCouleur;

        return $this;
    }

    /**
     * Get fidCouleur
     *
     * @return \OrthoBundle\Entity\Couleur
     */
    public
    function getFidCouleur()
    {
        return $this->fidCouleur;
    }

    /**
     * Set fidMotif
     *
     * @param \OrthoBundle\Entity\Motif $fidMotif
     * @return Commandes
     */
    public
    function setFidMotif(\OrthoBundle\Entity\Motif $fidMotif)
    {
        $this->fidMotif = $fidMotif;

        return $this;
    }

    /**
     * Get fidMotif
     *
     * @return \OrthoBundle\Entity\Motif
     */
    public
    function getFidMotif()
    {
        return $this->fidMotif;
    }

    /**
     * Add appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     * @return Commandes
     */
    public
    function addAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages[] = $appareillages;

        return $this;
    }

    /**
     * Remove appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     */
    public
    function removeAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages->removeElement($appareillages);
    }

    /**
     * Get appareillages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    function getAppareillages()
    {
        return $this->appareillages;
    }

    /**
     * Add fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     * @return Commandes
     */
    public
    function addFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj[] = $fidAdj;

        return $this;
    }

    /**
     * Remove fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     */
    public
    function removeFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj->removeElement($fidAdj);
    }

    /**
     * Get fidAdj
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    function getFidAdj()
    {
        return $this->fidAdj;
    }
}
