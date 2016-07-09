<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StakeholdersRelationship
 *
 * @ORM\Table(name="stakeholders_relationship", uniqueConstraints={@ORM\UniqueConstraint(name="id_container_id_company_type_container", columns={"id_container", "id_company", "type_container"})}, indexes={@ORM\Index(name="FK_stakeholders_relationship_company", columns={"id_company"})})
 * @ORM\Entity
 */
class StakeholdersRelationship
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_container", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idContainer;

    /**
     * @var string
     *
     * @ORM\Column(name="type_container", type="string", length=50, nullable=false)
     */
    private $typeContainer;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $pourcentage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="started_date", type="date", nullable=false)
     */
    private $startedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ended_date", type="date", nullable=true)
     */
    private $endedDate;

    /**
     * @var \Company
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company", referencedColumnName="id_company")
     * })
     */
    private $idCompany;



    /**
     * Set idContainer
     *
     * @param integer $idContainer
     *
     * @return StakeholdersRelationship
     */
    public function setIdContainer($idContainer)
    {
        $this->idContainer = $idContainer;

        return $this;
    }

    /**
     * Get idContainer
     *
     * @return integer
     */
    public function getIdContainer()
    {
        return $this->idContainer;
    }

    /**
     * Set typeContainer
     *
     * @param string $typeContainer
     *
     * @return StakeholdersRelationship
     */
    public function setTypeContainer($typeContainer)
    {
        $this->typeContainer = $typeContainer;

        return $this;
    }

    /**
     * Get typeContainer
     *
     * @return string
     */
    public function getTypeContainer()
    {
        return $this->typeContainer;
    }

    /**
     * Set pourcentage
     *
     * @param float $pourcentage
     *
     * @return StakeholdersRelationship
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set startedDate
     *
     * @param \DateTime $startedDate
     *
     * @return StakeholdersRelationship
     */
    public function setStartedDate($startedDate)
    {
        $this->startedDate = $startedDate;

        return $this;
    }

    /**
     * Get startedDate
     *
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->startedDate;
    }

    /**
     * Set endedDate
     *
     * @param \DateTime $endedDate
     *
     * @return StakeholdersRelationship
     */
    public function setEndedDate($endedDate)
    {
        $this->endedDate = $endedDate;

        return $this;
    }

    /**
     * Get endedDate
     *
     * @return \DateTime
     */
    public function getEndedDate()
    {
        return $this->endedDate;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return StakeholdersRelationship
     */
    public function setIdCompany(\Heebari\dataBundle\Entity\Company $idCompany)
    {
        $this->idCompany = $idCompany;

        return $this;
    }

    /**
     * Get idCompany
     *
     * @return \Heebari\dataBundle\Entity\Company
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }
}
