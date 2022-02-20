<?php

namespace App\Controller;

use App\Entity\Contenido;
use App\Form\ContenidoType;
use App\Repository\ContenidoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/contenido")
 */
class ContenidoController extends AbstractController
{
    /**
     * @Route("/", name="contenido_index", methods={"GET"})
     */
    public function index(ContenidoRepository $contenidoRepository): Response
    {
        return $this->render('contenido/index.html.twig', [
            'contenidos' => $contenidoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="contenido_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $contenido = new Contenido();
        $form = $this->createForm(ContenidoType::class, $contenido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $EnlaceContenido = $form->get('EnlaceContenido')->getData();

            if ($EnlaceContenido) {
                $originalFilename = pathinfo($EnlaceContenido->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$EnlaceContenido->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $EnlaceContenido->move(
                        $this->getParameter('contenido_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $contenido->setEnlaceContenido($newFilename);
            }
            $entityManager->persist($contenido);
            $entityManager->flush();

            return $this->redirectToRoute('evento_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contenido/new.html.twig', [
            'contenido' => $contenido,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idContenido}", name="contenido_show", methods={"GET"})
     */
    public function show(Contenido $contenido): Response
    {
        return $this->render('contenido/show.html.twig', [
            'contenido' => $contenido,
        ]);
    }

    /**
     * @Route("/{idContenido}/edit", name="contenido_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Contenido $contenido, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ContenidoType::class, $contenido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $EnlaceContenido = $form->get('EnlaceContenido')->getData();

            if ($EnlaceContenido) {
                $originalFilename = pathinfo($EnlaceContenido->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$EnlaceContenido->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $EnlaceContenido->move(
                        $this->getParameter('contenido_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $contenido->setEnlaceContenido($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('evento_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contenido/edit.html.twig', [
            'contenido' => $contenido,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{idContenido}", name="contenido_delete", methods={"POST"})
     */
    public function delete(Request $request, Contenido $contenido, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contenido->getId(), $request->request->get('_token'))) {
            $entityManager->remove($contenido);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evento_index', [], Response::HTTP_SEE_OTHER);
    }
}
