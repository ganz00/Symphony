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

     public function onecountryAction($pays,$motcle=null,$debut=null,$fin=null) {
         $gestion = $this->container->get('Heebari_data.country');
         $data = $gestion->getcountrydata($pays,$debut,$fin);
         return $this->render('@template/Testresult.html.twig', $data);
    }
    public function onecountrydateAction($pays,$motcle=null,$debut=null,$fin=null) {
        $gestion = $this->container->get('Heebari_data.country');
         $data = $gestion->getcountrydata($pays,$debut,$fin);
        return $this->render('@template/Testresult.html.twig', $data);
    }
    public function onecountrydatesAction($pays,$motcle=null,$debut=null,$fin=null) {
        $gestion = $this->container->get('Heebari_data.country');
         $data = $gestion->getcountrydata($pays,$debut,$fin);
        return $this->render('@template/Testresult.html.twig', $data);
    }

    public function onecountrykeysAction($pays,$motcle,$debut,$fin) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($motcle);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res = $this->responsebuilder($pays,$key,$value[1],$a, $debut, $fin,FALSE);
            $retour[$i]= $res;
            $i++;
        } 
        return $this->render('@template/Testresult.html.twig', array("donnee" => $retour));
       }
    public function onecountryKeysdateAction($pays,$motcle,$debut,$fin) {        
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($motcle);
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

public function onecountryKeysdatesAction($pays, $motcle , $debut,$fin) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        $info = $serv1->getentity($motcle);
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
