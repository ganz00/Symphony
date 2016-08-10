<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PopulationParameter
 *
 * @ORM\Table(name="population_parameter", uniqueConstraints={@ORM\UniqueConstraint(name="id_locality_date_of_information", columns={"id_locality", "date_of_information"})}, indexes={@ORM\Index(name="FK_population_parameter_population_distribution", columns={"id_population_distribution"}), @ORM\Index(name="IDX_72904060B10D5473", columns={"id_locality"})})
 * @ORM\Entity(repositoryClass="Heebari\dataBundle\Entity\PopulationParameterRepository")
 */

//TODO add banking penetration rate 

class PopulationParameter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_population_parameter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPopulationParameter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_locality", type="string", nullable=true)
     */
    private $typeLocality;

    /**
     * @var float
     *
     * @ORM\Column(name="literacy_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $literacyRate;

    /**
     * @var float
     *
     * @ORM\Column(name="population", type="float", precision=10, scale=0, nullable=true)
     */
    private $population;

    /**
     * @var float
     *
     * @ORM\Column(name="average_wealth", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageWealth;

    /**
     * @var float
     *
     * @ORM\Column(name="density", type="float", precision=10, scale=0, nullable=true)
     */
    private $density;

    /**
     * @var float
     *
     * @ORM\Column(name="fecondity_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $fecondityRate;

    /**
     * @var \Collectivity
     *
     * @ORM\ManyToOne(targetEntity="Collectivity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_locality", referencedColumnName="id_collectivity")
     * })
     */
    private $idLocality;

    /**
     * @var \PopulationDistribution
     *
     * @ORM\ManyToOne(targetEntity="PopulationDistribution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_population_distribution", referencedColumnName="id_population_distribution")
     * })
     */
    private $idPopulationDistribution;



    /**
     * Get idPopulationParameter
     *
     * @return integer
     */
    public function getIdPopulationParameter()
    {
        return $this->idPopulationParameter;
    }

    /**
     * Set dateOfInformation
     *
     * @param integer $dateOfInformation
     *
     * @return PopulationParameter
     */
    public function setDateOfInformation($dateOfInformation)
    {
        $this->dateOfInformation = $dateOfInformation;

        return $this;
    }

    /**
     * Get dateOfInformation
     *
     * @return integer
     */
    public function getDateOfInformation()
    {
        return $this->dateOfInformation;
    }

    /**
     * Set typeLocality
     *
     * @param string $typeLocality
     *
     * @return PopulationParameter
     */
    public function setTypeLocality($typeLocality)
    {
        $this->typeLocality = $typeLocality;

        return $this;
    }

    /**
     * Get typeLocality
     *
     * @return string
     */
    public function getTypeLocality()
    {
        return $this->typeLocality;
    }

    /**
     * Set literacyRate
     *
     * @param float $literacyRate
     *
     * @return PopulationParameter
     */
    public function setLiteracyRate($literacyRate)
    {
        $this->literacyRate = $literacyRate;

        return $this;
    }

    /**
     * Get literacyRate
     *
     * @return float
     */
    public function getLiteracyRate()
    {
        return $this->literacyRate;
    }

    /**
     * Set population
     *
     * @param float $population
     *
     * @return PopulationParameter
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get population
     *
     * @return float
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set averageWealth
     *
     * @param float $averageWealth
     *
     * @return PopulationParameter
     */
    public function setAverageWealth($averageWealth)
    {
        $this->averageWealth = $averageWealth;

        return $this;
    }

    /**
     * Get averageWealth
     *
     * @return float
     */
    public function getAverageWealth()
    {
        return $this->averageWealth;
    }

    /**
     * Set density
     *
     * @param float $density
     *
     * @return PopulationParameter
     */
    public function setDensity($density)
    {
        $this->density = $density;

        return $this;
    }

    /**
     * Get density
     *
     * @return float
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * Set fecondityRate
     *
     * @param float $fecondityRate
     *
     * @return PopulationParameter
     */
    public function setFecondityRate($fecondityRate)
    {
        $this->fecondityRate = $fecondityRate;

        return $this;
    }

    /**
     * Get fecondityRate
     *
     * @return float
     */
    public function getFecondityRate()
    {
        return $this->fecondityRate;
    }

    /**
     * Set idLocality
     *
     * @param \Heebari\dataBundle\Entity\Collectivity $idLocality
     *
     * @return PopulationParameter
     */
    public function setIdLocality(\Heebari\dataBundle\Entity\Collectivity $idLocality = null)
    {
        $this->idLocality = $idLocality;

        return $this;
    }

    /**
     * Get idLocality
     *
     * @return \Heebari\dataBundle\Entity\Collectivity
     */
    public function getIdLocality()
    {
        return $this->idLocality;
    }

    /**
     * Set idPopulationDistribution
     *
     * @param \Heebari\dataBundle\Entity\PopulationDistribution $idPopulationDistribution
     *
     * @return PopulationParameter
     */
    public function setIdPopulationDistribution(\Heebari\dataBundle\Entity\PopulationDistribution $idPopulationDistribution = null)
    {
        $this->idPopulationDistribution = $idPopulationDistribution;

        return $this;
    }

    /**
     * Get idPopulationDistribution
     *
     * @return \Heebari\dataBundle\Entity\PopulationDistribution
     */
    public function getIdPopulationDistribution()
    {
        return $this->idPopulationDistribution;
    }
    
    
}
