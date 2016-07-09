<?php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RessourceCategorie
 *
 * @ORM\Table(name="ressource_categorie")
 * @ORM\Entity
 */
class RessourceCategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ressource_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRessourceCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="category_ressource", type="string", length=50, nullable=false)
     */
    private $categoryRessource;



    /**
     * Get idRessourceCategorie
     *
     * @return integer
     */
    public function getIdRessourceCategorie()
    {
        return $this->idRessourceCategorie;
    }

    /**
     * Set categoryRessource
     *
     * @param string $categoryRessource
     *
     * @return RessourceCategorie
     */
    public function setCategoryRessource($categoryRessource)
    {
        $this->categoryRessource = $categoryRessource;

        return $this;
    }

    /**
     * Get categoryRessource
     *
     * @return string
     */
    public function getCategoryRessource()
    {
        return $this->categoryRessource;
    }
}
