<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collectivity
 *
 * @ORM\Table(name="collectivity", indexes={@ORM\Index(name="FK_collectivity_country", columns={"id_country"})})
 * @ORM\Entity
 */
class Collectivity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_collectivity", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCollectivity;

    /**
     * @var string
     *
     * @ORM\Column(name="collectivity_name", type="string", length=50, nullable=false)
     */
    private $collectivityName;

    /**
     * @var string
     *
     * @ORM\Column(name="type_collectivity", type="string", length=50, nullable=false)
     */
    private $typeCollectivity;

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
     * Get idCollectivity
     *
     * @return integer
     */
    public function getIdCollectivity()
    {
        return $this->idCollectivity;
    }

    /**
     * Set collectivityName
     *
     * @param string $collectivityName
     *
     * @return Collectivity
     */
    public function setCollectivityName($collectivityName)
    {
        $this->collectivityName = $collectivityName;

        return $this;
    }

    /**
     * Get collectivityName
     *
     * @return string
     */
    public function getCollectivityName()
    {
        return $this->collectivityName;
    }

    /**
     * Set typeCollectivity
     *
     * @param string $typeCollectivity
     *
     * @return Collectivity
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
     * Set idCountry
     *
     * @param \Heebari\dataBundle\Entity\Country $idCountry
     *
     * @return Collectivity
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
