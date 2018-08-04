<?php

namespace App\Repository;

use App\Entity\Contactos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contactos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contactos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contactos[]    findAll()
 * @method Contactos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contactos::class);
    }

//    /**
//     * @return Contactos[] Returns an array of Contactos objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contactos
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
