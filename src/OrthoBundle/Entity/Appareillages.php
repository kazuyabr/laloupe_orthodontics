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
}
