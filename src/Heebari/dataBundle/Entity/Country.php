<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country", indexes={@ORM\Index(name="FK_country_population_parameter", columns={"id_population_parameter"}), @ORM\Index(name="FK_country_currency", columns={"id_currency"})})
 * @ORM\Entity
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=50, nullable=false)
     */
    private $countryName;

    /**
     * @var \Currency
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_currency", referencedColumnName="id_currency")
     * })
     */
    private $idCurrency;

    /**
     * @var \PopulationParameter
     *
     * @ORM\ManyToOne(targetEntity="PopulationParameter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_population_parameter", referencedColumnName="id_population_parameter")
     * })
     */
    private $idPopulationParameter;



    /**
     * Get idCountry
     *
     * @return integer
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set countryName
     *
     * @param string $countryName
     *
     * @return Country
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set idCurrency
     *
     * @param \Heebari\dataBundle\Entity\Currency $idCurrency
     *
     * @return Country
     */
    public function setIdCurrency(\Heebari\dataBundle\Entity\Currency $idCurrency = null)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return \Heebari\dataBundle\Entity\Currency
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idPopulationParameter
     *
     * @param \Heebari\dataBundle\Entity\PopulationParameter $idPopulationParameter
     *
     * @return Country
     */
    public function setIdPopulationParameter(\Heebari\dataBundle\Entity\PopulationParameter $idPopulationParameter = null)
    {
        $this->idPopulationParameter = $idPopulationParameter;

        return $this;
    }

    /**
     * Get idPopulationParameter
     *
     * @return \Heebari\dataBundle\Entity\PopulationParameter
     */
    public function getIdPopulationParameter()
    {
        return $this->idPopulationParameter;
    }
}
