<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appareillages
 * @ORM\HasLifeCycleCallBacks()
 */
class Appareillages
{
    // CUSTOM CODE
    
    
    // GENERATED CODE
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titreApp;

    /**
     * @var string
     */
    private $familleApp;

    /**
     * @var string
     */
    private $imgApp;

    /**
     * @var string
     */
    private $commentairesApp;

    /**
     * @var string
     */
    private $infoComLaboApp;

    /**
     * @var string
     */
    private $infoComCabApp;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poids;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commandes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $labos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->poids = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->labos = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set titreApp
     *
     * @param string $titreApp
     * @return Appareillages
     */
    public function setTitreApp($titreApp)
    {
        $this->titreApp = $titreApp;

        return $this;
    }

    /**
     * Get titreApp
     *
     * @return string 
     */
    public function getTitreApp()
    {
        return $this->titreApp;
    }

    /**
     * Set familleApp
     *
     * @param string $familleApp
     * @return Appareillages
     */
    public function setFamilleApp($familleApp)
    {
        $this->familleApp = $familleApp;

        return $this;
    }

    /**
     * Get familleApp
     *
     * @return string 
     */
    public function getFamilleApp()
    {
        return $this->familleApp;
    }

    /**
     * Set imgApp
     *
     * @param string $imgApp
     * @return Appareillages
     */
    public function setImgApp($imgApp)
    {
        $this->imgApp = $imgApp;

        return $this;
    }

    /**
     * Get imgApp
     *
     * @return string 
     */
    public function getImgApp()
    {
        return $this->imgApp;
    }

    /**
     * Set commentairesApp
     *
     * @param string $commentairesApp
     * @return Appareillages
     */
    public function setCommentairesApp($commentairesApp)
    {
        $this->commentairesApp = $commentairesApp;

        return $this;
    }

    /**
     * Get commentairesApp
     *
     * @return string 
     */
    public function getCommentairesApp()
    {
        return $this->commentairesApp;
    }

    /**
     * Set infoComLaboApp
     *
     * @param string $infoComLaboApp
     * @return Appareillages
     */
    public function setInfoComLaboApp($infoComLaboApp)
    {
        $this->infoComLaboApp = $infoComLaboApp;

        return $this;
    }

    /**
     * Get infoComLaboApp
     *
     * @return string 
     */
    public function getInfoComLaboApp()
    {
        return $this->infoComLaboApp;
    }

    /**
     * Set infoComCabApp
     *
     * @param string $infoComCabApp
     * @return Appareillages
     */
    public function setInfoComCabApp($infoComCabApp)
    {
        $this->infoComCabApp = $infoComCabApp;

        return $this;
    }

    /**
     * Get infoComCabApp
     *
     * @return string 
     */
    public function getInfoComCabApp()
    {
        return $this->infoComCabApp;
    }

    /**
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     * @return Appareillages
     */
    public function addPoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids[] = $poids;

        return $this;
    }

    /**
     * Remove poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     */
    public function removePoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
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
     * Add commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     * @return Appareillages
     */
    public function addCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add labos
     *
     * @param \OrthoBundle\Entity\Laboratoire $labos
     * @return Appareillages
     */
    public function addLabo(\OrthoBundle\Entity\Laboratoire $labos)
    {
        $this->labos[] = $labos;

        return $this;
    }

    /**
     * Remove labos
     *
     * @param \OrthoBundle\Entity\Laboratoire $labos
     */
    public function removeLabo(\OrthoBundle\Entity\Laboratoire $labos)
    {
        $this->labos->removeElement($labos);
    }

    /**
     * Get labos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLabos()
    {
        return $this->labos;
    }
}
