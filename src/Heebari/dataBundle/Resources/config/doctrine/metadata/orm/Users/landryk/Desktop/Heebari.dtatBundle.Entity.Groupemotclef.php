<?php
namespace Heebari\dtatBundle\Entity;
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
     * @ORM\OneToMany(targetEntity="Heebari\dataBundle\Entity\Motclef", mappedBy="groupemotclef")
     */
    private $motclef;
}