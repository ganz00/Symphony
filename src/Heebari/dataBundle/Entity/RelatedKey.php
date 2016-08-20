<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class RelatedKey
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Heebari\dataBundle\Entity\Motclef")
     * @ORM\JoinColumn(name="motclef_id", referencedColumnName="id")
     */
    private $motclef;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return RelatedKey
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set motclef
     *
     * @param \Heebari\dataBundle\Entity\Motclef $motclef
     *
     * @return RelatedKey
     */
    public function setMotclef(\Heebari\dataBundle\Entity\Motclef $motclef = null)
    {
        $this->motclef = $motclef;

        return $this;
    }

    /**
     * Get motclef
     *
     * @return \Heebari\dataBundle\Entity\Motclef
     */
    public function getMotclef()
    {
        return $this->motclef;
    }
}
