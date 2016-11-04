<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Freelancer
 */
class Freelancer
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $motdepasse;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $addresse;

    /**
     * @var string
     */
    private $cv;

    /**
     * @var string
     */
    private $specialite;

    /**
     * @var integer
     */
    private $jeton;

    /**
     * @var string
     */
    private $evaluation;

    /**
     * @var integer
     */
    private $telephone;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set email
     *
     * @param string $email
     * @return Freelancer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     * @return Freelancer
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string 
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Freelancer
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
     * Set prenom
     *
     * @param string $prenom
     * @return Freelancer
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Freelancer
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Freelancer
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
     * Set addresse
     *
     * @param string $addresse
     * @return Freelancer
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string 
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set cv
     *
     * @param string $cv
     * @return Freelancer
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return Freelancer
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set jeton
     *
     * @param integer $jeton
     * @return Freelancer
     */
    public function setJeton($jeton)
    {
        $this->jeton = $jeton;

        return $this;
    }

    /**
     * Get jeton
     *
     * @return integer 
     */
    public function getJeton()
    {
        return $this->jeton;
    }

    /**
     * Set evaluation
     *
     * @param string $evaluation
     * @return Freelancer
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return string 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Freelancer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
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
}
