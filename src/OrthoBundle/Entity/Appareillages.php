<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appareillages
 */
class Appareillages
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->poidsApp = new \Doctrine\Common\Collections\ArrayCollection();
        $this->boutonSpecifique = new \Doctrine\Common\Collections\ArrayCollection();
    }



    private $boutonSpecifique;
    
    private $poidsApp;
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $famille;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var string
     */
    private $infoLabo;

    /**
     * @var string
     */
    private $infoCabinet;


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
     * Set nom
     *
     * @param string $nom
     * @return Appareillages
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set famille
     *
     * @param string $famille
     * @return Appareillages
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Appareillages
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Appareillages
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set infoLabo
     *
     * @param string $infoLabo
     * @return Appareillages
     */
    public function setInfoLabo($infoLabo)
    {
        $this->infoLabo = $infoLabo;

        return $this;
    }

    /**
     * Get infoLabo
     *
     * @return string 
     */
    public function getInfoLabo()
    {
        return $this->infoLabo;
    }

    /**
     * Set infoCabinet
     *
     * @param string $infoCabinet
     * @return Appareillages
     */
    public function setInfoCabinet($infoCabinet)
    {
        $this->infoCabinet = $infoCabinet;

        return $this;
    }

    /**
     * Get infoCabinet
     *
     * @return string 
     */
    public function getInfoCabinet()
    {
        return $this->infoCabinet;
    }

    /**
     * Add poidsApp
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poidsApp
     * @return Appareillages
     */
    public function addPoidsApp(\OrthoBundle\Entity\PoidsAppareillages $poidsApp)
    {
        $this->poidsApp[] = $poidsApp;

        return $this;
    }

    /**
     * Remove poidsApp
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poidsApp
     */
    public function removePoidsApp(\OrthoBundle\Entity\PoidsAppareillages $poidsApp)
    {
        $this->poidsApp->removeElement($poidsApp);
    }

    /**
     * Get poidsApp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoidsApp()
    {
        return $this->poidsApp;
    }

    /**
     * Add boutonSpecifique
     *
     * @param \OrthoBundle\Entity\AppAdjLabo $boutonSpecifique
     * @return Appareillages
     */
    public function addBoutonSpecifique(\OrthoBundle\Entity\AppAdjLabo $boutonSpecifique)
    {
        $this->boutonSpecifique[] = $boutonSpecifique;

        return $this;
    }

    /**
     * Remove boutonSpecifique
     *
     * @param \OrthoBundle\Entity\AppAdjLabo $boutonSpecifique
     */
    public function removeBoutonSpecifique(\OrthoBundle\Entity\AppAdjLabo $boutonSpecifique)
    {
        $this->boutonSpecifique->removeElement($boutonSpecifique);
    }

    /**
     * Get boutonSpecifique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBoutonSpecifique()
    {
        return $this->boutonSpecifique;
    }
}
