<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\Motclef;
use Heebari\dataBundle\Entity\RelatedKey;
use Heebari\dataBundle\Entity\MotclefRepository;
use Heebari\dataBundle\Entity;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeebaridataBundle:index:layout.html.twig');
    }
     public function seachAction($chaine)
    {
         $em = $this->getDoctrine()->getManager();
         $motclef = $em->getRepository('HeebaridataBundle:Motclef')->findall();
         //TODO : modifier le fichier repo de mot cle pour avoir le mot cles classé
         var_dump($motclef);
        $param = $keywords = preg_split("/[-,+]+/", $chaine);
        return $this->render('HeebaridataBundle:index:layout.html.twig');
        
    }
    
}
