<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(RegisterType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            // Set their role
            $utilisateur->setRole('ROLE_USER');

            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_UserPage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('registration/index.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }
}
