<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgeRange
 *
 * @ORM\Table(name="age_range")
 * @ORM\Entity
 */
class AgeRange
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_age_range", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgeRange;

    /**
     * @var string
     *
     * @ORM\Column(name="age_range", type="string", length=50, nullable=false)
     */
    private $ageRange;



    /**
     * Get idAgeRange
     *
     * @return integer
     */
    public function getIdAgeRange()
    {
        return $this->idAgeRange;
    }

    /**
     * Set ageRange
     *
     * @param string $ageRange
     *
     * @return AgeRange
     */
    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;

        return $this;
    }

    /**
     * Get ageRange
     *
     * @return string
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }
}
