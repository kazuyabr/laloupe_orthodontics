<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adjonctions
 */
class Adjonctions
{
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
    private $imgAdj;

    /**
     * @var string
     */
    private $commentairesAdj;


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
}
