<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route(path:"/service/{name}",name:"home")] 
    public function showService($name):Response{
        // return new Response(content: $name);
        return $this->render('service/showService.html.twig', [
            'name' => $name
        ]);
    }

    #[Route(path:"/go_index",name :"homeTonindex")]
    public function goToIndex(): Response
    {
        // Redirige vers la route de la page d'accueil (HomeController)
        return $this->redirectToRoute('app_home');
    }
}
