<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Commandes
 * @ORM\Entity(repositoryClass="OrthoBundle\Repository\CommandesRepository")
 */
class Commandes
{

    // CUSTOM CODE

    public function __toString()
    {
        return $this->commentaireLabo;
    }


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

        public function generatePathFilename(sfValidatedFile $file)
        {

                return $this->getId().$file->getExtension($file->getOriginalExtension());
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

    /* Variable relation Doctrine */

    private $adjonctions;
    
    private $appareillages;
    
    private $utilisateur;
    
    private $couleur;


    /**
     * @var \OrthoBundle\Entity\Motifs
     */
    private $motif;

    /* Fin variable relation Doctrine */

    // GENERATED CODE
    /**
     * @var int
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
    private $dateRetour;

    /**
     * @var \DateTime
     */
    private $dateCommande;

    /**
     * @var string
     */
    private $commentaireLabo;

    /**
     * @var string
     */
    private $pathPJ1;

    /**
     * @var string
     */
    private $pathPJ2;

    /**
     * @var string
     */
    private $pathPJ3;

    /**
     * @var string
     */
    private $commentairePrestataire3D;



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
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Commandes
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commandes
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set commentaireLabo
     *
     * @param string $commentaireLabo
     * @return Commandes
     */
    public function setCommentaireLabo($commentaireLabo)
    {
        $this->commentaireLabo = $commentaireLabo;

        return $this;
    }

    /**
     * Get commentaireLabo
     *
     * @return string 
     */
    public function getCommentaireLabo()
    {
        return $this->commentaireLabo;
    }

    /**
     * Set pathPJ1
     *
     * @param string $pathPJ1
     * @return Commandes
     */
    public function setPathPJ1($pathPJ1)
    {
        $this->pathPJ1 = $pathPJ1;

        return $this;
    }

    /**
     * Get pathPJ1
     *
     * @return string 
     */
    public function getPathPJ1()
    {
        return $this->pathPJ1;
    }

    /**
     * Set pathPJ2
     *
     * @param string $pathPJ2
     * @return Commandes
     */
    public function setPathPJ2($pathPJ2)
    {
        $this->pathPJ2 = $pathPJ2;

        return $this;
    }

    /**
     * Get pathPJ2
     *
     * @return string 
     */
    public function getPathPJ2()
    {
        return $this->pathPJ2;
    }

    /**
     * Set pathPJ3
     *
     * @param string $pathPJ3
     * @return Commandes
     */
    public function setPathPJ3($pathPJ3)
    {
        $this->pathPJ3 = $pathPJ3;

        return $this;
    }

    /**
     * Get pathPJ3
     *
     * @return string 
     */
    public function getPathPJ3()
    {
        return $this->pathPJ3;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appareillages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adjonctions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateur
     *
     * @param \OrthoBundle\Entity\Utilisateurs $utilisateur
     * @return Commandes
     */
    public function setUtilisateur(\OrthoBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \OrthoBundle\Entity\Utilisateurs 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
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
     * Add adjonctions
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonctions
     * @return Commandes
     */
    public function addAdjonction(\OrthoBundle\Entity\Adjonctions $adjonctions)
    {
        $this->adjonctions[] = $adjonctions;

        return $this;
    }

    /**
     * Remove adjonctions
     *
     * @param \OrthoBundle\Entity\Adjonctions $adjonctions
     */
    public function removeAdjonction(\OrthoBundle\Entity\Adjonctions $adjonctions)
    {
        $this->adjonctions->removeElement($adjonctions);
    }

    /**
     * Get adjonctions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdjonctions()
    {
        return $this->adjonctions;
    }

    /**
     * Set couleur
     *
     * @param \OrthoBundle\Entity\Couleurs $couleur
     * @return Commandes
     */
    public function setCouleur(\OrthoBundle\Entity\Couleurs $couleur = null)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return \OrthoBundle\Entity\Couleurs 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set motif
     *
     * @param \OrthoBundle\Entity\Motifs $motif
     * @return Commandes
     */
    public function setMotif(\OrthoBundle\Entity\Motifs $motif = null)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return \OrthoBundle\Entity\Motifs
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set commentairePrestataire3D
     *
     * @param string $commentairePrestataire3D
     * @return Commandes
     */
    public function setCommentairePrestataire3D($commentairePrestataire3D)
    {
        $this->commentairePrestataire3D = $commentairePrestataire3D;

        return $this;
    }

    /**
     * Get commentairePrestataire3D
     *
     * @return string 
     */
    public function getCommentairePrestataire3D()
    {
        return $this->commentairePrestataire3D;
    }
}
