<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\SubcategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CatalogController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(CategoryRepository $categoryRepository): Response
    {
        return $this->render('catalog/category.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/subcategory', name: 'app_subcategory')]
    public function subcategory(SubcategoryRepository $subcategoryRepository): Response
    {
        $subcategory = $subcategoryRepository->findAll();

        return $this->render('catalog/subcategory.html.twig', [
            'subcategories' => 'subcategory',
        ]);
    }

    #[Route('/product', name: 'app_product')]
    public function product(ProductRepository $productRepository): Response
    {
        return $this->render('catalog/product.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }
}
