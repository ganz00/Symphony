<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billing
 *
 * @ORM\Table(name="billing", uniqueConstraints={@ORM\UniqueConstraint(name="id_user_biling_date", columns={"id_user", "biling_date"})}, indexes={@ORM\Index(name="IDX_EC224CAA6B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class Billing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_biling", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBiling;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="biling_date", type="date", nullable=false)
     */
    private $bilingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", nullable=true)
     */
    private $paymentMethod;

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
     * Get idBiling
     *
     * @return integer
     */
    public function getIdBiling()
    {
        return $this->idBiling;
    }

    /**
     * Set bilingDate
     *
     * @param \DateTime $bilingDate
     *
     * @return Billing
     */
    public function setBilingDate($bilingDate)
    {
        $this->bilingDate = $bilingDate;

        return $this;
    }

    /**
     * Get bilingDate
     *
     * @return \DateTime
     */
    public function getBilingDate()
    {
        return $this->bilingDate;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return Billing
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set idUser
     *
     * @param \Heebari\dataBundle\Entity\User $idUser
     *
     * @return Billing
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
