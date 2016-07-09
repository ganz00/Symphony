<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessField
 *
 * @ORM\Table(name="business_field")
 * @ORM\Entity
 */
class BusinessField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_business_field", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBusinessField;

    /**
     * @var string
     *
     * @ORM\Column(name="business_field_name", type="string", length=50, nullable=false)
     */
    private $businessFieldName;



    /**
     * Get idBusinessField
     *
     * @return integer
     */
    public function getIdBusinessField()
    {
        return $this->idBusinessField;
    }

    /**
     * Set businessFieldName
     *
     * @param string $businessFieldName
     *
     * @return BusinessField
     */
    public function setBusinessFieldName($businessFieldName)
    {
        $this->businessFieldName = $businessFieldName;

        return $this;
    }

    /**
     * Get businessFieldName
     *
     * @return string
     */
    public function getBusinessFieldName()
    {
        return $this->businessFieldName;
    }
}
