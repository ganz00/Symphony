<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceLevelAgreement
 *
 * @ORM\Table(name="service_level_agreement", uniqueConstraints={@ORM\UniqueConstraint(name="id_user_id_service_service_started_date_service_ended_date", columns={"id_user", "id_service", "service_started_date", "service_ended_date"})}, indexes={@ORM\Index(name="FK_service_level_agreement_proposed_services", columns={"id_service"}), @ORM\Index(name="IDX_8A3A51B16B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class ServiceLevelAgreement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSla;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_started_date", type="date", nullable=false)
     */
    private $serviceStartedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_ended_date", type="date", nullable=false)
     */
    private $serviceEndedDate;

    /**
     * @var \ProposedServices
     *
     * @ORM\ManyToOne(targetEntity="ProposedServices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service", referencedColumnName="id_service")
     * })
     */
    private $idService;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Get idSla
     *
     * @return integer
     */
    public function getIdSla()
    {
        return $this->idSla;
    }

    /**
     * Set serviceStartedDate
     *
     * @param \DateTime $serviceStartedDate
     *
     * @return ServiceLevelAgreement
     */
    public function setServiceStartedDate($serviceStartedDate)
    {
        $this->serviceStartedDate = $serviceStartedDate;

        return $this;
    }

    /**
     * Get serviceStartedDate
     *
     * @return \DateTime
     */
    public function getServiceStartedDate()
    {
        return $this->serviceStartedDate;
    }

    /**
     * Set serviceEndedDate
     *
     * @param \DateTime $serviceEndedDate
     *
     * @return ServiceLevelAgreement
     */
    public function setServiceEndedDate($serviceEndedDate)
    {
        $this->serviceEndedDate = $serviceEndedDate;

        return $this;
    }

    /**
     * Get serviceEndedDate
     *
     * @return \DateTime
     */
    public function getServiceEndedDate()
    {
        return $this->serviceEndedDate;
    }

    /**
     * Set idService
     *
     * @param \Heebari\dataBundle\Entity\ProposedServices $idService
     *
     * @return ServiceLevelAgreement
     */
    public function setIdService(\Heebari\dataBundle\Entity\ProposedServices $idService = null)
    {
        $this->idService = $idService;

        return $this;
    }

    /**
     * Get idService
     *
     * @return \Heebari\dataBundle\Entity\ProposedServices
     */
    public function getIdService()
    {
        return $this->idService;
    }

    /**
     * Set idUser
     *
     * @param \Heebari\dataBundle\Entity\User $idUser
     *
     * @return ServiceLevelAgreement
     */
    public function setIdUser(\Heebari\dataBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Heebari\dataBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
