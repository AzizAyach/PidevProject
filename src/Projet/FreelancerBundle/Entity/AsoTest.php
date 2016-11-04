<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsoTest
 */
class AsoTest
{
    /**
     * @var integer
     */
    private $idAs;

    /**
     * @var \Projet\FreelancerBundle\Entity\Test
     */
    private $idTest;

    /**
     * @var \Projet\FreelancerBundle\Entity\Question
     */
    private $idQuest;


    /**
     * Get idAs
     *
     * @return integer 
     */
    public function getIdAs()
    {
        return $this->idAs;
    }

    /**
     * Set idTest
     *
     * @param \Projet\FreelancerBundle\Entity\Test $idTest
     * @return AsoTest
     */
    public function setIdTest(\Projet\FreelancerBundle\Entity\Test $idTest = null)
    {
        $this->idTest = $idTest;

        return $this;
    }

    /**
     * Get idTest
     *
     * @return \Projet\FreelancerBundle\Entity\Test 
     */
    public function getIdTest()
    {
        return $this->idTest;
    }

    /**
     * Set idQuest
     *
     * @param \Projet\FreelancerBundle\Entity\Question $idQuest
     * @return AsoTest
     */
    public function setIdQuest(\Projet\FreelancerBundle\Entity\Question $idQuest = null)
    {
        $this->idQuest = $idQuest;

        return $this;
    }

    /**
     * Get idQuest
     *
     * @return \Projet\FreelancerBundle\Entity\Question 
     */
    public function getIdQuest()
    {
        return $this->idQuest;
    }
}
