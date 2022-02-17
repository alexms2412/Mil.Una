<?php

namespace App\Controller;

use App\Entity\Contenido;
use App\Form\ContenidoType;
use App\Repository\ContenidoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiContenidoController
 * @Route("/api/contenido")
 */
class ApiContenidoController extends AbstractController
{
    private $ContenidoRepository;

    public function __construct(ContenidoRepository $ContenidoRepository)
    {
        $this->ContenidoRepository = $ContenidoRepository;
    }

    /**
     * @Route("/obtenerTodos", name="get_all_contenidos", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $contenidos = $this->ContenidoRepository->findAll();
        $data = [];

        foreach ($contenidos as $contenido) {
            $data[] = [
                'idContenido' => $contenido->getId(),
                'TipoContenido' => $contenido->getTipoContenido(),
                'DescripcionContenido' => $contenido->getDescripcionContenido(),
                'EnlaceContenido' => $contenido->getEnlaceContenido()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
        
    }

    /**
     * @Route("/obtener/{idContenido}", name="get_one_contenido", methods={"GET"})
     */
    public function obtenerUno($idContenido): JsonResponse
    {
        $contenido = $this->ContenidoRepository->findOneBy(['idContenido' => $idContenido]);
            $data = [
                'idContenido' => $contenido->getId(),
                'TipoContenido' => $contenido->getTipoContenido(),
                'DescripcionContenido' => $contenido->getDescripcionContenido(),
                'EnlaceContenido' => $contenido->getEnlaceContenido()
            ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/delete/{idContenido}", name="delete_contenido", methods={"DELETE"})
     */
    public function borrar($idContenido): JsonResponse
    {
        $contenido = $this->ContenidoRepository->findOneBy(['idContenido' => $idContenido]);
        $this->ContenidoRepository->removeContenido($contenido);
        return new JsonResponse(['message' => 'Contenido deleted'], Response::HTTP_OK);
    }

    /**
     * @Route("/update/{idContenido}", name="update_contenido", methods={"PUT"})
     */
    public function actualizar($idContenido, Request $request): JsonResponse
    {
        $contenido = $this->ContenidoRepository->findOneBy(['idContenido' => $idContenido]);
        $datos = json_decode($request->getContent(), true);
        empty($datos['TipoContenido']) ? true : $contenido->setTipoContenido($datos['TipoContenido']);
        empty($datos['descripcion']) ? true : $contenido->setDescripcionContenido($datos['descripcion']);
        empty($datos['enlaceContenido']) ? true : $contenido->setEnlaceContenido($datos['enlaceContenido']);
        $ContenidoRepository = $this->ContenidoRepository->UpdateContenido($contenido);
        return new JsonResponse(['status' => 'Contenido updated!'], Response::HTTP_OK);
    }
    /**
     * @Route("/new", name="add_contenido", methods={"POST"})
     */
    public function newContenido(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $categoriaContenido = $data['tipoContenido'];
        $descripcion = $data['descripcion'];
        $enlaceContenido = $data['enlaceContenido'];
        $this->ContenidoRepository->saveContenido($categoriaContenido, $descripcion, $enlaceContenido);
        return new JsonResponse(['message' => 'New Contenido Created'], Response::HTTP_CREATED);
    }
    
}