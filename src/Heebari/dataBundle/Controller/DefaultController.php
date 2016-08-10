<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\RelatedKey;
use Heebari\dataBundle\Entity\MotclefRepository;
use Heebari\dataBundle\Entity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    private $Generalkey = ["Cross", "series", "per", "growth", "Average", "level", "owning", "head"];

    public function indexAction() {
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }

    public function seachAction($chaine) {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $gestion = $this->container->get('Heebari_data.gestion');
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
            $motcle = $gestion->filter($motcle, '/[A-Za-z]{2,}/');
            $date = preg_split("/[-]+/", $keywords[1]);
            if (strlen($date[0]) < 4)
                $date = array();
            $result = $gestion->check($motclebase, $motcle);
            $valid = $result[0];
            $valid = $gestion->remove($valid);
            $teste = $result[1];
            $teste = $gestion->remove($teste);
            $operation = $gestion->filterkey($teste);
            $pays = $Gmotclef->estpays($teste);

            if (!$pays)
             {
                $response = new Response('erreur au moin un pays pour ce type de recherche.', Response::HTTP_NOT_FOUND);
                return $response;
            }
            if (sizeof($pays) > 3)
             {
                $response = new Response('3 pays maximum.', Response::HTTP_NOT_FOUND);
                return $response;
            }
        }else {
            $date = preg_split("/[-]+/", $keywords[0]);
            if (sizeof($date > 1)){
                $response = new Response('erreur juste une date pour se type de recherche.', Response::HTTP_NOT_FOUND);
                return $response;
            }
        }
        return $this->redir($date, $pays, $valid, $operation);
    }

    public function responser($pays, $controller, $motcle = NULL, $date1 = NULL, $date2 = NULL) {
        if ($date2 == NULL) {
            return $response = $this->forward($controller, array(
                'pays' => $pays,
                'keys' => $motcle,
                'year' => $date1
            ));
        } else {
            return $response = $this->forward($controller, array(
                'pays' => $pays,
                'keys' => $motcle,
                'debut' => $date1,
                'fin' => $date2
           ));
        }    }

    public function redirpart($b, $c, $date, $pays, $motcle) {
        if ($b == 0 && $c == 0) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountry');
        }
        if ($b > 0 && $c == 0) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrykeys', $motcle);
        }
        if ($b > 0 && $c == 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountryKeysdate', $motcle, $date[0]);
        }
        //TODO
        if ($b > 0 && $c > 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountryKeysdates', $motcle, $date[0], $date[1]);
        }
        //TODO
        if ($b == 0 && $c == 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrydate',NULL, $date[0]);
        }
        if ($b == 0 && $c == 2) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrydates',NULL, $date[0], $date[1]);
        }
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }

    public function redir($date, $pays, $motcle) {
        $a = sizeof($pays);
        $b = sizeof($motcle);
        $c = sizeof($date);
        
        switch ($a) {
            case 1:
                return $this->redirpart($b, $c, $date, $pays, $motcle);
                break;
            case 2:
                $gestion = $this->container->get('Heebari_data.gestion');
                $session = $this->get('session');
                $session->set('date' , $date);
                $session->set('motcle' , $motcle);
                $session->set('pays' , $pays);
               return $this->redirect($this->generateUrl('heebaridata_crossseach',
                        ["pays1" => $pays[0]->getCountryName(),"pays2" => $pays[1]->getCountryName(),'cle' =>  'all']) );
                break;
            case 3:
                $gestion = $this->container->get('Heebari_data.gestion');
                $session = $this->get('session');
                $session->set('date' , $date);
                $session->set('pays' , $pays);
               return $this->redirect($this->generateUrl('heebaridata_crossseach2',
                        ["pays1" => $pays[0]->getCountryName(),"pays2" => $pays[1]->getCountryName(),"pays3" => $pays[2]->getCountryName(),'cle' =>  'all']) );
                break;
            default :
                return $this->render('HeebaridataBundle:index:layout.html.twig');
                break;
        }    }
        
    public function format($param) {
        ?>
        <pre>
        <?php var_dump($param); ?>
        </pre>
        <?php
    }
}
//TOTO verifier NE et Population growth 
//creer le extension twig pour afficher tableau info