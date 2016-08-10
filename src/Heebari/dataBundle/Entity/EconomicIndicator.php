<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EconomicIndicator
 *
 * @ORM\Table(name="economic_indicator", uniqueConstraints={@ORM\UniqueConstraint(name="id_economic_data_date_of_information", columns={"id_economic_data", "date_of_information"})}, indexes={@ORM\Index(name="IDX_CCCAAEDC9FC0EDD7", columns={"id_economic_data"})})
 * @ORM\Entity(repositoryClass="Heebari\dataBundle\Entity\EconomicIndicatorRepository")
 */
class EconomicIndicator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_economic_indicator", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEconomicIndicator;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var float
     *
     * @ORM\Column(name="gdp_growth", type="float", precision=10, scale=0, nullable=true)
     */
    private $gdpGrowth;

    /**
     * @var float
     *
     * @ORM\Column(name="price_index_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceIndexRate;

    /**
     * @var float
     *
     * @ORM\Column(name="investment_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $investmentRate;

    /**
     * @var float
     *
     * @ORM\Column(name="national_consumption_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $nationalConsumptionRate;

    /**
     * @var float
     *
     * @ORM\Column(name="export_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $exportRate;

    /**
     * @var float
     *
     * @ORM\Column(name="import_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $importRate;

    /**
     * @var float
     *
     * @ORM\Column(name="income_level_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $incomeLevelRate;

    /**
     * @var float
     *
     * @ORM\Column(name="debt_level_rate", type="float", precision=10, scale=0, nullable=true)
     */
    private $debtLevelRate;

    /**
     * @var \EconomicData
     *
     * @ORM\ManyToOne(targetEntity="EconomicData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_economic_data", referencedColumnName="id_economic_data")
     * })
     */
    private $idEconomicData;



    /**
     * Get idEconomicIndicator
     *
     * @return integer
     */
    public function getIdEconomicIndicator()
    {
        return $this->idEconomicIndicator;
    }

    /**
     * Set dateOfInformation
     *
     * @param integer $dateOfInformation
     *
     * @return EconomicIndicator
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
     * Set gdpGrowth
     *
     * @param float $gdpGrowth
     *
     * @return EconomicIndicator
     */
    public function setGdpGrowth($gdpGrowth)
    {
        $this->gdpGrowth = $gdpGrowth;

        return $this;
    }

    /**
     * Get gdpGrowth
     *
     * @return float
     */
    public function getGdpGrowth()
    {
        return $this->gdpGrowth;
    }

    /**
     * Set priceIndexRate
     *
     * @param float $priceIndexRate
     *
     * @return EconomicIndicator
     */
    public function setPriceIndexRate($priceIndexRate)
    {
        $this->priceIndexRate = $priceIndexRate;

        return $this;
    }

    /**
     * Get priceIndexRate
     *
     * @return float
     */
    public function getPriceIndexRate()
    {
        return $this->priceIndexRate;
    }

    /**
     * Set investmentRate
     *
     * @param float $investmentRate
     *
     * @return EconomicIndicator
     */
    public function setInvestmentRate($investmentRate)
    {
        $this->investmentRate = $investmentRate;

        return $this;
    }

    /**
     * Get investmentRate
     *
     * @return float
     */
    public function getInvestmentRate()
    {
        return $this->investmentRate;
    }

    /**
     * Set nationalConsumptionRate
     *
     * @param float $nationalConsumptionRate
     *
     * @return EconomicIndicator
     */
    public function setNationalConsumptionRate($nationalConsumptionRate)
    {
        $this->nationalConsumptionRate = $nationalConsumptionRate;

        return $this;
    }

    /**
     * Get nationalConsumptionRate
     *
     * @return float
     */
    public function getNationalConsumptionRate()
    {
        return $this->nationalConsumptionRate;
    }

    /**
     * Set exportRate
     *
     * @param float $exportRate
     *
     * @return EconomicIndicator
     */
    public function setExportRate($exportRate)
    {
        $this->exportRate = $exportRate;

        return $this;
    }

    /**
     * Get exportRate
     *
     * @return float
     */
    public function getExportRate()
    {
        return $this->exportRate;
    }

    /**
     * Set importRate
     *
     * @param float $importRate
     *
     * @return EconomicIndicator
     */
    public function setImportRate($importRate)
    {
        $this->importRate = $importRate;

        return $this;
    }

    /**
     * Get importRate
     *
     * @return float
     */
    public function getImportRate()
    {
        return $this->importRate;
    }

    /**
     * Set incomeLevelRate
     *
     * @param float $incomeLevelRate
     *
     * @return EconomicIndicator
     */
    public function setIncomeLevelRate($incomeLevelRate)
    {
        $this->incomeLevelRate = $incomeLevelRate;

        return $this;
    }

    /**
     * Get incomeLevelRate
     *
     * @return float
     */
    public function getIncomeLevelRate()
    {
        return $this->incomeLevelRate;
    }

    /**
     * Set debtLevelRate
     *
     * @param float $debtLevelRate
     *
     * @return EconomicIndicator
     */
    public function setDebtLevelRate($debtLevelRate)
    {
        $this->debtLevelRate = $debtLevelRate;

        return $this;
    }

    /**
     * Get debtLevelRate
     *
     * @return float
     */
    public function getDebtLevelRate()
    {
        return $this->debtLevelRate;
    }

    /**
     * Set idEconomicData
     *
     * @param \Heebari\dataBundle\Entity\EconomicData $idEconomicData
     *
     * @return EconomicIndicator
     */
    public function setIdEconomicData(\Heebari\dataBundle\Entity\EconomicData $idEconomicData = null)
    {
        $this->idEconomicData = $idEconomicData;

        return $this;
    }

    /**
     * Get idEconomicData
     *
     * @return \Heebari\dataBundle\Entity\EconomicData
     */
    public function getIdEconomicData()
    {
        return $this->idEconomicData;
    }
}
