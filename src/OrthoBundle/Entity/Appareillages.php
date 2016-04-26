<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appareillages
 */
class Appareillages
{
    /**
     * @var int
     */
    private $idApp;

    private $fidCommande;

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
     * @var int
     */
    private $compteurApp;

    /**
     * @var string
     */
    private $infoComLaboApp;

    /**
     * @var string
     */
    private $infoComCabApp;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idApp;
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
    
    public function setCompteurApp($compteurApp)
    {
        $this->compteurApp = $compteurApp;
        
        return $this;
    }
    
    public function getCompteurApp()
    {
        return $this->compteurApp;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fidCommande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idApp
     *
     * @return integer 
     */
    public function getIdApp()
    {
        return $this->idApp;
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
     * Add fidCommande
     *
     * @param \OrthoBundle\Entity\Commandes $fidCommande
     * @return Appareillages
     */
    public function addFidCommande(\OrthoBundle\Entity\Commandes $fidCommande)
    {
        $this->fidCommande[] = $fidCommande;

        return $this;
    }

    /**
     * Remove fidCommande
     *
     * @param \OrthoBundle\Entity\Commandes $fidCommande
     */
    public function removeFidCommande(\OrthoBundle\Entity\Commandes $fidCommande)
    {
        $this->fidCommande->removeElement($fidCommande);
    }

    /**
     * Get fidCommande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFidCommande()
    {
        return $this->fidCommande;
    }
}
