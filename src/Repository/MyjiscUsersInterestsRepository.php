<?php

namespace App\Repository;

use App\Entity\MyjiscUsersInterests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MyjiscUsersInterests|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyjiscUsersInterests|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyjiscUsersInterests[]    findAll()
 * @method MyjiscUsersInterests[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyjiscUsersInterestsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MyjiscUsersInterests::class);
    }

    // /**
    //  * @return MyjiscUsersInterests[] Returns an array of MyjiscUsersInterests objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MyjiscUsersInterests
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
