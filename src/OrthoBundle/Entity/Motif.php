<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motif
 */
class Motif
{

    public function __toString()
    {
        return $this->nomMotif;
    }

    /**
     * @var int
     */
    private $idMotif;

    /**
     * @var string
     */
    private $nomMotif;


    /**
     * Get idMotif
     *
     * @return integer
     */
    public function getIdMotif()
    {
        return $this->idMotif;
    }

    /**
     * Set nomMotif
     *
     * @param string $nomMotif
     * @return Motif
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
