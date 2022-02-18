<?php

namespace App\Repository;

use App\Entity\Contenido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Contenido|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contenido|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contenido[]    findAll()
 * @method Contenido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContenidoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Contenido::class);
        $this->manager = $manager;
    }

    public function removeContenido(Contenido $contenido)
    {
        $this->manager->remove($contenido);
        $this->manager->flush();
    }

    public function UpdateContenido(Contenido $contenido)
    {
        $this->manager->persist($contenido);
        $this->manager->flush();
        return $contenido;
    }

    public function saveContenido( $TipoContenido, $descripcion, $enlaceContenido )
    {
        $newContenido = new Contenido();
        $newContenido
        ->setTipoContenido($TipoContenido)
        ->setDescripcionContenido($descripcion)
        ->setEnlaceContenido($enlaceContenido);

        $this->manager->persist($newContenido);
        $this->manager->flush();
    }

    // /**
    //  * @return Contenido[] Returns an array of Contenido objects
    //  */
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
    public function findOneBySomeField($value): ?Contenido
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
