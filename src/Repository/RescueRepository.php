<?php

namespace App\Repository;

use App\Entity\Rescue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rescue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rescue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rescue[]    findAll()
 * @method Rescue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RescueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rescue::class);
    }

    // /**
    //  * @return Rescue[] Returns an array of Rescue objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rescue
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
