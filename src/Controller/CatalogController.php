<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/catalog', name: 'app_catalog')]
    public function catalog(): Response
    {
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('catalog/index.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }
}
