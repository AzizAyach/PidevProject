<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $reponseCorrect;

    /**
     * @var string
     */
    private $reponseFausse1;

    /**
     * @var string
     */
    private $reponseFausse2;

    /**
     * @var string
     */
    private $reponseFausse3;

    /**
     * @var string
     */
    private $reponseFausse4;

    /**
     * @var string
     */
    private $idCategorie;

    /**
     * @var integer
     */
    private $idQuest;

    /**
     * @var \Projet\FreelancerBundle\Entity\Test
     */
    private $idTest;
    
    /**
     * @var integer
     */
    private $indice;
    function getIndice() {
        return $this->indice;
    }

    function setIndice($indice) {
        $this->indice = $indice;
    }

    
    /**
     * Set nom
     *
     * @param string $nom
     * @return Question
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
     * Set reponseCorrect
     *
     * @param string $reponseCorrect
     * @return Question
     */
    public function setReponseCorrect($reponseCorrect)
    {
        $this->reponseCorrect = $reponseCorrect;

        return $this;
    }

    /**
     * Get reponseCorrect
     *
     * @return string 
     */
    public function getReponseCorrect()
    {
        return $this->reponseCorrect;
    }

    /**
     * Set reponseFausse1
     *
     * @param string $reponseFausse1
     * @return Question
     */
    public function setReponseFausse1($reponseFausse1)
    {
        $this->reponseFausse1 = $reponseFausse1;

        return $this;
    }

    /**
     * Get reponseFausse1
     *
     * @return string 
     */
    public function getReponseFausse1()
    {
        return $this->reponseFausse1;
    }

    /**
     * Set reponseFausse2
     *
     * @param string $reponseFausse2
     * @return Question
     */
    public function setReponseFausse2($reponseFausse2)
    {
        $this->reponseFausse2 = $reponseFausse2;

        return $this;
    }

    /**
     * Get reponseFausse2
     *
     * @return string 
     */
    public function getReponseFausse2()
    {
        return $this->reponseFausse2;
    }

    /**
     * Set reponseFausse3
     *
     * @param string $reponseFausse3
     * @return Question
     */
    public function setReponseFausse3($reponseFausse3)
    {
        $this->reponseFausse3 = $reponseFausse3;

        return $this;
    }

    /**
     * Get reponseFausse3
     *
     * @return string 
     */
    public function getReponseFausse3()
    {
        return $this->reponseFausse3;
    }

    /**
     * Set reponseFausse4
     *
     * @param string $reponseFausse4
     * @return Question
     */
    public function setReponseFausse4($reponseFausse4)
    {
        $this->reponseFausse4 = $reponseFausse4;

        return $this;
    }

    /**
     * Get reponseFausse4
     *
     * @return string 
     */
    public function getReponseFausse4()
    {
        return $this->reponseFausse4;
    }

    /**
     * Set idCategorie
     *
     * @param string $idCategorie
     * @return Question
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return string 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Get idQuest
     *
     * @return integer 
     */
    public function getIdQuest()
    {
        return $this->idQuest;
    }

    /**
     * Set idTest
     *
     * @param \Projet\FreelancerBundle\Entity\Test $idTest
     * @return Question
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
}
