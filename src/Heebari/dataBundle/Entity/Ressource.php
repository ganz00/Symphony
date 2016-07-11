<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource", indexes={@ORM\Index(name="FK_ressource_ressource_categorie", columns={"id_ressource_categorie"})})
 * @ORM\Entity
 */
class Ressource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ressource", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="ressource_name", type="string", length=50, nullable=false)
     */
    private $ressourceName;

    /**
     * @var \RessourceCategorie
     *
     * @ORM\ManyToOne(targetEntity="RessourceCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ressource_categorie", referencedColumnName="id_ressource_categorie")
     * })
     */
    private $idRessourceCategorie;



    /**
     * Get idRessource
     *
     * @return integer
     */
    public function getIdRessource()
    {
        return $this->idRessource;
    }

    /**
     * Set ressourceName
     *
     * @param string $ressourceName
     *
     * @return Ressource
     */
    public function setRessourceName($ressourceName)
    {
        $this->ressourceName = $ressourceName;

        return $this;
    }

    /**
     * Get ressourceName
     *
     * @return string
     */
    public function getRessourceName()
    {
        return $this->ressourceName;
    }

    /**
     * Set idRessourceCategorie
     *
     * @param \Heebari\dataBundle\Entity\RessourceCategorie $idRessourceCategorie
     *
     * @return Ressource
     */
    public function setIdRessourceCategorie(\Heebari\dataBundle\Entity\RessourceCategorie $idRessourceCategorie = null)
    {
        $this->idRessourceCategorie = $idRessourceCategorie;

        return $this;
    }

    /**
     * Get idRessourceCategorie
     *
     * @return \Heebari\dataBundle\Entity\RessourceCategorie
     */
    public function getIdRessourceCategorie()
    {
        return $this->idRessourceCategorie;
    }
}
