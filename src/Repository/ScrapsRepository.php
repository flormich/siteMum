<?php

namespace App\Repository;

use App\Entity\Scraps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scraps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scraps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scraps[]    findAll()
 * @method Scraps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScrapsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scraps::class);
    }

    // /**
    //  * @return Scraps[] Returns an array of Scraps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Scraps
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
