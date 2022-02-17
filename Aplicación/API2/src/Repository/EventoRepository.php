<?php

namespace App\Repository;

use App\Entity\Evento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Evento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evento[]    findAll()
 * @method Evento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Evento::class);
        $this->manager = $manager;
    }

    public function removeEvento(Evento $evento)
    {
        $this->manager->remove($evento);
        $this->manager->flush();
    }

    public function UpdateEvento(Evento $evento)
    {
        $this->manager->persist($evento);
        $this->manager->flush();
        return $evento;
    }

    public function saveEvento( $nombreEvento, $descripcion, $tipoEvento, $fechaEvento )
    {
        $newEvento = new Evento();
        $newEvento
        ->setNombreEvento($nombreEvento)
        ->setDescripcionEvento($descripcion)
        ->setTipoEvento($tipoEvento)
        ->setFechaEvento(new \DateTime($fechaEvento));

        $this->manager->persist($newEvento);
        $this->manager->flush();
    }
    
    // /**
    //  * @return Evento[] Returns an array of Evento objects
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
    public function findOneBySomeField($value): ?Evento
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
