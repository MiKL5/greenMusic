<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavController extends AbstractController
{
    #[Route('/nav', name: 'app_nav')]
    public function index(): Response
    {
        return $this->render('_header.html.twig', [
            'categories' => $repo->findAll(),
            'panier' => $session->get("cart", [])
        ]);
    }
}
