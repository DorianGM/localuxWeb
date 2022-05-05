<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Formule;
use App\Entity\Location;
use App\Entity\Locationsanschauffeur;
use App\Entity\Formulesanschauffeur;
use App\Entity\Modele;
use App\Entity\Tarification;
use App\Entity\Vehicule;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

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
    public function reservation( ManagerRegistry $doctrine): Response
    {
        $repository=$doctrine->getRepository(Formulesanschauffeur::class);
        $lesFormules = $repository->findAll();
        dump($lesFormules);
        return $this->render('home/reservation.html.twig', [
            'lesFormules'=> $lesFormules,
        ]);
    }

    /** 
     * @Route("/reservation/{idFormule}", name="reservationSelect") 
     */ 
    public function reservationSelect(ManagerRegistry $doctrine, Formule $idFormule): Response
    {
        $repository=$doctrine->getRepository(Formule::class);
        $repo = $doctrine->getRepository(Modele::class);
        $laFormule = $repository->find($idFormule);
        $lesModeles = $repo->findAll();
        dump($laFormule);
        
        return $this->render('home/formule.html.twig', [
            'lesModeles' => $lesModeles,
            'laFormule'=> $laFormule,
        ]);
    }

    /** 
     * @Route("/add/reservation", name="addReservation", methods="POST")
     */ 
    public function reserver(ManagerRegistry $doctrine, Request $request): Response
    {
        $leModele = $_POST['modele'];
        $dateD = $_POST['dateDepart'];
        $dateR = $_POST['dateRetour'];
        $idFormule = $request->request->get('idFormule');
        $idClient = $request->request->get('idClient');

        $repos = $doctrine->getRepository(Vehicule::class);
        $repo = $doctrine->getRepository(Modele::class);
        $modele = $repo->findOneBy(['id' => $leModele]);
        $vehicule = $repos->findOneBy(['idmodele' => $modele->getId()]);
        

        $location = new Locationsanschauffeur();

        $date = date('Y-m-d');
        $laDate = new DateTime($date);
        
        $location->setDatelocation($laDate);

        $location->setDatehredepartprevu(new DateTime($dateD));
        $location->setDatehreretourprevu(new DateTime($dateR));
        $location->setImmatriculation($vehicule);
        $location->setId($this->getUser());

        $entityManager = $doctrine->getManager();
        $entityManager->persist($location);
        $entityManager->flush();

        return $this->redirectToRoute('paiement');
        return $this->render('home/paiement.html.twig', [
        ]);

    }

    /** 
     * @Route("/paiement", name="paiement") 
     */ 
    public function paiement(): Response
    {
        return $this->render('home/paiement.html.twig', [
        ]);
    }



    /** 
     * @Route("/reservation/{idFormule}/paiement", name="choixModele") 
     */ 
    public function choixModele(ManagerRegistry $doctrine, Formule $idFormule): Response
    {
        $repository=$doctrine->getRepository(Formule::class);
        $repo = $doctrine->getRepository(Modele::class);
        $laFormule = $repository->find($idFormule);
        $lesModeles = $repo->findAll();
        dump($laFormule);
        return $this->render('home/paiement.html.twig', [
            'lesModeles' => $lesModeles,
            'laFormule'=> $laFormule,
        ]);
    }
}
