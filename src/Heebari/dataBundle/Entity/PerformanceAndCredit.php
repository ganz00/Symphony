<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformanceAndCredit
 *
 * @ORM\Table(name="performance_and_credit", uniqueConstraints={@ORM\UniqueConstraint(name="id_company_date_of_information", columns={"id_company", "date_of_information"})}, indexes={@ORM\Index(name="IDX_1DD8E9929122A03F", columns={"id_company"})})
 * @ORM\Entity
 */
class PerformanceAndCredit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_performance_credit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerformanceCredit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var float
     *
     * @ORM\Column(name="performance_and_credit", type="float", precision=10, scale=0, nullable=true)
     */
    private $performanceAndCredit;

    /**
     * @var float
     *
     * @ORM\Column(name="return_on_equity", type="float", precision=10, scale=0, nullable=true)
     */
    private $returnOnEquity;

    /**
     * @var float
     *
     * @ORM\Column(name="return_on_asset", type="float", precision=10, scale=0, nullable=true)
     */
    private $returnOnAsset;

    /**
     * @var float
     *
     * @ORM\Column(name="risk_adjusted_return_on_capital", type="float", precision=10, scale=0, nullable=true)
     */
    private $riskAdjustedReturnOnCapital;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_margin", type="float", precision=10, scale=0, nullable=true)
     */
    private $grossMargin;

    /**
     * @var float
     *
     * @ORM\Column(name="profit_margin", type="float", precision=10, scale=0, nullable=true)
     */
    private $profitMargin;

    /**
     * @var float
     *
     * @ORM\Column(name="ebitda_margin", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebitdaMargin;

    /**
     * @var float
     *
     * @ORM\Column(name="quick_ratio", type="float", precision=10, scale=0, nullable=true)
     */
    private $quickRatio;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company", referencedColumnName="id_company")
     * })
     */
    private $idCompany;



    /**
     * Get idPerformanceCredit
     *
     * @return integer
     */
    public function getIdPerformanceCredit()
    {
        return $this->idPerformanceCredit;
    }

    /**
     * Set dateOfInformation
     *
     * @param \DateTime $dateOfInformation
     *
     * @return PerformanceAndCredit
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
     * Set performanceAndCredit
     *
     * @param float $performanceAndCredit
     *
     * @return PerformanceAndCredit
     */
    public function setPerformanceAndCredit($performanceAndCredit)
    {
        $this->performanceAndCredit = $performanceAndCredit;

        return $this;
    }

    /**
     * Get performanceAndCredit
     *
     * @return float
     */
    public function getPerformanceAndCredit()
    {
        return $this->performanceAndCredit;
    }

    /**
     * Set returnOnEquity
     *
     * @param float $returnOnEquity
     *
     * @return PerformanceAndCredit
     */
    public function setReturnOnEquity($returnOnEquity)
    {
        $this->returnOnEquity = $returnOnEquity;

        return $this;
    }

    /**
     * Get returnOnEquity
     *
     * @return float
     */
    public function getReturnOnEquity()
    {
        return $this->returnOnEquity;
    }

    /**
     * Set returnOnAsset
     *
     * @param float $returnOnAsset
     *
     * @return PerformanceAndCredit
     */
    public function setReturnOnAsset($returnOnAsset)
    {
        $this->returnOnAsset = $returnOnAsset;

        return $this;
    }

    /**
     * Get returnOnAsset
     *
     * @return float
     */
    public function getReturnOnAsset()
    {
        return $this->returnOnAsset;
    }

    /**
     * Set riskAdjustedReturnOnCapital
     *
     * @param float $riskAdjustedReturnOnCapital
     *
     * @return PerformanceAndCredit
     */
    public function setRiskAdjustedReturnOnCapital($riskAdjustedReturnOnCapital)
    {
        $this->riskAdjustedReturnOnCapital = $riskAdjustedReturnOnCapital;

        return $this;
    }

    /**
     * Get riskAdjustedReturnOnCapital
     *
     * @return float
     */
    public function getRiskAdjustedReturnOnCapital()
    {
        return $this->riskAdjustedReturnOnCapital;
    }

    /**
     * Set grossMargin
     *
     * @param float $grossMargin
     *
     * @return PerformanceAndCredit
     */
    public function setGrossMargin($grossMargin)
    {
        $this->grossMargin = $grossMargin;

        return $this;
    }

    /**
     * Get grossMargin
     *
     * @return float
     */
    public function getGrossMargin()
    {
        return $this->grossMargin;
    }

    /**
     * Set profitMargin
     *
     * @param float $profitMargin
     *
     * @return PerformanceAndCredit
     */
    public function setProfitMargin($profitMargin)
    {
        $this->profitMargin = $profitMargin;

        return $this;
    }

    /**
     * Get profitMargin
     *
     * @return float
     */
    public function getProfitMargin()
    {
        return $this->profitMargin;
    }

    /**
     * Set ebitdaMargin
     *
     * @param float $ebitdaMargin
     *
     * @return PerformanceAndCredit
     */
    public function setEbitdaMargin($ebitdaMargin)
    {
        $this->ebitdaMargin = $ebitdaMargin;

        return $this;
    }

    /**
     * Get ebitdaMargin
     *
     * @return float
     */
    public function getEbitdaMargin()
    {
        return $this->ebitdaMargin;
    }

    /**
     * Set quickRatio
     *
     * @param float $quickRatio
     *
     * @return PerformanceAndCredit
     */
    public function setQuickRatio($quickRatio)
    {
        $this->quickRatio = $quickRatio;

        return $this;
    }

    /**
     * Get quickRatio
     *
     * @return float
     */
    public function getQuickRatio()
    {
        return $this->quickRatio;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return PerformanceAndCredit
     */
    public function setIdCompany(\Heebari\dataBundle\Entity\Company $idCompany = null)
    {
        $this->idCompany = $idCompany;

        return $this;
    }

    /**
     * Get idCompany
     *
     * @return \Heebari\dataBundle\Entity\Company
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }
}
