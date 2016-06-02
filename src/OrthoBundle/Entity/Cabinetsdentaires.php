<?php

namespace OrthoBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Cabinetsdentaires
 */
class Cabinetsdentaires extends BaseUser
{
    // CUSTOM CODE

    public function __toString()
    {
        return $this->fidLabo;
    }

    private $poidsAdjonction;


    public function activationDuCompte()
    {
        $this->setEnabled(true);
    }

    public function attributionDuRole()
    {
        $this->setRoles(array('ROLE_ADMIN'));
    }
    
    public function getActualUser()
    {
        return $this->id;
    }
    
    
    // GENERATED CODE
    
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \OrthoBundle\Entity\Laboratoire
     */
    private $fidLabo;

    /**
     * @var string
     */
    private $nomCab;

    /**
     * @var string
     */
    private $adresseCab;

    /**
     * @var string
     */
    private $codepostalCab;

    /**
     * @var string
     */
    private $villeCab;
    
    /**
     * @var string
     */
    private $telephoneCab;

    /**
     * @var string
     */
    private $adressebisCab;
    /**
     * @var string
     */
    private $codepostalbisCab;
    /**
     * @var string
     */
    private $villebisCab;
    /**
     * @var string
     */
    private $telephonebisCab;
    /**
     * @var string
     */
    private $mailCab;
    /**
     * @var string
     */
    private $emailbisCab;
    /**
     * @var string
     */
    private $emailterCab;

    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $poids;
    
    /**
     * Get idCab
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


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
     * Set nomCab
     *
     * @param string $nomCab
     * @return Cabinetsdentaires
     */
    public function setNomCab($nomCab)
    {
        $this->nomCab = $nomCab;

        return $this;
    }

    /**
     * Get nomCab
     *
     * @return string
     */
    public function getNomCab()
    {
        return $this->nomCab;
    }

    /**
     * Set adresseCab
     *
     * @param string $adresseCab
     * @return Cabinetsdentaires
     */
    public function setAdresseCab($adresseCab)
    {
        $this->adresseCab = $adresseCab;

        return $this;
    }

    /**
     * Get adresseCab
     *
     * @return string
     */
    public function getAdresseCab()
    {
        return $this->adresseCab;
    }

    /**
     * Set codepostalCab
     *
     * @param string $codepostalCab
     * @return Cabinetsdentaires
     */
    public function setCodepostalCab($codepostalCab)
    {
        $this->codepostalCab = $codepostalCab;

        return $this;
    }

    /**
     * Get codepostalCab
     *
     * @return string
     */
    public function getCodepostalCab()
    {
        return $this->codepostalCab;
    }

    /**
     * Set villeCab
     *
     * @param string $villeCab
     * @return Cabinetsdentaires
     */
    public function setVilleCab($villeCab)
    {
        $this->villeCab = $villeCab;

        return $this;
    }

    /**
     * Get villeCab
     *
     * @return string
     */
    public function getVilleCab()
    {
        return $this->villeCab;
    }

    /**
     * Set telephoneCab
     *
     * @param string $telephoneCab
     * @return Cabinetsdentaires
     */
    public function setTelephoneCab($telephoneCab)
    {
        $this->telephoneCab = $telephoneCab;

        return $this;
    }

    /**
     * Get telephoneCab
     *
     * @return string
     */
    public function getTelephoneCab()
    {
        return $this->telephoneCab;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->poids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     * @return Cabinetsdentaires
     */
    public function addPoids(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids[] = $poids;
    }
    
    /**
     * Remove poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     */
    public
    function removePoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
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
     * Add poids
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poids
     * @return Cabinetsdentaires
     */
    public function addPoid(\OrthoBundle\Entity\PoidsAppareillages $poids)
    {
        $this->poids[] = $poids;

        return $this;
    }

    /**
     * Add poidsAdjonction
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction
     * @return Cabinetsdentaires
     */
    public function addPoidsAdjonction(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction)
    {
        $this->poidsAdjonction[] = $poidsAdjonction;

        return $this;
    }

    /**
     * Remove poidsAdjonction
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction
     */
    public function removePoidsAdjonction(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdjonction)
    {
        $this->poidsAdjonction->removeElement($poidsAdjonction);
    }

    /**
     * Get poidsAdjonction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoidsAdjonction()
    {
        return $this->poidsAdjonction;
    }

    /**
     * Set adressebisCab
     *
     * @param string $adressebisCab
     * @return Cabinetsdentaires
     */
    public function setAdressebisCab($adressebisCab)
    {
        $this->adressebisCab = $adressebisCab;

        return $this;
    }

    /**
     * Get adressebisCab
     *
     * @return string 
     */
    public function getAdressebisCab()
    {
        return $this->adressebisCab;
    }

    /**
     * Set codepostalbisCab
     *
     * @param string $codepostalbisCab
     * @return Cabinetsdentaires
     */
    public function setCodepostalbisCab($codepostalbisCab)
    {
        $this->codepostalbisCab = $codepostalbisCab;

        return $this;
    }

    /**
     * Get codepostalbisCab
     *
     * @return string 
     */
    public function getCodepostalbisCab()
    {
        return $this->codepostalbisCab;
    }

    /**
     * Set villebisCab
     *
     * @param string $villebisCab
     * @return Cabinetsdentaires
     */
    public function setVillebisCab($villebisCab)
    {
        $this->villebisCab = $villebisCab;

        return $this;
    }

    /**
     * Get villebisCab
     *
     * @return string 
     */
    public function getVillebisCab()
    {
        return $this->villebisCab;
    }

    /**
     * Set telephonebisCab
     *
     * @param string $telephonebisCab
     * @return Cabinetsdentaires
     */
    public function setTelephonebisCab($telephonebisCab)
    {
        $this->telephonebisCab = $telephonebisCab;

        return $this;
    }

    /**
     * Get telephonebisCab
     *
     * @return string 
     */
    public function getTelephonebisCab()
    {
        return $this->telephonebisCab;
    }

    /**
     * Set emailbisCab
     *
     * @param string $emailbisCab
     * @return Cabinetsdentaires
     */
    public function setEmailbisCab($emailbisCab)
    {
        $this->emailbisCab = $emailbisCab;

        return $this;
    }

    /**
     * Get emailbisCab
     *
     * @return string 
     */
    public function getEmailbisCab()
    {
        return $this->emailbisCab;
    }

    /**
     * Set emailterCab
     *
     * @param string $emailterCab
     * @return Cabinetsdentaires
     */
    public function setEmailterCab($emailterCab)
    {
        $this->emailterCab = $emailterCab;

        return $this;
    }

    /**
     * Get emailterCab
     *
     * @return string 
     */
    public function getEmailterCab()
    {
        return $this->emailterCab;
    }

    /**
     * Set mailCab
     *
     * @param string $mailCab
     * @return Cabinetsdentaires
     */
    public function setMailCab($mailCab)
    {
        $this->mailCab = $mailCab;

        return $this;
    }

    /**
     * Get mailCab
     *
     * @return string 
     */
    public function getMailCab()
    {
        return $this->mailCab;
    }
}
