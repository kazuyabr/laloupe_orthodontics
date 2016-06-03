<?php

namespace OrthoBundle\Entity;

/**
 * AppAdjLabo
 */
class AppAdjLabo
{
    
    
    // CUSTOM CODE
    
    
    
    
    
    // GENERATED CODE
    
    /**
     * @var int
     */
    private $idAppAdjLabo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idAppAdjLabo;
    }

    /**
     * Set fidApp
     *
     * @param integer $fidApp
     * @return AppAdjLabo
     */
    public function setFidApp($fidApp)
    {
        $this->fidApp = $fidApp;

        return $this;
    }

    /**
     * Get fidApp
     *
     * @return integer 
     */
    public function getFidApp()
    {
        return $this->fidApp;
    }

    /**
     * Set fidAdj
     *
     * @param integer $fidAdj
     * @return AppAdjLabo
     */
    public function setFidAdj($fidAdj)
    {
        $this->fidAdj = $fidAdj;

        return $this;
    }

    /**
     * Get fidAdj
     *
     * @return integer 
     */
    public function getFidAdj()
    {
        return $this->fidAdj;
    }

    /**
     * Set fidLabo
     *
     * @param integer $fidLabo
     * @return AppAdjLabo
     */
    public function setFidLabo($fidLabo)
    {
        $this->fidLabo = $fidLabo;

        return $this;
    }

    /**
     * Get fidLabo
     *
     * @return integer 
     */
    public function getFidLabo()
    {
        return $this->fidLabo;
    }

    /**
     * Get idAppAdjLabo
     *
     * @return integer 
     */
    public function getIdAppAdjLabo()
    {
        return $this->idAppAdjLabo;
    }
}
