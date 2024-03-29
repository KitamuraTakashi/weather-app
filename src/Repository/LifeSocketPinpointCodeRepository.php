<?php

namespace App\Repository;

use App\Entity\LifeSocketPinpointCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LifeSocketPinpointCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method LifeSocketPinpointCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method LifeSocketPinpointCode[]    findAll()
 * @method LifeSocketPinpointCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LifeSocketPinpointCodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LifeSocketPinpointCode::class);
    }

    // /**
    //  * @return LifeSocketPinpointCode[] Returns an array of LifeSocketPinpointCode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LifeSocketPinpointCode
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
