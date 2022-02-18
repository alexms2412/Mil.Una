<?php

namespace App\Controller;

use App\Entity\Empleo;
use App\Form\EmpleoType;
use App\Repository\EmpleoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/empleo")
 */
class EmpleoController extends AbstractController
{
    /**
     * @Route("/", name="empleo_index", methods={"GET"})
     */
    public function index(EmpleoRepository $empleoRepository): Response
    {
        return $this->render('empleo/index.html.twig', [
            'empleos' => $empleoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="empleo_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $empleo = new Empleo();
        $form = $this->createForm(EmpleoType::class, $empleo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($empleo);
            $entityManager->flush();

            return $this->redirectToRoute('empleo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empleo/new.html.twig', [
            'empleo' => $empleo,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idEmpleo}", name="empleo_show", methods={"GET"})
     */
    public function show(Empleo $empleo): Response
    {
        return $this->render('empleo/show.html.twig', [
            'empleo' => $empleo,
        ]);
    }

    /**
     * @Route("/{idEmpleo}/edit", name="empleo_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Empleo $empleo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmpleoType::class, $empleo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('empleo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empleo/edit.html.twig', [
            'empleo' => $empleo,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idEmpleo}", name="empleo_delete", methods={"POST"})
     */
    public function delete(Request $request, Empleo $empleo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empleo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($empleo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('empleo_index', [], Response::HTTP_SEE_OTHER);
    }
}
