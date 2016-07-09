<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColectivityParameters
 *
 * @ORM\Table(name="colectivity_parameters", uniqueConstraints={@ORM\UniqueConstraint(name="id_collectivity_date_of_information_type_collectivity", columns={"id_collectivity", "date_of_information", "type_collectivity"})}, indexes={@ORM\Index(name="IDX_609F352EF864219C", columns={"id_collectivity"})})
 * @ORM\Entity
 */
class ColectivityParameters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_collectivite_params", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCollectiviteParams;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_information", type="date", nullable=false)
     */
    private $dateOfInformation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_collectivity", type="string", nullable=false)
     */
    private $typeCollectivity;

    /**
     * @var float
     *
     * @ORM\Column(name="average_local_density", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageLocalDensity;

    /**
     * @var float
     *
     * @ORM\Column(name="local_surface", type="float", precision=10, scale=0, nullable=true)
     */
    private $localSurface;

    /**
     * @var float
     *
     * @ORM\Column(name="average_local_qualification_lev", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageLocalQualificationLev;

    /**
     * @var float
     *
     * @ORM\Column(name="average_local_cost_labour", type="float", precision=10, scale=0, nullable=true)
     */
    private $averageLocalCostLabour;

    /**
     * @var float
     *
     * @ORM\Column(name="local_temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $localTemperature;

    /**
     * @var float
     *
     * @ORM\Column(name="gross_domestic_product", type="float", precision=10, scale=0, nullable=true)
     */
    private $grossDomesticProduct;

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
     * Get idCollectiviteParams
     *
     * @return integer
     */
    public function getIdCollectiviteParams()
    {
        return $this->idCollectiviteParams;
    }

    /**
     * Set dateOfInformation
     *
     * @param \DateTime $dateOfInformation
     *
     * @return ColectivityParameters
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
     * Set typeCollectivity
     *
     * @param string $typeCollectivity
     *
     * @return ColectivityParameters
     */
    public function setTypeCollectivity($typeCollectivity)
    {
        $this->typeCollectivity = $typeCollectivity;

        return $this;
    }

    /**
     * Get typeCollectivity
     *
     * @return string
     */
    public function getTypeCollectivity()
    {
        return $this->typeCollectivity;
    }

    /**
     * Set averageLocalDensity
     *
     * @param float $averageLocalDensity
     *
     * @return ColectivityParameters
     */
    public function setAverageLocalDensity($averageLocalDensity)
    {
        $this->averageLocalDensity = $averageLocalDensity;

        return $this;
    }

    /**
     * Get averageLocalDensity
     *
     * @return float
     */
    public function getAverageLocalDensity()
    {
        return $this->averageLocalDensity;
    }

    /**
     * Set localSurface
     *
     * @param float $localSurface
     *
     * @return ColectivityParameters
     */
    public function setLocalSurface($localSurface)
    {
        $this->localSurface = $localSurface;

        return $this;
    }

    /**
     * Get localSurface
     *
     * @return float
     */
    public function getLocalSurface()
    {
        return $this->localSurface;
    }

    /**
     * Set averageLocalQualificationLev
     *
     * @param float $averageLocalQualificationLev
     *
     * @return ColectivityParameters
     */
    public function setAverageLocalQualificationLev($averageLocalQualificationLev)
    {
        $this->averageLocalQualificationLev = $averageLocalQualificationLev;

        return $this;
    }

    /**
     * Get averageLocalQualificationLev
     *
     * @return float
     */
    public function getAverageLocalQualificationLev()
    {
        return $this->averageLocalQualificationLev;
    }

    /**
     * Set averageLocalCostLabour
     *
     * @param float $averageLocalCostLabour
     *
     * @return ColectivityParameters
     */
    public function setAverageLocalCostLabour($averageLocalCostLabour)
    {
        $this->averageLocalCostLabour = $averageLocalCostLabour;

        return $this;
    }

    /**
     * Get averageLocalCostLabour
     *
     * @return float
     */
    public function getAverageLocalCostLabour()
    {
        return $this->averageLocalCostLabour;
    }

    /**
     * Set localTemperature
     *
     * @param float $localTemperature
     *
     * @return ColectivityParameters
     */
    public function setLocalTemperature($localTemperature)
    {
        $this->localTemperature = $localTemperature;

        return $this;
    }

    /**
     * Get localTemperature
     *
     * @return float
     */
    public function getLocalTemperature()
    {
        return $this->localTemperature;
    }

    /**
     * Set grossDomesticProduct
     *
     * @param float $grossDomesticProduct
     *
     * @return ColectivityParameters
     */
    public function setGrossDomesticProduct($grossDomesticProduct)
    {
        $this->grossDomesticProduct = $grossDomesticProduct;

        return $this;
    }

    /**
     * Get grossDomesticProduct
     *
     * @return float
     */
    public function getGrossDomesticProduct()
    {
        return $this->grossDomesticProduct;
    }

    /**
     * Set idCollectivity
     *
     * @param \Heebari\dataBundle\Entity\Collectivity $idCollectivity
     *
     * @return ColectivityParameters
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
}
