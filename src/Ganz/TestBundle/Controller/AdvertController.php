<?php

// src/Ganz/TestBundle/Controller/AdvertController.php

namespace Ganz\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller {
    
  public function indexAction(){
      
    $content = $this->get('templating')->render('GanzTestBundle:Advert:index.html.twig');
    
    return new Response($content);
  }
}