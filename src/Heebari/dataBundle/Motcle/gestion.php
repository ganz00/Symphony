<?php

/*
 * Cree par landry KATEU
 */
namespace Heebari\dataBundle\Motcle;

use Heebari\dataBundle\Entity\Groupemotclef;
use Heebari\dataBundle\Motcle\Gmotcle;
use Heebari\dataBundle\Entity\Country;
use \Heebari\dataBundle\Entity\PopulationDistribution;
use \Heebari\dataBundle\Entity\Currency;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManager;
use \Heebari\dataBundle\Entity\EconomicIndicator;

class gestion {

    private $em;
    private  $G;
    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning", "head"];
    private $data;
    public function __construct(EntityManager $entityManager, Gmotcle $G) {
        $this->em = $entityManager;
        $this->G = $G;
    }
    
    public function check($array, $url) {
        $retour = array();
        $retour2 = array();
        $trouve = false;
        foreach ($url as $value) {
            foreach ($array as $key => $valu) {
                if ($key == $value) {
                    array_push($retour, $key);
                    $trouve = true;
                } else {
                    if (in_array($value, $valu, true)) {
                        array_push($retour, $key);
                        $trouve = true;
                    }
                }
            }
            if (!$trouve)
                array_push($retour2, $value);
            $trouve = false;
        }

        return ([$retour, $retour2]);
    }
    public function filter($param, $pattern) {
        $retour = array();
        foreach ($param as $value) {
            $val = preg_match($pattern, $value, $matches);
            if ($val == 1 && strlen($matches[0]) >= 2)
                array_push($retour, $matches[0]);
        }
        return $retour;
    }
    public function remove($param) {
        $cle = array();
        foreach ($param as $key => $val) {
            $cle[$val] = true;
        }
        $cle = array_keys($cle);
        return $cle;
    }
    public function filterkey($param) {
        $retour = array();
        foreach ($param as $value) {
            if (in_array($value, $this->Generalkey, true))
                array_push($retour, $value);
        }
        return $retour;
    }
    public function setdata($param,$name) {
        $this->data[$name] = $param;
    }
    public function getdata() {
        return $this->data;
    }
    public function getcountrydata($pays,$start=null,$end=null){
        $debut = null;
        $fin = null;
        if($end!=NULL){
                $debut = new \Datetime($start. '-01-01');
                $fin = new \Datetime($end. '-12-31');
        }else{
            if($start!=NULL){
                $debut = new \Datetime($start. '-01-01');
                $fin = new \Datetime($start. '-12-31');
            }
        }
        $data = $pays->getIdPopulationParameter()->getIdPopulationParameter();
        $company = $this->em->getRepository("HeebaridataBundle:Country")->getCompany($pays->getIdCountry(),"all",$debut,$fin);
        $economicdata = $this->em->getRepository("HeebaridataBundle:Country")->getEconomicData($pays->getIdCountry(),"all",$debut,$fin);
        $economicindic = $this->em->getRepository("HeebaridataBundle:EconomicData")->getEconomicIndicator($pays->getIdCountry(),"all",$debut,$fin);
        $PopulationParameter = $this->em->getRepository("HeebaridataBundle:Country")->getPopulationParameter($pays->getIdCountry(),"all",$debut,$fin);
        $populationDistrib = $this->em->getRepository("HeebaridataBundle:PopulationParameter")->getPopulationDistribution($data,"all",$debut,$fin);
        $Collectivity = $this->em->getRepository("HeebaridataBundle:Country")->getCollectivity($pays->getIdCountry(),"all",$debut,$fin);
        $Currency = $this->em->getRepository("HeebaridataBundle:Country")->getCurrency($pays->getIdCountry(),"all",$debut,$fin);
        return array("donnee" => array("pays" => $pays, 
                                        "monaie" => $Currency,
                                        "company" =>$company,
                                        "collectivity" => $Collectivity,
                                        "parametre_population" => $PopulationParameter,
                                        "distrib_population" =>$populationDistrib,
                                        "economic_data" =>$economicdata,
                                        "economic_indic"=>$economicindic));
    }
   
}

