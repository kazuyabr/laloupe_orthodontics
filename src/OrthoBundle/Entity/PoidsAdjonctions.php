<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsAdjonctions
 */
class PoidsAdjonctions
{
    // CUSTOM CODE

    private $fidAdjonction;

    private $cabinet;

    // Constructeur pour le poids et l'appareillage. On ne peut pas créer une nouvelle instance de classe
    // [...] Sans définir le cabinet en question et l'appareillage qui lui est lié.
    public function __construct(Cabinetsdentaires $cabinet, Adjonctions $adjonction)
    {
        // Déclaration des variables du constructeur.
        $this->cabinet = $cabinet;
        $this->fidAdjonction = $adjonction;
    }

    // Méthode incrementation() : Incrémentation du poids, si ce dernier est renseigné.
    public function incrementation()
    {
        // On incrémente juste de 1 avec le "++;"
        $this->poids++;
    }

    // GENERATED CODE
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $poids = 1;


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
     * @return PoidsAdjonctions
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
     * Set fidAdjonction
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdjonction
     * @return PoidsAdjonctions
     */
    public function setFidAdjonction(\OrthoBundle\Entity\Adjonctions $fidAdjonction = null)
    {
        $this->fidAdjonction = $fidAdjonction;

        return $this;
    }

    /**
     * Get fidAdjonction
     *
     * @return \OrthoBundle\Entity\Adjonctions 
     */
    public function getFidAdjonction()
    {
        return $this->fidAdjonction;
    }

    /**
     * Set cabinet
     *
     * @param \OrthoBundle\Entity\Cabinetsdentaires $cabinet
     * @return PoidsAdjonctions
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
