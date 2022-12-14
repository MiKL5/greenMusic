<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/category/{id}', name: 'app_category')]
    public function category(Category $id): Response
    {
        return $this->render('catalog/category.html.twig', [
            'category' => $id,
        ]);
    }

    #[Route('/subcategory', name: 'app_subcategory')]
    public function subcategory(): Response
    {
        return $this->render('catalog/subcategory.html.twig', [
            'controller_name' => 'SubCategoryController',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('catalog/product.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
