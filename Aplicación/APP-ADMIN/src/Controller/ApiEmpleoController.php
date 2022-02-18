<?php

namespace App\Controller;

use App\Entity\Empleo;
use App\Form\EmpleoType;
use App\Repository\EmpleoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiEmpleoController
 * @Route("/api/empleo")
 */
class ApiEmpleoController extends AbstractController
{
    private $EmpleoRepository;

    public function __construct(EmpleoRepository $EmpleoRepository)
    {
        $this->EmpleoRepository = $EmpleoRepository;
    }

    /**
     * @Route("/obtenerTodos", name="get_all_empleos", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $empleos = $this->EmpleoRepository->findAll();
        $data = [];

        foreach ($empleos as $empleo) {
            $data[] = [
                'idEmpleo' => $empleo->getId(),
                'nombre' => $empleo->getNombreEmpleo(),
                'empresaEmpleo' => $empleo->getEmpresaEmpleo(),
                'enlaceEmpleo' => $empleo->getEnlaceEmpleo()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
        
    }

    /**
     * @Route("/obtener/{idEmpleo}", name="get_one_empleo", methods={"GET"})
     */
    public function obtenerUno($idEmpleo): JsonResponse
    {
        $empleo = $this->EmpleoRepository->findOneBy(['idEmpleo' => $idEmpleo]);
            $data = [
                'idEmpleo' => $empleo->getId(),
                'nombre' => $empleo->getNombreEmpleo(),
                'empresaEmpleo' => $empleo->getEmpresaEmpleo(),
                'enlaceEmpleo' => $empleo->getEnlaceEmpleo()
            ];
        return new JsonResponse($data, Response::HTTP_OK);
    }

    /**
     * @Route("/delete/{idEmpleo}", name="delete_empleo", methods={"DELETE"})
     */
    public function borrar($idEmpleo): JsonResponse
    {
        $empleo = $this->EmpleoRepository->findOneBy(['idEmpleo' => $idEmpleo]);
        $this->EmpleoRepository->removeEmpleo($empleo);
        return new JsonResponse(['message' => 'Empleo deleted'], Response::HTTP_OK);
    }

    /**
     * @Route("/update/{idEmpleo}", name="update_empleo", methods={"PUT"})
     */
    public function actualizar($idEmpleo, Request $request): JsonResponse
    {
        $empleo = $this->EmpleoRepository->findOneBy(['idEmpleo' => $idEmpleo]);
        $datos = json_decode($request->getContent(), true);
        empty($datos['nombreEmpleo']) ? true : $empleo->setNombreEmpleo($datos['nombreEmpleo']);
        empty($datos['empresa']) ? true : $empleo->setEmpresaEmpleo($datos['empresa']);
        empty($datos['enlace']) ? true : $empleo->setEnlaceEmpleo($datos['enlace']);
        $EmpleoRepository = $this->EmpleoRepository->UpdateEmpleo($empleo);
        return new JsonResponse(['status' => 'Empleo updated!'], Response::HTTP_OK);
    }
    /**
     * @Route("/new", name="add_empleo", methods={"POST"})
     */
    public function newEmpleo(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $nombreEmpleo = $data['nombreEmpleo'];
        $empresa = $data['empresa'];
        $enlace = $data['enlace'];
        $this->EmpleoRepository->saveEmpleo($nombreEmpleo, $empresa, $enlace);
        return new JsonResponse(['message' => 'New Empleo Created'], Response::HTTP_CREATED);
    }
    
}

