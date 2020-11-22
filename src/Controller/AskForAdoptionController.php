<?php

namespace App\Controller;

use App\Entity\AskForAdoption;
use App\Form\AskForAdoptionType;
use App\Repository\AskForAdoptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ask/for/adoption")
 */
class AskForAdoptionController extends AbstractController
{
    /**
     * @Route("/", name="ask_for_adoption_index", methods={"GET"})
     */
    public function index(AskForAdoptionRepository $askForAdoptionRepository): Response
    {
        return $this->render('ask_for_adoption/index.html.twig', [
            'ask_for_adoptions' => $askForAdoptionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ask_for_adoption_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $askForAdoption = new AskForAdoption();
        $form = $this->createForm(AskForAdoptionType::class, $askForAdoption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($askForAdoption);
            $entityManager->flush();

            return $this->redirectToRoute('ask_for_adoption_index');
        }

        return $this->render('ask_for_adoption/new.html.twig', [
            'ask_for_adoption' => $askForAdoption,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ask_for_adoption_show", methods={"GET"})
     */
    public function show(AskForAdoption $askForAdoption): Response
    {
        return $this->render('ask_for_adoption/show.html.twig', [
            'ask_for_adoption' => $askForAdoption,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ask_for_adoption_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AskForAdoption $askForAdoption): Response
    {
        $form = $this->createForm(AskForAdoptionType::class, $askForAdoption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ask_for_adoption_index');
        }

        return $this->render('ask_for_adoption/edit.html.twig', [
            'ask_for_adoption' => $askForAdoption,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ask_for_adoption_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AskForAdoption $askForAdoption): Response
    {
        if ($this->isCsrfTokenValid('delete'.$askForAdoption->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($askForAdoption);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ask_for_adoption_index');
    }
}
