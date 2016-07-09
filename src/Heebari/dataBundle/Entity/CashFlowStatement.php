<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashFlowStatement
 *
 * @ORM\Table(name="cash_flow_statement", uniqueConstraints={@ORM\UniqueConstraint(name="id_company_cash_flow_date", columns={"id_company", "cash_flow_date"})}, indexes={@ORM\Index(name="IDX_BE6280F59122A03F", columns={"id_company"})})
 * @ORM\Entity
 */
class CashFlowStatement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cash_flow", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCashFlow;

    /**
     * @var integer
     *
     * @ORM\Column(name="cash_flow_date", type="integer", nullable=false)
     */
    private $cashFlowDate;

    /**
     * @var float
     *
     * @ORM\Column(name="cash_flow_statement", type="float", precision=10, scale=0, nullable=false)
     */
    private $cashFlowStatement;

    /**
     * @var float
     *
     * @ORM\Column(name="short_term_cash_management", type="float", precision=10, scale=0, nullable=false)
     */
    private $shortTermCashManagement;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

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
     * Get idCashFlow
     *
     * @return integer
     */
    public function getIdCashFlow()
    {
        return $this->idCashFlow;
    }

    /**
     * Set cashFlowDate
     *
     * @param integer $cashFlowDate
     *
     * @return CashFlowStatement
     */
    public function setCashFlowDate($cashFlowDate)
    {
        $this->cashFlowDate = $cashFlowDate;

        return $this;
    }

    /**
     * Get cashFlowDate
     *
     * @return integer
     */
    public function getCashFlowDate()
    {
        return $this->cashFlowDate;
    }

    /**
     * Set cashFlowStatement
     *
     * @param float $cashFlowStatement
     *
     * @return CashFlowStatement
     */
    public function setCashFlowStatement($cashFlowStatement)
    {
        $this->cashFlowStatement = $cashFlowStatement;

        return $this;
    }

    /**
     * Get cashFlowStatement
     *
     * @return float
     */
    public function getCashFlowStatement()
    {
        return $this->cashFlowStatement;
    }

    /**
     * Set shortTermCashManagement
     *
     * @param float $shortTermCashManagement
     *
     * @return CashFlowStatement
     */
    public function setShortTermCashManagement($shortTermCashManagement)
    {
        $this->shortTermCashManagement = $shortTermCashManagement;

        return $this;
    }

    /**
     * Get shortTermCashManagement
     *
     * @return float
     */
    public function getShortTermCashManagement()
    {
        return $this->shortTermCashManagement;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return CashFlowStatement
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return CashFlowStatement
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
