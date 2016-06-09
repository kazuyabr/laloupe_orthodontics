<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateurs
 */
class Utilisateurs extends BaseUser
{
    // CUSTOM CODE

    /* Variable relation Doctrine */

    private $categorie;

    private $labo;

    private $poidsAdj;
    
    private $poidsApp;

    private $boutonSpecifique;

    private $commandes;

    /* Fin variable relation Doctrine */

    public function getActualUser()
    {
        return $this->id;
    }
    
    
    // GENERATED CODE

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $telephone;

    private $mailBis;

    private $mailTer;

    private $adresseFacturation;

    private $codePostalFacturation;

    private $villeFacturation;

    private $telephoneFacturation;


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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateurs
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Utilisateurs
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Utilisateurs
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Utilisateurs
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add poidsAdj
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdj
     * @return Utilisateurs
     */
    public function addPoidsAdj(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdj)
    {
        $this->poidsAdj[] = $poidsAdj;

        return $this;
    }

    /**
     * Remove poidsAdj
     *
     * @param \OrthoBundle\Entity\PoidsAdjonctions $poidsAdj
     */
    public function removePoidsAdj(\OrthoBundle\Entity\PoidsAdjonctions $poidsAdj)
    {
        $this->poidsAdj->removeElement($poidsAdj);
    }

    /**
     * Get poidsAdj
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoidsAdj()
    {
        return $this->poidsAdj;
    }

    /**
     * Add poidsApp
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poidsApp
     * @return Utilisateurs
     */
    public function addPoidsApp(\OrthoBundle\Entity\PoidsAppareillages $poidsApp)
    {
        $this->poidsApp[] = $poidsApp;

        return $this;
    }

    /**
     * Remove poidsApp
     *
     * @param \OrthoBundle\Entity\PoidsAppareillages $poidsApp
     */
    public function removePoidsApp(\OrthoBundle\Entity\PoidsAppareillages $poidsApp)
    {
        $this->poidsApp->removeElement($poidsApp);
    }

    /**
     * Get poidsApp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPoidsApp()
    {
        return $this->poidsApp;
    }

    /**
     * Add boutonSpecifique
     *
     * @param \OrthoBundle\Entity\AppAdjLabo $boutonSpecifique
     * @return Utilisateurs
     */
    public function addBoutonSpecifique(\OrthoBundle\Entity\AppAdjLabo $boutonSpecifique)
    {
        $this->boutonSpecifique[] = $boutonSpecifique;

        return $this;
    }

    /**
     * Remove boutonSpecifique
     *
     * @param \OrthoBundle\Entity\AppAdjLabo $boutonSpecifique
     */
    public function removeBoutonSpecifique(\OrthoBundle\Entity\AppAdjLabo $boutonSpecifique)
    {
        $this->boutonSpecifique->removeElement($boutonSpecifique);
    }

    /**
     * Get boutonSpecifique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBoutonSpecifique()
    {
        return $this->boutonSpecifique;
    }

    /**
     * Add commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \OrthoBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\OrthoBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Set categorie
     *
     */
    public function setCategorie(\OrthoBundle\Entity\CategorieUtilisateurs $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \OrthoBundle\Entity\CategorieUtilisateurs 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set labo
     *
     * @param \OrthoBundle\Entity\Utilisateurs $labo
     * @return Utilisateurs
     */
    public function setLabo(\OrthoBundle\Entity\Utilisateurs $labo)
    {
        $this->labo = $labo;

        return $this;
    }

    /**
     * Get labo
     *
     * @return \OrthoBundle\Entity\Utilisateurs 
     */
    public function getLabo()
    {
        return $this->labo;
    }

    /**
     * Set mailBis
     *
     * @param string $mailBis
     * @return Utilisateurs
     */
    public function setMailBis($mailBis)
    {
        $this->mailBis = $mailBis;

        return $this;
    }

    /**
     * Get mailBis
     *
     * @return string 
     */
    public function getMailBis()
    {
        return $this->mailBis;
    }

    /**
     * Set mailTer
     *
     * @param string $mailTer
     * @return Utilisateurs
     */
    public function setMailTer($mailTer)
    {
        $this->mailTer = $mailTer;

        return $this;
    }

    /**
     * Get mailTer
     *
     * @return string 
     */
    public function getMailTer()
    {
        return $this->mailTer;
    }

    /**
     * Set adresseFacturation
     *
     * @param string $adresseFacturation
     * @return Utilisateurs
     */
    public function setAdresseFacturation($adresseFacturation)
    {
        $this->adresseFacturation = $adresseFacturation;

        return $this;
    }

    /**
     * Get adresseFacturation
     *
     * @return string 
     */
    public function getAdresseFacturation()
    {
        return $this->adresseFacturation;
    }

    /**
     * Set codePostalFacturation
     *
     * @param string $codePostalFacturation
     * @return Utilisateurs
     */
    public function setCodePostalFacturation($codePostalFacturation)
    {
        $this->codePostalFacturation = $codePostalFacturation;

        return $this;
    }

    /**
     * Get codePostalFacturation
     *
     * @return string 
     */
    public function getCodePostalFacturation()
    {
        return $this->codePostalFacturation;
    }

    /**
     * Set villeFacturation
     *
     * @param string $villeFacturation
     * @return Utilisateurs
     */
    public function setVilleFacturation($villeFacturation)
    {
        $this->villeFacturation = $villeFacturation;

        return $this;
    }

    /**
     * Get villeFacturation
     *
     * @return string 
     */
    public function getVilleFacturation()
    {
        return $this->villeFacturation;
    }

    /**
     * Set telephoneFacturation
     *
     * @param string $telephoneFacturation
     * @return Utilisateurs
     */
    public function setTelephoneFacturation($telephoneFacturation)
    {
        $this->telephoneFacturation = $telephoneFacturation;

        return $this;
    }

    /**
     * Get telephoneFacturation
     *
     * @return string 
     */
    public function getTelephoneFacturation()
    {
        return $this->telephoneFacturation;
    }
}
