<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeebaridataBundle:Default:index.html.twig');
    }
}
