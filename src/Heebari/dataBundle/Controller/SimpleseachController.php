<?php

/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
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
//TOTO: creer extention twig pour affichage tableaux
class SimpleseachController extends Controller {

     public function onecountryAction($pays) {
         $gestion = $this->container->get('Heebari_data.gestion');
         $data = $gestion->getcountrydata($pays);
         return $this->render('@template/Testresult.html.twig', $data);
    }
    public function onecountrydateAction($pays,$year) {
        $gestion = $this->container->get('Heebari_data.gestion');
         $data = $gestion->getcountrydata($pays,$year);
        return $this->render('@template/Testresult.html.twig', $data);
    }
    public function onecountrydatesAction($pays,$debut,$fin) {
        $gestion = $this->container->get('Heebari_data.gestion');
         $data = $gestion->getcountrydata($pays,$debut,$fin);
        return $this->render('@template/Testresult.html.twig', $data);
    }

    public function onecountrykeysAction($pays, $keys) {
        $serv = $this->container->get('Heebari_data.country');
        $debut = new \Datetime((intval(date('Y')) - 10) . '-01-01');
        $fin = new \Datetime(intval(date('Y')) . '-12-31');
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($keys);
        $retour = array();
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res = $this->responsebuilder($pays,$key,$value[1],$a, $debut, $fin,FALSE);
            
            array_push($retour, $res);
        } 
        return $this->render('@template/Testresult.html.twig', array("donnee" => $retour));
       }
    public function onecountryKeysdateAction($pays, $keys , $year) {
        
        $serv = $this->container->get('Heebari_data.country');
        $debut = new \Datetime($year. '-01-01');
        $fin = new \Datetime($year. '-12-31');
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($keys);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res = $this->responsebuilder($pays,$key,$value[1],$a, $debut, $fin,false);
            $retour[$i]= $res;
            $i++;
        }
        return $this->render('@template/Testresult.html.twig', array("donnee" => $retour));
    }

public function onecountryKeysdatesAction($pays, $keys , $debut,$fin) {
        $serv = $this->container->get('Heebari_data.country');
        $debut = new \Datetime($debut. '-01-01');
        $fin = new \Datetime($fin. '-12-31');
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($keys);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res = $this->responsebuilder($pays,$key,$value[1],$a, $debut, $fin,false);
            $retour[$i]= $res;
            $i++;
        }
        
        return $this->render('@template/Testresult.html.twig', array("donnee" => $retour));
    }
    
    public function responsebuilder($pays,$table,$roadto, $keys, $debut, $fin,$boul) {
        $em = $this->getDoctrine()->getManager();
        switch ($roadto) {
            case 'F':
                //$resultat = $em->getRepository("HeebaridataBundle:" . $table)->findforMany($pays->getIdCountry(), $debut, $fin, $keys);
                $getter = 'get'.$table;
                $resultat = $em->getRepository("HeebaridataBundle:Country")->$getter($pays->getIdCountry(), $keys,$debut, $fin );
                $Res = array();
                if($boul){
                $filtre = "dateOfInformation";
                foreach ($resultat as $result) {
                    $date =$result[$filtre];
                    unset($result[$filtre]);
                    $Res[$date->format('Y')] = $result;
                }
                }  else {
                  $Res = $resultat;  
                }
                json_encode($Res);
                return $Res;
            case 'PopulationParameter':
                $getter1 = 'getId'.$roadto;
                $data = $pays->$getter1()->$getter1();
                $getter = 'get'.$table;
                $inter = $em->getRepository("HeebaridataBundle:" . $roadto)->$getter($data,$keys,$debut,$fin);
                return $inter;
            default:
                $data = $pays->getIdCountry();
                $getter = 'get'.$table;
                $inter = $em->getRepository("HeebaridataBundle:" . $roadto)->$getter($data,$keys,$debut,$fin);
                return $inter;
                
        }
    }

}
