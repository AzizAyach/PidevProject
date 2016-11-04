<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 */
class Evaluation
{
    /**
     * @var integer
     */
    private $note;


    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
}
