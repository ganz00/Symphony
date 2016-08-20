<?php

namespace Proxies\__CG__\Heebari\dataBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ColectivityParameters extends \Heebari\dataBundle\Entity\ColectivityParameters implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'idCollectiviteParams', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'dateOfInformation', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'typeCollectivity', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalDensity', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'localSurface', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalQualificationLev', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalCostLabour', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'localTemperature', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'grossDomesticProduct', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'idCollectivity'];
        }

        return ['__isInitialized__', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'idCollectiviteParams', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'dateOfInformation', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'typeCollectivity', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalDensity', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'localSurface', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalQualificationLev', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'averageLocalCostLabour', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'localTemperature', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'grossDomesticProduct', '' . "\0" . 'Heebari\\dataBundle\\Entity\\ColectivityParameters' . "\0" . 'idCollectivity'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ColectivityParameters $proxy) {
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
    public function getIdCollectiviteParams()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCollectiviteParams();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCollectiviteParams', []);

        return parent::getIdCollectiviteParams();
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
    public function setTypeCollectivity($typeCollectivity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeCollectivity', [$typeCollectivity]);

        return parent::setTypeCollectivity($typeCollectivity);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeCollectivity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeCollectivity', []);

        return parent::getTypeCollectivity();
    }

    /**
     * {@inheritDoc}
     */
    public function setAverageLocalDensity($averageLocalDensity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAverageLocalDensity', [$averageLocalDensity]);

        return parent::setAverageLocalDensity($averageLocalDensity);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverageLocalDensity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverageLocalDensity', []);

        return parent::getAverageLocalDensity();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalSurface($localSurface)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalSurface', [$localSurface]);

        return parent::setLocalSurface($localSurface);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalSurface()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalSurface', []);

        return parent::getLocalSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setAverageLocalQualificationLev($averageLocalQualificationLev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAverageLocalQualificationLev', [$averageLocalQualificationLev]);

        return parent::setAverageLocalQualificationLev($averageLocalQualificationLev);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverageLocalQualificationLev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverageLocalQualificationLev', []);

        return parent::getAverageLocalQualificationLev();
    }

    /**
     * {@inheritDoc}
     */
    public function setAverageLocalCostLabour($averageLocalCostLabour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAverageLocalCostLabour', [$averageLocalCostLabour]);

        return parent::setAverageLocalCostLabour($averageLocalCostLabour);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverageLocalCostLabour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverageLocalCostLabour', []);

        return parent::getAverageLocalCostLabour();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalTemperature($localTemperature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalTemperature', [$localTemperature]);

        return parent::setLocalTemperature($localTemperature);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalTemperature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalTemperature', []);

        return parent::getLocalTemperature();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrossDomesticProduct($grossDomesticProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrossDomesticProduct', [$grossDomesticProduct]);

        return parent::setGrossDomesticProduct($grossDomesticProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrossDomesticProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrossDomesticProduct', []);

        return parent::getGrossDomesticProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCollectivity(\Heebari\dataBundle\Entity\Collectivity $idCollectivity = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCollectivity', [$idCollectivity]);

        return parent::setIdCollectivity($idCollectivity);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCollectivity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCollectivity', []);

        return parent::getIdCollectivity();
    }

}