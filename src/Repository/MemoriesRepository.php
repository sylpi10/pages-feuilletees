<?php

namespace App\Repository;

use App\Entity\Memories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Memories|null find($id, $lockMode = null, $lockVersion = null)
 * @method Memories|null findOneBy(array $criteria, array $orderBy = null)
 * @method Memories[]    findAll()
 * @method Memories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Memories::class);
    }

    // /**
    //  * @@return Memories[]
    //  */
    // public function findAll()
    // {
    //     return $this->findby(array(), array('chapter'), 'ASC');
    // }

    //  /**
    //   * @return Memories[] Returns an array of Memories objects
    //   */

    // public function findByExampleField($value)
    // {
    //     return $this->createQueryBuilder('m')
    //         ->andWhere('m.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->orderBy('m.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }
    

    /*
    public function findOneBySomeField($value): ?Memories
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
