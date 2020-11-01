<?php

namespace App\Repository;

use App\Entity\PoemCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PoemCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method PoemCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method PoemCategory[]    findAll()
 * @method PoemCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoemCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PoemCategory::class);
    }

    // /**
    //  * @return PoemCategory[] Returns an array of PoemCategory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PoemCategory
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
