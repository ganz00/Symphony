<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KeyPeoplePosition
 *
 * @ORM\Table(name="key_people_position")
 * @ORM\Entity
 */
class KeyPeoplePosition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_position", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=50, nullable=false)
     */
    private $position;



    /**
     * Get idPosition
     *
     * @return integer
     */
    public function getIdPosition()
    {
        return $this->idPosition;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return KeyPeoplePosition
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }
}
