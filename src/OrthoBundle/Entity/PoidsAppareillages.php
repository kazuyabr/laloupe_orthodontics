<?php

namespace OrthoBundle\Entity;

/**
 * PoidsAppareillages
 */
class PoidsAppareillages
{

    // CUSTOM CODE

    // Constructeur pour le poids et l'appareillage. On ne peut pas créer une nouvelle instance de classe
    // [...] Sans définir le cabinet en question et l'appareillage qui lui est lié.
    public function __construct(Cabinetsdentaires $cabinet, Appareillages $appareil)
    {
        // Déclaration des variables du constructeur.
        $this->cabinet = $cabinet;
        $this->fidAppareillages = $appareil;
    }

    // Méthode incr() : Incrémentation du poids, si ce dernier est renseigné.
    public function incr()
    {
        // On incrémente juste de 1 avec le "++;"
        $this->poids++;
    }

    
    
    // Déclaration du poids avec une valeur initiale de 1.
    // Chaque nouvelle instance de PoidsAppareillages qui sera crée aura sa variable $poids
    // Qui vaudra 1 (Visible sur la BDD)
    private $poids = 1;

    /* Déclaration des variables utilisés pour les relations Doctrine */
    
    private $fidLaboratoire;
    
    /* Fin de délcaration des variables utilisés pour les relations Doctrine */

    
    // GENERATED CODE
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var \OrthoBundle\Entity\Appareillages
     */
    private $fidAppareillages;

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
     * @return PoidsAppareillages
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
     * Set fidAppareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $fidAppareillages
     * @return PoidsAppareillages
     */
    public function setFidAppareillages(\OrthoBundle\Entity\Appareillages $fidAppareillages = null)
    {
        $this->fidAppareillages = $fidAppareillages;

        return $this;
    }

    /**
     * Get fidAppareillages
     *
     * @return \OrthoBundle\Entity\Appareillages 
     */
    public function getFidAppareillages()
    {
        return $this->fidAppareillages;
    }

    /**
     * Set fidLaboratoire
     *
     * @param \OrthoBundle\Entity\Laboratoire $fidLaboratoire
     * @return PoidsAppareillages
     */
    public function setFidLaboratoire(\OrthoBundle\Entity\Laboratoire $fidLaboratoire = null)
    {
        $this->fidLaboratoire = $fidLaboratoire;

        return $this;
    }

    /**
     * Get fidLaboratoire
     *
     * @return \OrthoBundle\Entity\Laboratoire 
     */
    public function getFidLaboratoire()
    {
        return $this->fidLaboratoire;
    }
    
    
    /**
     * @var \OrthoBundle\Entity\Cabinetsdentaires
     */
    private $cabinet;


    /**
     * Set cabinet
     *
     * @param \OrthoBundle\Entity\Cabinetsdentaires $cabinet
     * @return PoidsAppareillages
     */
    public function setCabinet(\OrthoBundle\Entity\Cabinetsdentaires $cabinet = null)
    {
        $this->cabinet = $cabinet;

        return $this;
    }

    /**
     * Get cabinet
     *
     * @return \OrthoBundle\Entity\Cabinetsdentaires 
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }
}
