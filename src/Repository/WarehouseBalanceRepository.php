<?php

namespace App\Repository\SourceData;

use App\Entity\WarehouseBalance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WarehouseBalance>
 *
 * @method WarehouseBalance|null find($id, $lockMode = null, $lockVersion = null)
 * @method WarehouseBalance|null findOneBy(array $criteria, array $orderBy = null)
 * @method WarehouseBalance[]    findAll()
 * @method WarehouseBalance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarehouseBalanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WarehouseBalance::class);
    }

//    /**
//     * @return WarehouseBalance[] Returns an array of WarehouseBalance objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WarehouseBalance
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
