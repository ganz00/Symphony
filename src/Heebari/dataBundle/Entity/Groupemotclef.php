<?php
namespace Heebari\dataBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Groupemotclef
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(nullable=true)
     */
    private $Value;
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $entity;

    /**
     * @ORM\OneToMany(targetEntity="Heebari\dataBundle\Entity\Motclef", mappedBy="groupemotclef",cascade={"persist"})
     */
    private $motclef;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->motclef = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set value
     *
     * @param string $value
     *
     * @return Groupemotclef
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Add motclef
     *
     * @param \Heebari\dataBundle\Entity\Motclef $motclef
     *
     * @return Groupemotclef
     */
    public function addMotclef(\Heebari\dataBundle\Entity\Motclef $motclef)
    {
        $this->motclef[] = $motclef;

        return $this;
    }

    /**
     * Remove motclef
     *
     * @param \Heebari\dataBundle\Entity\Motclef $motclef
     */
    public function removeMotclef(\Heebari\dataBundle\Entity\Motclef $motclef)
    {
        $this->motclef->removeElement($motclef);
    }

    /**
     * Get motclef
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMotclef()
    {
        return $this->motclef;
    }

    /**
     * Set entity
     *
     * @param string $entity
     *
     * @return Groupemotclef
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
