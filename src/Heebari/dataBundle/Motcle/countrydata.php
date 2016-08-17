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
class countrydata {

    private $em;
    private  $G;

    public function __construct(EntityManager $entityManager, Gmotcle $G) {
        $this->em = $entityManager;
        $this->G = $G;
    }
    public function getall($country){
        $pays = new Country();
        $pays = $this->em->getRepository("HeebaridataBundle:Country")->findOneBy(array('countryName' => $country));
        $id = $pays->getIdCurrency()->getIdCurrency();
        $monaie = $this->em->getRepository("HeebaridataBundle:Currency")->findOneBy(array('idCurrency' => $id));
        $pop_param = $pays->getIdPopulationParameter();
        $pop_distrib = new PopulationDistribution();
        $pop_distrib = $pop_param->getIdPopulationDistribution();
        $pop_distrib = $this->em->getRepository("HeebaridataBundle:PopulationDistribution")->findOneBy(array('IdPopulationDistribution' => $pop_distrib));
        $economicdata = $this->em->getRepository('HeebaridataBundle:EconomicData')->Findfirst($pays->getIdCountry());
        $economicindic = new EconomicIndicator();
        $economicindic = $this->em->getRepository('HeebaridataBundle:EconomicIndicator')->findOneBy(array('idEconomicData' => $economicdata[0]["idEconomicData"]));
        $data = array("pays" => $country, "monaie" => $monaie,"parametre_population" => $pop_param,
                     "distrib_population" =>$pop_distrib,"economic_data" =>$economicdata[0],
                     "economic_indic"=>$economicindic);
        return $data;
        
    }
    public function getentity($country) {
        $pays = new Country();
        $pays = $this->em->getRepository("HeebaridataBundle:Country")->findOneBy(array('countryName' => $country));
        return $pays;
    }
    public function getcountrydata($pays,$debut=null,$fin=null){       
        $data = $pays->getIdPopulationParameter()->getIdPopulationParameter();
        $company = $this->em->getRepository("HeebaridataBundle:Country")->getCompany($pays->getIdCountry(),"all",$debut,$fin);
        $economicdata = $this->em->getRepository("HeebaridataBundle:Country")->getEconomicData($pays->getIdCountry(),"all",$debut,$fin);
        $economicindic = $this->em->getRepository("HeebaridataBundle:EconomicData")->getEconomicIndicator($pays->getIdCountry(),"all",$debut,$fin);
        $PopulationParameter = $this->em->getRepository("HeebaridataBundle:Country")->getPopulationParameter($pays->getIdCountry(),"all",$debut,$fin);
        $populationDistrib = $this->em->getRepository("HeebaridataBundle:PopulationParameter")->getPopulationDistribution($data,"all",$debut,$fin);
        $Collectivity = $this->em->getRepository("HeebaridataBundle:Country")->getCollectivity($pays->getIdCountry(),"all",$debut,$fin);
        $Currency = $this->em->getRepository("HeebaridataBundle:Country")->getCurrency($pays->getIdCountry(),"all",$debut,$fin);
        $gdp = $this->em->getRepository("HeebaridataBundle:Country")->getGDP($pays->getIdCountry(),NULL,$debut,$fin);
        $NE = $this->em->getRepository("HeebaridataBundle:Country")->getNE($pays->getIdCountry(),null,$debut,$fin);
        $populatiogrowth  = $this->em->getRepository("HeebaridataBundle:PopulationParameter")->getPopulationgrowth($data,null,$debut,$fin);
        return array("donnee" => array("pays" => $pays->getcountryName(), 
                                        "monaie" => $Currency,
                                        "company" =>$company,
                                        "collectivity" => $Collectivity,
                                        "parametre_population" => $PopulationParameter,
                                        "distrib_population" =>$populationDistrib,
                                        "economic_data" =>$economicdata,
                                        "economic_indic"=>$economicindic,
                                        "PIB" => $gdp,
                                        "Net Export" => $NE,
                                        "population growth"=> $populatiogrowth));
    }

    

}


