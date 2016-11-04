<?php

namespace Projet\FreelancerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobOwner
 */
class JobOwner
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
    private $telephone;

    /**
     * @var string
     */
    private $entreprise;

    /**
     * @var integer
     */
    private $jeton;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set email
     *
     * @param string $email
     * @return JobOwner
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
     * @return JobOwner
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
     * @return JobOwner
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
     * @return JobOwner
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
     * @return JobOwner
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
     * @return JobOwner
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
     * @return JobOwner
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
     * Set telephone
     *
     * @param string $telephone
     * @return JobOwner
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
     * Set entreprise
     *
     * @param string $entreprise
     * @return JobOwner
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set jeton
     *
     * @param integer $jeton
     * @return JobOwner
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
