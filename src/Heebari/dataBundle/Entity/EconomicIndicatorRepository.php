<?php

/*
 * Cree par landry KATEU
 */
namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class EconomicIndicatorRepository extends EntityRepository {
    
    public function findMany($country,$debut,$fin)
{
  $qb = $this->createQueryBuilder('e')
    ->innerJoin('e.idEconomicData', 'ed', 'WITH', 'ed.idCountry ='.$country)
    ->andWhere('e.dateOfInformation > :debut')
    ->setParameter('debut', $debut)    
    ->andWhere('e.dateOfInformation < :fin')
    ->setParameter('fin', $fin)
    ->orderBy('e.dateOfInformation', 'DESC');
  
  $results = $qb->getQuery()->getArrayResult();
  $retour = array(0 =>"dateOfInformation", 1=>$results);
  return $retour;
}
public function findforMany($country, $debut, $fin,$fields) {
          $querys = 'SELECT e.idEconomicIndicator,e.dateOfInformation';
          foreach ($fields as  $field) {
              $querys = $querys.',e.'.$field;
          }
          $querys = $querys.' FROM HeebaridataBundle:EconomicIndicator e INNER JOIN e.idEconomicData ed WITH ed.idCountry = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $country);
         $results = $queryb->getArrayResult();
         $retour = array(0 => "dateOfInformation", 1 => $results);
         return $retour;
    }

}

