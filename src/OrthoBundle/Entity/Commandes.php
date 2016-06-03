<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commandes
 */
class Commandes
{

    // CUSTOM CODE



    public $path1;

    /**
     * @Assert\File(maxSize="600000000")
     */
    public $file1;

    public $path3;

    public $file3;

    public function getAbsolutePath1()
    {
        return null === $this->path1 ? null : $this->getUploadRootDir1().'/'.$this->path1;
    }

    public function getWebPath1()
    {
        return null === $this->path1 ? null : $this->getUploadDir1().'/'.$this->path1;
    }

    protected function getUploadRootDir1()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../web/'.$this->getUploadDir1();
    }

    protected function getUploadDir1()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads';
    }

    public function upload1()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file1) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file1->move($this->getUploadRootDir1(), $this->file1->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path1 = $this->file1->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file1 = null;
    }



    public $path2;

    public $file2;

    public function getAbsolutePath2()
    {
        return null === $this->path2 ? null : $this->getUploadRootDir2().'/'.$this->path2;
    }

    public function getWebPath2()
    {
        return null === $this->path2 ? null : $this->getUploadDir2().'/'.$this->path2;
    }

    protected function getUploadRootDir2()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../web/'.$this->getUploadDir2();
    }

    protected function getUploadDir2()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads';
    }

    public function upload2()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file2) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file2->move($this->getUploadRootDir2(), $this->file2->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path2 = $this->file2->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file2 = null;
    }



    public function getAbsolutePath3()
    {
        return null === $this->path3 ? null : $this->getUploadRootDir3().'/'.$this->path3;
    }

    public function getWebPath3()
    {
        return null === $this->path3 ? null : $this->getUploadDir3().'/'.$this->path3;
    }

    protected function getUploadRootDir3()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../web/'.$this->getUploadDir3();
    }

    protected function getUploadDir3()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads';
    }

    public function upload3()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file3) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file3->move($this->getUploadRootDir3(), $this->file3->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path3 = $this->file3->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file3 = null;
    }






    public function setCreatedAtValue()
    {
        $this->setDatecommande(new \DateTime());
    }


    private $comment2;

    private $ajoutApp;

    private $ajoutAdj;


    /**
     * Get ajoutApp
     *
     */
    public function getAjoutApp()
    {
        return $this->ajoutApp;
    }

    /**
     * Set ajoutApp
     *
     */
    public function setAjoutApp($ajoutApp)
    {
        $this->ajoutApp = $ajoutApp;

        return $this;
    }

    /**
     * Get ajoutAdj
     *
     */
    public function getAjoutAdj()
    {
        return $this->ajoutAdj;
    }

    /**
     * Set ajoutAdj
     *
     */
    public function setAjoutAdj($ajoutAdj)
    {
        $this->ajoutAdj = $ajoutAdj;

        return $this;
    }



    // GENRATED CODE

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    private $referencePatient;

    /**
     * @var string
     */
    private $prenomPatient;

    /**
     * @var \DateTime
     */
    private $dateretour;

    /**
     * @var \DateTime
     */
    private $datecommande;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \OrthoBundle\Entity\Cabinetsdentaires
     */
    private $fidCabinet;

    /**
     * @var \OrthoBundle\Entity\Laboratoire
     */
    private $fidLaboratoire;

    /**
     * @var \OrthoBundle\Entity\Couleur
     */
    private $fidCouleur;

    /**
     * @var \OrthoBundle\Entity\Motif
     */
    private $fidMotif;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $appareillages;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fidAdj;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appareillages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fidAdj = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set referencePatient
     *
     * @param string $referencePatient
     * @return Commandes
     */
    public function setReferencePatient($referencePatient)
    {
        $this->referencePatient = $referencePatient;

        return $this;
    }

    /**
     * Get referencePatient
     *
     * @return string
     */
    public function getReferencePatient()
    {
        return $this->referencePatient;
    }

    /**
     * Set prenomPatient
     *
     * @param string $prenomPatient
     * @return Commandes
     */
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    /**
     * Get prenomPatient
     *
     * @return string
     */
    public function getPrenomPatient()
    {
        return $this->prenomPatient;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Commandes
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     * @return Commandes
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Commandes
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    /**
     * Set comment2
     *
     * @param string $comment2
     * @return Commandes
     */
    public function setComment2($comment2)
    {
        $this->comment2 = $comment2;

        return $this;
    }

    /**
     * Get comment2
     *
     * @return string
     */
    public function getComment2()
    {
        return $this->comment2;
    }

    /**
     * Set fidCabinet
     *
     * @param \OrthoBundle\Entity\Cabinetsdentaires $fidCabinet
     * @return Commandes
     */
    public function setFidCabinet(\OrthoBundle\Entity\Cabinetsdentaires $fidCabinet = null)
    {
        $this->fidCabinet = $fidCabinet;

        return $this;
    }

    /**
     * Get fidCabinet
     *
     * @return \OrthoBundle\Entity\Cabinetsdentaires
     */
    public function getFidCabinet()
    {
        return $this->fidCabinet;
    }

    /**
     * Set fidLaboratoire
     *
     * @param \OrthoBundle\Entity\Laboratoire $fidLaboratoire
     * @return Commandes
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
     * Set fidCouleur
     *
     * @param \OrthoBundle\Entity\Couleur $fidCouleur
     * @return Commandes
     */
    public function setFidCouleur(\OrthoBundle\Entity\Couleur $fidCouleur)
    {
        $this->fidCouleur = $fidCouleur;

        return $this;
    }

    /**
     * Get fidCouleur
     *
     * @return \OrthoBundle\Entity\Couleur
     */
    public function getFidCouleur()
    {
        return $this->fidCouleur;
    }

    /**
     * Set fidMotif
     *
     * @param \OrthoBundle\Entity\Motif $fidMotif
     * @return Commandes
     */
    public function setFidMotif(\OrthoBundle\Entity\Motif $fidMotif)
    {
        $this->fidMotif = $fidMotif;

        return $this;
    }

    /**
     * Get fidMotif
     *
     * @return \OrthoBundle\Entity\Motif
     */
    public function getFidMotif()
    {
        return $this->fidMotif;
    }

    /**
     * Add appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     * @return Commandes
     */
    public function addAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages[] = $appareillages;

        return $this;
    }

    /**
     * Remove appareillages
     *
     * @param \OrthoBundle\Entity\Appareillages $appareillages
     */
    public function removeAppareillage(\OrthoBundle\Entity\Appareillages $appareillages)
    {
        $this->appareillages->removeElement($appareillages);
    }

    /**
     * Get appareillages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppareillages()
    {
        return $this->appareillages;
    }

    /**
     * Add fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     * @return Commandes
     */
    public function addFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj[] = $fidAdj;

        return $this;
    }

    /**
     * Remove fidAdj
     *
     * @param \OrthoBundle\Entity\Adjonctions $fidAdj
     */
    public function removeFidAdj(\OrthoBundle\Entity\Adjonctions $fidAdj)
    {
        $this->fidAdj->removeElement($fidAdj);
    }

    /**
     * Get fidAdj
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFidAdj()
    {
        return $this->fidAdj;
    }

    /**
     * Set piecejointeAM
     *
     * @param string $piecejointeAM
     * @return Commandes
     */
    public function setPiecejointeAM($piecejointeAM)
    {
        $this->piecejointeAM = $piecejointeAM;

        return $this;
    }

    /**
     * Get piecejointeAM
     *
     * @return string 
     */
    public function getPiecejointeAM()
    {
        return $this->piecejointeAM;
    }




}
