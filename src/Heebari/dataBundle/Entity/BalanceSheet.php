<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceSheet
 *
 * @ORM\Table(name="balance_sheet", uniqueConstraints={@ORM\UniqueConstraint(name="id_company_sheet_date_id_element", columns={"id_company", "sheet_date", "id_element"})}, indexes={@ORM\Index(name="FK_balance_sheet_balance_elements", columns={"id_element"}), @ORM\Index(name="IDX_194A20B09122A03F", columns={"id_company"})})
 * @ORM\Entity
 */
class BalanceSheet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_balance_sheet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBalanceSheet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sheet_date", type="date", nullable=false)
     */
    private $sheetDate;

    /**
     * @var string
     *
     * @ORM\Column(name="element_type", type="string", nullable=false)
     */
    private $elementType;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \BalanceElements
     *
     * @ORM\ManyToOne(targetEntity="BalanceElements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_element", referencedColumnName="id_element")
     * })
     */
    private $idElement;

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
     * Get idBalanceSheet
     *
     * @return integer
     */
    public function getIdBalanceSheet()
    {
        return $this->idBalanceSheet;
    }

    /**
     * Set sheetDate
     *
     * @param \DateTime $sheetDate
     *
     * @return BalanceSheet
     */
    public function setSheetDate($sheetDate)
    {
        $this->sheetDate = $sheetDate;

        return $this;
    }

    /**
     * Get sheetDate
     *
     * @return \DateTime
     */
    public function getSheetDate()
    {
        return $this->sheetDate;
    }

    /**
     * Set elementType
     *
     * @param string $elementType
     *
     * @return BalanceSheet
     */
    public function setElementType($elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * Get elementType
     *
     * @return string
     */
    public function getElementType()
    {
        return $this->elementType;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return BalanceSheet
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set idElement
     *
     * @param \Heebari\dataBundle\Entity\BalanceElements $idElement
     *
     * @return BalanceSheet
     */
    public function setIdElement(\Heebari\dataBundle\Entity\BalanceElements $idElement = null)
    {
        $this->idElement = $idElement;

        return $this;
    }

    /**
     * Get idElement
     *
     * @return \Heebari\dataBundle\Entity\BalanceElements
     */
    public function getIdElement()
    {
        return $this->idElement;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return BalanceSheet
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
