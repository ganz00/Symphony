<?php

// src/Heebari/dataBundle/Entity/EconomicDataRepository.php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class EconomicDataRepository extends EntityRepository {
    
    public function findMany($country, $debut, $fin) {
        $queryBuilder = $this->createQueryBuilder('e');
        $queryBuilder->where('e.idCountry = :country')
                ->setParameter('country', $country)
                ->andWhere('e.dateOfInformations > :debut')
                ->setParameter('debut', $debut)
                ->andWhere('e.dateOfInformations < :fin')
                ->setParameter('fin', $fin)
                ->orderBy('e.dateOfInformations', 'DESC')
        ;
        $query = $queryBuilder->getQuery();

        // On récupère les résultats à partir de la Query
        $results = $query->getArrayResult();
        $retour = array(0 => "dateOfInformations", 1 => $results);
        return $retour;
    }

    public function Findfirst($country) {
        $qb = $this->createQueryBuilder('e')
                ->where('e.idCountry = :country')
                ->setParameter('country', $country)
                ->orderBy('e.dateOfInformations', 'DESC')
                ->setMaxResults(1);

        $results = $qb->getQuery()->getArrayResult();
        return $results;
    }
    
       public function findforMany($country, $debut, $fin,$fields) {
          $querys = 'SELECT (e.idCountry),e.dateOfInformations';
          foreach ($fields as  $field) {
              $querys = $querys.', e.'.$field;
          }
          $querys = $querys.' FROM HeebaridataBundle:EconomicData e Where e.idCountry = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $country);
         $results = $queryb->getArrayResult();
         $retour = array(0 => "dateOfInformations", 1 => $results);
         return $retour;
    }
    public function getEconomicIndicator($id,$fields="all", $debut=NULL, $fin=NULL) {
        if($fields == "all")
            $querys = 'SELECT e';
        else{
          $querys = 'SELECT (e.idEconomicIndicator),e.dateOfInformation';
          foreach ($fields as  $field) {
              $querys = $querys.',e.'.$field;
          }
        }
          $querys = $querys.' FROM HeebaridataBundle:EconomicIndicator e INNER JOIN e.idEconomicData ed WITH ed.idCountry = :id';
            if($debut != NULL){
              $querys = $querys.' and e.dateOfInformation > :debut';
            }if($fin!=NULL){
              $querys = $querys.' and e.dateOfInformation < :fin';
            }
           $querys = $querys." ORDER BY e.dateOfInformation DESC ";
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         if($debut != NULL){
              $queryb->setParameter('debut', $debut);
          }if($fin!=NULL){
              $queryb->setParameter('fin', $fin);
          }
         $results = $queryb->getArrayResult();
         return $results;
    }
   

    
}
