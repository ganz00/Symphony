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


    public function onecountrydatesAction($pays, $motcle = null, $debut = null, $fin = null) {
        $countrydata = $this->container->get('Heebari_data.country');
        $data = $countrydata->getcountrydata($pays, $debut, $fin);
        if($debut->format('Y') == $fin->format('Y'))
            $template = '@template/Paysresult.html.twig';
        else
           $template = '@template/Paysresult.html.twig';
        $serv1 = $this->container->get('Heebari_data.gestion');
        return $this->render($template, $serv1->formatone($data));
    }

    public function onecountryKeysdatesAction($pays, $motcle, $debut, $fin) {
        $serv1 = $this->container->get('Heebari_data.motclef');
        $gestion = $this->container->get('Heebari_data.gestion');
        $info = $serv1->getentity($motcle);
        $retour = array();
        $i = 0;
        foreach ($info as $key => $value) {
            $a = explode(" ", $value[0]);
            $res = $this->responsebuilder($pays, $key, $value[1], $a, $debut, $fin);
            $retour[$key] = $gestion->formatdate($res);
        }
        $Lretour = $gestion->getsimpleres($retour);
        $res = $this->traitecalcul($Lretour);
        if($res!= NULL)
           $retour[$res[0]] = $res[1];
        //TODO : Faire l'operation et ajouter au tableau de retour faire l'operation partout avant le return
        return $this->render('@template/onecountryGraphe.html.twig', array("donnee" => $retour , "pays" => $pays->getCountryName()));
    }

    public function responsebuilder($pays, $table, $roadto, $keys, $debut, $fin) {
        $em = $this->getDoctrine()->getManager();
        switch ($roadto) {
            case 'F':
                $getter = 'get' . $table;
                $resultat = $em->getRepository("HeebaridataBundle:Country")->$getter($pays->getIdCountry(), $keys, $debut, $fin);
                $Res = array();
                $Res = $resultat;
                json_encode($Res);
                return $Res;
            case 'PopulationParameter':
                $getter1 = 'getId' . $roadto;
                $data = $pays->$getter1()->$getter1();
                $getter = 'get' . $table;
                $inter = $em->getRepository("HeebaridataBundle:" . $roadto)->$getter($data, $keys, $debut, $fin);
                return $inter;
            default:
                $data = $pays->getIdCountry();
                $getter = 'get' . $table;
                $inter = $em->getRepository("HeebaridataBundle:" . $roadto)->$getter($data, $keys, $debut, $fin);
                return $inter;
        }
    }

    public function traitecalcul($result) {
        $session = $this->get("session");
        if(!$session->get('key'))
            return;
        $calcu = $session->get('calculate');
        unset($_SESSION['calculate']);
        $exp = array();
        if ($calcu != NULL) {
            foreach ($calcu as $key => $value) {
                $exp[$key] = [];
                foreach ($value as $va) {
                    foreach ($result as $annee => $fieldval) {
                        if (isset($fieldval[$va])){
                            $exp[$key][$va][$annee][$va] = $fieldval[$va];
                        if(isset($fieldval["dateOfInformation"]))
                            $exp[$key][$va][$annee]["dateOfInformation"] = $fieldval["dateOfInformation"];
                        }
                    }
                    
                }
            }
        }
        return $this->effectuecalcul($exp);
    }
    public function effectuecalcul($tab) {
        $gestion = $this->container->get('Heebari_data.gestion');
        $session = $this->get("session");
        $res = [];
        $i=0;
        $data = [];
        foreach ($tab as $operation => $donnee) {
            foreach ($donnee as $key => $value) {
                $data[$key] = $value;
            }
        }
        $cle = array_keys($data);
        $id = $cle[0]."per".$cle[1];
        foreach ($data[$cle[0]] as $mot1 => $val) {
                $date = $val["dateOfInformation"];
                foreach ($data[$cle[1]] as $mot2 => $value) {
                    if ($value["dateOfInformation"]){
                        array_push($res,["dateOfInformation" => $date, $id => $this->calcul($val[$cle[0]], $value[$cle[1]], "per")]);
                    }
              }
        }
         $result = array_values(array_unique($res, SORT_REGULAR));
        return [$id ,$result];
    }
    public function calcul($var1,$var2,$opp) {
        if($opp=="per")
            return $var1/$var2;
    }
    

}
