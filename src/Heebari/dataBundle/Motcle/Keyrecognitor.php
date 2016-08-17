<?php

/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Motcle;

use Heebari\dataBundle\Motcle\Gmotcle;
use Doctrine\ORM\EntityManager;

class Keyrecognitor {

    private $G;
    private $Generalkey = ["per", "head", "level", "owning", "vs"];
    private $field1 = ["bankingRateperhead","gdpperhead","NEperhead"];

    public function __construct(Gmotcle $G) {
        $this->G = $G;
    }

    public function seachin($chaine, $chainetab) {
        $val = $this->findoccur($chainetab,  $this->Generalkey);
        if (sizeof($val) == 0)
            return false;
        $liste = [];
        $matches=[];
        foreach ($val as $value) {
            preg_match_all($this->createregex($value), $chaine[0], $matches, PREG_OFFSET_CAPTURE);
            $liste[$value] = $matches[0];
        }
        $last = [];
        $retenu = [];
        foreach ($liste as $key => $value) {
            foreach ($value as  $value2) {
                $motcle = preg_split("/[-]+/", $value2[0]);
                unset($motcle[1]);
                $last[$key] = $motcle;
            }
        }
        return $last;
    }

    public function findoccur($chainetab,$tab) {
        $retour = array();
        foreach ($tab as $key => $value) {
            $toto = array_search($value, $chainetab);
            if ($toto)
                array_push($retour, $value);
        }
        return $retour;
    }

    public function createregex($var) {
        return "/[a-zA-Z]{1,}[-]{1,}+[" . $var . "]+[-][a-zA-Z]{1,}/";
    }

    public function filterkey($param) {
        $retour = array();
        foreach ($param as $value) {
            if (in_array($value, $this->Generalkey, true))
                array_push($retour , $value);
        }
        return $retour;
    }

}
