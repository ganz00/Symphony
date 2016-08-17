<?php

/*
 * Cree par landry KATEU
 */
namespace Heebari\dataBundle\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\Groupemotclef;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\Country;
use Symfony\Component\HttpFoundation\Session\Session;
//TOTO: LIBERER lA SESSION APRES AVOIR RECUPERER LES VALEUR
class CrossSeachController extends Controller {
    
     public function ManycountrykeysAction($pays,$motcles,$debut,$fin,$nbp) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        //recuperer les entitées et classer les mots clef par entitées
        $info = $serv1->getentity($motcles);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res1 = $this->responsebuilder($pays[0],$key,$value[1],$a, $debut, $fin);
            $res2 = $this->responsebuilder($pays[1],$key,$value[1],$a, $debut, $fin);
            $retour[$key][$pays[0]->getCountryName()] = $res1;
            $retour[$key][$pays[1]->getCountryName()] = $res2;
            if ($nbp==3) {
                $res3 = $this->responsebuilder($pays[2],$key,$value[1],$a, $debut, $fin);
                $retour[$key][$pays[2]->getCountryName()] = $res3;
            }
            //vider la session apres
            $retour = ["donnee" => $retour];
        }
        return $this->render('@template/Testresult.html.twig',$retour);
    }
    
     public function ManycountryAction($pays1,$pays2,$pays3=NULL) {
        $gestion = $this->container->get('Heebari_data.country');
        $session = $this->get('session');
        $country = $session->get('pays');  
        $date = $session->get('date');
        $debut = $date[0];
        $fin = $date[1];
        $keys = $session->get('motcles');
        $nb = 2;
        if ($pays3!=NULL) {
            $nb = 3;
        }
        if(sizeof($keys)!= 0){
           return $this->forward('HeebaridataBundle:CrossSeach:Manycountrykeys', array(
                        'pays' => $country,
                        'motcles' =>$keys,
                        'debut' => $debut,
                        'fin'  => $fin,
                        'nbp'  => $nb
                    ));
        }
        $pay1 = $gestion->getcountrydata($country[0],$debut,$fin);
        $pay2 = $gestion->getcountrydata($country[1],$debut,$fin);
        $pay1 = $pay1['donnee'];
        $pay2 = $pay2['donnee'];
        if ($nb == 3) {
        $pay3 = array();
        $pay3 = $gestion->getcountrydata($country[2],$debut,$fin);
        $pay3 = $pay3['donnee'];
        }
        
        $serv = $this->container->get('Heebari_data.gestion');
        $retour = $serv->formatmany($pay1,$pay2,$pay3);
        return $this->render('@template/Testresult.html.twig',["donnee"=>$retour]);
    }
                
                
            
    public function responsebuilder($pays,$table,$roadto, $keys, $debut, $fin) {
        $em = $this->getDoctrine()->getManager();
        switch ($roadto) {
            case 'F':
                $getter = 'get'.$table;
                $resultat = $em->getRepository("HeebaridataBundle:Country")->$getter($pays->getIdCountry(), $keys,$debut, $fin );
                $Res = array();
                $Res = $resultat;  
                
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