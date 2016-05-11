<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinetsdentaires
 */
class Cabinetsdentaires
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var int
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
    private $email;

    /**
     * @var string
     */
    private $telephoneCab;

    private $username;

    private $password;

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
         * Set username
         *
         * @param string $username
         * @return Cabinetsdentaires
         */
        public
        function setUsername($username)
        {
            $this->username = $username;

            return $this;
        }

        /**
         * Get username
         *
         * @return string
         */
        public
        function getUsername()
        {
            return $this->username;
        }

        /**
         * Set password
         *
         * @param string $password
         * @return Cabinetsdentaires
         */
        public
        function setPassword($password)
        {
            $this->password = $password;

            return $this;
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
        public
        function getPoids()
        {
            return $this->poids;
        }


        /**Get password
         *
         * @return string
         */
        public
        function getPassword()
        {
            return $this->password;
        }

        /**
         * Set email
         *
         * @param string $email
         * @return Cabinetsdentaires
         */
        public
        function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }

        /**
         * Get email
         *
         * @return string
         */
        public
        function getEmail()
        {
            return $this->email;
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
}
