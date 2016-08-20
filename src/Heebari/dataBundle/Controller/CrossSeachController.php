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
class CrossSeachController extends Controller {
    
     public function ManycountrykeysdateAction($pays,$motcles,$debut,$fin,$nbp) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        $serv = $this->container->get('Heebari_data.gestion');
        //recuperer les entitées et classer les mots clef par entitées
        $info = $serv1->getentity($motcles);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res1 = $this->responsebuilder($pays[0],$key,$value[1],$a, $debut, $fin);
            $res2 = $this->responsebuilder($pays[1],$key,$value[1],$a, $debut, $fin);
            $retour[$key][$pays[0]->getCountryName()] = $serv->formatdate($res1);
            $retour[$key][$pays[1]->getCountryName()] = $serv->formatdate($res2);
            
            if ($nbp==3) {
                $res3 = $this->responsebuilder($pays[2],$key,$value[1],$a, $debut, $fin);
                $retour[$key][$pays[2]->getCountryName()] = $serv->formatdate($res3);
            }
            //vider la session apres
        }
        $retour = $serv->correctTable($retour);
         $res = $this->traitecalcul($retour);
        if($res!= NULL)
           $retour[$res[0]] = $res[1];
        
        $retour = ["donnee" => $retour];
        return $this->render('@template/Crossgraphe.html.twig',$retour);
    }
    public function ManycountrykeysdatesAction($pays,$motcles,$debut,$fin,$nbp) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        $serv = $this->container->get('Heebari_data.gestion');
        //recuperer les entitées et classer les mots clef par entitées
        $info = $serv1->getentity($motcles);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res1 = $this->responsebuilder($pays[0],$key,$value[1],$a, $debut, $fin);
            $res2 = $this->responsebuilder($pays[1],$key,$value[1],$a, $debut, $fin);
            $retour[$key][$pays[0]->getCountryName()] = $serv->formatdate($res1);
            $retour[$key][$pays[1]->getCountryName()] = $serv->formatdate($res2);
            
            if ($nbp==3) {
                $res3 = $this->responsebuilder($pays[2],$key,$value[1],$a, $debut, $fin);
                $retour[$key][$pays[2]->getCountryName()] = $serv->formatdate($res3);
            }
            //vider la session apres
        }
        $retour = $serv->correctTable($retour);
        $res = $this->traitecalcul($retour);
        if($res!= NULL)
           $retour[$res[0]] = $res[1];
        
        $retour = ["donnee" => $retour];
        
        return $this->render('@template/Crossgraphe.html.twig',$retour);
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
        if($debut->format('Y') == $fin->format('Y'))
            $control = "Manycountrykeysdate";
         else
            $control = "Manycountrykeysdates"  ;
        if(sizeof($keys)!= 0 ){
           return $this->forward('HeebaridataBundle:CrossSeach:'.$control, array(
                        'pays' => $country,
                        'motcles' =>$keys,
                        'debut' => $debut,
                        'fin'  => $fin,
                        'nbp'  => $nb
                    ));
        }
        $pay1 = $gestion->getcountrydata($country[0],$debut,$fin);
        $pay2 = $gestion->getcountrydata($country[1],$debut,$fin);
        $pay3 = null;
        if ($nb == 3) {
        $pay3 = array();
        $pay3 = $gestion->getcountrydata($country[2],$debut,$fin);
        }
        
        $serv = $this->container->get('Heebari_data.gestion');
        $retour[0] = $serv->formatone($pay1)['donnee'];
        $retour[1] = $serv->formatone($pay2)['donnee'];
        if ($nb == 3) 
            $retour[2] = $serv->formatone($pay3)['donnee'];
        return $this->render('@template/ManyPaysresult.html.twig',["donnee"=>$retour]);
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
public function traitecalcul($result) {
        $session = $this->get("session");
        $cle =0;
        if(!$session->get('key'))
            return;
        $calcu = $session->get('calculate');
        unset($_SESSION['calculate']);
        $exp = array();
        if ($calcu != NULL) {
            foreach ($calcu as $key => $value) {
                $cle = $value;
                if(sizeof($value)==2)
                        foreach ($result as $key => $data) {
                             foreach ($data as $pays => $val) {
                                 if(isset($val[0])){
                                     foreach ($val as $year => $fields) {
                                         if(isset($fields[$value[0]])){
                                         $exp[0]= $data;
                                         }
                                      if(isset($fields[$value[1]])){
                                         $exp[1]= $data;
                                      }
                                     }
                                 }else{
                                     if(isset($val[$value[0]])){
                                         $exp[0]= $data;
                                     }
                                      if(isset($val[$value[1]])){
                                         $exp[1]= $data;
                                      }
                                 }
                             }
                      
                  }
            }
            
        }
            return $this->effectuecalcul($exp, $cle[0], $cle[1]);
        
    }

 public function effectuecalcul($tab,$op1,$op2) {
        $gestion = $this->container->get('Heebari_data.gestion');
        $session = $this->get("session");
        $res = [];
        $i=0;
        $data = [];
        $id = $op1."per".$op2;
        foreach ($tab[0] as $pays1 => $data) {
                foreach ($data as $year => $field) {
                    $date = $field["dateOfInformation"];
                    $res[$pays1][$year]["dateOfInformation"] = $date;
                    $res[$pays1][$year][$id] = $field[$op1];
              }
        }
        foreach ($tab[1] as $pays1 => $data) {
                foreach ($data as $year => $field) {
                    $date = $field["dateOfInformation"];
                    if($date = $res[$pays1][$year]["dateOfInformation"])
                        $res[$pays1][$year][$id] = $res[$pays1][$year][$id]/$field[$op2];
              }
        }
        
         $result = [$id , $res];
        return $result;
    }
   
}