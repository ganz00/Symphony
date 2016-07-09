<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company", uniqueConstraints={@ORM\UniqueConstraint(name="id_country_id_user_business_name", columns={"id_country", "id_user", "business_name"})}, indexes={@ORM\Index(name="FK_company_company_sector", columns={"id_company_sector"}), @ORM\Index(name="FK_company_company_industry", columns={"id_company_industry"}), @ORM\Index(name="FK_company_business_field", columns={"id_business_field"}), @ORM\Index(name="IDX_4FBF094F8DEE6016", columns={"id_country"})})
 * @ORM\Entity
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="business_name", type="string", length=50, nullable=false)
     */
    private $businessName;

    /**
     * @var float
     *
     * @ORM\Column(name="turnover", type="float", precision=10, scale=0, nullable=true)
     */
    private $turnover;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_employees", type="integer", nullable=true)
     */
    private $numberOfEmployees;

    /**
     * @var float
     *
     * @ORM\Column(name="performance_measurement_score", type="float", precision=10, scale=0, nullable=true)
     */
    private $performanceMeasurementScore;

    /**
     * @var float
     *
     * @ORM\Column(name="estimated_enterprise_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $estimatedEnterpriseValue;

    /**
     * @var \BusinessField
     *
     * @ORM\ManyToOne(targetEntity="BusinessField")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_business_field", referencedColumnName="id_business_field")
     * })
     */
    private $idBusinessField;

    /**
     * @var \CompanyIndustry
     *
     * @ORM\ManyToOne(targetEntity="CompanyIndustry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company_industry", referencedColumnName="id_company_industry")
     * })
     */
    private $idCompanyIndustry;

    /**
     * @var \CompanySector
     *
     * @ORM\ManyToOne(targetEntity="CompanySector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company_sector", referencedColumnName="id_company_sector")
     * })
     */
    private $idCompanySector;

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
     * Get idCompany
     *
     * @return integer
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Company
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set businessName
     *
     * @param string $businessName
     *
     * @return Company
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }

    /**
     * Get businessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * Set turnover
     *
     * @param float $turnover
     *
     * @return Company
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Get turnover
     *
     * @return float
     */
    public function getTurnover()
    {
        return $this->turnover;
    }

    /**
     * Set numberOfEmployees
     *
     * @param integer $numberOfEmployees
     *
     * @return Company
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;

        return $this;
    }

    /**
     * Get numberOfEmployees
     *
     * @return integer
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * Set performanceMeasurementScore
     *
     * @param float $performanceMeasurementScore
     *
     * @return Company
     */
    public function setPerformanceMeasurementScore($performanceMeasurementScore)
    {
        $this->performanceMeasurementScore = $performanceMeasurementScore;

        return $this;
    }

    /**
     * Get performanceMeasurementScore
     *
     * @return float
     */
    public function getPerformanceMeasurementScore()
    {
        return $this->performanceMeasurementScore;
    }

    /**
     * Set estimatedEnterpriseValue
     *
     * @param float $estimatedEnterpriseValue
     *
     * @return Company
     */
    public function setEstimatedEnterpriseValue($estimatedEnterpriseValue)
    {
        $this->estimatedEnterpriseValue = $estimatedEnterpriseValue;

        return $this;
    }

    /**
     * Get estimatedEnterpriseValue
     *
     * @return float
     */
    public function getEstimatedEnterpriseValue()
    {
        return $this->estimatedEnterpriseValue;
    }

    /**
     * Set idBusinessField
     *
     * @param \Heebari\dataBundle\Entity\BusinessField $idBusinessField
     *
     * @return Company
     */
    public function setIdBusinessField(\Heebari\dataBundle\Entity\BusinessField $idBusinessField = null)
    {
        $this->idBusinessField = $idBusinessField;

        return $this;
    }

    /**
     * Get idBusinessField
     *
     * @return \Heebari\dataBundle\Entity\BusinessField
     */
    public function getIdBusinessField()
    {
        return $this->idBusinessField;
    }

    /**
     * Set idCompanyIndustry
     *
     * @param \Heebari\dataBundle\Entity\CompanyIndustry $idCompanyIndustry
     *
     * @return Company
     */
    public function setIdCompanyIndustry(\Heebari\dataBundle\Entity\CompanyIndustry $idCompanyIndustry = null)
    {
        $this->idCompanyIndustry = $idCompanyIndustry;

        return $this;
    }

    /**
     * Get idCompanyIndustry
     *
     * @return \Heebari\dataBundle\Entity\CompanyIndustry
     */
    public function getIdCompanyIndustry()
    {
        return $this->idCompanyIndustry;
    }

    /**
     * Set idCompanySector
     *
     * @param \Heebari\dataBundle\Entity\CompanySector $idCompanySector
     *
     * @return Company
     */
    public function setIdCompanySector(\Heebari\dataBundle\Entity\CompanySector $idCompanySector = null)
    {
        $this->idCompanySector = $idCompanySector;

        return $this;
    }

    /**
     * Get idCompanySector
     *
     * @return \Heebari\dataBundle\Entity\CompanySector
     */
    public function getIdCompanySector()
    {
        return $this->idCompanySector;
    }

    /**
     * Set idCountry
     *
     * @param \Heebari\dataBundle\Entity\Country $idCountry
     *
     * @return Company
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
