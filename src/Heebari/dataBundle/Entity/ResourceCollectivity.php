<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResourceCollectivity
 *
 * @ORM\Table(name="resource_collectivity", uniqueConstraints={@ORM\UniqueConstraint(name="id_resource_id_collectivity", columns={"id_resource", "id_collectivity"})}, indexes={@ORM\Index(name="FK_resource_collectivity_collectivity", columns={"id_collectivity"}), @ORM\Index(name="IDX_5EC4DF08EC4A1883", columns={"id_resource"})})
 * @ORM\Entity
 */
class ResourceCollectivity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_resource_collec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResourceCollec;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var \Collectivity
     *
     * @ORM\ManyToOne(targetEntity="Collectivity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collectivity", referencedColumnName="id_collectivity")
     * })
     */
    private $idCollectivity;

    /**
     * @var \Ressource
     *
     * @ORM\ManyToOne(targetEntity="Ressource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resource", referencedColumnName="id_ressource")
     * })
     */
    private $idResource;



    /**
     * Get idResourceCollec
     *
     * @return integer
     */
    public function getIdResourceCollec()
    {
        return $this->idResourceCollec;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return ResourceCollectivity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set idCollectivity
     *
     * @param \Heebari\dataBundle\Entity\Collectivity $idCollectivity
     *
     * @return ResourceCollectivity
     */
    public function setIdCollectivity(\Heebari\dataBundle\Entity\Collectivity $idCollectivity = null)
    {
        $this->idCollectivity = $idCollectivity;

        return $this;
    }

    /**
     * Get idCollectivity
     *
     * @return \Heebari\dataBundle\Entity\Collectivity
     */
    public function getIdCollectivity()
    {
        return $this->idCollectivity;
    }

    /**
     * Set idResource
     *
     * @param \Heebari\dataBundle\Entity\Ressource $idResource
     *
     * @return ResourceCollectivity
     */
    public function setIdResource(\Heebari\dataBundle\Entity\Ressource $idResource = null)
    {
        $this->idResource = $idResource;

        return $this;
    }

    /**
     * Get idResource
     *
     * @return \Heebari\dataBundle\Entity\Ressource
     */
    public function getIdResource()
    {
        return $this->idResource;
    }
}
