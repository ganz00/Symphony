<?php

/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CompanyRepository extends EntityRepository {
    
    public function getBusinessField($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT c.idCompany,b.businessFieldName';
        $querys = $querys.' FROM HeebaridataBundle:Company c INNER JOIN c.idBusinessField b'
                  .' WITH c.idCountry = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         $results = $queryb->getArrayResult();
         return $results;
    }
    public function getCompanyIndustry($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT c.idCompany,b.industryName';
        $querys = $querys.' FROM HeebaridataBundle:Company c INNER JOIN c.idCompanyIndustry b'
                  .' WITH c.idCountry = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         $results = $queryb->getArrayResult();
         return $results;
    }
    public function getCompanySector($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT c.idCompany,b.sectorName';
        $querys = $querys.' FROM HeebaridataBundle:Company c INNER JOIN c.idCompanySector b'
                  .' WITH c.idCountry = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         $results = $queryb->getArrayResult();
         return $results;
    }
    public function PerformanceAndCredit($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT (p.idPerformanceCredit),p.dateOfInformation';
          foreach ($fields as  $field) {
              $querys = $querys.', p.'.$field;
          }
          $querys = $querys.' FROM HeebaridataBundle:PerformanceAndCredit p Where p.idCompany = :id';
          if($debut != NULL){
              $querys = $querys.' and p.dateOfInformation > :debut';
          }if($fin!=NULL){
              $querys = $querys.' and p.dateOfInformation < :fin';
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
    //
    public function getBalanceSheet($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT B';
        $querys = $querys.' FROM HeebaridataBundle:BalanceSheet B INNER JOIN B.idElement E'
                  .' WITH B.idCompany = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         $results = $queryb->getArrayResult();
         return $results;
    }
    public function getCompanyKeyPeople($id,$fields=NULL, $debut=NULL, $fin=NULL) {
        $querys = 'SELECT K.lastname,K.firstname,K.mail,K.phone,P.position';
        $querys = $querys.' FROM HeebaridataBundle:CompanyKeyPeople K INNER JOIN K.idPosition P'
                  .' WITH K.idCompany = :id';
         $queryb = $this->_em->createQuery($querys)->setParameter('id', $id);
         $results = $queryb->getArrayResult();
         return $results;
    }
    
    
}
