<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 */
class Offre
{
    /**
     * @var integer
     */
    private $prix;

    /**
     * @var \DateTime
     */
    private $dateoffre;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $projetId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Projet\FreelancerBundle\Entity\Freelancer
     */
    private $freelancer;


    /**
     * Set prix
     *
     * @param integer $prix
     * @return Offre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateoffre
     *
     * @param \DateTime $dateoffre
     * @return Offre
     */
    public function setDateoffre($dateoffre)
    {
        $this->dateoffre = $dateoffre;

        return $this;
    }

    /**
     * Get dateoffre
     *
     * @return \DateTime 
     */
    public function getDateoffre()
    {
        return $this->dateoffre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
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
     * Set projetId
     *
     * @param integer $projetId
     * @return Offre
     */
    public function setProjetId($projetId)
    {
        $this->projetId = $projetId;

        return $this;
    }

    /**
     * Get projetId
     *
     * @return integer 
     */
    public function getProjetId()
    {
        return $this->projetId;
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
     * Set freelancer
     *
     * @param \Projet\FreelancerBundle\Entity\Freelancer $freelancer
     * @return Offre
     */
    public function setFreelancer(\Projet\FreelancerBundle\Entity\Freelancer $freelancer = null)
    {
        $this->freelancer = $freelancer;

        return $this;
    }

    /**
     * Get freelancer
     *
     * @return \Projet\FreelancerBundle\Entity\Freelancer 
     */
    public function getFreelancer()
    {
        return $this->freelancer;
    }
}
