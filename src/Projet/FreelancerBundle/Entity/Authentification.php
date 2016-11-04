<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authentification
 */
class Authentification
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $typeU;

    /**
     * @var integer
     */
    private $idU;


    /**
     * Set login
     *
     * @param string $login
     * @return Authentification
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Authentification
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set typeU
     *
     * @param integer $typeU
     * @return Authentification
     */
    public function setTypeU($typeU)
    {
        $this->typeU = $typeU;

        return $this;
    }

    /**
     * Get typeU
     *
     * @return integer 
     */
    public function getTypeU()
    {
        return $this->typeU;
    }

    /**
     * Get idU
     *
     * @return integer 
     */
    public function getIdU()
    {
        return $this->idU;
    }
}
