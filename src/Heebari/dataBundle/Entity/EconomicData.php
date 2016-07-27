<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EconomicData
 *
 * @ORM\Table(name="economic_data", uniqueConstraints={@ORM\UniqueConstraint(name="id_country_id_collectivity_date_of_informations", columns={"id_country", "id_collectivity", "date_of_informations"})}, indexes={@ORM\Index(name="FK_economic_data_collectivity", columns={"id_collectivity"}), @ORM\Index(name="IDX_21E83CB28DEE6016", columns={"id_country"})})
 * @ORM\Entity(repositoryClass="Heebari\dataBundle\Entity\EconomicDataRepository")
 */
class EconomicData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_economic_data", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEconomicData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_informations", type="date", nullable=false)
     */
    private $dateOfInformations;

    /**
     * @var float
     *
     * @ORM\Column(name="private_investment", type="float", precision=10, scale=0, nullable=true)
     */
    private $privateInvestment;

    /**
     * @var float
     *
     * @ORM\Column(name="public_investment", type="float", precision=10, scale=0, nullable=true)
     */
    private $publicInvestment;

    /**
     * @var float
     *
     * @ORM\Column(name="investment", type="float", precision=10, scale=0, nullable=true)
     */
    private $investment;

    /**
     * @var float
     *
     * @ORM\Column(name="foreign_direct_investment", type="float", precision=10, scale=0, nullable=true)
     */
    private $foreignDirectInvestment;

    /**
     * @var float
     *
     * @ORM\Column(name="national_investments", type="float", precision=10, scale=0, nullable=true)
     */
    private $nationalInvestments;

    /**
     * @var float
     *
     * @ORM\Column(name="price_index", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceIndex;

    /**
     * @var float
     *
     * @ORM\Column(name="national_price_index", type="float", precision=10, scale=0, nullable=true)
     */
    private $nationalPriceIndex;

    /**
     * @var float
     *
     * @ORM\Column(name="harmonised_price_index", type="float", precision=10, scale=0, nullable=true)
     */
    private $harmonisedPriceIndex;

    /**
     * @var float
     *
     * @ORM\Column(name="debt_level", type="float", precision=10, scale=0, nullable=true)
     */
    private $debtLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="publicly_issued_debt", type="float", precision=10, scale=0, nullable=true)
     */
    private $publiclyIssuedDebt;

    /**
     * @var float
     *
     * @ORM\Column(name="foreign_international_aid", type="float", precision=10, scale=0, nullable=true)
     */
    private $foreignInternationalAid;

    /**
     * @var float
     *
     * @ORM\Column(name="fiscal_revenue", type="float", precision=10, scale=0, nullable=true)
     */
    private $fiscalRevenue;

    /**
     * @var float
     *
     * @ORM\Column(name="public_expenses", type="float", precision=10, scale=0, nullable=true)
     */
    private $publicExpenses;

    /**
     * @var float
     *
     * @ORM\Column(name="average_income_level", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageIncomeLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="minimum_wage_level", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumWageLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="purchasing_power_parity", type="float", precision=10, scale=0, nullable=true)
     */
    private $purchasingPowerParity;

    /**
     * @var float
     *
     * @ORM\Column(name="average_savings_level", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageSavingsLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="top_10_importing_industrie", type="integer", nullable=true)
     */
    private $top10ImportingIndustrie;

    /**
     * @var integer
     *
     * @ORM\Column(name="top_10_exporting_industrie", type="integer", nullable=true)
     */
    private $top10ExportingIndustrie;

    /**
     * @var integer
     *
     * @ORM\Column(name="top_10_exported_goods", type="integer", nullable=true)
     */
    private $top10ExportedGoods;

    /**
     * @var integer
     *
     * @ORM\Column(name="top_10_imported_goods", type="integer", nullable=true)
     */
    private $top10ImportedGoods;

    /**
     * @var float
     *
     * @ORM\Column(name="export", type="float", precision=10, scale=0, nullable=true)
     */
    private $export;

    /**
     * @var float
     *
     * @ORM\Column(name="import", type="float", precision=10, scale=0, nullable=true)
     */
    private $import;

    /**
     * @var \Collectivity
     *
     * @ORM\ManyToOne(targetEntity="Collectivity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collectivity", referencedColumnName="id_collectivity")
     * })
     */
    private $idCollectivity;

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
     * Get idEconomicData
     *
     * @return integer
     */
    public function getIdEconomicData()
    {
        return $this->idEconomicData;
    }

    /**
     * Set dateOfInformations
     *
     * @param \DateTime $dateOfInformations
     *
     * @return EconomicData
     */
    public function setDateOfInformations($dateOfInformations)
    {
        $this->dateOfInformations = $dateOfInformations;

        return $this;
    }

    /**
     * Get dateOfInformations
     *
     * @return \DateTime
     */
    public function getDateOfInformations()
    {
        return $this->dateOfInformations;
    }

    /**
     * Set privateInvestment
     *
     * @param float $privateInvestment
     *
     * @return EconomicData
     */
    public function setPrivateInvestment($privateInvestment)
    {
        $this->privateInvestment = $privateInvestment;

        return $this;
    }

    /**
     * Get privateInvestment
     *
     * @return float
     */
    public function getPrivateInvestment()
    {
        return $this->privateInvestment;
    }

    /**
     * Set publicInvestment
     *
     * @param float $publicInvestment
     *
     * @return EconomicData
     */
    public function setPublicInvestment($publicInvestment)
    {
        $this->publicInvestment = $publicInvestment;

        return $this;
    }

    /**
     * Get publicInvestment
     *
     * @return float
     */
    public function getPublicInvestment()
    {
        return $this->publicInvestment;
    }

    /**
     * Set investment
     *
     * @param float $investment
     *
     * @return EconomicData
     */
    public function setInvestment($investment)
    {
        $this->investment = $investment;

        return $this;
    }

    /**
     * Get investment
     *
     * @return float
     */
    public function getInvestment()
    {
        return $this->investment;
    }

    /**
     * Set foreignDirectInvestment
     *
     * @param float $foreignDirectInvestment
     *
     * @return EconomicData
     */
    public function setForeignDirectInvestment($foreignDirectInvestment)
    {
        $this->foreignDirectInvestment = $foreignDirectInvestment;

        return $this;
    }

    /**
     * Get foreignDirectInvestment
     *
     * @return float
     */
    public function getForeignDirectInvestment()
    {
        return $this->foreignDirectInvestment;
    }

    /**
     * Set nationalInvestments
     *
     * @param float $nationalInvestments
     *
     * @return EconomicData
     */
    public function setNationalInvestments($nationalInvestments)
    {
        $this->nationalInvestments = $nationalInvestments;

        return $this;
    }

    /**
     * Get nationalInvestments
     *
     * @return float
     */
    public function getNationalInvestments()
    {
        return $this->nationalInvestments;
    }

    /**
     * Set priceIndex
     *
     * @param float $priceIndex
     *
     * @return EconomicData
     */
    public function setPriceIndex($priceIndex)
    {
        $this->priceIndex = $priceIndex;

        return $this;
    }

    /**
     * Get priceIndex
     *
     * @return float
     */
    public function getPriceIndex()
    {
        return $this->priceIndex;
    }

    /**
     * Set nationalPriceIndex
     *
     * @param float $nationalPriceIndex
     *
     * @return EconomicData
     */
    public function setNationalPriceIndex($nationalPriceIndex)
    {
        $this->nationalPriceIndex = $nationalPriceIndex;

        return $this;
    }

    /**
     * Get nationalPriceIndex
     *
     * @return float
     */
    public function getNationalPriceIndex()
    {
        return $this->nationalPriceIndex;
    }

    /**
     * Set harmonisedPriceIndex
     *
     * @param float $harmonisedPriceIndex
     *
     * @return EconomicData
     */
    public function setHarmonisedPriceIndex($harmonisedPriceIndex)
    {
        $this->harmonisedPriceIndex = $harmonisedPriceIndex;

        return $this;
    }

    /**
     * Get harmonisedPriceIndex
     *
     * @return float
     */
    public function getHarmonisedPriceIndex()
    {
        return $this->harmonisedPriceIndex;
    }

    /**
     * Set debtLevel
     *
     * @param float $debtLevel
     *
     * @return EconomicData
     */
    public function setDebtLevel($debtLevel)
    {
        $this->debtLevel = $debtLevel;

        return $this;
    }

    /**
     * Get debtLevel
     *
     * @return float
     */
    public function getDebtLevel()
    {
        return $this->debtLevel;
    }

    /**
     * Set publiclyIssuedDebt
     *
     * @param float $publiclyIssuedDebt
     *
     * @return EconomicData
     */
    public function setPubliclyIssuedDebt($publiclyIssuedDebt)
    {
        $this->publiclyIssuedDebt = $publiclyIssuedDebt;

        return $this;
    }

    /**
     * Get publiclyIssuedDebt
     *
     * @return float
     */
    public function getPubliclyIssuedDebt()
    {
        return $this->publiclyIssuedDebt;
    }

    /**
     * Set foreignInternationalAid
     *
     * @param float $foreignInternationalAid
     *
     * @return EconomicData
     */
    public function setForeignInternationalAid($foreignInternationalAid)
    {
        $this->foreignInternationalAid = $foreignInternationalAid;

        return $this;
    }

    /**
     * Get foreignInternationalAid
     *
     * @return float
     */
    public function getForeignInternationalAid()
    {
        return $this->foreignInternationalAid;
    }

    /**
     * Set fiscalRevenue
     *
     * @param float $fiscalRevenue
     *
     * @return EconomicData
     */
    public function setFiscalRevenue($fiscalRevenue)
    {
        $this->fiscalRevenue = $fiscalRevenue;

        return $this;
    }

    /**
     * Get fiscalRevenue
     *
     * @return float
     */
    public function getFiscalRevenue()
    {
        return $this->fiscalRevenue;
    }

    /**
     * Set publicExpenses
     *
     * @param float $publicExpenses
     *
     * @return EconomicData
     */
    public function setPublicExpenses($publicExpenses)
    {
        $this->publicExpenses = $publicExpenses;

        return $this;
    }

    /**
     * Get publicExpenses
     *
     * @return float
     */
    public function getPublicExpenses()
    {
        return $this->publicExpenses;
    }

    /**
     * Set averageIncomeLevel
     *
     * @param float $averageIncomeLevel
     *
     * @return EconomicData
     */
    public function setAverageIncomeLevel($averageIncomeLevel)
    {
        $this->averageIncomeLevel = $averageIncomeLevel;

        return $this;
    }

    /**
     * Get averageIncomeLevel
     *
     * @return float
     */
    public function getAverageIncomeLevel()
    {
        return $this->averageIncomeLevel;
    }

    /**
     * Set minimumWageLevel
     *
     * @param float $minimumWageLevel
     *
     * @return EconomicData
     */
    public function setMinimumWageLevel($minimumWageLevel)
    {
        $this->minimumWageLevel = $minimumWageLevel;

        return $this;
    }

    /**
     * Get minimumWageLevel
     *
     * @return float
     */
    public function getMinimumWageLevel()
    {
        return $this->minimumWageLevel;
    }

    /**
     * Set purchasingPowerParity
     *
     * @param float $purchasingPowerParity
     *
     * @return EconomicData
     */
    public function setPurchasingPowerParity($purchasingPowerParity)
    {
        $this->purchasingPowerParity = $purchasingPowerParity;

        return $this;
    }

    /**
     * Get purchasingPowerParity
     *
     * @return float
     */
    public function getPurchasingPowerParity()
    {
        return $this->purchasingPowerParity;
    }

    /**
     * Set averageSavingsLevel
     *
     * @param float $averageSavingsLevel
     *
     * @return EconomicData
     */
    public function setAverageSavingsLevel($averageSavingsLevel)
    {
        $this->averageSavingsLevel = $averageSavingsLevel;

        return $this;
    }

    /**
     * Get averageSavingsLevel
     *
     * @return float
     */
    public function getAverageSavingsLevel()
    {
        return $this->averageSavingsLevel;
    }

    /**
     * Set top10ImportingIndustrie
     *
     * @param integer $top10ImportingIndustrie
     *
     * @return EconomicData
     */
    public function setTop10ImportingIndustrie($top10ImportingIndustrie)
    {
        $this->top10ImportingIndustrie = $top10ImportingIndustrie;

        return $this;
    }

    /**
     * Get top10ImportingIndustrie
     *
     * @return integer
     */
    public function getTop10ImportingIndustrie()
    {
        return $this->top10ImportingIndustrie;
    }

    /**
     * Set top10ExportingIndustrie
     *
     * @param integer $top10ExportingIndustrie
     *
     * @return EconomicData
     */
    public function setTop10ExportingIndustrie($top10ExportingIndustrie)
    {
        $this->top10ExportingIndustrie = $top10ExportingIndustrie;

        return $this;
    }

    /**
     * Get top10ExportingIndustrie
     *
     * @return integer
     */
    public function getTop10ExportingIndustrie()
    {
        return $this->top10ExportingIndustrie;
    }

    /**
     * Set top10ExportedGoods
     *
     * @param integer $top10ExportedGoods
     *
     * @return EconomicData
     */
    public function setTop10ExportedGoods($top10ExportedGoods)
    {
        $this->top10ExportedGoods = $top10ExportedGoods;

        return $this;
    }

    /**
     * Get top10ExportedGoods
     *
     * @return integer
     */
    public function getTop10ExportedGoods()
    {
        return $this->top10ExportedGoods;
    }

    /**
     * Set top10ImportedGoods
     *
     * @param integer $top10ImportedGoods
     *
     * @return EconomicData
     */
    public function setTop10ImportedGoods($top10ImportedGoods)
    {
        $this->top10ImportedGoods = $top10ImportedGoods;

        return $this;
    }

    /**
     * Get top10ImportedGoods
     *
     * @return integer
     */
    public function getTop10ImportedGoods()
    {
        return $this->top10ImportedGoods;
    }

    /**
     * Set export
     *
     * @param float $export
     *
     * @return EconomicData
     */
    public function setExport($export)
    {
        $this->export = $export;

        return $this;
    }

    /**
     * Get export
     *
     * @return float
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Set import
     *
     * @param float $import
     *
     * @return EconomicData
     */
    public function setImport($import)
    {
        $this->import = $import;

        return $this;
    }

    /**
     * Get import
     *
     * @return float
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Set idCollectivity
     *
     * @param \Heebari\dataBundle\Entity\Collectivity $idCollectivity
     *
     * @return EconomicData
     */
    public function setIdCollectivity(\Heebari\dataBundle\Entity\Collectivity $idCollectivity = null)
    {
        $this->idCollectivity = $idCollectivity;

        return $this;
    }

    /**
     * Get idCollectivity
     *
     * @return \Heebari\dataBundle\Entity\Collectivity
     */
    public function getIdCollectivity()
    {
        return $this->idCollectivity;
    }

    /**
     * Set idCountry
     *
     * @param \Heebari\dataBundle\Entity\Country $idCountry
     *
     * @return EconomicData
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
