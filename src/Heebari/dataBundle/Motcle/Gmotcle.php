<?php

namespace Heebari\dataBundle\Motcle;

use Heebari\dataBundle\Entity\Groupemotclef;
use Heebari\dataBundle\Entity\Motclef;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManager;

class Gmotcle {

    private $em;

    public function __construct(EntityManager $entityManager) {
        $this->em = $entityManager;
    }

    public function getMotclefs() {
        $group = new Motclef();
        $motcle = $this->em->getRepository('HeebaridataBundle:Motclef')->findAll();
        return $motcle;
    }

    public function getentity($names) {
        if (is_array($names)) {
            $retour = array();
            foreach ($names as $name) {
                $motcle = $this->em->getRepository("HeebaridataBundle:Motclef")->findOneBy(array('value' => $name));
                $field = $motcle->getField();
                $group = $motcle->getGroupemotclef();
                $entite = $group->getEntity();
                $rouato = $group->getRoadto();
                array_push($retour, [$field, $entite, $rouato]);
            }
            $retour = $this->classer($retour);
        } else {
            $motcle = $this->em->getRepository("HeebaridataBundle:Motclef")->findOneBy(array('value' => $names));
            $field = $motcle->getField();
            $group = $motcle->getGroupemotclef();
            $entite = $group->getEntity();
            $rouato = $group->getRoadto();
            $retour = [$field, $entite, $rouato];
        }

        return $retour;
    }

    public function exist($name) {
        $tab = $this->getMotclefs();
        for ($i = 0; $i < sizeof($tab); $i++) {
            if ($name == $tab[i]) {
                return true;
            }
        }
        return false;
    }

    public function estpays($name) {
        $retour = array();
        $i = 0;
        foreach ($name as $pay) {
            $p = $this->em->getRepository('HeebaridataBundle:Country')->findOneby(array("countryName" => $pay));
            if ($p != null) {
                array_push($retour, $p);
                $i++;
            }
        }
        if ($i == 0)
            return false;
        else
            return $retour;
    }
    public function estcompany($name) {
        $retour = array();
        $i = 0;
        foreach ($name as $company) {
            $p = $this->em->getRepository('HeebaridataBundle:Company')->findOneby(array("countryName" => $company));
            if ($p != null) {
                array_push($retour, $p);
                $i++;
            }
        }
        if ($i == 0)
            return false;
        else
            return $retour;
    }

    public function classer($test) {
        $fin = array($test[0][1] => array($test[0][0], $test[0][2]));
        for ($j = 1; $j < sizeof($test); $j++) {
            if (array_key_exists($test[$j][1], $fin)) {
                $fin[$test[$j][1]][0] = $fin[$test[$j][1]][0] . " " . $test[$j][0];
            } else {
                $fin[$test[$j][1]] = array($test[$j][0], $test[$j][2]);
            }
        }
        return $fin;
    }

}
