<?php

namespace App\Repository;

use App\Entity\AskForAdoption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AskForAdoption|null find($id, $lockMode = null, $lockVersion = null)
 * @method AskForAdoption|null findOneBy(array $criteria, array $orderBy = null)
 * @method AskForAdoption[]    findAll()
 * @method AskForAdoption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AskForAdoptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AskForAdoption::class);
    }

    // /**
    //  * @return AskForAdoption[] Returns an array of AskForAdoption objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AskForAdoption
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
