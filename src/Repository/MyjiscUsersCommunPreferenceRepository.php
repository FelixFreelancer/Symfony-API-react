<?php

namespace App\Repository;

use App\Entity\MyjiscUsersCommunicationPreference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MyjiscUsersCommunicationPreference|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyjiscUsersCommunicationPreference|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyjiscUsersCommunicationPreference[]    findAll()
 * @method MyjiscUsersCommunicationPreference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyjiscUsersCommunPreferenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MyjiscUsersCommunicationPreference::class);
    }

    // /**
    //  * @return MyjiscUsersCommunicationPreference[] Returns an array of MyjiscUsersCommunicationPreference objects
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
    public function findOneBySomeField($value): ?MyjiscUsersCommunicationPreference
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
