<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motifs
 */
class Motifs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomMotif;


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
     * Set nomMotif
     *
     * @param string $nomMotif
     * @return Motifs
     */
    public function setNomMotif($nomMotif)
    {
        $this->nomMotif = $nomMotif;

        return $this;
    }

    /**
     * Get nomMotif
     *
     * @return string 
     */
    public function getNomMotif()
    {
        return $this->nomMotif;
    }
}
