<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 */
class Reclamation
{
    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Projet\FreelancerBundle\Entity\Projet
     */
    private $projet;

    /**
     * @var \Projet\FreelancerBundle\Entity\JobOwner
     */
    private $jobowner;

    /**
     * @var \Projet\FreelancerBundle\Entity\Projet
     */
    private $freelancer;


    /**
     * Set titre
     *
     * @param string $titre
     * @return Reclamation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Reclamation
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
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
     * Set projet
     *
     * @param \Projet\FreelancerBundle\Entity\Projet $projet
     * @return Reclamation
     */
    public function setProjet(\Projet\FreelancerBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \Projet\FreelancerBundle\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set jobowner
     *
     * @param \Projet\FreelancerBundle\Entity\JobOwner $jobowner
     * @return Reclamation
     */
    public function setJobowner(\Projet\FreelancerBundle\Entity\JobOwner $jobowner = null)
    {
        $this->jobowner = $jobowner;

        return $this;
    }

    /**
     * Get jobowner
     *
     * @return \Projet\FreelancerBundle\Entity\JobOwner 
     */
    public function getJobowner()
    {
        return $this->jobowner;
    }

    /**
     * Set freelancer
     *
     * @param \Projet\FreelancerBundle\Entity\Projet $freelancer
     * @return Reclamation
     */
    public function setFreelancer(\Projet\FreelancerBundle\Entity\Projet $freelancer = null)
    {
        $this->freelancer = $freelancer;

        return $this;
    }

    /**
     * Get freelancer
     *
     * @return \Projet\FreelancerBundle\Entity\Projet 
     */
    public function getFreelancer()
    {
        return $this->freelancer;
    }
}
