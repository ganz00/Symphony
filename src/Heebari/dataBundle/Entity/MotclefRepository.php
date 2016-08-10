<?php

namespace Heebari\dataBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Heebari\dataBundle\Entity\RelatedKey;

class MotclefRepository extends EntityRepository {
    
    public function monfindall()
{
  $query = $this->_em->createQuery('SELECT m.id,m.value,r.name FROM HeebaridataBundle:Motclef m LEFT JOIN HeebaridataBundle:RelatedKey r WITH m.id = r.motclef');
  $tab = $query->getResult();
  $retour = array();
  $val = $tab[0]["value"];
  $retour[$val]=array( 0 => $tab[0]["name"] );
  $pos = 1;
  for($i=1;$i< sizeof($tab);$i++){
      if($tab[$i]["value"] == $val){
          $retour[$val][$pos] = $tab[$i]["name"];
          $pos++;
      }
      else{
          $val = $tab[$i]["value"];
          $retour[$val]=array( 0 => $tab[$i]["name"] );
          $pos = 1;
      }
  }
  return $retour;
}
}