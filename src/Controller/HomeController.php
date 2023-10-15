<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Entity\RechercheParTitre;
use App\Form\RechercheParTitreType;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     */
    public function home(Request $request, LivreRepository $livreRepository)
    {
        $propertySearch = new RechercheParTitre();
        $form = $this->createForm(RechercheParTitreType::class, $propertySearch);
        $form->handleRequest($request);
        //clique sur le bouton rechercher
        if ($form->isSubmitted() && $form->isValid()) {
            $title = $propertySearch->getTitle();
            if ($title != "") {
                $livre = $livreRepository->search($title);
            } else {
                $livre = $livreRepository->findAll();
            }
        } else {
            $livre = $livreRepository->findAll();
        }

        return $this->render('home/index.html.twig', ['form' => $form->createView(), 'livres' => $livre]);
    }
    
}
