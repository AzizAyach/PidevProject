<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 */
class Projet
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $affecte;

    /**
     * @var integer
     */
    private $prixmin;

    /**
     * @var integer
     */
    private $prixmax;

    /**
     * @var boolean
     */
    private $finalise;

    /**
     * @var string
     */
    private $dateprojet;

    /**
     * @var integer
     */
    private $idOffre;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Projet\FreelancerBundle\Entity\JobOwner
     */
    private $idJobOwner;

    /**
     * @var \Projet\FreelancerBundle\Entity\Categorie
     */
    private $idCategorie;

    /**
     * @var \Projet\FreelancerBundle\Entity\Freelancer
     */
    private $idFreelancer;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Projet
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
     * Set description
     *
     * @param string $description
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set affecte
     *
     * @param boolean $affecte
     * @return Projet
     */
    public function setAffecte($affecte)
    {
        $this->affecte = $affecte;

        return $this;
    }

    /**
     * Get affecte
     *
     * @return boolean 
     */
    public function getAffecte()
    {
        return $this->affecte;
    }

    /**
     * Set prixmin
     *
     * @param integer $prixmin
     * @return Projet
     */
    public function setPrixmin($prixmin)
    {
        $this->prixmin = $prixmin;

        return $this;
    }

    /**
     * Get prixmin
     *
     * @return integer 
     */
    public function getPrixmin()
    {
        return $this->prixmin;
    }

    /**
     * Set prixmax
     *
     * @param integer $prixmax
     * @return Projet
     */
    public function setPrixmax($prixmax)
    {
        $this->prixmax = $prixmax;

        return $this;
    }

    /**
     * Get prixmax
     *
     * @return integer 
     */
    public function getPrixmax()
    {
        return $this->prixmax;
    }

    /**
     * Set finalise
     *
     * @param boolean $finalise
     * @return Projet
     */
    public function setFinalise($finalise)
    {
        $this->finalise = $finalise;

        return $this;
    }

    /**
     * Get finalise
     *
     * @return boolean 
     */
    public function getFinalise()
    {
        return $this->finalise;
    }

    /**
     * Set dateprojet
     *
     * @param string $dateprojet
     * @return Projet
     */
    public function setDateprojet($dateprojet)
    {
        $this->dateprojet = $dateprojet;

        return $this;
    }

    /**
     * Get dateprojet
     *
     * @return string 
     */
    public function getDateprojet()
    {
        return $this->dateprojet;
    }

    /**
     * Set idOffre
     *
     * @param integer $idOffre
     * @return Projet
     */
    public function setIdOffre($idOffre)
    {
        $this->idOffre = $idOffre;

        return $this;
    }

    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
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
     * Set idJobOwner
     *
     * @param \Projet\FreelancerBundle\Entity\JobOwner $idJobOwner
     * @return Projet
     */
    public function setIdJobOwner(\Projet\FreelancerBundle\Entity\JobOwner $idJobOwner = null)
    {
        $this->idJobOwner = $idJobOwner;

        return $this;
    }

    /**
     * Get idJobOwner
     *
     * @return \Projet\FreelancerBundle\Entity\JobOwner 
     */
    public function getIdJobOwner()
    {
        return $this->idJobOwner;
    }

    /**
     * Set idCategorie
     *
     * @param \Projet\FreelancerBundle\Entity\Categorie $idCategorie
     * @return Projet
     */
    public function setIdCategorie(\Projet\FreelancerBundle\Entity\Categorie $idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return \Projet\FreelancerBundle\Entity\Categorie 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idFreelancer
     *
     * @param \Projet\FreelancerBundle\Entity\Freelancer $idFreelancer
     * @return Projet
     */
    public function setIdFreelancer(\Projet\FreelancerBundle\Entity\Freelancer $idFreelancer = null)
    {
        $this->idFreelancer = $idFreelancer;

        return $this;
    }

    /**
     * Get idFreelancer
     *
     * @return \Projet\FreelancerBundle\Entity\Freelancer 
     */
    public function getIdFreelancer()
    {
        return $this->idFreelancer;
    }
    
}
