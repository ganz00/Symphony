<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanySector
 *
 * @ORM\Table(name="company_sector")
 * @ORM\Entity
 */
class CompanySector
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company_sector", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompanySector;

    /**
     * @var string
     *
     * @ORM\Column(name="sector_name", type="string", length=50, nullable=false)
     */
    private $sectorName;



    /**
     * Get idCompanySector
     *
     * @return integer
     */
    public function getIdCompanySector()
    {
        return $this->idCompanySector;
    }

    /**
     * Set sectorName
     *
     * @param string $sectorName
     *
     * @return CompanySector
     */
    public function setSectorName($sectorName)
    {
        $this->sectorName = $sectorName;

        return $this;
    }

    /**
     * Get sectorName
     *
     * @return string
     */
    public function getSectorName()
    {
        return $this->sectorName;
    }
}
