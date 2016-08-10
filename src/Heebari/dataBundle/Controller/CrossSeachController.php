<?php

/*
 * Cree par landry KATEU
 */
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
use Symfony\Component\HttpFoundation\Session\Session;

class CrossSeachController extends Controller {

    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning"];
    private $populationKey = ["head"];
    
    
    public function ManycountryAction($pays1,$pays2,$pays3=NULL) {
        $gestion = $this->container->get('Heebari_data.gestion');
        $session = $this->get('session');
        $country = $session->get('pays');  
        $date = $session->get('date');
        $a = sizeof($date);
        if($a==2){
            $debut = $date[0];
            $fin = $date[1];
        }else{
            if($a==1){
                $debut = $date[0];
                $fin = NULL;
            }else{
                $debut = NULL;
                $fin = NULL;
            }
        }
        $pay1 = $gestion->getcountrydata($country[0],$debut,$fin);
        $pay2 = $gestion->getcountrydata($country[1],$debut,$fin);
        $pay1 = $pay1['donnee'];
        $pay2 = $pay2['donnee'];
        $pay3 = array();
        if ($pays3!=NULL) {
        $pay3 = $gestion->getcountrydata($country[2],$debut,$fin);
        $pay3 = $pay3['donnee'];
        }
        foreach ($pay1 as $key => $value) {
            $retour[$key] = [$pays1 => $value,$pays2=>$pay2[$key]];
            if ($pays3!=NULL) {
                    $retour[$key][$pays3] = $pay3[$key];
                }
        }
        return $this->render('@template/Testresult.html.twig',["donnee" => $retour]);
    }
    
}