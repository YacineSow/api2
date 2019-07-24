<?php

namespace App\Repository;

use App\Entity\Adminwari;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Adminwari|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adminwari|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adminwari[]    findAll()
 * @method Adminwari[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminwariRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Adminwari::class);
    }

    // /**
    //  * @return Adminwari[] Returns an array of Adminwari objects
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
    public function findOneBySomeField($value): ?Adminwari
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
