<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IncomeStatement
 *
 * @ORM\Table(name="income_statement", uniqueConstraints={@ORM\UniqueConstraint(name="id_company_date_of_information", columns={"id_company", "date_of_information"})}, indexes={@ORM\Index(name="IDX_8740FF829122A03F", columns={"id_company"})})
 * @ORM\Entity
 */
class IncomeStatement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_income_statement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIncomeStatement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var float
     *
     * @ORM\Column(name="income_statement", type="float", precision=10, scale=0, nullable=true)
     */
    private $incomeStatement;

    /**
     * @var float
     *
     * @ORM\Column(name="sales", type="float", precision=10, scale=0, nullable=true)
     */
    private $sales;

    /**
     * @var float
     *
     * @ORM\Column(name="cost_of_good_sold", type="float", precision=10, scale=0, nullable=true)
     */
    private $costOfGoodSold;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_profit", type="float", precision=10, scale=0, nullable=true)
     */
    private $grossProfit;

    /**
     * @var float
     *
     * @ORM\Column(name="selling_administrative", type="float", precision=10, scale=0, nullable=true)
     */
    private $sellingAdministrative;

    /**
     * @var float
     *
     * @ORM\Column(name="depreciation_and_amortization", type="float", precision=10, scale=0, nullable=true)
     */
    private $depreciationAndAmortization;

    /**
     * @var float
     *
     * @ORM\Column(name="ebit", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebit;

    /**
     * @var float
     *
     * @ORM\Column(name="interest_and_financial_charges", type="float", precision=10, scale=0, nullable=true)
     */
    private $interestAndFinancialCharges;

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
     * Get idIncomeStatement
     *
     * @return integer
     */
    public function getIdIncomeStatement()
    {
        return $this->idIncomeStatement;
    }

    /**
     * Set dateOfInformation
     *
     * @param \DateTime $dateOfInformation
     *
     * @return IncomeStatement
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
     * Set incomeStatement
     *
     * @param float $incomeStatement
     *
     * @return IncomeStatement
     */
    public function setIncomeStatement($incomeStatement)
    {
        $this->incomeStatement = $incomeStatement;

        return $this;
    }

    /**
     * Get incomeStatement
     *
     * @return float
     */
    public function getIncomeStatement()
    {
        return $this->incomeStatement;
    }

    /**
     * Set sales
     *
     * @param float $sales
     *
     * @return IncomeStatement
     */
    public function setSales($sales)
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * Get sales
     *
     * @return float
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * Set costOfGoodSold
     *
     * @param float $costOfGoodSold
     *
     * @return IncomeStatement
     */
    public function setCostOfGoodSold($costOfGoodSold)
    {
        $this->costOfGoodSold = $costOfGoodSold;

        return $this;
    }

    /**
     * Get costOfGoodSold
     *
     * @return float
     */
    public function getCostOfGoodSold()
    {
        return $this->costOfGoodSold;
    }

    /**
     * Set grossProfit
     *
     * @param float $grossProfit
     *
     * @return IncomeStatement
     */
    public function setGrossProfit($grossProfit)
    {
        $this->grossProfit = $grossProfit;

        return $this;
    }

    /**
     * Get grossProfit
     *
     * @return float
     */
    public function getGrossProfit()
    {
        return $this->grossProfit;
    }

    /**
     * Set sellingAdministrative
     *
     * @param float $sellingAdministrative
     *
     * @return IncomeStatement
     */
    public function setSellingAdministrative($sellingAdministrative)
    {
        $this->sellingAdministrative = $sellingAdministrative;

        return $this;
    }

    /**
     * Get sellingAdministrative
     *
     * @return float
     */
    public function getSellingAdministrative()
    {
        return $this->sellingAdministrative;
    }

    /**
     * Set depreciationAndAmortization
     *
     * @param float $depreciationAndAmortization
     *
     * @return IncomeStatement
     */
    public function setDepreciationAndAmortization($depreciationAndAmortization)
    {
        $this->depreciationAndAmortization = $depreciationAndAmortization;

        return $this;
    }

    /**
     * Get depreciationAndAmortization
     *
     * @return float
     */
    public function getDepreciationAndAmortization()
    {
        return $this->depreciationAndAmortization;
    }

    /**
     * Set ebit
     *
     * @param float $ebit
     *
     * @return IncomeStatement
     */
    public function setEbit($ebit)
    {
        $this->ebit = $ebit;

        return $this;
    }

    /**
     * Get ebit
     *
     * @return float
     */
    public function getEbit()
    {
        return $this->ebit;
    }

    /**
     * Set interestAndFinancialCharges
     *
     * @param float $interestAndFinancialCharges
     *
     * @return IncomeStatement
     */
    public function setInterestAndFinancialCharges($interestAndFinancialCharges)
    {
        $this->interestAndFinancialCharges = $interestAndFinancialCharges;

        return $this;
    }

    /**
     * Get interestAndFinancialCharges
     *
     * @return float
     */
    public function getInterestAndFinancialCharges()
    {
        return $this->interestAndFinancialCharges;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return IncomeStatement
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
