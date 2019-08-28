<?php

namespace App\Repository;

use App\Entity\MyjiscUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MyjiscUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyjiscUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyjiscUsers[]    findAll()
 * @method MyjiscUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyjiscUsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MyjiscUsers::class);
    }

    // /**
    //  * @return MyjiscUsers[] Returns an array of MyjiscUsers objects
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
    public function findOneBySomeField($value): ?MyjiscUsers
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
