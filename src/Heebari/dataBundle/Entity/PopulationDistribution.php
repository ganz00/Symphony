<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PopulationDistribution
 *
 * @ORM\Table(name="population_distribution", uniqueConstraints={@ORM\UniqueConstraint(name="id_age_range_gender_date_of_information", columns={"id_age_range", "gender", "date_of_information"})}, indexes={@ORM\Index(name="IDX_F6FE3E7486F9E0F8", columns={"id_age_range"})})
 * @ORM\Entity
 */
class PopulationDistribution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_population_distribution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPopulationDistribution;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=false)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var float
     *
     * @ORM\Column(name="urbanisation_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $urbanisationRate;

    /**
     * @var float
     *
     * @ORM\Column(name="activity_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $activityRate;

    /**
     * @var float
     *
     * @ORM\Column(name="unemployment_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $unemploymentRate;

    /**
     * @var float
     *
     * @ORM\Column(name="qualification_level", type="float", precision=10, scale=0, nullable=true)
     */
    private $qualificationLevel;
    
    /**
     * @var float
     *
     * @ORM\Column(name="banking_penetration_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $bankingPenetrationRate;
    
    /**
     * @var float
     *
     * @ORM\Column(name="life_expectancy", type="float", precision=10, scale=0, nullable=true)
     */
    
    private $lifeExpectancy;

    /**
     * @var float
     *
     * @ORM\Column(name="mortality_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $mortalityRate;

    /**
     * @var float
     *
     * @ORM\Column(name="birth_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $birthRate;

    /**
     * @var \AgeRange
     *
     * @ORM\ManyToOne(targetEntity="AgeRange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_age_range", referencedColumnName="id_age_range")
     * })
     */
    private $idAgeRange;
    
    /**
     * Get idPopulationDistribution
     *
     * @return integer
     */
    public function getIdPopulationDistribution()
    {
        return $this->idPopulationDistribution;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return PopulationDistribution
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dateOfInformation
     *
     * @param \DateTime $dateOfInformation
     *
     * @return PopulationDistribution
     */
    public function setDateOfInformation($dateOfInformation)
    {
        $this->dateOfInformation = $dateOfInformation;

        return $this;
    }

    /**
     * Get dateOfInformation
     *
     * @return \DateTime
     */
    public function getDateOfInformation()
    {
        return $this->dateOfInformation;
    }

    /**
     * Set urbanisationRate
     *
     * @param float $urbanisationRate
     *
     * @return PopulationDistribution
     */
    public function setUrbanisationRate($urbanisationRate)
    {
        $this->urbanisationRate = $urbanisationRate;

        return $this;
    }

    /**
     * Get urbanisationRate
     *
     * @return float
     */
    public function getUrbanisationRate()
    {
        return $this->urbanisationRate;
    }

    /**
     * Set activityRate
     *
     * @param float $activityRate
     *
     * @return PopulationDistribution
     */
    public function setActivityRate($activityRate)
    {
        $this->activityRate = $activityRate;

        return $this;
    }

    /**
     * Get activityRate
     *
     * @return float
     */
    public function getActivityRate()
    {
        return $this->activityRate;
    }

    /**
     * Set unemploymentRate
     *
     * @param float $unemploymentRate
     *
     * @return PopulationDistribution
     */
    public function setUnemploymentRate($unemploymentRate)
    {
        $this->unemploymentRate = $unemploymentRate;

        return $this;
    }

    /**
     * Get unemploymentRate
     *
     * @return float
     */
    public function getUnemploymentRate()
    {
        return $this->unemploymentRate;
    }

    /**
     * Set qualificationLevel
     *
     * @param float $qualificationLevel
     *
     * @return PopulationDistribution
     */
    public function setQualificationLevel($qualificationLevel)
    {
        $this->qualificationLevel = $qualificationLevel;

        return $this;
    }

    /**
     * Get qualificationLevel
     *
     * @return float
     */
    public function getQualificationLevel()
    {
        return $this->qualificationLevel;
    }

    /**
     * Set lifeExpectancy
     *
     * @param float $lifeExpectancy
     *
     * @return PopulationDistribution
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;

        return $this;
    }

    /**
     * Get lifeExpectancy
     *
     * @return float
     */
    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }

    /**
     * Set mortalityRate
     *
     * @param float $mortalityRate
     *
     * @return PopulationDistribution
     */
    public function setMortalityRate($mortalityRate)
    {
        $this->mortalityRate = $mortalityRate;

        return $this;
    }

    /**
     * Get mortalityRate
     *
     * @return float
     */
    public function getMortalityRate()
    {
        return $this->mortalityRate;
    }

    /**
     * Set birthRate
     *
     * @param float $birthRate
     *
     * @return PopulationDistribution
     */
    public function setBirthRate($birthRate)
    {
        $this->birthRate = $birthRate;

        return $this;
    }

    /**
     * Get birthRate
     *
     * @return float
     */
    public function getBirthRate()
    {
        return $this->birthRate;
    }

    /**
     * Set idAgeRange
     *
     * @param \Heebari\dataBundle\Entity\AgeRange $idAgeRange
     *
     * @return PopulationDistribution
     */
    public function setIdAgeRange(\Heebari\dataBundle\Entity\AgeRange $idAgeRange = null)
    {
        $this->idAgeRange = $idAgeRange;

        return $this;
    }

    /**
     * Get idAgeRange
     *
     * @return \Heebari\dataBundle\Entity\AgeRange
     */
    public function getIdAgeRange()
    {
        return $this->idAgeRange;
    }

    /**
     * Set bankingPenetrationRate
     *
     * @param float $bankingPenetrationRate
     *
     * @return PopulationDistribution
     */
    public function setBankingPenetrationRate($bankingPenetrationRate)
    {
        $this->bankingPenetrationRate = $bankingPenetrationRate;

        return $this;
    }

    /**
     * Get bankingPenetrationRate
     *
     * @return float
     */
    public function getBankingPenetrationRate()
    {
        return $this->bankingPenetrationRate;
    }
}
