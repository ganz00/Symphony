<?php

// src/Heebari/dataBundle/Entity/EconomicDataRepository.php

namespace Heebari\dataBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class EconomicDataRepository extends EntityRepository {

    public function findMany($country,$debut,$fin) {
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

        return $results;
    }

    public function myFindOne($id) {
        $qb = $this->createQueryBuilder('a');

        $qb
                ->where('a.id = :id')
                ->setParameter('id', $id)
        ;

        return $qb
                        ->getQuery()
                        ->getResult()
        ;
    }

    public function findByAuthorAndDate($author, $year) {
        $qb = $this->createQueryBuilder('a');

        $qb->where('a.author = :author')
                ->setParameter('author', $author)
                ->andWhere('a.date < :year')
                ->setParameter('year', $year)
                ->orderBy('a.date', 'DESC')
        ;

        $listAdverts = $qb->getQuery()->getArrayResult();

        foreach ($listAdverts as $advert) {
            // $advert est un tableau
            // Faire $advert->getContent() est impossible. Vous devez faire :
            $advert['content'];
        }
    }
      public function getAdverts()
  {
    $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      // Jointure sur l'attribut categories
      ->leftJoin('a.categories', 'c')
      ->addSelect('c')
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;

    return $query->getResult();
  }


}
