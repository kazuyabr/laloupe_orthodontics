<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAdjLabo
 */
class AppAdjLabo
{
    private $utilisateur;

    private $adjonction;

    private $appareillage;
    /**
     * @var int
     */
    private $id;


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
