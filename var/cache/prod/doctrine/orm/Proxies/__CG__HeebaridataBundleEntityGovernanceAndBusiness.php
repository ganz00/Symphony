<?php

namespace Proxies\__CG__\Heebari\dataBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GovernanceAndBusiness extends \Heebari\dataBundle\Entity\GovernanceAndBusiness implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'idGovernanceAndBusiness', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'dateOfInformation', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'politicalStabilityScore', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'changeInpower', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'transparency', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'ruleOfLaw', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'corruption', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'administrativeBurden', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'businessEnvirScore', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'idCountry'];
        }

        return ['__isInitialized__', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'idGovernanceAndBusiness', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'dateOfInformation', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'politicalStabilityScore', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'changeInpower', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'transparency', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'ruleOfLaw', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'corruption', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'administrativeBurden', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'businessEnvirScore', '' . "\0" . 'Heebari\\dataBundle\\Entity\\GovernanceAndBusiness' . "\0" . 'idCountry'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GovernanceAndBusiness $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getIdGovernanceAndBusiness()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdGovernanceAndBusiness();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGovernanceAndBusiness', []);

        return parent::getIdGovernanceAndBusiness();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfInformation($dateOfInformation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfInformation', [$dateOfInformation]);

        return parent::setDateOfInformation($dateOfInformation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfInformation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfInformation', []);

        return parent::getDateOfInformation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoliticalStabilityScore($politicalStabilityScore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoliticalStabilityScore', [$politicalStabilityScore]);

        return parent::setPoliticalStabilityScore($politicalStabilityScore);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoliticalStabilityScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoliticalStabilityScore', []);

        return parent::getPoliticalStabilityScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangeInpower($changeInpower)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangeInpower', [$changeInpower]);

        return parent::setChangeInpower($changeInpower);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangeInpower()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangeInpower', []);

        return parent::getChangeInpower();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransparency($transparency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransparency', [$transparency]);

        return parent::setTransparency($transparency);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransparency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransparency', []);

        return parent::getTransparency();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuleOfLaw($ruleOfLaw)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuleOfLaw', [$ruleOfLaw]);

        return parent::setRuleOfLaw($ruleOfLaw);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleOfLaw()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuleOfLaw', []);

        return parent::getRuleOfLaw();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorruption($corruption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorruption', [$corruption]);

        return parent::setCorruption($corruption);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorruption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorruption', []);

        return parent::getCorruption();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdministrativeBurden($administrativeBurden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdministrativeBurden', [$administrativeBurden]);

        return parent::setAdministrativeBurden($administrativeBurden);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdministrativeBurden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdministrativeBurden', []);

        return parent::getAdministrativeBurden();
    }

    /**
     * {@inheritDoc}
     */
    public function setBusinessEnvirScore($businessEnvirScore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBusinessEnvirScore', [$businessEnvirScore]);

        return parent::setBusinessEnvirScore($businessEnvirScore);
    }

    /**
     * {@inheritDoc}
     */
    public function getBusinessEnvirScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBusinessEnvirScore', []);

        return parent::getBusinessEnvirScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCountry(\Heebari\dataBundle\Entity\Country $idCountry = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCountry', [$idCountry]);

        return parent::setIdCountry($idCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCountry', []);

        return parent::getIdCountry();
    }

}
