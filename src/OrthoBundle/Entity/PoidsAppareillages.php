<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsAppareillages
 */
class PoidsAppareillages
{
    /**
     * @var int
     */
    private $id;

    /* Déclaration des variables utilisés pour les relations Doctrine */
    private $fidAppareillages;
    
    private $fidLaboratoire;
    /* Fin de délcaration des variables utilisés pour les relations Doctrine */


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
