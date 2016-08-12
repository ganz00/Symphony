<?php

/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Entity;

use Heebari\dataBundle\Entity\PopulationParameter;
use Heebari\dataBundle\Entity\EconomicData;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CountryRepository extends EntityRepository {

    public function getCompany($id, $fields = "all", $debut = NULL, $fin = NULL) {
        if ($fields == "all")
            $querys = 'SELECT c';
        else {
            $querys = 'SELECT c.idCompany';
            foreach ($fields as $field) {
                $querys = $querys . ',c.' . $field;
            }
        }
        $querys = $querys . ' FROM HeebaridataBundle:Company c'
                . ' WHERE c.idCountry = :id';
        $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
        $results = $queryb->getArrayResult();
        return $results;
    }

    public function getEconomicData($id, $fields = "all", $debut = NULL, $fin = NULL) {
        if ($fields == "all")
            $querys = 'SELECT e';
        else {
            $querys = 'SELECT (e.idCountry),e.dateOfInformation';
            foreach ($fields as $field) {
                $querys = $querys . ', e.' . $field;
            }
        }
        $querys = $querys . ' FROM HeebaridataBundle:EconomicData e Where e.idCountry = :id';
        if($fin != NULL){
              $querys = $querys.' and e.dateOfInformation > :debut';
              $querys = $querys.' and e.dateOfInformation < :fin';
            }if($debut!=NULL){
              $querys = $querys.' and e.dateOfInformation > :debut';
            }
        $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
        if ($debut != NULL) {
            $queryb->setParameter('debut', $debut);
        }if ($fin != NULL) {
            $queryb->setParameter('fin', $fin);
        }
        $results = $queryb->getArrayResult();
        return $results;
    }

    //TODO:rajouter fiel a la main

    public function getPopulationParameter($id, $fields = "all", $debut = NULL, $fin = NULL) {
        if ($fields == "all")
            $querys = 'SELECT p.dateOfInformation';
        else {
            $querys = 'SELECT p.dateOfInformation';
            foreach ($fields as $field) {
                $querys = $querys . ',p.' . $field;
            }
        }
        $querys = $querys . ' FROM HeebaridataBundle:Country c INNER JOIN c.idPopulationParameter p'
                . ' WITH c.idCountry = :id ';
        $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
        $results = $queryb->getArrayResult();
        return $results;
    }

    public function getCollectivity($id, $fields = NULL, $debut = NULL, $fin = NULL) {
        $querys = 'SELECT c';
        $querys = $querys . ' FROM HeebaridataBundle:Collectivity c'
                . ' WHERE c.idCountry = :id';
        $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
        $results = $queryb->getArrayResult();
        return $results;
    }

    //TODO:rajouter fiel a la main
    public function getCurrency($id, $fields = NULL, $debut = NULL, $fin = NULL) {
        $querys = 'SELECT cu.idCurrency';
        $querys = $querys . ' FROM HeebaridataBundle:Country c INNER JOIN c.idCurrency cu'
                . ' WITH c.idCountry = :id';
        $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
        $results = $queryb->getArrayResult();
        return $results;
    }

    public function getNE($id, $fields = NULL, $debut = NULL, $fin = NULL) {
        $data = $this->getEconomicData($id, ["import", "export"], $debut, $fin);
        $NE = array();
        foreach ($data as  $value) {
            $NE[$value["dateOfInformation"]->format('Y')] = $value["export"] - $value["import"];
        }
        return $NE;
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
            if($fin != NULL){
              $querys = $querys.' and e.dateOfInformation > :debut';
              $querys = $querys.' and e.dateOfInformation < :fin';
            }if($debut!=NULL){
              $querys = $querys.' and e.dateOfInformation > :debut';
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

    public function getGDP($id, $fields = NULL, $debut = NULL, $fin = NULL) {
        $NE = $this->getNE($id, NULL, $debut, $fin);
        $GE = $this->getEconomicData($id, ["investment", "publicExpenses"], $debut, $fin);
        $cons = $this->getEconomicIndicator($id, ["nationalConsumptionRate"], $debut, $fin);
         isset($GE[0]) ? $GE = $GE[0]:$GE = [];
         isset($cons[0]) ? $cons = $cons[0]:$cons = [];
        $retour = [];
        foreach ($NE as $key => $value) {
           
           $retour[$key] = $value + $GE["investment"] + $GE["publicExpenses"] + $cons["nationalConsumptionRate"];
        }
        return $retour;
    }
    

}
