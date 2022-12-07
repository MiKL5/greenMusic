<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    #[Route('/add/{id}', name: 'app_add')]
    public function add(SessionInterface $session,  Product $id): Response
    {
        $cart = $session->get("panier", []);
        $cart[] = $id;
        $session->set("cart", $cart);
        return $this->redirect("/cart");
    }
    
    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        $cart = $session->get("cart", []);
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    #[Route('/clear', name: 'app_clear')]
    public function clear(SessionInterface $session): Response
    {
        $panier = $session->set("cart", []);
        return $this->redirect("/cart");
    }
}
