<?php

namespace App\Controller;

use App\Entity\Formule;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\Persistence\ManagerRegistry;

class HomeController extends AbstractController
{
    /** 
     * @Route("/", name="accueil") 
     */ 
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /** 
     * @Route("/reservation", name="reservation") 
     */ 
    public function reservation(): Response
    {
        return $this->render('home/reservation.html.twig');
    }

    /** 
     * @Route("/reservation/{id}", name="formuleReservation") 
     */ 
    public function formuleReservation($idFormule): Response
    {
        $repository = $this->getDoctrine()->getRepository(Formule::class);
        $repo = $this->getDoctrine()->getRepository(Inscriptionhackathon::class);
        $uneFormule = $repository->find($idFormule);
        $lesFormules = $repo->findBy(['idFormule' => $idFormule]);
        return $this->render('home/formule.html.twig', [
            'uneFormule' => $uneFormule
        ]);


        return $this->render('home/reservation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
