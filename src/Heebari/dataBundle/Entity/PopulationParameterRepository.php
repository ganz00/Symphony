<?php

/*
 * Cree par landry KATEU
 */
namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class PopulationParameterRepository extends EntityRepository {
    
        //TODO:rajouter fiel a la main

    public function getPopulationDistribution($id,$fields="all", $debut=NULL, $fin=NULL) {
        if($fields == "all")
            $querys = 'SELECT PD.idPopulationDistribution';
        else{
          $querys = 'SELECT (pp.idPopulationParameter),pp.dateOfInformation';
          foreach ($fields as  $field) {
              $querys = $querys.',PD.'.$field;
          }
        }
          $querys = $querys.' FROM HeebaridataBundle:PopulationParameter pp INNER JOIN '
                  . 'pp.idPopulationDistribution PD WITH pp.idPopulationParameter = :id';
           if($debut != NULL){
              $querys = $querys.' and pp.dateOfInformation > :debut';
          }if($fin!=NULL){
              $querys = $querys.' and pp.dateOfInformation < :fin';
          }
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         if($debut != NULL){
              $queryb->setParameter('debut', $debut);
          }if($fin!=NULL){
              $queryb->setParameter('fin', $fin);
          }
         $results = $queryb->getArrayResult();
         return $results;
    }
     public function getPopulationgrowth($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $data = $this->getPopulationDistribution($id, ["mortalityRate","birthRate"], $debut, $fin);
        foreach ($data as $key => $value) {
           $pg[$key] = $value["birthRate"]-$value["mortalityRate"];
        }
        
        return $pg;
    }
}