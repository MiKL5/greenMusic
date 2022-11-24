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
        $categories = $repo->findAll();

        return $this->render('catalog/category.html.twig', [
            'controller_name' => 'category',
            'categories' => $categories
        ]);
    }

    #[Route('/subcategory', name: 'app_subcategory')]
    public function subcategory(): Response
    {
        return $this->render('catalog/subcategory.html.twig', [
            'controller_name' => 'subcategory',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('catalog/product.html.twig', [
            'controller_name' => 'product',
        ]);
    }
}
