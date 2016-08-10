<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\BalanceElements;
use Heebari\dataBundle\Entity\Groupemotclef;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\Country;
use Heebari\dataBundle\Entity\EconomicData;
use Heebari\dataBundle\Entity\EconomicDataRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Internal\Hydratation;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Security\core\Exception;
use Symfony\Component\Debug\Exception\UndefinedMethodException;
//ExceptionHandler::register();

class SeachController extends Controller {

    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning","head"];
    private $populationKey = ["head"];

    
    public function crosscountryserie($country1,$country2,$name,$debut,$fin) {  }
   
    public function crosscountry($country1,$country2,$name,$year) {
        return $this->render('@template/Simpleresult.html.twig');}

    public function goAction() {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $Listemot = $Gmotclef->getMotclefs();
        return $this->render('@template/Seachpage.html.twig',array("liste" => $Listemot));
    }

    public function seachistAction($country, $motcle1, $year) {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $em = $this->getDoctrine()->getManager();
        $entite = $Gmotclef->getentity($motcle1);
        $debut = new \Datetime($year . '-01-01');
        $enty = $em->getRepository('HeebaridataBundle:' . $entite[0]);
        $count = new Country();
        $count = $em->getRepository('HeebaridataBundle:Country')->findOneBy(array('countryName' => $country));
        $getter = 'get' . $entite[1];
        $result = "";
        $id = $count->getIdCountry();
        if ($entite[0] == "EconomicData") {
            $donne = $enty->findOneBy(array('idCountry' => $id));
            $result = $donne->$getter();
            $pop_param = new \Heebari\dataBundle\Entity\PopulationParameter();

        } if($entite[0] == "PopulationParameter") {
             $pop_param = $count->getIdPopulationParameter();
             $result = $pop_param->$getter();
            }
            if ($entite[0] == "PopulationDistribution") {
                 $pop_param = $count->getIdPopulationParameter();
                 $pop_distrib = new \Heebari\dataBundle\Entity\PopulationDistribution();
                 $pop_distrib = $pop_param->getIdPopulationDistribution();                   
                 $result = $pop_distrib->$getter();
            }
            if ($entite[0] == "EconomicIndicator") {
                 $ide = $em->getRepository('HeebaridataBundle:EconomicData')
                         ->findMany($id,new \Datetime($year . '-01-01'),new \Datetime($year . '-12-31')) ;
                 $economic = new \Heebari\dataBundle\Entity\EconomicIndicator();
                 $economic = $enty->findOneBy(array('idEconomicData' => $ide[0]["idEconomicData"]));                 
                 $result = $economic->$getter();    
            }
        $Listemot = $Gmotclef->getMotclefs();

        return $this->render('@template/Simpleresult.html.twig', array('group1' => $result, "liste" => $Listemot, "valeur" => $entite[1] . " au " . $country . " en " . $year));
    }

    public function seachgraphAction($country, $name, $debut, $fin) {
        $em = $this->getDoctrine()->getManager();
        $pays = new Country();
        $pays = $em->getRepository("HeebaridataBundle:Country")->findOneBy(array('countryName' => $country));
        $debut = new \Datetime($debut . '-01-01');
        $fin = new \Datetime($fin . '-12-31');
        $motcle = new Motclef();
        $motcle = $em->getRepository("HeebaridataBundle:Motclef")->findOneBy(array('value' => $name));
        $mot = $motcle->getField();
        $group = new Groupemotclef();
        $group = $motcle->getGroupemotclef();
        $entite = $group->getEntity();
        if ($entite == "EconomicData" || $entite == "EconomicIndicator" ) {
            $resultat = $em->getRepository("HeebaridataBundle:" . $entite)->findMany($pays->getIdCountry(), $debut, $fin,$em);
            $Res = array();
            $filtre = $resultat[0];
            foreach ($resultat[1] as $result) {  
                $date = $result[$filtre];
                $Res[$date->format('Y')] = $result[$mot];
            }

            json_encode($Res);
        } else {
            $Res = "données non disponible";
        }
        return $this->render('@template/Bargraphe.html.twig', array('result' => $Res, 'libelle' => $name . " au "
                    . $country . " de " . $debut->format('Y') . " à " . $fin->format('Y')));
    }
    
    public function seachpaysAction($pays){
        $serv = $this->container->get('Heebari_data.country');
        $data = $serv->getall($pays);
        return $this->render('@template/Paysresult.html.twig',array("donnee" => $data));
        
    }
    

}
