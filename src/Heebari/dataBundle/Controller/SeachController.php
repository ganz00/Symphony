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

    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning"];
    private $populationKey = ["head"];

    public function seachAction($motcle1, $motcle2) {
        $em = $this->getDoctrine()->getManager();
        $M = new Motclef();
        $M2 = new Motclef();
        $M = $em->getRepository('HeebaridataBundle:Motclef')->find($motcle1);
        $mot = $M->getField();
        $group = new Groupemotclef();
        $group = $M->getGroupemotclef();
        $entite = $group->getEntity();
        $M2 = $em->getRepository('HeebaridataBundle:Motclef')->find($motcle2);
        $mot2 = $M2->getField();
        $group2 = new Groupemotclef();
        $group2 = $M2->getGroupemotclef();
        $entite2 = $group->getEntity();
        $result = $em->getRepository("HeebaridataBundle:" . $entite)->find();
        if ($entite != $entite2)
            $result2 = $em->getRepository("HeebaridataBundle:" . $entite2)->find();





        return $this->render('@template/Simpleresult.html.twig', array(
                    'group1' => $group1,
                    'group2' => $group2,
                    'liste' => $data,
                    'liste2' => $data2
        ));
    }

    public function goAction() {
        return $this->render('@template/Seachpage.html.twig');
    }

    public function seachistAction($country, $motcle1, $year) {
        $em = $this->getDoctrine()->getManager();
        $M = new Motclef();
        $M = $em->getRepository('HeebaridataBundle:Motclef')->findOneBy(array('value' => $motcle1));
        $group1 = new Groupemotclef();
        $group1 = $M->getGroupemotclef();
        $entite = $group1->getEntity();
        $vmot = $M->getField();
        $debut = new \Datetime($year . '-01-01');
        $enty = $em->getRepository('HeebaridataBundle:' . $entite);
        $count = new Country();
        $count = $em->getRepository('HeebaridataBundle:Country')->findOneBy(array('countryName' => $country));
        $getter = 'get' . $vmot;
        $result = "";
        if ($entite == "EconomicData") {
            $id = $count->getIdCountry();
            $donne = $enty->findOneBy(array('idCountry' => $id));
            $result = $donne->$getter();
        } if($entite == "PopulationParameter") {
            $pop_param = new \Heebari\dataBundle\Entity\PopulationParameter();
             $pop_param = $count->getIdPopulationParameter();
             $result = $pop_param->$getter();
             $vrai = true;     
            }
            if ($entite == "PopulationDistribution") {
                 $pop_distrib = new \Heebari\dataBundle\Entity\PopulationDistribution();
                 $pop_distrib = $pop_param->getIdPopulationDistribution();                   
                 $result = $pop_distrib->$getter();
                 
            }
            if ($entite == "EconomicIndicator") {
               
                 $economic = new \Heebari\dataBundle\Entity\EconomicIndicator();
                 $economic = $em->getRepository('HeebaridataBundle:EconomicIndicator')->findOneBy(array('idCountry' => $count));                 
                 $result = $economic->$getter();
                 
            }
             

        return $this->render('@template/Simpleresult.html.twig', array('group1' => $result, "pays" => $count, "valeur" => $vmot . " au " . $country . " en " . $year));
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
        if ($entite == "EconomicData") {
            $resultat = $em->getRepository("HeebaridataBundle:" . $entite)->findMany($pays->getIdCountry(), $debut, $fin);
            $Res = array();
            foreach ($resultat as $result) {
                $date = $result["dateOfInformations"];
                $Res[$date->format('Y')] = $result[$mot];
            }

            json_encode($Res);
        } else {
            $Res = "données non disponible";
        }
        return $this->render('@template/Bargraphe.html.twig', array('result' => $Res, 'libelle' => $name . " au "
                    . $country . " de " . $debut->format('Y') . " à " . $fin->format('Y')));
    }

}
