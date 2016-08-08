<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\RelatedKey;
use Heebari\dataBundle\Entity\MotclefRepository;
use Heebari\dataBundle\Entity;

class DefaultController extends Controller {

    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning", "head"];

    public function indexAction() {
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }

    public function seachAction($chaine) {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('HeebaridataBundle:Motclef');
        $motclebase = $repo->monfindall();
        if (strlen($chaine) < 3)
            echo 'petit';
        //TODO:donner info sur erreur mot clef in valide
        //return;

        $keywords = preg_split("/[+]+/", $chaine);
        $pattern = '/[A-Za-z]{2,}/';
        $motcle = preg_split("/[-]+/", $keywords[0]);
        $val = preg_match($pattern, $motcle[0]);
        if ($val == 1) {
            $motcle = $this->filter($motcle, '/[A-Za-z]{2,}/');

            $date = preg_split("/[-]+/", $keywords[1]);
            if (strlen($date[0]) < 4)
                $date = array();
            $result = $this->check($motclebase, $motcle);
            $valid = $result[0];
            $valid = $this->remove($valid);
            $teste = $result[1];
            $teste = $this->remove($teste);
            $operation = $this->filterkey($teste);
            $pays = $Gmotclef->estpays($teste);
            
            if (!$pays)
                echo 'faux';
            //TODO:donner info sur erreur au moin un pays pour ce type de recherche
            //return;
            if (sizeof($pays) > 3)
                echo 'grand  ';
            //TODO:donner info sur erreur pays < = 3
            //return;
        }else {
            $date = preg_split("/[-]+/", $keywords[0]);
            if (sizeof($date > 1))
                echo 'grand date';
            //TODO:donner info sur erreur juste une date pour se type de recherche
            //return;
        }


        return $this->redir($date, $pays, $valid, $operation);
    }

    public function redir($date, $pays, $motcle, $operation) {
        $a = sizeof($pays);
        $b = sizeof($motcle);
        $c = sizeof($date);
        switch ($a) {
            case 1:
                if ($b == 0 && $c == 0) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountry', array(
                        'pays' => $pays[0]
                    ));
                    return $response;
                }
                if ($b > 0 && $c==0) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountrykeys', array(
                        'pays' => $pays[0],
                        'keys' => $motcle
                    ));
                    
                    return $response;
                }
                if ($b > 0 && $c==1) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountryKeysdate', array(
                        'pays' => $pays[0],
                        'keys' => $motcle,
                        'year' => $date[0]
                    ));
                    
                    return $response;
                }
                //TODO
                if ($b > 0 && $c>1) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountryKeysdates', array(
                        'pays' => $pays[0],
                        'keys' => $motcle,
                        'year' => $date
                    ));
                    
                    return $response;
                }
                //TODO
                if ($b == 0 && $c==1) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountrydate', array(
                        'pays' => $pays[0],
                        'keys' => $motcle,
                        'year' => $date
                    ));
                    
                    return $response;
                }
                if ($b == 0 && $c==1) {
                    $response = $this->forward('HeebaridataBundle:Simpleseach:onecountrydates', array(
                        'pays' => $pays[0],
                        'keys' => $motcle,
                        'year' => $date
                    ));
                    
                    return $response;
                }
                return $this->render('HeebaridataBundle:index:layout.html.twig');
            case 2:
                return $this->render('HeebaridataBundle:index:layout.html.twig');
            case 3:
                return $this->render('HeebaridataBundle:index:layout.html.twig');

        }
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
            if ($val == 1 && strlen($matches[0]) > 2)
                array_push($retour, $matches[0]);
        }
        return $retour;
    }

    public function format($param) {
        ?>
        <pre>
        <?php var_dump($param); ?>
        </pre>
        <?php
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

}
