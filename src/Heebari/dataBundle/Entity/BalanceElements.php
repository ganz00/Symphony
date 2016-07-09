<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceElements
 *
 * @ORM\Table(name="balance_elements")
 * @ORM\Entity
 */
class BalanceElements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_element", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idElement;

    /**
     * @var string
     *
     * @ORM\Column(name="elemennt_name", type="string", length=200, nullable=false)
     */
    private $elemenntName;



    /**
     * Get idElement
     *
     * @return integer
     */
    public function getIdElement()
    {
        return $this->idElement;
    }

    /**
     * Set elemenntName
     *
     * @param string $elemenntName
     *
     * @return BalanceElements
     */
    public function setElemenntName($elemenntName)
    {
        $this->elemenntName = $elemenntName;

        return $this;
    }

    /**
     * Get elemenntName
     *
     * @return string
     */
    public function getElemenntName()
    {
        return $this->elemenntName;
    }
}
