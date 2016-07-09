<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyKeyPeople
 *
 * @ORM\Table(name="company_key_people", indexes={@ORM\Index(name="FK_company_key_people_company", columns={"id_company"}), @ORM\Index(name="FK_company_key_people_key_people_position", columns={"id_position"})})
 * @ORM\Entity
 */
class CompanyKeyPeople
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_key_people", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKeyPeople;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=30, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_company", referencedColumnName="id_company")
     * })
     */
    private $idCompany;

    /**
     * @var \KeyPeoplePosition
     *
     * @ORM\ManyToOne(targetEntity="KeyPeoplePosition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_position", referencedColumnName="id_position")
     * })
     */
    private $idPosition;



    /**
     * Get idKeyPeople
     *
     * @return integer
     */
    public function getIdKeyPeople()
    {
        return $this->idKeyPeople;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return CompanyKeyPeople
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return CompanyKeyPeople
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return CompanyKeyPeople
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return CompanyKeyPeople
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set idCompany
     *
     * @param \Heebari\dataBundle\Entity\Company $idCompany
     *
     * @return CompanyKeyPeople
     */
    public function setIdCompany(\Heebari\dataBundle\Entity\Company $idCompany = null)
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

    /**
     * Set idPosition
     *
     * @param \Heebari\dataBundle\Entity\KeyPeoplePosition $idPosition
     *
     * @return CompanyKeyPeople
     */
    public function setIdPosition(\Heebari\dataBundle\Entity\KeyPeoplePosition $idPosition = null)
    {
        $this->idPosition = $idPosition;

        return $this;
    }

    /**
     * Get idPosition
     *
     * @return \Heebari\dataBundle\Entity\KeyPeoplePosition
     */
    public function getIdPosition()
    {
        return $this->idPosition;
    }
}
