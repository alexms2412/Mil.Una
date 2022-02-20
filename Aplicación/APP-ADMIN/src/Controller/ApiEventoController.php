<?php

namespace App\Controller;

use App\Entity\Evento;
use App\Form\EventoType;
use App\Repository\EventoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiEventoController
 * @Route("/api/evento")
 */
class ApiEventoController extends AbstractController
{
    private $EventoRepository;

    public function __construct(EventoRepository $EventoRepository)
    {
        $this->EventoRepository = $EventoRepository;
    }

    /**
     * @Route("/obtenerTodos", name="get_all_eventos", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $eventos = $this->EventoRepository->findAll();
        $data = [];

        foreach ($eventos as $evento) {
            $data[] = [
                'idEvento' => $evento->getId(),
                'nombre' => $evento->getNombreEvento(),
                'DescripcionEvento' => $evento->getDescripcionEvento(),
                'FechaEvento' => $evento->getFechaEvento()->format('d-m-y'),
                'TipoEvento' => $evento->getTipoEvento()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
        
    }

    /**
     * @Route("/obtener/{idEvento}", name="get_one_evento", methods={"GET"})
     */
    public function obtenerUno($idEvento): JsonResponse
    {
        $evento = $this->EventoRepository->findOneBy(['idEvento' => $idEvento]);
            $data = [
                'idEvento' => $evento->getId(),
                'nombre' => $evento->getNombreEvento(),
                'DescripcionEvento' => $evento->getDescripcionEvento(),
                'FechaEvento' => $evento->getFechaEvento(),
                'TipoEvento' => $evento->getTipoEvento()
            ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/delete/{idEvento}", name="delete_evento", methods={"DELETE"})
     */
    public function borrar($idEvento): JsonResponse
    {
        $evento = $this->EventoRepository->findOneBy(['idEvento' => $idEvento]);
        $this->EventoRepository->removeEvento($evento);
        return new JsonResponse(['message' => 'Evento deleted'], Response::HTTP_OK);
    }

    /**
     * @Route("/update/{idEvento}", name="update_evento", methods={"PUT"})
     */
    public function actualizar($idEvento, Request $request): JsonResponse
    {
        $evento = $this->EventoRepository->findOneBy(['idEvento' => $idEvento]);
        $datos = json_decode($request->getContent(), true);
        empty($datos['nombreEvento']) ? true : $evento->setNombreEvento($datos['nombreEvento']);
        empty($datos['descripcion']) ? true : $evento->setDescripcionEvento($datos['descripcion']);
        empty($datos['tipoEvento']) ? true : $evento->setTipoEvento($datos['tipoEvento']);
        empty($datos['fechaEvento']) ? true : $evento->setFechaEvento(new \DateTime($datos['fechaEvento']));
        $EventoRepository = $this->EventoRepository->UpdateEvento($evento);
        return new JsonResponse(['status' => 'Evento updated!'], Response::HTTP_OK);
    }
    /**
     * @Route("/new", name="add_evento", methods={"POST"})
     */
    public function newRegion(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $nombreEvento = $data['nombreEvento'];
        $descripcion = $data['descripcion'];
        $tipoEvento = $data['tipoEvento'];
        $fechaEvento = $data['fechaEvento'];
        $this->EventoRepository->saveEvento($nombreEvento, $descripcion, $tipoEvento, $fechaEvento);
        return new JsonResponse(['message' => 'New Evento Created'], Response::HTTP_CREATED);
    }
    
}
