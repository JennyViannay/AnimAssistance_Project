<?php

namespace App\Controller;

use App\Entity\Rescue;
use App\Repository\RescueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous", name="about_us")
     */
    public function aboutUs(): Response
    {
        return $this->render('home/about.html.twig');
    }

    /**
     * @Route("/adoptés", name="adopted")
     */
    public function adopted(RescueRepository $rescueRepository): Response
    {
        //MOSAIC
        $rescues = $rescueRepository->findBy(['is_adopted' => 1]);
        return $this->render('home/adopted.html.twig',[
            'rescues' => $rescues
        ]);
    }

    /**
     * @Route("/demande-d-adoption", name="ask_for_adoption")
     */
    public function askForAdoption(): Response
    {
        return $this->render('home/ask_for_adoption.html.twig');
    }

    /**
     * @Route("/à-l-adoption", name="to_adopt")
     */
    public function toAdopt(RescueRepository $rescueRepository): Response
    {
        $rescues = $rescueRepository->findBy(['is_adopted' => 0]);
        return $this->render('home/to_adopt.html.twig',[
            'rescues' => $rescues
        ]);
    }

    /**
     * @Route("/voir-plus/{id}", name="show_one")
     */
    public function show(Rescue $rescue): Response
    {
        //SHOW ONE
        return $this->render('home/show.html.twig', [
            'rescue' => $rescue
        ]);
    }
}
