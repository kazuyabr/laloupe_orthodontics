<?php

namespace OrthoBundle\Entity;

/**
 * Adjonctions
 */
class Adjonctions
{
    
    // CUSTOM CODE
    
    /* Déclaration des variables utilisées pour les relations Doctrine */
    private $fkidCommande;


    
    // GENERATED CODE
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $titreAdj;

    /**
     * @var string
     */
    private $familleAdj;

    /**
     * @var string
     */
    private $imgAdj;

    /**
     * @var string
     */
    private $commentairesAdj;

    /**
     * @var int
     */
    private $compteurAdj;

    /**
     * @var string
     */
    private $infoComLaboAdj;

    /**
     * @var string
     */
    private $infoComCabAdj;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkidCommande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set titreAdj
     *
     * @param string $titreAdj
     * @return Adjonctions
     */
    public function setTitreAdj($titreAdj)
    {
        $this->titreAdj = $titreAdj;

        return $this;
    }

    /**
     * Get titreAdj
     *
     * @return string 
     */
    public function getTitreAdj()
    {
        return $this->titreAdj;
    }

    /**
     * Set imgAdj
     *
     * @param string $imgAdj
     * @return Adjonctions
     */
    public function setImgAdj($imgAdj)
    {
        $this->imgAdj = $imgAdj;

        return $this;
    }

    /**
     * Get imgAdj
     *
     * @return string 
     */
    public function getImgAdj()
    {
        return $this->imgAdj;
    }

    /**
     * Set commentairesAdj
     *
     * @param string $commentairesAdj
     * @return Adjonctions
     */
    public function setCommentairesAdj($commentairesAdj)
    {
        $this->commentairesAdj = $commentairesAdj;

        return $this;
    }

    /**
     * Get commentairesAdj
     *
     * @return string 
     */
    public function getCommentairesAdj()
    {
        return $this->commentairesAdj;
    }

    public function setCompteurAdj($compteurAdj)
    {
        $this->compteurAdj = $compteurAdj;

        return $this;
    }

    public function getCompteurAdj()
    {
        return $this->compteurAdj;
    }
    

    /**
     * Set familleAdj
     *
     * @param string $familleAdj
     * @return Adjonctions
     */
    public function setFamilleAdj($familleAdj)
    {
        $this->familleAdj = $familleAdj;

        return $this;
    }

    /**
     * Get familleAdj
     *
     * @return string 
     */
    public function getFamilleAdj()
    {
        return $this->familleAdj;
    }

    /**
     * Set infoComLaboAdj
     *
     * @param string $infoComLaboAdj
     * @return Adjonctions
     */
    public function setInfoComLaboAdj($infoComLaboAdj)
    {
        $this->infoComLaboAdj = $infoComLaboAdj;

        return $this;
    }

    /**
     * Get infoComLaboAdj
     *
     * @return string 
     */
    public function getInfoComLaboAdj()
    {
        return $this->infoComLaboAdj;
    }

    /**
     * Set infoComCabAdj
     *
     * @param string $infoComCabAdj
     * @return Adjonctions
     */
    public function setInfoComCabAdj($infoComCabAdj)
    {
        $this->infoComCabAdj = $infoComCabAdj;

        return $this;
    }

    /**
     * Get infoComCabAdj
     *
     * @return string 
     */
    public function getInfoComCabAdj()
    {
        return $this->infoComCabAdj;
    }

    /**
     * Add fkidCommande
     *
     * @param \OrthoBundle\Entity\Commandes $fkidCommande
     * @return Adjonctions
     */
    public function addFkidCommande(\OrthoBundle\Entity\Commandes $fkidCommande)
    {
        $this->fkidCommande[] = $fkidCommande;

        return $this;
    }

    /**
     * Remove fkidCommande
     *
     * @param \OrthoBundle\Entity\Commandes $fkidCommande
     */
    public function removeFkidCommande(\OrthoBundle\Entity\Commandes $fkidCommande)
    {
        $this->fkidCommande->removeElement($fkidCommande);
    }

    /**
     * Get fkidCommande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkidCommande()
    {
        return $this->fkidCommande;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poids;


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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
