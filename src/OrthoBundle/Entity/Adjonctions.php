<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adjonctions
 */
class Adjonctions
{

    public function __toString()
    {
        return $this->nom;
    }

    private $boutonSpecifique;
    
    private $poids;
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
     * @return Adjonctions
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
     * @return Adjonctions
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
     * @return Adjonctions
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
     * @return Adjonctions
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
     * @return Adjonctions
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
     * @return Adjonctions
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
     * Constructor
     */
    public function __construct()
    {
        $this->poids = new \Doctrine\Common\Collections\ArrayCollection();
        $this->boutonSpecifique = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poids
     * @return Adjonctions
     */
    public function addPoid(\OrthoBundle\Entity\PoidsAdjonctions $poids)
    {
        $this->poids[] = $poids;

        return $this;
    }

    /**
     * Remove poids
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poids
     */
    public function removePoid(\OrthoBundle\Entity\PoidsAdjonctions $poids)
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
     * Add boutonSpecifique
     *
     * @param \OrthoBundle\Entity\AppAdjLabo $boutonSpecifique
     * @return Adjonctions
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
