<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyIndustry
 *
 * @ORM\Table(name="company_industry")
 * @ORM\Entity
 */
class CompanyIndustry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company_industry", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompanyIndustry;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name", type="string", length=50, nullable=false)
     */
    private $industryName;



    /**
     * Get idCompanyIndustry
     *
     * @return integer
     */
    public function getIdCompanyIndustry()
    {
        return $this->idCompanyIndustry;
    }

    /**
     * Set industryName
     *
     * @param string $industryName
     *
     * @return CompanyIndustry
     */
    public function setIndustryName($industryName)
    {
        $this->industryName = $industryName;

        return $this;
    }

    /**
     * Get industryName
     *
     * @return string
     */
    public function getIndustryName()
    {
        return $this->industryName;
    }
}
