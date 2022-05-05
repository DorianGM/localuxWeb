<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use App\Form\InscriptionFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="security_login")
     */
    public function login(AuthenticationUtils $authenticationUtils) {
        $lastUsername=$authenticationUtils->getLastUsername(); 
        $errors=$authenticationUtils->getLastAuthenticationError(); 
        
        return $this->render('security/login.html.twig', [
            'lastUsername'=>$lastUsername, 'errors'=> $errors
        ]);
        }

    /** 
     * @Route("/logout", name="security_logout") 
     */ 
    public function logout() 
    { 
        return $this->render('security/login.html.twig');
    } 

    /** 
     * @Route("/inscription", name="security_inscription") 
     */ 
    public function inscription(Request $request, ManagerRegistry $doctrine): Response
    { 
        $entityManager = $doctrine->getManager();
        $client = new Client();

        $form =$this->createForm(InscriptionFormType::class, $client);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){

            $client->setPassword( 
                password_hash($client->getPassword(),PASSWORD_BCRYPT)
            );

            
            
        $entityManager->persist($client);
        $entityManager->flush();

        return $this->redirectToRoute('accueil');
        }
        return $this->render('security/inscription.html.twig', [
            'form' => $form->createView(),
        ]);
        
    } 
}
