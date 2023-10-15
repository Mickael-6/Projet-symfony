<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SingleBookController extends AbstractController
{
    /**
     * @Route("/single/book", name="app_single_book")
     */
    public function index(): Response
    {
        return $this->render('single_book/index.html.twig', [
            'controller_name' => 'SingleBookController',
        ]);
    }
}
