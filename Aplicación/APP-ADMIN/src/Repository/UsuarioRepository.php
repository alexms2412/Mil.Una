<?php

namespace App\Repository;

use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Usuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuario[]    findAll()
 * @method Usuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Usuario::class);
        $this->manager = $manager;
    }

    public function removeUsuario(Usuario $usuario)
    {
        $this->manager->remove($usuario);
        $this->manager->flush();
    }

    public function UpdateUsuario(Usuario $usuario)
    {
        $this->manager->persist($usuario);
        $this->manager->flush();
        return $usuario;
    }

    public function saveUsuario( $nombreUsuario, $correoUsuario, $username, $password, $apellidos, $CvUsuario )
    {
        $newUsuario = new Usuario();
        $newUsuario
        ->setNombreUsuario($nombreUsuario)
        ->setCorreoUsuario($correoUsuario)
        ->setUsername($username)
        ->setPassword($password)
        ->setApellidos($apellidos)
        ->setCvUsuario($CvUsuario);

        $this->manager->persist($newUsuario);
        $this->manager->flush();
    }

    // /**
    //  * @return Usuario[] Returns an array of Usuario objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usuario
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
