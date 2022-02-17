<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Form\UsuarioType;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiUsuarioController
 * @Route("/api/usuario")
 */
class ApiUsuarioController extends AbstractController
{
    private $UsuarioRepository;

    public function __construct(UsuarioRepository $UsuarioRepository)
    {
        $this->UsuarioRepository = $UsuarioRepository;
    }

    /**
     * @Route("/obtenerTodos", name="get_all_usuarios", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $usuarios = $this->UsuarioRepository->findAll();
        $data = [];

        foreach ($usuarios as $usuario) {
            $data[] = [
                'idUsuario' => $usuario->getId(),
                'nombre' => $usuario->getNombreUsuario()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
        
    }

    /**
     * @Route("/obtener/{idUsuario}", name="get_one_usuario", methods={"GET"})
     */
    public function obtenerUno($idUsuario): JsonResponse
    {
        $usuario = $this->UsuarioRepository->findOneBy(['idUsuario' => $idUsuario]);
            $data = [
                'id' => $usuario->getId(),
                'nombre' => $usuario->getNombreUsuario()
            ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/delete/{idUsuario}", name="delete_usuario", methods={"DELETE"})
     */
    public function borrar($idUsuario): JsonResponse
    {
        $usuario = $this->UsuarioRepository->findOneBy(['idUsuario' => $idUsuario]);
        $this->UsuarioRepository->removeUsuario($usuario);
        return new JsonResponse(['message' => 'Usuario deleted'], Response::HTTP_OK);
    }

    /**
     * @Route("/update/{idUsuario}", name="update_usuario", methods={"PUT"})
     */
    public function actualizar($idUsuario, Request $request): JsonResponse
    {
        $usuario = $this->UsuarioRepository->findOneBy(['idUsuario' => $idUsuario]);
        $datos = json_decode($request->getContent(), true);
        empty($datos['nombreUsuario']) ? true : $usuario->setNombreUsuario($datos['nombreUsuario']);
        empty($datos['correoUsuario']) ? true : $usuario->setCorreoUsuario($datos['correoUsuario']);
        empty($datos['username']) ? true : $usuario->setUsername($datos['username']);
        empty($datos['password']) ? true : $usuario->setPassword($datos['password']);
        empty($datos['apellidos']) ? true : $usuario->setApellidos($datos['apellidos']);
        empty($datos['CvUsuario']) ? true : $usuario->setCvUsuario($datos['CvUsuario']);
        $UsuarioRepository = $this->UsuarioRepository->UpdateUsuario($usuario);
        return new JsonResponse(['status' => 'Usuario updated!'], Response::HTTP_OK);
    }
    /**
     * @Route("/new", name="add_usuario", methods={"POST"})
     */
    public function newUsuario(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $nombreUsuario = $data['nombreUsuario'];
        $correoUsuario = $data['correoUsuario'];
        $username = $data['username'];
        $password = $data['password'];
        $apellidos = $data['apellidos'];
        $CvUsuario = $data['CvUsuario'];
        $this->UsuarioRepository->saveUsuario($nombreUsuario, $correoUsuario, $username, $password, $apellidos, $CvUsuario);
        return new JsonResponse(['message' => 'New Usuario Created'], Response::HTTP_CREATED);
    }
    
}
