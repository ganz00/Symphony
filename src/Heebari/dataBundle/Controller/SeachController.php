<?php

namespace Heebari\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Heebari\dataBundle\Entity\BalanceElements;
use Heebari\dataBundle\Entity\Groupemotclef;
use Heebari\dataBundle\Entity\Motclef;

class SeachController extends Controller {

    public function seachAction($motcle1, $motcle2) {
        $em = $this->getDoctrine()->getManager();
        $M = new Motclef();
        $M2 = new Motclef();
        $M = $em->getRepository('HeebaridataBundle:Motclef')->find($motcle1);
        $M2 = $em->getRepository('HeebaridataBundle:Motclef')->find($motcle2);
        $group1 = new Groupemotclef();
        $group1 = $M->getGroupemotclef();
        $group2 = $M2->getGroupemotclef();
        $data = $group1->getMotclef();
        $data2 = $group2->getMotclef();
       

return $this->render('@template/result.html.twig', array(
                    'group1' => $group1,
                    'group2' => $group2,
                    'liste'  => $data,
                    'liste2'=> $data2
        ));
    }

    public function goAction() {
        return $this->render('@template/Seachpage.html.twig');
    }

}
