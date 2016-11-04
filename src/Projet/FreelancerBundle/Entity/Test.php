<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var string
     */
    private $categorieId;

    /**
     * @var integer
     */
    private $idTest;


    /**
     * Set categorieId
     *
     * @param string $categorieId
     * @return Test
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return string 
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Get idTest
     *
     * @return integer 
     */
    public function getIdTest()
    {
        return $this->idTest;
    }
}
