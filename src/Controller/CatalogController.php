<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;


class CatalogController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        $category = $repoCatalogue->findAll();

        return $this->render('catalog/category.html.twig', [
            'category' => $category
        ]);
    }

    #[Route('/subcategory', name: 'app_subcategory')]
    public function subcategory(): Response
    {
        $subcategory = $repoCatalogue->findAll();

        return $this->render('catalog/subcategory.html.twig', [
            'subcategory' => 'subcategory',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        $product = $repoCatalogue->findAll();

        return $this->render('catalog/product.html.twig', [
            'product' => $product
        ]);
    }
}
