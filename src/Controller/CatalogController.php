<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }

    #[Route('/subcategory', name: 'app_subcatalog')]
    public function subcategory(): Response
    {
        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'CatalogController',
        ]);
    }
}
