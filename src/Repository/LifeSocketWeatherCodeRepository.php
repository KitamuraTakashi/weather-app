<?php

namespace App\Repository;

use App\Entity\LifeSocketWeatherCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LifeSocketWeatherCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method LifeSocketWeatherCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method LifeSocketWeatherCode[]    findAll()
 * @method LifeSocketWeatherCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LifeSocketWeatherCodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LifeSocketWeatherCode::class);
    }

    // /**
    //  * @return LifeSocketWeatherCode[] Returns an array of LifeSocketWeatherCode objects
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
    public function findOneBySomeField($value): ?LifeSocketWeatherCode
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
