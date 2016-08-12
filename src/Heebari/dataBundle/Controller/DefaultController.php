<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\RelatedKey;
use Heebari\dataBundle\Entity\MotclefRepository;
use Heebari\dataBundle\Entity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }
    public function goAction(Request $request) {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $Listemot = $Gmotclef->getMotclefs();
        $page = $request->query->get('seach');
        if($page==NULL || $page == "")
            return $this->render('@template/Seachpage.html.twig',array("liste" => $Listemot));
        
        $pages = preg_split("/[\\s]{1,}/", $page);
        $chaine="";
        $date="";
        $patt = "/\\d/";
        $url = '';
        foreach ($pages as $key => $mot) {
            if(strlen($mot) > 1){
                if(preg_match($patt, $mot))
                        $date = $date.$mot."-";
                 else
                  $url = $url.$mot."-";
         }
       }      
       
       $chaine = substr($url,0,strlen($url)-1)."+".substr($date,0,strlen($date)-1);
       return $this->forward('HeebaridataBundle:Default:seach', array(
                        'chaine' => $chaine,
                    ));
       
    }

    public function seachAction($chaine) {
        $Gmotclef = $this->container->get('Heebari_data.motclef');
        $gestion = $this->container->get('Heebari_data.gestion');
        $keyrec = $this->container->get('Heebari_data.Keyrecognitor');
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('HeebaridataBundle:Motclef');
        $motclebase = $repo->monfindall();
        
        if (strlen($chaine) < 3){
           $response = new Response('erreur recherche invalide.', Response::HTTP_NOT_FOUND);
                return $response; 
        }
            
        
        $keywords = preg_split("/[+]+/", $chaine);
        $pattern = '/[A-Za-z]{2,}/';
        $motcle = preg_split("/[-]+/", $keywords[0]);
        $valeur = $keyrec->seachin($keywords,$motcle);
        $session = $this->get('session');
        $session->set('valeur' , $valeur);
        if($valeur)
            return $this->redirect($this->generateUrl('heebaridata_calculateseach',array('chaine' => $chaine)));
        
        $val = preg_match($pattern, $motcle[0]);
        if ($val == 1) {
            $motcle = $gestion->filter($motcle, '/[A-Za-z]{2,}/');
            $date = preg_split("/[-]+/", $keywords[1]);
            isset($date[0]) && (strlen($date[0]) == 4) ? $date[0]= $date[0] : $date[0]=NULL;
            isset($date[1]) && (strlen($date[1]) == 4) ? $date[1]= $date[1] : $date[1]=NULL;
            $date = $gestion->traiteDate($date[0],$date[1]);
            $result = $gestion->check($motclebase, $motcle);
            $valid = $result[0];
            $valid = $gestion->remove($valid);
            $teste = $result[1];
            $teste = $gestion->remove($teste);
            $pays = $Gmotclef->estpays($teste);
            
            if (!$pays)
             {
                $response = new Response('erreur aucun pays trouvé.', Response::HTTP_NOT_FOUND);
                return $response;
            }
            if (sizeof($pays) > 3)
             {
                $response = new Response('3 pays maximum.', Response::HTTP_NOT_FOUND);
                return $response;
            }
        }else {
            $date = preg_split("/[-]+/", $keywords[0]);
             isset($date[0]) && (strlen($date[0]) >= 4) ? $date[0]= $date[0] : $date[0]=NULL;
            isset($date[1]) && (strlen($date[1]) >= 4) ? $date[1]= $date[1] : $date[1]=NULL;
            $date = $gestion->traiteDate($date[0],$date[1]);
            if (sizeof($date > 1)){
                $response = new Response('erreur juste une date pour se type de recherche.', Response::HTTP_NOT_FOUND);
                return $response;
            }
        }
        return $this->redir($date, $pays, $valid);
    }

    public function responser($pays, $controller, $motcle = NULL, $date1 = NULL, $date2 = NULL) {
            return $response = $this->forward($controller, array(
                'pays' => $pays,
                'motcle' => $motcle,
                'debut' => $date1,
                'fin' => $date2
           ));
        }    

    public function redirpart($b, $c, $date, $pays, $motcle) {
        if ($b == 0 && $c == 0) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountry',NULL, $date[0], $date[1]);
        }
        if ($b > 0 && $c == 0) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrykeys', $motcle, $date[0], $date[1]);
        }
        if ($b > 0 && $c == 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountryKeysdate', $motcle, $date[0], $date[1]);
        }
        //TODO
        if ($b > 0 && $c > 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountryKeysdates', $motcle, $date[0], $date[1]);
        }
        //TODO
        if ($b == 0 && $c == 1) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrydate',NULL, $date[0], $date[1]);
        }
        if ($b == 0 && $c == 2) {
            return $this->responser($pays[0], 'HeebaridataBundle:Simpleseach:onecountrydates',NULL, $date[0], $date[1]);
        }
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }

    public function redir($date, $pays, $motcle) {
        $a = sizeof($pays);
        $b = sizeof($motcle);
        $c = 0;
        if($date[0]!=NULL)
            $c = 1;
        if($date[1]!=NULL)
            $c = 2;
        switch ($a) {
            case 1:
                return $this->redirpart($b, $c, $date, $pays, $motcle);
                break;
            case 2:
                $gestion = $this->container->get('Heebari_data.gestion');
                $session = $this->get('session');
                $session->set('date' , $date);
                $session->set('motcles' , $motcle);
                $session->set('pays' , $pays);
               return $this->redirect($this->generateUrl('heebaridata_crossseach',
                        ["pays1" => $pays[0]->getCountryName(),"pays2" => $pays[1]->getCountryName(),'cle' =>  '?']) );
                break;
            case 3:
                $gestion = $this->container->get('Heebari_data.gestion');
                $session = $this->get('session');
                $session->set('date' , $date);
                $session->set('pays' , $pays);
                $session->set('motcles' , $motcle);
               return $this->redirect($this->generateUrl('heebaridata_crossseach2',
                        ["pays1" => $pays[0]->getCountryName(),"pays2" => $pays[1]->getCountryName(),"pays3" => $pays[2]->getCountryName(),'cle' =>  '?']) );
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