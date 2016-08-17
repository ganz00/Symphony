<?php

/*
 * Cree par landry KATEU
 */
namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class PopulationParameterRepository extends EntityRepository {
    

    public function getPopulationDistribution($id,$fields="all", $debut=NULL, $fin=NULL) {
        if($fields == "all")
            $querys = 'SELECT PD.idPopulationDistribution,PD.dateOfInformation,PD.urbanisationRate,PD.activityRate,'
                . 'PD.unemploymentRate,PD.qualificationLevel,PD.bankingPenetrationRate'
                . ',PD.lifeExpectancy,PD.mortalityRate,PD.birthRate';
        else{
          $querys = 'SELECT (pp.idPopulationParameter),pp.dateOfInformation';
          foreach ($fields as  $field) {
              $querys = $querys.',PD.'.$field;
          }
        }
          $querys = $querys.' FROM HeebaridataBundle:PopulationParameter pp INNER JOIN '
                  . 'pp.idPopulationDistribution PD WITH pp.idPopulationParameter = :id';
           if($fin != NULL){
              $querys = $querys.' and pp.dateOfInformation > :debut';
              $querys = $querys.' and pp.dateOfInformation < :fin';
            }if($debut!=NULL){
              $querys = $querys.' and pp.dateOfInformation > :debut';
            }
            $querys = $querys." ORDER BY pp.dateOfInformation DESC ";
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
        $pg = array();
        foreach ($data as $key => $value) {
           $pg[$key]["Populationgrowth"] = $value["birthRate"]-$value["mortalityRate"];
           $pg[$key]["dateOfInformation"] = $value["dateOfInformation"];
        }
        
        return $pg;
    }
}