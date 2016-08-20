<?php
namespace Heebari\dataBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="Heebari\dataBundle\Entity\MotclefRepository")
 */
class Motclef
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $value;
    
     /**
     * @var string
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $field;
    
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

  
    /**
     * @ORM\ManyToOne(targetEntity="Heebari\dataBundle\Entity\Groupemotclef", inversedBy="motclef")
     * @ORM\JoinColumn(name="groupemotclef_id", referencedColumnName="id")
     */
    private $groupemotclef;
   
    

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
     * @return Motclef
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set groupemotclef
     *
     * @param \Heebari\dataBundle\Entity\Groupemotclef $groupemotclef
     *
     * @return Motclef
     */
    public function setGroupemotclef(\Heebari\dataBundle\Entity\Groupemotclef $groupemotclef = null)
    {
        $this->groupemotclef = $groupemotclef;

        return $this;
    }

    /**
     * Get groupemotclef
     *
     * @return \Heebari\dataBundle\Entity\Groupemotclef
     */
    public function getGroupemotclef()
    {
        return $this->groupemotclef;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return Motclef
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Motclef
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
     * Constructor
     */
    public function __construct()
    {
        $this->relatedKey = new \Doctrine\Common\Collections\ArrayCollection();
    }


 

   
}
