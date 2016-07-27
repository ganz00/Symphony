<?php
namespace Heebari\dataBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
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
     * @ORM\Column(type="text", length=255, nullable=true, options={"default":"NULL"})
     */
    private $champ;

    /**
     * @ORM\OneToMany(targetEntity="StakeholdersRelationship", mappedBy="motclef")
     */
    private $stakeholdersRelationship;

    /**
     * @ORM\ManyToOne(targetEntity="Heebari\dtatBundle\Entity\Groupemotclef", inversedBy="motclef")
     * @ORM\JoinColumn(name="groupemotclef_id", referencedColumnName="id")
     */
    private $groupemotclef;
}