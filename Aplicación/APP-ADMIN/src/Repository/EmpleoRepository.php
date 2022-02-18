<?php

namespace App\Repository;

use App\Entity\Empleo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Empleo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Empleo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Empleo[]    findAll()
 * @method Empleo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpleoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Empleo::class);
        $this->manager = $manager;
    }

    public function removeEmpleo(Empleo $empleo)
    {
        $this->manager->remove($empleo);
        $this->manager->flush();
    }

    public function UpdateEmpleo(Empleo $empleo)
    {
        $this->manager->persist($empleo);
        $this->manager->flush();
        return $empleo;
    }

    public function saveEmpleo( $nombreEmpleo, $empresa, $enlace )
    {
        $newEmpleo = new Empleo();
        $newEmpleo
        ->setNombreEmpleo($nombreEmpleo)
        ->setEmpresaEmpleo($empresa)
        ->setEnlaceEmpleo($enlace);

        $this->manager->persist($newEmpleo);
        $this->manager->flush();
    }

    // /**
    //  * @return Empleo[] Returns an array of Empleo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Empleo
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
