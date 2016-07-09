<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GovernanceAndBusiness
 *
 * @ORM\Table(name="governance_and_business", uniqueConstraints={@ORM\UniqueConstraint(name="id_country_date_of_information", columns={"id_country", "date_of_information"})}, indexes={@ORM\Index(name="IDX_849BEF478DEE6016", columns={"id_country"})})
 * @ORM\Entity
 */
class GovernanceAndBusiness
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_governance_and_business", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGovernanceAndBusiness;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var float
     *
     * @ORM\Column(name="political_stability_score", type="float", precision=10, scale=0, nullable=true)
     */
    private $politicalStabilityScore;

    /**
     * @var string
     *
     * @ORM\Column(name="change_inpower", type="string", nullable=true)
     */
    private $changeInpower;

    /**
     * @var float
     *
     * @ORM\Column(name="transparency", type="float", precision=10, scale=0, nullable=true)
     */
    private $transparency;

    /**
     * @var string
     *
     * @ORM\Column(name="rule_of_law", type="string", nullable=true)
     */
    private $ruleOfLaw;

    /**
     * @var float
     *
     * @ORM\Column(name="corruption", type="float", precision=10, scale=0, nullable=true)
     */
    private $corruption;

    /**
     * @var string
     *
     * @ORM\Column(name="administrative_burden", type="string", nullable=true)
     */
    private $administrativeBurden;

    /**
     * @var float
     *
     * @ORM\Column(name="business _envir_score", type="float", precision=10, scale=0, nullable=true)
     */
    private $businessEnvirScore;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_country", referencedColumnName="id_country")
     * })
     */
    private $idCountry;



    /**
     * Get idGovernanceAndBusiness
     *
     * @return integer
     */
    public function getIdGovernanceAndBusiness()
    {
        return $this->idGovernanceAndBusiness;
    }

    /**
     * Set dateOfInformation
     *
     * @param \DateTime $dateOfInformation
     *
     * @return GovernanceAndBusiness
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
     * Set politicalStabilityScore
     *
     * @param float $politicalStabilityScore
     *
     * @return GovernanceAndBusiness
     */
    public function setPoliticalStabilityScore($politicalStabilityScore)
    {
        $this->politicalStabilityScore = $politicalStabilityScore;

        return $this;
    }

    /**
     * Get politicalStabilityScore
     *
     * @return float
     */
    public function getPoliticalStabilityScore()
    {
        return $this->politicalStabilityScore;
    }

    /**
     * Set changeInpower
     *
     * @param string $changeInpower
     *
     * @return GovernanceAndBusiness
     */
    public function setChangeInpower($changeInpower)
    {
        $this->changeInpower = $changeInpower;

        return $this;
    }

    /**
     * Get changeInpower
     *
     * @return string
     */
    public function getChangeInpower()
    {
        return $this->changeInpower;
    }

    /**
     * Set transparency
     *
     * @param float $transparency
     *
     * @return GovernanceAndBusiness
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;

        return $this;
    }

    /**
     * Get transparency
     *
     * @return float
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * Set ruleOfLaw
     *
     * @param string $ruleOfLaw
     *
     * @return GovernanceAndBusiness
     */
    public function setRuleOfLaw($ruleOfLaw)
    {
        $this->ruleOfLaw = $ruleOfLaw;

        return $this;
    }

    /**
     * Get ruleOfLaw
     *
     * @return string
     */
    public function getRuleOfLaw()
    {
        return $this->ruleOfLaw;
    }

    /**
     * Set corruption
     *
     * @param float $corruption
     *
     * @return GovernanceAndBusiness
     */
    public function setCorruption($corruption)
    {
        $this->corruption = $corruption;

        return $this;
    }

    /**
     * Get corruption
     *
     * @return float
     */
    public function getCorruption()
    {
        return $this->corruption;
    }

    /**
     * Set administrativeBurden
     *
     * @param string $administrativeBurden
     *
     * @return GovernanceAndBusiness
     */
    public function setAdministrativeBurden($administrativeBurden)
    {
        $this->administrativeBurden = $administrativeBurden;

        return $this;
    }

    /**
     * Get administrativeBurden
     *
     * @return string
     */
    public function getAdministrativeBurden()
    {
        return $this->administrativeBurden;
    }

    /**
     * Set businessEnvirScore
     *
     * @param float $businessEnvirScore
     *
     * @return GovernanceAndBusiness
     */
    public function setBusinessEnvirScore($businessEnvirScore)
    {
        $this->businessEnvirScore = $businessEnvirScore;

        return $this;
    }

    /**
     * Get businessEnvirScore
     *
     * @return float
     */
    public function getBusinessEnvirScore()
    {
        return $this->businessEnvirScore;
    }

    /**
     * Set idCountry
     *
     * @param \Heebari\dataBundle\Entity\Country $idCountry
     *
     * @return GovernanceAndBusiness
     */
    public function setIdCountry(\Heebari\dataBundle\Entity\Country $idCountry = null)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return \Heebari\dataBundle\Entity\Country
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }
}
