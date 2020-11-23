<?php

namespace App\Controller;

use App\Entity\AskForAdoption;
use App\Entity\Rescue;
use App\Form\AskForAdoptionType;
use App\Repository\RescueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous", name="about_us")
     */
    public function aboutUs(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    /**
     * @Route("/liste/adoptés", name="adopted")
     */
    public function adopted(RescueRepository $rescueRepository): Response
    {
        //MOSAIC
        $rescues = $rescueRepository->findBy(['is_adopted' => 1]);
        return $this->render('pages/adopted.html.twig',[
            'rescues' => $rescues
        ]);
    }

    /**
     * @Route("/demande/adoption", name="ask_for_adoption")
     */
    public function pageAdoption(): Response
    {
        return $this->render('pages/adoption.html.twig');
    }

    /**
     * @Route("/liste/a-adopter", name="to_adopt")
     */
    public function toAdopt(RescueRepository $rescueRepository): Response
    {
        $rescues = $rescueRepository->findBy(['is_adopted' => 0]);
        return $this->render('pages/to_adopt.html.twig',[
            'rescues' => $rescues
        ]);
    }

    /**
     * @Route("/voir-plus/{id}", name="show_one")
     */
    public function show(Rescue $rescue): Response
    {
        //SHOW ONE
        return $this->render('pages/show.html.twig', [
            'rescue' => $rescue
        ]);
    }

    /**
     * @Route("/demande/adoption/formulaire", name="ask_for_adoption_form", methods={"GET","POST"})
     */
    public function askForAdoption(Request $request): Response
    {
        $askForAdoption = new AskForAdoption();
        $form = $this->createForm(AskForAdoptionType::class, $askForAdoption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($askForAdoption);
            $entityManager->flush();

            return $this->redirectToRoute('ask_for_adoption_success');
        }

        return $this->render('ask_for_adoption/new.html.twig', [
            'ask_for_adoption' => $askForAdoption,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/demande/adoption/succès", name="ask_for_adoption_success", methods={"GET"})
     */
    public function successAskAdoption()
    {
        return $this->render('ask_for_adoption/success.html.twig');
    }
}
