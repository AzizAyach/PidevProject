<?php

namespace Proxies\__CG__\Projet\FreelancerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class JobOwner extends \Projet\FreelancerBundle\Entity\JobOwner implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'email', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'motdepasse', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'nom', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'prenom', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'pays', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'ville', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'addresse', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'telephone', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'entreprise', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'jeton', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'id');
        }

        return array('__isInitialized__', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'email', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'motdepasse', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'nom', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'prenom', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'pays', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'ville', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'addresse', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'telephone', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'entreprise', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'jeton', '' . "\0" . 'Projet\\FreelancerBundle\\Entity\\JobOwner' . "\0" . 'id');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (JobOwner $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotdepasse($motdepasse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotdepasse', array($motdepasse));

        return parent::setMotdepasse($motdepasse);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotdepasse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotdepasse', array());

        return parent::getMotdepasse();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', array($pays));

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', array());

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddresse($addresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddresse', array($addresse));

        return parent::setAddresse($addresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresse', array());

        return parent::getAddresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreprise($entreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreprise', array($entreprise));

        return parent::setEntreprise($entreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreprise', array());

        return parent::getEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setJeton($jeton)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJeton', array($jeton));

        return parent::setJeton($jeton);
    }

    /**
     * {@inheritDoc}
     */
    public function getJeton()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJeton', array());

        return parent::getJeton();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

}