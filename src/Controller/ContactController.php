<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $message = new Contact();
        $form = $this->createForm(ContactType::class,$message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($message);
            $entityManager->flush();
            // dump($message);die;
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form'=> $form->createView()
        ]);
    }
}
